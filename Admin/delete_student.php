<?php
include 'header.php';
include'link.php';

$id = $_GET['$id'];
$sql="DELETE FROM `student` WHERE `id`='$id'";
$del = mysqli_query($link,$sql);
if(!$del){
    echo "<script>
    alert('Deleted')
    </script>";
}
else {
    echo "<script>
    alert('Not deleted')
    </script>";
}
?>
<?php
include 'footer.php';
?>