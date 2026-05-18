<!DOCTYPE html>
<html>
<head>
    <title>My Desserts</title>

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

        img {
            width: 100px;
            height: 100px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>My Desserts</h2>

<?php

$desserts = array(
    array("name"=>"Cake", "image"=>"images/cake.jpg", "desc"=>"Sweet baked dessert", "facts"=>"Cake is often used for birthdays and celebrations."),
    array("name"=>"Brownie", "image"=>"images/brownie.webp", "desc"=>"Chocolate baked dessert", "facts"=>"Brownies are chewy and rich in chocolate flavor."),
    array("name"=>"Donut", "image"=>"images/donut.jpg", "desc"=>"Fried sweet snack", "facts"=>"Donuts are usually topped with sugar or glaze."),
    array("name"=>"Ice Cream", "image"=>"images/icecream.jpg", "desc"=>"Frozen sweet dessert", "facts"=>"Ice cream comes in many flavors like chocolate and vanilla."),
    array("name"=>"Cupcake", "image"=>"images/cupcake.jpg", "desc"=>"Small cake dessert", "facts"=>"Cupcakes are decorated with frosting and toppings."),
    array("name"=>"Cheesecake", "image"=>"images/cheesecake.jpg", "desc"=>"Creamy cake dessert", "facts"=>"Cheesecake is made with cheese and has a smooth texture."),
    array("name"=>"Macaron", "image"=>"images/macaron.webp", "desc"=>"French sweet pastry", "facts"=>"Macarons are colorful and filled with cream."),
    array("name"=>"Pudding", "image"=>"images/pudding.jpg", "desc"=>"Soft creamy dessert", "facts"=>"Pudding can be chocolate, vanilla, or caramel flavored."),
    array("name"=>"Tiramisu", "image"=>"images/tiramisu.jpg", "desc"=>"Italian coffee dessert", "facts"=>"Tiramisu is made with coffee and cream layers."),
    array("name"=>"Waffle", "image"=>"images/waffle.jpg", "desc"=>"Crispy sweet snack", "facts"=>"Waffles are often served with syrup or fruits.")
);

usort($desserts, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});

// ✅ TABLE
echo "<table>";
echo "<tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
      </tr>";

foreach ($desserts as $d) {
    echo "<tr>";
    echo "<td><img src='" . $d["image"] . "'></td>";
    echo "<td>" . $d["name"] . "</td>";
    echo "<td>" . $d["desc"] . "</td>";
    echo "<td>" . $d["facts"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>