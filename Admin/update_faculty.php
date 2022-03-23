<?php
include 'header.php';
include "link.php";
$id = $_GET['$id'];
$qry = "SELECT * FROM `faculty` WHERE `id`='$id'";
$run = mysqli_query($link,$qry);
$data = mysqli_fetch_assoc($run);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>update_faculty</title>
  </head>
  <body>
    <h1 class = "mt-5 text-center">Faculty</h1>
    <div class="container col-10">
        <!-- form start  -->
    <form action=""  method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Faculty Name</label>
    <input type="text" name = "faculty_name" value="<?php  echo $data['faculty_name'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Department</label>
    <input type="text" name ="department" value = "<?php  echo $data['department'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Email</label>
    <input type="text" name = "email" value="<?php  echo $data['email'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Contact Number</label>
    <input type="text" name = "contact" value="<?php  echo $data['contact'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Adhhar Number</label>
    <input type="text" name = "adhhar_no" value="<?php  echo $data['adhhar_no'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Designation</label>
    <input type="text" name = "designation" value="<?php  echo $data['designation'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Address</label>
    <input type="text" name = "address" value="<?php  echo $data['address'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">State</label>
    <input type="text" name = "state" value="<?php  echo $data['state'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">District</label>
    <input type="text" name = "dist" value="<?php  echo $data['dist'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" name = "city" value="<?php  echo $data['city'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pincode</label>
    <input type="text" name = "pin" value="<?php  echo $data['pin'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="text-center">
  <button  onclick ="fun()" type="submit" name = "update" id="update" class="btn btn-success col-6 my-3 text-center" >Click to Update</button>
  </div>
</form>
<div class="container text-center">
<a href="fetch_faculty.php"><button class="col-6 btn btn-secondary col-8 mb-3 ">Back to table</button></a>
</div>
    </div>
<script>
 function fun() {
alert("Do you wanna update?");
}
</script>
<!-- form end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
if(isset($_POST['update'])){
$name = $_POST['faculty_name'];
$dept= $_POST['department'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$adhhar = $_POST['adhhar_no'];
$desig= $_POST['designation'];
$address = $_POST['address'];
$state = $_POST['state'];
$dist = $_POST['dist'];
$city = $_POST['city'];
$pin = $_POST['pin'];

$sql ="UPDATE `faculty` SET `faculty_name`='$name',`department`='$dept',`email`='$email',
`contact`='$contact',`adhhar_no`='$adhhar',`designation`='$desig',`address`='$address ',
`state`='$state',`dist`='$dist ',`city`='$city',`pin`='$pin ' WHERE `id`='$id'";
 $run = mysqli_query($link,$sql);
 if(!$run){
     echo 'Not inserted';
 }
}
?>
  </body>
</html>
<?php
include 'footer.php';
?>