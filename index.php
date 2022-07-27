<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;
    public $poster;

    public function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function howLongAgo() {
        return (idate('Y') - $this->year);
    }

}

$akira = new Movie('Akira', 'scifi');
$akira->year = 1988;
$akira->director = 'Katsuhiro Otomo';
$akira->poster = 'https://image.tmdb.org/t/p/w342/4wBap8l5gOhyIeaoeRqcruXOSOs.jpg';

$bttf = new Movie('Ritorno al Futuro', 'scifi');
$bttf->year = 1985;
$bttf->director = 'Robert Zemeckis';
$bttf->poster = 'https://image.tmdb.org/t/p/w342/AkmUoSHkxW9txpzZ52gCcWweEkE.jpg';

$labirintoDelFauno = new Movie('Il labirinto del fauno', 'fantasy');
$labirintoDelFauno->year = 2006;
$labirintoDelFauno->director = 'Guillermo del Toro';
$labirintoDelFauno->poster = 'https://image.tmdb.org/t/p/w342/fZaGhQbcZjawczIH1aI32NZE1HN.jpg';

$tron = new Movie('Tron', 'scifi');
$tron->year = 1982;
$tron->director = 'Steven Lisberger';
$tron->poster = 'https://image.tmdb.org/t/p/w342/yObE2IlhxqVA17dbLtd38Ojhmhz.jpg';

var_dump($akira->howLongAgo());
var_dump($akira);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentiti vecchio tramite i film</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>