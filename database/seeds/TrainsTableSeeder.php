<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();

            $train->azienda = $faker->word();
            $train->data_di_partenza = $faker->dateTimeThisYear();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = rand(10000, 99999);
            $train->numero_carrozze = rand(1, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            

            $train->save();
        }
    }
}
