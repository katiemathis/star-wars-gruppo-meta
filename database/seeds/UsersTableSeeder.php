<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //utilizziamo questo seeder per assicurarci che l'utente Luke con password "skywalker" esiste già nel database

        $users = [
            [
                "username" => "Luke",
                "email" => "luke@skywalker.com",
                "name" => "Luke",
                "lastname" => "Skywalker",
            ],
            [
                "username" => "prova",
                "email" => "prova@skywalker.com",
                "name" => "Prova",
                "lastname" => "Prova",
            ],
            
        ];

        foreach($users as $user) {

            $newUser = new User();

            $newUser->username = $user["username"];
            $newUser->name = $user["name"];
            $newUser->lastname = $user["lastname"];
            $newUser->email = $user["email"];
            $newUser->password = Hash::make('skywalker');
            $newUser->slug = Str::slug($newUser->username);
            $counter = 1;
            while (User::where('slug', $newUser->slug)->first()) {
                $newUser->slug = Str::slug($newUser->username) . '-' . $counter;
                $counter++;
            }

            $newUser->save();

        }
    }
}

