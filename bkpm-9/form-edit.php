<?php

include 'db-connect.php';

$id_mhs = $_GET['id_mhs'];
$mahasiswa = mysqli_query($dconn, "select * from mahasiswa where id_mhs='$id_mhs'");
$row = mysqli_fetch_array($mahasiswa);

$jurusan = array('Teknik Informatika', 'Manajemen Agribisnis', 'Kaftapus Turu');

function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form method="POST" action="ubah-data.php">
        <input type="hidden" value="<?php echo $row['id_mhs']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>>Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?> id="">Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan <?php echo $row['jurusan']; ?></td>
                <td>
                    <select name="jurusan" id="">
                        <?php
                        foreach ($jurusan as $j) {
                            # code...
                            echo "<option value='$j'";
                            echo $row['jurusan'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">Ubah Data</button><a href="index.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>

</html>