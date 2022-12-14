<?php

include 'db_connect.php';

$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$result = $conn->query("SELECT * FROM data_mahasiswa LIMIT $start, $limit");
$data_mahasiswa = $result->fetch_all(MYSQLI_ASSOC);

$result1 = $conn->query("SELECT count(id_mhs) AS id FROM data_mahasiswa");
$mhsCount = $result1->fetch_all(MYSQLI_ASSOC);
$total = $mhsCount[0]['id'];
$pages = ceil($total / $limit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="img-assets/Logo POLIJE (Warna) 1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Cutive+Mono&family=Lexend+Deca&family=Poppins&family=Unlock&family=Unna&family=Vidaloka&display=swap');

        * {
            font-family: Lexend Deca;
        }

        .nav-item {
            padding-left: 10pt;
        }

        .nav-logo {
            margin-left: 5%;
            font-weight: 700;
        }

        .navigasi {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 20px;
        }

        .navigasi a:hover {
            color: #FF5786;
        }

        .navigasi a {
            color: black;
        }

        .navbar-toggler {
            justify-self: end;
        }

        #title-main {
            text-align: center;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
        }

        .dropdown-menu {
            background-color: white;
        }

        .dropdown-menu a:hover {
            background-color: #FF7DAA;
            color: white;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="nav-logo container-lg d-flex justify-content-between">
                <div class="">
                    <img src=" img-assets/Logo POLIJE (Warna) 1.png" alt="">
                    <a class="navbar-brand container-sm d-none d-sm-inline" href="">Informatics Engineering</a>
                </div>
                <div class="">
                    <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                        <span><a class="nav-link container-sm" href=""><img src="img-assets/user 1.png" alt=""></a></span>
                    </button>
                </div>

            </div>

            <div class="navigasi collapse navbar-collapse container-lg pe-5" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="">Mahasiswa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="datamhs.php">Data Seluruh Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="">Data Mahasiswa Berprestasi</a></li>
                            <li><a class="dropdown-item" href="">Data Organisasi Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">StartUp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Informasi</a>
                    </li>
                </ul>
            </div>
            <div style="margin-right: 5%;margin-right: 5%;" class="button-akun d-none d-lg-block">
                <a class="nav-link container-sm" href="user-page.php"><img src="img-assets/user 1.png" alt=""></a>
            </div>
        </div>
    </nav>

    <section class="main-content">
        <div class="container-fluid">
            <div class="d-flex container-sm container-md mt-5">
                <h4>Data Mahasiswa Politeknik Negeri Jember PSDKU Sidoarjo</h4>
            </div>
            <div class="container-sm container-md mt-4">
                <form class="d-flex" role="search" action="">
                    <input type="search" class="form-control" placeholder="Cari data mahasiswa" aria-label="Search">
                </form>
            </div>
            <div class="table-responsive-md container mt-2">
                <table class="table table-bordered table-hover">
                    <caption>Total Mahasiswa:</caption>
                    <thead style="background-color: #FF5786; color: white;">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($data_mahasiswa as $data_mhs) : ?>
                            <tr>
                                <td style="cursor: pointer;">
                                    <div class="row row-cols-2">
                                        <div class="col-3">
                                            <img style="width: 50px; height: 50px;" class="rounded-circle shadow-4" src="img-assets/profile.png" alt="">
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="name" style="font-weight: bold;"><?= $data_mhs['name']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="semester"><?= $data_mhs['semester']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?= $data_mhs['jenis_kelamin']; ?>
                                </td>
                                <td>
                                    <?= $data_mhs['alamat']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $pages; $i++) : ?>
                            <li class="page-item"><a class="page-link" href="datamhs.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- BOOTSTRAP 5.2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>