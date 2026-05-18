<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>

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

        .skills-grid{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .skill-card{
            background-color: rgba(255,255,255,0.06);
            padding: 25px;
            text-align: center;
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: 0.3s;
            font-size: 20px;
            font-weight: bold;
        }

        .skill-card:hover{
            transform: translateY(-5px);
            background-color: rgba(255,255,255,0.12);
            box-shadow: 0 0 15px rgba(96,165,250,0.4);
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

    <h3>Skills</h3>

    <div class="skills-grid">

        <?php

        $skills = array("HTML", "CSS", "PHP", "Java", "Python", "MySQL");

        foreach($skills as $skill){
            echo "<div class='skill-card'>$skill</div>";
        }

        ?>

    </div>

    <a href="index.php" class="back-btn">← Back to Home</a>

</div>

<?php include "footer.php"; ?>

</body>
</html>