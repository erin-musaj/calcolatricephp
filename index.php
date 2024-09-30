<?php 
require "function.php"; //carica tutto il file in memoria, e poi index.php
//include "fuction.php"; carica dopo che index.php viene caricato
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatrice</title>
</head>
    <body>
        <h1>Calcolatrice</h1>
        <form action="newpage.php" method="POST">
            <input name="n1" type="number" required>
            <select name="operatore" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input name="n2" type="number" required>
            <input type="submit" value="Calcola">
        </form>
    </body>
</html>


<?php  
    echo "<br>Haiuto hai un euro"; //stampa a schermo, serve tag html
    echo "<br><h1>Haiuto hai un euro</h1>";

    $numero1 = 1; //inizializzazione

    echo '<br>Valore: ' . $numero1 . ' euro'; //i punti vanno messi per i valori se usi singoli apici

    $numero1 = "uno"; 

    echo "<br>Valore: $numero1 euro"; //se doppi allora dollaro come linux

    $somma;
    $numero1=2;
    $numero2=15.5;
    $somma=$numero1+$numero2;

    echo "<br>Somma: ". $somma ." euro";

    $diff=$numero1-$numero2;

    print("<br>evil jonkler ". $diff ." cart");


    print("<br>Sigma (func) ". somma2N(3,3) ." dshjgfyaesw gfdusr");


?>