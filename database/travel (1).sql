-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 02:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_nama_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_nama_admin`, `nama_lengkap`, `username`, `password`) VALUES
(2, 'Fauzan', 'fauzan', 'fauzan123'),
(39, 'Maieka Sari', 'Mai', 'Maikea'),
(42, 'sasa', 'hoi', '2a719a70f75d3a6680bf4d444258f64f');

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id_nama_daerah` int(11) NOT NULL,
  `nama_daerah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id_nama_daerah`, `nama_daerah`) VALUES
(1, 'Tasikmalaya'),
(3, 'Sukabumi'),
(7, 'Bandung'),
(12, 'Banjar'),
(13, 'Depok'),
(14, 'Cimahi'),
(15, 'Bogor'),
(16, 'Bekasi'),
(17, 'Majalengka'),
(18, 'Pangandaran'),
(19, 'Garut'),
(20, 'Ciamis'),
(21, 'Karawang'),
(22, 'Kuningan'),
(23, 'Purwakarta'),
(24, 'Subang');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_nama_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_nama_kategori`, `nama_kategori`) VALUES
(2, 'Pegunungan'),
(3, 'Pantai'),
(4, 'Kota'),
(5, 'Sejarah'),
(9, 'Danau'),
(13, 'Waduk'),
(14, 'Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_nama_review` int(11) NOT NULL,
  `id_travel` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_nama_review`, `id_travel`, `id_user`, `review`, `created_at`) VALUES
(30, 7, 1, 'hai guys', '2023-12-05 10:10:40'),
(32, 5, 2317, 'hii', '2023-12-05 12:17:07'),
(33, 8, 2317, 'halo', '2023-12-07 12:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `traveling`
--

CREATE TABLE `traveling` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `price` int(20) NOT NULL,
  `fasilitas` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traveling`
--

