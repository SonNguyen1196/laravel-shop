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
        $user_data = [
            [
                'name' => 'admin',
                'email' => 'ngocsonytb2016@gmail.com',
                'phone' => '0961090061',
                'password' => Hash::make('@Son0961090061'),
                'address' =>'43 An Nhon, P17, Go Vap',
                'city' =>'Ho Chi Minh',
                'status' =>'1',
                'image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
            ],
            [
                'name' => 'Son Nguyen',
                'email' => Str::random(10).'@gmail.com',
                'phone' => '0961090062',
                'password' => Hash::make('password'),
                'address' =>'78 Thang Long, Tan Binh',
                'city' =>'Ho Chi Minh',
                'status' =>'1',
                'image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
            ],
            [
                'name' => 'Thu Hien',
                'email' => Str::random(10).'@gmail.com',
                'phone' => '0961090063',
                'password' => Hash::make('password'),
                'address' =>'1D Nguyen Duy, Binh Thanh',
                'city' =>'Ho Chi Minh',
                'status' =>'0',
                'image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
            ],
            [
                'name' => 'Hoang Lam',
                'email' => 'writer@gmail.com',
                'phone' => '0961090064',
                'password' => Hash::make('@Son0961090061'),
                'address' =>'1D Phan Huy Ich, Q.Tân Bình',
                'city' =>'Ho Chi Minh',
                'status' =>'1',
                'image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
            ]
        ];
        DB::table('users')->insert($user_data);

    }
}
