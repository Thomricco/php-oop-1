<?php

class Movie {

    public $title;
    public $author;
    public $gnre;

    function __construct($_title, $_author, $_gnre) {
        $this->title = $_title;
        $this->author = $_author;
        $this->gnre = $_gnre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFullInfo() {
        return $this->author . "</br>" . $this->gnre;
    }


}

$movies01 = new Movie("Le Iene", "Quentin Tarantino", "Gangster");

$movies02 = new Movie("Django", "Quentin Tarantino", "Wenster");

$movies03 = new Movie("Il grande Lebowski", "Joel Coen", "Commedia");

$movies04 = new Movie("Il grande Gatsby", "Baz Luhrmann", "Drammatico");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>


<body>
    <div class="navbar">    
        <div class="nav">
        <img class="logo" src="https://media-assets.wired.it/photos/615ef4b55ccc3b73fb14d5b2/master/pass/wired_placeholder_dummy.png" alt="">
        </div>
        <select 
        class="selettore">
            <option disabled value="">Scegli il tuo genere</option>
            <option value="">Tutti</option>
        </select>
        
    </div>


    <main>

        <div class="container">
            <div class="container-album">
                <div class="album-box">
                    
                    <div class="box">
                        <img src="http://aforismi.meglio.it/img/film/Le_Iene_film.jpg" class="box-img" alt="">
                        <p class="text-title"><?php echo $movies01->getTitle() ?></p>
                        <p class="text-author"><?php echo $movies01->getFullInfo() ?></p>
                    </div>

                    <div class="box">
                        <img src="https://m.media-amazon.com/images/I/51BOJP4CvVL.jpg" class="box-img" alt="">
                        <p class="text-title"><?php echo $movies02->getTitle() ?></p>
                        <p class="text-author"><?php echo $movies02->getFullInfo() ?></p>
                    </div>

                   

                    <div class="box">
                        <img src="https://www.roseto.com/foto/FT1-16766222.jpg" class="box-img" alt="">
                        <p class="text-title"><?php echo $movies03->getTitle() ?></p>
                        <p class="text-author"><?php echo $movies03->getFullInfo() ?></p>
                    </div>
                    
                    <div class="box">
                        <img src="https://pad.mymovies.it/filmclub/2010/11/083/locandina.jpg" class="box-img" alt="">
                        <p class="text-title"><?php echo $movies04->getTitle() ?></p>
                        <p class="text-author"><?php echo $movies04->getFullInfo() ?></p>
                    </div>
                    
                    
                </div>

            </div>

        </div>
        
    </main>


</body>


</html>