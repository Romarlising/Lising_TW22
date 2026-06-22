<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            color: #1f2937;
            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 1050px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .title-box h2 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
            color: #111827;
        }

        .title-box p {
            margin: 6px 0 0;
            color: #6b7280;
            font-size: 14px;
        }

        .add-button {
            text-decoration: none;
            background-color: #4f46e5;
            color: white;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
            white-space: nowrap;
        }

        .add-button:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
        }

        .dog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
        }

        .dog-card {
            background-color: #ffffff;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.10);
            border: 1px solid #eef2ff;
            transition: 0.2s;
        }

        .dog-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.14);
        }

        .dog-number {
            display: inline-block;
            background-color: #eef2ff;
            color: #4f46e5;
            font-size: 12px;
            font-weight: 700;
            padding: 6px 10px;
            border-radius: 999px;
            margin-bottom: 14px;
        }

        .dog-name {
            margin: 0 0 15px;
            font-size: 22px;
            font-weight: 700;
            color: #111827;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding: 9px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .label {
            color: #6b7280;
            font-weight: 500;
        }

        .value {
            color: #111827;
            font-weight: 600;
            text-align: right;
        }

        .empty {
            background-color: white;
            padding: 30px;
            text-align: center;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.10);
        }

        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                align-items: stretch;
            }

            .title-box h2 {
                font-size: 26px;
                text-align: center;
            }

            .title-box p {
                text-align: center;
            }

            .add-button {
                text-align: center;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="header">
        <div class="title-box">
            <h2>Dog Records</h2>
            <p>List of all registered dogs in the database</p>
        </div>

        <a href="DogRegister.php" class="add-button">Add New Dog</a>
    </div>

    <?php
    if ($result->num_rows > 0) {
        echo "<div class='dog-grid'>";

        $count = 1;

        while ($row = $result->fetch_assoc()) {
            echo "<div class='dog-card'>";
            echo "<span class='dog-number'>Dog " . $count . "</span>";
            echo "<h3 class='dog-name'>" . htmlspecialchars($row['dog_name']) . "</h3>";

            echo "<div class='info-row'><span class='label'>Breed</span><span class='value'>" . htmlspecialchars($row['breed']) . "</span></div>";
            echo "<div class='info-row'><span class='label'>Age</span><span class='value'>" . htmlspecialchars($row['age']) . "</span></div>";
            echo "<div class='info-row'><span class='label'>Address</span><span class='value'>" . htmlspecialchars($row['address']) . "</span></div>";
            echo "<div class='info-row'><span class='label'>Color</span><span class='value'>" . htmlspecialchars($row['color']) . "</span></div>";
            echo "<div class='info-row'><span class='label'>Height</span><span class='value'>" . htmlspecialchars($row['height']) . "</span></div>";
            echo "<div class='info-row'><span class='label'>Weight</span><span class='value'>" . htmlspecialchars($row['weight']) . "</span></div>";

            echo "</div>";

            $count++;
        }

        echo "</div>";
    } else {
        echo "<div class='empty'>";
        echo "<p>No dog records found.</p>";
        echo "</div>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>