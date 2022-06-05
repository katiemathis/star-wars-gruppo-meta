<?php

use Illuminate\Database\Seeder;
use App\Planet;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planets = [
            [
                "name" => "Tatooine",
                "diameter" => "10465",
                "terrain" => "desert",
                "population" => "200000",
                "films" => [
                    "https://swapi.dev/api/films/1/",
                    "https://swapi.dev/api/films/3/",
                    "https://swapi.dev/api/films/4/",
                    "https://swapi.dev/api/films/5/",
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Alderaan",
                "diameter" => "12500",
                "terrain" => "grasslands, mountains",
                "population" => "2000000000",
                "films" => [
                    "https://swapi.dev/api/films/1/",
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Yavin IV",
                "diameter" => "10200",
                "terrain" => "jungle, rainforests",
                "population" => "1000",
                "films" => [
                    "https://swapi.dev/api/films/1/"
                ],
            ],
            [
                "name" => "Hoth",
                "diameter" => "7200",
                "terrain" => "tundra, ice caves, mountain ranges",
                "population" => "unknown",
                "films" => [
                    "https://swapi.dev/api/films/2/"
                ],
            ],
            [
                "name" => "Dagobah",
                "diameter" => "8900",
                "terrain" => "swamp, jungles",
                "population" => "unknown",
                "films" => [
                    "https://swapi.dev/api/films/2/",
                    "https://swapi.dev/api/films/3/",
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Bespin",
                "diameter" => "118000",
                "terrain" => "gas giant",
                "population" => "6000000",
                "films" => [
                    "https://swapi.dev/api/films/2/"
                ],
            ],
            [
                "name" => "Endor",
                "diameter" => "4900",
                "terrain" => "forests, mountains, lakes",
                "population" => "30000000",
                "films" => [
                    "https://swapi.dev/api/films/3/"
                ],
            ],
            [
                "name" => "Naboo",
                "diameter" => "12120",
                "terrain" => "grassy hills, swamps, forests, mountains",
                "population" => "4500000000",
                "films" => [
                    "https://swapi.dev/api/films/3/",
                    "https://swapi.dev/api/films/4/",
                    "https://swapi.dev/api/films/5/",
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Coruscant",
                "diameter" => "12240",
                "terrain" => "cityscape, mountains",
                "population" => "1000000000000",
                "films" => [
                    "https://swapi.dev/api/films/3/",
                    "https://swapi.dev/api/films/4/",
                    "https://swapi.dev/api/films/5/",
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Kamino",
                "diameter" => "19720",
                "terrain" => "ocean",
                "population" => "1000000000",
                "films" => [
                    "https://swapi.dev/api/films/5/"
                ],
            ],
        ];

        foreach($planets as $planet) {
            $newPlanet = new Planet();

            $newPlanet->name = $planet['name'];
            $newPlanet->diameter = $planet['diameter'];
            $newPlanet->terrain = $planet['terrain'];
            $newPlanet->population = $planet['population'];
            $newPlanet->films = $planet['films'];
            $newPlanet->slug = Str::slug($newPlanet->name);
            $counter = 1;
            while (Planet::where('slug', $newPlanet->slug)->first()) {
                $newPlanet->slug = Str::slug($newPlanet->name) . '-' . $counter;
                $counter++;
            }

            $newPlanet->save();



        }
        
    }
}
