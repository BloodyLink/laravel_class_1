<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_pokemon', function () {
    $pokemons = [
        0 => [
            "name" => "Pikachu",
            "type" => "Electric",
            "catch_rate" => "24.8%",
            "height" => "0.4m",
            "weight" => "6.0kg",
            "picture" => "https://biturl.top/neEnMn"
        ],
        1 => [
            "name" => "Lucario",
            "type" => "Fighting/Steel",
            "catch_rate" => "5.9%",
            "height" => "1.2m",
            "weight" => "54.0kg",
            "picture" => "https://biturl.top/Nziu63"
        ],
        2 => [
            "name" => "Mewtwo",
            "type" => "Psychic",
            "catch_rate" => "0.4%",
            "height" => "2.0m",
            "weight" => "122kg",
            "picture" => "https://biturl.top/VRz2Qz"
        ],
        3 => [
            "name" => "Blastoise",
            "type" => "Water",
            "catch_rate" => "5.9%",
            "height" => "1.6m",
            "weight" => "85.5kg",
            "picture" => "https://biturl.top/zimiIr"
        ]
    ];

    return view('pokemon_example')->with('pokemons', $pokemons);
});

