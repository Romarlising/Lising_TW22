<!DOCTYPE html>
<html>
<head>
    <title>String Function Activity</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 90%;
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

<h2>List of Names</h2>

<?php

$names = array(
    "romar", "jonash", "aerick", "railey", "marcus",
    "ian", "karl", "noel", "paulo", "dylan",
    "kevin", "mark", "leo", "adrian", "josh",
    "franz", "miguel", "andrew", "ruben", "samuel"
);

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of 'a'</th>
        <th>Reverse Name</th>
      </tr>";

foreach ($names as $name) {

    $length = strlen($name);

    $upper = ucfirst($name);

    $replace = str_replace(
        array("a","e","i","o","u"),
        "@",
        $name
    );

    $pos = strpos($name, "a");

    if ($pos === false) {
        $pos = "Not found";
    }

    $reverse = strrev($name);

    // output row
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$length</td>";
    echo "<td>$upper</td>";
    echo "<td>$replace</td>";
    echo "<td>$pos</td>";
    echo "<td>$reverse</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>