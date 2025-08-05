<?php


function birthdayCakeCandles(array $candles): int{
    $maxHeight = max($candles);
    $counts = array_count_values($candles);

    return $counts[$maxHeight] ?? 0;

}

// Ejemplo 1
$heights1 = [4, 7, 1, 3];
echo "Array de velas: [" . implode(", ", $heights1) . "]\n";
echo "Cantidad de velas más altas: " . birthdayCakeCandles($heights1) . "\n\n";

echo "<br>";

// Ejemplo 2
$heights2 = [3, 2, 1, 3];
echo "Array de velas: [" . implode(", ", $heights2) . "]\n";
echo "Cantidad de velas más altas: " . birthdayCakeCandles($heights2) . "\n\n";

echo "<br>";

// Ejemplo 3
$heights3 = [5, 5, 5, 5];
echo "Array de velas: [" . implode(", ", $heights3) . "]\n";
echo "Cantidad de velas más altas: " . birthdayCakeCandles($heights3) . "\n\n";
