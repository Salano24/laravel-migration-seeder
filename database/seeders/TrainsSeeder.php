<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
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
            $train->azienda = $faker->slug(1);
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->ora_partenza = $faker->time();
            $train->ora_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('??-#########');
            $train->numero_carrozze = $faker->numberBetween(5, 30);
            $train->in_orario = $faker->randomElement([true, false]);
            $train->cancellato = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}