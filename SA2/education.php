<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Attainment</title>

    <style>

        body{
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f172a, #1e3a5f);
            color: white;
        }

        .container{
            width: 80%;
            max-width: 950px;
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
            margin-bottom: 40px;
            letter-spacing: 1px;
        }

        .education-wrapper{
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .education-card{
            background-color: rgba(255,255,255,0.06);
            padding: 30px;
            border-left: 5px solid #60a5fa;
            border-radius: 15px;
            transition: 0.3s;
        }

        .education-card:hover{
            background-color: rgba(255,255,255,0.12);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .level{
            font-size: 15px;
            color: #93c5fd;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .course{
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .school{
            font-size: 18px;
            margin-bottom: 8px;
        }

        .year{
            font-size: 16px;
            opacity: 0.9;
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

    <h3>Educational Attainment</h3>

    <div class="education-wrapper">


        <div class="education-card">

            <?php
            echo "<div class='level'>Junior High School</div>";
            echo "<div class='course'>Secondary Education</div>";
            echo "<div class='school'>Golden Faith Academy</div>";
            echo "<div class='year'>2018 - 2022</div>";
            ?>

        </div>


        <div class="education-card">

            <?php
            echo "<div class='level'>Senior High School</div>";
            echo "<div class='course'>Science, Technology, Engineering, & Mathematics (STEM)</div>";
            echo "<div class='school'>Siena College of Taytay</div>";
            echo "<div class='year'>2022 - 2024</div>";
            ?>

        </div>


        <div class="education-card">

            <?php
            echo "<div class='level'>College</div>";
            echo "<div class='course'>BS Information Technology</div>";
            echo "<div class='school'>FEU Institute of Technology</div>";
            echo "<div class='year'>2024 - Present</div>";
            ?>

        </div>

    </div>

    <a href="index.php" class="back-btn">← Back to Home</a>

</div>

<?php include "footer.php"; ?>

</body>
</html>