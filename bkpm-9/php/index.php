<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table table-bordered table-hover mt-1 table-sm container-sm mt-5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'fetch-try/db-connect.php';

            $sql = "select * from member_detail";
            $number = 1;
            $show = mysqli_query($dconn, $sql);
            //   $row = mysqli_fetch_array($show);

            foreach ($show as $row) {
                $gender = $row['gender'] == 'p' ? 'Perempuan' : 'Laki-laki';
                echo "<tr>
            
            <td>" . $row['id_mhs'] . "</td>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['gender'] . "</td>
            <td>" . $row['study'] . "</td>
            <td>" . $row['address'] . "</td>
            <td><a style='text-decoration: none;' href=''>Edit</a> | <a style='text-decoration: none;' href='delete.php?id_mhs=$row[id_mhs]'>Delete</a></td>
            </tr>";
            }
            // endforeach;
            ?>
        </tbody>
    </table>
    <div class="container-sm d-grid">
        <a class="d-grid" href="form-input.php"><button class="btn btn-outline-success mt-3">Masukkan Data</button></a>
    </div>
</body>

</html>