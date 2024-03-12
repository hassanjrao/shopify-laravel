<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name'=>'HOODIES/SWEATERS'
        ]);

        ProductCategory::create([
            'name'=>'PANTS'
        ]);


        ProductCategory::create([
            'name'=>'ACCESSORIES'
        ]);


        ProductCategory::create([
            'name'=>'BEANIES/CAPS'
        ]);


        ProductCategory::create([
            'name'=>'CORE'
        ]);


        ProductCategory::create([
            'name'=>'JACKETS'
        ]);


        ProductCategory::create([
            'name'=>'SHIRTS'
        ]);


    }
}
