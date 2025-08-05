<?php

function miniNumber(int $n, string $password): int{
    $missing_types = 0;

    if(!preg_match('/[0-9]/', $password )){
        $missing_types++;
    }

    if(!preg_match('/[a-z]/', $password )){
        $missing_types++;
    }

    if(!preg_match('/[A-Z]/', $password )){
        $missing_types++;
    }

    if(!preg_match('/[!@#$%^&*()-_+]/', $password )){
        $missing_types++;
    }

    $min_lentgth =6;
    $length_needed = ($n < $min_lentgth) ? $min_lentgth - $n : 0;

    return max($missing_types, $length_needed);
    
}

// --- Ejemplos de uso ---

$n1 = 3;
$password1 = "Ab1";
echo "Password: " . $password1 . "\n";
echo "Faltan: " . miniNumber($n1, $password1) . "\n\n";

echo "<br>";

$n2 = 8;
$password2 = "AbcdeFgh";
echo "Password: " . $password2 . "\n";
echo "Faltan: " . miniNumber($n2, $password2) . "\n\n";

echo "<br>";

$n3 = 5;
$password3 = "Ab1@c";
echo "Password: " . $password3 . "\n";
echo "Faltan: " . miniNumber($n3, $password3) . "\n\n";

echo "<br>";

$n4 = 7;
$password4 = "Abc1@#E";
echo "Password: " . $password4 . "\n";
echo "Faltan: " . miniNumber($n4, $password4) . "\n\n";
?>