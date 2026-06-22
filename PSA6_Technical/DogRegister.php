<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dog_name = $_POST['dog_name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $stmt = $conn->prepare("INSERT INTO dogs (dog_name, breed, age, address, color, height, weight) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $dog_name, $breed, $age, $address, $color, $height, $weight);

    if ($stmt->execute()) {
        $message = "Dog information saved successfully!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>

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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 430px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
        }

        h2 {
            margin: 0;
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            color: #111827;
        }

        .subtitle {
            text-align: center;
            margin: 8px 0 25px;
            font-size: 14px;
            color: #6b7280;
        }

        label {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 15px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 10px;
            font-family: inherit;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
        }

        .message {
            text-align: center;
            background-color: #ecfdf5;
            color: #047857;
            padding: 10px;
            border-radius: 10px;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .link {
            text-align: center;
            margin-top: 18px;
        }

        .link a {
            text-decoration: none;
            color: #4f46e5;
            font-size: 14px;
            font-weight: 600;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Dog Registration</h2>
    <p class="subtitle">Enter the dog information below</p>

    <?php if ($message != "") { ?>
        <p class="message"><?php echo $message; ?></p>
    <?php } ?>

    <form method="POST" action="">
        <label>Name</label>
        <input type="text" name="dog_name" placeholder="Enter dog name" required>

        <label>Breed</label>
        <input type="text" name="breed" placeholder="Enter breed" required>

        <label>Age</label>
        <input type="text" name="age" placeholder="Example: 2 years old" required>

        <label>Address</label>
        <input type="text" name="address" placeholder="Enter address" required>

        <label>Color</label>
        <input type="text" name="color" placeholder="Enter color" required>

        <label>Height</label>
        <input type="text" name="height" placeholder="Example: 2 ft" required>

        <label>Weight</label>
        <input type="text" name="weight" placeholder="Example: 4 kilos" required>

        <button type="submit">Save</button>
    </form>

    <div class="link">
        <a href="DogView.php">View Dog Records</a>
    </div>
</div>

</body>
</html>