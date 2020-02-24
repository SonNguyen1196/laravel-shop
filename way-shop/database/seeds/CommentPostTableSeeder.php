<?php

use Illuminate\Database\Seeder;

class CommentPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment_posts = [
            [
                'post_id' => '1',
                'user_id' => '2',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
            [
                'post_id' => '3',
                'user_id' => '2',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
            [
                'post_id' => '4',
                'user_id' => '3',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
            [
                'post_id' => '1',
                'user_id' => '2',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
        ];
        DB::table('comment_posts')->insert($comment_posts);
    }
}
