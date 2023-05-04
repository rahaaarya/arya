<?php include("inc_header.php");
include '../inc/koneksi.php';

$no = 1;
$data = mysqli_query($koneksi, "SELECT * from h_hero WHERE category = 'about'");
?>

<main class="content mb-5">
    <ul class="nav nav-pills bg-secondary mb-2" id="myTab" role="tablist">
        <?php $p = @$_GET['p']; ?>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == '' || $p == 'section1' ? 'active' : ''; ?>" href="about.php?p=section1">Section 1</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == 'section2' ? 'active' : ''; ?>" href="about.php?p=section2">Section 2</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <!-- ================================= SECTION 1 ================================================ -->
        <?php if ($p == '' || $p == 'section1') {

            while ($d = mysqli_fetch_array($data)) {
        ?>
                <div class="container-fluid p-3 tab-pane fade show active">
                    <h2 class="mb-5">HERO SECTION</h2>
                    <form class="container" method="post" action="proses/home/section1.php">
                        <div class="container mb-3">
                            <label for="ijudul" class="form-label">Title</label>
                            <input type="text" class="form-control" id="ijudul" name="judul" value="<?= $d['title']; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="idesc" class="form-label">Description</label>
                            <textarea class="form-control" id="idesc" rows="6" name="deskripsi"><?= $d['description']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            <?php } ?>
            <!-- ================================ SECTION 2 =============================================== -->
        <?php
        } elseif ($p == 'section2') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">ABOUT SECTION</h2>
                <form class="container">
                    <div class="mb-3">
                        <label for="ijudul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="ijudul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="idesc" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="idesc" rows="3" name="deskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <?php } ?>

    </div>

</main>

<?php include("inc_footer.php") ?>