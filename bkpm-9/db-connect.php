<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_mahasiswa";


$dconn = mysqli_connect($host, $username, $password, $database);

if ($dconn) {
    echo "CONNECTED";
} else {
    echo "FAILED";
}
