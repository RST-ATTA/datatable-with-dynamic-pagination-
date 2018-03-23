<?php
/* Database connection start */
$servername = "localhost";
$username = "DB-USERNAME";
$password = "DB-PASSWORD";
$dbname = "DB-NAME";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Some Error Occured: %s\n", mysqli_connect_error());
    exit();
}

?>
