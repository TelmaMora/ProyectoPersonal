<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [[
            'name' => 'Telma Mora',
            'email' => 'L16650249@zitacuaro.tecnm.mx',
            'password' => '123456'
        ]];

        foreach ($users AS $user) {
            \App\Models\User::create($user);

        }

    }
}
