<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('12345678'),
                'usertype' => 'admin'
            ],
            [
                'name' => 'Perusahaan',
                'email' => 'perusahaan@gmail.com',
                'password' => \Hash::make('12345678'),
                'usertype' => 'user'
            ],
            [
                'name' => 'qori',
                'email' => 'qori@gmail.com',
                'password' => \Hash::make('12345678'),
                'usertype' => 'pengguna'
            ],
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
