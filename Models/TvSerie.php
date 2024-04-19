<?php
class TvSerie {
    public $numberSeasons;

    public function __construct(int $numberSeasons,) {
        $this->numberSeasons = $numberSeasons;
       
    }


    //Get
    public function getNumberSeasons(){
        return $this->numberSeasons;
    }

    //Set
    public function setNumberSeasons($numberSeasons){
        $this->numberSeasons=$numberSeasons;
    }
    
}

$numberSeason = new TvSerie(10);

var_dump($numberSeason);

?>