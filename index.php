
<?php

//  definita una classe ‘Movie’
class Movie{

    //  all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $year;
    public $rating;
    public $genre;

    // all'interno della classe è definito un costruttore

    public function __construct(String $title, int $year, float $rating, String $genre)
    {
        $this.$title = $title;
        $this.$year = $year;
        $this.$rating = $rating;
        $this.$genre = $genre;
    }

    
}

