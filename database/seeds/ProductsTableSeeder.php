<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;
use App\Supplier;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $products = json_decode(file_get_contents(database_path().'/products.json'), True);

        $timestamp = Carbon::now()->subDays(count($products));

        $suppliers = Supplier::all();

        foreach($products as $sku => $product) {

            $timestampForThisProduct = $timestamp->addDay()->toDateTimeString();

            Product::insert([
                'created_at' => $timestampForThisProduct,
                'updated_at' => $timestampForThisProduct,
                'sku' => $product['sku'],
                'title' => $product['title'],
                'brand' => $product['brand'],
                'description' => $product['description'],
                'image' => $product['image'],
                'price' => $product['price'],
                'condition' => $product['condition'],
                'supplier_id' => rand(1, count($suppliers)),
            ]);
        }
    }
}
