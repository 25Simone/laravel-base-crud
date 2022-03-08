<?php

// Import the Model
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Save db in a variable
        $comics = config("laravel-crud-db");
        
        foreach ($comics as $key => $comic) {
            // Instance a new line
            $newComic = new Comic;

            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];

            // Save the line
            $newComic->save();
        }
    }
}
