<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Berita::factory(5)->create();


    //    DB::table('users')->insert([
    //         'name' => "Anmar Fadhlan",
    //         'email' => "anmarfadhlan@gmail.com",
    //         'password' => Hash::make('Admin134'),
    //          ]);

    }
}
