<?php include("inc/koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM halaman");
include("header.php");
?>

<!-- Hero Section -->
<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-5">
                <img src="assets/img/hero.png" alt="" class="h-100 position-absolute top-0 start-0 ">
            </div>
            <div class="col-md-6 hero-tagline my-auto">
                <h1>Bertumbuh Bersama STMIK</h1>
                <p>
                    <strong>STMIK</strong> hadir untuk membantu anda menciptakan teknologi yang terbaik, untukmu, untuk kita, untuk dunia.
                </p>
                <a href="#layanan">
                    <button class="button-lg-primary"> Our Service <img src="assets/img/arrow.png" alt="" class="col-md-1"></button>
                </a>
            </div>
        </div>
    </div>

</section>

<!-- Layanan Section -->
<section id="layanan">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Solusi untuk <br> segala kebutuhan anda.
                </h2>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-around">
            <div class="col-md-3 mb-5 text-center">
                <div class="card-layanan h-100">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/partnership.png" alt="" class="icon position-absolute top=-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">E-Goverment</h3>
                    <p class="mt-3">Produk Sistem Informasi Manajemen untuk pemerintahan (e-goverment solution) dalam rangka untuk meningkatkan kinerja instansi pemerintahan dan pelayanan kepada masyarakat</p>
                </div>
            </div>
            <div class="col-md-3 mb-5 text-center">
                <div class="card-layanan h-100">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/partnership.png" alt="" class="icon position-absolute top=-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">E-Business Solution</h3>
                    <p class="mt-3">Kami membantu anda untuk menyiapkan berbagai kebutuhan teknologi berbasis digital seperti aplikasi / sistem informasi untuk mendukung kemudahan pengelolaan dan lompatan kemajuan bisnis anda</p>
                </div>
            </div>
            <div class="col-md-3 mb-5 text-center">
                <div class="card-layanan h-100">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/partnership.png" alt="" class="icon position-absolute top=-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Information System</h3>
                    <p class="mt-3">Pengembangan sistem informasi untuk berbagai keperluan pengelolaan data, reporting, dashboard executive, decision support system, GIS, dll yang diterapkan pada pemerintahan, pendidikan, perusahaan, dll</p>
                </div>
            </div>
            <div class="col-md-3 mb-5 text-center">
                <div class="card-layanan h-100">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="assets/img/partnership.png" alt="" class="icon position-absolute top=-50 start-50 translate-middle">
                    </div>
                    <h3 class="mt-4">Mobile Apps</h3>
                    <p class="mt-3">Kami siap membantu mengembangkan aplikasi mobile seperti android dan IOS sesuai dengan kebutuhan anda</p>
                </div>
            </div>

        </div>


    </div>
</section>

<!-- Promosi Section -->
<section id="promosi">
    <div class="container">
        <di class="row">
            <div class="col-6 text-center">
                <img src="assets/img/img.jpg" alt="" class="float">
            </div>
            <div class="col-6 content">
                <h2>Mengapa Memilih STMIK Indonesia ?</h2>
                <p>Memilih Integra Inovasi Indonesia menjadi partner Anda merupakan sebuah pilihan yang tepat.
                    Karena integra indonesia merupakan perusahaan IT di Yogyakarta yang terpercaya dan
                    berpengalaman mengembangkan aplikasi di berbagai instansi di Indonesia.</p>
                <br>
                <h4>User Requirements Analysis</h4>
                <p>Kami desain sistem sesuai dengan kebutuhan dan permasalahan dari client. Sehingga anda
                    mendapatkan solusi yang tepat</p>
                <br>
                <h4>High End Technology</h4>
                <p>Kami selalu melakukan research yang berkelanjutan untuk selalu uptodate dengan perkembangan
                    teknologi terkini</p>
                <br>
                <h5>After Sales Service & Maintenance</h5>
                <p>Kami memberikan garansi layanan after sales dan pendampingan guna memastikan user
                    memanfaatkan layanan dan produk sesuai harapan</p>
            </div>
        </di>
    </div>
</section>
<br>
<br>

<section id="news">
    <div class="container">
        <div class="col-12 text-center mb-5">
            <h2>STMIK <span class="yellow">News</span></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-12 text-center">
                <div class="card-img h-100">
                    <img src="assets/img/apple.jpg" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Umumkan Peluncuran Produk Baru pada Akhir Tahun Ini</h5>
                        <p class="card-text">Apple mengumumkan akan meluncurkan produk baru pada akhir tahun ini,
                            termasuk update untuk produk iPhone, iPad, dan Mac. Perusahaan teknologi tersebut juga
                            berencana untuk merilis produk baru di pasar wearable dan AR/VR.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="card-img h-100">
                    <img src="assets/img/fb.jpg" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Facebook Merilis Fitur Baru untuk Meningkatkan Keamanan Data Pengguna
                        </h5>
                        <p class="card-text">Facebook meluncurkan fitur baru untuk meningkatkan keamanan data
                            pengguna. Pengguna dapat memperkuat keamanan akun mereka dengan autentikasi dua faktor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="card-img h-100">
                    <img src="assets/img/google.png" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Google dan Facebook Kembali Hadapi Kritik Soal Privasi Data</h5>
                        <p class="card-text">Perusahaan teknologi Google dan Facebook kembali mendapat kritik dari
                            para ahli privasi data terkait penggunaan data pribadi pengguna mereka. Hal ini
                            menimbulkan kekhawatiran terhadap penggunaan data pribadi oleh perusahaan teknologi
                            besar di masa depan.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="card-img h-100">
                    <img src="assets/img/5g.jpg" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Munculnya Teknologi 5G: Revolusi Baru di Dunia IT!</h5>
                        <p class="card-text">Teknologi 5G diklaim sebagai revolusi baru di dunia IT. Banyak
                            perusahaan teknologi yang sedang mempersiapkan infrastruktur dan inovasi baru untuk
                            mendukung teknologi ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="card-img h-100">
                    <img src="assets/img/ransomware.jpg" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ransomware: Ancaman Besar bagi Dunia IT dan Bisnis Online</h5>
                        <p class="card-text">Ransomware semakin mengancam dunia IT dan bisnis online. Bagaimana cara
                            menghindari serangan ini dan apa yang harus dilakukan jika terkena serangan?</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="card-img h-100">
                    <img src="assets/img/Quantum_Computing_Image.png" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Berpikir di Luar Kotak: Teknologi Quantum Computing</h5>
                        <p class="card-text">Quantum Computing merupakan teknologi yang menjanjikan dan berpotensi
                            mengubah dunia IT secara drastis. Apa itu Quantum Computing dan bagaimana dampaknya
                            terhadap dunia IT?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>