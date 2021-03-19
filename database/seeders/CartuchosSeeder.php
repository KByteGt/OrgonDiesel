<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartuchosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Category: Cartuchos, ID: 6 */
        /// Product: OD-19000
        DB::table('turbos')->insert([
            'code' => 'OD-19000',
            'description' => 'Cartucho / Centro',
            'model' => 'GT37',
            'application' => 'Navistar / International DT466, I530 7.7L',
            'year' => '2003 --',
            'image' => '/products/turbos/OD-19000.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19000',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19001
        DB::table('turbos')->insert([
            'code' => 'OD-19001',
            'description' => 'Cartucho / Centro',
            'model' => 'H2E',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19001.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19001',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19002
        DB::table('turbos')->insert([
            'code' => 'OD-19002',
            'description' => 'Cartucho / Centro',
            'model' => 'GT45',
            'application' => 'Detroit S60 14L EGR VGT',
            'year' => '2007 --',
            //'image' => '/products/turbos/OD-19002',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19002',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19003
        DB::table('turbos')->insert([
            'code' => 'OD-19003',
            'description' => 'Cartucho / Centro',
            'model' => 'TB25',
            'application' => 'Isuzu NPR, NQR 3.9L',
            'year' => '1994 - 1998',
            'image' => '/products/turbos/OD-19003.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19003',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19004
        DB::table('turbos')->insert([
            'code' => 'OD-19004',
            'description' => 'Cartucho / Centro',
            'model' => 'BHT3B',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19004.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19004',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19005
        DB::table('turbos')->insert([
            'code' => 'OD-19005',
            'description' => 'Cartucho / Centro',
            'model' => 'CT16',
            'application' => 'Toyota Hilux, Land Cruiser 2.5L - 2KD-FTV',
            'year' => '2001 --',
            'image' => '/products/turbos/OD-19005.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19005',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19006
        DB::table('turbos')->insert([
            'code' => 'OD-19006',
            'description' => 'Cartucho / Centro',
            'model' => 'CT9',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19006.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19006',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19007
        DB::table('turbos')->insert([
            'code' => 'OD-19007',
            'description' => 'Cartucho / Centro',
            'model' => 'GT42',
            'application' => 'Detroit S60 12.7L',
            'year' => '1997-2002',
            'image' => '/products/turbos/OD-19007.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19007',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19008
        DB::table('turbos')->insert([
            'code' => 'OD-19008',
            'description' => 'Cartucho / Centro',
            'model' => 'TB25',
            'application' => 'Isuzu NPR 3.9L ',
            'year' => '1988 - 1994',
            'image' => '/products/turbos/OD-19008.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19008',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19009
        DB::table('turbos')->insert([
            'code' => 'OD-19009',
            'description' => 'Cartucho / Centro',
            'model' => 'RHF4',
            'application' => 'Mitsubishi L200  2.5 Di-D',
            'year' => '2006 -- ',
            'image' => '/products/turbos/OD-19009.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19009',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19010
        DB::table('turbos')->insert([
            'code' => 'OD-19010',
            'description' => 'Cartucho / Centro',
            'model' => 'HT3B',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19010.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19010',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19011
        DB::table('turbos')->insert([
            'code' => 'OD-19011',
            'description' => 'Cartucho / Centro',
            'model' => 'RHV4',
            'application' => 'Mazda BT50 3.0L / Ford Ranger 3.0L',
            'year' => '2006 --',
            'image' => '/products/turbos/OD-19011.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19011',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19012
        DB::table('turbos')->insert([
            'code' => 'OD-19012',
            'description' => 'Cartucho / Centro',
            'model' => 'HX30',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19012.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19012',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19013
        DB::table('turbos')->insert([
            'code' => 'OD-19013',
            'description' => 'Cartucho / Centro',
            'model' => 'HX35W',
            'application' => 'Cummins 6BT 5.9L',
            'year' => '1994 --',
            'image' => '/products/turbos/OD-19013.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19013',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19014
        DB::table('turbos')->insert([
            'code' => 'OD-19014',
            'description' => 'Cartucho / Centro',
            'model' => 'HX50',
            'application' => 'Cummins L10, MV1',
            'year' => '1991 --',
            'image' => '/products/turbos/OD-19014.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19014',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19015
        DB::table('turbos')->insert([
            'code' => 'OD-19015',
            'description' => 'Cartucho / Centro',
            'model' => 'CT16',
            'application' => 'Toyota Hiace / Land Cruiser 2.5L - 2KD-FTV',
            'year' => '2002 --',
            'image' => '/products/turbos/OD-19015.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19015',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19016
        DB::table('turbos')->insert([
            'code' => 'OD-19016',
            'description' => 'Cartucho / Centro',
            'model' => 'TF035',
            'application' => 'Mitsubishi Canter / Fuso  2.8L',
            'year' => '1971 - 1972',
            'image' => '/products/turbos/OD-19016.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19016',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19017
        DB::table('turbos')->insert([
            'code' => 'OD-19017',
            'description' => 'Cartucho / Centro',
            'model' => 'K27',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19017.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19017',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19018
        DB::table('turbos')->insert([
            'code' => 'OD-19018',
            'description' => 'Cartucho / Centro',
            'model' => 'HY35W',
            'application' => 'Cummins ISB 5.9L',
            'year' => '2003 - 2007',
            'image' => '/products/turbos/OD-19018.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19018',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19019
        DB::table('turbos')->insert([
            'code' => 'OD-19019',
            'description' => 'Cartucho / Centro',
            'model' => 'RHB7',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19019.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19019',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19020
        DB::table('turbos')->insert([
            'code' => 'OD-19020',
            'description' => 'Cartucho / Centro',
            'model' => 'GTB22',
            'application' => 'Mazda BT50 Pro 3.2L / Ford Ranger, Transit 3.2L',
            'year' => '2011 --',
            'image' => '/products/turbos/OD-19020.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19020',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19021
        DB::table('turbos')->insert([
            'code' => 'OD-19021',
            'description' => 'Cartucho / Centro',
            'model' => 'JK55',
            'application' => 'JAC',
            'year' => '2010 - 2012',
            'image' => '/products/turbos/OD-19021.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19021',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19022
        DB::table('turbos')->insert([
            'code' => 'OD-19022',
            'description' => 'Cartucho / Centro',
            'model' => 'S100',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19022.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19022',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19023
        DB::table('turbos')->insert([
            'code' => 'OD-19023',
            'description' => 'Cartucho / Centro',
            'model' => 'S200',
            //'application' => '',
            //'year' => '',
            //'image' => '/products/turbos/OD-19023',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19023',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19024
        DB::table('turbos')->insert([
            'code' => 'OD-19024',
            'description' => 'Cartucho / Centro',
            'model' => 'GT20',
            'application' => 'Ford Ranger 2.8L',
            'year' => '2001 --',
            'image' => '/products/turbos/OD-19024.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19024',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19025
        DB::table('turbos')->insert([
            'code' => 'OD-19025',
            'description' => 'Cartucho / Centro',
            'model' => 'S400',
            //'application' => '',
            //'year' => '',
            'image' => '/products/turbos/OD-19025.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19025',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19026
        DB::table('turbos')->insert([
            'code' => 'OD-19026',
            'description' => 'Cartucho / Centro',
            'model' => 'TD025',
            'application' => 'Hyundai Santa Fe, Tucson / Kia Carens 2.0L',
            'year' => '2000 - 2008',
            'image' => '/products/turbos/OD-19026.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19026',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19027
        DB::table('turbos')->insert([
            'code' => 'OD-19027',
            'description' => 'Cartucho / Centro',
            'model' => 'TD04',
            'application' => 'Mitsubishi L300, Wagon, Delica 2.5L',
            'year' => '1993 --',
            'image' => '/products/turbos/OD-19027.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19027',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19028
        DB::table('turbos')->insert([
            'code' => 'OD-19028',
            'description' => 'Cartucho / Centro',
            'model' => 'TF035',
            'application' => 'Mitsubishi L200, W200, Pajero III 2.5L TDI',
            'year' => '2001 --',
            'image' => '/products/turbos/OD-19028.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19028',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19029
        DB::table('turbos')->insert([
            'code' => 'OD-19029',
            'description' => 'Cartucho / Centro',
            'model' => 'CT16V',
            'application' => 'Toyota Hilux / Prado 3.0L - 1KD-FTV (VGT)',
            'year' => '2006 --',
            'image' => '/products/turbos/OD-19029.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19029',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19030
        DB::table('turbos')->insert([
            'code' => 'OD-19030',
            'description' => 'Cartucho / Centro',
            'model' => 'RHF5',
            'application' => 'Mazda BT50, B2500 2.5L',
            'year' => '1996 --',
            'image' => '/products/turbos/OD-19030.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19030',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19031
        DB::table('turbos')->insert([
            'code' => 'OD-19031',
            'description' => 'Cartucho / Centro',
            'model' => 'GT17',
            'application' => 'Kia Sorento 2.5L CRDi ',
            'year' => '2002 - 2006',
            'image' => '/products/turbos/OD-19031.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19031',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19032
        DB::table('turbos')->insert([
            'code' => 'OD-19032',
            'description' => 'Cartucho / Centro',
            'model' => 'GT17',
            'application' => 'Hyundai H100, Porter, H1 2.5L',
            'year' => '2001 - 2007',
            //'image' => '/products/turbos/OD-19032',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19032',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19033
        DB::table('turbos')->insert([
            'code' => 'OD-19033',
            'description' => 'Cartucho / Centro',
            'model' => 'HX55',
            'application' => 'Cummins M11 / ISM',
            'year' => '1999 - 2009 / 2007 - 2012',
            //'image' => '/products/turbos/OD-19033',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19033',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19034
        DB::table('turbos')->insert([
            'code' => 'OD-19034',
            'description' => 'Cartucho / Centro',
            'model' => 'TO4E',
            'application' => 'Navistar DT360 5.9L',
            'year' => '1991 --',
            //'image' => '/products/turbos/OD-19034',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19034',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19035
        DB::table('turbos')->insert([
            'code' => 'OD-19035',
            'description' => 'Cartucho / Centro',
            'model' => 'GT20',
            'application' => 'Nissan Navara 2.5L Euro III, Euro IV',
            'year' => '2005 --',
            //'image' => '/products/turbos/OD-19035',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19035',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19036
        DB::table('turbos')->insert([
            'code' => 'OD-19036',
            'description' => 'Cartucho / Centro',
            'model' => 'GT42',
            'application' => 'Caterpillar C15 / 3406',
            'year' => '1998 - 2013',
            //'image' => '/products/turbos/OD-19036',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19036',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19037
        DB::table('turbos')->insert([
            'code' => 'OD-19037',
            'description' => 'Cartucho / Centro',
            'model' => 'GT37',
            'application' => 'Navistar / International DT466, DT408',
            'year' => '1993 - 2006',
            //'image' => '/products/turbos/OD-19037',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19037',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19038
        DB::table('turbos')->insert([
            'code' => 'OD-19038',
            'description' => 'Cartucho / Centro',
            'model' => 'TD05',
            'application' => 'Mitsubishi Fuso / Hyundai Mighty II, County / Kia Combi 3.9L',
            'year' => '2000 --',
            //'image' => '/products/turbos/OD-19038',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19038',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19039
        DB::table('turbos')->insert([
            'code' => 'OD-19039',
            'description' => 'Cartucho / Centro',
            'model' => 'GTB16',
            'application' => 'Hyundai Santa Fe, Tucson / Kia Sportage 2.0L ',
            'year' => '2005 --',
            //'image' => '/products/turbos/OD-19039',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19039',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19040
        DB::table('turbos')->insert([
            'code' => 'OD-19040',
            'description' => 'Cartucho / Centro',
            'model' => 'GT17',
            'application' => 'Hyundai Mighty / County 3.3L',
            'year' => '2000 --',
            //'image' => '/products/turbos/OD-19040',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19040',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19041
        DB::table('turbos')->insert([
            'code' => 'OD-19041',
            'description' => 'Cartucho / Centro',
            'model' => 'GT18',
            'application' => 'Mercedes Benz Sprinter, Viano, Vito 2.2',
            'year' => '1996 - 2008',
            //'image' => '/products/turbos/OD-19041',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19041',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19042
        DB::table('turbos')->insert([
            'code' => 'OD-19042',
            'description' => 'Cartucho / Centro',
            'model' => 'HX40W',
            'application' => 'Cummins 6CT/6CTA/C300 8.3L',
            'year' => '2003 - 2009',
            //'image' => '/products/turbos/OD-19042',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19042',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-19043
        DB::table('turbos')->insert([
            'code' => 'OD-19043',
            'description' => 'Cartucho / Centro',
            'model' => 'GT35',
            'application' => 'Hino FD, FE, FF, GC, SG  J08C-TI 7.9L',
            'year' => '1997 - 2004',
            //'image' => '/products/turbos/OD-19043',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-19043',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /*  Category: Actuador, ID: 11*/
        /// Product: OD-21040
        DB::table('turbos')->insert([
            'code' => 'OD-21040',
            'description' => 'Valvula',
            'model' => 'GT42',
            'application' => 'Detroit S60 12.7L',
            'year' => '1997-2002',
            //'image' => '/products/turbos/',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-21040',
            'family_id' => 2,
            'category_id' => 11,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        echo ' -> Loader cartuchos... ';
    }
}
