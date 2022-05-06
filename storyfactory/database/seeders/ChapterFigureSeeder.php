<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChapterFigureSeeder extends Seeder
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
            DB::table('chapter_has_figure')->insert([
                'id_chapter'=>$faker->numberBetween(1,10),
                'id_figure'=>$faker->numberBetween(1,10),
            ]);
        }
    }
}
