<?php

include_once __DIR__ . '/Production.php';
include_once __DIR__ . '/Genre.php';

class Movie extends Production
{
    public $profit;
    public $duration;

    public function __construct(string $title, string $language, int $vote, Genre $genre, string $profit, string $duration)
    {
        parent::__construct($title,  $language,  $vote, $genre);
        $this->profit = $profit;
        $this->duration = $duration;
    }

    //Get

    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuration()
    {
        return $this->duration;
    }


    //Set

    public function setProfit($profit)
    {
        $this->profit = $profit;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}

//$movie = new Movie("American Pie", "en", 10, new Genre("bello", "film divertente"), "10k", "10m");

//var_dump(($movie));

//$production = new Production("anto", "anto", 5, new Genre("ANTO", "ANTO"));

//var_dump($production);
?>



<!--Facciamo in modo che Movie e TVSerie ereditino le proprietà di base dalla classe Production-->