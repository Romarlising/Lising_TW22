<?php
if (isset($_POST['fname'])) {
    $startTime = time();

    setcookie("fname", $_POST['fname'], time() + 60);
    setcookie("mname", $_POST['mname'], time() + 60);
    setcookie("lname", $_POST['lname'], time() + 60);
    setcookie("start_time", $startTime, time() + 60);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f9fafb;
            color: #111827;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 6px;
            width: 320px;
            border: 1px solid #e5e7eb;
        }

        h2 {
            text-align: center;
            margin-bottom: 18px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 14px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 13px;
        }

        button {
            width: 100%;
            padding: 11px;
            border: none;
            border-radius: 6px;
            background: #111827;
            color: white;
            font-size: 13px;
            cursor: pointer;
        }

        button:hover {
            background: #374151;
        }

        /* ✨ NEW OUTPUT STYLE */
        .timeline {
            margin-top: 15px;
            border-left: 2px solid #e5e7eb;
            padding-left: 14px;
        }

        .step {
            margin-bottom: 12px;
            padding: 8px 10px;
            background: #f3f4f6;
            border-radius: 6px;
            font-size: 13px;
            position: relative;
        }

        .step::before {
            content: "";
            position: absolute;
            left: -20px;
            top: 10px;
            width: 8px;
            height: 8px;
            background: #111827;
            border-radius: 50%;
        }

        .time {
            font-weight: 600;
            font-size: 12px;
            color: #6b7280;
        }

        .waiting {
            margin-top: 10px;
            font-size: 12px;
            color: #9ca3af;
            text-align: center;
        }

    </style>
</head>

<body>

<div class="container">
    <h2>Create Cookies</h2>

    <form method="POST">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="mname" placeholder="Middle Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>

        <button type="submit">Start</button>
    </form>

    <div class="timeline">
        <?php
        if (isset($_COOKIE['start_time'])) {
            $elapsed = time() - $_COOKIE['start_time'];

            if ($elapsed >= 10 && isset($_COOKIE['fname'])) {
                echo "<div class='step'>";
                echo "<div class='time'>10 seconds</div>";
                echo "First Name: " . $_COOKIE['fname'];
                echo "</div>";
            }

            if ($elapsed >= 20 && isset($_COOKIE['mname'])) {
                echo "<div class='step'>";
                echo "<div class='time'>20 seconds</div>";
                echo "Middle Name: " . $_COOKIE['mname'];
                echo "</div>";
            }

            if ($elapsed >= 30 && isset($_COOKIE['lname'])) {
                echo "<div class='step'>";
                echo "<div class='time'>30 seconds</div>";
                echo "Last Name: " . $_COOKIE['lname'];
                echo "</div>";
            }

            if ($elapsed < 10) {
                echo "<div class='waiting'>Waiting for data... refresh after a few seconds</div>";
            }
        }
        ?>
    </div>

</div>

</body>
</html>