<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Chapter;
use \App\Models\Figure;
use \App\Models\Note;
use \App\Models\Place;
use \App\Models\Manuscript;
use \App\Models\Article;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CreateUser::factory(10)->create();
        // Manuscript::factory(10)->create();
        // Place::factory(10)->create();
        // Article::factory(10)->create();
        // Chapter::factory(10)->create();
        // Figure::factory(10)->create();
        // Note::factory(10)->create();

        // $this->call([ChapterFigureSeeder::class]);
        // $this->call([ManuscriptPlaceSeeder::class]);
        // $this->call([ ManuscriptArticleSeeder::class]);
    }
}
