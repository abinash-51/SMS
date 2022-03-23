<?php
include 'header.php';
include'link.php';
$id = $_GET['$id'];
$qry = "SELECT * FROM `student` WHERE `id`='$id'";
$run = mysqli_query($link,$qry);
$data=mysqli_fetch_assoc($run);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student</title>
  </head>
  <body>
    <h1 class = "mt-5 text-center">School</h1>
    <div class="container">

        <!-- form start  -->
  <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Name</label>
    <input type="text" name = "student_name" value = "<?php  echo $data['student_name'];?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student ID</label>
    <input type="text" name = "student_id" value ="<?php  echo $data['student_id'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Email</label>
    <input type="text" name = "email" value="<?php  echo $data['email'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Contact Number</label>
    <input type="text" name = "contact" value="<?php  echo $data['contact'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Adhhar Number</label>
    <input type="text" name = "adhhar_no" value = "<?php  echo $data['adhhar_no'];?>"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Blood Group</label>
    <input type="text" name = "blood_group" value="<?php  echo $data['blood_group'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Father's Name</label>
    <input type="text" name = "father_name" value="<?php  echo $data['father_name'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Mothers's Name</label>
    <input type="text" name = "mother_name" value="<?php  echo $data['mother_name'];?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Address</label>
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
  <button type="submit" name = "update" class="btn btn-primary w-100 my-3 text-center" >Update</button>
</form>
<!-- form end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <?php

if(isset($_POST['update'])){
  
  $name = $_POST['student_name'];
  $student_id = $_POST['student_id'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $adhhar = $_POST['adhhar_no'];
  $bloodGroup = $_POST['blood_group'];
  $father = $_POST['father_name'];
  $mother= $_POST['mother_name'];
  $address = $_POST['address'];
  $state = $_POST['state'];
  $dist = $_POST['dist'];
  $city = $_POST['city'];
  $pin = $_POST['pin'];
  $sql = "UPDATE `student` SET `student_name`='$name',
  `student_id`='$student_id',`email`=' $email',`contact`=' $contact',
  `adhhar_no`=' $adhhar',`blood_group`='$bloodGroup',`father_name`='$father',
  `mother_name`='$mother',`address`='$address',`state`='$state ',
  `dist`='$dist',`city`='$city',
  `pin`='$pin' WHERE `id`='$id'";
$run = mysqli_query($link,$sql);
print_r($sql);
if($run){
  echo "<script>
  alert('Updated successfully')
  </script>";
}else{
  echo "<script>
  alert('Not updated successfully')
  </script>";
}
}
?>
<?php
include 'footer.php';
?>
</body>
</html>


