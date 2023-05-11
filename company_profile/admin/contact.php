<?php
include('inc_header.php');
include('../inc/koneksi.php');

$data = mysqli_query($koneksi, "SELECT * from h_contact");

$cek = mysqli_num_rows($data);
?>

<main class="content">
    <div class="container p-3">
        <h2>CONTACT</h2>
        <hr class="mb-5">
        <div class="container m-3">
            <?php if (empty($cek)) { ?>
                <h2 class="text-secondary d-flex justify-content-center">NO MESSAGE ARE SENDING</h2>
            <?php } else { ?>
                <div class="d-flex justify-content-start flex-wrap ">
                    <?php while ($contact = mysqli_fetch_array($data)) { ?>
                        <div class="card bg-light mb-5 me-5" style="width: 18rem;">
                            <div class="card-body">
                                <small class="text-secondary float-end"><?= $contact['date']; ?></small>
                                <h5 class="card-title mt-3"><?= $contact['f_name'] . ' ' . $contact['l_name']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $contact['email']; ?></h6>
                                <p class="card-text mb-4"><?= substr(strip_tags($contact['message']), 0, 100) . '...'; ?></p>
                                <div class="deletes position-absolute bottom-0 end-0 mb-2 mx-2">
                                    <a id="hapusIni" href="proses/h_contact.php?id=<?= $contact['id']; ?>" class="card-link text-danger">DELETE</a>
                                    <a href="detail.php?m=<?= $contact['id']; ?>" class="card-link">DETAIL</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

</main>

<?php include('inc_footer.php') ?>