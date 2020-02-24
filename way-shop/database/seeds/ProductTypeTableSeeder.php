<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desc_data = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $product_type_data = [
            [
                'name' => 'Colther',
                'slug' => 'cother',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
            [
                'name' => 'Tshirt',
                'slug' => 'tshirt',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
            [
                'name' => 'Dress',
                'slug' => 'dress',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
            [
                'name' => 'Shoes',
                'slug' => 'shoes',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
        ];
        DB::table('product_types')->insert($product_type_data);
    }
}
