<?php
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z */
$posts = [
    "10/01/2020" => [

        [
            "title" => "post 1",
            "author" => "Michele Pagani",
            "text" => "text post 1"
        ],

        [
            "title" => "post 2",
            "author" => "dajee",
            "text" => "text post 2"
        ]      
    ],

    "11/01/2020" => [
        [
            "title" => "post 1",
            "author" => "bella storia",
            "text" => "text post 1"
        ] 
    ],

    "12/01/2020" => [
        [
            "title" => "post 1",
            "author" => "ciccio",
            "text" => "text post 1"
        ],
        [
            "title" => "post 2",
            "author" => "tizio",
            "text" => "text post 2"
        ],
        [
            "title" => "post 3",
            "author" => "ciaone",
            "text" => "text post 3"
        ] 
    ],
  
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terzo esercizio (array di array di array)</title>
</head>
<body>

    
        <ul>
            <?php
                $postsValues = array_values($posts);
                $postsKeys = array_keys($posts);

                for($i = 0; $i < count($postsKeys); $i++){ ;?>

                   <h2>Post data : <?php echo $postsKeys[$i]; ?> </h2>

                   <?php for($index = 0; $index < count($postsValues); $index++) {?>

                        <p>
                            <?php echo($postsValues[$i][$index]["title"]) ?>
                        </p>
                        <p>
                            <?php echo($postsValues[$i][$index]["author"]) ?>
                        </p>
                        <p>
                            <?php echo($postsValues[$i][$index]["text"]) ?>
                        </p>

                   <?php }?> 
                
            <?php } ?>
        </ul>       
    

</body>
</html>