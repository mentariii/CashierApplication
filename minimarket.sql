-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for minimarket
CREATE DATABASE IF NOT EXISTS `minimarket` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `minimarket`;

-- Dumping structure for table minimarket.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL,
  `blokir` varchar(2) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table minimarket.admin: 1 rows
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`username`, `password`, `nama_lengkap`, `email`, `telp`, `level`, `blokir`, `id_session`) VALUES
	('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator@gmail.com', '081267771344', 'Admin', 'N', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table minimarket.costumer
CREATE TABLE IF NOT EXISTS `costumer` (
  `id_costumer` int(5) NOT NULL AUTO_INCREMENT,
  `nama_costumer` varchar(30) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  PRIMARY KEY (`id_costumer`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table minimarket.costumer: 16 rows
/*!40000 ALTER TABLE `costumer` DISABLE KEYS */;
INSERT INTO `costumer` (`id_costumer`, `nama_costumer`, `no_telpon`, `alamat_lengkap`) VALUES
	(7, 'Utari', '089610889464', 'Natar, Lampung Selatan'),
	(3, 'Udin Sedunia', '081267771355', 'Ulak Karang, Padang, Sumatera Barat'),
	(4, 'Anike Soumokill', '0894355763', 'Pagar Alam, Bandar Lampung'),
	(5, 'Qurota Anggun', '085768194950', 'Poncowarno,Pringsewu'),
	(8, 'Puput Indrayani', '085841354077', 'Rajabasa Permai, Bandar Lampung'),
	(9, 'Susilowati', '085783333873', 'Banyuwangi,Jawa Tengah'),
	(10, 'Yuli Ariyani', '085768497262', 'Rajabasa Permai, Bandar Lampung'),
	(11, 'Windia Bagus', '085736453858', 'Bandar Jaya'),
	(13, 'Septa Latif', '09878653643', 'Rajabasa Permai, Bandar Lampung'),
	(14, 'Dian Fajar', '08767343483', 'Kampung Baru, Unila'),
	(15, 'Dean Satya P', '08966576385', 'Bandar Lampung'),
	(16, 'Redho Algifaro', '08795436438', 'Rajabasa Permai, Bandar Lampung'),
	(17, 'Siti Fatimah', '085767437922', 'Kali Rejo, Pringsewu'),
	(18, 'Pita Sari', '085356388392', 'Palembang'),
	(19, 'Thiana Indar', '08973536463', 'Desa Mekar, Kota Bumi'),
	(20, 'M. FAHMI HAFIDZ', '089691561660', 'TABEK INDAH, NATAR');
/*!40000 ALTER TABLE `costumer` ENABLE KEYS */;

-- Dumping structure for table minimarket.faktur
CREATE TABLE IF NOT EXISTS `faktur` (
  `id_faktur` int(5) NOT NULL AUTO_INCREMENT,
  `no_faktur` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_faktur`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table minimarket.faktur: 4 rows
/*!40000 ALTER TABLE `faktur` DISABLE KEYS */;
INSERT INTO `faktur` (`id_faktur`, `no_faktur`, `tanggal`) VALUES
	(1, 'FA1234', '2015-04-13 00:00:00'),
	(2, 'FA0035', '2015-04-14 00:00:00'),
	(3, 'FA8967', '2015-04-15 07:07:22'),
	(4, 'F-45646', '2019-06-28 05:00:32');
/*!40000 ALTER TABLE `faktur` ENABLE KEYS */;

-- Dumping structure for table minimarket.kategori_produk
CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table minimarket.kategori_produk: 9 rows
/*!40000 ALTER TABLE `kategori_produk` DISABLE KEYS */;
INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'Menu Paket'),
	(2, 'Aneka Kuah'),
	(3, 'Aneka Kukusan'),
	(4, 'Aneka Ayam'),
	(5, 'Aneka Bakaran'),
	(6, 'Aneka Snack'),
	(7, 'Nasi Dan Mie'),
	(8, 'Minuman Panas'),
	(9, 'minuman dingin');
/*!40000 ALTER TABLE `kategori_produk` ENABLE KEYS */;

-- Dumping structure for table minimarket.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` int(5) NOT NULL AUTO_INCREMENT,
  `no_orders` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `id_costumer` int(5) NOT NULL,
  `nama_kasir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `bayar` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id_orders`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table minimarket.orders: 17 rows
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id_orders`, `no_orders`, `id_costumer`, `nama_kasir`, `tgl_order`, `jam_order`, `bayar`, `status`) VALUES
	(1, 'S160112-0001', 11, 'Robby Prihandaya', '2016-01-12', '07:47:30', 100000, 1),
	(2, 'S160112-0002', 6, 'Robby Prihandaya', '2016-01-13', '08:58:26', 100000, 1),
	(3, 'S160112-0003', 11, 'Robby Prihandaya', '2016-01-14', '09:31:49', 10000, 1),
	(4, 'S190627-0004', 0, 'Putu Yolanda', '2019-06-27', '13:58:36', 50000, 1),
	(5, 'S190627-0005', 6, 'Putu Yolanda', '2019-06-28', '13:59:20', 200000, 1),
	(6, 'S190627-0006', 0, 'Putu Yolanda', '2019-06-29', '14:00:13', 100000, 1),
	(7, 'S190627-0007', 0, 'Putu Yolanda', '2019-06-29', '14:00:39', 100000, 2),
	(8, 'S190627-0008', 0, 'Putu Yolanda', '2019-06-30', '14:01:15', 10000, 2),
	(9, 'S190628-0009', 0, 'Robby Prihandaya', '2019-06-28', '04:25:12', 100000, 1),
	(10, 'S190628-0010', 0, 'Robby Prihandaya', '2019-06-28', '04:31:40', 50000, 1),
	(11, 'S190628-0011', 0, 'Robby Prihandaya', '2019-06-28', '04:36:23', 150000, 1),
	(12, 'S190628-0012', 0, 'Robby Prihandaya', '2019-06-28', '04:38:08', 5000, 1),
	(13, 'S190628-0013', 3, 'Robby Prihandaya', '2019-06-28', '04:38:31', 2000, 1),
	(14, 'S190628-0014', 0, 'Robby Prihandaya', '2019-06-28', '04:41:37', 10000, 2),
	(18, 'S190913-0018', 0, 'Putu Yolanda', '2019-09-13', '01:29:02', 10000, 1),
	(19, 'S220320-0016', 0, 'Kasir', '2022-03-20', '17:10:41', 5000, 1),
	(20, 'S231218-0017', 3, 'Kasir', '2023-12-18', '03:57:43', 9000, 1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table minimarket.orders_detail
CREATE TABLE IF NOT EXISTS `orders_detail` (
  `id_orders` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table minimarket.orders_detail: 25 rows
/*!40000 ALTER TABLE `orders_detail` DISABLE KEYS */;
INSERT INTO `orders_detail` (`id_orders`, `id_produk`, `jumlah`) VALUES
	(1, 95, 2),
	(1, 94, 1),
	(2, 95, 1),
	(2, 92, 1),
	(3, 97, 6),
	(4, 95, 2),
	(5, 92, 3),
	(6, 92, 1),
	(7, 92, 2),
	(8, 97, 10),
	(9, 95, 5),
	(9, 92, 5),
	(11, 97, 2),
	(11, 94, 4),
	(12, 97, 3),
	(13, 97, 2),
	(14, 97, 10),
	(0, 97, 3),
	(0, 97, 2),
	(0, 96, 1),
	(18, 97, 1),
	(18, 96, 1),
	(19, 97, 3),
	(0, 148, 1),
	(20, 148, 1);
/*!40000 ALTER TABLE `orders_detail` ENABLE KEYS */;

-- Dumping structure for table minimarket.orders_temp
CREATE TABLE IF NOT EXISTS `orders_temp` (
  `id_orders_temp` int(5) NOT NULL AUTO_INCREMENT,
  `id_produk` int(5) NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_order_temp` date NOT NULL,
  `jam_order_temp` time NOT NULL,
  PRIMARY KEY (`id_orders_temp`)
) ENGINE=MyISAM AUTO_INCREMENT=442 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table minimarket.orders_temp: 1 rows
/*!40000 ALTER TABLE `orders_temp` DISABLE KEYS */;
INSERT INTO `orders_temp` (`id_orders_temp`, `id_produk`, `id_session`, `jumlah`, `tgl_order_temp`, `jam_order_temp`) VALUES
	(441, 174, 'kasir', 1, '2023-12-18', '04:54:24');
/*!40000 ALTER TABLE `orders_temp` ENABLE KEYS */;

-- Dumping structure for table minimarket.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_produk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `harga` int(20) NOT NULL,
  `harga_grosir` int(20) NOT NULL,
  `harga_pokok` int(20) NOT NULL,
  `satuan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `berat` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `diskon` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table minimarket.produk: 66 rows
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id_produk`, `kode_produk`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `harga_grosir`, `harga_pokok`, `satuan`, `berat`, `diskon`, `tgl_masuk`, `stock`) VALUES
	(124, 'WRM016', 3, 'Nasi Pepes Tahu', '', 12000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(123, 'WRM015', 2, 'Selat Kuah Segar', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(122, 'WRM014', 2, 'Sup Galantin', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(121, 'WRM013', 2, 'Sup Matahari', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(120, 'WRM012', 1, 'Nasi Ikan Bakar + Teh / Es Teh', '', 28000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(119, 'WRM011', 1, 'Nasi Ayam Bakar + Teh / Es Teh', '', 23000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(118, 'WRM010', 1, 'Nasi Ayam Goreng + Teh / Es Teh', '', 23000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(117, 'WRM009', 1, 'Nasi Oseng Godong Kates + Ayam Goreng + Tempe Mendoan + Teh / Es Teh', '', 18000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(116, 'WRM008', 1, 'Nasi Urap + Ayam Goreng + Tempe Mendoan + Teh / Es Teh', '', 18000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(115, 'WRM007', 1, 'Nasi Ayam Geprek + Teh / Es Teh', '', 18000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(114, 'WRM006', 1, 'Chicken Steak + Teh / Es Teh', '', 18000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(113, 'WRM005', 1, 'Nasi Ayam Popcorn + Teh / Es Teh', '', 18000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(112, 'WRM004', 1, 'Nasi Goreng + Teh / Es Teh', '', 16000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(111, 'WRM003', 1, 'Nasi Oseng Godong Kates + Telur Balado + Teh / Es teh', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(110, 'WRM002', 1, 'Nasi Pecel Telur Ceplok + Tempe Mendoan + Teh / Es teh', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(109, 'WRM001', 1, 'Nasi Telur Geprek + Teh / Es Teh', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(125, 'WRM017', 3, 'Nasi Pepes Pindang', '', 12000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(126, 'WRM018', 3, 'Nasi Pepes Bandeng', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(127, 'WRM019', 3, 'Nasi Pepes Nila', '', 20000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(128, 'WRM020', 3, 'Nasi Bothok Telur Asin', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(129, 'WRM021', 4, 'Nasi Kepala Ayam', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(130, 'WRM022', 4, 'Nasi Ati Ayam', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(131, 'WRM023', 4, 'Nasi Kulit Ayam', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(132, 'WRM024', 4, 'Nasi Ayam Geprek Fillet', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(133, 'WRM025', 4, 'Nasi Ayam Popcorn', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(134, 'WRM026', 4, 'Chicken Steak', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(135, 'WRM027', 4, 'Nasi Chicken Katsu Asam Manis', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(136, 'WRM028', 4, 'Nasi Chicken Katsu Sambal Matah', '', 15000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(137, 'WRM029', 4, 'Nasi Ayam Goreng', '', 20000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(138, 'WRM030', 4, 'Nasi Ayam Geprek', '', 20000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(139, 'WRM031', 4, 'Nasi Ayam Goreng Jawa', '', 30000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(140, 'WRM032', 5, 'Nasi Ayam Bakar', '', 20000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(141, 'WRM033', 5, 'Nasi Ikan Bakar', '', 25000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(142, 'WRM034', 5, 'Nasi Ayam Bakar Jawa', '', 30000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(143, 'WRM035', 6, 'Paket Mendoan', '', 5000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(144, 'WRM036', 6, 'Sosis Crispy', '', 6000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(145, 'WRM037', 6, 'Kulit Ayam Crispy', '', 7000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(146, 'WRM038', 6, 'Tahu Crispy', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(147, 'WRM039', 6, 'Paket Snack', '', 10000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(148, 'WRM040', 7, 'Nasi Putih', '', 4000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(149, 'WRM041', 7, 'Nasi Goreng', '', 13000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(150, 'WRM042', 7, 'Bakmie Goreng Jawa', '', 13000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(151, 'WRM043', 7, 'Bakmie Godok Jawa', '', 13000, 1000, 1000, 'Porsi', '0', '0', '2023-12-18', 30),
	(152, 'WRM044', 8, 'Teh', '', 4000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(153, 'WRM045', 8, 'Teh Krampul', '', 5000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(154, 'WRM046', 8, 'Jeruk', '', 5000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(155, 'WRM047', 8, 'Kopi Hitam', '', 5000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(156, 'WRM048', 8, 'Kopi Susu', '', 10000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(157, 'WRM049', 8, 'Beras Kencur', '', 12000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(158, 'WRM050', 8, 'Gula Asem', '', 12000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(159, 'WRM051', 8, 'Teh Tarik', '', 12000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(160, 'WRM052', 8, 'Hot Cappucino', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(161, 'WRM053', 8, 'Hot Chocolate', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(162, 'WRM054', 9, 'Es Teh', '', 4000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(163, 'WRM055', 9, 'Es Teh Krampul', '', 5000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(164, 'WRM056', 9, 'Es Jeruk', '', 5000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(165, 'WRM057', 9, 'Es Kopi Hitam', '', 7000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(166, 'WRM058', 9, 'Es Kopi Susu', '', 10000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(167, 'WRM059', 9, 'Es Beras Kencur', '', 10000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(168, 'WRM060', 9, 'Es Gula Asem', '', 10000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(169, 'WRM061', 9, 'Es Teh Tarik', '', 12000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(170, 'WRM062', 9, 'Aren Coffee', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(171, 'WRM063', 9, 'Ice Mocca', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(172, 'WRM064', 9, 'Cappucino', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(173, 'WRM065', 9, 'Chocolate', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30),
	(174, 'WRM066', 9, 'Sunset Berry', '', 15000, 1000, 1000, 'Gelas', '0', '0', '2023-12-18', 30);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table minimarket.produk_pembelian
CREATE TABLE IF NOT EXISTS `produk_pembelian` (
  `id_produk_pembelian` int(5) NOT NULL AUTO_INCREMENT,
  `id_faktur` varchar(20) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_supplier` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produk_pembelian`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table minimarket.produk_pembelian: 11 rows
/*!40000 ALTER TABLE `produk_pembelian` DISABLE KEYS */;
INSERT INTO `produk_pembelian` (`id_produk_pembelian`, `id_faktur`, `id_produk`, `id_supplier`, `jumlah`, `tanggal_masuk`, `username`) VALUES
	(1, '1', 97, 1, 10, '2015-08-13 06:17:31', 'robby'),
	(2, '1', 95, 2, 123, '2015-08-13 06:31:14', 'robby'),
	(3, '3', 97, 2, 67, '2015-08-12 00:00:00', 'robby'),
	(10, '2', 92, 2, 75, '2015-08-14 04:23:49', 'admin'),
	(7, '1', 94, 3, 67, '2015-08-13 14:19:05', 'admin'),
	(11, '3', 91, 3, 5, '2016-01-09 01:18:55', 'admin'),
	(12, '2', 96, 3, 10, '2019-06-28 04:47:49', 'admin'),
	(13, '2', 89, 1, 6, '2019-06-28 04:48:06', 'admin'),
	(14, '2', 93, 3, 5, '2019-06-28 04:56:20', 'admin'),
	(15, '2', 90, 3, 2, '2019-06-28 04:56:44', 'admin'),
	(17, '2', 83, 3, 1, '2019-06-28 04:59:56', 'admin');
/*!40000 ALTER TABLE `produk_pembelian` ENABLE KEYS */;

-- Dumping structure for table minimarket.return_produk
CREATE TABLE IF NOT EXISTS `return_produk` (
  `id_return` int(5) NOT NULL AUTO_INCREMENT,
  `id_produk` int(5) NOT NULL,
  `id_supplier` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `waktu_return` datetime NOT NULL,
  PRIMARY KEY (`id_return`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table minimarket.return_produk: 2 rows
/*!40000 ALTER TABLE `return_produk` DISABLE KEYS */;
INSERT INTO `return_produk` (`id_return`, `id_produk`, `id_supplier`, `jumlah`, `waktu_return`) VALUES
	(1, 95, 2, 7, '2016-01-13 06:27:14'),
	(3, 94, 1, 4, '2016-01-13 01:17:21');
/*!40000 ALTER TABLE `return_produk` ENABLE KEYS */;

-- Dumping structure for table minimarket.statis
CREATE TABLE IF NOT EXISTS `statis` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table minimarket.statis: 1 rows
/*!40000 ALTER TABLE `statis` DISABLE KEYS */;
INSERT INTO `statis` (`judul`, `halaman`, `detail`) VALUES
	('Selamat datang di sistem informasi Penjualan', 'home', '<p>System aplikasi point of sale adalah software yang di rancang, untuk mempermudah user / kasir dalam melakukan transaksi penjulan dan pembelian barang, software point of sale sudah bisa menghitung stock barang secara otomatis. software ini bisa digunakan di toko, minimarket dll. Selain itu keunggulan software ini sudah mencakup, pembayaran hutang, pembayaran piutang dan retur pembelian, retur penjualan barang , penjualan jasa dan software ini sudah dilengkapi dengan beberapa laporan-laporan yang bertujuan untuk mempermudah user dalam mengontrol data barang data â€“ data transaksi penjualan dan pembelian maupun retur barang secara baik. </p>\r\n\r\n<p>Adapun laporan point of sale adalah laporan master barang, laporan transaksi penjualan dan pembelian barang, laporan stock, laporan mutasi stock, laporan daftar customer, laporan piutang , laporan rekap umur piutang, laporan rugi laba dll. Software ini sudah dilengkapi dengan user password level sehingga hak akses user dalam mengoperasikan software bisa di control atau dibatasi yang bertujuan untuk menjaga kerahasiaan data yang semuanya sudah teritegrasi yang dikumpulkan dalam satu modul poin of sale.</p>\r\n\r\n<p>Selain itu keunggulan software ini sudah mencakup, pembayaran hutang, pembayaran piutang dan retur pembelian, retur penjualan barang , penjualan jasa dan software ini sudah dilengkapi dengan beberapa laporan-laporan yang bertujuan untuk mempermudah user dalam mengontrol data barang data â€“ data transaksi penjualan dan pembelian maupun retur barang secara baik. </p>');
/*!40000 ALTER TABLE `statis` ENABLE KEYS */;

-- Dumping structure for table minimarket.supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(5) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(255) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table minimarket.supplier: 3 rows
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `bank`, `no_rekening`) VALUES
	(1, 'Pt Persada Nusantara tbk', 'Bank BCA', '112 56 7879 23'),
	(2, 'Pt Makmur cahaya baru melati', 'Bank Danamon', '3511887071'),
	(3, 'Pt Damai Sentosa Sejahtera ', 'Bank Mandiri', '123 1 90897 453');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;

-- Dumping structure for table minimarket.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'customer',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table minimarket.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `aktif`, `id_session`, `alamat_lengkap`) VALUES
	('robby', '8d05dd2f03981f86b56c23951f3f34d7', 'Robby Prihandaya', 'robby.prihandaya@gmail.com', '081267771344', 'customer', 'Y', '8d05dd2f03981f86b56c23951f3f34d7', 'Tunggul Hitam, Padang'),
	('yolanda', '21aee6fc8b73e6db0e9a31699652cb9d', 'Putu Yolanda', 'putu.yolanda@gmail.com', '085263000122', 'customer', 'Y', '21aee6fc8b73e6db0e9a31699652cb9d', ''),
	('kasir', 'c7911af3adbd12a035b289556d96470a', 'Kasir', 'kasir@gmail.com', '12345678', 'customer', 'Y', 'c7911af3adbd12a035b289556d96470a', '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
