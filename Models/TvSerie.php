<?php
include_once __DIR__ . '/Production.php';
include_once __DIR__ . '/Genre.php';

class TvSerie extends Production
{
    public $numberSeasons;

    public function __construct(string $title, string $language, int $vote, array $genre, int $numberSeasons)
    {
        parent::__construct($title, $language, $vote, $genre);

        $this->numberSeasons = $numberSeasons;
    }


    //Get
    public function getNumberSeasons()
    {
        return $this->numberSeasons;
    }

    //Set
    public function setNumberSeasons($numberSeasons)
    {
        $this->numberSeasons = $numberSeasons;
    }
}

//$numberSeason = new TvSerie("Prima produzione","it",10,new Genre("Produzione 1","Fantastica"),5);
//var_dump($numberSeason);
