<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'brand_id' => 1,
                'category_id' => 1,
                'item_name' => 'Blue Shirt',
                'item_price' => 100000,
                'description' => 'HoshHosh\'s blue shirt is the best-imported shirt on "Top Reseller". This item can be ordered with minimum order > 5 pieces. If you want to order more than 10 pieces, please reach out through our contact (on the "About Us" page)'
            ],
            [
                'brand_id' => 2,
                'category_id' => 4,
                'item_name' => 'Black Dress',
                'item_price' => 400000,
                'description' => 'The Maximal black dress features a flattering A line silhouette that hugs your curves in all the right places, while still allowing for comfortable movement. '
            ],
            [
                'brand_id' => 3,
                'category_id' => 3,
                'item_name' => 'Floral Shoes',
                'item_price' => 300000,
                'description' => 'The Pulu Floral Shoes feature a unique floral print that is sure to turn heads and add a touch of whimsy to your wardrobe.'
            ],
            [
                'brand_id' => 4,
                'category_id' => 3,
                'item_name' => 'Running Shoes',
                'item_price' => 350000,
                'description' => 'The Adadah Running Shoes feature a sleek and modern design, available in a range of colors to suit your personal style.'
            ],
            [
                'brand_id' => 5,
                'category_id' => 1,
                'item_name' => 'Hawai Shirt',
                'item_price' => 200000,
                'description' => 'The Hawee Hawai Shirt features a unique and vibrant Hawai print that is sure to turn heads and add a tropical touch to your outfit.'
            ],
            [
                'brand_id' => 7,
                'category_id' => 4,
                'item_name' => 'Jeans Dress',
                'item_price' => 750000,
                'description' => 'The New Jeans Jeans Dress features a classic and timeless design, with a fitted waist and flared skirt that flatters your curves and accentuates your figure.'
            ],
            [
                'brand_id' => 8,
                'category_id' => 2,
                'item_name' => 'Canvas Bag',
                'item_price' => 400000,
                'description' => 'The Minimal Canvas Bag features a simple and elegant design, with clean lines and a muted color palette that complements any outfit.'
            ]
            
        ];
        foreach ($items as $item) {
            DB::table('items')->insert($item);
        }
    }
}
