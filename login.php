<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM user2 where `name` ='$username' and `email`=  '$email' ";
    // $sql = "SELECT * FROM user2 WHERE name='$username' and email=  $email";
    $result=mysqli_query($conn, $sql);

    if ($result->num_rows == 1) 
    {
        $row = $result->fetch_assoc();
        $_SESSION['name'] = $username; // Initialize session
        $_SESSION['email'] =$email; // Initialize session
        $_SESSION['Address'] =$row['Address']; // Initialize session

        header("Location: welcome.php"); // Redirect to welcome page
       
    } else 
    {
        echo "User not found";
    }
}

$conn->close();
?>
