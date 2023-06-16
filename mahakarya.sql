-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 01:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahakarya`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'figuratif'),
(2, 'abstrak'),
(3, 'non-figuratif'),
(4, 'representasiona'),
(5, 'relief'),
(6, 'performatif'),
(7, 'kategoriHome'),
(8, 'seniman');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal_pembayaran` varchar(10) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `no_telp`, `alamat`, `kota`, `kode_pos`, `email`, `username`, `password`, `level`) VALUES
(20, 'Admin', '087821566789', 'Bantarjati', 'Bogor', 16153, 'admin@gmail.com', 'admin', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` blob NOT NULL,
  `merek` varchar(30) NOT NULL,
  `spesifikasi` text NOT NULL,
  `harga` int(10) NOT NULL,
  `harga_baru` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `id_kategori`, `foto`, `merek`, `spesifikasi`, `harga`, `harga_baru`, `stok`, `status`) VALUES
(70, 'Jesslyn Wylde', 8, 0x456c6c697073652031332e706e67, '500 Karya - 12.7K Pengikut', '500 Karya - 12.7K Pengikut', 0, 0, 0, 'old'),
(71, 'Petruk dan Garong', 1, 0x696d61676520312e706e67, 'Sugiono Suroso', 'Figuratif', 320000, 0, 100, 'new'),
(72, 'Diem Dong!', 2, 0x696d61676520322e706e67, 'Marsudin Sastrowidoyo', 'Marsudin Sastrowidoyo', 2320000, 2320000, 98, 'new'),
(76, 'Bisingnya Dunia', 6, 0x696d61676520332e706e67, 'Marsudi Ahmad Dahlan', 'Marsudi Ahmad Dahlan', 110000, 110000, 235, 'new'),
(77, 'Loro Blonyo', 4, 0x696d61676520342e706e67, 'Ni Ketut Prameswara', 'Ni Ketut Prameswara', 4500000, 4500000, 21, 'new'),
(78, 'Tentara Inggris', 4, 0x6666662e706e67, 'Tony Stark', 'Tony Stark', 450000, 450000, 11, 'old'),
(79, 'Bhinneka Tunggal Ika', 3, 0x7765642e706e67, 'Sri Ningrat Thiurma', 'Sri Ningrat Thiurma', 60000, 60000, 55, 'old'),
(80, 'Tusuk Komodo', 6, 0x4672616d652032312e706e67, 'Ordell Nick', 'Ordell Nick', 498000, 498000, 7, 'old'),
(81, 'Barong Naga', 3, 0x4672616d652032332e706e67, 'Putu Asri', 'Putu Asri', 160000, 160000, 96, 'old'),
(82, 'HypeBoy', 5, 0x616161612e706e67, 'Sugiono Suroso', 'Sugiono Suroso', 580000, 580000, 94, 'old'),
(83, 'Bunda Maria', 2, 0x4672616d652032302e706e67, 'Sugiono Suroso', 'Sugiono Suroso', 758000, 758000, 24, 'old'),
(84, 'Figuratif', 7, 0x4672616d652031372e706e67, 'Patung yang menampilkan bentuk', 'Patung yang menampilkan bentuk manusia atau hewan dengan lebih realistis dan detail', 0, 0, 0, 'old'),
(85, 'Abstrak', 7, 0x4672616d652031362e706e67, ' Patung yang menampilkan bentu', 'Patung yang menampilkan bentuk yang tidak mewakili objek yang dikenal secara langsung', 0, 0, 0, 'old'),
(86, 'Non-Figuratif', 7, 0x4672616d652031352e706e67, 'Patung yang menampilkan bentuk', 'Patung yang menampilkan bentuk yang lebih abstrak dan tidak mewakili bentuk manusia atau hewan', 0, 0, 0, 'old'),
(87, 'Representasional', 7, 0x4672616d652031382e706e67, 'Patung yang menampilkan bentuk', 'Patung yang menampilkan bentuk dan wujud objek yang terkenal', 0, 0, 0, 'old'),
(88, 'Relief', 7, 0x4672616d652031392e706e67, 'Patung yang dibuat pada permuk', 'Patung yang dibuat pada permukaan datar, seperti dinding atau permukaan lainnya', 0, 0, 0, 'old'),
(89, 'Performatif', 7, 0x4672616d652032302e706e67, 'Patung yang menampilkan tindak', 'Patung yang menampilkan tindakan atau aktivitas, seperti tarian atau gerakan atletik', 0, 0, 0, 'old'),
(90, 'Tony Stark', 8, 0x456c6c697073652031312e706e67, '350 Karya - 10.5K Pengikut', '350 Karya - 10.5K Pengikut', 0, 0, 0, 'old'),
(91, 'Jastin Asmara', 8, 0x456c6c697073652031322e706e67, '430 Karya - 22.7K Pengikut', '430 Karya - 22.7K Pengikut', 0, 0, 0, 'old');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `status_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
