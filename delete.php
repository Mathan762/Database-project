<?php 
 
	include('dbcon.php');

	if (!mysqli_select_db($con, 'student database')) {
		echo "DB Selection not set";
	}

	//$student_name = $_POST['stname'];
	$student_regno = $_POST['regno'];

	if (isset($_POST['submit'])) {
		$sql = "DELETE FROM student WHERE Sregno = '$student_regno'";
		mysqli_query($con, $sql);
		$sql = "DELETE FROM sphonenumber WHERE sregno = '$student_regno'";
		mysqli_query($con, $sql);
		//echo "Deletion Successful";
		header('location:loginsuccess.php');

	}



 ?>