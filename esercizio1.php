<?php
/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
     * Olimpia Milano - Cantù | 55-60
 */

 $arrayPartite= [
    [
    "teamCasa" => "Olimpia Milano",
    "teamOspite" => "Cantù",
    "pointCasa" => "55",
    "pointOspite" => "60",
    ],
    [
        "teamCasa" => "Siena",
        "teamOspite" => "Firenze",
        "pointCasa" => "52",
        "pointOspite" => "80",
    ],
    [
        "teamCasa" => "Pisa",
        "teamOspite" => "Livorno",
        "pointCasa" => "5",
        "pointOspite" => "65",
    ],
    [
        "teamCasa" => "Russia",
        "teamOspite" => "Ucraina",
        "pointCasa" => "12",
        "pointOspite" => "80",
    ],
    [
        "teamCasa" => "USA",
        "teamOspite" => "Germania",
        "pointCasa" => "100",
        "pointOspite" => "50",
    ],

 ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Bascket</title>
</head>
<body>
    <h1>Partite</h1>
    <ul>
        <?php for($i = 0; $i < count($arrayPartite) ; $i++) { ?>

           <li> <?php echo($arrayPartite[$i]["teamCasa"]. " - ". $arrayPartite[$i]["teamOspite"]. " - ". $arrayPartite[$i]["pointCasa"]. " - ". $arrayPartite[$i]["pointOspite"]     ) ?> </li>

        <?php } ?>
    </ul>
</body>
</html>