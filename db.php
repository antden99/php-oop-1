<?php

include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/Models/TvSerie.php';



//creo un array di products
$products = [
    new Production("Anto", "Ita", 10, new Genre("Horror", "Spaventoso,Brutto")),
    new Production("Fra", "Eng", 5, new Genre("Action", "Bello,Intrigante")),
    new Production("Ger", "Fra", 50, new Genre("Fantasy", "Suspance,Immagination")),
    new Production("Giov", "Eng", 9, new Genre("Horror", "Spaventoso,Brutto")),
];


$movieList = [
    new Movie("American Pie", "en", 8, new Genre("bello", "film divertente"), "10k", "10"),
    new Movie("American Pie 2", "en", 10, new Genre("bello", "film divertente,esilarante"), "15k", "5"),

];
//var_dump($products);
