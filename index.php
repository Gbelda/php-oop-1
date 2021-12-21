
<?php

//  definita una classe ‘Movie’

use JetBrains\PhpStorm\Language;

class Movie{

    //  all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $year;
    public $rating;
    public $genre;
    public $language;

    // all'interno della classe è definito un costruttore

    function __construct(String $title, int $year, float $rating, String $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->rating = $rating;
        $this->genre = $genre;
    }

    // all'interno della classe è definito almeno un metodo

    public function setLanguage($language){
        $this->language = $language;
    }

}

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

$spiderman = new Movie('Spiderman: Far From Home', 2019, 4.1, 'action');
$sing = new Movie('Sing', 2016, 4.4, 'musical');

$spiderman->setLanguage('english');
$sing->setLanguage('english');

?>

<h1>MOVIE 1</h1>
<?php foreach ($spiderman as $key => $value) { ?>
    <p><?php echo strtoupper($key).':'?> <?php echo $value ?></p>
 <?php } ?>

 <h1>MOVIE 2</h1>
<?php foreach ($sing as $key => $value) { ?>
    <p><?php echo strtoupper($key).':'?> <?php echo $value ?></p>
 <?php } ?>