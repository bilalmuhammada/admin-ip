<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Roles = array(
            array('name' => 'Admin', 'code' => 'admin'),
            array('name' => 'influencer', 'code' => 'influencer'),
            array('name' => 'Buyer', 'code' => 'buyer'),
            array('name' => 'Seller', 'code' => 'seller'),
            array('name' => 'Vendor', 'code' => 'vendor'),
        );

        Role::insert($Roles);
    }
}
