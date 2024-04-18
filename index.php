<?php

include_once __DIR__ .'/Models/Production.php';
include_once __DIR__ .'/Models/Genre.php';
include_once __DIR__ .'/db.php';


//var_dump($products);      //nell'array $products ci sono contenuti la lista di oggetti prodotti

/*
//definisco una variabile first a cui assegno la nuova istanza con (new) della classe Production a cui passo i 3 parametri corretti
$first = new Production("Anto","Ita",10);
$second = new Production("Fra","Eng",5);
$third = new Production("Ger","Fra",50);
//stampo in pagina i due nuovi oggetti costruiti seguendo la classe Production
var_dump($first,$second,$third);

//stampo in pagina il titolo dell'oggetto $first tramite la funzione get_Title
var_dump($first->get_Title());

var_dump($second->get_Language());

var_dump($third->get_Vote());


costruisco per vedere se è collegato un $genre_1
$genre_1= new Genre("Horror" , "ABC");
var_dump($genre_1->get_Description());

*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Cdn Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--My Css-->
    <link rel="stylesheet" href="./assets/style.css">
    <title>PHP OOP</title>
</head>
<body>
    
    <div id="app" class="vh-100 d-flex align-items-center bg-dark">
    <div class="container text-center text-white">
        <h1>My Products List</h1>
        <div class="row">
            <?php foreach($products as $product): ?>  <!--apro un foreach -->
                <div class="col">
                    <div class="card rounded">
                        <div class="card-body">
                            <h5 class="card-title">Title:<?php echo $product->get_Title() ?></h5>
                            <div>Language:<?php echo $product->get_Language() ?></div>
                            <div>Vote:<?php echo $product->get_Vote() ?></div>
                            <div>Nome Genere:<?php echo $product->genre->get_Name() ?></div>
                            <div>Descrizione:<?php echo $product->genre->get_Description() ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>  <!--chiudo il foreach-->
        </div>
    </div>
    </div>



    <!--Cdn axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Cdn Vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--Cdn Js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--My js-->
    <script src="./assets/main.js"></script>
</body>
</html>