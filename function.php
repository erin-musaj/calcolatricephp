<?php 

    function somma2N(int $n1, int $n2) : mixed { return $n1 + $n2; }
    function sott2N(int $n1, int $n2) : mixed { return $n1 - $n2; }
    function prod2N(int $n1, int $n2) : mixed { return $n1 * $n2; }
    function div2N(int $n1, int $n2) : mixed { return $n1 / $n2; }
    function elprimo(int $n) : mixed {
        $array = array(1);
        for ($i=2; $i < $n^(1/2); $i++) {
            if ($n % $i == 0) {
                array_push( $array, $i );
            }
        }
        if (count($array) == 0) {
            return "primo";
        } else {
            array_push( $array,$n);
            return print_r($array, true);
        }
    }
?>