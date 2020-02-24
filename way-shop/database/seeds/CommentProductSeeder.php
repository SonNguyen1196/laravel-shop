<?php

use Illuminate\Database\Seeder;

class CommentProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment_prds_data = [
            [
                'product_id' => '1',
                'user_id' => '2',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
            [
                'product_id' => '3',
                'user_id' => '2',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
            [
                'product_id' => '4',
                'user_id' => '3',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
            [
                'product_id' => '1',
                'user_id' => '2',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
            ],
        ];
        DB::table('comment_prds')->insert($comment_prds_data);
    }
}
