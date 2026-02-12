<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Farhan Esha Putra',
            'username' => strtolower(str_replace(' ', '', 'Farhan Esha Putra')) . 132,
            'email' => strtolower('FarhanEshaPutra132') . '@example.com',
            'password' => Hash::make('plmoki09'),
        ]);

        User::factory(12)->create();
    }
}
