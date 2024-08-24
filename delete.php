<?php

include 'connection.php';
if(isset($_GET['deletid']))
{
    $id = $_GET['deletid'];
    $sql="delete from `user2` where id=$id";
    $res= mysqli_query($conn, $sql);
    if ($res) {
        header('Location: index.php');
    }else {
        die(mysqli_error($conn));
    }
}

?>