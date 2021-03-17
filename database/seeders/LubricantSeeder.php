<?php

namespace Database\Seeders;

use App\Models\Lubricant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LubricantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /// Producto:
        DB::table('lubricants')->insert([
           'code' => 'OD-4554',
           'description' => 'asdf',
            'presentation' => 'asdf',
            'detail' => 'asfdasfasfasdfasdf',
            'category_id' => 0,
            'image' => '/productos/asfasdf',
            'datasheet' => '/datasheets/asfdasdfasdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-4554',
            'family_id' => 0,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
