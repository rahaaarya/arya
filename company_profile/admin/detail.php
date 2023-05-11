<?php
include('inc_header.php');
include('../inc/koneksi.php');

$id = $_GET['m'];
if (!isset($id)) {
    header('location:contact.php');
}
$data = mysqli_query($koneksi, "SELECT * from h_contact WHERE id = '$id'");
?>

<main class="content">
    <div class="container p-3">
        <h2> <a href="contact.php"><i class="fas fa-circle-left"></i></a> CONTACT INFORMATION</h2>
        <hr class="mb-5">
        <?php while ($contact = mysqli_fetch_array($data)) { ?>
            <div class="mx-5 mb-5">
                <p class="fs-4"> <strong>FROM: </strong> <?= $contact['f_name'] ?> <?= $contact['l_name'] ?></p>
                <hr>
                <p class="float-end"><?= $contact['date'] ?></p>
                <p><strong>MESSAGE: </strong><br> <?= $contact['message'] ?></p>
                <hr>
            </div>
            <div class="ms-2">
                <h4>Information</h4>
                <hr>
                <p><strong>Email:</strong> <?= $contact['email'] ?></p>
                <p><strong>Phone Number:</strong> <?= $contact['m_phone'] ?></p>
            </div>
        <?php } ?>
    </div>

</main>

<?php include('inc_footer.php') ?>