<?php

    function veryBigSum(array $arr){
        $sum =0;

        foreach($arr as $num){
            $sum += $num;

        }
        return $sum;
    }


$n = 5; // Aunque el tamaño no se usa directamente en esta solución, lo mantenemos por contexto.
$arr = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

// Llamamos a la función y mostramos el resultado
$result = veryBigSum($arr);

echo "El array de entrada es: [" . implode(", ", $arr) . "]";
echo "<br>";
echo "La suma total es: " . $result . "\n";

echo "<br>";

// Verificamos el tipo de dato del resultado
echo "El tipo de dato de la suma es: " . gettype($result) ;

?>