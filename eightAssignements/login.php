<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		input[type="text"], input[type="email"], input[type="password"] {
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-bottom: 10px;
			font-size: 16px;
			width: 50%;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			width: 50%;
		}

		form {
			text-align: center;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Login Here..</h1>
	<form action="loginindex.php" method="post">
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required placeholder=" Your Mail Address"></br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required placeholder=" Password"></br>

		

		<input type="submit" value="Submit">
	</form>
</body>
</html>



<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Validation checks
    if(empty($email) || empty($password)) {
        echo "Please fill all the fields.";
    }
    else {
        echo "done";}}