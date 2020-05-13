<html>
<head>
<title>REGSITRATION FORM</title>
<link rel="stylesheet" href="regformstyle.css">
</head>
<br>
<br>
<br>

<body>
<div class="reg">
<form id="reg" action="register.php" method="post">
<label>Firstname</label><br>
<input type="text" name="fname" id="name" placeholder="Enter your Firstname" required><br><br>
<label>Lastname</label><br>
<input type="text" name="lname" id="name" placeholder="Enter your Lastname" required><br><br>
<label>Email</label><br>
<input type="email" name="email" id="name" placeholder="Enter your Emailid"required><br><br>
<label>MobileNumber</label><br>
<select id="code">
<option>+91</option>
<option>+92</option>
<option>+93</option>
<option>+94</option>
<option>+95</option>
</select>
<input type="tel" name="MNum" id="mnum" placeholder="Enter your Mobile Number"><br><br>
<label>Deparment</label><br>
<select class="option" name="Department" id="depart"><br>
<option disabled="disabled" selected="selected">-choose department-</option>
<option>EEE</option>
<option>ECE</option>
<option>CSE</option>
<option>dep4</option>
<option>dep5</option>
</select><br><br>
<label>Gender</label><br>
<input type="radio" id="ml" name="male">
<span id="male">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="ml" name="male" value="male">
<span id="male">Female</span>&nbsp;<br><br>
<label>Username</label><br>
<input type="text" name="uname" id="name" placeholder="Enter Username" required><br><br>
<label>Password</label><br>
<input type="password" name="pwd" id="name" placeholder="Enter Password" required><br><br>
<label>Confirm Password</label><br>
<input type="password" name="pwd" id="name" placeholder="Enter confirmation password" required><br><br>
<input type="submit" id="sub" value="Register">
</body>
</html>