<?php 
class Genre {
    public $name;
    public function __construct(String $name) {
        $this->name = $name;
    }
};

class Movie {
    public $title;
    public $language;
    public $genre;
    public $type = "movie";
    function __construct(String $title, String $language, Genre $genre) {
        $this->title = $title;
        $this->language = $language;
        $this->genre = $genre;
    }
};

$animeGenre = new Genre('Anime');
$thrillerGenre = new Genre('Thriller');


$spiritedAway = new Movie('Spirited Away', 'Japanese', $animeGenre);
$theNinthGate = new Movie('The Ninth Gate', 'English', $thrillerGenre);

var_dump($spiritedAway, $theNinthGate);
?>