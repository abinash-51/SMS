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
    <h1 class = "text-center text-danger"><italic>Staff</italic></h1>
    <div class="container">
        <!-- form start  -->
    <form action="" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Staff Name</label>
    <input type="text" name = "staff_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Staff Designation</label>
    <input type="text" name ="staff_designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Staff Details </label>
    <textarea name="staff_details" id="tarea" cols="30" rows="5" style="resize: none;" class="form-control" id="exampleInputPassword1"></textarea>
  </div>
  <div class=" text-center my-3">
  <button type="submit" name = "submit" class=" btn btn-primary col-6" >Submit</button>
  </div>
    </form>
    </div>

<?php 
if(isset($_POST['submit'])){
$name = $_POST['staff_name'];
$token = '02120321236547956984456521236448586SDASYFDASGUYTAWERTYUIOIGDFGH';
        $token = str_shuffle($token);
        $token = substr($token, 0, 5);
        $p_id='SR_'.$token;
$designation = $_POST['staff_designation'];
$details = $_POST['staff_details'];
$sql = "INSERT INTO `staff`(`staff_name`, `staff_id`,`staff_designation`, `staff_details`) 
VALUES ('$name','$token','$designation','$details')";
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
  <?php
  include 'footer.php';
  ?>
    </body>
</html>