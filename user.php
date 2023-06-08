<?php
require "../config/connect.php";

$ukk_buku = query("SELECT * FROM ukk_buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
    <!-- navbar -->
    <link rel="stylesheet" href="./navbar/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="./navbar/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./navbar/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./navbar/css/style.css" />
    <!-- table -->
    <link rel="stylesheet" href="./Table/css/style.css" />
    <!-- sweetalert -->
    <link rel="stylesheet" href="../dist/sweetalert2.min.css" />
    <title>User</title>
</head>

<body>

    <body>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo">
                            <a onclick="logout()">Siswa <span class="text-primary"> .</span> </a>
                        </h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a onclick="logout()" class="nav-link">Home</a></li>
                                <li class="has-children">
                                    <a href="#about-section" class="nav-link">More</a>
                                    <ul class="dropdown">
                                        <li><a href="#team-section" class="nav-link">Team</a></li>
                                        <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                        <li><a href="./pinjam.php" class="nav-link">Pinjam Buku</a></li>
                                        <li> <a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                        <li><a onclick="logout()" class="nav-link">Log Out</a></li>
                                        <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-instagram"></span></a> </li>
                                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px">
                        <a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="hero"></div>
        <!-- end navbar -->
        <!-- STart table -->
        <div class="content">
            <div class="container">
                <h2 class="mb-5">Selamat Datang Di Perpustakaan Telkom</h2>
                <h2>Data Buku yang sedang dipinjam</h2>

                <div class="table-responsive">

                    <table class="table custom-table">
                        <thead>
                            <tr>

                                <th scope="col">id</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">NO. ISBN</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ukk_buku as $buku) : ?>
                                <tr scope="row">
                                    <td><?= $buku["id"]; ?></td>
                                    <td><?= $buku["kategori"]; ?></td>
                                    <td><?= $buku["no_isbn"]; ?></td>
                                    <td><?= $buku["judul_buku"]; ?></td>
                                    <td><?= $buku["pengarang"]; ?></td>
                                    <td><?= $buku["tahun_terbit"]; ?></td>
                                    <td><?= $buku["penerbit"]; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <script src="./navbar/js/jquery-3.3.1.min.js"></script>
        <script src="./navbar/js/popper.min.js"></script>
        <script src="./navbar/js/bootstrap.min.js"></script>
        <script src="./navbar/js/jquery.sticky.js"></script>
        <script src="./navbar/js/main.js"></script>
        <!-- table -->
        <script src="./Table/js/main.js"></script>
        <!-- sweetalert -->
        <script src="../dist/sweetalert2.min.js"></script>
        <script>
            //logout
            function logout() {
                event.preventDefault(); // prevent the default anchor behavior
                Swal.fire({
                    icon: 'warning',
                    type: "warning",
                    title: "Log Out?",
                    showCancelButton: true,
                    confirmButtonText: "Log Out",
                }).then((result) => {
                    location.href = "../Controller/logout.php";
                });
            }
        </script>
    </body>
</body>

</html>