<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php

        include 'db-connect.php';
        $mahasiswa = mysqli_query($dconn, "select * from mahasiswa");
        $number = 1;

        foreach ($mahasiswa as $row) {
            # code...
            $jenis_kelamin = $row['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki-laki';
            echo "<tr>
            <td>$number</td>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['jenis_kelamin'] . "</td>
            <td>" . $row['jurusan'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td><a style='text-decoration: none; color: green;' href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a> | <a style='text-decoration: none; color: red;' href='delete.php?id_mhs=$row[id_mhs]'>Delete</a></td>
            </tr>";
            $number++;
        }
        ?>
    </table>
    <div style="margin-top: 10px;">
        <a href="form-insert.php"><button>Tambah Data</button></a>
    </div>
</body>

</html>