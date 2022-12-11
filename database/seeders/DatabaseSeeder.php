<?php

namespace Database\Seeders;

use App\Models\Company;
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
        // \App\Models\Post::factory(20)->create();

        // User::find(1)->update([
        //     'name' => 'Xiajun',
        //     'email' => '123@123.com'
        // ]);

        $this->call([
            UserSeeder::class,
        ]);
    }
}
