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
        /* Category: Motocicletas, ID:1*/
        /// Producto: OD-25009
        DB::table('lubricants')->insert([
           'code' => 'OD-25009',
           'description' => '4T 20W-50 Semisintetico 1L',
            'presentation' => '1 Litro',
            'detail' => 'Diseñado para el uso durante toda la temporada en sistemas de lubricación de modernos motores de cuatro tiempos de motocicletas, vehículos todo terreno, scooters y otras motocicletas con cualquier tipo de embrague. <br/>Está hecho de aceites base importados de alta calidad y un complejo de aditivos de clase premium. Permitido su uso en motores fueraborda refrigerados por agua.',
            'image' => '/products/lubricants/OD-25009A.jpg',
            'datasheet' => '/products/datasheet/SEMISYNTHETIC_4T_20W-50.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25009',
            'family_id' => 3,
            'category_id' => 1,
            'score' => 3,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25024
        DB::table('lubricants')->insert([
            'code' => 'OD-25024',
            'description' => 'Master 4T Semisintetico 10W-30 1L',
            'presentation' => '1 Litro',
            'detail' => 'YUKO SEMISYNTHETIC es un aceite de motor universal, hiperaleado, tecnología sintética con excelente fluidez para los motores de gasolina y de diésel, que gracias a los aditivos sintéticos y aceites básicos de alta calidad ayuda el ahorro de combustible. ',
            'image' => '/products/lubricants/OD-25024A.jpg',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-30_API_SN.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25024',
            'family_id' => 3,
            'category_id' => 1,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Category: Vehículos livianos, ID:2*/
        /// Producto: OD-25000
        DB::table('lubricants')->insert([
            'code' => 'OD-25000',
            'description' => '5W-40 Sintetico 1L',
            'presentation' => '1 Litro',
            'detail' => 'YUKO Synthetic 5W-40 es un aceite de motor sintético para los motores más modernos de gasolina y diesel para automóviles y minibuses.<br/>Proporciona un mayor nivel de escudos en comparación con aceites semisintéticos. Posee el intervalo de reemplazo aumentado. Se utiliza en motores de inyección y de válvulas múltiples, incluso con turbocompresión, intercooler, catalizador. Producidos y aditivos y aceites de base sintéticos de alta calidad, proporcionando un alto rendimiento del motor en un amplio rango de temperatura',
            'image' => '/products/lubricants/OD-25000B.jpg',
            'datasheet' => '/products/datasheet/YUKO_SYNTHETIC_5W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25000',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25001
        DB::table('lubricants')->insert([
            'code' => 'OD-25001',
            'description' => '5W-40 Sintetico 5L',
            'presentation' => '5 Litros',
            'detail' => 'YUKO Synthetic 5W-40 es un aceite de motor sintético para los motores más modernos de gasolina y diesel para automóviles y minibuses.<br/>Proporciona un mayor nivel de escudos en comparación con aceites semisintéticos. Posee el intervalo de reemplazo aumentado. Se utiliza en motores de inyección y de válvulas múltiples, incluso con turbocompresión, intercooler, catalizador. Producidos y aditivos y aceites de base sintéticos de alta calidad, proporcionando un alto rendimiento del motor en un amplio rango de temperatura',
            'image' => '/products/lubricants/OD-25001B.jpg',
            'datasheet' => '/products/datasheet/YUKO_SYNTHETIC_5W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25001',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25006
        DB::table('lubricants')->insert([
            'code' => 'OD-25006',
            'description' => '20W-50 Semisintetico Plus 1L',
            'presentation' => '1 Litro',
            'detail' => 'YUKO SEMISYNTHETIC PLUS es un aceite de motor multigrado tecnología sintética de alta calidad para turismos y camiones de todas las marcas con y sin turbo carga, que se ha desarrollado para satisfacer las crecientes demandas de diferntes mercados. Está formulado con bases del API Grupo II que han sido destiladas y refinadas para obtener los mejores compuestos del petróleo para la elaboración de este lubricante que con su aditivación especial mejora las condiciones de trabajo del motor.',
            'image' => '/products/lubricants/OD-25006A.jpg',
            'datasheet' => '/products/datasheet/SEMISYNTHETIC_PLUS_20W-50.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25006',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25007
        DB::table('lubricants')->insert([
            'code' => 'OD-25007',
            'description' => '10W-30 Semisintetico 1L',
            'presentation' => '1 Litro',
            'detail' => 'YUKO SEMISYNTHETIC es un aceite de motor universal, hiperaleado, tecnología sintética con excelente fluidez para los motores de gasolina y de diésel, que gracias a los aditivos sintéticos y aceites básicos de alta calidad ayuda el ahorro de combustible. ',
            'image' => '/products/lubricants/OD-25007A.jpg',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-30_API_SN.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25007',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 2,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25008
        DB::table('lubricants')->insert([
            'code' => 'OD-25008',
            'description' => '5W-30 Sintetico 1L',
            'presentation' => '1 Litro',
            'detail' => 'YUKO sintético 5W-30 - de baja fricción aceite de motor sintético para los más modernos motores de gasolina y diésel de automóviles y minibuses de Estados Unidos y la producción asiática.<br/>Está hecho de aceites base de hidrocraqueo de alta calidad y aditivos que garantizan un alto rendimiento del motor en un amplio rango de temperaturas. Proporciona un mayor nivel de protección en comparación con los aceites minerales y semisintéticos.<br/>Tiene un intervalo de reemplazo extendido. Se utiliza en motores de inyección y de válvulas múltiples, incluyendo sturbonadduvom, intercooler, catalizador.',
            'image' => '/products/lubricants/OD-25008A.jpg',
            'datasheet' => '/products/datasheet/YUKO_SYNTHETIC_5W-30.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25008',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25010
        DB::table('lubricants')->insert([
            'code' => 'OD-25010',
            'description' => '5W-30 Sintetico 5L',
            'presentation' => '5 Litros',
            'detail' => 'YUKO sintético 5W-30 - de baja fricción aceite de motor sintético para los más modernos motores de gasolina y diésel de automóviles y minibuses de Estados Unidos y la producción asiática.<br/>Está hecho de aceites base de hidrocraqueo de alta calidad y aditivos que garantizan un alto rendimiento del motor en un amplio rango de temperaturas. Proporciona un mayor nivel de protección en comparación con los aceites minerales y semisintéticos.<br/>Tiene un intervalo de reemplazo extendido. Se utiliza en motores de inyección y de válvulas múltiples, incluyendo sturbonadduvom, intercooler, catalizador.',
            'image' => '/products/lubricants/OD-25010B.jpg',
            'datasheet' => '/products/datasheet/YUKO_SYNTHETIC_5W-30.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25010',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25011
        DB::table('lubricants')->insert([
            'code' => 'OD-25011',
            'description' => '10W-30 Semisintetico 5L',
            'presentation' => '5 Litros',
            'detail' => 'YUKO SEMISYNTHETIC es un aceite de motor universal, hiperaleado, tecnología sintética con excelente fluidez para los motores de gasolina y de diésel, que gracias a los aditivos sintéticos y aceites básicos de alta calidad ayuda el ahorro de combustible. ',
            'image' => '/products/lubricants/OD-25011B.jpg',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-30_API_SN.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25011',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25012
        DB::table('lubricants')->insert([
            'code' => 'OD-25012',
            'description' => '20W-50 Semisintetico Plus 5L',
            'presentation' => '5 Litros',
            'detail' => 'YUKO SEMISYNTHETIC PLUS es un aceite de motor multigrado tecnología sintética de alta calidad para turismos y camiones de todas las marcas con y sin turbo carga, que se ha desarrollado para satisfacer las crecientes demandas de diferntes mercados. Está formulado con bases del API Grupo II que han sido destiladas y refinadas para obtener los mejores compuestos del petróleo para la elaboración de este lubricante que con su aditivación especial mejora las condiciones de trabajo del motor.',
            'image' => '/products/lubricants/OD-25012B.jpg',
            'datasheet' => '/products/datasheet/SEMISYNTHETIC_PLUS_20W-50.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25012',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25013
        DB::table('lubricants')->insert([
            'code' => 'OD-25013',
            'description' => '10W-40 Semisintetico 5L',
            'presentation' => '5 Litros',
            'detail' => 'Diseñado para los modernos motores de gasolina y diésel de automóviles y minibuses (inyección, válvulas múltiples, turbo, incluidos aquellos equipados con catalizadores de gases de escape) Es la mejor opción para la gran mayoría de los automóviles y minibuses importados.<br/>Está hecho de aceites base de alta calidad con la adición de un paquete de aditivos equilibrados, que ofrece altas características de antifricción, anticorrosión, detergentes y antioxidantes.',
            'image' => '/products/lubricants/OD-25013B.jpg',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25013',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25014
        DB::table('lubricants')->insert([
            'code' => 'OD-25014',
            'description' => '5W-30 Sintetico 20L',
            'presentation' => '20 Litros',
            'detail' => 'YUKO sintético 5W-30 - de baja fricción aceite de motor sintético para los más modernos motores de gasolina y diésel de automóviles y minibuses de Estados Unidos y la producción asiática.<br/>Está hecho de aceites base de hidrocraqueo de alta calidad y aditivos que garantizan un alto rendimiento del motor en un amplio rango de temperaturas. Proporciona un mayor nivel de protección en comparación con los aceites minerales y semisintéticos.<br/>Tiene un intervalo de reemplazo extendido. Se utiliza en motores de inyección y de válvulas múltiples, incluyendo sturbonadduvom, intercooler, catalizador.',
            //'image' => '/products/lubricants/OD-25014',
            'datasheet' => '/products/datasheet/YUKO_SYNTHETIC_5W-30.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25014',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25015
        DB::table('lubricants')->insert([
            'code' => 'OD-25015',
            'description' => '10W-30 Semisintetico 20L',
            'presentation' => '20 Litros',
            'detail' => 'YUKO SEMISYNTHETIC es un aceite de motor universal, hiperaleado, tecnología sintética con excelente fluidez para los motores de gasolina y de diésel, que gracias a los aditivos sintéticos y aceites básicos de alta calidad ayuda el ahorro de combustible. ',
            //'image' => '/products/lubricants/OD-25015',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-30_API_SN.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25015',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25016
        DB::table('lubricants')->insert([
            'code' => 'OD-25016',
            'description' => '10W-40 Semisintetico 20L',
            'presentation' => '20 Litros',
            'detail' => 'Diseñado para los modernos motores de gasolina y diésel de automóviles y minibuses (inyección, válvulas múltiples, turbo, incluidos aquellos equipados con catalizadores de gases de escape) Es la mejor opción para la gran mayoría de los automóviles y minibuses importados.<br/>Está hecho de aceites base de alta calidad con la adición de un paquete de aditivos equilibrados, que ofrece altas características de antifricción, anticorrosión, detergentes y antioxidantes.',
            //'image' => '/products/lubricants/OD-25016',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25016',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25017
        DB::table('lubricants')->insert([
            'code' => 'OD-25017',
            'description' => '20W-50 Semisintetico Plus 20L',
            'presentation' => '20 Litros',
            'detail' => 'YUKO SEMISYNTHETIC PLUS es un aceite de motor multigrado tecnología sintética de alta calidad para turismos y camiones de todas las marcas con y sin turbo carga, que se ha desarrollado para satisfacer las crecientes demandas de diferntes mercados. Está formulado con bases del API Grupo II que han sido destiladas y refinadas para obtener los mejores compuestos del petróleo para la elaboración de este lubricante que con su aditivación especial mejora las condiciones de trabajo del motor.',
            //'image' => '/products/lubricants/OD-25017',
            'datasheet' => '/products/datasheet/SEMISYNTHETIC_PLUS_20W-50.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25017',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25022
        DB::table('lubricants')->insert([
            'code' => 'OD-25022',
            'description' => '10W-30 Semisintetico',
            'presentation' => 'Tonel',
            'detail' => 'YUKO SEMISYNTHETIC es un aceite de motor universal, hiperaleado, tecnología sintética con excelente fluidez para los motores de gasolina y de diésel, que gracias a los aditivos sintéticos y aceites básicos de alta calidad ayuda el ahorro de combustible. ',
            //'image' => '/products/lubricants/OD-25022',
            'datasheet' => '/products/datasheet/YUKO_SEMISYNTHETIC_10W-30_API_SN.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25022',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25023
        DB::table('lubricants')->insert([
            'code' => 'OD-25023',
            'description' => '20W-50 Semisintetico Plus',
            'presentation' => 'Tonel',
            'detail' => 'YUKO SEMISYNTHETIC PLUS es un aceite de motor multigrado tecnología sintética de alta calidad para turismos y camiones de todas las marcas con y sin turbo carga, que se ha desarrollado para satisfacer las crecientes demandas de diferntes mercados. Está formulado con bases del API Grupo II que han sido destiladas y refinadas para obtener los mejores compuestos del petróleo para la elaboración de este lubricante que con su aditivación especial mejora las condiciones de trabajo del motor.',
            //'image' => '/products/lubricants/OD-25023',
            'datasheet' => '/products/datasheet/SEMISYNTHETIC_PLUS_20W-50.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25023',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25025
        DB::table('lubricants')->insert([
            'code' => 'OD-25025',
            'description' => '5W-30 Sintetico',
            'presentation' => 'Tonel',
            'detail' => 'YUKO sintético 5W-30 - de baja fricción aceite de motor sintético para los más modernos motores de gasolina y diésel de automóviles y minibuses de Estados Unidos y la producción asiática.<br/>Está hecho de aceites base de hidrocraqueo de alta calidad y aditivos que garantizan un alto rendimiento del motor en un amplio rango de temperaturas. Proporciona un mayor nivel de protección en comparación con los aceites minerales y semisintéticos.<br/>Tiene un intervalo de reemplazo extendido. Se utiliza en motores de inyección y de válvulas múltiples, incluyendo sturbonadduvom, intercooler, catalizador.',
            //'image' => '/products/lubricants/OD-25025',
            'datasheet' => '/products/datasheet/YUKO_SYNTHETIC_5W-30.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25025',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25028
        DB::table('lubricants')->insert([
            'code' => 'OD-25028',
            'description' => '0W-20 Full Sintetico 1L',
            'presentation' => '1 Litro',
            'detail' => 'YUKO Fully Sinthetic 0W-20 - Aceite de motor de bajo consumo de combustible sintético y de baja viscosidad. Proporciona una eficiencia superior del motor. Desarrollado para los últimos motores de gasolina y diésel para automóviles y autobuses. Compatible con motores de inyección y multiválvulas, incluidos los equipados con turbocompresores, intercooler y catalizador. Esencialmente prolonga la vida útil del motor debido a los aditivos multifuncionales que proporcionan propiedades avanzadas de baja temperatura, antidesgaste, anticorrosión, detergente y antioxidante. Garantiza una excelente protección contra el desgaste para diferentes estilos y condiciones de conducción, desde leves aseveras.<br/>Cumple con los requisitos de la mayoría de los fabricantes de automóviles de pasajeros japoneses y coreanos (A&A).',
            'image' => '/products/lubricants/OD-25028A.jpg',
            'datasheet' => '/products/datasheet/YUKO_FULLY_SYNTHETIC_0W-20.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25028',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 1.5,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25029
        DB::table('lubricants')->insert([
            'code' => 'OD-25029',
            'description' => '0W-20 Full Sintetico 5L',
            'presentation' => '5 Litros',
            'detail' => 'YUKO Fully Sinthetic 0W-20 - Aceite de motor de bajo consumo de combustible sintético y de baja viscosidad. Proporciona una eficiencia superior del motor. Desarrollado para los últimos motores de gasolina y diésel para automóviles y autobuses. Compatible con motores de inyección y multiválvulas, incluidos los equipados con turbocompresores, intercooler y catalizador. Esencialmente prolonga la vida útil del motor debido a los aditivos multifuncionales que proporcionan propiedades avanzadas de baja temperatura, antidesgaste, anticorrosión, detergente y antioxidante. Garantiza una excelente protección contra el desgaste para diferentes estilos y condiciones de conducción, desde leves aseveras.<br/>Cumple con los requisitos de la mayoría de los fabricantes de automóviles de pasajeros japoneses y coreanos (A&A).',
            'image' => '/products/lubricants/OD-25029B.jpg',
            'datasheet' => '/products/datasheet/YUKO_FULLY_SYNTHETIC_0W-20.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25029',
            'family_id' => 3,
            'category_id' => 2,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Category: Vehículos semi Pesados y pesados, ID:3*/
        /// Producto: OD-25002
        DB::table('lubricants')->insert([
            'code' => 'OD-25002',
            'description' => 'Mega Diesel 15W-40 Semisintetico 5L',
            'presentation' => '5 Litros',
            'detail' => 'Diseñado para uso durante todo el año en motores de alta velocidad de aire y turbo diesel de camiones de larga distancia, maquinaria agrícola y de construcción, autobuses y otros vehículos comerciales.<br/>Producido de aceites base seleccionados con un paquete de aditivos efectivos, que proporciona propiedades antifricción, anticorrosión, detergentes y antioxidantes óptimas.<br/>Licenciado por API. Tolerancias MB, Cummins, Volvo, Renault, Caterpillar',
            'image' => '/products/lubricants/OD-25002B.jpg',
            'datasheet' => '/products/datasheet/YUKO_MEGA_DIESEL_15W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25002',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 3.45,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25003
        DB::table('lubricants')->insert([
            'code' => 'OD-25003',
            'description' => 'Super Diesel 15W-40 Mineral 5L',
            'presentation' => '5 Litros',
            'detail' => 'Destinado a los modernos motores diésel y turbo diesel de turismos, furgonetas y camiones incl. alimentado por combustible con alto contenido de azufre.<br/>Producido con aceites de base mineral con aditivos modernos, que proporcionan estabilidad en el rendimiento del aceite durante todo el servicio y la vida útil.',
            'image' => '/products/lubricants/OD-25003B.jpg',
            'datasheet' => '/products/datasheet/YUKO_SUPER_DIESEL_15W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25003',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25004
        DB::table('lubricants')->insert([
            'code' => 'OD-25004',
            'description' => 'Mega Diesel Max 25W-60 20L',
            'presentation' => '20 Litros',
            'detail' => 'YUKO MEGA DIESEL MAX 25W-60 Aceite de motor de alta viscosidad para todas las estaciones de SHPD en una base mineral para motores diésel modernos (alto torque, multiválvula, de aspiración natural y turbo con intervalo de drenaje extendido) para camiones pesados, máquinas de construcción, autobuses, incluyendo vehículos equipados con SCR, y sistema EGR para tratar gases de escape tóxicos.',
            //'image' => '/products/lubricants/OD-25004',
            'datasheet' => '/products/datasheet/YUKO_MEGA_DIESEL_MAX_25W-60.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25004',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25005
        DB::table('lubricants')->insert([
            'code' => 'OD-25005',
            'description' => 'Mega Diesel Max 25W-60',
            'presentation' => 'Tonel',
            'detail' => 'YUKO MEGA DIESEL MAX 25W-60 Aceite de motor de alta viscosidad para todas las estaciones de SHPD en una base mineral para motores diésel modernos (alto torque, multiválvula, de aspiración natural y turbo con intervalo de drenaje extendido) para camiones pesados, máquinas de construcción, autobuses, incluyendo vehículos equipados con SCR, y sistema EGR para tratar gases de escape tóxicos.',
            //'image' => '/products/lubricants/OD-25005',
            'datasheet' => '/products/datasheet/YUKO_MEGA_DIESEL_MAX_25W-60.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25005',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25018
        DB::table('lubricants')->insert([
            'code' => 'OD-25018',
            'description' => 'Mega Diesel 15W-40 Semisintetico 20L',
            'presentation' => '20 Litros',
            'detail' => 'Diseñado para uso durante todo el año en motores de alta velocidad de aire y turbo diesel de camiones de larga distancia, maquinaria agrícola y de construcción, autobuses y otros vehículos comerciales.<br/>Producido de aceites base seleccionados con un paquete de aditivos efectivos, que proporciona propiedades antifricción, anticorrosión, detergentes y antioxidantes óptimas.<br/>Licenciado por API. Tolerancias MB, Cummins, Volvo, Renault, Caterpillar',
            //'image' => '/products/lubricants/OD-25018',
            'datasheet' => '/products/datasheet/YUKO_MEGA_DIESEL_15W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25018',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25019
        DB::table('lubricants')->insert([
            'code' => 'OD-25019',
            'description' => 'Super Diesel Extra 20W-50 Mineral 20L',
            'presentation' => '20 Litros',
            'detail' => 'Multigrade motor oil YUKO SUPER DIESEL 20W50 applied for diesel engines (turbocharged or not) and petrol engines, requiring compliance with API CF-4/SG standards.<br/>Due the high viscosity, the tightness and compression of engine are increasing. Additive package provide protection rom dirt, wear and corros',
            //'image' => '/products/lubricants/OD-25019',
            'datasheet' => '/products/datasheet/Yuko_Super_Diesel_20W-50.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25019',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25020
        DB::table('lubricants')->insert([
            'code' => 'OD-25020',
            'description' => 'Super Diesel 15W-40 Mineral',
            'presentation' => 'Tonel',
            'detail' => 'Destinado a los modernos motores diésel y turbo diesel de turismos, furgonetas y camiones incl. alimentado por combustible con alto contenido de azufre.<br/>Producido con aceites de base mineral con aditivos modernos, que proporcionan estabilidad en el rendimiento del aceite durante todo el servicio y la vida útil.',
            //'image' => '/products/lubricants/OD-25020',
            'datasheet' => '/products/datasheet/YUKO_SUPER_DIESEL_15W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25020',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25021
        DB::table('lubricants')->insert([
            'code' => 'OD-25021',
            'description' => 'Mega Diesel 15W-40 Semisintetico',
            'presentation' => 'Tonel',
            'detail' => 'Diseñado para uso durante todo el año en motores de alta velocidad de aire y turbo diesel de camiones de larga distancia, maquinaria agrícola y de construcción, autobuses y otros vehículos comerciales.<br/>Producido de aceites base seleccionados con un paquete de aditivos efectivos, que proporciona propiedades antifricción, anticorrosión, detergentes y antioxidantes óptimas.<br/>Licenciado por API. Tolerancias MB, Cummins, Volvo, Renault, Caterpillar',
            //'image' => '/products/lubricants/OD-25021',
            'datasheet' => '/products/datasheet/YUKO_MEGA_DIESEL_15W-40.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25021',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25026
        DB::table('lubricants')->insert([
            'code' => 'OD-25026',
            'description' => 'Aceite 85W-140 20L',
            'presentation' => '20 Litros',
            'detail' => 'WOLVER Gear Oil GL-5 85W-140 es un aceite de engranajes hipoide para transmisiones manuales tanto de turismos como de camiones y equipos industriales. La posibilidad de uso durante todas las estaciones proporciona una buena fluidez a bajas temperaturas y resistencia al envejecimiento, incluso a cargas de alta temperatura.',
            //'image' => '/products/lubricants/OD-25026',
            'datasheet' => '/products/datasheet/Wolver_Gear_Oil_GL-5_85W-140.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25026',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /// Producto: OD-25027
        DB::table('lubricants')->insert([
            'code' => 'OD-25027',
            'description' => 'Aceite 80W-90 20L',
            'presentation' => '20 Litros',
            'detail' => 'WOLVER Gear Oil GL-5 SAE 80W-90 es un aceite hipoide para engranajes mecánicos a base de aceites básicos de refino solvente de alta calidad.',
            //'image' => '/products/lubricants/OD-25027',
            'datasheet' => '/products/datasheet/Wolver_Gear_Oil_GL-5_80W-90.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25027',
            'family_id' => 3,
            'category_id' => 3,
            'score' => 0,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Category: Refrigerantes, ID:4*/
        /// Producto: OD-25030
        DB::table('lubricants')->insert([
            'code' => 'OD-25030',
            'description' => 'Antifreeze verde 5L',
            'presentation' => '5 Litros',
            'detail' => 'Líquido refrigerante de alta calidad para motores modernos de gasolina y diésel (incluidos motores hechos de metales ligeros), que funcionan en una variedad de condiciones climáticas y estacionales.<br/>YUKO Antifreeze-20 (Super G11 + Green) está especialmente recomendado para sistemas de enfriamiento de aluminio. Proporciona protección confiable de las partes del motor hechas de hierro, aluminio, cobre y acero. Hecho a base de monoetilenglicol y aditivos especiales anticorrosivos. No contiene nitritos, aminas, silicatos, boratos y fosfatos. Sin glicerina.',
            'image' => '/products/lubricants/OD-25030B.jpg',
            'datasheet' => '/products/datasheet/Antifreeze_20%20_Super_G11_Green.pdf',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'code' => 'OD-25030',
            'family_id' => 3,
            'category_id' => 4,
            'score' => 4.3,
            'active' => true,
            'assigned' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        echo ' -> Lubricants loaded...\n';
    }
}
