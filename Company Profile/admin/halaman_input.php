<?php include("inc_header.php") ?>
<?php
$gambar      = "";
$isi        = "";
$judul    = "";
$error      = "";
$sukses     = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from halaman where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $gambar  = $r1['gambar$gambar'];
    $isi        = $r1['isi'];
    $judul    = $r1['judul'];

    if($isi == ''){
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $gambar      = $_POST['gambar$gambar'];
    $isi        = $_POST['isi'];
    $judul    = $_POST['judul'];

    if ($gambar == '' or $isi == '') {
        $error     = "Silakan masukkan semua data yakni adalah data isi dan gambar$gambar.";
    }

    if (empty($error)) {
        if($id != ""){
            $sql1   = "update halaman set gambar$gambar = '$gambar',judul='$judul',isi='$isi',where id = '$id'";
        }else{
            $sql1       = "insert into halaman(gambar$gambar,judul,isi) values ('$gambar','$judul','$isi')";
        }
        
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukkan data";
        } else {
            $error      = "Gagal cuy masukkan data";
        }
    }
}


?>
<h1>Halaman Admin Update Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali ke halaman admin</a>
</div>
<?php
if ($error) {
?>
<div class="alert alert-danger" role="alert">
    <?php echo $error ?>
</div>
<?php
}
?>
<?php
if ($sukses) {
?>
<div class="alert alert-primary" role="alert">
    <?php echo $sukses ?>
</div>
<?php
}
?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="gambar$gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="gambar" value="<?php echo $gambar ?>" name="gambar">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
        <div class="col-sm-10">
            <textarea name="isi" class="form-control"><?php echo $isi ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Update Data" class="btn btn-primary" />
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>