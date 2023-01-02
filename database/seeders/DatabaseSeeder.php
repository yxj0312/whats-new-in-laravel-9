<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Login;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed for old stuffs
        // \App\Models\Post::factory(20)->create();

        // User::find(1)->update([
        //     'name' => 'Xiajun',
        //     'email' => '123@123.com'
        // ]);

        // Seeder for L1
        // $this->call([
        //     UserSeeder::class,
        // ]);
        
        // Seeder for L2
        // User::factory(20)->create()->each(fn ($user) => $user->posts()
        //     ->createMany(Post::factory(20)->make()->toArray())
        // );

        // Seeder for L3
        // User::factory(60)->create()->each(fn ($user) => $user->logins()
        //     ->createMany(Login::factory(20)->make()->toArray())
        // );

        $this->call([
            FeatureSeeder::class,
        ]);
    }
}
