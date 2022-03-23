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

  <title>Fetch</title>
</head>

<body>
  <h2 class="text-center text-danger">View Student Table</h2>
<div class="container my-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Student Name</th>
          <th scope="col">Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Adhhar</th>
          <th scope="col">Blood Group</th>
          <th scope="col">Fathers Name</th>
          <th scope="col">Mother Name</th>
          <th scope="col">Address</th>
          <th scope="col">State</th>
          <th scope="col">Dist</th>
          <th scope="col">City</th>
          <th scope="col">Pin</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $qry = "SELECT * FROM `student`";
        $run = mysqli_query($link, $qry);
        if ($run->num_rows > 0) {
          $count = 0;
          while ($data = mysqli_fetch_assoc($run)) {
            $count++;
        ?>
            <tr>
              <th scope="row"><?php echo $count; ?></th>
              <td><?php echo $data['student_name']; ?></td>
              <td><?php echo $data['student_id']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['contact']; ?></td>
              <td><?php echo $data['adhhar_no']; ?></td>
              <td><?php echo $data['blood_group']; ?></td>
              <td><?php echo $data['father_name']; ?></td>
              <td><?php echo $data['mother_name']; ?></td>
              <td><?php echo $data['address']; ?></td>
              <td><?php echo $data['state']; ?></td>
              <td><?php echo $data['dist']; ?></td>
              <td><?php echo $data['city']; ?></td>
              <td><?php echo $data['pin']; ?></td>
              <td><a href="update_student.php?$id=<?php echo $data['id']; ?>"><button class="btn btn-success">Update</button></a></td>
              <td><a href="delete_student.php?$id= <?php echo $data['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
          <?php
          }
        }
          ?>
            </tr>
      </tbody>
    </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
</body>

</html>
<?php
  include 'footer.php';
  ?>