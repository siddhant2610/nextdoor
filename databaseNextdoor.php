<?php

$con = mysqli_connect("localhost", "root", "", "nextdoor");

if ($con) {
    echo "connection success!" . mysqli_get_host_info($con);
} else {
    echo "connection failed." . mysqli_connect_errno();
}

?>