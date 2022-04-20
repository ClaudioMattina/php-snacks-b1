<?php
/**
     * Secondo snack
     *
     *  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * - name sia più lungo di 3 caratteri,
     * - che mail contenga un punto e una chiocciola e 
     * - che age sia un numero.
     * 
     *  Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
     */

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

/* if(count($name) > 3 
    && is_numeric($age) 
    && strpos($email,"@") 
    && strpos($email,".") ) {
        
    }
    
else{
    
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio due</title>
</head>
<body>

    <?php
     if (strlen($name) > 3 && is_numeric($age) && strpos($email,".") && strpos($email,"@") ) {

        echo "Accesso Riuscito :D";
     } else {
        echo "Accesso respinto";
     }
    ?>
    

</body>
</html>

