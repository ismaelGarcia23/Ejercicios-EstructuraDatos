<?php


/**
 * @param int $n El tamaño del array.
 * @param array $arr El array de números enteros a ordenar.
 * @return void 
 * 
 */

function insertionSort(int $n, array $arr): void{
    $valueToInsert = $arr[$n - 1];
    $i = $n - 2;

    while($i >= 0 && $arr[$i] > $valueToInsert){
        $arr[$i + 1] = $arr[$i];
        echo implode(" ", $arr) . "<br>";
        $i--;
    }
    $arr[$i + 1 ] = $valueToInsert;
    echo implode(" ", $arr) . "<br>";
}

echo "--- Ejemplo 1 ---\n";
$n1 = 5;
$arr1 = [ 2, 4, 6, 8, 3];
echo "Input: " . implode(" ", $arr1) . "\n";
insertionSort($n1, $arr1);
echo "\n";

// Ejemplo 2
echo "--- Ejemplo 2 ---\n";
$n2 = 6;
$arr2 = [7, 5, 2, 4, 9, 1];
echo "Input: " . implode(" ", $arr2) . "\n";
insertionSort($n2, $arr2);
echo "\n";

// Ejemplo 3
echo "--- Ejemplo 3 ---\n";
$n3 = 5;
$arr3 = [1, 2, 3, 4, 5];
echo "Input: " . implode(" ", $arr3) . "\n";
insertionSort($n3, $arr3);
echo "\n";
