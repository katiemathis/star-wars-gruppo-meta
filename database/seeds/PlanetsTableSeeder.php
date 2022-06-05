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
            [
                "name" => "Geonosis",
                "diameter" => "11370",
                "terrain" => "rock, desert, mountain, barren",
                "population" => "100000000000",
                "films" => [
                    "https://swapi.dev/api/films/5/"
                ],
                
            ],
            [
                "name" => "Utapau",
                "diameter" => "12900",
                "terrain" => "scrublands, savanna, canyons, sinkholes",
                "population" => "95000000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Mustafar",
                "diameter" => "4200",
                "terrain" => "volcanoes, lava rivers, mountains, caves",
                "population" => "20000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Kashyyyk",
                "diameter" => "12765",
                "climate" => "tropical",
                "terrain" => "jungle, forests, lakes, rivers",
                "population" => "45000000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Polis Massa",
                "diameter" => "0",
                "climate" => "artificial temperate ",
                "terrain" => "airless asteroid",
                "population" => "1000000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Mygeeto",
                "diameter" => "10088",
                "climate" => "frigid",
                "terrain" => "glaciers, mountains, ice canyons",
                "population" => "19000000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],

            ],
            [
                "name" => "Felucia",
                "diameter" => "9100",
                "climate" => "hot, humid",
                "terrain" => "fungus forests",
                "population" => "8500000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Cato Neimoidia",
                "diameter" => "0",
                "terrain" => "mountains, fields, forests, rock arches",
                "population" => "10000000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Saleucami",
                "diameter" => "14920",
                "terrain" => "caves, desert, mountains, volcanoes",
                "population" => "1400000000",
                "films" => [
                    "https://swapi.dev/api/films/6/"
                ],
            ],
            [
                "name" => "Stewjon",
                "diameter" => "0",
                "terrain" => "grass",
                "population" => "unknown",
                "films" => [],
            ]
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
