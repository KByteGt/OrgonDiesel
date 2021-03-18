<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('product_families')->insert([
            'name' => 'Inyección Diesel',
            'url' => 'inyections',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //2
        DB::table('product_families')->insert([
            'name' => 'Turbos',
            'url' => 'turbos',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //3
        DB::table('product_families')->insert([
            'name' => 'Lubricantes',
            'url' => 'lubricants',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        echo ' -> Families loaded...\n';
    }
}
