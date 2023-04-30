<?php

// Koneksi database
include '../../../inc/koneksi.php';

// mengambil data yang akan diimputkan
// $id = $_POST['id'];
// $judul = $_POST['judul'];
// $deskripsi = $_POST['description'];
// $kategori = $_POST['kategori'];


// menambahkan data kedalam databases dengan query insert
// mysqli_query($koneksi, "INSERT INTO hal_hero VALUES('', '$id', '$judul', '$deskripsi', '$kategori')");

// setelah di inputkan, maka halaman beralih ke detail.php
header("location:../../home.php?p=section1+m=berhasil");
