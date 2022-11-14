<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <form method="POST" action="tambah-data.php">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>
                    Jurusan
                </td>
                <td>
                    <select name="jurusan" id="">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Agribisnis">Manajemen Agribisnis</option>
                        <option value="Kaftapus Turu">Kaftapus Turu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">Tambah Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>