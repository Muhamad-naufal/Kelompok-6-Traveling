-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2023 pada 08.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_nama_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_nama_admin`, `nama_lengkap`, `username_admin`, `password`) VALUES
(44, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah`
--

CREATE TABLE `daerah` (
  `id_nama_daerah` int(11) NOT NULL,
  `nama_daerah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daerah`
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
(24, 'Subang'),
(25, 'Cianjur'),
(26, 'Cirebon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_nama_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_nama_kategori`, `nama_kategori`) VALUES
(2, 'Pegunungan'),
(3, 'Pantai'),
(4, 'Kota'),
(5, 'Sejarah'),
(9, 'Danau'),
(13, 'Waduk'),
(14, 'Kuliner'),
(15, 'Taman Wisata'),
(16, 'Curug');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_nama_review` int(11) NOT NULL,
  `id_travel` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_nama_review`, `id_travel`, `id_user`, `review`, `created_at`) VALUES
(39, 35, 2325, 'Pemandangan yang bagus!', '2023-12-14 06:39:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `traveling`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `traveling`
--

INSERT INTO `traveling` (`id`, `nama_tempat`, `gambar`, `deskripsi`, `price`, `fasilitas`, `id_kategori`, `id_daerah`, `lokasi`, `created_at`) VALUES
(5, 'Gunung Galunggung', 'images/Gunung-Galunggung.jpg', '<p style=\"text-align: justify;\">Bagi warga Tasik, gunung dengan tinggi mencapai 2240 mdpl ini memiliki daya tarik tersendiri. Letusannya yang dahsyat selama 9 bulan pada tahun 1982 berdampak besar pada perubahan Kota Tasikmalaya tidak terkecuali urusan pariwisata. Gunung Galunggung menjadi salah satu destinasi favorit wisatawan baik dari Tasik maupun luar kota berkat keindahan alamnya. Aksesnya pun mudah seperti Gunung Telomoyo, sebab Anda bisa mendaki hingga ke kawah gunung dengan bantuan anak tangga.</p>\r\n<p style=\"text-align: justify;\">Terdapat dua jalur yang bisa Anda pilih yakni tangga kuning dan tangga biru yang masing-masing punya jumlah berbeda. Tangga kuning memiliki jumlah sekitar 620 anak tangga sedangkan tangga biru kurang lebih 510 anak tangga. Dari atas kawah, Anda bisa menikmati pemandangan danau sulfur berwarna hijau yang cukup luas. Selain itu, panorama Kota Tasikmalaya pun dapat terlihat jelas dari ketinggian. Di kawasan wana wisata seluas 120 hektar ini pula Anda dapat menikmati aktivitas seru lain. Misalnya seperti mengunjungi Curug Agung Galunggung, camping, atau berendam air panas di Pemandian Cipanas Galunggung. Lokasi menuju kawasan wisata Gunung Galunggung ini sendiri terletak di Jl. Ke Cipanas No.30, Linggajati, Sukaratu, Tasikmalaya. Jam operasionalnya berlangsung mulai pukul 06.00 WIB hingga 16.00 WIB.</p>', 25000, '<ol>\r\n<li>Sewa Bus Pariwisata</li>\r\n<li>Tempat duduk</li>\r\n<li>Masjid</li>\r\n<li>Warung makan</li>\r\n<li>Toilet</li>\r\n</ol>\r\n<p>&nbsp;</p>', 2, 1, 'Linggawangi, Leuwisari, Tasikmalaya Regency, West Java', '2023-12-07 13:01:35'),
(7, 'DUSUN BAMBU', 'images/sewa-perahu-di-dusun-bambu.jpg', '<p style=\"text-align: justify;\"><strong>Dusun Bambu Lembang</strong> merupakan sarana rekreasi bagi keluarga di tengah pemandangan yang indah dan asri. Memiliki lokasi seluas 15 hektar, tempat ini menjadi area ekowisata yang memadukan keselarasan budaya tradisional Sunda dalam satu wilayah.&nbsp;Tujuan berdirinya Dusun Bambu Lembang ialah guna menjadi sebuah taman wisata sekaligus sarana edukasi mengenai budaya tradisional pada kehidupan modern bagi pengunjung.</p>\r\n<p style=\"text-align: justify;\">Oleh karena itu, lokasi ini sering menjadi pilihan keluarga untuk berlibur, terutama dari luar Kota Bandung.&nbsp;Tak hanya berupa taman rekreasi saja, di Dusun Bambu Lembang juga tersedia penginapan dengan suasana yang romantis. Pengunjung yang hendak bermalam bersama keluarga, dapat menyewa Villa dengan beberapa pilihan tipe yang tersedia.</p>', 20000, '<ol>\r\n<li>Restoran</li>\r\n<li>Taman&nbsp;</li>\r\n<li>Shuttle Gratis</li>\r\n<li>Pasar Khatulistiwa&nbsp;</li>\r\n<li>Bamboo Playground</li>\r\n</ol>', 2, 23, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.8302534221402!2d107.57525400984085!3d-6.790499566380517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e18bdbcb51d9%3A0x86ddef582346b19e!2sDusun%20Bambu!5e0!3m2!1sid!2sid!4v1701950908449!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-07 13:01:35'),
(8, 'Pantai Santolo', 'images/wisata-pantai-dekat-bandung-1.jpg', '<p style=\"text-align: justify;\"><strong>Pantai Santolo</strong> terletak di Desa Pameungpuek, Kecamatan Cikelet, Kabupaten Garut, Jawa Barat. Kawasan Pantai Santolo merupakan destinasi wisata popuper di Garut dan cukup dikenal di Kota Bandung. Sehingga, banyak wisatawan nusantara maupun mancanegara yang datang ke pantai berpasir putih ini untuk menghabiskan waktu liburan bersama keluarga maupun teman.</p>\r\n<p style=\"text-align: justify;\">Pantai Santolo terletak pada ketinggian 0-200 meter di atas permukaan laut. Air pantai berwarna biru dengan hembusan angin sedang sehingga sangat nyaman dan menyejukkan. Pantai Santolo juga merupakan tempat berkumpulnya para nelayan tradisional serta dermaga kapal ikan yang terdapat di Pameungpeuk. Kawasan pantai memiliki pemandangan yang memukau, yaitu di sebelah kanan berupa pepohonan hijau yang menutupi kaki Gunung Papandayan.</p>', 12000, '<ol>\r\n<li>Parkir yang luas</li>\r\n<li>Toilet umum</li>\r\n<li>Musholla</li>\r\n<li>Restoran</li>\r\n<li>Penginapan</li>\r\n<li>Perahu Sewa</li>\r\n<li>Tempat Pemancingan</li>\r\n</ol>', 3, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2024812.7040177546!2d107.15617767465581!3d-7.606252711702682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6616140366a15d%3A0xb2758ff514ffcd!2sSantolo%20Beach!5e0!3m2!1sen!2sid!4v1701089955937!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-07 13:01:35'),
(11, 'Taman Safari Indonesia', 'images/Taman Safari Indonesia.png', '<p>Taman Safari Indonesia adalah tempat wisata keluarga berwawasan lingkungan yang berorientasi pada habitat satwa di alam bebas. Taman Safari Indonesia terletak di Desa Cibeureum Kecamatan Cisarua, Kabupaten Bogor, Jawa Barat atau yang lebih dikenal dengan kawasan Puncak. Taman ini berfungsi menjadi penyangga Taman Nasional Gunung Gede Pangrango di ketinggian 900&ndash;1800 m di atas permukaan laut, serta mempunyai suhu rata-rata 16 - 24 derajat Celsius.</p>\r\n<p>Keunikan tempat wisata ini dari kebun binatang lainnya di Indonesia adalah pengunjungnya bisa berkeliling ke berbagai tempat untuk bisa melihat dari dekat semua jenis binatang dengan memakai mobil pribadi ataupun naik bus yang sudah disediakan pihak pengelola Taman Safari. Pengunjung juga bisa berinteraksi langsung dengan memberi makan hewan-hewan tersebut.</p>', 225000, '<p>Safari, pertunjukan satwa, wahana permainan, area bermain anak, restoran, toko suvenir.</p>', 15, 15, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.402432675928!2d106.948260574187!3d-6.720649193275253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b5cf14e6ee83%3A0x6586bb20b8f11d9!2sTaman%20Safari%20Indonesia%20Bogor!5e0!3m2!1sid!2sid!4v1702177072233!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:37:20'),
(12, 'Gunung Tangkuban Parahu', 'images/tangkuban perahu.png', '<p>Gunung Tangkuban Perahu adalah salah satu gunung berapi aktif yang terletak di Bandung, Jawa Barat. Gunung ini termasuk ke dalam jenis gunung stratovulcano dengan pusat erupsi gunung berpindah dari timur ke barat. Gunung ini memiliki ketinggian sekitar 2.084 m di atas permukaan laut. Gunung Tangkuban Perahu memiliki hamparan pohon pinus dan perkebunan teh yang menyelimuti di sekitarnya, menjadikan tempat ini memiliki udara yang sejuk dan pemandangan yang indah.</p>', 20000, '<p>Area parkir, warung makan, Mushola toko suvenir.</p>', 2, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31696.67031412478!2d107.589181004253!3d-6.7596371171550516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1ddc59713db%3A0xa01c96b73428fedc!2sTangkuban%20Perahu!5e0!3m2!1sen!2sid!4v1702177800022!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:41:26'),
(13, 'Kawah Putih Ciwidey', 'images/Kawah putih Ciwidey.png', '<p>Kawah Putih adalah sebuah tempat wisata di Jawa Barat yang terletak di Desa Alam Endah, Kecamatan Rancabali, Kabupaten Bandung Jawa Barat yang terletak di kaki Gunung Patuha. Kawah putih merupakan sebuah danau yang terbentuk dari letusan Gunung Patuha. Tanah yang bercampur belerang di sekitar kawah ini berwarna putih, lalu warna air yang berada di kawah ini berwarna putih kehijauan, yang unik dari kawah ini adalah airnya kadang berubah warna. Danau Kawah Putih sendiri berada pada ketinggian 2194 m tapi luas total Danau Kawah Putih 25 ha yang dipakai wisata 5 ha dan lokasi kawah sendiri 3 ha.</p>\r\n<p>Perairannya yang berwarna biru kristal berubah dengan kondisi cuaca, dan dilapisi dengan pasir putih halus, memberikan pengunjung pengalaman dunia lain. Bahkan vegetasi di sekitar area ini sangat berbeda dengan yang di bawah.</p>', 26000, '<p>Area parkir, penjualan makanan dan minuman, penyewaan perahu.</p>', 9, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.326057873507!2d107.40085218838446!3d-7.166154048209642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e688c1383dc510f%3A0xfab41bb8e4a3a83e!2sWhite%20Crater!5e0!3m2!1sen!2sid!4v1702178139682!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:43:59'),
(14, 'Pantai Pangandaran', 'images/Pantai Pangandaran.png', '<p>Pantai Pangandaran adalah salah satu pantai terbaik di Kabupaten Pangandaran yang letaknya berada paling selatan Jawa Barat dan berbatasan langsung dengan Samudera Hindia, tidak heran jika destinasi wisata ini tak pernah absen oleh wisatawan lokal maupun mancanegara. Pantai ini merupakan icon pariwisata di Kabupaten Pangandaran.<br>Keistimewaan yang menjadi daya tarik wisatanya pengunjung dapat menikmati sunrise dan sunset dari satu wilayah yang sama. Tidak hanya panorama alam dan pantai, di Pangandaran juga terdapat sebuah Taman Wisata Alam yang menjadi kawasan konservasi beberapa flora dan fauna. Di lokasi tersebut juga terdapat situs peninggalan massa kerajaan Hindu Budha yaitu Prasasti Batu Kalde, Nanndi dan Yoni serta beberapa Goa alami dan buatan</p>', 15000, '<p>Penginapan, warung makan, penyewaan peralatan air.</p>', 2, 18, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126524.93356669103!2d108.47692908705142!3d-7.693432657367414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65987adb093d71%3A0xe033ec8ca217e8c1!2sPangandaran%20Beach!5e0!3m2!1sen!2sid!4v1702178286647!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:45:14'),
(15, 'Kampung Daun', 'images/Kampung Daun.png', '<p>Kampung Daun adalah restoran di tengah kebun dengan saung-saung bambu tradisional.&nbsp;<br>Terletak sekitar 15 km dari Alun-Alun Kota Bandung, Kampung Daun Culture Galley &amp; Cafe ini beralamat di Jalan Villa Triniti, Kecamatan Parongpong, Kabupaten Bandung Barat. Karena terletak di dataran yang cukup tinggi, Kampung Daun menawarkan pemandangan yang indah dan udara yang sejuk bernuansa pedesaan.</p>', 10000, '<p>Tempat makan, pertunjukan seni, kebun, souvenir shop.</p>', 14, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6060837215587!2d107.58521448885496!3d-6.817671499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e16e4557fd35%3A0x4940614b099d73e2!2sKampung%20Daun%20Culture%20Gallery%20%26%20Cafe!5e0!3m2!1sen!2sid!4v1702178919702!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:46:20'),
(16, 'Situ Patenggang', 'images/Situ Patenggang.png', '<p>Situ Patenggang atau Situ Patengan adalah suatu danau yang terletak di kawasan objek wisata alam Bandung Selatan, Jawa Barat, Indonesia, tepatnya di Ciwidey. Terletak di ketinggian 1600 meter di atas permukaan laut, danau ini memiliki pemandangan yang sangat eksotik. Situ patenggang juga memiliki pemandangan alam yang asri dengan hamparan kebun the.</p>\r\n<p>Luas Situ Patenggang sekitar 63 hektar. Serta total luas cagar alamnya mencapai 121 hektar. Situ patenggang menjadi pilihan wisatawan terutama bagi mereka yang baru pulang dari tempat wisata Kawah Putih. Jaraknya dari wisata kawah putih hanya sekitar 12 km dan membutuhkan waktu sekitar 30 menit.</p>', 25000, '<p>Area parkir, perahu sewa, warung makan, toko suvenir.</p>', 9, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7917.284445282673!2d107.35252308807274!3d-7.1672928213495855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e688bc0fb5ad637%3A0x2585812940b0a366!2sPatenggang%20Lake!5e0!3m2!1sen!2sid!4v1702179038677!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:47:37'),
(17, 'Situ Cileunca', 'images/Situ Cileunca.png', '<p>Situ Cileunca adalah sebuah danau yang ada di daerah Pangalengan Kabupaten Bandung. Danau ini merupakan danau buatan yang memiliki luas sekitar 1.400 hektar tetapi area yang terpakai sarana wisata yaitu 1.000 hektar, dengan dikelilingi bukitbukit dan berlatar belakang pegunungan. Situ Cileunca berada 45 km sebelah selatan Kota Bandung dan 185 km dari Kota Jakarta, Situ Cileunca berada di ketinggian 1550 M dpl dan dikelilingi oleh dua perkebunan teh Malabar yang dikelola oleh PTPN VIII.</p>', 6000, '<p>Area parkir, penyewaan perahu dan perlengkapan air, warung makan.</p>', 9, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31667.32459404258!2d107.52995590456109!3d-7.193332689951854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e689142075b6805%3A0x217fbdfc77613f75!2sSitu%20Cileunca!5e0!3m2!1sen!2sid!4v1702179380738!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:48:52'),
(18, 'Situ Gunung', 'images/Situ Gunung Sukabumi.png', '<p>Situ Gunung bisa menjadi tujuan ketika Anda berlibur ke Sukabumi. Lokasinya berada di ketinggian 850 mdpl, tepatnya di kaki gunung Gede Pangrango. Wisata satu ini berada di dalam kawasan Taman Nasional Gunung Gede Pangrango.<br>Udara yang sejuk dan pemandangan hijau akan menyambut wisatawan yang berkunjung. Tidak ada deru kendaraan atau suara klakson, yang ada hanya suara alam dan sesekali cuitan burung.</p>', 50000, '<p>Area parkir, trekking trails, kantin.</p>', 2, 3, 'Link gmaps : <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.437838291435!2d106.91903197083163!3d-6.837994178043153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d7b1c4d5770e267%3A0x2cbd292e5b05648c!2sSitu%20Gunung%20Sukabumi!5e0!3m2!1sen!2sid!4v1702179631458!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:50:07'),
(19, 'Situ Bagendit', 'images/Situ Bagendit.png', '<p>Situ Bagendit adalah salah satu destinasi wisata favorit di Kabupaten Garut. Selain sebagai daya tarik wisata, situ yang berlokasi di Desa Bagendit, Kecamatan Banyuresmi ini juga menjadi salah satu sumber air bagi masyarakat sekitar.<br>Baru-baru ini juga objek wisata Situ Bagendit melakukan pembaruan pada penampilannya. Para pengunjung dapat melakukan berbagai wisata rekreasi di Situ Bagendit ini.</p>', 20000, '<p>Area parkir, area bermain anak, warung makan, gazebo piknik.</p>', 9, 19, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31669.58659494166!2d107.92078920453733!3d-7.16083269198682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b6ad62bb7ebd%3A0xe6c00fe24bcfb64b!2sDanau%20Bagendit!5e0!3m2!1sen!2sid!4v1702179794289!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:51:41'),
(20, 'Telaga Remis', 'images/Telaga Remis.png', '<p>Telaga Remis merupakan danau alami yang terletak di bawah kaki Gunung Ciremai. Danau ini memiliki luas area sekitar 13 hektar secara keseluruhan dengan luas telaga mencapai 3,35 hektar. Telaga Remis terdiri dari dua kata, yaitu telaga dan remis. Telaga berasal dari bahasa Sunda yang berarti danau, sedangkan remis sejenis kerang yang berwarna kuning yang hidup di sekitar telaga. Telaga Remis memiliki suasana yang asri dengan udara sejuk di tengah pepohonan, kawasan ini sangat pas untuk melepas kepenatan..</p>', 10000, '<p>Area parkir, gazebo piknik, warung makan.</p>', 9, 19, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31694.7664404336!2d108.39495590427299!3d-6.78861051533456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f21db52ddb5cd%3A0x86aa4d53c8ba920!2sTelaga%20Remis!5e0!3m2!1sen!2sid!4v1702179967908!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:53:12'),
(21, 'Bunga Puncak Cipanas Cianjur', 'images/kota bunga cipanas.png', '<p>&nbsp;Cipanas adalah sebuah kecamatan di kabupaten Cianjur, Jawa Barat, Indonesia dengan Luas Wilayah 58,03 km&sup2; dan jumlah penduduk 91.405 jiwa. Sebagian besar wilayah Cipanas masuk ke dalam Kawasan Wisata Puncak, bagian Utara Cipanas berbatasan langsung dengan Daerah Jonggol, Bogor; di sisi barat berbatasan langsung dengan Kawasan Perkebunan Teh Puncak, Bogor dan Pegunungan Jonggol; sementara di selatan terdapat Taman Nasional Gunung Gede Pangrango. Kecamatan ini memiliki sebuah Istana Kepresidenan yaitu Istana Cipanas.</p>', 30000, '<p>Penginapan, restoran, tempat perbelanjaan, kebun teh.</p>', 15, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7925.246530427268!2d107.03112867770994!3d-6.69349639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b164db92a9ed%3A0x2945190fdfa7a3a!2sLittle%20Venice%20Kota%20Bunga!5e0!3m2!1sen!2sid!4v1702279315007!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:55:20'),
(22, 'Taman Nasional Gunung Gede Pangrango', 'images/Taman Nasional Gunung Gede Pangrango.png', '<p>Taman Nasional Gunung Gede Pangrango (TNGGP) adalah salah satu taman nasional yang terletak di Provinsi Jawa Barat. Ditetapkan pada tahun 1980, taman nasional ini merupakan salah satu yang tertua di Indonesia. TN Gunung Gede Pangrango terutama didirikan untuk melindungi dan mengkonservasi ekosistem dan flora pegunungan yang cantik di Jawa Barat. Dengan luas 24.270,80 hektare, wilayahnya terutama mencakup dua puncak gunung Gede dan Pangrango beserta tutupan hutan pegunungan di sekelilingnya.</p>', 34000, '<p>Pemandu wisata, trekking trails, area konservasi, kantin.</p>', 2, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.266730247267!2d107.00069427073043!3d-6.737280650951993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b3c067e3b2cb%3A0x5c35f2d5fc94ed51!2sMount%20Gede%20Pangrango%20National%20Park!5e0!3m2!1sen!2sid!4v1702279875089!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 11:59:12'),
(23, 'Taman Nasional Gunung Halimun-Salak', 'images/Taman Nasional Halimun Salak.png', '<p>Taman Nasional Gunung Halimun&ndash;Salak (TNGHS) adalah salah satu taman nasional yang terletak di Jawa bagian barat. Kawasan konservasi dengan luas 113.357 hektare ini menjadi penting karena melindungi hutan hujan dataran rendah yang terluas di daerah ini, dan sebagai wilayah tangkapan air bagi kabupaten-kabupaten di sekelilingnya. Dengan lingkup wilayah yang bergunung-gunung, dua puncaknya yang tertinggi adalah Gunung Halimun (1.929 m) dan Gunung Salak (2.211 m). Lebih dari 700 jenis tumbuhan berbunga hidup di hutan alam di dalam TNGHS, dan keberadaan beberapa jenis fauna penting yang dilindungi di sini seperti elang jawa, macan tutul jawa, owa jawa, surili, dan lain-lain. Kawasan TNGHS dan sekitarnya juga merupakan tempat tinggal beberapa kelompok masyarakat adat, antara lain masyarakat adat Kasepuhan Banten Kidul dan masyarakat Baduy.</p>', 15000, '<p>Pemandu wisata, trekking trails, konservasi alam.</p>', 2, 15, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253603.68260569609!2d106.17575478671871!3d-6.701589099999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4278de3174df9b%3A0x5d3795f6f58e6bda!2sTaman%20Nasional%20Gunung%20Halimun%20Salak!5e0!3m2!1sen!2sid!4v1702280126159!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:01:23'),
(24, 'Floating Market Lembang', 'images/Floating Market Lembang.png', '<p>Floating Market Lembang atau pasar apung menjadi salah satu tempat wisata yang banyak dikunjungi oleh para wisatawan di Lembang, Bandung. Tepatnya di Jl. Grand Hotel Nomor 33 E, Lembang, Kabupaten Bandung Barat, Jawa Barat. Tempat wisata alam yang satu ini memiliki keunikan tersendiri, selain pasar apung, pemandangan juga yang memesona. Pasar apung yang berada di atas danau tersebut menjajakan berbagai pilihan kuliner yang dapat kamu cicipi. Tidak hanya kuliner, di pasar apung ini juga tersedia berbagai jenis sayuran yang dapat kamu beli sebagai buah tangan atau untuk kebutuhan rumah.</p>', 35000, '<p>Warung makan terapung, perahu sewa, pertunjukan seni, area bermain anak.</p>', 14, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.599097596333!2d107.61591982419134!3d-6.81851656669201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e11c4a9d27e5%3A0x7bcd1ace08104f55!2sFloating%20Market%20Lembang!5e0!3m2!1sen!2sid!4v1702280524958!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:02:31'),
(25, 'Dusun Bambu Family Leisure Park', 'images/Dusun Bambu Family Leisure Park.png', '<p>Merupakan salah satu destinasi wisata populer di Kabupaten Bandung, karena menawarkan paket komplit. Pengunjung bisa menjumpai restoran khas Sunda, penginapan, wahana, danau, serta pemandangan alam yang menawan. Berada di bawah kaki Gunung Burangrang, Dusun Bambu menawarkan udara segar serta pemandangan hijau. Tak heran jika Dusun Bambu banyak dikunjungi wisatawan.</p>', 20000, '<p>Restoran, saung bambu, area bermain anak, kebun sayur.</p>', 2, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.830253421908!2d107.5752593741909!3d-6.790499566408719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e18bdbcb51d9%3A0x86ddef582346b19e!2sDusun%20Bambu!5e0!3m2!1sen!2sid!4v1702280661511!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:03:52'),
(26, 'Cibadak Night Culinary', 'images/Cibadak Culinary Village.png', '<p>Nuansa Cina membalut kegiatan Cibadak Culinary Night di Bandung. Ribuan masyarakat datang bergelombang ke lokasi acara sambil memburu sajian ragam menu khas oriental dan tradisional.<br>Konsep kuliner malam ini berlangsung di Jalan Cibadak, Kecamatan Astanaanyar, Kota Bandung, Sabtu (22/2/2014), mulai pukul 18.00 hingga pukul 24.00 WIB. Ruas jalan sepanjang 300 meter itu ditutup selama kegiatan.</p>', 5000, '<p>Warung makan, area duduk, pertunjukan seni.</p>', 14, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.740800797692!2d107.59802947419284!3d-6.921557967744902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e618f5912ad1%3A0xac6c5684f32503e!2sCibadak%20Night%20Culinary%20Festival!5e0!3m2!1sen!2sid!4v1702280938063!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:08:18'),
(27, 'Candi Cangkuang', 'images/Candi Cangkuang.png', '<p>Candi Cangkuang adalah sebuah candi Hindu yang terdapat di Kampung Pulo, wilayah Cangkuang, Kecamatan Leles, Garut, Jawa Barat. Candi inilah juga yang pertama kali ditemukan di Tatar Sunda serta merupakan satu-satunya candi Hindu di Tatar Sunda. Candi ini terletak bersebelahan dengan makam Embah Dalem Arief Muhammad, sebuah makam kuno pemuka agama Islam yang dipercaya sebagai leluhur penduduk Desa Cangkuang.</p>', 15000, '<p>Area parkir, area piknik, pusat informasi.</p>', 5, 19, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1918114777322!2d107.91798502419572!3d-7.103755719649101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b619aaaaaaab%3A0xb5fa65dc245124c3!2sCandi%20Cangkuang!5e0!3m2!1sen!2sid!4v1702281487048!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:09:50'),
(28, 'Museum Konferensi Asia Afrika (Bandung)', 'images/Museum Konferensi Asia Afrika.png', '<p>Museum Konferensi Asia-Afrika terletak di sebuah bangunan bersejarah, yang dikenal sebagai Gedung Merdeka. Gedung Merdeka merupakan tempat Konferensi Asia-Afrika (KAA) berlangsung selama 18-24 April 1955. Melalui museum ini, pengunjung dapat memahami lebih dalam tentang Konferensi Asia-Afrika yang menjadi tonggak sejarah dalam perjuangan kemerdekaan dan kerja sama antara negara-negara di Asia dan Afrika. Museum KAA juga merupakan tempat yang menarik bagi penggemar sejarah, budaya, dan diplomasi internasional untuk mengenal lebih lanjut tentang hubungan antara negara-negara di Asia dan Afrika.</p>', 5000, '<p>Pameran, ruang konferensi, toko suvenir.</p>', 5, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.743538976296!2d107.60701037419284!3d-6.9212316677415435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62f1591964f%3A0xed1630ec8b20a472!2sMuseum%20Konferensi%20Asia%20Afrika!5e0!3m2!1sen!2sid!4v1702281768447!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:11:51'),
(29, 'Kota Tua Cirebon', 'images/Kota Tua Cirebon.png', '<p>salah satu wilayah yang ada di Jawa Barat, dikenal juga sebagai Kota Udang, memiliki berbagai tempat wisata yang cukup hits.<br>Ada bangunan yang tidak kalah dengan Kota Tua Jakarta atau di Semarang, Cirebon juga memiliki bangunan tua bersejarah bernama Kota Tua Cirebon dari Gedung British American Tobacco atau Gedung BAT.</p>', 10000, '<p>Pemandu wisata, area parkir, warung makan</p>', 5, 26, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4156283682933!2d108.56698837418989!3d-6.7190297656918245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee27d7cab67d7%3A0x5e0161d4f0d9d530!2sBritish%20American%20Tobacco%20Building!5e0!3m2!1sen!2sid!4v1702282029566!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:13:56'),
(30, 'Kebun Raya Bogor', 'images/Kebun Raya Bogor.jpg', '<p>Kebun Raya Bogor atau Kebun Botani Bogor adalah sebuah kebun botani besar yang terletak di Kota Bogor, Indonesia. Luasnya mencapai 87 hektare dan memiliki 15.000 jenis koleksi pohon dan tumbuhan.<br>Saat ini Kebun Raya Bogor ramai dikunjungi sebagai tempat wisata, terutama hari Sabtu dan Minggu. Di sekitar Kebun Raya Bogor tersebar pusat-pusat keilmuan yaitu Herbarium Bogoriense, Museum Zoologi Bogor, dan PUSTAKA.</p>', 15000, '<p>Pemandu wisata, restoran, pusat penelitian, area bermain anak.</p>', 15, 15, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.395875995048!2d106.79699487418807!3d-6.597623564493141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c412a67abb%3A0x75f23c6b45a37ee5!2sBogor%20Botanical%20Gardens!5e0!3m2!1sen!2sid!4v1702376433060!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-12 12:17:16'),
(31, 'Curug Cimahi', 'images/curug cimahi.png', '<p>Curug Cimahi, juga dikenal sebagai Air Terjun Pelangi, merupakan air terjun setinggi sekitar 87 meter dengan pemandangan alam yang indah.</p>', 15000, '<p>Area parkir, warung makan, spot foto, trekking.</p>', 16, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014211.247174359!2d106.42247074687499!3d-6.798701099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1f7e3b09c73%3A0xf289999555b21387!2sRainbow%20Waterfall!5e0!3m2!1sen!2sid!4v1702467599155!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 11:43:16'),
(32, 'Curug Malela', 'images/curug malela.png', '<p>Curug Malela adalah air terjun yang terletak di tengah hutan yang sejuk, dikelilingi oleh kebun teh dan pepohonan hijau.</p>', 20000, '<p>Area parkir, trekking, area piknik.</p>', 16, 17, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.696085618536!2d107.19691473492034!3d-7.018217090664567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6859502d1faae5%3A0x637a7f90a74e56e2!2sMalela%20waterfall!5e0!3m2!1sen!2sid!4v1702467877101!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 11:45:40'),
(33, 'Curug Cikaso', 'images/curug cikaso.png', '<p>Curug Cikaso terkenal dengan tiga air terjun yang indah dan airnya yang jernih. Terletak di tengah hutan yang alami.</p>', 18000, '<p>Area parkir, perahu wisata, area piknik.</p>', 16, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.941368787818!2d106.61500307419965!3d-7.360469472423876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6803ed47e2eb67%3A0x51bcada251eb2d6d!2sCikaso%20Waterfall!5e0!3m2!1sen!2sid!4v1702468154247!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 11:50:47'),
(34, 'Curug Cipamingkis', 'images/curug cipamingkis.png', '<p>Curug Cipamingkis menawarkan pemandangan alam yang indah dan air terjun yang menarik.</p>', 25000, '<p>Area parkir, trekking, gazebo piknik.</p>', 16, 23, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0461104241645!2d107.00806277418866!3d-6.641196464920602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b0b5e9e0bb67%3A0xfc7c6143e53ee6fc!2sCurug%20Cipamingkis%2C%20Jonggol!5e0!3m2!1sen!2sid!4v1702468330991!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 11:52:49'),
(35, 'Curug Lawe', 'images/Curug lawe.png', '<p>Curug Cipamingkis menawarkan pemandangan alam yang indah dan air terjun yang menarik.</p>', 15000, '<p>Area parkir, trekking, gazebo piknik.</p>', 16, 19, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506747.09814053815!2d109.15343567343753!3d-7.130426599999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701b2b1d337519%3A0xfb97c96a4485dde3!2sCurug%20Lawe!5e0!3m2!1sen!2sid!4v1702468412275!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 11:55:30'),
(36, 'Kota Bandung', 'images/kota bandung.png', '<p>Bandung adalah ibu kota Jawa Barat yang terkenal dengan atmosfer kreatifnya, pusat perbelanjaan, dan kulinernya yang beragam.</p>', 0, '<p>Hotel dan penginapan, pusat perbelanjaan, restoran dan kafe, museum, taman kota.</p>', 4, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60965071902!2d107.56075478529164!3d-6.90327195146255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1702468582745!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 11:58:44'),
(37, 'Kota Bogor', 'images/kota bogor.png', '<p>Bogor dikenal dengan istana presidensialnya, Kebun Raya Bogor, dan cuaca sejuknya. Kota ini memiliki pesona sejarah dan alam yang kaya.</p>', 0, '<p>Hotel dan penginapan, Kebun Raya Bogor, Istana Bogor, taman kota, pusat perbelanjaan.</p>', 4, 15, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.33545458298!2d106.70948923048539!3d-6.595016202899872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7ad0f824b%3A0x4c71fd1b0b8ae76d!2sBogor%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1702468789504!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-12-13 12:00:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_nama_user` int(11) NOT NULL,
  `nama_lengkap_user` varchar(255) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_nama_user`, `nama_lengkap_user`, `username_user`, `password`) VALUES
(1, 'Muhammad Fauzan Ansyori', 'Fauzan', '123'),
(2324, 'Annisa Sumayyah', 'annisasy', '827ccb0eea8a706c4c34a16891f84e7b'),
(2325, 'Muhamad Naufal', 'naufal', '827ccb0eea8a706c4c34a16891f84e7b'),
(2326, 'Maieka Sari', ' maieka', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_like`
--

CREATE TABLE `user_like` (
  `id_like` int(11) NOT NULL,
  `id_user_like` int(11) NOT NULL,
  `id_travel_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_like`
--

INSERT INTO `user_like` (`id_like`, `id_user_like`, `id_travel_like`) VALUES
(49, 2324, 20),
(48, 2324, 29),
(47, 2324, 36),
(51, 2325, 35),
(50, 2325, 36);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_nama_admin`);

--
-- Indeks untuk tabel `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_nama_daerah`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_nama_kategori`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_nama_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_travel` (`id_travel`);

--
-- Indeks untuk tabel `traveling`
--
ALTER TABLE `traveling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_nama_user`);

--
-- Indeks untuk tabel `user_like`
--
ALTER TABLE `user_like`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_user_like` (`id_user_like`,`id_travel_like`),
  ADD KEY `id_travel_like` (`id_travel_like`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_nama_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_nama_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_nama_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_nama_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `traveling`
--
ALTER TABLE `traveling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_nama_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2327;

--
-- AUTO_INCREMENT untuk tabel `user_like`
--
ALTER TABLE `user_like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_nama_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_travel`) REFERENCES `traveling` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `traveling`
--
ALTER TABLE `traveling`
  ADD CONSTRAINT `traveling_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `traveling_ibfk_6` FOREIGN KEY (`id_daerah`) REFERENCES `daerah` (`id_nama_daerah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_like`
--
ALTER TABLE `user_like`
  ADD CONSTRAINT `user_like_ibfk_1` FOREIGN KEY (`id_user_like`) REFERENCES `user` (`id_nama_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_like_ibfk_2` FOREIGN KEY (`id_travel_like`) REFERENCES `traveling` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
