
<?php 

	//include('dbcon.php');

//<?php
$con = mysqli_connect("localhost","root","");

// Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }


	if (!mysqli_select_db($con, 'student database')) {
		echo "DB Selection not set";
	}
	$usname = $_POST['uname'];
	$password = $_POST['pwd'];
	$confirm_password = $_POST['pwd1'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	//$number = $_POST['MNum'];
	//$gender = $_POST['male'];

	if ($password != $confirm_password) {
		echo "Password not match";
	}
	
	if (isset($_POST['submit1'])) {
		$sql = "INSERT INTO faculty(fid, fpassword, ffirstname, flastname, femail) VALUES ('$usname', '$password', '$firstname', '$lastname', '$email')";

		mysqli_query($con, $sql);
		//echo "Sucess";
		//header('location : loginsuccess.php');
		header('location:loginsuccess.php');
	}

	
	//mysqli_query($con, "INSERT INTO fphonenumber (fid, fphno1) VALUES ($uname, $number)");
	
	//echo "Success";

 ?>
