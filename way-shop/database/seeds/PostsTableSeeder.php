<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desc_data = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $short_desc_data = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ';
        $post_data = [
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'user_id' => 1,
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-2',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'user_id' => 2,
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-3',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'user_id' => 3,
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-4',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'user_id' => 2,
            ],
            
        ];
        DB::table('posts')->insert($post_data);
    }
}
