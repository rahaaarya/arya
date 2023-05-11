<?php
include('../inc/koneksi.php');

session_start();

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$time = date("d-m-Y");

if (isset($_POST['submit'])) {
    $query = "INSERT INTO h_contact VALUES ('','$firstName','$lastName','$email','+62$phone','$message','$time')";

    $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
    if ($sql) {
        $_SESSION["sukses"] = 'Data Berhasil Dikirim';
        header('location:../contact.php');
    } else {
        $_SESSION["gagal"] = 'Data Gagal Dikirim';
        header('location:../contact.php');
    }
}
