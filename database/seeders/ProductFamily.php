<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductFamily extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_families')->insert([
            'name' => 'Inyección Diesel',
            'url' => 'inyection',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('product_families')->insert([
            'name' => 'Turbos',
            'url' => 'turbos',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('product_families')->insert([
            'name' => 'Lubricantes',
            'url' => 'lubricants',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}