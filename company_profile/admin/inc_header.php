<?php
include("../inc/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Company Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/admin-style.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/cfb1150b77.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: login.php');
        exit;
    }

    $id_admin = $_SESSION['username'];
    $data_admin = mysqli_query($koneksi, "SELECT * from staff_admin where username='$id_admin'");
    ?>
    <header>
        <div class="sidebar bg-dark">
            <div class=" border-bottom border-white">
                <h2 class="text-white text-center my-3">DASHBOARD</h2>
            </div>
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item border-bottom border-light mt-3">
                        <a class="nav-link text-white" href="index.php">INDEX</a>
                    </li>
                </ul>
            </div>
            <div class="border-top border-white mt-4">
                <h5 class="text-white text-center mt-3">EDIT FORM</h5>
            </div>
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item border-bottom border-white">
                        <a class="nav-link text-white" href="home.php?p=section1">Home</a>
                    </li>
                    <li class="nav-item border-bottom border-white">
                        <a class="nav-link text-white" href="about.php?p=section1">About Us</a>
                    </li>
                    <li class="nav-item border-bottom border-white">
                        <a class="nav-link text-white dropdown-toggle" role="button" data-bs-toggle="collapse" data-bs-target="#demo">Product & Service </a>
                    </li>
                    <div id="demo" class="collapse">
                        <div class="container-fluid">
                            <li><a class="nav-link text-white border-bottom border-white" href="product.php?p=section1">E-Goverment</a></li>
                            <li><a class="nav-link text-white border-bottom border-white" href="business.php?p=section1">E-Business</a></li>
                        </div>
                    </div>
                    <li class="nav-item border-bottom border-white">
                        <a class="nav-link text-white" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item w-100 border-top border-end border-white position-absolute bottom-0 end-0">
                        <a id="user_logout" class="nav-link text-white text-center" href="proses/logout.php">LOG OUT</a>
                    </li>
                </ul>
            </div>
    </header>