-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2022 pada 05.39
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyoba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `nomer` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `berita` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`nomer`, `gambar`, `judul`, `hari`, `tanggal`, `waktu`, `berita`) VALUES
(1, 'img/berita1.jpeg', 'Perempuan Muda di Kediri Gelar Festival Budaya', '', '2021-11-02', '14:18', 'Festival Budaya Nyawiji Bebudayan Ing Bhumi Panji tersebut digelar di Hotel Bukit Daun Kediri. Karena digelar di masa pandemi COVID-19, maka pelaksanaan festival disesuaikan dengan protokol kesehatan yang ketat, dengan pembatasan penonton. Selain offline, juga secara online menggunakan YouTube. '),
(2, 'img/berita 2.jpeg', 'Perempuan Muda di Kediri Gelar Festival Budaya', '', '2021-11-02', '14:18', 'Festival Budaya Nyawiji Bebudayan Ing Bhumi Panji tersebut digelar di Hotel Bukit Daun Kediri. Karena digelar di masa pandemi COVID-19, maka pelaksanaan festival disesuaikan dengan protokol kesehatan yang ketat, dengan pembatasan penonton. Selain offline, juga secara online menggunakan YouTube. '),
(3, 'img/berita3.jpeg', 'Perempuan Muda di Kediri Gelar Festival Budaya', '', '2021-11-02', '14:18', 'Festival Budaya Nyawiji Bebudayan Ing Bhumi Panji tersebut digelar di Hotel Bukit Daun Kediri. Karena digelar di masa pandemi COVID-19, maka pelaksanaan festival disesuaikan dengan protokol kesehatan yang ketat, dengan pembatasan penonton. Selain offline, juga secara online menggunakan YouTube. '),
(4, 'img/berita4.jpeg', 'Perempuan Muda di Kediri Gelar Festival Budaya', '', '2021-11-02', '14:18', 'Festival Budaya Nyawiji Bebudayan Ing Bhumi Panji tersebut digelar di Hotel Bukit Daun Kediri. Karena digelar di masa pandemi COVID-19, maka pelaksanaan festival disesuaikan dengan protokol kesehatan yang ketat, dengan pembatasan penonton. Selain offline, juga secara online menggunakan YouTube. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman_pakaian`
--

CREATE TABLE `detail_peminjaman_pakaian` (
  `id_detail_peminjaman_pakaian` int(11) NOT NULL,
  `id_peminjaman_pakaian` int(11) NOT NULL,
  `id_pakaian` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_peminjaman_pakaian`
--

INSERT INTO `detail_peminjaman_pakaian` (`id_detail_peminjaman_pakaian`, `id_peminjaman_pakaian`, `id_pakaian`, `qty`) VALUES
(1, 3, 100, 4),
(2, 0, 100, 9),
(3, 5, 100, 1),
(4, 6, 100, 8),
(5, 7, 1, 1),
(6, 8, 1, 1),
(7, 9, 1, 1),
(8, 10, 3, 1),
(9, 10, 4, 5),
(10, 11, 3, 1),
(11, 12, 3, 1),
(12, 12, 3, 1),
(13, 12, 3, 1),
(14, 12, 3, 1),
(15, 13, 3, 1),
(16, 14, 1, 1),
(17, 15, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id_pakaian` int(255) NOT NULL,
  `nama_pakaian` varchar(255) NOT NULL,
  `deskripsi_pakaian` varchar(1000) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar_pakaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id_pakaian`, `nama_pakaian`, `deskripsi_pakaian`, `harga`, `gambar_pakaian`) VALUES
(1, 'Pakaian Adat Bali', 'Pakaian adat Bali adalah busana yang biasa digunakan dalam suatu upacara atau persembahyangan ke pura. Busana pria dan wanita memiliki arti atau filosofi tersendiri.', '300000', 'pakaian/Pakaian Adat Bali.jpg'),
(3, 'Pakaian Adat Madura', 'Pakaian Adat Madura yang biasanya disebut Baju Pesaan. Baju Pesaan ini bisa digunakan pada acara-acara penting masyarakat Madura seperti acara upacara pernikahan ataupun acara penting lainnya.', '200000', 'pakaian/Pakaian Adat Madura.jpg'),
(4, 'Pakaian Adat Betawi', '	Pakaian adat Betawi biasa digunakan mulai dari pakaian yang dipakai sehari-hari hingga pakaian yang dipakai saat upacara pernikahan. Pakaian pria umumnya menggunakan warna yang kalem dan tidak terlalu mencolok, maka warna pakaian yang biasa digunakan perempuan memiliki warna yang terang', '240000', 'pakaian/filosofi-pakaian-adat-betawi.jpg'),
(5, 'Pakaian Adat Sunda', 'Pakaian Adat Sunda ini berasal dari salah satu suku yang ada di Jawa barat. Ada dua macam pakaian adat Sunda yang kerap ditampilkan, yaitu kebaya Sunda untuk perempuan dan beskap Sunda untuk kaum laki-laki.', '275000', 'pakaian/Pakaian Adat Sunda.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_pakaian`
--

CREATE TABLE `peminjaman_pakaian` (
  `id_peminjaman_pakaian` int(100) NOT NULL,
  `ID` int(100) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman_pakaian`
--

INSERT INTO `peminjaman_pakaian` (`id_peminjaman_pakaian`, `ID`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 7, '2021-11-16', '2021-11-21'),
(2, 7, '2021-11-16', '2021-11-21'),
(3, 7, '2021-11-16', '2021-11-21'),
(4, 7, '2021-11-16', '2021-11-21'),
(5, 7, '2021-11-16', '2021-11-21'),
(6, 7, '2021-11-16', '2021-11-21'),
(7, 7, '2021-11-16', '2021-11-21'),
(8, 7, '2021-11-16', '2021-11-21'),
(9, 7, '2021-11-16', '2021-11-21'),
(10, 7, '2021-11-16', '2021-11-21'),
(11, 7, '2021-11-17', '2021-11-22'),
(12, 7, '2021-11-17', '2021-11-22'),
(13, 7, '2021-11-17', '2021-11-22'),
(14, 7, '2021-11-26', '2021-12-01'),
(15, 5, '2021-11-27', '2021-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_pakaian`
--

CREATE TABLE `pengembalian_pakaian` (
  `id_pengembalian_pakaian` int(11) NOT NULL,
  `id_peminjaman_pakaian` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian_pakaian`
--

INSERT INTO `pengembalian_pakaian` (`id_pengembalian_pakaian`, `id_peminjaman_pakaian`, `tanggal_pengembalian`, `denda`) VALUES
(0, 5, '2021-11-16', 0),
(0, 4, '2021-11-16', 0),
(0, 10, '2021-11-16', 0),
(0, 11, '2021-11-17', 0),
(0, 13, '2021-11-27', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Password`, `Phone`) VALUES
(1, 'Errisa Aura', 'errisaaura@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(2, 'Noval Akbar Ramadhany', 'noval@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 23423),
(4, 'Noval Akbar Ramadhany', 'noval@gmail.com', '467bae90b19ee6eb379a749cb924f726', 3424134),
(5, 'Errisa Aura Hidayah', 'errisaaura@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 34345),
(6, 'kaori', 'kaori@gmail.com', '0c0993283306441ffc1a9c2770bdeb52', 12312),
(7, 'mona', 'mona@gmail.com', '202cb962ac59075b964b07152d234b70', 34534),
(9, 'Errisa Aura', 'errisaaura@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4234433),
(10, 'sapi', 'sapi@gmail.com', 'f87f8f834b237ad853fb44cccaa18952', 97239),
(99, 'Errisa Aura', 'errisaaura@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 34535);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`nomer`);

--
-- Indeks untuk tabel `detail_peminjaman_pakaian`
--
ALTER TABLE `detail_peminjaman_pakaian`
  ADD PRIMARY KEY (`id_detail_peminjaman_pakaian`);

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id_pakaian`);

--
-- Indeks untuk tabel `peminjaman_pakaian`
--
ALTER TABLE `peminjaman_pakaian`
  ADD PRIMARY KEY (`id_peminjaman_pakaian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `nomer` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84657865;

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman_pakaian`
--
ALTER TABLE `detail_peminjaman_pakaian`
  MODIFY `id_detail_peminjaman_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id_pakaian` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_pakaian`
--
ALTER TABLE `peminjaman_pakaian`
  MODIFY `id_peminjaman_pakaian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
