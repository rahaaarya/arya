-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 14.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_contact`
--

CREATE TABLE `h_contact` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `m_phone` char(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `h_contact`
--

INSERT INTO `h_contact` (`id`, `f_name`, `l_name`, `email`, `m_phone`, `message`) VALUES
(1, 'Edo', 'Subiabto', 'edosubianto@gmail.con', '+6281313255065', 'halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_hero`
--

CREATE TABLE `h_hero` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `h_hero`
--

INSERT INTO `h_hero` (`id`, `title`, `description`, `category`) VALUES
(18, 'Bertumbuh Bersama STMIK', 'STMIK hadir untuk membantu anda menciptakan teknologi yang terbaik, untukmu, untuk kita, untuk dunia.', 'home'),
(19, 'We deliver expertise you can trust', 'Apa yang menjadi keunggulan Integra Indonesia adalah solusi yang kami deliver kepada client sudah proven dan terbukti diimplementasikan di berbagai instansi dan daerah di Indonesia', 'about'),
(20, 'Developer Aplikasi Pemerintahan', 'E-Government merupakan sebuah langkah pemerintah dalam memanfaatkan teknologi informasi dalam upaya meningkatkan efisiensi, efektivitas, transparansi, dan akuntabilitas penyelenggaraan pemerintahan serta pelayanan publik. Ini sesuai Peraturan Presiden Nomor 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik (SPBE)', 'goverment'),
(21, 'E-Business Solutions', 'Solusi Aplikasi Bisnis dan Perusahaan\r\nPengembang aplikasi untuk kebutuhan bisnis, perusahaan, kampus, instansi dan berbagai organisasi yang anda kelola', 'business');

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_news`
--

CREATE TABLE `h_news` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `h_news`
--

INSERT INTO `h_news` (`id`, `img`, `title`, `description`) VALUES
(1, 'apple.jpg', 'Apple Umumkan Peluncuran Produk Baru pada Akhir Tahun Ini', 'Apple mengumumkan akan meluncurkan produk baru pada akhir tahun ini, termasuk update untuk produk iPhone, iPad, dan Mac. Perusahaan teknologi tersebut juga berencana untuk merilis produk baru di pasar wearable dan AR/VR.'),
(2, 'fb.jpg', 'Facebook Merilis Fitur Baru untuk Meningkatkan Keamanan Data Pengguna', 'Facebook meluncurkan fitur baru untuk meningkatkan keamanan data pengguna. Pengguna dapat memperkuat keamanan akun mereka dengan autentikasi dua faktor.'),
(3, 'google.png', 'Google dan Facebook Kembali Hadapi Kritik Soal Privasi Data', 'Perusahaan teknologi Google dan Facebook kembali mendapat kritik dari para ahli privasi data terkait penggunaan data pribadi pengguna mereka. Hal ini menimbulkan kekhawatiran terhadap penggunaan data pribadi oleh perusahaan teknologi besar di masa depan.'),
(4, '5g.JPG', 'Munculnya Teknologi 5G: Revolusi Baru di Dunia IT!', 'Teknologi 5G diklaim sebagai revolusi baru di dunia IT. Banyak perusahaan teknologi yang sedang mempersiapkan infrastruktur dan inovasi baru untuk mendukung teknologi ini.'),
(5, 'ransomware.jpg', 'Ransomware: Ancaman Besar bagi Dunia IT dan Bisnis Online', 'Ransomware semakin mengancam dunia IT dan bisnis online. Bagaimana cara menghindari serangan ini dan apa yang harus dilakukan jika terkena serangan?'),
(6, 'Quantum_Computing_Image.png', 'Berpikir di Luar Kotak: Teknologi Quantum Computing', 'Quantum Computing merupakan teknologi yang menjanjikan dan berpotensi mengubah dunia IT secara drastis. Apa itu Quantum Computing dan bagaimana dampaknya terhadap dunia IT?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_section`
--

CREATE TABLE `h_section` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `h_section`
--

