<?php
session_start();

if (isset($_POST['color1'])) {
    $_SESSION['colors'] = [
        $_POST['color1'],
        $_POST['color2'],
        $_POST['color3'],
        $_POST['color4'],
        $_POST['color5']
    ];

    header("Location: ResultColors.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
   <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #f9fafb;
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background: #ffffff;
        padding: 24px;
        width: 340px;
        border-radius: 6px;
        border: 1px solid #e5e7eb;
    }

    h2 {
        text-align: center;
        margin-bottom: 18px;
        font-size: 18px;
    }

    /* ✅ FIXED INPUT BOXES (clean, no blue/gray fill) */
    input {
        width: 100%;
        padding: 11px;
        margin-bottom: 12px;
        border-radius: 6px;
        border: 1px solid #e5e7eb;
        background: #ffffff; /* ✅ important fix */
        color: #111827;
        font-size: 14px;
        transition: 0.2s;
    }

    input:focus {
        border-color: #9ca3af;
        outline: none;
        background: #ffffff;
    }

    button {
        width: 100%;
        padding: 12px;
        border-radius: 6px;
        border: none;
        background: #111827;
        color: white;
        font-size: 14px;
        cursor: pointer;
    }

    button:hover {
        background: #374151;
    }
</style>

</head>

<body>

<div class="container">
    <h2>Favorite Colors</h2>

    <form method="POST">
        <input type="text" name="color1" placeholder="Color 1" required>
        <input type="text" name="color2" placeholder="Color 2" required>
        <input type="text" name="color3" placeholder="Color 3" required>
        <input type="text" name="color4" placeholder="Color 4" required>
        <input type="text" name="color5" placeholder="Color 5" required>

        <button type="submit">Save Colors</button>
    </form>
</div>

</body>
</html>