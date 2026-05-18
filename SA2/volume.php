<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 70%;
            background: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ccc;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Volume of Shapes</h2>

<?php

function cube($s) {
    return $s * $s * $s;
}

function rectangularPrism($l, $w, $h) {
    return $l * $w * $h;
}

function cylinder($r, $h) {
    return pi() * $r * $r * $h;
}

function cone($r, $h) {
    return (1/3) * pi() * $r * $r * $h;
}

function sphere($r) {
    return (4/3) * pi() * $r * $r * $r;
}

echo "<table>";
echo "<tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
      </tr>";

$s = 5;
echo "<tr>
        <td>s = $s</td>
        <td>V = s³</td>
        <td>" . cube($s) . "</td>
      </tr>";

$l=4; $w=3; $h=2;
echo "<tr>
        <td>l=$l, w=$w, h=$h</td>
        <td>V = l × w × h</td>
        <td>" . rectangularPrism($l,$w,$h) . "</td>
      </tr>";

$r=3; $h=5;
echo "<tr>
        <td>r=$r, h=$h</td>
        <td>V = πr²h</td>
        <td>" . number_format(cylinder($r,$h),2) . "</td>
      </tr>";

$r=3; $h=5;
echo "<tr>
        <td>r=$r, h=$h</td>
        <td>V = 1/3 πr²h</td>
        <td>" . number_format(cone($r,$h),2) . "</td>
      </tr>";

$r=3;
echo "<tr>
        <td>r=$r</td>
        <td>V = 4/3 πr³</td>
        <td>" . number_format(sphere($r),2) . "</td>
      </tr>";

echo "</table>";

?>

</body>
</html>
