<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: homepage.php");
					die;
				}
			}
		}

		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>

	<style type="text/css">
		
		@import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap');

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		body {
			background-color: #080710;
			color: red;

		}

		form {
			text-align: center;
			color: white;
			font-size: 1em;

		}

		#text {
			padding: 0.5em;
			width: 50%;
			font-size: 15px;
		}

		#button {
			padding: 1em;
			font-size: 1.2em;
			letter-spacing: 0.5em;
			font-family: 'Roboto', sans-serif;
			cursor: pointer;
		}

		#button-reset {
			margin-top: 1em;
			padding: 0.5em;
			font-size: 1em;
			letter-spacing: 0.2em;
			font-family: 'Roboto', sans-serif;
			cursor: pointer;
		}

		#box {
			max-width: 400px;

			background-color: rgba(255, 255, 255, 0.13);
			color: white;
			margin: auto;
			padding: 20px;
		}

		.form-text {
			color: white;
			font-size: 1.3em;
			letter-spacing: .2em;
			font-family: 'Roboto', sans-serif;
		}

		.signup-text,
		.login-text {
			font-family: 'Roboto', sans-serif;
			font-size: 40px;
			margin: 10px;
			color: white;
		}

		.a-signup {
			color: white;
			font-size: 20px;
			text-decoration: none;
		}
	</style>

	<span style="background: linear-gradient(to right, #f32170, #ff6b08, #cf23cf, #eedd44);
    		-webkit-text-fill-color: transparent;
    		background-clip: border-box;
    		-webkit-background-clip: text;
			font-family: 'Righteous', sans-serif;
			font-size: 4em;
			max-width: 500px;
			margin: auto;
			display:flex;
			justify-content:center;">
		<span style="margin-bottom: 100px;">NextDooR</span>
	</span>

	<div id="box">

		<form method="post">
			<div class="login-text">Login</div>

			<span class="form-text">username</span>
			<br>
			<input id="text" type="text" name="user_name" placeholder="enter username"><br><br>

			<span class="form-text">password</span>
			<br>
			<input id="text" type="password" name="password" placeholder="enter password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
			<input id="button-reset" type="reset" value="Reset"><br><br>

			<a class="a-signup" href="signup.php">Click to Signup</a><br><br>

		</form>
	</div>
</body>

</html>