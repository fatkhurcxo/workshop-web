<?php

include 'fetch-try/db-connect.php';

$id_mhs = $_GET['id_mhs'];
mysqli_query($dconn, "delete from member_detail where id_mhs = $id_mhs");
header("location:index.php");
