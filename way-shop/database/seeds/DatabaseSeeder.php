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
//        factory(App\User::class, 100)->create();
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
        $this->call(RoleTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(MediasTabelSeeder::class);
    }
}
