<?php

$age = 20;
$name = "Jon";
$fruits = ["Apple", "Banana", "Orange"];

echo "Your name is: " . $name . "<br>";


echo "Your favorite fruits is: "; 
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "<br>";


if ($age >= 18) {
    $isAdult = true;
    if ($isAdult) {
        echo "You're an adult (age: " . $age . ")" . "<br>";        
    }
}

?>