<?php
require_once('../Td-cinema/functions.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineInfo</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <header class="header-wrapper">
        <nav>
            <div class="burger-menu">
                <div class="top-line"></div>
                <div class="mid-line"></div>
                <div class="bot-line"></div>
            </div>
            <a href="">Cine<span><img src="./assets/img/popcorn.svg" alt="popcorn logo info ciné" class="logo"></span>nfo</a>
            <div class="blank"></div>
            
        </nav>
    </header>
    <h1>Les plus populaires</h1>
    <section class="cards">
        <?php 
            foreach (get_films()->results as $key => $value) {
                echo "<a href=\"http://td-cinema/details.php?film=$value->id\"><div class=\"card\">
                        <div class=\"image\">
                            <img src=\"https://image.tmdb.org/t/p/original$value->poster_path\" class=\"poster\">
                        </div>
                        <div class=\"info-film\">
                            <p class=\"title\">$value->title</p>
                            <p class=\"runtime\"></p>
                        </div>
                        
                    </div></a>";
            }
        
        ?>

    </section>
    <div class="test">
        <div class="test2"></div>
    </div>
    
    <form method="get">
   
   <input type="submit" name="page" value="Action N°1">
   <input type="submit" name="page" value="Action N°2">
</form>


<!-- ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

