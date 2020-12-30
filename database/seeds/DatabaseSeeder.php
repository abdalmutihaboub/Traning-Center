<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // insert Fake data to table


        DB::table('companies')->insert(['name' => "Company 1", 'created_at' => now()]);
        DB::table('companies')->insert(['name' => "Company 2", 'created_at' => now()]);
        DB::table('companies')->insert(['name' => "Company 3", 'created_at' => now()]);
        DB::table('companies')->insert(['name' => "Company 4", 'created_at' => now()]);


        DB::table('specialties')->insert(['name' => "IT", 'created_at' => now()]);
        DB::table('specialties')->insert(['name' => "DT", 'created_at' => now()]);


        DB::table('users')->insert([
            "name" => "abd",
            "email" => "abd@haboub",
            "password" => '$2y$10$F6qgEnGfdKncSgldWYchRerE4HjeI6lm1Zg7u8QPRFrsJSmk70Ava',
            "role" => 0,
        ]);
    }
}
