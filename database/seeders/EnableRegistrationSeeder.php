<?php

namespace Database\Seeders;

use App\Models\EnableRegistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnableRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnableRegistration::create([
            'is_registration_enabled' => true,
        ]);
    }
}
