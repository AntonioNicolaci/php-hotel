<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOLing.com</title>
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <div id="table">
        <div class="col">
            <span class="row"><p>Nome dell'Hotel</P></span>
            <span class="row"><p>Descrizione</P></span>
            <span class="row"><p>Parcheggio</P></span>
            <span class="row"><p>Voto</P></span>
            <span class="row"><p>Distanza dal centro</P></span>
        </div>
            <?php 
                foreach ($hotels as $hotel => $value) {
                    echo '<div class="col">';
                    foreach ($value as $key => $h) {
                            if ($key == 'name') {
                                echo "<span class='row'><span>". $h. "</span></span>";
                            } elseif ($key == "description") {
                                echo "<span class='row'><p>". $h. "</p></span>";
                            } elseif ($key == "parking") {
                                echo "<span class='row'>";
                                if ($h == true) {
                                    echo "<p style='color: green'>Presente</p>";
                                }
                                else {
                                    echo "<p style='color: red'>Non presente</p>";
                                }
                                echo  "</span>";
                            } elseif ($key == "vote") {
                                echo "<span class='row'><p>". $h. "</p></span>";
                            } elseif ($key == "distance_to_center") {
                                echo "<span class='row'><p>". $h. "</p></span>";
                            }
                        }
                        echo '</div>';
                    }
            ?>
        
    </div>
    
</body>
</html>