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

$tvSeriesList = [
    new TvSerie("Prima produzione","it",10,new Genre("Produzione 1","Fantastica"),5),
    new TvSerie("Seconda produzione","en",10,new Genre("Produzione 2","Bella"),4),
    new TvSerie("Terza produzione","jp",10,new Genre("Produzione 3","Fantastica"),8),
    new TvSerie("Quarta produzione","jp",10,new Genre("Produzione 4","Entusiasmante"),1),
    new TvSerie("Quinta produzione","it",10,new Genre("Produzione 5","Famosa"),4),
    new TvSerie("Sesta produzione","en",10,new Genre("Produzione 6","Fantastica"),3),
];
//var_dump($products);
