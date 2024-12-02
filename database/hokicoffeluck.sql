-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2024 pada 14.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hokibrewcoffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `id_user`, `nama`, `tgl_pesan`, `batas_bayar`) VALUES
(8, 1, 'Fuad', '2023-12-10 06:46:15', '2023-12-11 06:46:15'),
(9, 2, 'Faisal', '2023-12-10 06:48:41', '2023-12-11 06:48:41'),
(10, 1, 'Cassasa', '2023-12-10 08:07:29', '2023-12-11 08:07:29'),
(37, 0, 'yuni', '2024-12-01 13:55:40', '2024-12-02 13:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kopi`
--

CREATE TABLE `tb_kopi` (
  `id_kopi` int(11) NOT NULL,
  `nama_kopi` varchar(120) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kopi`
--

INSERT INTO `tb_kopi` (`id_kopi`, `nama_kopi`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sumatra Mandheling', 'Kopi Sumatra Mandheling', 'Arabika', 20000, 50, 'SumatraMandheling.jpg'),
(2, 'Vietnam Robusta', 'Kopi Vietnam Robusta ', 'Robusta', 25000, 49, 'VietnamRobusta.png'),
(3, 'Java Espresso Blend', 'Java Espresso Blend', 'V60', 45000, 47, 'JavaEspressoBlend.jpg'),
(4, 'Caramel Macchiato Latte', 'Caramel Macchiato Latte', 'Latte', 28000, 45, 'CaramelMacchiatoLatte.jpg'),
(5, 'Vanilla Almond Cold Brew', 'Vanilla Almond Cold Brew', 'Cold Brew', 25000, 50, 'VanillaAlmondColdBrew.jpg'),
(20, 'Ethiopian Yirgacheffe', 'Kopi Ethiopian Yirgacheffe', 'Arabika', 30000, 48, 'EthiopianYirgacheffe.jpeg'),
(21, 'Colombian Supremo', 'Kopi Colombian Supremo', 'Arabika', 32000, 47, 'ColombianSupremo.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_kopi` int(11) NOT NULL,
  `nama_kopi` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL,
  `id_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_kopi`, `nama_kopi`, `jumlah`, `harga`, `pilihan`, `id_keranjang`) VALUES
(1, 8, 1, 'Sumatra Mandheling', 1, 20000, '', 0),
(2, 8, 2, 'Vietnam Robusta', 2, 25000, '', 0),
(3, 9, 3, 'Java Espresso Blend', 1, 45000, '', 0),
(4, 10, 5, 'Vanilla Almond Cold Brew', 1, 25000, '', 0),
(22, 37, 4, 'Caramel Macchiato Latte', 2, 28000, '', 0),
(23, 37, 2, 'Vietnam Robusta', 1, 25000, '', 0),
(24, 37, 3, 'Java Espresso Blend', 2, 45000, '', 0),
(25, 37, 20, 'Ethiopian Yirgacheffe', 2, 30000, '', 0),
(26, 37, 21, 'Colombian Supremo', 1, 32000, '', 0);

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_kopi SET stok = stok-NEW.jumlah
    WHERE id_kopi = NEW.id_kopi;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kopi` int(11) NOT NULL,
  `komentar` text DEFAULT NULL,
  `tgl_ulasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '1234', 1),
(2, 'user', 'user', '1234', 2),
(11, 'made', 'made', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_kopi`
--
ALTER TABLE `tb_kopi`
  ADD PRIMARY KEY (`id_kopi`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_kopi` (`id_kopi`);

--
-- Indeks untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kopi` (`id_kopi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_kopi`
--
ALTER TABLE `tb_kopi`
  MODIFY `id_kopi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`id_kopi`) REFERENCES `tb_kopi` (`id_kopi`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD CONSTRAINT `tb_ulasan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_ulasan_ibfk_2` FOREIGN KEY (`id_kopi`) REFERENCES `tb_kopi` (`id_kopi`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
