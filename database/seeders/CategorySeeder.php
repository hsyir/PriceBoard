<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories= [
            "ماکیان",
            "گوسفندی",
            "گوشت قرمز",
            "ماهی ها",
            "فانتزی",
        ];

        foreach ($categories as $category) {

            Category::create([
                "name"=>$category,
            ]);

        }
    }
}
