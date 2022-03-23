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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>deletepage_faculty</title>
</head>

<body>
    <p>
        <?php
        $id = $_GET['$id'];
        $sql = "DELETE FROM `staff` WHERE `id` = '$id'";
        $run = mysqli_query($link, $sql);
        if ($run) {
            echo "<script>
            alert('Deleted')
            </script>";
        } else {
            echo "<script>
            alert('Not deleted')
            </script>";
        }
        ?>
    <div class="container text-center">
        <a href="insert_staff.php"><button class="col-6 btn btn-secondary col-8 mb-3 ">Go to Insert Page</button></a>
    </div>
    </p>
    <?php
    include 'footer.php';
    ?>
</body>

</html>