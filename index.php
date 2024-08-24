<?php
include "view1.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
</head>

<body>

<div class="d-flex justify-content-end">    
    <button type="submit" name="submitf" class="btn btn-primary "><a href="insert.php" class="text-light">ADD
            USER</a></button>
            </div>


    <table class="table bg-dark">
        <thead class="thead-light ">
            <tr>
                <th scope="col">id</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">gender</th>
                <th scope="col">birthday</th>
                <th scope="col">weight</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">zip</th>
                <th scope="col">image</th>
                <th scope="col">avalable</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php

include 'connection.php';
    $sql = "SELECT * FROM user2 ";
  $result=mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    //    $id= $row["id"];
      echo " <tr>
      
        <th>" . $row["id"]. "</th>
        <td>" . $row["name"]. "</td>
        <td>" . $row["email"]. "</td>
        <td>" . $row["gender"]. "</td>
        <td>" . $row["birthday"]. "</td>
        <td>" . $row["weight"]. "</td>
        <td>" . $row["Address"]. "</td>
        <td>" . $row["City"]. "</td>
        <td>" . $row["State"]. "</td>
        <td>" . $row["zip"]. "</td>
        <td>" . $row["checkbox"]. "</td>
        <td ><img src='upload/" . $row['image'] . "' alt=''  width='40' height='40'></td>
        <td> 
        
    <button  class='btn btn-primary'><a href='view.php?viewid= " . $row['id']. "' class='text-light'>view</a></button>

     <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#myModal'>
    View model
  </button>

    <button  class='btn btn-primary'><a href='update.php?editid= " . $row['id']. "' class='text-light'>Edit</a></button>
            
    <button  class='btn btn-danger'><a href='delete.php?deletid=" . $row['id']. " 'class='text-light' >Delete</a></button>
            </td>
         </tr> " ;
       
     }

    } else {
     
    }
    $conn->close();
    
?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>