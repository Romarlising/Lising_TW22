<!DOCTYPE html>
<html>
<head>
    <title>Array Math Activity</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            margin: auto;
            width: 60%;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Array Operations</h2>

<?php

$numbers = array(5, 10, 15, 20, 25, 30, 35, 40, 45, 50);

echo "<table>";
echo "<tr><td colspan='2'>Array list: " . implode(", ", $numbers) . "</td></tr>";

$sum = 0;
$diff = 0;
$product = 1;
$quotient = $numbers[0];

foreach ($numbers as $i => $num) {

    $sum += $num;

    if ($i == 0) {
        $diff = $num;
    } else {
        $diff -= $num;
    }

    $product *= $num;

    if ($i != 0) {
        $quotient /= $num;
    }
}

echo "<tr><td>Addition</td><td>$sum</td></tr>";
echo "<tr><td>Subtraction</td><td>$diff</td></tr>";
echo "<tr><td>Multiplication</td><td>$product</td></tr>";
echo "<tr><td>Division</td><td>$quotient</td></tr>";

echo "</table>";

?>

</body>
</html>