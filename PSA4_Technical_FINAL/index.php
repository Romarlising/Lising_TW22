<!DOCTYPE html>
<html>
<head>
    <title>Biography</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
        }

        h2 {
            text-align: center;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .card {
            width: 180px;
            background: white;
            color: black;
            border-radius: 10px;
            text-align: center;
            padding: 15px;
            transition: 0.3s;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #333;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0,0,0,0.5);
        }

        a {
            text-decoration: none;
        }

        .name {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h2>BIOGRAPHY</h2>

<div class="container">

    <a href="story1.php">
        <div class="card">
            <img src="images/P1.png" class="profile-img">
            <div class="name">Ryel Tomas</div>
        </div>
    </a>

    <a href="story2.php">
        <div class="card">
            <img src="images/P2.png" class="profile-img">
            <div class="name">Jonash De Guia</div>
        </div>
    </a>

    <a href="story3.php">
        <div class="card">
            <img src="images/P3.png" class="profile-img">
            <div class="name">Jose Cordero</div>
        </div>
    </a>

    <a href="story4.php">
        <div class="card">
            <img src="images/P4.png" class="profile-img">
            <div class="name">Railey Reyes</div>
        </div>
    </a>

    <a href="story5.php">
        <div class="card">
            <img src="images/P5.png" class="profile-img">
            <div class="name">Marcus Ramirez</div>
        </div>
    </a>

</div>

</body>
</html>