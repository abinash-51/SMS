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
    <h2 class="text-center">View Class Table</h2>
  <div class="container">
    <div class="d-grid gap-2">
    <h2 class="text-center text-danger ">View Class</h2>
      <div class="container my-4">
      <table class="table table-center">
  <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Class Name</th>
      <th scope="col">Class ID</th>
      <th scope="col">Floor</th>
      <th scope="col">Class Timing</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="text-center" >
      <?php
      $qry = "SELECT * FROM `class`";
      $run = mysqli_query($link,$qry);
      if($run->num_rows>0){
      $count=0;
      while($data=mysqli_fetch_assoc($run)){
          $count++;
      ?>
    <tr>
      <th scope="row"><?php  echo $count;?></th>
      <td><?php  echo $data['class_name'];?></td>
      <td><?php  echo $data['class_id'];?></td>
      <td><?php  echo $data['class_floor'];?></td>
      <td><?php  echo $data['class_timing'];?></td>    
       <td> <a href="update_class.php?$id= <?php echo $data['id'];?>" ><button class ="btn btn-warning" >Update</button></a> </td>
      <td><a href="delete_class.php?$id= <?php echo $data['id'];?>"><button class ="btn btn-danger" >Delete</button></a></td>
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
include 'footer.php';
?>