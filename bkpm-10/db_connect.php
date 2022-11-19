<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "bkpm_10";

$conn = mysqli_connect($host, $username, $password, $database);


if ($conn->connect_error) {
    # code...
    die ("Conection Failed: " .$conn->connect_error);
}
