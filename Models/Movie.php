<?php
class Movie {
    public $profit;
    public $duration;

    public function __construct(string $profit,string $duration) {
        $this->profit = $profit;
        $this->duration = $duration;

    }


    //Get

    public function getProfit(){
        return $this->profit;
    }

    public function getDuration(){
        return $this->duration;
    }


    //Set

    public function setProfit($profit){
         $this->profit=$profit;
    }

    public function setDuration($duration){
         $this->duration=$duration;
    }
}

$movie = new Movie("ciao","ciao");

var_dump(($movie));

?>