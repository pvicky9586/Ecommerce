<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Str;


class SeederProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// \App\Models\Product::factory()->count(30)->create(); 

       

    	//\App\Models\Price::factory()->count(30)->create(); 
















        //CARS 4

        DB::table('products')->insert([
            'name' => 'Ford F-150 ',
            'price' => '100000',
            'image_path' => 'images/Products/cars/Ford-F-150.jpeg',
            'category_id'=>  4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                    DB::table('detail_products')->insert([
                       'description' => 'Se trata de la actualización de la versión Luxury que llega con retoques en diseño, motor V8 5.0 de 400 CV, caja automática y tracción 4x4. Precio y equipamiento.',
                       'amount' => 5,
                       'product_id' => 1, 
                       'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                       'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

                    ]);
        // --------------------
        DB::table('products')->insert([
            'name' => 'Renault Kwid',
            'price' => '154700',
            'image_path' => 'images/Products/cars/Renault-Kwid.jpeg',
            'category_id'=>  4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                    DB::table('detail_products')->insert([
                       'description'=>'Nuevo diseño, nuevo motor, más tecnología y notables avances en seguridad es lo que, al parecer, vendrá para el Renault Kwid latinoamericano en su año/modelo 2022. Estaría listo para mediados del próximo año.',
                       'amount' => 5,
                       'product_id' => 2, 
                       'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                       'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                     ]);
         //--------------------------  
        DB::table('products')->insert([
            'name' => 'Toyota Land Cruiser',
            'price' => '154700',
            'image_path' => 'images/Products/cars/Toyota Land Cruiser.jpeg',
            'category_id'=>  4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
               DB::table('detail_products')->insert([
                   'description'=>'Nuevo diseño, nuevo motor, más tecnología y notables avances en seguridad es lo que, al parecer, vendrá para el Renault Kwid latinoamericano en su año/modelo 2022. Estaría listo para mediados del próximo año.',
                   'amount' => 5,
                   'product_id' => 3, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);






        //BEAUTY 3-------------------------------------------------
        DB::table('products')->insert([
            'name' => 'kit-Complet',
            'price' => '154',
            'image_path' => 'images/Products/beauty/kit-complet.jpeg',
            'category_id'=>  3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Colección de productos de belleza cosméticos sobre fondo blanco Foto gratis.',
                   'amount' => 25,
                   'product_id' => 4, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);


        DB::table('products')->insert([
            'name' => 'Labiales',
            'price' => '154',
            'image_path' => 'images/Products/beauty/labials.jpeg',
            'category_id'=>  3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                   'description'=>'Descubre como realizar un maquillaje completo solo usando labiales.',
                   'amount' => 12,
                   'product_id' => 5, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

         DB::table('products')->insert([
            'name' => 'Secador Cabello',
            'price' => '154',
            'image_path' => 'images/Products/beauty/secador.jpeg',
            'category_id'=>  3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                   'description'=>'Secador Supermegaturbo Original Cabello 27000rpm Profesional- + Supermegaturbo 27.000 rpm
                        + 2000 Watts De Potencia
                        + Cable De 3 Metros
                        + 2 Velocidades
                        + 4 Niveles De Temperatura
                        + Botón De Aire De Temperatura
                        + 2 Boquillas
                        + Lo Máximo En Secadores Profesionales
                        + Made In Italy',
                   'amount' => 12,
                   'product_id' => 6, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);


 //CLOTHING 1-------------------------------------------------
        DB::table('products')->insert([
            'name' => 'Outfits con falda',
            'price' => '25',
            'image_path' => 'images/Products/clothing/clothing.png',
            'category_id'=>  1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Los outfits con faldas son geniales para ocasiones casuales en las que debemos transmitir frescura,ademas este tipo de vestimenta te hace lucir mucho mas delgada y resalta tus tonificadas piernas de una ',
                   'amount' => 16,
                   'product_id' => 7, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

        DB::table('products')->insert([
            'name' => 'Sueter Dama Y Caballero',
            'price' => '18',
            'image_path' => 'images/Products/clothing/Sueter Dama Y Caballero.jpg',
            'category_id'=>  1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Los outfits con faldas son geniales para ocasiones casuales en las que debemos transmitir frescura,ademas este tipo de vestimenta te hace lucir mucho mas delgada y resalta tus tonificadas piernas de una ',
                   'amount' => 55,
                   'product_id' => 8, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);




 //FOOTWEAR 1-------------------------------------------------
        DB::table('products')->insert([
            'name' => 'Zapatos Adidas',
            'price' => '25',
            'image_path' => 'images/Products/footwear/adidas.webp',
            'category_id'=>  2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Zapatos adidas Duramos 9m Running Hombres 100% Originales',
                   'amount' => 16,
                   'product_id' => 9, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

    DB::table('products')->insert([
            'name' => 'Adidas Stan Smith',
            'price' => '25',
            'image_path' => 'images/Products/footwear/adidas Sta.webp',
            'category_id'=>  2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'adidas Stan Smith Originales',
                   'amount' => 16,
                   'product_id' => 10, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);


    DB::table('products')->insert([
            'name' => 'Adidas Stan Smith',
            'price' => '15',
            'image_path' => 'images/Products/footwear/Skechers.webp',
            'category_id'=>  2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Zapatos Deportivos Skechers Para Damas',
                   'amount' => 31,
                   'product_id' => 11, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);



     //HEALTH 5-------------------------------------------------
        DB::table('products')->insert([
            'name' => 'Corrector De Postura',
            'price' => '22',
            'image_path' => 'images/Products/health/Corrector De Postura.webp',
            'category_id'=>  5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Corrector De Postura Espalda Ajustable Magnético Garantizado',
                   'amount' => 70,
                   'product_id' => 12, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

         DB::table('products')->insert([
                'name' => 'Termometro Berrcom Digital',
                'price' => '12',
                'image_path' => 'images/Products/health/Termometro.webp',
                'category_id'=>  5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);            
                    DB::table('detail_products')->insert([
                      'description'=> 'Termometro Berrcom Digital Pantalla Lcd Infrarrojo Nuevo',
                       'amount' => 10,
                       'product_id' => 13, 
                       'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                       'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                     ]);

        DB::table('products')->insert([
                'name' => 'Filter Plus Filtro',
                'price' => '12',
                'image_path' => 'images/Products/health/Filter Plus Filtro.webp',
                'category_id'=>  5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);            
                    DB::table('detail_products')->insert([
                      'description'=> 'Filter Plus Filtro Agua Compacto Ozono Neveras Enfriador',
                       'amount' => 10,
                       'product_id' => 14, 
                       'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                       'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                     ]);


        //6 Technological Equipments-------------------------------------------------
        DB::table('products')->insert([
            'name' => 'Computador Core I5 3.1 Ghz',
            'price' => '202',
            'image_path' => 'images/Products/technological/Computador Core I5 3.1 Ghz.webp',
            'category_id'=>  6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Computador Core I5 3.1 Ghz. 4gb, Disco 250gb, Monitor De 19 1. Computador HP 6200 con fuente de poder HP original
                    -Procesador Core i5 de 3.1 Ghz. 4 Nucleos
                    -Memoria DDR3 1600 Mhz de 4gb. Exp. a 16gb.
                    -Disco Duro Sata de 3.5" de 250 Gb
                    - Conexion frontal: 2 USB, Audífonos, Microfono
                    - Conexion Trasera: 6 USB, Audifono, Microfono, Puerto Serial, VGA,
                    -Video Integrado Intel HD 2500,
                    -Tarjeta de Red Intel Gigabit',
                   'amount' => 70,
                   'product_id' => 15, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

        DB::table('products')->insert([
            'name' => 'Cpu Core I9-9900k',
            'price' => '202',
            'image_path' => 'images/Products/technological/Cpu Core I9-9900k.webp',
            'category_id'=>  6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Cpu Core I9-9900k 64gb Ram M.2 512gb En Oferta!!',
                   'amount' => 70,
                   'product_id' => 16, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);


        DB::table('products')->insert([
            'name' => 'Cpu Core I7',
            'price' => '202',
            'image_path' => 'images/Products/technological/Cpu Core I7.webp',
            'category_id'=>  6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Intel Core i7
                    Tarjeta Madre (Motherboard) Biostar o AsRock Micro ATX de bajo Consumo
                    Puerto HDMI Y VGA
                    - 500 Disco Duro Caviar Green 0 Horas (Wester Digital)
                    - Fuente de poder 650w Tipo Certificada NetStar
                    - 8gb DDR3 Ram 1333
                    - Fan Cooler Procesador de Luces Giratorias LED RGB
                    - Fan Cooler Externo Basico
                    - CASE TIPO GAMER Azza ALTA CALIDAD GAMA ALTA DE LUCES (Varios Modelos)
                    IDEAL PARA GAMERS Y DISEÑADORES DE ALTO RENDIMIENTO. Marca Azza Pro Acrilico
                    - Tarjeta de Video de 1Gb NVIDIA Gforce G650
                    Si quiere un GPU (Tarjeta de Video ) con mayor potencia para este equipos es adicional varias depende de lo que requiera.',
                   'amount' => 70,
                   'product_id' => 17, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);



        // 7 Mobile Technology------------------------------------------
        DB::table('products')->insert([
            'name' => 'Hyundai 4g Modelo L622',
            'price' => '120',
            'image_path' => 'images/Products/movile-technology/Hyundai 4g Modelo L622.webp',
            'category_id'=>  7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Teléfono Hyundai 4g Modelo L622 De 32gb Memoria Y 2gb Ram',
                   'amount' => 70,
                   'product_id' => 18, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

        DB::table('products')->insert([
            'name' => 'Hyundai 4g Modelo L622',
            'price' => '120',
            'image_path' => 'images/Products/movile-technology/Celular Smart Techno Spark .webp',
            'category_id'=>  7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Hyundai 4g Modelo L622',
                   'amount' => 70,
                   'product_id' => 19, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);


        // 8 deportes ------------------------------------

        DB::table('products')->insert([
            'name' => 'Pelota De Softbol',
            'price' => '120',
            'image_path' => 'images/Products/sport/Pelota De Softbol.webp',
            'category_id'=>  8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> '- COMPOSICIÓN Ofrece a los jugadores élite una experiencia de juego única, gracias a su costura plana que permite que la pelota recorra mayores distancias al ofrecer una menor resistencia al aire y su cubierta de cuero de alta calidad que ofrece el mejor agarre y máxima durabilidad.
                        - RESISTENCIA Su centro de corcho con compresión COR 44, proporciona mayor durabilidad, consistencia y salida a la pelota.
                        ',
                   'amount' => 70,
                   'product_id' => 20, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

        DB::table('products')->insert([
            'name' => 'Hyundai 4g Modelo L622',
            'price' => '120',
            'image_path' => 'images/Products/sport/El BOSU.webp',
            'category_id'=>  8,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'El BOSU es una herramienta perfecta para trabajar la propiocepción. Fuente foto: Amazon ES',
                   'amount' => 70,
                   'product_id' => 21, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);


// 9 fashion--------------------------

        DB::table('products')->insert([
            'name' => 'Beyond the Stereotypes',
            'price' => '120',
            'image_path' => 'images/Products/fashion/Fashion-Communication.jpg',
            'category_id'=>  9,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Fashion Communication: Beyond the Stereotypes',
                   'amount' => 70,
                   'product_id' => 22, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

        DB::table('products')->insert([
            'name' => 'Tipping Point',
            'price' => '120',
            'image_path' => 'images/Products/fashion/shutterstock.jpg',
            'category_id'=>  9,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);            
                DB::table('detail_products')->insert([
                  'description'=> 'Tipping Point: Will the Flood of Collections Yield to Slower Fashion?',
                   'amount' => 70,
                   'product_id' => 23, 
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);






           

    }









            //HACER ESTA PRUEBA

            //     $languages = [
            //     [
            //         'name' => 'English',
            //         'flag' => '',
            //         'abbr' => 'en',
            //         'script' => 'Latn',
            //         'native' => 'English',
            //         'active' => '1',
            //         'default' => '1',
            //     ],
            // ];

            // foreach ($languages as $language){
            //     Language::create($language);
            // }
    






    // 1 ropa clothing
// 2 calzado footwear
// 3 belleza beauty
// 4 autos cars
// 5 Salud Health
// 6 Technological Equipments
// 7 Mobile Technology
// 8 deportes
// 9 fashion

}
