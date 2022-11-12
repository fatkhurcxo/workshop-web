<?php

$dconn = mysqli_connect("localhost", "root", "") or die("Gagal Terkoneksi");

mysqli_select_db($dconn, "db_kaftapus");
$hasil = mysqli_query($dconn, "select * from member_detail");

while ($row = mysqli_fetch_row($hasil)) {


    echo "NIM : " . $row[0] . " ";
    echo "ID : " . $row[1] . " ";
    echo "NAMA : " . $row[2] . " ";
    echo "GENDER : " . $row[3] . " ";
    echo "STUDY : " . $row[4] . " ";
    echo "ADDRESS : " . $row[5] . " ";
    echo "<br>";
}
