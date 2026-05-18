<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Activity</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background: white;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        img {
            width: 80px;
            height: 80px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Student Information (Alphabetical Order)</h2>

<?php
$people = array(
    array("name"=>"Romar Lising","image"=>"images/P1.png","age"=>20,"birthday"=>"July 24, 2006","contact"=>"0987654543"),
    array("name"=>"Jonash De Guia","image"=>"images/P2.png","age"=>20,"birthday"=>"December 13, 2005","contact"=>"0912345678"),
    array("name"=>"Aerick Alba","image"=>"images/P3.png","age"=>20,"birthday"=>"August 22, 2005","contact"=>"0976927294"),
    array("name"=>"Railey Reyes","image"=>"images/P4.png","age"=>20,"birthday"=>"June 15, 2005","contact"=>"0982172372"),
    array("name"=>"Marcus Ramirez","image"=>"images/P5.png","age"=>20,"birthday"=>"May 5, 2005","contact"=>"0958672473"),
    array("name"=>"Mozziel Florendo","image"=>"images/P6.png","age"=>20,"birthday"=>"June 6, 2005","contact"=>"09679137131"),
    array("name"=>"Yanna Cayetano","image"=>"images/P7.png","age"=>19,"birthday"=>"July 23, 2006","contact"=>"09767676767"),
    array("name"=>"Morihiro Fujino","image"=>"images/P8.png","age"=>19,"birthday"=>"May 27, 2006","contact"=>"0989162122"),
    array("name"=>"Bernice Castro","image"=>"images/P9.png","age"=>19,"birthday"=>"June 25, 2006","contact"=>"0918271223"),
    array("name"=>"Oliver Bulanadi","image"=>"images/P10.png","age"=>20,"birthday"=>"October 10, 2005","contact"=>"09863616313")
);

usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

echo "<table>";
echo "<tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
      </tr>";

$no = 1;

foreach($people as $person){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$person['name']."</td>";
    echo "<td><img src='".$person['image']."'></td>";
    echo "<td>".$person['age']."</td>";
    echo "<td>".$person['birthday']."</td>";
    echo "<td>".$person['contact']."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>