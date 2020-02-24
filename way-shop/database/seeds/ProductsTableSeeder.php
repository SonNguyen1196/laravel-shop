<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
        $product_data = [
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text',
                'sale_price' => '150000',
                'regular_price' =>'300000',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'image_gallary' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png, https://cdn.shopify.com/s/files/1/0012/3197/8551/products/Front_2048x.jpg, https://www.longislandbraiding.com/wp-content/uploads/2019/10/garment-product-photograph-13953r.jpg',
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-2',
                'sale_price' => '150000',
                'regular_price' =>'300000',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'image_gallary' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png, https://cdn.shopify.com/s/files/1/0012/3197/8551/products/Front_2048x.jpg, https://www.longislandbraiding.com/wp-content/uploads/2019/10/garment-product-photograph-13953r.jpg',
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-3',
                'sale_price' => '150000',
                'regular_price' =>'300000',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'image_gallary' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png, https://cdn.shopify.com/s/files/1/0012/3197/8551/products/Front_2048x.jpg, https://www.longislandbraiding.com/wp-content/uploads/2019/10/garment-product-photograph-13953r.jpg',
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-4',
                'sale_price' => '150000',
                'regular_price' =>'300000',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'image_gallary' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png, https://cdn.shopify.com/s/files/1/0012/3197/8551/products/Front_2048x.jpg, https://www.longislandbraiding.com/wp-content/uploads/2019/10/garment-product-photograph-13953r.jpg',
            ],
            [
                'name' => 'Contrary to popular belief, Lorem Ipsum is not simply random text',
                'slug' => 'contrary-to-popular-belief-lorem-ipsum-is-not-simply-random-text-5',
                'sale_price' => '150000',
                'regular_price' =>'300000',
                'short_desc' => $short_desc_data,
                'description' => $desc_data,
                'feature_image' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
                'image_gallary' =>'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png, https://cdn.shopify.com/s/files/1/0012/3197/8551/products/Front_2048x.jpg, https://www.longislandbraiding.com/wp-content/uploads/2019/10/garment-product-photograph-13953r.jpg',
            ],
        ];
        DB::table('products')->insert($product_data);
    }
}
