<!-- // Task 1 <br>

<?php
$length = 20;
$width = 10;

$Rectangle = $length * $width;

$perimeter = 2 * ($length + $width);

echo "Length: " . $length . " <br>";
echo "Width: " . $width . " <br>";
echo "Area of Rectangle: " . $Rectangle . " <br>";
echo "Perimeter of Rectangle: " . $perimeter;
?></br> -->


<!-- <br>
// Task 2 <br>

<?php
$amount = 1000; 

$vat = $amount * 0.15;

$total = $amount + $vat;

echo "Amount: " . $amount . " <br>";
echo "VAT (15%): " . $vat . " <br>";
echo "Total Amount with VAT: " . $total;
?> -->


<!-- <br>
// task 3 <br>

<?php
$number = 16;

if ($number % 2 == 0) {
    echo $number . " is an Even number.";
} else {
    echo $number . " is an Odd number.";
}
?> -->

<br>

<!-- //task 4 <br>

<?php

$num1 = 25;
$num2 = 20;
$num3 = 30;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Largest number is: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest number is: " . $num2;
} else {
    echo "Largest number is: " . $num3;
}
?><br> -->

<!-- //task 5

<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?> -->

<!-- // task 6 <br>

<?php
$array = [10, 20, 30, 40, 50]; 

$search = 10;  

$found = false;

foreach ($array as $i) {
    if ($i == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo $search . " Found";
} else {
    echo $search . " Not Found ";
}
?> -->

// task 7 <br>

<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<?php
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
        if($j < $i) echo " ";
    }
    echo "<br>";
}
?>
<?php
$char = 65; 
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr($char) . " ";
        $char++;
    }
    echo "<br>";
}
?>


