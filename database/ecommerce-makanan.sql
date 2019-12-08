-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 08:23 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce-makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(2, 'Gado-Gado', 'Gado-gado adalah salah satu makanan khas Betawi yang berupa sayur-sayuran yang direbus dan dicampur jadi satu, dengan bumbu kacang atau saus dari kacang tanah dan yang dihaluskan disertai irisan telur dan pada umumnya banyak yang menambahkan kentang rebus yang sudah dihaluskan untuk saus gado gado kentang rebus dimasak bersamaan dengan bumbu kacang kemudian di atasnya ditaburi bawang goreng.\r\n\r\nMakanan ini dapat dimakan begitu saja seperti salad dengan bumbu/saus kacang, tetapi juga dapat dimakan beserta nasi putih atau kadang-kadang juga disajikan dengan lontong. Tentunya sangat cocok untuk anda yang ingin mencoba makan makanan ringan namun mengenyangkan.\r\n', 'Makanan Tidak Berkuah ', 15000, 17, 'm_gado.jpg'),
(4, 'Kerak Telor', 'Kerak telor adalah makanan asli daerah Jakarta dengan bahan-bahan beras ketan putih, telur ayam, (udang kering yang diasinkan) yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.', 'Makanan Ringan', 15000, 20, 'm_keraktelor.jpg'),
(5, 'Soto Betawi', 'Soto Betawi merupakan soto yang populer di daerah Jakarta. Daging sapi juga menjadi bahan campuran dalam soto Betawi. Kuah soto Betawi merupakan campuran santan dan susu. Kedua campuran inilah yang membuat rasa soto Betawi begitu khas.\r\n\r\nDengan rasanya yang bervariasi dari Daging sapi, dan kuahnya. Cocok dimakan dengan nasi panas.\r\n', 'Makanan Berkuah', 20000, 20, 'm_soto.jpg'),
(6, 'Kue Pancong', 'Kue pancong adalah salah satu kue yang populer sebagai kuliner khas Betawi. kue ini bentuknya hampir sama dengan kue pukis karena membuatnya menggunakan cetakan yang sama, namun cita rasa dan teksturnya berbeda. Dalam adonan kue ini tidak memakai gula.\r\n\r\nTentunya makanan ini sangat cocok untuk anda yang tidak bisa mengkonsumsi gula terlalu banyak.\r\n', 'Makanan Ringan', 10000, 20, 'm_pancong.jpg'),
(7, 'Gabus Pucung', 'Gabus pucung adalah masakan khas Betawi yang diolah dari bahan baku ikan gabus dengan kuah warna hitam. Gabus pucung adalah gabungan nama dari kata \"gabus\" dan \"pucung\". Gabus (ikan gabus) adalah isi dari sayur tersebut, dan pucung atau kluwek adalah pewarna sayur tersebut.\r\n\r\nMakanan ini memiliki keunggulan yaitu memiliki beberapa vitamin, bukan hanya pada ikan gabusnya namun terdapat juga vitamin pada keluak/pucungnya. Selain itu keunggulannya ialah tulang ikan gabusnya dimasak dengan cara masak presto, sehingga tulang dari ikan gabus tersebut akan menjadi lebih lunak.\r\n', 'Makanan Berkuah', 25000, 20, 'm_gabus.jpg'),
(8, 'Ketoprak', 'Ketoprak yang disajikan oleh MakananKite disediakan menggunakan ketupat yang komposisi utamanya adalah tahu, bihun, mentimun, taoge dan bisa juga memakai telur rebus yang dilengkapi dengan saus kacang, kecap manis, dan taburan bawang merah goreng. Dapat pula dihidangkan dengan tambahan kerupuk atau emping melinjo.\r\n\r\nTentunya dengan keunggulan-keunggulan yang telah disebutkan, sangatlah menarik untuk para pelanggan mencoba menikmati salah saru dari produk unggulan kami ini.\r\n', 'Makanan Tidak Berkuah ', 15000, 20, 'm_ktoprak.jpg'),
(9, 'Ketupat Babanci', 'Ketupat Babanci adalah salah satu kuliner ikonik khas Betawi yang kini mulai langka. Kelangkaan ini disebabkan karena bahan dan rempah-rempah untuk membuat sayur ini sudah sulit ditemukan di Jakarta.\r\n\r\nNamun jangan khawatir, Kami mempunyai penyuplai bahan-bahan tersebut sehingga produk kami selalu memiliki stok serta kualitas yang terjaga.\r\n', 'Makanan Berkuah', 25000, 20, 'm_ketupat.jpg'),
(10, 'Tauge Goreng', 'Tauge goreng adalah salah satu makanan khas daerah betawi atau daerah bogor. Makanan ini cukup terkenal sekali karena rasanya yang sangat enak. Dimasak dengan cara direbus.\r\n\r\nDengan pelengkap Lontong, Tahu kuning, Mie kuning. Cocok untuk anda yang ingin makan dengan rasa yang sangat Betawi.\r\n', 'Makanan Tidak Berkuah ', 15000, 20, 'm_tauge.jpg'),
(11, 'Semprong', 'Kue semprong adalah makanan kue kering. Kue ini berbentuk selinder atau panjang seperti pipa dengan rasa yang khas dan unik. rasa kue semprong juga sangat manis dan gurih. Dengan isian cokelat dan green tea.\r\n\r\nDengan komposisi tepung beras, santan kelapa, telur ayam, garam, wijen, tepung sagu, dan gula halus. Cocok untuk anda yang ingin makan makanan ringan yang renyah dan manis.\r\n', 'Makanan Ringan', 10000, 20, 'm_semprong.jpg'),
(12, 'Semur Jengkol', 'Semur jengkol ini adalah makanan yang sangat popular di kota Jakarta. Dengan ketepatan bumbu untuk membuahkan rasa semur jengkol yang pas dan menyatu dengan bahan-bahan bumbu.\r\n\r\nDengan merendam jengkol di air kapur terlebih dahulu dan merebusnya dengan daun jeruk, membuat bau dari jengkol berkurang. Cocok untuk anda yang ingin makan semur jengkol tanpa bau dari jengkolnya.\r\n', 'Makanan Berkuah', 15000, 20, 'm_semur.jpg'),
(13, 'Nasi Uduk Betawi', 'Nasi uduk adalah makanan yang terbuat dari bahan dasar nasi putih yang diaron dan dikukus dengan santan, serta dibumbui dengan pala, kayu manis, jahe, daun serai, daun salam, dan merica.\r\n\r\nDengan pelengkap Kerupuk, bihun, bawang goreng, perkedel, ayam goreng, telur dadar, Sambal kacang. Cocok untuk anda yang ingin makan tetapi sedang malas untuk memasak.\r\n', 'Makanan Tidak Berkuah ', 15000, 20, 'm_nasiuduk.jpg'),
(14, 'Roti Buaya', 'Roti buaya adalah hidangan Betawi berupa roti manis berbentuk buaya. Roti buaya senantiasa hadir dalam upacara pernikahan dan kenduri tradisional Betawi.\r\n\r\nRoti buaya ini terdiri dari Tepung terigu yang memiliki protein yang tinggi, gula pasir, margarine, susu bubuk, telur, ragi, garam, dan pewarna makanan. Cocok untuk anda yang ingin makan makanan manis.\r\n', 'Makanan Ringan', 20000, 20, 'm_rotibuaya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contactus`
--

CREATE TABLE `tb_contactus` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(26) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contactus`
--

INSERT INTO `tb_contactus` (`firstName`, `lastName`, `email`, `subject`, `message`) VALUES
('a', 'a', 'aaaa@ggg', 'a', 'aaa'),
('aa', 'aaa', 'aaaa@ggg', 'aa', 'aaaaaaaaa'),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, '', '', '2019-12-04 22:10:01', '2019-12-05 22:10:01'),
(2, '', '', '2019-12-04 22:12:56', '2019-12-05 22:12:56'),
(3, '', '', '2019-12-04 22:14:15', '2019-12-05 22:14:15'),
(4, '', '', '2019-12-04 22:19:01', '2019-12-05 22:19:01'),
(5, '', '', '2019-12-04 22:19:27', '2019-12-05 22:19:27'),
(6, '', '', '2019-12-04 22:19:48', '2019-12-05 22:19:48'),
(7, '', '', '2019-12-04 22:20:05', '2019-12-05 22:20:05'),
(8, '', '', '2019-12-04 22:21:33', '2019-12-05 22:21:33'),
(9, '', '', '2019-12-04 22:22:01', '2019-12-05 22:22:01'),
(10, 'r', 'a', '2019-12-04 22:25:31', '2019-12-05 22:25:31'),
(11, '', '', '2019-12-04 22:27:22', '2019-12-05 22:27:22'),
(12, 'r', 'r', '2019-12-04 22:30:55', '2019-12-05 22:30:55'),
(13, 'g', 'g', '2019-12-04 22:39:32', '2019-12-05 22:39:32'),
(14, '', '', '2019-12-05 09:05:53', '2019-12-06 09:05:53'),
(15, 'MM', 'JJ', '2019-12-05 10:00:52', '2019-12-06 10:00:52'),
(16, '', '', '2019-12-06 03:13:06', '2019-12-07 03:13:06'),
(17, '', '', '2019-12-06 05:04:06', '2019-12-07 05:04:06'),
(18, '', '', '2019-12-08 11:58:50', '2019-12-09 11:58:50'),
(19, '', '', '2019-12-08 12:24:12', '2019-12-09 12:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 3, 4, 'Kerak Telor', 1, 15000, ''),
(2, 7, 4, 'Kerak Telor', 1, 15000, ''),
(3, 8, 4, 'Kerak Telor', 1, 15000, ''),
(4, 9, 5, 'Soto Betawi', 1, 20000, ''),
(5, 10, 8, 'Ketoprak', 1, 15000, ''),
(6, 11, 10, 'Tauge Goreng', 1, 15000, ''),
(7, 12, 6, 'Kue Pancong', 1, 10000, ''),
(8, 12, 5, 'Soto Betawi', 1, 20000, ''),
(9, 12, 8, 'Ketoprak', 1, 15000, ''),
(10, 13, 5, 'Soto Betawi', 1, 20000, ''),
(11, 14, 2, 'Gado-Gado', 1, 15000, ''),
(12, 15, 5, 'Soto Betawi', 1, 20000, ''),
(13, 16, 4, 'Kerak Telor', 2, 15000, ''),
(14, 16, 2, 'Gado-Gado', 1, 15000, ''),
(15, 17, 2, 'Gado-Gado', 1, 15000, ''),
(16, 18, 2, 'Gado-Gado', 1, 15000, ''),
(17, 19, 2, 'Gado-Gado', 1, 15000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_barang SET stok = stok-NEW.jumlah    
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_subscribe`
--

CREATE TABLE `tb_subscribe` (
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subscribe`
--

INSERT INTO `tb_subscribe` (`email`) VALUES
('aa@gmail'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(2, 'user', 'user', '123', 2),
(4, 'rindo', 'rindo', '123', 2),
(5, 'rais', 'rais', '123', 2),
(6, 'xman', 'xman', '123', 2),
(7, 'aa', 'aa', 'a', 2),
(10, 'anyar', 'anyar', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
