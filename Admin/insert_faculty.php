<?php 
include 'header.php';
include'link.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <h1 class = "text-center text-danger"><italic>FACULTY</italic></h1>
    <div class="container">
        <!-- form start  -->
    <form action="" class = " container col-10" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Faculty Name</label>
    <input type="text" name = "faculty_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Department</label>
    <input type="text" name ="department" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Email</label>
    <input type="text" name = "email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Contact Number</label>
    <input type="text" name = "contact" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Adhhar Number</label>
    <input type="text" name = "adhhar_no" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Designation</label>
    <input type="text" name = "designation" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Faculty Address</label>
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
    <input type="text" name = "pin" class="form-control " id="exampleInputPassword1">
  </div>
  <div class=" text-center my-3">
  <button type="submit" name = "submit" class=" btn btn-primary w-100" >Submit</button>
  </div>
</form>
<!-- form end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<p>
<?php
if(isset($_POST['submit'])){
$name = $_POST['faculty_name'];
$token = '02120321236547956984456521236448586SDASYFDASGUYTAWERTYUIOIGDFGH';
        $token = str_shuffle($token);
        $token = substr($token, 0, 5);
        $p_id='SR_'.$token;
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

$sql ="INSERT INTO `faculty`(`faculty_name`, `faculty_id`, `department`, `email`, `contact`, 
`adhhar_no`, `designation`, `address`, `state`, `dist`, `city`, `pin`)
 VALUES ('$name','$token','$dept','$email','$contact','$adhhar','$desig',
 '$address','$state','$dist','$city','$pin')";
 $run = mysqli_query($link,$sql);
  if($run){
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
</p>
  </body>
</html>
<?php
include 'footer.php';
?>