<?php

class Movies{
    public $title;
    public $genre;
    public $year;
    public $seen;

    function __construct($_title, Array  $_genre,  $_seen){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->seen = $_seen;
    }
    public function seenMovie($seen){
        if($seen === "Si"){
            return  "Si, gia visto";
        }else{
            return "No, da vedere";
        }

    }
};
class Genres{
    public $genre;
  
    
    function __construct($_genre){
        $this->genre = $_genre;
       
    }
}
$genre_1 = new Genres ("Fantascienza");
$genre_2 = new Genres ("Storico" );
$genre_3 = new Genres ("Azione" );
$genre_4 = new Genres ("Thriller" );

$movie_1 = new Movies("Il signore degli anelli: la compagnia dell'anello", [$genre_1, $genre_3], "Si" );
var_dump($movie_1);

$movie_2 = new Movies ("Il signore degli anelli: le due torri", [$genre_1], "Si");
$movie_3 = new Movies ("Il signore degli anelli: il ritorno del re", [$genre_1], "Si");
$movie_4 = new Movies ("Spiral", [$genre_2], "No");
$movie_5 = new Movies ("Scream V", [$genre_2], "No");
$movie_6 = new Movies ("Quo vado", [$genre_3], "No");
$movie_7 = new Movies ("Your Name", [$genre_1], "No");
$movie_8 = new Movies ("One Piece: Red", [$genre_1], "Si");
$movie_9 = new Movies ("Quella casa nel bosco", [$genre_2], "Si");
$movie_10 = new Movies ("Shutter island", [$genre_4], "No"); 

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
    "<ul>" .
    "<li>". "Titolo:". " " .$movie->title ."<br>". "Genere:". " " .$movie->genre ."<br>" ."Hai visto questo film?:". " " .$movie->seenMovie($movie->seen) ."<br>" ."</li>" 
    ."</ul>";
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