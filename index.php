<!doctype html>
<html lang="en">

<head>
    <title>Zian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="./dist/sweetalert2.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./dist/sweetalert2.js"></script>
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Register</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="./controller/loginValidation.php" method="POST">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-style" name="username" placeholder="Username" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" name="password" placeholder="Password" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">Login</button>
                                                <p class="mb-0 mt-4 text-center"><a href="./controller/ResetPW.php" class="link">Forgot your password?</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Register -->

                                <div class="card-back">
                                    <div class="center-wrap">
                                        <form action="" method="POST">
                                            <div class="section text-center">
                                                <h4 class="mb-3 pb-3">Sign Up</h4>
                                                <?php
                                                require './Config/connect.php';

                                                error_reporting(0);

                                                session_start();

                                                if (isset($_SESSION['username'])) {
                                                    header("Location: index.php");
                                                    exit; // Added exit to prevent further execution
                                                }

                                                if (isset($_POST['submit'])) {
                                                    $username = $_POST['username'];
                                                    $password = $_POST['password'];
                                                    $level = $_POST['level'];

                                                    if ($password) {

                                                        $sql = "SELECT * FROM `user` WHERE username='$username'";
                                                        $result = mysqli_query($conn, $sql);
                                                        if (!$result->num_rows > 0) {
                                                            $sql = "INSERT INTO `user` (username,  password, level)
                                                                    VALUES ('$username', '$password', '$level')";
                                                            $result = mysqli_query($conn, $sql);
                                                            if ($result) { ?>
                                                                <script>
                                                                    Swal.fire({
                                                                        title: "Berhasil",
                                                                        text: "Berhasil Registrasi",
                                                                        icon: "success",
                                                                        timer: 2000
                                                                    }).then((result) => {
                                                                        location.href = "index.php";
                                                                    });
                                                                </script>;
                                                            <?php
                                                                $username = "";
                                                                $email = "";
                                                                $level = "";
                                                                $password = "";
                                                            } else { ?>
                                                                <script>
                                                                    Swal.fire({
                                                                        title: "Gagal",
                                                                        text: "Gagal Daftar",
                                                                        icon: "warning",
                                                                        timer: 2000
                                                                    }).then((result) => {
                                                                        location.href = "index.php";
                                                                    });
                                                                </script>
                                                            <?php
                                                            }
                                                        } else { ?>
                                                            <script>
                                                                Swal.fire({
                                                                    title: "Gagal",
                                                                    text: "Gagal Email Sudah Terdaftar",
                                                                    icon: "warning",
                                                                    timer: 2000
                                                                }).then((result) => {
                                                                    location.href = "index.php";
                                                                });
                                                            </script>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>

                                                <div class="form-group">
                                                    <input type="text" class="form-style" name="username" placeholder="Username" value="<?php echo isset($username) ? $username : ''; ?>" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" name="password" placeholder="Password" value="<?php echo isset($password) ? $password : ''; ?>" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" class="form-style" name="level" placeholder="Level" value="<?php echo isset($level) ? $level : ''; ?>" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" name="submit" class="btn mt-4">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>