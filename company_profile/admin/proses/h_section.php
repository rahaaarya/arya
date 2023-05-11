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
$sub_judul = post_value('subTitle');
$deskripsi = post_value('description');
$kategori = post_value('category');
$currImg = post_value('currImg');
$page = $_POST['page'];

// validasi upload gambar

if (isset($_FILES['image'])) {
    $rand = rand();
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ekstensi =  array('png', 'jpg', 'jpeg', 'webp');
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
}

// NGAMBIL DATA UNTUK DIKEMBALIKAN KE DALAM AJAX PADA FILE inc_footer.php
if (isset($id)) {

    $query = "SELECT * FROM h_section WHERE id = '$id'";

    $sql = mysqli_query($koneksi, $query);
    $result = mysqli_fetch_array($sql);
    echo json_encode($result);
}

// ========================================= UBAH DATA ============================================

if (isset($_POST['ubah'])) {
    if ($ukuran < 1044070) {
        if ($_FILES['image']['error'] === 4) {
            $xx = $currImg;
        } else {
            if (!in_array($ext, $ekstensi)) {
                $_SESSION["gagal"] = 'Ekstensi File Salah';
                header("location:../home.php?p=section3");
            } else {
                $xx = $rand . '_' . $filename;
                move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/uploaded/' . $rand . '_' . $filename);
            }
        }

        $query = "UPDATE h_section SET id = '$id', img = '$xx', title = '$judul', sub_title = '$sub_judul', description = '$deskripsi', category = '$kategori' WHERE id = '$id'";

        // validasi dan check eror
        $sql = mysqli_query($koneksi, $query) or die("Query Error :" . mysqli_error($koneksi));
        if ($sql) {
            $_SESSION["sukses"] = 'Data Berhasil Disimpan';
            header('location:../' . $kategori . '.php?p=' . $page);
        } else {
            $_SESSION["gagal"] = 'Data Gagal Disimpan';
            header('location:../' . $kategori . '.php?p=' . $page);
        }
    } else {
        $_SESSION["gagal"] = 'Ukuran File terlalu Besar';
        header('location:../' . $kategori . '.php?p=' . $page);
    }
}
