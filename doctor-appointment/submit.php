<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $doctor = htmlspecialchars($_POST['doctor']);

    // simple file log (append)
    $logLine = "$name | $email | $phone | $doctor | $date $time\n";
    file_put_contents('appointments.txt', $logLine, FILE_APPEND | LOCK_EX);
} else {
    // redirect back if not POST
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmed</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <h1>Appointment Confirmed</h1>
    </header>
    <main>
        <p>Thank you, <?= $name ?>. Your appointment with <?= $doctor ?> on <?= $date ?> at <?= $time ?> has been received.</p>
        <p>We will contact you at <?= $email ?><?php if ($phone) echo " or by phone $phone"; ?>.</p>
        <p><a href="index.php">Back to home</a></p>
    </main>
</body>
</html>