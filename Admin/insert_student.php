<?php
include 'header.php';
include 'link.php';
?>
<!-- html  -->
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
    <h1 class = " text-center text-danger">Add Students</h1>
    <div class="container">
        <!-- form start  -->
    <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Name</label>
    <input type="text" name = "student_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Email</label>
    <input type="text" name = "email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Contact Number</label>
    <input type="text" name = "contact" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Adhhar Number</label>
    <input type="text" name = "adhhar_no" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Blood Group</label>
    <input type="text" name = "blood_group" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Father's Name</label>
    <input type="text" name = "father_name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Mothers's Name</label>
    <input type="text" name = "mother_name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student Address</label>
    <input type="text" name = "address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">State</label>
    <input type="text" name = "state" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">District</label>
    <input type="text" name = "dist" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" name = "city" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pincode</label>
    <input type="text" name = "pin" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name = "submit" class="btn btn-primary w-100 my-3 text-center" >Submit</button>
</form>
<a href="fetch_student.php"><button class="btn btn-warning text-center w-100 mb-5">Check Table</button></a>
<!-- form end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php

if(isset($_POST['submit'])){
$name = $_POST['student_name'];
$token = '02120321236547956984456521236448586SDASYFDASGUYTAWERTYUIOIGDFGH';
$token = str_shuffle($token);
$token = substr($token, 0, 5);
$p_id='SR_'.$token;
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

$qry = "INSERT INTO `student`(`student_name`, `student_id`, `email`, `contact`, `adhhar_no`, `blood_group`, `father_name`, `mother_name`, `address`, `state`, `dist`, `city`, `pin`) 
VALUES ('$name','$token','$email','$contact','$adhhar','$bloodGroup','$father','$mother','$address','$state','$dist','$city','$pin')";
 $run = mysqli_query($link,$qry);
 if(!$run){
  echo "<script>
  alert(Data inserted success fully);
  </script>";
} 
else{
echo "<script>
 alert(Data  not inserted success fully);
 </script>";
}
}
?>
<?php
include 'footer.php';
?>
  </body>
</html>