<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliation</title>

    <style>

        body{
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f172a, #1e3a5f);
            color: white;
        }

        .container{
            width: 80%;
            max-width: 900px;
            margin: 60px auto;
            background-color: rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 0 25px rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
        }

        h3{
            text-align: center;
            font-size: 32px;
            margin-bottom: 35px;
            letter-spacing: 1px;
        }

        .affiliation-list{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .affiliation-card{
            background-color: rgba(255,255,255,0.06);
            padding: 25px;
            border-left: 5px solid #60a5fa;
            border-radius: 15px;
            font-size: 20px;
            transition: 0.3s;
        }

        .affiliation-card:hover{
            background-color: rgba(255,255,255,0.12);
            transform: translateX(5px);
        }

        .back-btn{
            display: inline-block;
            margin-top: 35px;
            padding: 12px 24px;
            background-color: #1e3a5f;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        .back-btn:hover{
            background-color: #2563eb;
        }

    </style>
</head>
<body>

<?php require "header.php"; ?>

<div class="container">

    <h3>Affiliation</h3>

    <div class="affiliation-list">

        <?php

        echo "<div class='affiliation-card'>Member of FTIC Club</div>";
        echo "<div class='affiliation-card'>IT Student Organization</div>";

        ?>

    </div>

    <a href="index.php" class="back-btn">← Back to Home</a>

</div>

<?php include "footer.php"; ?>

</body>
</html>