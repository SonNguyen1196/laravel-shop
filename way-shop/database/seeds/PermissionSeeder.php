<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'user-list',
                'display_name' => 'List users',
            ],
            [
                'name' => 'user-add',
                'display_name' => 'Add User',
            ],
            [
                'name' => 'user-edit',
                'display_name' => 'Edit User',
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Delete User',
            ]

        ];
        DB::table('permissions')->insert($permissions);
    }
}
