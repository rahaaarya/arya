<?php include("inc_header.php");
include '../inc/koneksi.php';

$no = 1;
$data = mysqli_query($koneksi, "SELECT * from hal_hero WHERE category = 'home'");
$data2 = mysqli_query($koneksi, "SELECT * from h_service");
$data3 = mysqli_query($koneksi, "SELECT * from h_news");
?>

<main class="content mb-5">
    <ul class="nav nav-pills bg-secondary mb-2" id="myTab" role="tablist">
        <?php $p = @$_GET['p']; ?>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == '' || $p == 'section1' ? 'active' : ''; ?>" href="home.php?p=section1">Section 1</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == 'section2' ? 'active' : ''; ?>" href="home.php?p=section2">Section 2</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == 'section3' ? 'active' : ''; ?>" href="home.php?p=section3">Section 3</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == 'section4' ? 'active' : ''; ?>" href="home.php?p=section4">Section 4</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <!-- ================================= SECTION 1 ================================================ -->
        <?php if ($p == '' || $p == 'section1') {

            while ($d = mysqli_fetch_array($data)) {
        ?>
                <?php
                if (isset($_GET['m'])) { ?>
                    <div class="alert alert-primary" role="alert">
                        Data Berhasil di update
                    </div>
                <?php } ?>
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

                <!-- ================================ SECTION 2 =============================================== -->
            <?php }
        } elseif ($p == 'section2') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">SERVICE SECTION</h2>
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                    + Add Service
                </button>
                <table class="table table-striped table-secondary table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IMG</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($d2 = mysqli_fetch_array($data2)) { ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <td><?= $d2['img']; ?></td>
                                <td><?= $d2['title']; ?></td>
                                <td><?= substr(strip_tags($d2['description']), 0, 70) . '...'; ?></td>
                                <td>DELETE | EDIT</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>

            <!-- ================================ SECTION 3 =============================================== -->
        <?php
        } elseif ($p == 'section3') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">FAQ SECTION</h2>
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


            <!-- ================================ SECTION 4 ================================================ -->
        <?php } elseif ($p == 'section4') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">NEWS SECTION</h2>
                <table class="table table-striped table-secondary table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IMG</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($d3 = mysqli_fetch_array($data3)) { ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <td><?= $d3['img']; ?></td>
                                <td><?= substr(strip_tags($d3['title']), 0, 40) . '...'; ?></td>
                                <td><?= substr(strip_tags($d3['description']), 0, 40) . '...'; ?></td>
                                <td>DELETE | EDIT</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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



<!-- ============================= MODAL SECTION 2 ===================================== -->

<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD SERVICE</h5>
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form class="container" method="post" action="proses/home/section2.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="img" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="ijudul" class="form-label">Title</label>
                        <input type="text" class="form-control" id="ijudul" name="judul" value="testing">
                    </div>
                    <div class="mb-3">
                        <label for="idesc" class="form-label">Description</label>
                        <textarea class="form-control" id="idesc" rows="3" name="deskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>