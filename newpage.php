<?php 

require "function.php";

if ($_POST["operatore"] =="+"){
    echo "<br>Risultato: " . somma2N($_POST["n1"], $_POST["n2"]) . "";
}elseif ($_POST["operatore"] == "-"){
    echo "<br>Risultato: " . sott2N($_POST["n1"], $_POST["n2"]) . "";
}elseif ($_POST["operatore"] == "*"){
    echo "<br>Risultato: " . prod2N($_POST["n1"], $_POST["n2"]) . "";
}elseif ($_POST["operatore"] == "/"){
    echo "<br>Risultato: " . div2N($_POST["n1"], $_POST["n2"]) . "";
}

//isset per controllare se c'è

?>