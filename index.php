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
$movie_4 = new Movies ("Lo hobbit: la desolazione di Smaug", "Fantascienza", "No");
$movie_5 = new Movies ("Lo hobbit: la battaglia delle 5 armate", "Fantascienza", "No");

echo  "<div>".$movie_1->title. "  " .$movie_1->seenMovie($movie_1->seen)."</div> <br>";
echo "<div>".$movie_2->title. "  " .$movie_2->seenMovie($movie_2->seen)."</div> <br>";
echo "<div>".$movie_3->title. "  " .$movie_3->seenMovie($movie_3->seen)."</div> <br>";
echo "<div>".$movie_4->title. "  " .$movie_4->seenMovie($movie_4->seen)."</div> <br>";
echo "<div>".$movie_5->title. "  " .$movie_5->seenMovie($movie_5->seen)."</div> <br>";
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