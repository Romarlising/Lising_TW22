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

<?php require 'header.php'; ?>

<div class="container">

    <h3>Jonash De Guia</h3>

    <img src="images/P2.png" class="profile-img">

    <div class="info">
        Age: 20 <br> Birthday: December 13, 2005
    </div>

    <?php
    echo "<p>
    Jonash De Guia is a responsible and cooperative student who enjoys working with others.
    Jonash is interested in programming and improving logical thinking skills through continuous learning.
    Jonash actively participates in group activities and contributes helpful ideas to the team.
    During free time, Jonash explores new concepts in web development and improves technical abilities.
    In the future, Jonash aims to become skilled in programming and pursue a career in the IT field.
    </p>";
    ?>

    <div class="back">
        <a href="index.php">Back to Home</a>
    </div>

</div>

<?php include "footer.php"; ?>

</body>

</html>
