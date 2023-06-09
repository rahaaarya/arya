<!-- footer -->
<section id="footer">
    <footer class="bg-dark text-white pt -5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        STMIK indonesia
                    </h5>
                    <p>STMIK Indonesia sebagai konsultan dan developer dalam bidang Teknologi Informasi dan
                        Komunikasi (TIK) berusaha memberikan solusi terhadap permasalahan dan kebutuhan teknologi
                        informasi dengan mengutamakan pada solusi pemanfaatan IT secara efektif dan efisien.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-32 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Produk dan Layanan
                    </h5>
                    <p>
                        <a href="#" class="text-white">E-Pangan</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">E-Performance</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">E-Regulasi Nakes</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Simpeg</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Simnangkis</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">SIM Tata Ruang</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">E-Office</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Mobile Apps</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful Links</h5>
                    <p>
                        <a href="#" class="text-white">Your Account</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Become Affiliates</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Help</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>Indonesia, 2023, Bandung
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>stmikindonesia@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>+62 81221918120
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i>+01 335 633 77
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-12">
                    <p>Copyright 042023 All rights reseved by :
                        <a href="#">
                            <strong class="text-warning">The Providers</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-12">
                    <div class="text-center text-md-right">
                        <ul class="list unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-youtubes"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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


<!-- // for navbar scroll -->
<script>
    const header = document.querySelector('#scHeader');
    const sectionHero = document.querySelector('#hero');
    const heroOptions = {
        rootMargin: "-100px 0px 0px 0px"
    };

    const heroObserver = new IntersectionObserver(function(entries, heroObserver) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                header.classList.add('bg-dark');
            } else {
                header.classList.remove('bg-dark');
            }
        });
    }, heroOptions);

    if (!sectionHero) {
        header.classList.add('bg-dark');
    } else {
        heroObserver.observe(sectionHero);
    }


    // for active link

    const pageURL = window.location.href;
    const lastURL = pageURL.substr(pageURL.lastIndexOf('/') + 1);
    const scNav = document.querySelectorAll('#scNav');

    if (lastURL == '' || lastURL == 'index.php') {
        scNav[0].classList.add('active');
    } else if (lastURL == 'about.php') {
        scNav[1].classList.add('active');
    } else if (lastURL == 'product.php' || lastURL == 'business.php') {
        scNav[2].classList.add('active');
    } else if (lastURL == 'contact.php') {
        scNav[3].classList.add('active');
    }
</script>
</body>