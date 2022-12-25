-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 08:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subnetting`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_artikel` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi_artikel`) VALUES
(1, 'Pengertian', 'Subnetting adalah teknik yang digunakan untuk membagi suatu jaringan (jaringan komputer) menjadi beberapa subnet yang lebih kecil. Subnetting hanya dapat dilakukan untuk alamat IP Kelas A, B, dan C. Pada dasarnya, subnetting merupakan aktivitas untuk mengambil bit-bit dari bagian host alamat IP dan me-reserve atau menyimpannya sebagai alat untuk mendefinisikan alamat subnet. Konsekuensinya yaitu semakin sedikit jumlah bit untuk host. Sehingga dapat disimpulkan bahwa semakin banyak jumlah subnet, maka semakin sedikit jumlah bit yang tersedia untuk mendefinisikan hostbit tersebut.'),
(6, '', 'Subnetting memungkinkan kita membuat jaringan dengan batas host yang lebih realistis. Subnetting menyediakan cara yang lebih fleksibel untuk menentukan bagian mana dari alamat IP 32-bit yang mewakili nama domain dan bagian mana yang mewakili ID host. Hanya 3 kemungkinan nama domain yang tersedia di kelas alamat IP standar: 8 bit di kelas A, 16 bit di kelas B dan 24 bit di kelas C.'),
(8, '1. Private IP Address', '    IP Privat adalah sebuah alamat atau IP Address yang diberikan ke komputer atau laptop yang dan tidak terhubung ke jaringan internet. IP privat biasanya digunakan pada jaringan LAN atau LOcal Area Network yang mana IP privat tersebut tidak bisa diakses oleh IP publik. IP Privat biasanya digunakan pada komputer didalam laboratorium komputer atau kantor guna memudahkan akses ke masing-masing komputer. IP privat digunakan untuk memberikan penomoran komputer secara unik pada jaringan lokal. IP address yang diberikan tersebut biasanya dibedakan menjadi beberapa kelas, dan masing-masing kelas pada IP address mempunyai rentang yang berbeda-beda.'),
(9, '2. Public IP Address', 'IP public adalah jenis alamat IP public yang digunakan untuk berkomunikasi di luar jaringan lokal dan terhubung ke Internet. Tidak seperti alamat IP private, alamat IP publik tidak tersedia secara gratis karena ditetapkan dan dikendalikan oleh penyedia layanan Internet (ISP).'),
(10, 'Contoh Subnetting', 'Sebelum Anda mengetahui cara menghitung subnet, perhatikan bahwa metode ini berfokus pada empat hal, yaitu jumlah subnet, jumlah host per subnet, blok subnet,  alamat host dan broadcast yang valid. Subnetting seperti apa yang terjadi dengan sebuah network address 192.168.1.0/26? Analisanya, 192.168.1.0 berarti kelas C dengan Subnet Mask /26 berarti 11111111.11111111.11111111.11000000 (255.255.255.192).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
