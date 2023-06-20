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
    public $isRatedR = false;
    public $type = "movie";
    function __construct(String $title, String $language, Genre $genre) {
        $this->title = $title;
        $this->language = $language;
        $this->genre = $genre;
    }
    function isRatedR($minAge) {
        if ($minAge >= 18) {
            $this->isRatedR = true;
        } 
    }
};

$animeGenre = new Genre('Anime');
$thrillerGenre = new Genre('Thriller');


$spiritedAway = new Movie('Spirited Away', 'Japanese', $animeGenre);

$theNinthGate = new Movie('The Ninth Gate', 'English', $thrillerGenre);
$theNinthGate->isRatedR(20);

var_dump($spiritedAway, $theNinthGate);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>My OOP Movies</h1>


    </div>
</body>
</html>