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
        //riporto i dati che mi servono dell'api qui così da poter richiamare l'api internamente
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
            ],
            [
                "name" => "Eriadu",
                "diameter" => "13490",
                "terrain"=> "cityscape",
                "population" => "22000000000",
                "films" => [],
            ],
            [
                "name" => "Corellia",
                "diameter" => "11000",
                "terrain" => "plains, urban, hills, forests",
                "population" => "3000000000",
                "films" => [],
            ],
            [
                "name"=> "Rodia",
                "diameter"=> "7549",
                "terrain"=> "jungles, oceans, urban, swamps",
                "population"=> "1300000000",
                "films"=> [],
            ],
            [
                "name"=> "Nal Hutta",
                "diameter"=> "12150",
                "terrain"=> "urban, oceans, swamps, bogs",
                "population"=> "7000000000",
                "films"=> [],
            ],
            [
                "name" => "Dantooine",
                "diameter" => "9830",
                "terrain" => "oceans, savannas, mountains, grasslands",
                "population" => "1000",
                "films" => [],
            ],
            [
                "name"=> "Bestine IV",
                "diameter"=> "6400",
                "terrain"=> "rocky islands, oceans",
                "population"=> "62000000",
                "films"=> [],
            ],
            [
                "name" => "Ord Mantell",
                "diameter" => "14050",
                "terrain" => "plains, seas, mesas",
                "population" => "4000000000",
                "films" => [
                    "https://swapi.dev/api/films/2/"
                ],
            ],
            [
                "name"=> "unknown",
                "diameter" => "0",
                "terrain" => "unknown",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name"=> "Trandosha",
                "diameter"=> "0",
                "terrain"=> "mountains, seas, grasslands, deserts",
                "population" => "42000000",
                "films" => [],
            ],
            [
                "name" => "Socorro",
                "diameter" => "0",
                "terrain" => "deserts, mountains",
                "population" => "300000000",
                "films"=> [],

            ],
            [
                "name" => "Mon Cala",
                "diameter" => "11030",
                "terrain" => "oceans, reefs, islands",
                "population" => "27000000000",
                "films" => [],

            ],
            [
                "name" => "Chandrila",
                "diameter"=> "13500",
                "terrain" => "plains, forests",
                "population" => "1200000000",
                "films" => [],

            ],
            [
                "name" => "Sullust",
                "diameter" => "12780",
                "terrain" => "mountains, volcanoes, rocky deserts",
                "population" => "18500000000",
                "films" => [],
            ],
            [
                "name" => "Toydaria",
                "diameter" => "7900",
                "terrain" => "swamps, lakes",
                "population" => "11000000",
                "films"=> [],
            ],
            [
                "name" => "Malastare",
                "diameter" => "18880",
                "terrain" => "swamps, deserts, jungles, mountains",
                "population" => "2000000000",
                "films" => [],
            ],
            [
                "name" => "Dathomir",
                "diameter" => "10480",
                "terrain" => "forests, deserts, savannas",
                "population" => "5200",
                "films" => [],
            ],
            [
                "name" => "Ryloth",
                "diameter" => "10600",
                "terrain" => "mountains, valleys, deserts, tundra",
                "population" => "1500000000",
                "films" => [],
            ],
            [
                "name" => "Aleen Minor",
                "diameter" => "unknown",
                "terrain" => "unknown",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Vulpter",
                "diameter" => "14900",
                "terrain" => "urban, barren",
                "population" => "421000000",
                "films" => [],
            ],
            [
                "name" => "Troiken",
                "diameter" => "unknown",
                "terrain" => "desert, tundra, rainforests, mountains",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Tund",
                "diameter" => "12190",
                "terrain" => "barren, ash",
                "population" => "0",
                "films" => [],

            ],
            [
                "name" => "Haruun Kal",
                "diameter" => "10120",
                "terrain" => "toxic cloudsea, plateaus, volcanoes",
                "population" => "705300",
                "films" => [],

            ],
            [
                "name" => "Cerea",
                "diameter" => "unknown",
                "terrain" => "verdant",
                "population" => "450000000",
                "films" => [],

            ],
            [
                "name" => "Glee Anselm",
                "diameter" => "15600",
                "terrain" => "lakes, islands, swamps, seas",
                "population" => "500000000",
                "films" => [],

            ],
            [
                "name" => "Iridonia",
                "diameter" => "unknown",
                "terrain" => "rocky canyons, acid pools",
                "population" => "unknown",
                "films" => [],

            ],
            [
                "name" => "Tholoth",
                "diameter" => "unknown",
                "terrain" => "unknown",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Iktotch",
                "diameter" => "unknown",
                "terrain" => "rocky",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Quermia",
                "diameter" => "unknown",
                "terrain" => "unknown",
                "population" => "unknown",
                "films" => [],

            ],
            [
                "name" => "Dorin",
                "diameter" => "13400",
                "terrain" => "unknown",
                "population" => "unknown",
                "films"=> [],

            ],
            [
                "name" => "Champala",
                "diameter" => "unknown",
                "terrain" => "oceans, rainforests, plateaus",
                "population" => "3500000000",
                "films" => [],
            ],
            [
                "name" => "Mirial",
                "diameter" => "unknown",
                "terrain" => "deserts",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Serenno",
                "diameter" => "unknown",
                "terrain" => "rainforests, rivers, mountains",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Concord Dawn",
                "diameter" => "unknown",
                "terrain" => "jungles, forests, deserts",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Zolan",
                "diameter" => "unknown",
                "terrain" => "unknown",
                "population" => "unknown",
                "films" => [],

            ],
            [
                "name" => "Ojom",
                "diameter"=> "unknown",
                "terrain" => "oceans, glaciers",
                "population" => "500000000",
                "films" => [],

            ],
            [
                "name" => "Skako",
                "diameter" => "unknown",
                "terrain" => "urban, vines",
                "population" => "500000000000",
                "films" => [],
            ],
            [
                "name" => "Muunilinst",
                "diameter" => "13800",
                "terrain" => "plains, forests, hills, mountains",
                "population" => "5000000000",
                "films" => [],

            ],
            [
                "name" => "Shili",
                "diameter" => "unknown",
                "terrain" => "cities, savannahs, seas, plains",
                "population" => "unknown",
                "films" => [],
            ],
            [
                "name" => "Kalee",
                "diameter" => "13850",
                "terrain" => "rainforests, cliffs, canyons, seas",
                "population" => "4000000000",
                "films" => [],

            ],
            [
                "name" => "Umbara",
                "diameter" => "unknown",
                "terrain" => "unknown",
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
