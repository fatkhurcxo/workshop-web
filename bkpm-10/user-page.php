<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img-assets/Logo POLIJE (Warna) 1.png">
    <title>Account</title>
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

    <section>
        <div class="container mt-5">
            <h3 style="text-align: center;">Selamat Datang di Sistem Informasi Data PSDKU Sidoarjo</h3>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="w-25">
                <div class="">
                    <label for="form-username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="form-username">
                </div>
                <div class="mt-2">
                    <label for="form-username" class="form-label">Password</label>
                    <input type="password" class="form-control" id="form-username">
                </div>
                <button type="button"></button>
            </div>
        </div>
    </section>



    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>