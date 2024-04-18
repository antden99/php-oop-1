<?php

include_once __DIR__ .'/Models/Production.php';

//creo un array di products
$products= [
    new Production("Anto","Ita",10),
    new Production("Fra","Eng",5),
    new Production("Ger","Fra",50),
];

//var_dump($products);
?>