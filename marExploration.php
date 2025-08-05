<?php 


function marsExploration(string $v) :int {

    $count = 0;
    $n = strlen($v); // nos dice la longitud de la cadena
    $pattern = "SOS";

    for($i =0; $i < $n; $i++){
        if($v[$i] != $pattern[$i % 3]){
            $count++;

        }

    }
    return $count;


}

// Ejemplos de uso con la versión optimizada
$s0 = "SOSSPSSQSSOR";
echo "Letras alteradas (optimizado): " . marsExploration($s0) . "\n"; // Salida esperada: 3

echo "<br>";

$s1 = "SOSSOT";
echo "Letras alteradas (optimizado): " . marsExploration($s1) . "\n"; // Salida esperada: 1
?>