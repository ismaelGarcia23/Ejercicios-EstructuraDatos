<?php


/**
 * @param int $n El tamaño del array.
 * @param array $arr El array de números enteros a ordenar.
 * @return int
 * 
 */


function search(array $nums, int $target): int{
    $left = 0;
    $right = count($nums) -1;

    while($left <= $right){
        $mid = floor(($left + $right) / 2);
        if($nums[$mid] === $target){
            return $mid;
        } elseif($nums[$mid] < $target){
            $left = $mid + 1;
        }
        else{
            $right = $mid - 1;
        }
    }
    return -1;
}

// Ejemplo 1
$nums1 = [-1,0,3,5,9,12];
$target1 = 9;
echo "Input: nums = [" . implode(",", $nums1) . "], target = " . $target1 . "\n";
echo "Output: " . search($nums1, $target1) . "\n\n";

echo "<br>";

// Ejemplo 2
$nums2 = [-1,0,3,5,9,12];
$target2 = 2;
echo "Input: nums = [" . implode(",", $nums2) . "], target = " . $target2 . "\n";
echo "Output: " . search($nums2, $target2) . "\n\n";

echo "<br>";
// Ejemplo 3: target en el primer elemento
$nums3 = [1,2,3,4,5];
$target3 = 1;
echo "Input: nums = [" . implode(",", $nums3) . "], target = " . $target3 . "\n";
echo "Output: " . search($nums3, $target3) . "\n\n";

echo "<br>";
// Ejemplo 4: target en el último elemento
$nums4 = [1,2,3,4,5];
$target4 = 5;
echo "Input: nums = [" . implode(",", $nums4) . "], target = " . $target4 . "\n";
echo "Output: " . search($nums4, $target4) . "\n\n";

echo "<br>";
// Ejemplo 5: array de un solo elemento
$nums5 = [5];
$target5 = 5;
echo "Input: nums = [" . implode(",", $nums5) . "], target = " . $target5 . "\n";
echo "Output: " . search($nums5, $target5) . "\n\n";

$nums6 = [5];
$target6 = 3;
echo "Input: nums = [" . implode(",", $nums6) . "], target = " . $target6 . "\n";
echo "Output: " . search($nums6, $target6) . "\n\n";

?>