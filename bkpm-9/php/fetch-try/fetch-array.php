<?php

$dconn = mysqli_connect("localhost", "root", "") or die("Gagal Terkoneksi");

mysqli_select_db($dconn, "db_kaftapus");
$hasil = mysqli_query($dconn, "select * from member_detail");

while ($row = mysqli_fetch_array($hasil)) {

    echo "NIM : " . $row["nim"];
    echo " | ID : "  . $row[1];
    echo " | Nama Mahasiswa : "  . $row["name"];
    echo " | Jenis Kelamin : "  . $row["gender"];
    echo " | Jurusan : "  . $row["study"];
    echo " | Alamat : "  . $row["address"];
    echo "<br>";
}
