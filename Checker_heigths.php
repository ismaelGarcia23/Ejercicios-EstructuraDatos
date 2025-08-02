<?php 

function heightChecker(array $heigths): int {
    $expected = $heigths;

    sort($expected); //Esto ordena $expected de menor a mayor

    $mismatches = 0;

    for($i = 0; $i < count($heigths); $i++){
        if($heigths[$i] !== $expected[$i]){
            $mismatches++;
        }
    }
    return $mismatches;

}

$heigths = [1, 1, 4, 2, 1, 3];

echo "Input:  [" .implode(", ", $heigths) . "]\n";
echo "<br>";
echo "Output: ". heightChecker($heigths) . "\n";
echo "<br>";

$heights2 = [5,1,2,3,4];
echo "Input: [" . implode(", ", $heights2) . "]\n";
echo "<br>";
echo "Output: " . heightChecker($heights2) . "\n"; // Debería imprimir 5
echo "<br>";
$heights3 = [1,2,3,4,5];
echo "Input: [" . implode(", ", $heights3) . "]\n";
echo "<br>";
echo "Output: " . heightChecker($heights3) . "\n"; // Debería imprimir 0
