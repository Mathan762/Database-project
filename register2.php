<?php 

	//include('dbcon.php');

	$con = mysqli_connect("localhost", "root", "", "student database");
	if (!$con) {
		die("Connection failed : " + mysqli_connect_error());
	}

	//$firstname = $lastname = $email = $number = $gender = $usname = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		# code...
	}
// if (mysqli_select_db($con) {
	// 	echo "DB Selection not set";
	// }

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['MNum'];
	$gender = $_POST['male'];
	$usname = $_POST['uname'];
	$password = $_POST['pwd'];

	// function validate_input($data)
	// {
	// 	$data = trim($data);
	// 	$data = stripslashes($data);
	// 	$data = htmlspecialchars($data);
	// 	return $data;
	// }

	//function NewUser()
	//{
		$sql = "INSERT INTO faculty(fid, fpassword, ffirstname, flastname, femail, fgender) VALUES ('$usname', '$password', '$firstname', '$lastname', '$email', '$gender')";
	//}

	// function stringlength($str)
	// {

	// }

	

	mysqli_query($con, $sql);
	// if ($query) {
	// 	echo "<script>
	// 		alert ('Record inserted successfully...!');
	// 	</script>";
	// }
	//mysqli_query($con, "INSERT INTO fphonenumber (fid, fphno1) VALUES ($uname, $number)");
	//header('location : staffreg.html');
	echo 'Log in success;'

 ?>
