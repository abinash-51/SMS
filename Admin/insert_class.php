<?php
include 'header.php';
include "link.php";
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
    <h1 class = "text-center  text-danger"><italic>Add Class</italic></h1>
    <div class="container">
        <!-- form start  -->
    <form action="" class = " container col-10" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class Name</label>
    <input type="text" name = "class_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class Floor</label>
    <input type="text" name ="class_floor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class Timing</label>
    <input type="text" name = "class_timing" class="form-control" id="exampleInputPassword1">
  </div>
  <div class=" text-center my-3">
  <button type="submit" name = "submit" class=" btn btn-primary col-6" >Add Class</button>
  </div>
    </form>
    </div>
 

<?php 
if(isset($_POST['submit'])){
$name = $_POST['class_name'];
$token = '02120321236547956984456521236448586SDASYFDASGUYTAWERTYUIOIGDFGH';
        $token = str_shuffle($token);
        $token = substr($token, 0, 5);
        $p_id='SR_'.$token;
$floor = $_POST['class_floor'];
$timing = $_POST['class_timing'];
$sql = "INSERT INTO `class`( `class_name`, `class_id`,`class_floor`, `class_timing`) 
VALUES ('$name','$token','$floor','$timing')";


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
 
    </body>
</html>
<?php
  include 'footer.php';
  ?>