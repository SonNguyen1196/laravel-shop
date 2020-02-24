<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProductTypeTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CommentProductSeeder::class);
        $this->call(PivotProductProductTypeSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentPostTableSeeder::class);
        $this->call(PivotPostCategoriesTableSeeder::class);
    }
}
