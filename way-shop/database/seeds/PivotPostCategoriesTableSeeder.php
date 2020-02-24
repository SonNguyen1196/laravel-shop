<?php

use Illuminate\Database\Seeder;

class PivotPostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pivot_post_categories = [
            [
                'post_id' => '1',
                'post_categories_id' => '2',
            ],
            [
                'post_id' => '1',
                'post_categories_id' => '3',
            ],
            [
                'post_id' => '3',
                'post_categories_id' => '1',
            ],
            [
                'post_id' => '2',
                'post_categories_id' => '2',
            ],
        ];
        DB::table('pivot_post_categories')->insert($pivot_post_categories);
    }
}
