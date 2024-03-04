<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $trips = [
                [
                    'title' => 'Fun Vacation',
                    'location' => 'Puerto Rico',
                    'image' => '',
                    'description' => 'Playa, sol y Arena. Disfruta de las aguas más claras y de las puestas de sol más intensas.',
                    'user_id' => 1
                ],
                
                
                [
                    'title' => 'Romantic Vacation',
                    'location' => 'Italia',
                    'image' => '',
                    'description' => 'Pizza, ice cream. Disfruta de un viaje en el tiempo visitando los lugares más famosos del mundo',
                    'user_id' => 1
                ],
                [
                    'title' => 'Safari de aventura',
                    'location' => 'Kenia',
                    'image' => '',
                    'description' => 'Sientes la llamada de la naturaleza mientras elefantes y leones vagan libremente a tu alrededor. Esta experiencia vale absolutamente la pena cada segundo y una aventura para toda la vida',
                    'user_id' => 1
                ],
                
                [
                    'title' => 'Escapada Soñada',
                    'location' => 'Grecia',
                    'image' => '',
                    'description' => 'Todo es mejor en Grecia, donde el vino es más suave, las aguas son más claras y las puestas de sol son más intensas. Los viajeros nunca quieren irse',
                    'user_id' => 1
                ],
    
                [
                    'title' => 'Vacaciones en el Hielo',
                    'location' => 'Antartida',
                    'image' => '',
                    'description' => 'Imagina una ballena emergiendo a tu lado para saludarte mientras los pingüinos brincan en la proa de tu bote cuando navegas junto a un iceberg en kayak. Esto es la Antártida',
                    'user_id' => 1
                ],
    
                [
                    'title' => 'Auroras Boreales y naturaleza',
                    'location' => 'Islandia',
                    'image' => '',
                    'description' => 'Difícilmente hay un país en el mundo que luzca tantos paisajes trascendentales en tan poco tiempo. La belleza te atrae. La diversidad hace que nunca quieras irte',
                    'user_id' => 1
                
                ],
                [
                    'title' => 'Playas paradisiacas y paz',
                    'location' => 'Maldivas',
                    'image' => '',
                    'description' => 'Despertarse con el runrún del mar en su idílico bungaló en las Maldivas dará vida a la realidad tropical',
                    'user_id' => 1
                ],
                [
                    'title' => 'Salto Angel, una maravilla natural',
                    'location' => 'Venezuela',
                    'image' => '',
                    'description' => 'El Salto Ángel es una de las mayores atracciones turísticas de Venezuela. Su sola visión te dejará sin aliento. Una experiencia indescriptible que debes vivir',
                    'user_id' => 1
                ],
                [
                    'title' => 'Islas Galapagos, el origen de las especies',
                    'location' => 'Ecuador',
                    'image' => '',
                    'description' => 'Un viaje en el tiempo para entender por qué Darwin encontró su tierra de ensueño aquí. La flora y la fauna abundantes y las especies asombrosas dan color al ambiente en medio de la emoción de la aventura',
                    'user_id' => 1
                ],
    
                [
                    'title' => 'Machu Pichu, tribus e historia',
                    'location' => 'Perú',
                    'image' => '',
                    'description' => 'Pasear por el Camino Inca es un intenso viaje a siglos pasados y a las raíces de nuestra historia que permanecen vivas hasta el día de hoy',
                    'user_id' => 1
                ]
    
                ];
              
            DB::table('trips')->insert($trips);     }

    }
