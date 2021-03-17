<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lubricants, ID = 3
        DB::table('product_categories')->insert([
            'family_id' => 3,
            'active' => true,
            'name' => 'Motocicletas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 3,
            'active' => true,
            'name' => 'Vehículos livianos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 3,
            'active' => true,
            'name' => 'Vehículos semi pesados y pesados',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 3,
            'active' => true,
            'name' => 'Refrigerantes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Turbos, ID = 2

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Turbos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Cartuchos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Kit de reparación',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Ejes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Turbina de compresión',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Platos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'family_id' => 2,
            'active' => true,
            'name' => 'Actuadores',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Inyección Diesel, ID = 1
    }
}
