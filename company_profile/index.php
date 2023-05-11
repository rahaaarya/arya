<?php include("inc/koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM halaman");
include("header.php");

$data = mysqli_query($koneksi, "SELECT * from h_hero WHERE category = 'home'");
$data2 = mysqli_query($koneksi, "SELECT * from h_service WHERE category = 'home'");
$data3 = mysqli_query($koneksi, "SELECT * from h_section WHERE category = 'home'");
$data4 = mysqli_query($koneksi, "SELECT * from h_news ");

$data = mysqli_fetch_array($data);

// $data2 = mysqli_fetch_all($data2);
$data3 = mysqli_fetch_array($data3);
// $data4 = mysqli_fetch_array($data4);


?>

<!-- Hero Section -->
<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-5">
                <img src="assets/img/hero.png" alt="" class="h-100 position-absolute top-0 start-0 ">
            </div>
            <div class="col-md-6 hero-tagline my-auto">
                <h1><?= $data['title'] ?></h1>
                <p>
                    <?= $data['description'] ?>
                </p>
                <a href="#layanan">
                    <button class="button-lg-primary"> Our Service <img src="assets/img/arrow.png" alt="" class="col-md-1"></button>
                </a>
            </div>
        </div>
    </div>

</section>

<!-- Layanan Section -->
<section id="layanan">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Solusi untuk <br> segala kebutuhan anda.
                </h2>
            </div>
        </div>
        <div class="row mt-5 d-flex justify-content-around">
            <?php while ($service = mysqli_fetch_array($data2)) { ?>
                <div class="col-md-3 text-center">
                    <div class="card-icon">
                        <div class="card-body h-100">
                            <div class="circle-icon position-relative mt-2 mb-3 mx-auto">
                                <i class="fas fa-<?= $service['icon'] ?> fa-2x icon icon position-absolute top=-50 start-50 translate-middle "></i>
                            </div>
                            <h4 class="mt-4"><?= $service['title'] ?></h4>
                            <p class="mt-3"><?= $service['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<!-- Promosi Section -->
<section id="promosi">
    <div class="container">
        <di class="row">
            <div class="col-6 text-center">
                <img src="assets/uploaded/<?= $data3['img'] ?>" alt="" class="float">
            </div>
            <div class="col-6 content">
                <?= $data3['title']; ?>
                <?= $data3['description']; ?>
            </div>
        </di>
    </div>
</section>
<br>
<br>

<section id="news">
    <div class="container">
        <div class="col-12 text-center mb-5">
            <h2>STMIK <span class="yellow">News</span></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php while ($news = mysqli_fetch_array($data4)) { ?>
                <div class="col-12 text-center mb-5">
                    <div class="card-img h-100">
                        <img src="assets/uploaded/<?= $news['img']; ?>" class="" alt="...">
                        <div class="card-body h-50">
                            <h5 class="card-title"><?= $news['title']; ?></h5>
                            <p class="card-text"> <?= $news['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php
include 'footer.php'; ?>