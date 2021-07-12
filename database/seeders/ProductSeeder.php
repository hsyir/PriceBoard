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
            "سردست",
            "فیله گوسفند",
            "ران مرغ",
            "الدنگ پاچنار",
            "گله پاچه",
            "اصغر میر شکار",
            "سر و دست کله",
            "ماهی",
            " گوشت گوساله",
            "گوست گوسفند ",
            "سردست و دست پوست کند ",
            "بزغاله ",
            " مرغ",
            " ران مرغ",
            " سینه مرغ",
            " دنده گوساله",
            " دنبه",
            " ماهی",
            " سردست",
            "فیله گوسفند ",
            "ران مرغ ",
            "الدنگ پاچنار ",
            "گله پاچه ",
            " اصغر میر شکار",
            "سر و دست کله ",
            " ماهی",
            "الدنگ  پاچنار ",
            "گله  پاچه ",
            " اصغر  میر شکار",
            "سر و  دست کله ",
            "  ماهی",
        ];

        foreach ($productsName as $productName) {

            $categoryId = random_int(1,5);
            Product::create([
                "name"=>$productName,
                "price"=>random_int(10,200) * 1000,
                "unit"=>"کیلو",
                "category_id"=>$categoryId,
                "order"=>($categoryId*10) + random_int(1,9)
            ]);

        }
    }
}
