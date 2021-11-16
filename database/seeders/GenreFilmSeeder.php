<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreId = Genre::pluck('id')->toArray();
        $filmId = Film::pluck('id')->toArray();

        $gengeFilms = [];

        foreach ($filmId as $film) {
            $taggable['film_id'] = $film;
            $taggable['genre_id'] = array_rand($genreId, 1);
            $taggable['created_at'] = now();
            $taggable['updated_at'] = now();

            $gengeFilms[] = $taggable;

            $random = rand(0, 1);
            if ($random) {
                $taggable['genre_id'] = array_rand($genreId, 1);
                $gengeFilms[] = $taggable;
            }
        }


        DB::table('genge_films')->insert($gengeFilms);

        $this->command->info('Genre Films table loaded with data!');
    }
}
