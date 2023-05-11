<?php

session_start();
// Koneksi database
include '../../inc/koneksi.php';

$id = $_POST['id'];

function post_value($name)
{
    return (isset($_POST[$name]) && !empty($_POST[$name])) ? $_POST[$name] : '';
}

$judul = post_value('title');
$deskripsi = post_value('description');
$kategori = post_value('category');
$icon = post_value('icon');
$page = post_value('page');


// NGAMBIL DATA UNTUK DIKEMBALIKAN KE DALAM AJAX PADA FILE inc_footer.php
if (isset($id)) {

    $query = "SELECT * FROM ps_application WHERE id = '$id'";

    $sql = mysqli_query($koneksi, $query);
    $result = mysqli_fetch_array($sql);
    echo json_encode($result);
}

// ========================================= INPUT DATA ============================================

if (isset($_POST['input'])) {

    $query = "INSERT INTO ps_application VALUES ('','$icon','$judul','$deskripsi','$kategori')";

    // validasi dan check eror
    $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
    if ($sql) {
        $_SESSION["sukses"] = 'Data Berhasil Disimpan';
        header('location:../' . $kategori . '.php?p=' . $page);
    } else {
        $_SESSION["gagal"] = 'Data Gagal Disimpan';
        header('location:../' . $kategori . '.php?p=' . $page);
    }
}

// ========================================= UBAH DATA ============================================

if (isset($_POST['ubah'])) {

    $query = "UPDATE ps_application SET id = '$id', icon = '$icon', title = '$judul', description = '$deskripsi', category = '$kategori' WHERE id = '$id'";

    // validasi dan check eror
    $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
    if ($sql) {
        $_SESSION["sukses"] = 'Data Berhasil Disimpan';
        header('location:../' . $kategori . '.php?p=' . $page);
    } else {
        $_SESSION["gagal"] = 'Data Gagal Disimpan';
        header('location:../' . $kategori . '.php?p=' . $page);
    }
}

// ========================================= DELETE DATA ============================================

if (isset($_GET['id'])) {
    $ambil_id = $_GET['id'];
    $halaman = $_GET['h'];
    $page = $_GET['p'];

    $query = "DELETE FROM ps_application WHERE id = '$ambil_id'";

    // validasi dan check eror
    $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
    if ($sql) {
        $_SESSION["sukses"] = 'Data Berhasil Dihapus';
        header('location:../' . $halaman . '.php?p=' . $page);
    } else {
        $_SESSION["gagal"] = 'Data Gagal Dihapus';
        header('location:../' . $halaman . '.php?p=' . $page);
    }
}
