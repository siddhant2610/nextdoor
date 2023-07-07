<?php

include 'databaseNextdoor.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into login(username, password)values('$username', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('login success!')</script>";
        echo "<script>window.open('homepage.php','_self')</script>";
    } else {
        echo "error:" . mysqli_error($con);
        // echo "<script>window.open('login.php','_self')</script>";
    }

    mysqli_close($con);
}



?>

