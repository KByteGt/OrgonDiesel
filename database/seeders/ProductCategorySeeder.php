<?php

namespace Database\Seeders;

use App\Models\Product_category;
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
        /*DB::table('product_category')->insert([
            'name' => Str::random(10)
        ]);*/

        Product_category::factory()
            ->count(4)
            ->create();
    }
}
