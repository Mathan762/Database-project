<html>
<head>
<title>STUDENTREG FORM</title>
<link rel="stylesheet" href="regformstyle.css">
</head>
<br>
<br>
<br>

<body>
<div class="reg">
<form id="reg" action="add.php" method="post">
<label>Firstname</label><br>
<input type="text" name="fname" id="name" placeholder="Enter your Firstname" required><br><br>
<label>Lastname</label><br>
<input type="text" name="lname" id="name" placeholder="Enter your Lastname" required><br><br>
<label>Gender</label><br>
<input type="radio" id="ml" name="male">
<span id="male">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="ml" name="male">
<span id="male">Female</span>&nbsp;<br><br>
<label>Register No</label><br>
<input type="text" name="regno" id="name" placeholder="Enter your register number"required><br><br>
<label>Roll No</label><br>
<input type="text" name="rollno" id="name" placeholder="Enter your roll number"required><br><br>
<label>Father Name</label><br>
<input type="text" name="ffname" id="name" placeholder="Enter your father name"required><br><br>
<label>Father Occupation</label><br>
<input type="text" name="focc" id="name" placeholder="Enter your father occupation"required><br><br>
<label>Mother Name</label><br>
<input type="text" name="mname" id="name" placeholder="Enter your mother name"required><br><br>
<label>Mother Occupation</label><br>
<input type="text" name="mocc" id="name" placeholder="Enter your mother occupation"required><br><br>
<label>MobileNumber</label><br>
<select id="code">
<option>+91</option>
<option>+92</option>
<option>+93</option>
<option>+94</option>
<option>+95</option>
</select>
<input type="tel" name="mobnum" id="mnum" placeholder="Enter your Mobile Number"><br><br>
<label>SSLC%</label><br>
<input type="text" name="sslc" id="name" placeholder="Enter your SSLC percentage"required><br><br>
<label>HSC%</label><br>
<input type="text" name="hsc" id="name" placeholder="Enter your HSC percentage"required><br><br>
<input type="submit" name = "submit" id="sub" value="Submit">
</body>
</html>