<?php 

/* Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta */
 $array = []; 
 $black =[];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 4 (random number)</title>
</head>
<body>

    <h1>Ecco i numeri randomici:</h1>

    <p>
        <?php

            $numbersArray=[];

            while(count($numbersArray) < 15){
                
                $randomNumber = rand(0,100);
                if(!in_array($randomNumber, $numbersArray)){
                    $numbersArray[] = $randomNumber;
                    echo $randomNumber . '<br>';
                }
            }
        ?>
    </p>

</body>
</html>