<?php
include 'header.php';
include "link.php";
$id= $_GET['$id'];
$qry = "SELECT * FROM `staff` WHERE`id`='$id'";
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
    <h1 class = "mt-5 text-center">Staff</h1>
    <div class="container col-10">
        <!-- form start  -->
    <form action=""  method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Staff Name</label>
    <input type="text" name = "staff_name" value="<?php  echo $data['staff_name'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Staff Designation</label>
    <input type="text" name ="staff_designation" value = "<?php  echo $data['staff_designation'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Staff Details</label>
    <input type="text" name ="staff_details" value="<?php  echo $data['staff_details'];?>" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="text-center">
  <button  onclick ="fun()" type="submit" name = "update" id="update" class="btn btn-success col-6 my-3 text-center" >Click to Update</button>
  </div>
</form>
<div class="container text-center">
<a href="fetch_staff.php"><button class="col-6 btn btn-secondary col-8 mb-3 ">Back to table</button></a>
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
$name = $_POST['staff_name'];    
$designation = $_POST['staff_designation'];
$details= $_POST['staff_details'];

$sql ="UPDATE `staff` SET `staff_name`='$name ',
`staff_designation`='$designation ',`staff_details`='$details' WHERE `id` = '$id'";
 $run = mysqli_query($link,$sql);
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