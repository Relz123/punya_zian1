<?php
require '../Config/connect.php';
?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Page/Table/css/style.css" />
    <link rel="stylesheet" href="../dist//sweetalert2.css">
    <script src="../dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../Page/Table/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../Page/Table/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Page/Table/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Page/Table/css/style.css">
    <link rel="stylesheet" href="../css/tamdit.css">
    <title>Edit</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <h2 class="mb-5">Meminjam Buku</h2>
            <h2>Ketentuan peminjaman buku</h2>
            <p style="color:black">- maksimal meminjam hanya 7 Hari</p>
            <p style="color:black">- jika melebihi 7 hari maka akan dikenakan denda sebesar Rp. 5000/hari</p>

            <div class="table-responsive">

                <table class="table custom-table">
                    <form action="" method="post">
                        <thead>
                            <tr>
                                <th scope="col">Kategori</th>
                                <th scope="col">NO. ISBN</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <input type="text" name="id" id="id" hidden>
                                <td><input type="text" name="kategori" id="kategori" required></td>
                                <td><input type="text" name="no_isbn" id="no_isbn" required></td>
                                <td><input type="text" name="judul_buku" id="judul_buku" required></td>
                                <td><input type="text" name="pengarang" id="pengarang" required></td>
                                <td><input type="text" name="tahun_terbit" id="tahun_terbit" required></td>
                                <td><input type="text" name="penerbit" id="penerbit" required></td>
                            </tr>
                            <tr>
                                <td colspan="6" align="center"><button type="submit" name="submit" class="more" style="font-size : 25px">Pinjam</button></td>
                            </tr>
                        </tbody>
                    </form>
                </table>
                <form action="../Page/user.php" align="center">
                    <button type="submit" class="more">Kembali ke Data buku</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["submit"])) {

        $q = pinjam($_POST);
        if ($q) {
    ?>
            <script>
                Swal.fire({
                    title: "Sukses",
                    text: "Sukses Meminjam Buku!",
                    text: "Silahkan Datang ke Meja Petugas Perpustakaan untuk mengambil buku",
                    icon: "success",
                    timer: 2000
                }).then((result) => {
                    location.href = "../Page/user.php";
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: "Gagal",
                    text: "Gagal Meminjam Buku!",
                    text: "Silahkkan Hubungi Petugas Perpustakaan",
                    icon: "warning",
                    timer: 2000
                }).then((result) => {
                    location.href = "../Page/user.php";
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>