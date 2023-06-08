<?php
require '../Config/connect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Zian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="../dist/sweetalert2.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../dist/sweetalert2.js"></script>
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
                                            <form action="" method="POST">
                                                <h4 class="mb-4 pb-3">Enter Your New Password</h4>
                                                <div class="form-group">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" name="password" placeholder="New Password" required value="">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" name="submit" class="btn mt-4">Reset</button>
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
    </div>
    <?php
    if (isset($_POST["submit"])) {
        $edit = lupapw($_POST);
        if ($edit) {
    ?>
            <script>
                Swal.fire({
                    title: "Succes",
                    text: "Reset Password Succes",
                    icon: "success",
                    timer: 1000
                }).then((result) => {
                    location.href = "../index.php";
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: "Failed",
                    text: "Failed to Reset Password",
                    icon: "warning",
                    timer: 5000
                }).then((result) => {
                    location.href = "../index.php";
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>