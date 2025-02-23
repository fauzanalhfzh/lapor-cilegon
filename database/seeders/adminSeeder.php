<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Laporin',
            'email' => 'admin@laporin.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('admin');
    }
}
