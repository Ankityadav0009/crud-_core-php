
<?php
$id=$_GET['viewid'];
include 'connection.php';
    $sql = "SELECT * FROM user2 where id=$id ";
  $result=mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) 
      {

        $name = $row['name'];
        $email = $row['email'];
        $gender = $row['gender'];
        $birthday = $row['birthday'];
        $weight = $row['weight'];
        $password = $row['password'];
        $Address = $row['Address'];
        $City = $row['City'];
        $State = $row['State'];
        $zip = $row['zip'];
  
       
     }

    } else {
      echo "0 results";
    }
    $conn->close();
    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view.css">
</head>
<body>
<div class="container-fluid mt-3">
  <h4 class ="text-center text-primary">User view</h4>
  <div class="row">
    <div class="col-sm-6 p-3 text-white">
    <table class="table">
                        
                        <tbody class="table-border-bottom-0">
                        <tr>
                          <th>Full Name</th>
                            <td><?php echo $name; ?></td>
                          </tr>
                          <tr>
                          <tr>
                          <th>Contact Number</th>
                            <td> 07982351473</td>
                          </tr>
                          <tr>
                         
                          <th>Email ID</th>
                            <td><?php echo $email; ?></td>
                          </tr>
                          <tr>
                          <th>Date of Birth</th>
                            <td> <?php echo $birthday; ?></td>
                          </tr>
                          <tr>
                          <th>Gender</th>
                            <td>Male</td>
                          </tr>
                          
                          <tr>
                          <th>Marital Status</th>
                            <td>Married</td>
                          </tr>
                          <tr>
                          <th>Father's Name</th>
                            <td>Adesh</td>
                          </tr>
                          <tr>
                          <th>Identification Number</th>
                            <td>345345345</td>
                          </tr>
                          <tr>
                          <th>Identification Type</th>
                            <td>Aadhar Card</td>
                          </tr>
                          <tr>
                          <th>House/Flat No.</th>
                            <td>T6</td>
                          </tr>
                          <tr>
                          <th>Building Number & Name</th>
                            <td>23</td>
                          </tr>
                          <tr>
                          <th>Cross/Lane/Main Name</th>
                            <td>High Hilss</td>
                          </tr>
                          <tr>
                          <th>Area/Sector Name</th>
                            <td>Noida</td>
                          </tr>
                          <tr>
                          <tr>
                          <th>District Name</th>
                            <td> Gautam Budh Nagar</td>
                          </tr>
       
                        </tbody>
                      </table>

    </div>
    <div class="col-sm-6 p-3  text-white">
    <table class="table">
                        
                        <tbody class="table-border-bottom-0">
                        <tr>
                          <th>Full Name</th>
                            <td>Arun Kumar na Sharma</td>
                          </tr>
                          <tr>
                          <tr>
                          <th>Contact Number</th>
                            <td> 07982351473</td>
                          </tr>
                          <tr>
                         
                          <th>Email ID</th>
                            <td>arun@gmail.com</td>
                          </tr>
                          <tr>
                          <th>Date of Birth</th>
                            <td>1990-12-03</td>
                          </tr>
                          <tr>
                          <th>Gender</th>
                            <td>Male</td>
                          </tr>
                          
                          <tr>
                          <th>Marital Status</th>
                            <td>Married</td>
                          </tr>
                          <tr>
                          <th>Father's Name</th>
                            <td>Adesh</td>
                          </tr>
                          <tr>
                          <th>Identification Number</th>
                            <td>345345345</td>
                          </tr>
                          <tr>
                          <th>Identification Type</th>
                            <td>Aadhar Card</td>
                          </tr>
                          <tr>
                          <th>House/Flat No.</th>
                            <td>T6</td>
                          </tr>
                          <tr>
                          <th>Building Number & Name</th>
                            <td>23</td>
                          </tr>
                          <tr>
                          <th>Cross/Lane/Main Name</th>
                            <td>High Hilss</td>
                          </tr>
                          <tr>
                          <th>Area/Sector Name</th>
                            <td>Noida</td>
                          </tr>
                          <tr>
                          <tr>
                          <th>District Name</th>
                            <td> Gautam Budh Nagar</td>
                          </tr>
       
                        </tbody>
                      </table>

    </div>
   
  </div>
</div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>