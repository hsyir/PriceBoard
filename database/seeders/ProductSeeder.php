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
        $productsName = [
            "گوشت گوساله",
            "گوست گوسفند",
            "سردست",
            "بزغاله",
            "مرغ",
            "ران مرغ",
            "سینه مرغ",
            "دنده گوساله",
            "دنبه",
            "ماهی",
        ];

        foreach ($productsName as $productName) {

            Product::create([
                "name"=>$productName,
                "price"=>random_int(1000000,9999999),
                "unit"=>"کیلو",
            ]);

        }
    }
}
