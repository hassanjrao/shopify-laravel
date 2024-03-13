<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=Product::create([
            'name'=>'Hoodie',
            'price'=>100,
            'description'=>'This is a hoodie',
            'product_category_id'=>1,
            'sizes'=>json_encode(['S','M','L','XL']),
        ]);

        // product images
        $product->images()->createMany([
            ['path'=>'/images/hoodie1.jpg'],
            ['path'=>'/images/hoodie2.jpg'],
            ['path'=>'/images/hoodie3.jpg'],
        ]);
    }
}
