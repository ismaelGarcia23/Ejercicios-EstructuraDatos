<?php


    function merge_sort(array $arr): array{

        $count = count($arr);

        if($count <= 1){
            return $arr;
        }

        $mid = floor($count / 2);
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);

        $left = merge_sort($left);
        $right = merge_sort($right);

        return merge($left, $right);

    }   

    // Merge two sorted arrays into one sorted array
    function merge(array $left, array $right): array {
        $result = [];
        $i = $j = 0;

        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] <= $right[$j]) {
                $result[] = $left[$i];
                $i++;
            } else {
                $result[] = $right[$j];
                $j++;
            }
        }

        // Append remaining elements
        while ($i < count($left)) {
            $result[] = $left[$i];
            $i++;
        }
        while ($j < count($right)) {
            $result[] = $right[$j];
            $j++;
        }

        return $result;
    }

    $unsorted_array = [24, 21, 1, 7, 3,90, 87];
    echo "Arrglo desordenado: " . implode(", ", $unsorted_array) ." <br>";

    $sorted_array = merge_sort($unsorted_array);
    echo "Arreglo ordenado: " . implode(", ", $sorted_array) . "<br>";


?>
