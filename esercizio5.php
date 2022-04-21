<?php 
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$paragrafo = "La difesa siciliana è l'apertura più giocata dal nero quando il bianco apre con 1. e4, consiste nel rispondere c5 per bilanciare con il controllo della casa d5 la mossa del bianco. Il bianco può decidere di giocare un gioco più aperto, giocando prima 2. Cf3  e 3. d4 alla terza (e a questo punto per il nero è conveniente mangiare in d4), oppure un gioco chiuso giocando 2. e3.cosi chiamata per la disposizione dei pedoni neri, si caratterizza per il fianchetto dell'alfiere camposcuro. Si arriva alla variante del dragone con le seguenti mosse:il bianco può scegliere tra molti piani di attacco, tra cui 6. f4, 6. Ag5 oppure l'attacco jugoslavo (mostrato a lato), che consiste nel controllare il centro con diversi pezzi per poi scatenare un attacco sull'ala di re con la regina e l'alfiere camposcuro. ";

/* creo una variabile, che sarà un array formato da parti spezzate (dal ".") della varibile-stringa "paragrafo" */
$paragrafiSpezzati = explode(".", $paragrafo);
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

    <h1>Paragrafo originale</h1>
    <p>
        <!-- stampo il paragrafo intero (originale) -->
        <?php echo $paragrafo ?>
    </p>
    
    <h1>Paragrafi spezzati</h1>
    <div>
        <!-- per la lunghezza dell'array formato da diverse stringhe generate da "paragrafo" -->
        <?php for($i = 0; $i < count($paragrafiSpezzati); $i++){ ?>

            <!-- crea un p con scritto all'interno la stringa con indice i -->
            <p>
                <?php echo $paragrafiSpezzati[$i] ?>
            </p>
        <?php }?>
    </div>

</body>
</html>