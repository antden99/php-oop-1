<?php

class Genre {
    public $name;
    public $description;


    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;

    }


    function get_Name(){
        return $this->name;
    }

    function get_Description(){
        return $this->description;
    }






}















?>