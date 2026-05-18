<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f172a, #1e3a5f);
            color: white;
            min-height: 100vh;
        }

        .container{
            width: 85%;
            max-width: 900px;
            margin: 60px auto;
            background: rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 0 25px rgba(0,0,0,0.4);
            backdrop-filter: blur(5px);
        }

        h3{
            text-align: center;
            margin-bottom: 35px;
            font-size: 32px;
            letter-spacing: 1px;
        }

        .info-box{
            background-color: rgba(255,255,255,0.06);
            padding: 20px;
            border-radius: 12px;
        }

        .info-item{
            margin-bottom: 18px;
            padding: 15px;
            background-color: #274264;
            border-radius: 10px;
            transition: 0.3s;
        }

        .info-item:hover{
            transform: translateX(5px);
            background-color: #345b87;
        }

        .label{
            font-weight: bold;
            color: #dbeafe;
        }

        .back-btn{
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background-color: #274264;
            color: white;
            padding: 12px 22px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .back-btn:hover{
            background-color: #3f6ea3;
        }

    </style>

</head>
<body>

<?php require "header.php"; ?>

<div class="container">

    <h3>Personal Information</h3>

    <?php
        $name = "Romar Paulo M. Lising";
        $email = "rmlising@fit.edu.ph";
        $phone = "09215812877";
        $location = "Cainta, Philippines";
    ?>

    <div class="info-box">

        <div class="info-item">
            <span class="label">Name:</span>
            <?php echo $name; ?>
        </div>

        <div class="info-item">
            <span class="label">Email:</span>
            <?php echo $email; ?>
        </div>

        <div class="info-item">
            <span class="label">Phone:</span>
            <?php echo $phone; ?>
        </div>

        <div class="info-item">
            <span class="label">Location:</span>
            <?php echo $location; ?>
        </div>

    </div>

    <a href="index.php" class="back-btn">← Back to Home</a>

</div>

<?php include "footer.php"; ?>

</body>
</html>