<?php
include("header.php");
include("inc/koneksi.php");

$data = mysqli_query($koneksi, "SELECT * from h_hero WHERE category = 'about'");
$data2 = mysqli_query($koneksi, "SELECT * from h_service WHERE category = 'about'");
$data3 = mysqli_query($koneksi, "SELECT * from h_section WHERE category = 'about'");

$data = mysqli_fetch_array($data);
$d3 = mysqli_fetch_all($data3);
?>
<!-- Hero Section -->
<section id="hero" class="overflow-hidden">
    <div class="row h-100">
        <div class="col-md-5">
            <img src="assets/img/hero.png" alt="" class="h-100">
        </div>
        <div class="col-md-6 hero-tagline my-auto">
            <h5>About Us</h5>
            <h1><?= $data['title'] ?></h1>
            <p>
                <?= $data['description'] ?>
            </p>
        </div>
    </div>
</section>

<!-- Overview -->
<section id="overview">
    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="title-heading-left mt-5">
                    <?= $d3[0][2] ?>
                </h2>
                <p>
                    <?= $d3[0][4] ?>
                </p>
            </div>
            <div class="col-6 ">
                <img src="assets/uploaded/<?= $d3[0][1] ?>" alt="" class="float">
            </div>
        </div>
</section>

<!-- Mission Section -->

<section id="mission">
    <div class="container my-5">
        <div class="row">
            <div class="col-6 ">
                <img src="assets/uploaded/<?= $d3[1][1] ?>" alt="" class="float">
            </div>

            <div class="col-6 text-center ">
                <div class="content">
                    <h2><?= $d3[1][2] ?></h2>
                    <h2><?= $d3[1][3] ?></h2>
                    <p><?= $d3[1][4] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="values">
    <div class="container my-5">
        <div class="row ">
            <div class="col-4 d-flex align-items-center ">
                <div>
                    <h2><?= $d3[2][2] ?></h2>
                    <p><?= $d3[2][4] ?></p>
                </div>
            </div>
            <div class="col-8 ">
                <div class="row">
                    <?php while ($d2 = mysqli_fetch_array($data2)) { ?>
                        <div class="col-md-6 text-center mt-4">
                            <div class="card-icon">
                                <div class="card-body">
                                    <div class="circle-icon position-relative mt-2 mb-3 mx-auto">
                                        <i class="fas fa-<?= $d2['icon'] ?> fa-2x icon icon position-absolute top=-50 start-50 translate-middle "></i>
                                    </div>
                                    <h5><?= $d2['title'] ?></h5>
                                    <p><?= $d2['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>