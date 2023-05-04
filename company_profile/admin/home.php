<?php include("inc_header.php");
include '../inc/koneksi.php';
session_start();


$no = 1;
$data = mysqli_query($koneksi, "SELECT * from h_hero WHERE category = 'home'");
$data2 = mysqli_query($koneksi, "SELECT * from h_service WHERE category = 'home'");
$data3 = mysqli_query($koneksi, "SELECT * from h_section WHERE category = 'home'");
$data4 = mysqli_query($koneksi, "SELECT * from h_news");
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
                    <form class="container" method="post" action="proses/h_hero.php">
                        <input hidden type="text" class="form-control" name="id" value="<?= $d['id']; ?>">
                        <input hidden type="text" class="form-control" name="kategori" value="<?= $d['category']; ?>">
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

                <!-- ================================ SECTION 2 ============================================ -->
            <?php }
        } elseif ($p == 'section2') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">SERVICE SECTION</h2>
                <button type="button" class="btn btn-success mb-3 inputService" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                    + Add Service
                </button>
                <table class="table table-striped table-light table-bordered">
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
                                <td><img src="../assets/uploaded/<?= $d2['img']; ?>" width="50" alt="<?= $d2['img']; ?>"></td>
                                <td><?= $d2['title']; ?></td>
                                <td><?= substr(strip_tags($d2['description']), 0, 70) . '...'; ?></td>
                                <td>
                                    <a href="proses/h_service.php?id=<?= $d2['id']; ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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

            <!-- ================================ SECTION 3 =============================================== -->
        <?php
        } elseif ($p == 'section3') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">FAQ SECTION</h2>
                <div class="container">
                    <?php $d3 = mysqli_fetch_array($data3); ?>
                    <form class="container" method="post" action="proses/h_section.php" enctype="multipart/form-data">
                        <input hidden type="text" class="form-control" name="id" value="<?= $d3['id']; ?>">
                        <input hidden type="text" class="form-control" name="category" value="<?= $d3['category']; ?>">
                        <input type="text" id="currImg" name="currImg" value="<?= $d3['img']; ?>" hidden>
                        <div class="container mb-3">
                            <label for="iimage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <p id="forImg" class="mt-5 mb-5">Gambar sebelumnya: <img src="../assets/uploaded/<?= $d3['img']; ?>" width="200px" alt=""></p>
                        </div>
                        <div class="container mb-3">
                            <label for="ijudul" class="form-label">Title</label>
                            <input type="text" class="form-control" id="ijudul" name="title" value="<?= $d3['title']; ?>">
                        </div>
                        <div class="container mb-3">
                            <label for="idesc" class="form-label">Description</label>
                            <textarea class="form-control" id="idesc" rows="12" name="description"><?= $d3['description']; ?></textarea>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


            <!-- ================================ SECTION 4 ================================================ -->
        <?php } elseif ($p == 'section4') { ?>
            <div class="container-fluid p-3 tab-pane fade show active">
                <h2 class="mb-5">NEWS SECTION</h2>
                <button type="button" class="btn btn-success mb-3 inputNews" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                    + Add News
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
                        <?php while ($d4 = mysqli_fetch_array($data4)) { ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <td><img src="../assets/uploaded/<?= $d4['img']; ?>" width="50" alt="<?= $d4['img']; ?>"></td>
                                <td><?= substr(strip_tags($d4['title']), 0, 30) . '...'; ?></td>
                                <td><?= substr(strip_tags($d4['description']), 0, 30) . '...'; ?></td>
                                <td>
                                    <a href="proses/h_news.php?id=<?= $d4['id']; ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        Delete
                                    </a>
                                    |
                                    <button type="button" class="btn btn-sm btn-primary ubahNews" data-bs-toggle="modal" data-bs-target="#exampleModalDefault" data-id="<?= $d4['id'] ?>">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <p id="forImg" hidden class="mt-3">Gambar sebelumnya: <img src="../assets/uploaded/" width="50px" alt=""></p>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            <input type="text" id="id_serv" name="id" hidden>
                            <input type="text" id="cat_serv" name="category" hidden>
                            <input type="text" id="currImg" name="currImg" value="" hidden>
                            <input type="text" id="sub_title" name="sub_title" value="" hidden>
                        </div>
                        <button type="submit" name="input" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


</main>

<!-- JQUERY AJAX -->

<script>
    $(function() {

        // FOR SECTION 2 ========================================================================

        $('.inputService').on('click', function() {
            $('#modalLabel').html('ADD SERVICE');
            $('.modal-body form button').attr('name', 'input');
            $('.forImg p').attr('hidden', true);

            // resetting from ubaService
            $('#id_serv').val('');
            $('#title').val('');
            $('#description').val('');
            $('#currImg').val('');
            $('#forImg img').attr('src', '');
            $('#cat_serv').val('home');
        });

        $('.ubahService').on('click', function() {
            $('#modalLabel').html('EDIT SERVICE');
            $('.forImg p').removeAttr('hidden');
            $('.modal-body form button').attr('name', 'ubah');

            const id = $(this).data('id');

            $.ajax({
                url: 'proses/h_service.php',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#id_serv').val(data.id);
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#currImg').val(data.img);
                    $('#forImg img').attr('src', '../assets/uploaded/' + data.img);
                    $('#cat_serv').val(data.category);
                }
            });
        });

        // FOR SECTION 3 ==================================================================

        // $('.inputSection').on('click', function() {
        //     $('#modalLabel').html('ADD SECTION');
        //     $('.modal-body form button').attr('name', 'input');
        //     $('.forImg p').attr('hidden', true);
        //     $('.modal-body form').attr('action', 'proses/h_section.php');
        //     $('form .forImg').attr('hidden', true);

        //     // resetting from ubaService
        //     $('#id_serv').val('');
        //     $('#title').val('');
        //     $('#description').val('');
        //     $('#currImg').val('');
        //     $('#forImg img').attr('src', '');
        //     $('#cat_serv').val('home');
        // });

        // $('.ubahSection').on('click', function() {
        //     $('#modalLabel').html('EDIT SECTION');
        //     $('.modal-body form button').attr('name', 'ubah');
        //     $('.forImg p').attr('hidden', true);
        //     $('.modal-body form').attr('action', 'proses/h_section.php');
        //     $('form .forImg').attr('hidden', true);

        //     const id = $(this).data('id');

        //     $.ajax({
        //         url: 'proses/h_section.php',
        //         data: {
        //             id: id
        //         },
        //         method: 'post',
        //         dataType: 'json',
        //         success: function(data) {
        //             $('#id_serv').val(data.id);
        //             $('#title').val(data.title);
        //             $('#description').val(data.description);
        //             $('#cat_serv').val(data.category);
        //         }
        //     });
        // });

        // FOR SECTION 4 ==================================================================

        $('.inputNews').on('click', function() {
            $('#modalLabel').html('ADD NEWS');
            $('.modal-body form button').attr('name', 'input');
            $('.modal-body form').attr('action', 'proses/h_news.php');

            // resetting from ubaService
            $('#id_serv').val('');
            $('#title').val('');
            $('#description').val('');
            $('#currImg').val('');
            $('#forImg img').attr('src', '');
            $('#cat_serv').val('home');
        });

        $('.ubahNews').on('click', function() {
            $('#modalLabel').html('EDIT NEWS');
            $('.modal-body form button').attr('name', 'ubah');
            $('.modal-body form').attr('action', 'proses/h_news.php');
            $('.forImg p').removeAttr('hidden');

            const id = $(this).data('id');

            $.ajax({
                url: 'proses/h_news.php',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#id_serv').val(data.id);
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#currImg').val(data.img);
                    $('#forImg img').attr('src', '../assets/uploaded/' + data.img);
                }
            });
        });

    });
</script>


<?php include("inc_footer.php") ?>