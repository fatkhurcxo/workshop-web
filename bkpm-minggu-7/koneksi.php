<?php 
    $konekdb = mysqli_connect("localhost", "root", "", "e41212120");

    # untuk cek koneksi
    if (mysqli_connect_error()) {
        echo "Koneksi ke Database Gagal : " . mysqli_connect_error();
    }
