<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>

<body>

<table style="width:100%">
    <tr>
        <td rowspan ="2"><center>Meal Type</center></td>
        <td colspan="3"><center>Size</center></td> 
    </tr>
    <tr>
        <td>Small</td>
        <td>Medium</td>
        <td>Large</td>
    </tr>
    <tr>
        <td>Meal A</td>
        <td>100</td>
        <td>130</td>
        <td>150</td>
    </tr>
    <tr>
        <td>Meal B</td>
        <td>130</td>
        <td>170</td>
        <td>200</td>
    </tr>
    <tr>
        <td>Meal C</td>
        <td>180</td>
        <td>220</td>
        <td>250</td>
    </tr>
</table>
 
<?php
$mealType = "A";
$mealSize = "L";
$quantity = 2;
$price = 0; // Initialize price variable

if ($mealType == 'A') {
    if ($mealSize == 'S') {
        $price = 100;
    } elseif ($mealSize == 'M') {
        $price = 130;
    } elseif ($mealSize == 'L') {
        $price = 150;
    }
} elseif ($mealType == 'B') {
    // Add conditions for Meal B sizes
    if ($mealSize == 'S') {
        $price = 130;
    } elseif ($mealSize == 'M') {
        $price = 170;
    } elseif ($mealSize == 'L') {
        $price = 200;
    }
} elseif ($mealType == 'C') {
    // Add conditions for Meal C sizes
    if ($mealSize == 'S') {
        $price = 180;
    } elseif ($mealSize == 'M') {
        $price = 220;
    } elseif ($mealSize == 'L') {
        $price = 250;
    }
}

$total = $price * $quantity;
echo "<br>Meal Type : $mealType";
echo "<br>Meal Size : $mealSize";
echo "<br>Meal Quantity : $quantity";
echo "<br>Total bill : $total";
echo "<br>Thank you for your order!";
?>

</body>
</html>