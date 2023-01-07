<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'lastName'=>'Super Admin',
            'firstName'=>'Administrator',
            'email'=>'super.admin@zechamus.com',
            'role'=>2,
            'email_verified_at' => now(),
            'gender' => 'male',
            'password' => Hash::make('05083119c'),
            'remember_token' => Str::random(10),
        ]);
    }
}
