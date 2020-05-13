<?php
 
	include('dbcon.php');

	if (!mysqli_select_db($con, 'student database')) {
		echo "DB Selection not set";
	}

	$student_firstname = $_POST['fname'];
	$student_lastname = $_POST['lname'];
	$student_regno = $_POST['regno'];
	$student_rollno = $_POST['rollno'];
	$student_fathername = $_POST['ffname'];
	$student_fatherocc = $_POST['focc'];
	$student_mothername = $_POST['mname'];
	$student_motherocc = $_POST['mocc'];
	$student_10thperc = $_POST['sslc'];
	$student_12thperc = $_POST['hsc'];
	$student_phnumber = $_POST['mobnum'];

	if (isset($_POST['submit'])) {
		$sql = "INSERT INTO student(Sfname, Slname, Sregno, Srollno, Sffathername, Sfatheroccupation, Sfmothername, Smotheroccupation, S10perc, s12perc) VALUES ('$student_firstname', '$student_lastname', '$student_regno', '$student_rollno', '$student_fathername', '$student_fatherocc', '$student_mothername', '$student_motherocc', '$student_10thperc', '$student_12thperc')";
		mysqli_query($con, $sql);
		mysqli_query($con, "INSERT INTO sphonenumber(sregno, sphno1) VALUES ('$student_regno', '$student_phnumber')");
		echo "Insertion successful";
		header('location:loginsuccess.php');
		
		
	}
?>