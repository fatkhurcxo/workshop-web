<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img-assets/Logo POLIJE (Warna) 1.png">
    <title>PSDKU Sidoarjo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- STYLE HALAMAN -->
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

        .main-content {
            box-sizing: border-box;
        }

        #selamatDatang {
            font-style: normal;
            font-weight: 700;
            font-size: 4vh;
            line-height: 50px;
            background: linear-gradient(90.99deg, #BBFFFB 2.13%, #B9D5FD 42.4%, #FFABE2 86.27%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }

        #apkWeb {
            font-style: normal;
            font-weight: 700;
            font-size: 4vh;
            line-height: 50px;
            background: linear-gradient(90.99deg, #BBFFFB 2.13%, #B9D5FD 42.4%, #FFABE2 86.27%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }

        @media screen and (max-width: 1200px) {
            .arrow-right img {
                width: 50px;
                height: 50px;
            }

            .arrow-left img {
                width: 50px;
                height: 50px;
            }
        }

        .potoharis {
            background-image: url("img-assets/user 1.png");
            background-size: cover;
        }

        .circle-2 {
            left: 40px;
            top: 1980px;
        }

        .circle-3 {
            left: 40px;
            top: 1950px;
        }

        .col-auto h3 {
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.02em;
            color: white;
            padding: 5px;
            padding-top: 10px;
            text-align: center;
        }

        .col-auto {
            margin-top: 2%;
        }
    </style>

    <!-- NAVIGASI -->
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
                        <a class="nav-link" href="">Beranda</a>
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
            <h1 class="mt-5" id="title-main">Politeknik Negeri Jember</h1>
            <div class="d-flex container-sm justify-content-center">
                <img src="img-assets/kampus-4.png" alt="">
                <!-- <p style="text-align: center;">
                    <span style="font-style: normal; font-weight: 700; font-size: 25px; line-height: 31px; text-shadow: 2px 2px white;" id="kampus">Kampus</span>
                    <span style="font-style: normal; font-weight: 700; font-size: 150px; line-height: 188px;" id="kampus-angka">4</span>
                </p> -->
            </div>
            <div style="background-color: #FF5786; margin-top: -80px;" class="container-md container-lg container-sm rounded">
                <p style="text-align: center; padding-top: 70px; padding-bottom: 50px;">
                    <span style="color: white; font-style: normal; font-weight: 400; font-size: 20px; line-height: 25px;">Program Studi Diluar Kampus Utama</span>
                    <br><br>
                    <span style="color: white; font-style: normal; font-weight: 500; font-size: 24px; line-height: 30px;">Kabupaten Sidoarjo</span>
                    <br>
                    <br>
                    <br>
                    <span id="selamatDatang">Selamat Datang</span>
                    <br><br>
                    <span id="apkWeb">Sistem Informasi Data PSDKU Sidoarjo</span>
                </p>
            </div>
            <div class="2-card d-flex container-lg container-md container-sm mt-3 gap-3">
                <div class="bg-info rounded p-3">
                    <h4 style="font-style: normal; font-weight: 600; font-size: 24px; line-height: 30px;">Kampus Santuy.</h4>
                    <br>
                    <p style="font-style: normal; font-weight: 300; font-size: 20px; line-height: 130%;">
                        Kampus 4 PSDKU Sidoarjo tetap menjadi kampus santuy
                        dikala gempuran kampus merdeka. Kegiatan keseharian kampus hanya perkuliahan seperti biasa serta ditambah dengan mahasiswa-mahasiswa santuy perihal pengerjaan tugas. Apakah benar pantas kampus ini disebut kampus santuy?
                    </p>
                </div>
                <div class="bg-info rounded p-3">
                    <h4 style="font-style: normal; font-weight: 600; font-size: 24px; line-height: 30px;">Kampus Istimewa.</h4>
                    <br>
                    <p style="font-style: normal; font-weight: 300; font-size: 20px; line-height: 130%;">
                        Kampus 4 ini juga dinobatkan menjadi kampus istimewa di wilayah Kabupaten Sidoarjo. Kampus ini mendapat julukan kampus istimewa dikarenakan kampus 4 ini tidak banyak acara. Kampus ini cukup muak dengan banyak kata-kata dari salah seorang yang katanya lulusan S3.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content-2">
        <div class="container-sm container-md container-lg">
            <div class="mt-4">
                <h3 style="font-style: normal; font-weight: 600; font-size: 2vw; line-height: 40px; padding-left: 10%;">Eitsss, tapi jangan salah paham ya...</h3>
                <br>
                <p style="text-align: end; font-style: normal; font-weight: 400; font-size: 1.5vw; line-height: 30px; padding-right: 10%;"><span>Kampus ini juga banyak meraih prestasi lohhh</span></p>
            </div>
            <div class="contianer-sm container-md d-flex justify-content-between align-items-center">
                <div class="arrow-right">
                    <img src="img-assets/arrow-right 1.png" alt="">
                </div>
                <div id="carousel-prestasi" class="carousel slide mt-3" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-prestasi" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide-1"></button>
                        <button type="button" data-bs-target="#carousel-prestasi" data-bs-slide-to="1" aria-label="Slide-2"></button>
                        <button type="button" data-bs-target="#carousel-prestasi" data-bs-slide-to="2" aria-label="Slide-3"></button>
                    </div>
                    <div class="flex-grow-1 container-sm container-md carousel-inner rounded" style="">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img-assets/7813.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img-assets/8601.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img-assets/teamwork_05.jpg" class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="arrow-left">
                    <img src="img-assets/arrow-left 1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="main-content-3">
        <div class="container-fluid">
            <div class="mt-5">
                <h2 style="text-align: center;"><span style="font-style: normal; font-weight: 600; font-size: 1.8vw; line-height: 40px;">Pesan penting dari Bapak Haris Asysyauqi, S.Si, MT</span></h2>
            </div>
            <div class="row mt-5" style="box-sizing: border-box;">
                <div class="avatar d-flex justify-content-center align-items-end col-4">
                    <div style=" width: 100px;height: 100px; border-radius: 50%;" class="potoharis">
                        <!-- potonya haris  -->
                    </div>
                </div>
                <div class="quotes col-8">
                    <div style="background-color: #E47AC0; border-radius: 20px 0px 0px 20px;">
                        <p style="padding: 100px;">
                            <span style="font-style: normal; font-weight: 600; font-size: 2vh; line-height: 130%; letter-spacing: 0.02em;">
                                “If i had to put my finger on the one aspect of Kaftapus College that excites me most, it is the all-pervading culture of ambition and aspiration, an atmosphere which encourages every pupil, teacher and parent to believe that anything is possible.”
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid bg-dark mt-5" style="padding: 2% 5%;">
            <div class="row">
                <div class="col" style="color: white;">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <h1 style="font-style: normal; font-weight: 600; font-size: 32px; line-height: 130%; letter-spacing: 0.02em;">Informatics<br>Engineering</h1>
                            <br><br>
                            <p><span class="copyright" style="font-style: normal; font-weight: 300; font-size: 12px; line-height: 130%; letter-spacing: 0.02em;">Copyright © Kaftapus Software Development.<br>All rights reserved.
                                </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md container-md container-lg container-sm">
                    <div class="row justify-content-center">
                        <div class="col-auto" style="border-radius: 20px 0px 0px 0px; background-color: #FF5786;">
                            <h3>Sedikit Berpikir</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto ms-5" style="background-color: #709FDC;">
                            <h3>Belajar Santuy</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto ms-5" style="border-radius: 0px 0px 20px 0px; background-color: #E47AC0;">
                            <h3>Masa Depan Cerah</h3>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </footer>


    <!-- BOOTSTRAP 5.2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>