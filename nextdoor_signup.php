<?php

include 'databaseNextdoor.php';

// MySQL database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'nextdoor';

// Create a MySQL database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Create the user table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
$mysqli->query($createTableQuery);


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_1 = "insert into signup(name, email, username, password)values('$name', '$email', '$username', '$password')";


    function signup()
    {
        global $mysqli;
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the username already exists in the database
        $checkQuery = "SELECT * FROM users WHERE username='$username'";
        $result = $mysqli->query($checkQuery);

        if ($result->num_rows > 0) {
            echo "Username already exists. Please try a different username.";
            return;
        }

        // Insert the new user into the database

        $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $mysqli->query($insertQuery);

        echo "Sign up successful!";
    }

    if ($_POST['submit'] === 'signup') {
        signup();
    }

    if (mysqli_query($con, $sql_1)) {
        echo "<script>alert('welcome to Nextdoor!')</script>";
        echo "<script>window.open('homepage.php','_self')</script>";
    } else {
        echo "error:" . mysqli_error($con);
    }

    $_SESSION['username'] = $username;

    mysqli_close($con);
}



