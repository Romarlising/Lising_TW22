<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9fafb;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            padding: 25px;
            width: 360px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .color-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f3f4f6;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .label {
            font-size: 12px;
            color: #6b7280;
        }

        .color-preview {
            width: 30px;
            height: 30px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .empty {
            text-align: center;
            font-size: 13px;
            color: #9ca3af;
        }

    </style>
</head>

<body>

<div class="container">
    <h2>My Favorite Colors</h2>

    <?php
    if (isset($_SESSION['colors'])) {
        foreach ($_SESSION['colors'] as $index => $color) {

            echo "<div class='color-box'>";
            echo "<div>";
            echo "<div class='label'>Color " . ($index + 1) . "</div>";
            echo $color;
            echo "</div>";

            // color preview
            echo "<div class='color-preview' style='background: $color;'></div>";

            echo "</div>";
        }
    } else {
        echo "<div class='empty'>No colors saved yet.</div>";
    }
    ?>

</div>

</body>
</html>
