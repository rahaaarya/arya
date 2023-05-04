<footer class="content footer bg-dark">
    <div class="text-center text-white p-3">
        Copyright &copy; 1563
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
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

</body>

</html>