<?php

include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';


//creo un array di products
$products = [
    new Production("Anto", "Ita", 10, new Genre("Horror", "Spaventoso,Brutto")),
    new Production("Fra", "Eng", 5, new Genre("Action", "Bello,Intrigante")),
    new Production("Ger", "Fra", 50, new Genre("Fantasy", "Suspance,Immagination")),
    new Production("Giov", "Eng", 9, new Genre("Horror", "Spaventoso,Brutto")),
];

//var_dump($products);
