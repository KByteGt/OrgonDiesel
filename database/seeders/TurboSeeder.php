<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Category: Turbos, ID: 5*/
        /// Product: OD-18000
        DB::table('turbos')->insert([
            'code' => 'OD-18000',
            'description' => 'Turbo',
            'model' => 'HX55',
            'application' => 'VOLVO',
            //'year' => '',
            //'image' => '/products/turbos/OD-18000',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
           'code' => 'OD-18000',
           'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18001
        DB::table('turbos')->insert([
            'code' => 'OD-18001',
            'description' => 'Turbo',
            'model' => 'HX55',
            'application' => 'CUMMINS ISX',
            //'year' => '',
            //'image' => '/products/turbos/OD-18001',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18001',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18002
        DB::table('turbos')->insert([
            'code' => 'OD-18002',
            'description' => 'Turbo',
            'model' => 'BHT3B',
            'application' => 'CUMMINS',
            //'year' => '',
            //'image' => '/products/turbos/OD-18002',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18002',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18003
        DB::table('turbos')->insert([
            'code' => 'OD-18003',
            'description' => 'Turbo',
            'model' => 'GT42',
            'application' => 'Detroit S60 12.7L',
            'year' => '1997-2002',
            //'image' => '/products/turbos/OD-18003',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18003',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18004
        DB::table('turbos')->insert([
            'code' => 'OD-18004',
            'description' => 'Turbo',
            'model' => 'GT45',
            'application' => 'Detroit S60 14L EGR VGT',
            'year' => '2007 --',
            //'image' => '/products/turbos/OD-18004',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18004',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18005
        DB::table('turbos')->insert([
            'code' => 'OD-18005',
            'description' => 'Turbo',
            'model' => 'CT16',
            'application' => 'Toyota Hiace / Land Cruiser 2.5L - 2KD-FTV',
            'year' => '2002 --',
            //'image' => '/products/turbos/OD-18005',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18005',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product:
        DB::table('turbos')->insert([
            'code' => 'OD-18006',
            'description' => 'Turbo',
            'model' => 'GT17',
            'application' => 'Hyundai H100, Porter, H1 2.5L',
            'year' => '2001 - 2007',
            //'image' => '/products/turbos/OD-18006',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18006',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18007
        DB::table('turbos')->insert([
            'code' => 'OD-18007',
            'description' => 'Turbo',
            'model' => 'GT37',
            'application' => 'Navistar / International DT466, I530 7.7L',
            'year' => '2003 --',
            //'image' => '/products/turbos/OD-18007',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18007',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18008
        DB::table('turbos')->insert([
            'code' => 'OD-18008',
            'description' => 'Turbo',
            'model' => 'TB25',
            'application' => 'Isuzu NPR 3.9L ',
            'year' => '1988 - 1994',
            //'image' => '/products/turbos/OD-18008',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18008',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18009
        DB::table('turbos')->insert([
            'code' => 'OD-18009',
            'description' => 'Turbo',
            'model' => 'GT17',
            'application' => 'Kia Sorento 2.5L CRDi ',
            'year' => '2002 - 2006',
            //'image' => '/products/turbos/OD-18009',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18009',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18010
        DB::table('turbos')->insert([
            'code' => 'OD-18010',
            'description' => 'Turbo',
            'model' => 'GT20',
            'application' => 'Nissan Navara 2.5L Euro III, Euro IV',
            'year' => '2005 --',
            'image' => '/products/turbos/OD-18010',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18010',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18011
        DB::table('turbos')->insert([
            'code' => 'OD-18011',
            'description' => 'Turbo',
            'model' => 'CT16',
            'application' => 'Toyota Hilux / Prado 3.0L - 1KD-FTV (VGT)',
            'year' => '2006 --',
            //'image' => '/products/turbos/OD-18011',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18011',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product:
        DB::table('turbos')->insert([
            'code' => 'OD-18012',
            'description' => 'Turbo',
            'model' => 'GT42',
            'application' => 'TCaterpillar C15 / 3406',
            'year' => '1998 - 2013',
            //'image' => '/products/turbos/OD-18012',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18012',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18013
        DB::table('turbos')->insert([
            'code' => 'OD-18013',
            'description' => 'Turbo',
            'model' => 'GT37',
            'application' => 'Navistar / International DT466, DT408',
            'year' => '1993 - 2006',
            //'image' => '/products/turbos/OD-18013',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18013',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18014
        DB::table('turbos')->insert([
            'code' => 'OD-18014',
            'description' => 'Turbo',
            'model' => 'JK55',
            'application' => 'JAC',
            'year' => '2010 - 2012',
            //'image' => '/products/turbos/OD-18014',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18014',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18015
        DB::table('turbos')->insert([
            'code' => 'OD-18015',
            'description' => 'Turbo',
            'model' => 'TB2568',
            'application' => 'Isuzu NPR, NQR 3.9L',
            'year' => '1994 - 1998',
            //'image' => '/products/turbos/OD-18015',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18015',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18016
        DB::table('turbos')->insert([
            'code' => 'OD-18016',
            'description' => 'Turbo',
            'model' => 'GTB22',
            'application' => 'Mazda BT50 Pro 3.2L / Ford Ranger, Transit 3.2L',
            'year' => '2011 --',
            //'image' => '/products/turbos/OD-18016',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18016',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18017
        DB::table('turbos')->insert([
            'code' => 'OD-18017',
            'description' => 'Turbo',
            'model' => 'RHF5',
            'application' => 'Mazda BT50, B2500 2.5L',
            'year' => '1996 --',
            //'image' => '/products/turbos/OD-18017',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18017',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18018
        DB::table('turbos')->insert([
            'code' => 'OD-18018',
            'description' => 'Turbo',
            'model' => 'CT16',
            'application' => 'Toyota Hilux, Land Cruiser 2.5L - 2KD-FTV',
            'year' => '2001 --',
            //'image' => '/products/turbos/OD-18018',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18018',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18019
        DB::table('turbos')->insert([
            'code' => 'OD-18019',
            'description' => 'Turbo',
            'model' => 'GT17',
            'application' => 'Hyundai Grace, H100, H200, Porter 2.5L',
            'year' => '1995 - 1997',
            //'image' => '/products/turbos/OD-18019',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18019',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18020
        DB::table('turbos')->insert([
            'code' => 'OD-18020',
            'description' => 'Turbo',
            'model' => 'GT17',
            'application' => 'Hyundai Mighty / County / Combi 3.3L',
            'year' => '2000 --',
            //'image' => '/products/turbos/OD-18020',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18020',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18021
        DB::table('turbos')->insert([
            'code' => 'OD-18021',
            'description' => 'Turbo',
            'model' => 'GTB16',
            'application' => 'Hyundai Santa Fe, Tucson / Kia Sportage 2.0L ',
            'year' => '2005 --',
            //'image' => '/products/turbos/OD-18021',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18021',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18022
        DB::table('turbos')->insert([
            'code' => 'OD-18022',
            'description' => 'Turbo',
            'model' => 'GT18',
            'application' => 'Mercedes Benz Sprinter, Viano, Vito 2.2',
            'year' => '1996 - 2008',
            //'image' => '/products/turbos/OD-18022',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18022',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18023
        DB::table('turbos')->insert([
            'code' => 'OD-18023',
            'description' => 'Turbo',
            'model' => 'TO4',
            'application' => 'Navistar DT360 5.9L',
            'year' => '1991 --',
            //'image' => '/products/turbos/OD-18023',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18023',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18024
        DB::table('turbos')->insert([
            'code' => 'OD-18024',
            'description' => 'Turbo',
            'model' => 'GT35',
            'application' => 'Hino FD, FE, FF, GC, SG  J08C-TI 7.9L',
            'year' => '1997 - 2004',
            //'image' => '/products/turbos/OD-18024',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18024',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18025
        DB::table('turbos')->insert([
            'code' => 'OD-18025',
            'description' => 'Turbo',
            'model' => 'HX40W',
            'application' => 'Cummins 6CT/6CTA/C300 8.3L',
            'year' => '2003 - 2009',
            //'image' => '/products/turbos/OD-18025',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18025',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18026
        DB::table('turbos')->insert([
            'code' => 'OD-18026',
            'description' => 'Turbo',
            'model' => 'RHF4',
            'application' => 'Mitsubishi L200  2.5 Di-D',
            'year' => '2006 -- ',
            //'image' => '/products/turbos/OD-18026',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18026',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18027
        DB::table('turbos')->insert([
            'code' => 'OD-18027',
            'description' => 'Turbo',
            'model' => 'TF035HM',
            'application' => 'Mitsubishi Canter / Fuso  2.8L',
            'year' => '1971 - 1972',
            //'image' => '/products/turbos/OD-18027',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18027',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18028
        DB::table('turbos')->insert([
            'code' => 'OD-18028',
            'description' => 'Turbo',
            'model' => 'RHV4',
            'application' => 'Mazda BT50 3.0L / Ford Ranger 3.0L',
            'year' => '2006 --',
            //'image' => '/products/turbos/OD-18028',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18028',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18029
        DB::table('turbos')->insert([
            'code' => 'OD-18029',
            'description' => 'Turbo',
            'model' => 'TD025',
            'application' => 'Hyundai Santa Fe, Tucson / Kia Carens 2.0L',
            'year' => '2000 - 2008',
            //'image' => '/products/turbos/OD-18029',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18029',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18030
        DB::table('turbos')->insert([
            'code' => 'OD-18030',
            'description' => 'Turbo',
            'model' => 'TD05H',
            'application' => 'Mitsubishi Fuso / Hyundai Mighty II, County / Kia Combi 3.9L',
            'year' => '2000 --',
            //'image' => '/products/turbos/OD-18030',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18030',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18031
        DB::table('turbos')->insert([
            'code' => 'OD-18031',
            'description' => 'Turbo',
            'model' => 'HX55',
            'application' => 'Cummins M11 / ISM',
            'year' => '1999 - 2009 / 2007 - 2012',
            //'image' => '/products/turbos/OD-18031',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18031',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18032
        DB::table('turbos')->insert([
            'code' => 'OD-18032',
            'description' => 'Turbo',
            'model' => 'HX35',
            'application' => 'Cummins 6BT 5.9L',
            'year' => '1994 --',
            //'image' => '/products/turbos/OD-18032',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18032',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Product: OD-18033
        DB::table('turbos')->insert([
            'code' => 'OD-18033',
            'description' => 'Turbo',
            'model' => 'GT20',
            'application' => 'Ford Ranger 2.8L',
            'year' => '2001 --',
            //'image' => '/products/turbos/OD-18033',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-18033',
            'family_id' => 2,
            'category_id' => 5,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        /* Category: Cartuchos, ID: 6 */
        /// Product:
        /*DB::table('turbos')->insert([
            'code' => '',
            'description' => '',
            'model' => '',
            'application' => '',
            'year' => '',
            'image' => '/products/turbos/',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => '',
            'family_id' => 2,
            'category_id' => 6,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        */

        echo ' -> Loaded Turbos... ';
    }
}
