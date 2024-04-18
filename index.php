<?php



class Production { //dichiaro la classe Production con tre proprietà pubbliche(quindi sono accessibili dall'esterno)
    public $title;
    public $language;
    public $vote;

    //dichiaro la funzione costruttore che prende tre parametri in ingresso che vengono specificati per come devono essere
    function __construct(string $title,string $language,int $vote) {
        //con il this. mi riferisco alla singola istanza, quindi la struttura è quella sopra e quando costruisco un nuovo oggetto dirò, di questo oggetto assegna questi parametri a queste proprietà
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}

//definisco una variabile first a cui assegno la nuova istanza con (new) della classe Production a cui passo i 3 parametri corretti
$first = new Production("Anto","Ita",10);

var_dump($first);
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
    <div id="app">
        {{message}}
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