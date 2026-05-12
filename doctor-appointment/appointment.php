<?php
$doctor = isset($_GET['doctor']) ? htmlspecialchars($_GET['doctor']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Appointment</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <h1>Appointment with <?= $doctor ?></h1>
    </header>
    <main>
        <form method="post" action="submit.php">
            <input type="hidden" name="doctor" value="<?= $doctor ?>">
            <label>Name:<br>
                <input type="text" name="name" required>
            </label><br><br>
            <label>Email:<br>
                <input type="email" name="email" required>
            </label><br><br>
            <label>Phone:<br>
                <input type="tel" name="phone">
            </label><br><br>
            <label>Date:<br>
                <input type="date" name="date" required>
            </label><br><br>
            <label>Time:<br>
                <input type="time" name="time" required>
            </label><br><br>
            <input type="submit" value="Book Appointment">
        </form>
    </main>
</body>
</html>