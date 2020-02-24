<?php

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desc_data = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $post_categories = [
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
            [
                'name' => 'Shoe',
                'slug' => 'shoe',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
            [
                'name' => 'Wear',
                'slug' => 'wear',
                'description' => $desc_data,
                'image' =>'https://themes.envytheme.com/startp/wp-content/uploads/2019/06/t-shart2-1-4.jpg',
            ],
        ];
        DB::table('post_categories')->insert($post_categories);
    }
}
