<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../../inc/koneksi.php';

// menangkap data yang dikirim dari form
$uname = $_POST['username'];
$pw = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM staff_admin WHERE username='$uname' AND password='$pw'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $uname;
    $_SESSION['status'] = "login";
    header("location: ../index.php");
} else {
    header("location: ../login.php?pesan=gagal");
}
