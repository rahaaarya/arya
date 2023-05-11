<footer class="content footer bg-dark">
    <div class="text-center text-white p-3">
        Copyright &copy; 1563
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    $('#user_logout').on('click', function(e) {
        e.preventDefault();
        var links = $(this).attr('href');
        swal({
                title: "Apakah Anda Yakin?",
                text: "Ingin keluar dari akun ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willOut) => {
                if (willOut) {
                    window.location.href = links;
                }
            });
    });

    $('table #hapusIni').on('click', function(e) {
        e.preventDefault();
        var links = $(this).attr('href');
        swal({
                title: "Apakah Anda Yakin?",
                text: "Ingin Menghapus Data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willOut) => {
                if (willOut) {
                    window.location.href = links;
                }
            });
    });
    $('.deletes #hapusIni').on('click', function(e) {
        e.preventDefault();
        var links = $(this).attr('href');
        swal({
                title: "Apakah Anda Yakin?",
                text: "Ingin Menghapus Data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willOut) => {
                if (willOut) {
                    window.location.href = links;
                }
            });
    });
</script>

<!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses dah failed  -->
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("Success", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} elseif (@$_SESSION['gagal']) { ?>
    <script>
        swal("Failed", "<?php echo $_SESSION['gagal']; ?>", "warning");
    </script>
<?php unset($_SESSION['gagal']);
} ?>

<!-- JQUERY AJAX -->

<script>
    $(function() {

        // FOR SECTION SERVICE ========================================================================

        $('.inputService').on('click', function() {
            $('#modalLabel').html('ADD SERVICE');
            $('.modal-body form button').attr('name', 'input');
            $('#forImg').attr('hidden', true);
            $('#mLabel1').html('Icon').attr('for', 'icon');
            $('#forIcon #currIcon').attr('hidden', true);

            // resetting from ubaService
            $('#id_serv').val('');
            $('#title').val('');
            $('#description').val('');
            $('#currImg').val('');
        });

        $('.ubahService').on('click', function() {
            $('#modalLabel').html('EDIT SERVICE');
            $('#forIcon').removeAttr('hidden');
            $('.modal-body form button').attr('name', 'ubah');
            $('#forImg').attr('hidden', true);
            $('#mLabel1').html('Icon').attr('for', 'icon');
            $('#forIcon #currIcon').attr('hidden', false);

            const id = $(this).data('id');
            console.log(id);

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
                    $('#forIcon i').attr('class', 'fas fa-2x align-self-center fa-' + data.icon);
                    $('#forIcon span').html(data.icon);
                    $('#cat_serv').val(data.category);
                }
            });
        });

        // FOR SECTION SERVICE ========================================================================

        $('.inputApp').on('click', function() {
            $('#modalLabel').html('ADD APP');
            $('.modal-body form button').attr('name', 'input');
            $('#forImg').attr('hidden', true);
            $('#mLabel1').html('Icon').attr('for', 'icon');
            $('#forIcon #currIcon').attr('hidden', true);

            // resetting from ubaService
            $('#id_serv').val('');
            $('#title').val('');
            $('#description').val('');
        });

        $('.ubahApp').on('click', function() {
            $('#modalLabel').html('EDIT APP');
            $('#forIcon').removeAttr('hidden');
            $('.modal-body form button').attr('name', 'ubah');
            $('#forImg').attr('hidden', true);
            $('#mLabel1').html('Icon').attr('for', 'icon');
            $('#forIcon #currIcon').attr('hidden', false);

            const id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: 'proses/ps_application.php',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#id_serv').val(data.id);
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#forIcon i').attr('class', 'fas fa-2x align-self-center fa-' + data.icon);
                    $('#forIcon span').html(data.icon);
                    $('#cat_serv').val(data.category);
                }
            });
        });


        // FOR SECTION NEWS ==================================================================

        $('.inputNews').on('click', function() {
            $('#modalLabel').html('ADD NEWS');
            $('.modal-body form button').attr('name', 'input');
            $('.modal-body form').attr('action', 'proses/h_news.php');
            $('#forImg #currImg').attr('hidden', true);
            $('#forIcon').attr('hidden', true);

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
            $('#forIcon').attr('hidden', true);

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

</body>

</html>