INSERT INTO `traveling` (`id`, `nama_tempat`, `gambar`, `deskripsi`, `price`, `fasilitas`, `id_kategori`, `id_daerah`, `lokasi`, `created_at`) VALUES
(5, 'Gunung Galunggung', 'images/Gunung-Galunggung.jpg', '<p style=\"text-align: justify;\">Bagi warga Tasik, gunung dengan tinggi mencapai 2240 mdpl ini memiliki daya tarik tersendiri. Letusannya yang dahsyat selama 9 bulan pada tahun 1982 berdampak besar pada perubahan Kota Tasikmalaya tidak terkecuali urusan pariwisata. Gunung Galunggung menjadi salah satu destinasi favorit wisatawan baik dari Tasik maupun luar kota berkat keindahan alamnya. Aksesnya pun mudah seperti Gunung Telomoyo, sebab Anda bisa mendaki hingga ke kawah gunung dengan bantuan anak tangga.</p>\r\n<p style=\"text-align: justify;\">Terdapat dua jalur yang bisa Anda pilih yakni tangga kuning dan tangga biru yang masing-masing punya jumlah berbeda. Tangga kuning memiliki jumlah sekitar 620 anak tangga sedangkan tangga biru kurang lebih 510 anak tangga. Dari atas kawah, Anda bisa menikmati pemandangan danau sulfur berwarna hijau yang cukup luas. Selain itu, panorama Kota Tasikmalaya pun dapat terlihat jelas dari ketinggian. Di kawasan wana wisata seluas 120 hektar ini pula Anda dapat menikmati aktivitas seru lain. Misalnya seperti mengunjungi Curug Agung Galunggung, camping, atau berendam air panas di Pemandian Cipanas Galunggung. Lokasi menuju kawasan wisata Gunung Galunggung ini sendiri terletak di Jl. Ke Cipanas No.30, Linggajati, Sukaratu, Tasikmalaya. Jam operasionalnya berlangsung mulai pukul 06.00 WIB hingga 16.00 WIB.</p>', 25000, '<ol>\r\n<li>Sewa Bus Pariwisata</li>\r\n<li>Tempat duduk</li>\r\n<li>Masjid</li>\r\n<li>Warung makan</li>\r\n<li>Toilet</li>\r\n</ol>\r\n<p>&nbsp;</p>', 2, 1, 'Linggawangi, Leuwisari, Tasikmalaya Regency, West Java', '2023-12-07 13:01:35'),
(7, 'DUSUN BAMBU', 'images/sewa-perahu-di-dusun-bambu.jpg', '<p style=\"text-align: justify;\"><strong>Dusun Bambu Lembang</strong> merupakan sarana rekreasi bagi keluarga di tengah pemandangan yang indah dan asri. Memiliki lokasi seluas 15 hektar, tempat ini menjadi area ekowisata yang memadukan keselarasan budaya tradisional Sunda dalam satu wilayah.&nbsp;Tujuan berdirinya Dusun Bambu Lembang ialah guna menjadi sebuah taman wisata sekaligus sarana edukasi mengenai budaya tradisional pada kehidupan modern bagi pengunjung.</p>\r\n<p style=\"text-align: justify;\">Oleh karena itu, lokasi ini sering menjadi pilihan keluarga untuk berlibur, terutama dari luar Kota Bandung.&nbsp;Tak hanya berupa taman rekreasi saja, di Dusun Bambu Lembang juga tersedia penginapan dengan suasana yang romantis. Pengunjung yang hendak bermalam bersama keluarga, dapat menyewa Villa dengan beberapa pilihan tipe yang tersedia.</p>', 20000, '<ol>\r\n<li>Restoran</li>\r\n<li>Taman&nbsp;</li>\r\n<li>Shuttle Gratis</li>\r\n<li>Pasar Khatulistiwa&nbsp;</li>\r\n<li>Bamboo Playground</li>\r\n</ol>', 9, 23, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.8302534221402!2d107.57525400984085!3d-6.790499566380517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e18bdbcb51d9%3A0x86ddef582346b19e!2sDusun%20Bambu!5e0!3m2!1sid!2sid!4v1701950908449!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-07 13:01:35'),
(8, 'Pantai Santolo', 'images/wisata-pantai-dekat-bandung-1.jpg', '<p style=\"text-align: justify;\"><strong>Pantai Santolo</strong> terletak di Desa Pameungpuek, Kecamatan Cikelet, Kabupaten Garut, Jawa Barat. Kawasan Pantai Santolo merupakan destinasi wisata popuper di Garut dan cukup dikenal di Kota Bandung. Sehingga, banyak wisatawan nusantara maupun mancanegara yang datang ke pantai berpasir putih ini untuk menghabiskan waktu liburan bersama keluarga maupun teman.</p>\r\n<p style=\"text-align: justify;\">Pantai Santolo terletak pada ketinggian 0-200 meter di atas permukaan laut. Air pantai berwarna biru dengan hembusan angin sedang sehingga sangat nyaman dan menyejukkan. Pantai Santolo juga merupakan tempat berkumpulnya para nelayan tradisional serta dermaga kapal ikan yang terdapat di Pameungpeuk. Kawasan pantai memiliki pemandangan yang memukau, yaitu di sebelah kanan berupa pepohonan hijau yang menutupi kaki Gunung Papandayan.</p>', 12000, '<ol>\r\n<li>Parkir yang luas</li>\r\n<li>Toilet umum</li>\r\n<li>Musholla</li>\r\n<li>Restoran</li>\r\n<li>Penginapan</li>\r\n<li>Perahu Sewa</li>\r\n<li>Tempat Pemancingan</li>\r\n</ol>', 3, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2024812.7040177546!2d107.15617767465581!3d-7.606252711702682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6616140366a15d%3A0xb2758ff514ffcd!2sSantolo%20Beach!5e0!3m2!1sen!2sid!4v1701089955937!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-07 13:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_nama_user` int(11) NOT NULL,
  `nama_lengkap_user` varchar(255) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_nama_user`, `nama_lengkap_user`, `username_user`, `password`) VALUES
(1, 'Muhammad Fauzan Ansyori', 'Fauzan', '123'),
(2317, 'nopal', 'naufali', 'opal123'),
(2319, 'Naufal', 'Naufali', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_nama_admin`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_nama_daerah`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_nama_kategori`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_nama_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_travel` (`id_travel`);

--
-- Indexes for table `traveling`
--
ALTER TABLE `traveling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_nama_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_nama_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_nama_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_nama_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_nama_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `traveling`
--
ALTER TABLE `traveling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_nama_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2320;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_nama_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_travel`) REFERENCES `traveling` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `traveling`
--
ALTER TABLE `traveling`
  ADD CONSTRAINT `traveling_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `traveling_ibfk_6` FOREIGN KEY (`id_daerah`) REFERENCES `daerah` (`id_nama_daerah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
