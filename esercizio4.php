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
            /* variabile vuota dove verranno inseriti i numeri randomici */
            $numbersArray=[];
            /* ciclo while che dice "fino a che l'arrey interessato non arriva ad avere 15 elementi continua */
            while(count($numbersArray) < 15){
                
                /* crea un numero randomico da 0 a 100 */
                $randomNumber = rand(0,100);

                /* se il numero generato NON è già nell'array,  */
                if(!in_array($randomNumber, $numbersArray)){
                    
                    /* allora inseriscicelo */
                    $numbersArray[] = $randomNumber;

                    /* e stampa il numero generato */
                    echo $randomNumber . '<br>';
                }
            }
        ?>
    </p>

</body>
</html>