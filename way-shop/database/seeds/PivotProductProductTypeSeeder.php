<?php

use Illuminate\Database\Seeder;

class PivotProductProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_product_types = [
            [
                'product_id' => '1',
                'product_type_id' => '2',
            ],
            [
                'product_id' => '1',
                'product_type_id' => '4',
            ],
            [
                'product_id' => '3',
                'product_type_id' => '2',
            ],
            [
                'product_id' => '2',
                'product_type_id' => '2',
            ],
        ];
        DB::table('product_product_types')->insert($product_product_types);
    }
}
