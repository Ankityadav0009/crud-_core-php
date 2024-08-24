<?php
include 'connection.php';
$id = $_GET['editid'];
    // echo $id;
    // die();
if(isset($_POST['submitf'])){
    $name = $_POST['namef'];
    $Gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $weight = $_POST['weight'];
    $filename = $_FILES['image']['name'];
    $email = $_POST['emailf'];
    $password = $_POST['password'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $zip = $_POST['zip'];
    $checkbox = $_POST['checkbox'];
    move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $filename);


   $sql =" update `user2` set id=$id,name='$name' , email='$email', gender='$Gender',birthday= ' $birthday' , weight= '$weight', image= '$filename', password=  '$password' , Address='$Address', City='$City', State= '$State',zip='$zip'";

  $result=mysqli_query($conn, $sql);


  if( $result){
      header('Location: index.php');
   
  }else{
      echo "fail to inser ";
  }
}
  

if(isset($_GET['editid']))
{
    $id = $_GET['editid'];
    $sql="select * from `user2` where id=$id";
    $res= mysqli_query($conn, $sql);
    if ($res) {
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) 
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
              $checkbox = $row['checkbox'];
              $cbox = explode(",", $checkbox);
        
            //  22
            //   echo $name ;
            //   die();
             
           }
      
          } else {
            echo "0 results";
          }
    }else {
        die(mysqli_error($conn));
    }
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style=" background-image: url('https://w0.peakpx.com/wallpaper/974/405/HD-wallpaper-fish-form-design.jpg')">
    <div class="container my-5 bg-light w-50 p-2 bg-dark br-3">


        <form class="row g-3 text-light " method="post" enctype="multipart/form-data">
            <div class="row p-3">
                <div class="mb-3 col-md-6">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="namef"
                        placeholder="enter name" require value="<?php echo $name ?>">
                </div>
                <div class="form-group col-md-6 ">

                    <label for="formGroupExampleInput2" class="form-label">Gender Selection :</label>

                    <div class="mb-2">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo isset($gender) && $gender=='male' ?'checked' : '' ?>>
                        <label class="form-check-label" for="male">
                            Male
                        </label>

                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo isset($gender) && $gender=='female' ?'checked' : '' ?>>
                        <label class="form-check-label" for="female">
                            Female
                        </label>

                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" <?php echo isset($gender) && $gender=='other' ?'checked' : '' ?>>
                        <label class="form-check-label" for="other">
                            Other
                        </label>
                    </div>

                </div>

            </div>
            <div class="mb-3 col-md-3">

                <label for="birthday" class="row m-2">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="DOB" require
                    min="2000-01-02" value="<?php echo $birthday ?>">
            </div>
            <div class="mb-3 col-md-3">

                <label for="weight" class="row m-2">weight:</label>
                <input type="number" class="form-control" id="weight" name="weight" placeholder="weight" require
                    min="30" max="200" value="<?php echo $weight ?>">
            </div>

            <div class=" mb-3 col-md-6">

                <label for="myfile" class="row m-2">Select a file:</label>
                <input type="file" class="form-control" name="image">

            </div>

            <div class="mb-3 col-md-6">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="email" class="form-control" name="emailf" id="formGroupExampleInput2"
                    placeholder="Enter Email" require value="<?php echo $email ?>">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="Address" id="inputAddress" placeholder="1234 Main St">
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="City">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" name="State" value="<?php echo $state ?>">
                    <option selected>Choose...</option>
                    <option value="AP">Andhra Pradesh</option>
                    <option value="AR">Arunachal Pradesh</option>
                    <option value="AS">Assam</option>
                    <option value="BR">Bihar</option>
                    <option value="CT">Chhattisgarh</option>
                    <option value="GA">Gujarat</option>
                    <option value="HR">Haryana</option>
                    <option value="HP">Himachal Pradesh</option>
                    <option value="JK">Jammu and Kashmir</option>
                    <option value="GA">Goa</option>
                    <option value="JH">Jharkhand</option>
                    <option value="KA">Karnataka</option>
                    <option value="KL">Kerala</option>
                    <option value="MP">Madhya Pradesh</option>
                    <option value="MH">Maharashtra</option>
                    <option value="MN">Manipur</option>
                    <option value="ML">Meghalaya</option>
                    <option value="MZ">Mizoram</option>
                    <option value="NL">Nagaland</option>
                    <option value="OR">Odisha</option>
                    <option value="PB">Punjab</option>
                    <option value="RJ">Rajasthan</option>
                    <option value="SK">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="TG">Telangana</option>
                    <option value="TR">Tripura</option>
                    <option value="UT">Uttarakhand</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="WB">West Bengal</option>
                    <option value="AN">Andaman and Nicobar Islands</option>
                    <option value="CH">Chandigarh</option>
                    <option value="DN">Dadra and Nagar Haveli</option>
                    <option value="DD">Daman and Diu</option>
                    <option value="DL">Delhi</option>
                    <option value="LD">Lakshadweep</option>
                    <option value="PY">Puducherry</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip">
            </div>
            <div class="">

                <label for="formGroupExampleInput2" class="form-label"> Selecte vehicle you have:</label>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> I have a bike</label>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                <label for="vehicle2"> I have a car</label>
            </div>
            <div class="col-md-6">
                avilable days: <br />
                <input type="checkbox" name="Days[]" value="Daily" <?php echo in_array('Daily',$cbox) ? 'checked':''?>>Daily<br>
                <input type="checkbox" name="Days[]" value="Sunday" <?php echo in_array('Sunday',$cbox) ?'checked':''?>>Sunday<br>
                <input type="checkbox" name="Days[]" value="Monday">Monday<br>
                <input type="checkbox" name="Days[]" value="Tuesday">Tuesday <br>
                <input type="checkbox" name="Days[]" value="Wednesday">Wednesday<br>
                <input type="checkbox" name="Days[]" value="Thursday">Thursday <br>
                <input type="checkbox" name="Days[]" value="Friday">Friday<br>
                <input type="checkbox" name="Days[]" value="Saturday">Saturday <br>

            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" name="submitf" class="btn btn-primary">update</button>
                <input type="reset" class="btn btn-primary" value="Reset">
            </div>
        </form>
    </div>


</body>

</html>