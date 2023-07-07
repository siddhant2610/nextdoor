<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

		.signup-text {
			font-family: 'Roboto', sans-serif;
			font-size: 40px;
			margin: 10px;
			color: white;
		}

		.a-login {
			color: white;
			font-size: 20px;
			text-decoration: none;
		}


		.social {
			/* border: 2px red solid; */
			margin-top: 30px;
			display: flex;
			font-size: 1.3em;

		}


		.social div {
			background: red;
			width: 150px;
			border-radius: 3px;
			padding: 15px 5px 15px 5px;
			background-color: rgba(255, 255, 255, 0.27);
			color: #eaf0fb;
			text-align: center;

		}

		.social div:hover {
			background-color: rgba(255, 255, 255, 0.47);
			color: black;
		}

		.social .fb {
			margin-left: 25px;
		}

		.social i {
			margin-right: 4px;
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
			<div class="signup-text">Signup</div>
			<span class="form-text">name</span>
			<br>
			<input id="text" type="text" name="name" placeholder="enter name"><br><br>

			<span class="form-text">email</span>
			<br>
			<input id="text" type="email" name="email" placeholder="enter email"><br><br>

			<span class="form-text">username</span>
			<br>
			<input id="text" type="text" name="user_name" placeholder="create userename"><br><br>

			<span class="form-text">password</span>
			<br>
			<input id="text" type="password" name="password" placeholder="create password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>
			<input id="button-reset" type="reset" value="Reset"><br><br>
			<br>

			<a class="a-login" href="login.php">Click to Login</a><br>
			<br>
			<div class="social">
				<div class="go"><i class="fab fa-google"></i></div>
				<div class="fb"><i class="fab fa-facebook"></i></div>
				<div class="fb"><i class="fab fa-github"></i></div>
			</div>

		</form>
	</div>
</body>

</html>