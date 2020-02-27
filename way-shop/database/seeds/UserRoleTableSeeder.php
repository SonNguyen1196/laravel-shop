<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_data = [
            [
                'name' => 'admin',
                'display_name' => 'Admin',
            ],
            [
                'name' => 'writer',
                'display_name' => 'Writer',
            ],
            [
                'name' => 'subscriber',
                'display_name' => 'Subscriber',
            ]

        ];
        DB::table('roles')->insert($roles_data);
    }
}
