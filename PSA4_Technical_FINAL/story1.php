<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: linear-gradient(to right, #141e30, #243b55);
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
        }

        .profile-img {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            border: 4px solid #243b55;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        h3 {
            margin-bottom: 10px;
            color: #243b55;
        }

        .info {
            font-weight: bold;
            margin-bottom: 15px;
            color: #555;
        }

        p {
            text-align: justify;
            line-height: 1.6;
            color: #333;
        }

        .back a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #243b55;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .back a:hover {
            background: #141e30;
        }
    </style>
</head>

<body>

<?php require "header.php"; ?>

<div class="container">

    <h3>Ryel Tomas</h3>

    <img src="images/P1.png" class="profile-img">

    <div class="info">
        Age: 19 <br>
        Birthday: July 28, 2006
    </div>

    <?php
    echo "<p>
    Ryel Tomas is a dedicated and hardworking student who is passionate about learning programming.
    Ryel enjoys exploring new technologies and improving coding skills through practice and projects.
    During free time, Ryel likes to study web development and gain more experience in creating websites.
    Ryel is also known for being responsible and cooperative in group activities, always contributing ideas.
    In the future, Ryel aims to become a successful software developer and build useful applications.
    </p>";
    ?>

    <div class="back">
        <a href="index.php">Back to Home</a>
    </div>

</div>

<?php include "footer.php"; ?>

</body>
</html>