<?php

use Illuminate\Database\Seeder;
use App\Admin;

class DummyAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminData = [
            [
                'name' => 'Admin User',
                'email' => 'adminuser@gmail.com',
                'password' => bcrypt('07070707'),
            ],
        ];

        foreach ($adminData as $key => $val) {
            Admin::create($val);
        }
    }
}
