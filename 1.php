<?php

echo "Введите число: ";
$num = (int) trim(fgets(STDIN));

if ($num < 0) {
    echo "Факториал отрицательного числа не определен.\n";
    exit(1);
}

$factorial = 1;
$i = 1;

while ($i <= $num) {
    $factorial *= $i;
    $i++;
}

echo "Факториал $num! = $factorial\n";

?>
