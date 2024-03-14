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
                'image_path' => 'storage/images/tropical-beach.jpg',
                'description' => 'Playa, sol y Arena. Disfruta de las aguas más claras y de las puestas de sol más intensas.Playa, sol y Arena. Disfruta de las aguas más claras y de las puestas de sol más intensas.Playa, sol y Arena. Disfruta de las aguas más claras y de las puestas de sol más intensas.Playa, sol y Arena. Disfruta de las aguas más claras y de las puestas de sol más intensas. Playa, sol y Arena. Disfruta de las aguas más claras y de las puestas de sol más intensas.',
                'user_id' => 1
            ],


            [
                'title' => 'Romantic Vacation',
                'location' => 'Italia',
                'image_path' => 'storage/images/pepperoni-pizza-table.jpg',
                'description' => 'Pizza, ice cream. Disfruta de un viaje en el tiempo visitando los lugares más famosos del mundo. Pizza, ice cream. Disfruta de un viaje en el tiempo visitando los lugares más famosos del mundo. Pizza, ice cream. Disfruta de un viaje en el tiempo visitando los lugares más famosos del mundo. Pizza, ice cream. Disfruta de un viaje en el tiempo visitando los lugares más famosos del mundo',
                'user_id' => 2
            ],
            [
                'title' => 'Safari de aventura',
                'location' => 'Kenia',
                'image_path' => 'storage/images/safari.jpg',
                'description' => 'Sientes la llamada de la naturaleza mientras elefantes y leones vagan libremente a tu alrededor. Esta experiencia vale absolutamente la pena cada segundo y una aventura para toda la vida. Sientes la llamada de la naturaleza mientras elefantes y leones vagan libremente a tu alrededor. Esta experiencia vale absolutamente la pena cada segundo y una aventura para toda la vida.  ',
                'user_id' => 3
            ],

            [
                'title' => 'Escapada Soñada',
                'location' => 'Grecia',
                'image_path' => 'storage/images/grecia.jpg',
                'description' => 'Todo es mejor en Grecia, donde el vino es más suave, las aguas son más claras y las puestas de sol son más intensas. Los viajeros nunca quieren irse. Todo es mejor en Grecia, donde el vino es más suave, las aguas son más claras y las puestas de sol son más intensas. Los viajeros nunca quieren irse.  Los viajeros nunca quieren irse',
                'user_id' => 4
            ],

            [
                'title' => 'Vacaciones en el Hielo',
                'location' => 'Antartida',
                'image_path' => 'storage/images/antartida.jpg',
                'description' => 'Imagina una ballena emergiendo a tu lado para saludarte mientras los pingüinos brincan en la proa de tu bote cuando navegas junto a un iceberg en kayak. Esto es la Antártida. Imagina una ballena emergiendo a tu lado para saludarte mientras los pingüinos brincan en la proa de tu bote cuando navegas junto a un iceberg en kayak. Esto es la Antártida',
                'user_id' => 5
            ],

            [
                'title' => 'Auroras Boreales y naturaleza',
                'location' => 'Islandia',
                'image_path' => 'storage/images/boreales.jpg',
                'description' => 'Difícilmente hay un país en el mundo que luzca tantos paisajes trascendentales en tan poco tiempo. La belleza te atrae. La diversidad hace que nunca quieras irte. Difícilmente hay un país en el mundo que luzca tantos paisajes trascendentales en tan poco tiempo. La belleza te atrae.  Difícilmente hay un país en el mundo que luzca tantos paisajes trascendentales en tan poco tiempo. La belleza te atrae. La diversidad hace que nunca quieras irte.',
                'user_id' => 5

            ],
            [
                'title' => 'Playas paradisiacas y paz',
                'location' => 'Maldivas',
                'image_path' => 'storage/images/tropical-beach.jpg',
                'description' => 'Despertarse con el runrún del mar en su idílico bungaló en las Maldivas dará vida a la realidad tropical. Despertarse con el runrún del mar en su idílico bungaló en las Maldivas dará vida a la realidad tropical. Despertarse con el runrún del mar en su idílico bungaló en las Maldivas dará vida a la realidad tropical.',
                'user_id' => 6
            ],
            [
                'title' => 'Salto Angel, una maravilla natural',
                'location' => 'Venezuela',
                'image_path' => 'storage/images/venezuela.jpg',
                'description' => 'El Salto Ángel es una de las mayores atracciones turísticas de Venezuela. Su sola visión te dejará sin aliento. Una experiencia indescriptible que debes vivir. El Salto Ángel es una de las mayores atracciones turísticas de Venezuela. Su sola visión te dejará sin aliento. Una experiencia indescriptible que debes vivir. El Salto Ángel es una de las mayores atracciones turísticas de Venezuela.  Una experiencia indescriptible que debes vivir. ',
                'user_id' => 6
            ],
            [
                'title' => 'Islas Galapagos, el origen de las especies',
                'location' => 'Ecuador',
                'image_path' => 'storage/images/galapagos.jpg',
                'description' => 'Un viaje en el tiempo para entender por qué Darwin encontró su tierra de ensueño aquí. La flora y la fauna abundantes y las especies asombrosas dan color al ambiente en medio de la emoción de la aventura. Un viaje en el tiempo para entender por qué Darwin encontró su tierra de ensueño aquí. La flora y la fauna abundantes y las especies asombrosas dan color al ambiente en medio de la emoción de la aventura.',
                'user_id' => 1
            ],

            [
                'title' => 'Machu Pichu, tribus e historia',
                'location' => 'Perú',
                'image_path' => 'storage/images/machupichu.jpg',
                'description' => 'Pasear por el Camino Inca es un intenso viaje a siglos pasados y a las raíces de nuestra historia que permanecen vivas hasta el día de hoy. Pasear por el Camino Inca es un intenso viaje a siglos pasados y a las raíces de nuestra historia que permanecen vivas hasta el día de hoy. Pasear por el Camino Inca es un intenso viaje a siglos pasados y a las raíces de nuestra historia que permanecen vivas hasta el día de hoy.',
                'user_id' => 2
            ],
            [
                'title' => 'París, la ciudad del amor',
                'location' => 'Francia',
                'image_path' => 'storage/images/eiffel-tower.jpg',
                'description' => 'París ofrece lugares históricos, monumentos, un ambiente agradable, cafés encantadores, parques y museos para satisfacer a cualquier viajero. La ciudad es el hogar de algunos de los edificios antiguos más emblemáticos del mundo, como Le Tour Eiffel, Notre Dame, Sacré Coeur, L´Arc de Triomphe, el Palacio de Versalles, el Moulin Rouge o el Hotel des Invalides. ',
                'user_id' => 3
            ],
            [
                'title' => 'Safari y relax',
                'location' => 'Kenia',
                'image_path' => 'storage/images/safari.jpg',
                'description' => 'Comenzamos en Nairobi, la capital, y continuamos hacia el Parque Nacional Amboseli, con 40.000 hectáreas donde disfrutar de las vistas del monte Kilimanjaro y de elefantes, cebras, búfalos, leones o jirafas. Seguimos observando animales en el Parque Nacional Tsavo, y terminamos con un poco de relax en la playa de Diani.',
                'user_id' => 4
            ],
            [
                'title' => 'New York, New York !',
                'location' => 'Estados Unidos',
                'image_path' => 'storage/images/newyork.jpg',
                'description' => 'Nueva York es una metrópolis internacional construida sobre los hombros de los inmigrantes y sus descendientes. La Ciudad de Nueva York es el hogar de ocho millones de personas y recibe más de 50 millones de visitantes por año. Nueva York es una metrópolis internacional construida sobre los hombros de los inmigrantes y sus descendientes. La Ciudad de Nueva York es el hogar de ocho millones de personas y recibe más de 50 millones de visitantes por año.',
                'user_id' => 6
            ],
            
            [
                'title' => 'Vive Estambul',
                'location' => 'Turquía',
                'image_path' => 'storage/images/istambul.jpg',
                'description' => 'Estambul debe su importancia histórica y su increíble patrimonio cultural y arquitectónico a su estratégica ubicación, a caballo entre el estrecho del Bósforo que separa Europa de Asia Menor. A través de la mayor parte de sus 2.500 años de larga historia, la ciudad (conocida primero como Bizancio, luego como Constantinopla y desde 1930 como Estambul) era un crisol de culturas.',
                'user_id' => 3
            ],
            [
                'title' => 'Vietnam a tu alcance',
                'location' => 'Vietnam',
                'image_path' => 'storage/images/vietnam.jpg',
                'description' => 'No te pierdas este maravillo viaje, descubrirás la esencia de Vietnam pasando 8 noches en este espectacular destino. Además, pasarás una de las noches a bordo de un junco para descubrir la Bahía de Halong. No te pierdas este maravillo viaje, descubrirás la esencia de Vietnam pasando 8 noches en este espectacular destino. n viaje que quedará en tu recuerdo.',
                'user_id' => 2
            ],
            [
                'title' => 'Londres auténtico',
                'location' => 'Reino Unido',
                'image_path' => 'storage/images/big-ben.jpg',
                'description' => 'Londres es una ciudad diversa y emocionante con algunas de las mejores vistas, atracciones y actividades del mundo. Con tanto que hacer, es difícil delimitar la larga lista de razones para visitarla, pero a continuación encontrará nuestro top 10. Principales Lugares de interés: No podrá contener la emoción por las increíbles atracciones de Londres.',
                'user_id' => 6
            ],
            [
                'title' => 'Lanzarote, tierra de fuego',
                'location' => 'España',
                'image_path' => 'storage/images/lanzarote.jpg',
                'description' => 'Al igual que con las otras Islas Canarias, Lanzarote es de origen volcánico. Debido a las recientes erupciones durante los siglos 18 y 19, muchas partes de Lanzarote parecen ser de otro mundo, a menudo descrito como lunar.',
                'user_id' => 4
            ],
            [
                'title' => 'Leyendas de Túnez',
                'location' => 'Túnez',
                'image_path' => 'storage/images/tunez.jpg',
                'description' => 'Túnez es sol, es playa, es calor y amabilidad. Pero también es desierto, es aventura, es exotismo, es historia y riqueza cultural. El paraíso a las puertas del Sáhara.Túnez es sol, es playa, es calor y amabilidad. Pero también es desierto, es aventura, es exotismo, es historia y riqueza cultural. El paraíso a las puertas del Sáhara.',
                'user_id' => 2
            ],
          

        ];

        DB::table('trips')->insert($trips);
    }
}
