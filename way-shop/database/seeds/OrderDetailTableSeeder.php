<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_detail = [
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 5,
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 2,
            ],
            [
                'order_id' => 3,
                'product_id' => 2,
                'quantity' => 10,
            ],
            [
                'order_id' => 4,
                'product_id' => 5,
                'quantity' => 9,
            ],
        ];
        DB::table('order_detail')->insert($order_detail);
    }
}
