<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'role_id' => Role::firstWhere('code', 'admin')->id,
            'name' => 'Admin',
            'email' => 'admin@web.com',
            'phone' => '1111111111',
            'dob' => '2001-01-01',
            'password' => Hash::make('123456'),
        ]);
    }
}
