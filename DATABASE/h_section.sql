-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 13.42
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `h_section`
--
ALTER TABLE `h_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `h_section`
--
ALTER TABLE `h_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
