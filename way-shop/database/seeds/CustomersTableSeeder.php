<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'name' => 'Nguyen Ngoc Son',
                'email' => 'ngocsonytb2016@gmail.com',
                'phone' => '0961 090 061',
                'address' =>'43 An Nhon, P17, Go Vap',
            ],
            [
                'name' => 'Nguyen Thi Hien',
                'email' => 'thuhienvp1999@gmail.com',
                'phone' => '0969 766 487',
                'address' =>'43 An Nhon, P17, Go Vap',
            ],
            [
                'name' => 'Thinh Nguyen',
                'email' => 'thinhnguyen@gmail.com',
                'phone' => '0961 090 065',
                'address' =>'78/1 Cong Hoa',
            ]
        ];
        DB::table('customers')->insert($customers);
    }
}
