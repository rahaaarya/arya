<?php
include("header.php");
include("inc/koneksi.php");

$data = mysqli_query($koneksi, "SELECT * from h_hero WHERE category = 'product'");
$data2 = mysqli_query($koneksi, "SELECT * from ps_application WHERE category = 'product'");

$data = mysqli_fetch_array($data);
?>
<!-- Hero Section -->
<section id="hero" class="overflow-hidden">
    <div class="row h-100">
        <div class="col-md-5">
            <img src="assets/img/hero.png" alt="" class="h-100 top-0 start-0 ">
        </div>
        <div class="col-md-5 hero-tagline my-auto">
            <h1><?= $data['title'] ?></h1>
            <p>
                <?= $data['description'] ?>
            </p>
        </div>
    </div>
</section>


<!-- Product Section -->
<section id="layanan">
    <div class="container">
        <div class="col-12 text-center">
            <h2>Solusi untuk segala kebutuhan <br> aplikasi bisnis anda.</h2><br>
        </div>
        <div class="row row-cols-3 g-4 justify-content-center text-center">
            <?php while ($d2 = mysqli_fetch_array($data2)) { ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="position-relative mt-2 mb-3 fa-3x">
                                <i class="fa fa-solid fa-<?= $d2['icon'] ?>"></i>
                            </div>
                            <h5 class="card-title"><?= $d2['title'] ?></h5>
                            <p class="card-text"><?= $d2['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="custom" class="container">
    <div class="card m-auto mb-5 text-center" style="max-width: 100%;">
        <div class="card-body">
            <i class="fa fa-3x fa-solid fa-laptop mb-3 mt-2"></i>
            <h5 class="card-title">Software Custom</h5>
            <p class="card-text">Jasa pembuatan software custom yaitu pembuatan aplikasi yang khusus disesuaikan
                dengan kebutuhan untuk menunjang pelayanan dan kinerja instansi anda. Silahkan konsultasikan
                kebutuhan software custom kepada tim integra indonesia untuk mewujudkannya.</p>
        </div>
    </div>


    <!-- <div class="card border-dark mb-5 mx-auto" style="">
        <div class="card-header position-relative mx-auto fa-3x">
    </div>
        <div class="card-body text-dark text-center">

        </div> -->
</section>

<?php
include 'footer.php'; ?>