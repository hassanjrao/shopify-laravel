<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $rows = $rows->forget(0);

        $categories = [
            'hoodie' => 1,
            'pants' => 2,
            'accessories' => 3,
            'caps' => 4,
            'beanies' => 4,
            'core' => 5,
            'jackets' => 6,
            'shirts' => 7,
        ];

        $exp = [];

        $latestRow = null;

        foreach ($rows as $row) {

            $handle = $row[0];
            $category_id = null;

            // if handle contains a word from the categories array, then get the category id
            foreach ($categories as $category => $id) {
                if (strpos($handle, $category) !== false) {
                    $category_id = $id;
                    break;
                }
            }


            if (!$category_id) {
                continue;
            }


            if ($row[1] != null) {
                $exp[$row[1]] = [

                    'name' => $row[1],
                    'sizes' => [$row[9]],
                    'price' => $row[20],
                    'description' => $row[1],
                    'product_category_id' => $category_id,
                    'images' => [$row[25]]
                ];

                $latestRow = $row[1];
            } else {
                if ($row[9]) {
                    $exp[$latestRow]['sizes'][] = $row[9];
                }
                if ($row[25]) {
                    $exp[$latestRow]['images'][] = $row[25];
                }
            }


            // $exp[]=[];




            // $data=[
            //     'name'=>$row[1],
            //     'sizes'=>[$row[9]],
            //     'price'=>$row[20],
            //     'description'=>$row[1],
            //     'product_category_id'=>$category_id,
            // ];

            // Log::info($data);

            // $product=Product::create($data);
        }



        foreach ($exp as $key => $value) {
            $product = Product::create([
                'name' => $value['name'],
                'sizes' => $value['sizes'],
                'price' => $value['price'],
                'description' => $value['description'],
                'product_category_id' => $value['product_category_id'],

            ]);



            foreach ($value['images'] as $image) {
                //make https to http
                $image = str_replace('https', 'http', $image);
                // remove the ?v= and everything after it
                $image = explode('?', $image)[0];
                $product->addMediaFromUrl($image)->toMediaCollection('images');

            }
        }
    }
}
