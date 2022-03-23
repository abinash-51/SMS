<?php
include "./Admin/link.php";

$msg1;
$msg2;
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container mx-auto">
			<form action="" method="POST">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>	
					<a href="#" class="social"><i class="fab fa fa-instagram fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-youtube fa-2x"></i></a>		
				</div>
				<span>or use your account</span>
				<input type="text" name="user" placeholder="User ID" />
				<input type="password" name="pass" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<a href="../Admin/fetch_student.php"><button type="submit" name="login">Login</button></a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
		<h1>D.A.V Public School</h1>
    <p>Registration open </p>
    <p><a href="signup.php"> Create an account tap here</a></p>

				</div>
			</div>
		</div>
	</div>
<!-- Php script  -->
<?php
session_start();
// if($_SESSION['user']=='Admin'){
//     header('location:index.php');
// }
// if($_SESSION['user']=='xyz'){
//     header('location:student/index.php');
// }

// if($_SESSION['user']=='faculty'){
//     header('location:Faculty/index.php');
// }
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass= $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
    $run = mysqli_query($link,$sql);
    if($run->num_rows>0){
        $data = mysqli_fetch_assoc($run);
        $password = $data['password'];
        $type=$data['type'];
        if($pass==$password){
          
            if($type=='admin'){
                $_SESSION['user'] = $data['username'];
                header('location:Admin/index.php');
            }
            if($type=='student'){
                $_SESSION['user'] = $data['username'];
                header('location:student/index.php');
            }
            if($type=='faculty'){
                $_SESSION['user'] = $data['username'];
                header('location:Faculty/index.php');
            }

        }
        else{
            echo "Incorrect Password";
        }
          
    }
    else{
        echo "User Not Registered";
    }
}

?>
</body>
</html>