<?php
include_once __DIR__ . '/Models/Genre.php';



class Production
{ //dichiaro la classe Production con tre proprietà pubbliche(quindi sono accessibili dall'esterno)
    public $title;
    public $language;
    public $vote;
    public $genre;
    //dichiaro la funzione costruttore che prende tre parametri in ingresso che vengono specificati per come devono essere
    function __construct(string $title, string $language, int $vote, array $genre)
    {
        //con il this. mi riferisco alla singola istanza, quindi la struttura è quella sopra e quando costruisco un nuovo oggetto dirò, di questo oggetto assegna questi parametri a queste proprietà
        $this->title = $title;
        $this->language = $language;

        if (($vote >= 1) && ($vote <= 10)) {
            $this->vote = $vote;
        } else {
            $this->vote = 0;
        }

        $this->genre = $genre;
    }
    //dichiaro una funzione che restituisce il titolo dell'oggetto
    function get_Title()
    {
        return $this->title;
    }

    function get_Language()
    {
        return $this->language;
    }

    function get_Vote()
    {
        return $this->vote;
    }
}
