<?php
// Beginer
// Challenge 01

$arr = [10, 5, 20, 8, 15];
$max = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
}

echo $max;



// Challenge 02

$arr = [1, 2, 3, 4, 5];
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}

echo $sum;



// Challenge 03

$num = 10;

if ($num % 2 == 0) {
    echo $num . " is even\n";
} else {
    echo $num . " is odd\n";
}



// Challenge 04

$arr = [1, 2, 2, 3, 2, 4];
$value = 2;
$count = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $value) {
        $count++;
    }
}

echo "Count: " . $count;



// Challenge 05

$string = "test";
$revers = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $revers .= $string[$i];
}

echo $reversed;



// Intermediar
// Challenge 07

$arr = [64, 34, 25, 12, 22, 11, 90];

for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo $arr . " ";




?>