<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Experience</title>

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

        .experience-card{
            background-color: rgba(255,255,255,0.06);
            padding: 30px;
            border-left: 5px solid #60a5fa;
            border-radius: 15px;
            line-height: 1.8;
            transition: 0.3s;
        }

        .experience-card:hover{
            background-color: rgba(255,255,255,0.12);
            transform: translateY(-3px);
        }

        .experience-title{
            font-size: 22px;
            font-weight: bold;
            color: #93c5fd;
            margin-bottom: 15px;
        }

        .experience-text{
            font-size: 18px;
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

    <h3>Work Experience</h3>

    <div class="experience-card">

        <div class="experience-title">
            Student Web Developer
        </div>

        <div class="experience-text">

            <?php
            echo "No formal work experience yet.<br><br>";
            echo "Currently building academic projects in web development.";
            ?>

        </div>

    </div>

    <a href="index.php" class="back-btn">← Back to Home</a>

</div>

<?php include "footer.php"; ?>

</body>
</html>