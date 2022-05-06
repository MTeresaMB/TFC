<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ManuscriptPlaceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();
    for($i = 0; $i < 1; $i++){
      DB::table('manuscript_has_place')->insert([
        'id_manuscript'=>$faker->numberBetween(1,10),
        'id_place'=>$faker->numberBetween(1,10),
      ]);
    }
  }
}
