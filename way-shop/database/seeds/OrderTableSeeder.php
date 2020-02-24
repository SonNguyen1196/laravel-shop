<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'customer_id' => '1',
                'date_order' => '20-2-2020',
                'status' => 0,
                'payment' => 'shipping',
                'price_toatal' => '300000'
            ],
            [
                'customer_id' => '2',
                'date_order' => '22-11-2019',
                'status' => 1,
                'payment' => 'online',
                'price_toatal' => '200000'
            ],
            [
                'customer_id' => '3',
                'date_order' => '22-12-2019',
                'status' => 1,
                'payment' => 'online',
                'price_toatal' => '10000000'
            ],
            [
                'customer_id' => '1',
                'date_order' => '22-12-2019',
                'status' => 1,
                'payment' => 'online',
                'price_toatal' => '600000'
            ],
        ];
        DB::table('orders')->insert($orders);
    }
}
