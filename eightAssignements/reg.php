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
	<h1>Registration Form</h1>
	<form action="index.php" method="post">
		<label for="username">First name:</label>
		<input type="text" id="username" name="fname" required placeholder=" Your First name"></br>

		<label for="username">Last name:</label>
		<input type="text" id="username" name="lname" required placeholder=" Your Last name"></br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required placeholder=" Your Mail Address"></br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required placeholder=" Password"></br>

		<label for="password">Confirm Password:</label>
		<input type="password" id="password" name="confirm_password" required placeholder=" Password"></br>

		<input type="submit" value="Register">
	</form>
</body>
</html>
