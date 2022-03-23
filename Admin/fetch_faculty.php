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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Fetchtable</title>
  </head>
  <body>
    <h2 class="text-center text-danger">View Faculty</h2>
      <div class="container my-4">
      <table class="table table-center">
  <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Faculty Name</th>
      <th scope="col">Faculty ID</th>
      <th scope="col">Department</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Adhhar</th>
      <th scope="col">Designation</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">Dist</th>
      <th scope="col">City</th>
      <th scope="col">Pin</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody >
      <?php
      $qry = "SELECT * FROM `faculty`";
      $run = mysqli_query($link,$qry);
      if($run->num_rows>0){
      $count=0;
      while($data=mysqli_fetch_assoc($run)){
          $count++;
      ?>
    <tr>
      <th scope="row"><?php  echo $count;?></th>
      <td><?php  echo $data['faculty_name'];?></td>
      <td><?php  echo $data['faculty_id'];?></td>
      <td><?php  echo $data['department'];?></td>
      <td><?php  echo $data['email'];?></td>
      <td><?php  echo $data['contact'];?></td>
      <td><?php  echo $data['adhhar_no'];?></td>
      <td><?php  echo $data['designation'];?></td>
      <td><?php  echo $data['address'];?></td>
      <td><?php  echo $data['state'];?></td>
      <td><?php  echo $data['dist'];?></td>
      <td><?php  echo $data['city'];?></td>
      <td><?php  echo $data['pin'];?></td>
       <td> <a href="update_faculty.php?$id= <?php echo $data['id'];?>" ><button class ="btn btn-warning" >Update</button></a> </td>
      <td><a href="delete_faculty.php?$id= <?php echo $data['id'];?>"><button class ="btn btn-danger" >Delete</button></a></td>
      <?php
      }
    }
    ?>
    </tr>
  </tbody>
</table>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include 'footer.php'
?>