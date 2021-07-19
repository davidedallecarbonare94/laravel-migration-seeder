<?php

use Illuminate\Database\Seeder;
use App\Journey;
use Faker\Generator as Faker;
class JourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $journey = new Journey();
            $journey->zona = $faker->state();
            $journey->giorni = $faker->numberBetween(2, 14);
            $journey->prezzo = $faker->numberBetween(400, 2000);
            $journey->pernottamento = $faker->randomElement(['Hotel', 'Bungalow', 'Open-air', 'Villa', 'Camping', 'Villaggio Turistico']);
            $journey->tipologia = $faker->randomElement(['Tutto Incluso', 'Solo Pernottamento', 'Solo visite guidate']);
            $journey->volo = $faker->randomElement(['Milano Malpensa', 'Linate', 'Ciampino', 'Venezia']);
            $journey->pasti = $faker->randomElement(['Tutto incluso', 'Solo colazione', 'Mezza pensione', 'Tutto incluso escluso alcolici']);
            $journey->save();

        }
    }
}
