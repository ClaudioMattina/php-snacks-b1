<?php 
/* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
    
    
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    
    for($i = 0; $i < count(array_values( $db )); $i++){

        if(array_keys( $db )[$i] ==='teachers'){
            
            for($teacherIndex = 0; $teacherIndex < count(array_values($db)[$i] ); $teacherIndex++ ){
                echo  array_values($db)[$i][$teacherIndex]['name'] . " - " .array_values($db)[$i][$teacherIndex]['lastname'] . " <br> " ;
            }

        } elseif(array_keys( $db )[$i] === 'pm'){
            for($pmIndex = 0; $pmIndex < count(array_values($db)[$i] ); $pmIndex++ ){
                echo array_values($db)[$i][$pmIndex]['name'] . " - " .array_values($db)[$i][$pmIndex]['lastname'] . " <br> " ;
            }
        }
    };
    
    ?>

</body>
</html>