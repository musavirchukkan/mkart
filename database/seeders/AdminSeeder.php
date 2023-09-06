<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'first_name'  =>  'Abdul Musavir',
            'last_name'  =>  'Chukkan',
            'username'  =>  'musavir',
            'email' => 'a.musavir@axeltechnologies.com',
            'password'  =>  bcrypt('test123'),
        ]);
    }
}
