<?php
$host           ="localhost";
$user           ="root";
$password       ="";
$db             ="companyprofile";

$koneksi        =mysqli_connect($host,$user,$password,$db);
if(!$koneksi){
    die("Gagal Terkoneksi");
}