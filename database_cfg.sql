-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2023 pada 08.18
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_cfg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(3) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `judul_gambar` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(3) NOT NULL,
  `id_pelanggan` int(3) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(30) DEFAULT NULL,
  `rekening_pelanggan` varchar(30) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `id_rekening` int(3) DEFAULT NULL,
  `tanggal_bayar` varchar(20) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `kode_transaksi`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(51, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', '8ION6X', '2023-05-07 00:00:00', 75000, 'Konfirmasi', 75000, '234567890', 'Pelanggan', 'putih1.png', 5, '07-05-2023', 'BANK BRI', '2023-05-07 22:47:06', '2023-05-07 20:47:06'),
(52, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'BYUEVL', '2023-05-07 00:00:00', 25000, 'Konfirmasi', 25000, '2345678', 'Pelanggan', 'putih2.png', 5, '07-05-2023', 'BANK BRI', '2023-05-07 22:51:09', '2023-05-07 20:51:09'),
(53, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', '7IAYQW', '2023-05-07 00:00:00', 50000, 'Konfirmasi', 50000, '2345678', 'Putri', 'bukti2.jpg', 5, '14-06-2023', 'BANK BRI', '2023-05-07 22:52:15', '2023-05-07 20:52:15'),
(57, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'LLDUAM', '2023-05-26 00:00:00', 55000, 'Konfirmasi', 55000, '2345678', 'Pelanggan', 'bukti1.jpg', 5, '26-05-2023', 'BANK BRI', '2023-05-26 15:28:12', '2023-05-26 13:28:12'),
(58, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'ZNVQ85', '2023-06-12 00:00:00', 30000, 'Konfirmasi', 30000, '2345678', 'Putri', 'bukti.jpg', 5, '12-06-2023', 'BANK BRI', '2023-06-12 05:26:31', '2023-06-12 03:26:31'),
(59, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'JD1ASZ', '2023-06-14 00:00:00', 0, 'Menunggu Konfirmasi', 0, '2345678', 'Pelanggan2', 'bukti_bayar_kuliah_-_daffaputri_-_1941477_(1).jpeg', 5, '20-07-2023', 'BANK BRI', '2023-06-14 10:00:37', '2023-06-14 08:00:37'),
(60, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'IHVC1Z', '2023-06-14 00:00:00', 30000, 'Konfirmasi', 30000, '234567', 'Putri', NULL, 5, '14-06-2023', 'BANK BRI', '2023-06-14 10:01:56', '2023-06-14 08:01:56'),
(61, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'JOWWGJ', '2023-06-14 00:00:00', 20000, 'Konfirmasi', 20000, '2345678', 'Pelanggan', 'bukti_bayar_kuliah_-_daffaputri_-_1941477.jpeg', 5, '06-07-2023', 'BANK BRI', '2023-06-14 10:09:55', '2023-06-14 08:09:55'),
(63, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'AMDJFY', '2023-06-23 00:00:00', 42000, 'Konfirmasi', 42000, '2345678', 'Pelanggan2', 'bukti3.jpg', 5, '04-07-2023', 'BANK BRI', '2023-06-23 05:20:38', '2023-06-23 03:20:38'),
(65, 16, 'Pelanggann', 'pelanggan2@gmail.com', '625362728289', 'Bali', 'QKXOYR', '2023-07-07 00:00:00', 56000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-07 08:27:31', '2023-07-07 06:27:31'),
(66, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Bandung', 'Y4LV2C', '2023-07-10 00:00:00', 30000, 'Konfirmasi', 30000, '2345678', 'Pelanggan', 'bukti4.jpg', 5, '10-07-2023', 'BANK BRI', '2023-07-10 05:15:07', '2023-07-10 03:15:07'),
(67, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Jakarta', 'I4DUMK', '2023-07-20 00:00:00', 41000, 'Konfirmasi', 41000, '2345678', 'Pelanggan2', 'bukti5.jpg', 5, '20-07-2023', 'BANK BRI', '2023-07-20 05:17:41', '2023-07-20 03:17:41'),
(68, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Jakarta', 'YZTGBM', '2023-07-20 00:00:00', 8000, 'Konfirmasi', 8000, '2345678', 'Pelanggan', 'bukti6.jpg', 5, '20-07-2023', 'BANK BSI', '2023-07-20 06:03:09', '2023-07-20 04:03:09'),
(69, 15, 'Pelanggan', 'Pelanggan@gmail.com', '62345678890', 'Jakarta', 'M2OV5Z', '2023-07-20 00:00:00', 10000, 'Konfirmasi', 10000, '2345678', 'Putri', 'bukti8.jpg', 5, '20-07-2023', 'BANK BRI', '2023-07-20 06:18:37', '2023-07-20 04:18:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `urutan` int(3) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `gambar`, `tanggal_update`) VALUES
(9, 'retail', 'Retail', 3, 'retai1.png', '2020-07-10 02:29:37'),
(10, 'reseller', 'Reseller', 2, 'reseller1.png', '2020-07-09 22:15:00'),
(11, 'supplier', 'Supplier', 1, 'supplier-supplier1.png', '2020-07-10 02:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `namaweb` varchar(50) NOT NULL,
  `tagline` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `id_user`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `tanggal_update`) VALUES
(1, 14, 'Cigifarm.id', 'Grosir, supplier & eksportir buah  dan sayuran.', 'cigifarmjl@gmail.com', 'http://cigifarmgroup.com', 'buah, sayur, supplier. ', NULL, '6281214369502', 'Desa girimukti Kecamatan Kasokandel Kabupaten Majalengka', 'https://web.facebook.com/search/top?q=cigifarm', 'https://www.instagram.com/cigifarmgroup/', 'Membantu para petani buah dan sayuran untuk mengembangkan hasil\r\npanennya dan proses penjualannya', 'logo22.png', 'HD-removebg-preview5.png', '2020-08-07 13:17:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(3) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `status_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(15, 'Pending', 'Pelanggan', 'Pelanggan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '62345678890', 'Jakarta', '2023-05-07 22:25:42', '2023-05-07 20:25:42'),
(16, 'Pending', 'Pelanggann', 'pelanggan2@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '625362728289', 'Bali', '2023-05-24 10:11:22', '2023-05-24 08:11:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(3) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `ukuran` varchar(20) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(37, 19, 11, 'mangga-gedong1', 'Mangga Gedong', 'mangga-gedong-mangga-gedong1', '', '', 0, 99, 'mangga_gedong.png', 'kg', 'Publish', '2023-05-07 17:56:56', '2023-05-07 15:56:56'),
(40, 14, 11, 'mangga-gincu1', 'Mangga Gincu', 'mangga-gincu-mangga-gincu1', '', '', 0, 100, 'Mangga_Gincu1.png', 'kg', 'Publish', '2023-05-07 22:30:46', '2023-05-07 20:30:46'),
(41, 14, 11, 'mangga-cengkir1', 'Mangga Cengkir Dermayu', 'mangga-cengkir-dermayu-mangga-cengkir1', '', '', 0, 100, 'DermayuCengkir3.png', 'kg', 'Publish', '2023-05-07 23:22:13', '2023-05-07 21:22:13'),
(44, 14, 11, 'mangga-harumanis1', 'Mangga Harumanis', 'mangga-harumanis-mangga-harumanis1', '', '', 0, 100, 'mangga_Harum_Manis1.png', 'kg', 'Publish', '2023-05-07 23:26:22', '2023-05-07 21:26:22'),
(45, 14, 11, 'tomat1', 'Tomat', 'tomat-tomat1', '', '', 0, 100, 'Tomat1.png', 'kg', 'Publish', '2023-05-07 23:27:15', '2023-05-07 21:27:15'),
(46, 14, 11, 'sawo-simadu1', 'Sawo Simadu', 'sawo-simadu-sawo-simadu1', '', '', 0, 100, 'sawo-simadu.png', 'kg', 'Publish', '2023-05-07 23:27:43', '2023-05-07 21:27:43'),
(47, 14, 11, 'kacang-tanah1', 'Kacang Tanah', 'kacang-tanah-kacang-tanah1', '', '', 0, 100, 'kacang-tanah.png', 'kg', 'Publish', '2023-05-07 23:28:09', '2023-05-07 21:28:09'),
(48, 14, 11, 'kacang-banten1', 'Kacang Banten (Gondolo)', 'kacang-banten-gondolo-kacang-banten1', '', '', 0, 100, 'kacang-banten.png', 'kg', 'Publish', '2023-05-07 23:28:33', '2023-05-07 21:28:33'),
(49, 14, 10, 'sawo-simadu2', 'Sawo Simadu', 'sawo-simadu-sawo-simadu2', '', '', 0, 100, 'sawo-simadu1.png', 'kg', 'Publish', '2023-05-07 23:29:28', '2023-05-07 21:29:28'),
(50, 14, 10, 'tomat2', 'Tomat', 'tomat-tomat2', '', '', 0, 100, 'Tomat2.png', 'kg', 'Publish', '2023-05-07 23:30:02', '2023-05-07 21:30:02'),
(51, 14, 10, 'kacang-tanah2', 'Kacang Tanah', 'kacang-tanah-kacang-tanah2', '', '', 0, 100, 'kacang-tanah1.png', 'kg', 'Publish', '2023-05-07 23:30:34', '2023-05-07 21:30:34'),
(52, 14, 10, 'kacang-banten2', 'Kacang Banten (Gondolo)', 'kacang-banten-gondolo-kacang-banten2', '', '', 0, 100, 'kacang-banten1.png', 'kg', 'Publish', '2023-05-07 23:32:25', '2023-05-07 21:32:25'),
(53, 14, 10, 'mangga-harumanis2', 'Mangga Harumanis', 'mangga-harumanis-mangga-harumanis2', '', '', 0, 100, 'mangga_Harum_Manis2.png', 'kg', 'Publish', '2023-05-07 23:32:58', '2023-05-07 21:32:58'),
(54, 14, 10, 'mangga-gincu2', 'Mangga Gincu', 'mangga-gincu-mangga-gincu2', '', '', 0, 100, 'Mangga_Gincu11.png', 'kg', 'Publish', '2023-05-07 23:33:48', '2023-05-07 21:33:48'),
(55, 14, 10, 'mangga-gedong2', 'Mangga Gedong', 'mangga-gedong-mangga-gedong2', '', '', 0, 100, 'mangga_gedong2.png', 'kg', 'Publish', '2023-05-07 23:34:47', '2023-05-07 21:34:47'),
(56, 14, 10, 'mangga-cengkir2', 'Mangga Cengkir Dermayu', 'mangga-cengkir-dermayu-mangga-cengkir2', '', '', 0, 100, 'DermayuCengkir4.png', 'kg', 'Publish', '2023-05-07 23:35:18', '2023-05-07 21:35:18'),
(57, 14, 9, 'tomat3', 'Tomat', 'tomat-tomat3', '', '', 8000, 98, 'Tomat3.png', 'kg', 'Publish', '2023-05-07 23:36:11', '2023-05-07 21:36:11'),
(58, 14, 9, 'sawo-simadu3', 'Sawo Simadu', 'sawo-simadu-sawo-simadu3', '', '', 8000, 98, 'sawo-simadu2.png', 'kg', 'Publish', '2023-05-07 23:54:09', '2023-05-07 21:54:09'),
(59, 14, 9, 'kacang-tanah3', 'Kacang Tanah', 'kacang-tanah-kacang-tanah3', '', '', 10000, 98, 'kacang-tanah2.png', 'kg', 'Publish', '2023-05-07 23:54:41', '2023-05-07 21:54:41'),
(60, 14, 9, 'kacang-banten3', 'Kacang Banten (Gondolo)', 'kacang-banten-gondolo-kacang-banten3', '', '', 10000, 100, 'kacang-banten2.png', 'kg', 'Publish', '2023-05-07 23:55:08', '2023-05-07 21:55:08'),
(61, 14, 9, 'mangga-cengkir3', 'Mangga Cengkir Dermayu', 'mangga-cengkir-dermayu-mangga-cengkir3', '', '', 12000, 92, 'DermayuCengkir5.png', 'kg', 'Publish', '2023-05-07 23:55:41', '2023-05-07 21:55:41'),
(62, 14, 9, 'mangga-gincu3', 'Mangga Gincu', 'mangga-gincu-mangga-gincu3', '', '', 30000, 93, 'Mangga_Gincu12.png', 'kg', 'Publish', '2023-05-07 23:56:28', '2023-05-07 21:56:28'),
(63, 14, 9, 'mangga-gedong3', 'Mangga Gedong', 'mangga-gedong-mangga-gedong3', '', '', 25000, 96, 'mangga_gedong3.png', 'kg', 'Publish', '2023-05-07 23:57:14', '2023-05-07 21:57:14'),
(65, 14, 9, 'mangga-harumanis3', 'Mangga Harumanis', 'mangga-harumanis-mangga-harumanis3', '', '', 20000, 96, 'mangga_Harum_Manis3.png', 'kg', 'Publish', '2023-05-08 00:45:09', '2023-05-07 22:45:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `id_user`, `nama_bank`, `nomor_rekening`, `nama_pemilik`, `gambar`, `tanggal_post`) VALUES
(3, 19, 'DANA', '081214369502', 'SYAMSUL MA\'ARIF NURHIDAYAT	', NULL, '2020-06-27 06:17:54'),
(4, 19, 'BANK BSI', '7195258718', 'SYAMSUL MA\'ARIF NURHIDAYAT	', NULL, '2020-08-06 18:49:13'),
(5, 19, 'BANK BRI', '429901009957532', 'SYAMSUL MA\'ARIF NURHIDAYAT	', NULL, '2020-08-06 18:49:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(3) NOT NULL,
  `id_pelanggan` int(3) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(69, 15, '8ION6X', 40, 25000, 3, 75000, '2023-05-07 00:00:00', '2023-05-07 20:47:06'),
(70, 15, 'BYUEVL', 40, 25000, 1, 25000, '2023-05-07 00:00:00', '2023-05-07 20:51:09'),
(71, 15, '7IAYQW', 40, 25000, 2, 50000, '2023-05-07 00:00:00', '2023-05-07 20:52:15'),
(77, 15, 'LLDUAM', 63, 25000, 1, 25000, '2023-05-26 00:00:00', '2023-05-26 13:28:12'),
(78, 15, 'LLDUAM', 62, 30000, 1, 30000, '2023-05-26 00:00:00', '2023-05-26 13:28:12'),
(79, 15, 'ZNVQ85', 62, 30000, 1, 30000, '2023-06-12 00:00:00', '2023-06-12 03:26:31'),
(80, 15, 'JD1ASZ', 37, 0, 1, 0, '2023-06-14 00:00:00', '2023-06-14 08:00:37'),
(81, 15, 'IHVC1Z', 62, 30000, 1, 30000, '2023-06-14 00:00:00', '2023-06-14 08:01:56'),
(82, 15, 'JOWWGJ', 65, 20000, 1, 20000, '2023-06-14 00:00:00', '2023-06-14 08:09:55'),
(83, 15, 'AMDJFY', 61, 12000, 1, 12000, '2023-06-23 00:00:00', '2023-06-23 03:20:38'),
(84, 15, 'AMDJFY', 62, 30000, 1, 30000, '2023-06-23 00:00:00', '2023-06-23 03:20:38'),
(88, 16, 'QKXOYR', 61, 12000, 4, 48000, '2023-07-07 00:00:00', '2023-07-07 06:27:31'),
(89, 16, 'QKXOYR', 57, 8000, 1, 8000, '2023-07-07 00:00:00', '2023-07-07 06:27:31'),
(90, 15, 'Y4LV2C', 62, 30000, 1, 30000, '2023-07-10 00:00:00', '2023-07-10 03:15:07'),
(91, 15, 'I4DUMK', 58, 8000, 2, 16000, '2023-07-20 00:00:00', '2023-07-20 03:17:41'),
(92, 15, 'I4DUMK', 63, 25000, 1, 25000, '2023-07-20 00:00:00', '2023-07-20 03:17:41'),
(93, 15, 'YZTGBM', 57, 8000, 1, 8000, '2023-07-20 00:00:00', '2023-07-20 04:03:09'),
(94, 15, 'M2OV5Z', 59, 10000, 1, 10000, '2023-07-20 00:00:00', '2023-07-20 04:18:37');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(14, 'admin_cigifarm.id', 'cigifarmjl@gmail.com', 'Admin_CFG', '8cb2237d0679ca88db6464eac60da96345513964', 'Admin', '2023-05-07 20:28:43'),
(16, 'Admin_CFG', 'cigifarmjl@gmail.com', 'Adminnnn', '8cb2237d0679ca88db6464eac60da96345513964', 'Admin', '2023-07-06 07:12:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_rekening` (`id_rekening`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD CONSTRAINT `header_transaksi_ibfk_4` FOREIGN KEY (`id_rekening`) REFERENCES `rekening` (`id_rekening`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_transaksi`) REFERENCES `header_transaksi` (`kode_transaksi`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
