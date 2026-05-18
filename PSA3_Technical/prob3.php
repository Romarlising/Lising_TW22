<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
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

<h2 style="text-align:center;">USER DEFINED FUNCTION</h2>

<?php

function calculate($a, $b, $c) {

    $sum = $a + $b + $c;
    $diff = $a - $b - $c;
    $product = $a * $b * $c;
    $division = $a / $b / $c;

    echo "<table>";
    echo "<tr><td colspan='2'>My Parameter values: $a, $b, $c</td></tr>";
    echo "<tr><td>Addition</td><td>$sum</td></tr>";
    echo "<tr><td>Subtraction</td><td>$diff</td></tr>";
    echo "<tr><td>Multiplication</td><td>$product</td></tr>";
    echo "<tr><td>Division</td><td>$division</td></tr>";
    echo "</table>";
}

calculate(25, 13, 6);

?>

</body>
</html>