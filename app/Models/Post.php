<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $casts = [
        'state' => PostState::class
    ];

    protected $guarded = [];

    // protected $appends = [
    //     'path'
    // ];

    #[SearchUsingFullText('body')]
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    // public function path(): Attribute
    // {
    //     return Attribute::get(fn() => route('posts.show', $this));
    //     // return new Attribute(fn() => route('posts.show', $this));
    // }

    // public function getPathAttribute()
    // {
    //     return route('posts.show', $this);
    // }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
