<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "tee22ee2",
            "email" => "test222e@gmail.com",
            "password" => Hash::make("1232456"),
        ]);

        DB::table('addresses')->insert([
           "address" => "teeee22",
        ]);
    }
}
