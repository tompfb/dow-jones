<?php
// $servername = "localhost";
// $username = "u6tmuonqdz3n5";
// $password = "xn--82cxobb3c8ad5ac3f7c7gxd4b.net";
// $database = "dbnocjlnnpbps8";

$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}

