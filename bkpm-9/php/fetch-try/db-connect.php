<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kaftapus";

$dconn = mysqli_connect($hostname, $username, $password, $database);
mysqli_select_db($dconn, $database);


// if ($dconn) {
//     echo "Server Terkoneksi";
// } else {
//     echo "Server Tidak Terkoneksi";
// }
