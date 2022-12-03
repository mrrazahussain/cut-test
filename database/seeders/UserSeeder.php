<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use MongoDB\BSON\ObjectId;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            [
                "_id" => new ObjectId('633ebdae586cbf50cb094542'),
                "fname" => "Admin",
                "lname" => "Admin",
                "photo" => null,
                "email" => "admin@admin.com",
                "mobile" => "03044798250",
                "laborcontract" => null,
                "emiratesid" => null,
                "passport" => null,
                'password' => Hash::make('password'),
                "address" => 12345,
                "role" => 0,
                "status" => 0,
                "updated_at" => "1665056174282",
                "created_at" => "1665056174282",
            ]
        ];
        DB::table('users')->insert($users);
    }
}
