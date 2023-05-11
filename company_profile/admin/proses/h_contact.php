<?php
session_start();

include '../../inc/koneksi.php';

// ========================================= DELETE DATA ============================================

if (isset($_GET['id'])) {
    $ambil_id = $_GET['id'];

    $query = "DELETE FROM h_contact WHERE id = '$ambil_id'";

    // validasi dan check eror
    $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
    if ($sql) {
        $_SESSION["sukses"] = 'Data Berhasil Dihapus';
        header('location:../contact.php');
    } else {
        $_SESSION["gagal"] = 'Data Gagal Dihapus';
        header('location:../contact.php');
    }
}
?>