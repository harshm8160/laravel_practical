<?php

use Illuminate\Database\Seeder;
use App\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Regular User',
                'email' => 'reguser@gmail.com',
                'password' => bcrypt('07070707'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