INSERT INTO `h_section` (`id`, `img`, `title`, `sub_title`, `description`, `category`) VALUES
(4, 'img.jpg', '<h2>Mengapa Memilih STMIK Indonesia?</h2>', '', '<p>Memilih Integra Inovasi Indonesia menjadi partner Anda merupakan sebuah pilihan yang tepat. Karena integra indonesia merupakan perusahaan IT di Yogyakarta yang terpercaya dan berpengalaman mengembangkan aplikasi di berbagai instansi di Indonesia.</p>\r\n<br>\r\n<h4>User Requirements Analysis</h4>                 \r\n<p>Kami desain sistem sesuai dengan kebutuhan dan permasalahan dari client. Sehingga anda mendapatkan solusi yang tepat</p>                 \r\n<br>                 \r\n<h4>High End Technology</h4>                 \r\n<p>Kami selalu melakukan research yang berkelanjutan untuk selalu uptodate dengan perkembangan teknologi terkini</p>                 \r\n<br>                 \r\n<h5>After Sales Service & Maintenance</h5>                 \r\n<p>Kami memberikan garansi layanan after sales dan pendampingan guna memastikan user memanfaatkan layanan dan produk sesuai harapan</p>', 'home'),
(5, '', 'Overview', '', 'STMIK Indonesia sebagai konsultan dan developer dalam bidang Teknologi Informasi dan Komunikasi (TIK) berusaha memberikan solusi terhadap permasalahan dan kebutuhan teknologi informasi dengan mengutamakan pada solusi pemanfaatan IT secara efektif dan efisien untuk mendukung peningkatan performa dan kinerja.', 'about'),
(6, '', 'Our Mission', 'Kami memberikan solusi sistem yang terintegrasi.', 'STMIK Indonesia memiliki produk dan layanaan TI di berbagai bidang antara lain impelementasi di Pemerintahan (E-Government Solution), Perguruan Tinggi dan Sekolah (Academic Solution) dan dunia bisnis / Industri (Business Solution).\r\n\r\nApa yang menjadi keunggulan dari STMIK Indonesia adalah solusi yang kami deliver kepada client sudah proven dan terbukti diimplementasikan di berbagai instansi Pemerintah di berbagai daerah di Indonesia level Provinsi dan Kabupaten, Perguruan Tinggi Terkemuka dan Perusahaan.\r\n\r\nKami selalu melakukan research yang berkelanjutan untuk selalu uptodate dengan perkembangan teknologi terkini\r\n\r\nKami memberikan garansi layanan after sales dan pendampingan guna memastikan user memanfaatkan layanan dan produk sesuai harapan', 'about'),
(7, '', 'Our Values', '', 'STMIK Indonesia mengembangkan\r\nteknologi sesuai dengan Trend yang berkembang\r\ndengan melakukan Continues Reseach and\r\nDevelopment dalam pengembangan produk dan\r\nlayanan yang akan kami berikan', 'about'),
(8, '', 'STMIK Indonesia hadir untuk menjawab kebutuhan dan solusi aplikasi anda!', '', 'Kebutuhan akan teknologi dimasa ini menjadi sebuah kewajiban yang harus dipenuhi setiap lini bisnis ataupun berbagai instansi. Tentunya hadirnya sebuah aplikasi diharapkan membantu bisnis untuk terus melakukan lompatan dan perkembangan yang signifikan. Selain itu juga untuk menjadikan kinerja lebih efisien dan kecepatan dalam mencapai target – target bisnis. Untuk itu Integra Indonesia hadir menjadi jembatan segala kebutuhan aplikasi bisnis anda. Dengan pengalaman di berbagai bidang baik pemerintahan maupun dunia usaha / corporate, Integra menjadi pilihan tepat untuk menjadi konsultan sekaligus tim pengembang kebutuhan aplikasi anda. Dengan teknologi, akan memudahkan setiap bidang usaha / organisasi anda. Jadi, konsultasikan kebutuhan aplikasi anda bersama tim Integra Indonesia.', 'business');

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_service`
--

CREATE TABLE `h_service` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` text DEFAULT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `h_service`
--

INSERT INTO `h_service` (`id`, `title`, `description`, `img`, `category`) VALUES
(1, 'E-Goverment', 'Produk Sistem Informasi Manajemen untuk pemerintahan (e-goverment solution) dalam rangka untuk meningkatkan kinerja instansi pemerintahan dan pelayanan kepada masyarakat', 'goverment.png', 'home'),
(2, 'E-Business Solution', 'Kami membantu anda untuk menyiapkan berbagai kebutuhan teknologi berbasis digital seperti aplikasi / sistem informasi untuk mendukung kemudahan pengelolaan dan lompatan kemajuan bisnis anda', 'bisnis.png', 'home'),
(3, 'Information System', 'Pengembangan sistem informasi untuk berbagai keperluan pengelolaan data, reporting, dashboard executive, decision support system, GIS, dll yang diterapkan pada pemerintahan, pendidikan, perusahaan, dll', 'infosys.png', 'home'),
(4, 'Mobile Apps', 'Kami siap membantu mengembangkan aplikasi mobile seperti android dan IOS sesuai dengan kebutuhan anda', 'mobapp.png', 'home'),
(17, 'Solution', 'Solusi Pemanfaatan Teknologi Sesuai Kebutuhan', '', 'about'),
(18, 'Inovation', 'Inovasi Pengembangan Produk sesuai Trend Terkini', '...', 'about'),
(19, 'Integration', 'Solusi Integrasi yang mudah dengan berbagai sistem', '...', 'about'),
(20, 'Excellence', 'Kami menyiapkan produk yang unggul dan sempurna', '...', 'about');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ps_aplication`
--

CREATE TABLE `ps_aplication` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `h_contact`
--
ALTER TABLE `h_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `h_hero`
--
ALTER TABLE `h_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `h_news`
--
ALTER TABLE `h_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `h_section`
--
ALTER TABLE `h_section`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `h_service`
--
ALTER TABLE `h_service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ps_aplication`
--
ALTER TABLE `ps_aplication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `h_contact`
--
ALTER TABLE `h_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `h_hero`
--
ALTER TABLE `h_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `h_news`
--
ALTER TABLE `h_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `h_section`
--
ALTER TABLE `h_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `h_service`
--
ALTER TABLE `h_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `ps_aplication`
--
ALTER TABLE `ps_aplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
