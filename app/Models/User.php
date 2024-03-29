<?php

namespace App\Models;

use Attribute;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function username(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    public function posts()
    {
        // return $this->hasMany(Post::class);
        return $this->hasMany(Post::class, 'author_id');
    }

    public function company()
    {
        // dd('123');
        return $this->belongsTo(Company::class);
    }

    public function logins()
    {
        return $this->hasMany(Login::class);
    }

    // public function scopeWithLastLoginAt($query)
    // {
    //     $query->addSelect(['last_login_at' => Login::select('created_at')
    //             ->whereColumn('user_id', 'users.id')
    //             ->latest()
    //             ->take(1)
    //         ])
    //         ->withCasts(['last_login_at' => 'datetime']);
    // }

    // public function scopeWithLastLoginIpAddress($query)
    // {
    //     $query->addSelect(['last_login_ip_address' => Login::select('ip_address')
    //             ->whereColumn('user_id', 'users.id')
    //             ->latest()
    //             ->take(1)
    //         ]);
    // }

    public function lastLogin()
    {
        // return $this->hasMany(Login::class); 
        return $this->hasOne(Login::class)->latestOfMany();
    }

    // public function scopeWithLastLogin($query)
    // {
    //     $query->addSelect(['last_login_id' => Login::select('id')
    //         ->whereColumn('user_id', 'users.id')
    //         ->latest()
    //         ->take(1),
    //     ])->with('lastLogin');
    // }

    public function scopeSearch($query, string $terms = null)
    {
        // L9: join approach
        // $query->join('companies', 'companies.id', '=', 'users.company_id');

        // bill gates microsoft
        // with explode cant search like "bill gates microsoft corp" with no prefix wildcard
        // using "str_getcsv" we cant search it with "bill gates 'microsoft corp'"
        collect(str_getcsv($terms,' ','"' ))->filter()->each(function ($term) use ($query) {
            $term = $term.'%';
            // we need to check each keyword in isolation, which means we need to wrap it in the closure
            $query->where(function ($query) use ($term) {
                $query->where('first_name', 'like', $term)
                ->orWhere('last_name', 'like', $term)
                /* company name doesn't exist in the table
                orWhereHas accept relationship as first argument.
                and a closure as a second argument */
                // ->orWhereHas('company', function ($query) use ($term) {
                //     $query->where('name', 'like', $term);
                // });
                /* join approach (doesn't help):
                issue: we are linking the users and the company's tables together. 
                Both of these approaches require us to check the company ID against the user's company ID 
                As a result, the company table is become a dependency of the user's table
                */
                // ->orWhere('companies.name', 'like', $term);

                
                ->orWhereIn('company_id', Company::query()
                    ->where('name','like', $term)
                    ->pluck('id')
                );
                /* whereIn approach */
                ->orWhereIn('company_id',function($query) use ($term) {
                    $query->select('id')
                        ->from('companies')
                        ->where('name', 'like', $term);
                });
            });
        });
    }
}
