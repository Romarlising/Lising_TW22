<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combinations</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            margin: 40px;
            text-align: center;
        }

        h2 {
            color: #2e5fa1;
            margin-bottom: 20px;
        }

        .output {
            border: 1px solid #000;
            padding: 20px;
            width: 700px;
            margin: auto;
            font-size: 16px;
        }

        .numbers {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .num {
            width: 60px;
            text-align: center;
            margin: 4px;
        }
    </style>
</head>
<body>

<h2>Two-Digit Decimal Combinations</h2>

<div class="output">
    <div class="numbers">
        <?php
            for ($i = 0; $i < 100; $i++) {
                echo "<div class='num'>" . sprintf("%02d,", $i) . "</div>";
            }
        ?>
    </div>
</div>

</body>
</html>