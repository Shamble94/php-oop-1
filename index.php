<?php

class Movies{
    public $title;
    public $genre;
    public $year;
    public $seen;

    function __construct($_title, $_genre, $_seen){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->seen = $_seen;
    }
    public function seenMovie($seen){
        if($seen === "Si"){
            return  "Visto";
        }else{
            return "Da vedere";
        }

    }
}


$movie_1 = new Movies("Il signore degli anelli: la compagnia dell'anello", "Fantascienza", "Si");
$movie_2 = new Movies ("Il signore degli anelli: le due torri", "Fantascienza", "Si");
$movie_3 = new Movies ("Il signore degli anelli: il ritorno del re", "Fantascienza", "Si");
$movie_4 = new Movies ("Spiral", "Horror", "No");
$movie_5 = new Movies ("Scream V", "Horror", "No");
$movie_6 = new Movies ("Quo vado", "Commedia", "No");
$movie_7 = new Movies ("Your Name", "Romantico", "No");
$movie_8 = new Movies ("One Piece: Red", "Azione", "Si");
$movie_9 = new Movies ("Quella casa nel bosco", "Horror", "Si");
$movie_10 = new Movies ("Shutter island", "Thriller", "No");

$movies = [
    $movie_1,
    $movie_2,
    $movie_3,
    $movie_4,
    $movie_5,
    $movie_6,
    $movie_7,
    $movie_8,
    $movie_9,
    $movie_10,
    
];

echo "Lista Film";
foreach ($movies as $movie){
    echo
    "<ul>" ."<li>". "Titolo:". " " .$movie->title ."<br>". "Genere:". " " .$movie->genre ."<br>" ."Hai visto questo film?:". " " .$movie->seen ."<br>" ."</li>" ."</ul>";
    ;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>