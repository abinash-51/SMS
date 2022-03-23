<?php
include 'header.php';
include"link.php";
?>
<!-- html  -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>View Staff</title>
  </head>
  <body>
    <h2 class="text-center text-danger">View staff</h2>
      <div class="container my-4">
      <table class="table table-center">
  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Staff Name</th>
      <th scope="col">Staff ID</th>
      <th scope="col">Staff Designation</th>
      <th scope="col">About Staff</th>
       <th scope="col">Edit</th>
       <th scope="col">Delete</th>
    </tr>
    </thead>
  <tbody >
      <?php
      $qry = "SELECT * FROM `staff`";
      $run = mysqli_query($link,$qry);
      if($run->num_rows>0){
      $count=0;
      while($data=mysqli_fetch_assoc($run)){
          $count++;
      ?>
    <tr>
      <th scope="row"><?php  echo $count;?></th>
      <td><?php  echo $data['staff_name'];?></td>
      <td><?php  echo $data['staff_id'];?></td>
      <td><?php  echo $data['staff_designation'];?></td>
      <td><?php  echo $data['staff_details'];?></td>
      <td><a href="update_staff.php?$id=<?php  echo $data['id'];?>"><button class ="btn btn-success">Update</button></a></td>
      <td><a href="delete_staff.php?$id=<?php echo $data['id'];?>"><button class ="btn btn-danger" >Delete</button></a></td>
     <?php
      }
    }
    ?>
    </tr>
  </tbody>
</table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
include 'footer.php';
?>
  </body>
</html>