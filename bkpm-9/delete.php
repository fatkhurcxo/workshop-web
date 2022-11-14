<?php

include 'db-connect.php';

$id_mhs = $_GET['id_mhs'];

$sql = "DELETE FROM mahasiswa where id_mhs='$id_mhs'";
mysqli_query($dconn, $sql);

header("location:index.php");
