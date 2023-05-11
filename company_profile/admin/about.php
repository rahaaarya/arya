<?php
include("inc_header.php");
include '../inc/koneksi.php';

$no = 1;
$data = mysqli_query($koneksi, "SELECT * from h_hero WHERE category = 'about'");
$data2 = mysqli_query($koneksi, "SELECT * from h_service WHERE category = 'about'");
$data3 = mysqli_query($koneksi, "SELECT * from h_section WHERE category = 'about'");


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
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == 'section3' ? 'active' : ''; ?>" href="about.php?p=section3">Section 3</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-white <?php echo $p == 'section4' ? 'active' : ''; ?>" href="about.php?p=section4">Section 4</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <!-- ================================= SECTION 1 ================================================ -->
        <?php if ($p == '' || $p == 'section1') {

            while ($d = mysqli_fetch_array($data)) {
        ?>
                <div class="container-fluid p-3 tab-pane fade show active">
                    <h2>HERO SECTION</h2>
                    <hr class="mb-5">
                    <form class="container" method="post" action="proses/h_hero.php">
                        <input hidden type="text" class="form-control" name="id" value="<?= $d['id']; ?>">
                        <input hidden type="text" class="form-control" name="kategori" value="<?= $d['category']; ?>">
                        <input hidden type="text" class="form-control" name="page" value="<?php
                                                                                            if (isset($_GET['p'])) {
                                                                                                echo '?p=' . $_GET['p'];
                                                                                            } else {
                                                                                                echo '';
                                                                                            }
                                                                                            ?>">
                        <div class="container mb-3">
                            <label for="ijudul" class="form-label">Title</label>
                            <input type="text" class="form-control" id="ijudul" name="judul" value="<?= $d['title']; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="idesc" class="form-label">Description</label>
                            <textarea class="form-control" id="idesc" rows="6" name="deskripsi"><?= $d['description']; ?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            <?php } ?>
            <!-- ================================ SECTION 2 =============================================== -->
        <?php
        } elseif ($p == 'section2') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2>SECTION 2</h2>
                <hr class="mb-5">
                <div class="container">
                    <?php $d3 = mysqli_fetch_all($data3); ?>
                    <form class="container" method="post" action="proses/h_section.php" enctype="multipart/form-data">
                        <input hidden type="text" class="form-control" name="id" value="<?= $d3[0][0]; ?>">
                        <input hidden type="text" class="form-control" name="category" value="<?= $d3[0][5]; ?>">
                        <input hidden type="text" class="form-control" name="page" value="<?= $_GET['p'] ?>">
                        <input type="text" id="currImg" name="currImg" value="<?= $d3[0][1]; ?>" hidden>
                        <div class="container mb-3">
                            <label for="iimage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <p id="forImg" class="mt-5 mb-5">Gambar sebelumnya: <img src="../assets/uploaded/<?= $d3[0][1]; ?>" width="200px" alt=""></p>
                        </div>
                        <div class="container mb-3">
                            <label for="ijudul" class="form-label">Title</label>
                            <input type="text" class="form-control" id="ijudul" name="title" value="<?= $d3[0][2]; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="idesc" class="form-label">Description</label>
                            <textarea class="form-control" id="idesc" rows="12" name="description"><?= $d3[0][4]; ?></textarea>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- ================================ SECTION 3 =============================================== -->

        <?php } elseif ($p == 'section3') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2>SECTION 3</h2>
                <hr class="mb-5">
                <div class="container">
                    <?php $d3 = mysqli_fetch_all($data3); ?>
                    <form class="container" method="post" action="proses/h_section.php" enctype="multipart/form-data">
                        <input hidden type="text" class="form-control" name="id" value="<?= $d3[1][0]; ?>">
                        <input hidden type="text" class="form-control" name="category" value="<?= $d3[1][5]; ?>">
                        <input hidden type="text" class="form-control" name="page" value="<?= $_GET['p'] ?>">
                        <input type="text" id="currImg" name="currImg" value="<?= $d3[1][1]; ?>" hidden>
                        <div class="container mb-3">
                            <label for="iimage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <p id="forImg" class="mt-5 mb-5">Gambar sebelumnya: <img src="../assets/uploaded/<?= $d3[1][1]; ?>" width="200px" alt=""></p>
                        </div>
                        <div class="container mb-3">
                            <label for="ijudul" class="form-label">Title</label>
                            <input type="text" class="form-control" id="ijudul" name="title" value="<?= $d3[1][2]; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="isubjudul" class="form-label">Sub-Title</label>
                            <input type="text" class="form-control" id="isubjudul" name="subTitle" value="<?= $d3[1][3]; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="idesc" class="form-label">Description</label>
                            <textarea class="form-control" id="idesc" rows="12" name="description"><?= $d3[1][4]; ?></textarea>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- ================================ SECTION 4 =============================================== -->

        <?php } elseif ($p == 'section4') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2>SECTION 4</h2>
                <hr class="mb-5">
                <div class="container">
                    <?php $d3 = mysqli_fetch_all($data3); ?>
                    <form class="container" method="post" action="proses/h_section.php" enctype="multipart/form-data">
                        <input hidden type="text" class="form-control" name="id" value="<?= $d3[2][0]; ?>">
                        <input hidden type="text" class="form-control" name="category" value="<?= $d3[2][5]; ?>">
                        <input hidden type="text" class="form-control" name="page" value="<?= $_GET['p'] ?>">
                        <input type="text" id="currImg" name="currImg" value="<?= $d3[2][1]; ?>" hidden>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" hidden>
                        <div class="container mb-3">
                            <label for="ijudul" class="form-label">Title</label>
                            <input type="text" class="form-control" id="ijudul" name="title" value="<?= $d3[2][2]; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="idesc" class="form-label">Description</label>
                            <textarea class="form-control" id="idesc" rows="8" name="description"><?= $d3[2][4]; ?></textarea>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
                    </form>


                    <!-- SECTION 4  -->
                    <div class="mt-1">

                        <button type="button" class="btn btn-success mb-3 inputService float-end" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                            + Add Service
                        </button>
                        <table class="table table-striped table-light table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ICON</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($d2 = mysqli_fetch_array($data2)) { ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <td class="text-center"><i class="fas fa-2x fa-<?= $d2['icon']; ?>"></i></td>
                                        <td><?= $d2['title']; ?></td>
                                        <td><?= substr(strip_tags($d2['description']), 0, 70) . '...'; ?></td>
                                        <td>
                                            <a id="hapusIni" href="proses/h_service.php?id=<?= $d2['id']; ?>&h=<?= $d2['category'] ?>&p=<?= $_GET['p'] ?>" type="button" class="btn btn-sm btn-danger">
                                                Delete
                                            </a>
                                            |
                                            <button type="button" class="btn btn-sm btn-primary ubahService" data-bs-toggle="modal" data-bs-target="#exampleModalDefault" data-id="<?= $d2['id'] ?>">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- ============================= MODAL ===================================== -->

    <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">ADD SERVICE</h5>
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form class="container" method="post" action="proses/h_service.php" enctype="multipart/form-data">
                        <div class="mb-3 forImg">
                            <label id="mLabel1" for="image" class="form-label">Image</label>

                            <!-- for image -->
                            <div id="forImg">
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                <p id="currImg" class="mt-3">Gambar sebelumnya: <img src="../assets/uploaded/" width="50px" alt=""></p>
                            </div>

                            <!--  for icon -->
                            <div id="forIcon">
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="contoh: user-group">
                                <a id="linkIcon" href="howtoicon.php" target="_blank">cara mengambil icon!</a>
                                <a href="https://fontawesome.com/icons" target="_blank" class="text-warning float-end">cari font disini!</a>
                                <div id="currIcon">
                                    <p class="d-flex flex-column mt-3"> Icon sebelumnya: <i class="fas fa-2x align-self-center"></i>
                                        <span id="iconName" class="align-self-center"></span>
                                </div>
                                </p>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            <input type="text" id="id_serv" name="id" hidden>
                            <input type="text" id="cat_serv" name="category" value="about" hidden>
                            <input type="text" id="currImg" name="currImg" value="" hidden>
                            <input type="text" id="sub_title" name="sub_title" value="" hidden>
                            <input hidden type="text" class="form-control" name="page" value="<?= $_GET['p'] ?>">
                        </div>
                        <button type="submit" name="input" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

</main>

<?php include("inc_footer.php") ?>