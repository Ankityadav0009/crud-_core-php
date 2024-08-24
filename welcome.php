
<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['name'];
$Address  = $_SESSION['Address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <h1>Welcome, <?php echo $Address; ?></h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>