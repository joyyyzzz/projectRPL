<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Waroeng Warem - Aplikasi Reservasi Meja Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
    <!--HEADER-->
    <?php include "header.php"; ?>
    <!--END HEADER-->
    <div class="container-lg">
        <div class="row">
            <!--SIDEBAR-->
            <?php include "sidebar.php"; ?>
            <!--end sidebar-->

            <!--CONTENT-->
                <?php
                if(isset($_GET['x']) && $_GET['x'] == 'home'){
                    include "home.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'reservasi'){
                    include "reservasi.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'meja'){
                    include "meja.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'user'){
                    include "user.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                    include "login.php";
                }else{
                    include "home.php";
                }
                ?>
            <!--END CONTENT-->
        </div>
        <!--Footer-->
        <div class="fixed-bottom text-center mb-2">
            Created by Kelompok 7 RPL
        </div>
        <!--END FOOTER-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>