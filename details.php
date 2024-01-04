<?php
    require_once('./functions.php');
    $film_id = verify_fims_id();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineInfo</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="details-body">
    <?php
        echo "<style>
            .details-body{
                background-image: url('https://image.tmdb.org/t/p/original$film_id->backdrop_path');
            }
        </style>";
    ?>
    <div class='blur'></div>
    <div class='content'><?php echo  $film_id->overview?></div>
</body>
</html>

