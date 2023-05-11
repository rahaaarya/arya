<?php

session_start();
// Koneksi database
include '../../inc/koneksi.php';


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $page = $_POST['page'];

    $query = "UPDATE h_hero SET id = '$id',title = '$judul', description = '$deskripsi',category = '$kategori' WHERE id = '$id'";

    // validasi dan check eror
    $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
    if ($sql) {
        $_SESSION["sukses"] = 'Data Berhasil Disimpan';
        header("location:../" . $kategori . ".php" . $page);
    } else {
        $_SESSION["gagal"] = 'Data Gagal Disimpan';
        header("location:../" . $kategori . ".php" . $page);
    }
} else {
    $_SESSION["gagal"] = 'Data Gagal Disimpan';
    header("location:../" . $kategori . ".php" . $page);
}
