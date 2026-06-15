<?php
$method = isset($_GET['method']) && $_GET['method'] == "POST" ? "POST" : "GET";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>

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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h2 {
            margin-bottom: 15px;
            font-weight: 600;
        }

        .form-container {
            background: #ffffff;
            width: 320px;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }

        label {
            font-size: 13px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 6px 0 12px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 13px;
        }

        input:focus, select:focus {
            border-color: #9ca3af;
            outline: none;
        }

        button {
            width: 100%;
            padding: 11px;
            border: none;
            border-radius: 6px;
            background: #111827;
            color: #fff;
            font-size: 13px;
            cursor: pointer;
        }

        button:hover {
            background: #374151;
        }

        .result-container {
            margin-top: 20px;
            width: 360px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 15px;
        }

        .step {
            background: #f3f4f6;
            padding: 8px 10px;
            border-radius: 6px;
            margin-bottom: 10px;
            font-size: 13px;
            position: relative;
        }


        .label {
            font-weight: 600;
            font-size: 12px;
            color: #6b7280;
        }

    </style>
</head>

<body>

<h2>Personal Info</h2>

<div class="form-container">

    <form method="GET">
        <label>Select Method:</label>
        <select name="method" onchange="this.form.submit()">
            <option value="GET">Use GET</option>
            <option value="POST" <?php if ($method == "POST") echo "selected"; ?>>Use POST</option>
        </select>
    </form>

    <form method="<?php echo $method; ?>">

        <label>First Name:</label>
        <input type="text" name="fname" required>

        <label>Middle Name:</label>
        <input type="text" name="mname" required>

        <label>Last Name:</label>
        <input type="text" name="lname" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <button type="submit">Submit</button>

    </form>
</div>

<div class="result-container">
    <h3>Submitted Data</h3>

    <div class="timeline">
        <?php
        if ($method == "GET" && isset($_GET['fname'])) {

            echo "<div class='step'><span class='label'>Method</span><br>GET</div>";

            echo "<div class='step'><span class='label'>First Name</span><br>" . $_GET['fname'] . "</div>";
            echo "<div class='step'><span class='label'>Middle Name</span><br>" . $_GET['mname'] . "</div>";
            echo "<div class='step'><span class='label'>Last Name</span><br>" . $_GET['lname'] . "</div>";
            echo "<div class='step'><span class='label'>Date of Birth</span><br>" . $_GET['dob'] . "</div>";
            echo "<div class='step'><span class='label'>Address</span><br>" . $_GET['address'] . "</div>";
        }

        elseif ($method == "POST" && isset($_POST['fname'])) {

            echo "<div class='step'><span class='label'>Method</span><br>POST</div>";

            echo "<div class='step'><span class='label'>First Name</span><br>" . $_POST['fname'] . "</div>";
            echo "<div class='step'><span class='label'>Middle Name</span><br>" . $_POST['mname'] . "</div>";
            echo "<div class='step'><span class='label'>Last Name</span><br>" . $_POST['lname'] . "</div>";
            echo "<div class='step'><span class='label'>Date of Birth</span><br>" . $_POST['dob'] . "</div>";
            echo "<div class='step'><span class='label'>Address</span><br>" . $_POST['address'] . "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>