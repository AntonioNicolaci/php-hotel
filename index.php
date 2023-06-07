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
</head>
<body>
    <div>
    <?php 
        foreach ($hotels as $hotel => $value) {
            foreach ($value as $key => $h) {
                    if ($key == 'name') {
                        echo "<h2>Nome dell'Hotel: ". $h. "</h2>";
                    } elseif ($key == "description") {
                        echo "<h5>Descrizione: ". $h. "</h5>";
                    } elseif ($key == "parking") {
                        echo "<h5>";
                        if ($h == true) {
                            echo "E' presente parcheggio";
                        }
                        else {
                            echo "Non è presente parcheggio";
                        }
                        echo  "</h5>";
                        echo "<h5>". $h. "</h5>";
                    } elseif ($key == "vote") {
                        echo "<h5>Voto dell'hotel: ". $h. "</h5>";
                    } elseif ($key == "distance_to_center") {
                        echo "<h5>Distanza dal centro: ". $h. "</h5>";
                    }
                }
            }
    ?>    
    </div>
    
</body>
</html>