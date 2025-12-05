<?php

echo "Простые числа от 1 до 100:\n";

for ($n = 2; $n <= 100; $n++) {
    $isPrime = true;
    
    for ($d = 2; $d < $n; $d++) {
        if ($n % $d == 0) {
            $isPrime = false;
            break;
        }
    }
    
    if ($isPrime) {
        echo $n . " ";
    }
}

echo "\n";

?>
