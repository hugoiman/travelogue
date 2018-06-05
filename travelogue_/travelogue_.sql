-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2018 pada 07.29
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelogue_`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `nama_admin`, `password`, `foto`) VALUES
(1, 'anonim@gmail.com', 'anonim', '202cb962ac59075b964b07152d234b70', '1_1525737371.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `email`, `nama_member`, `password`, `alamat`, `no_hp`, `foto`) VALUES
(1, 'hugo.iman@yahoo.co.id', 'hugoimanaka', '202cb962ac59075b964b07152d234b70', 'Jalan Sumbersari no 4                                                                               ', '0123456789', '1_1526445444.png'),
(2, 'ogeno@gmail.com', 'ogeno', '202cb962ac59075b964b07152d234b70', 'jl. martil no 21                            ', '08987456', '2_1524736927.png'),
(12, 'irfan@gmail.com', 'irfan', '350183de17f9b9022f936802bb4181d4', 'jl. ikan mas no 19                            ', '123456', '12_1524743960.jpg'),
(13, 'iman@gmail.com', 'Iman', '202cb962ac59075b964b07152d234b70', 'jl. rahayu no 90                            ', '021456789', '13_1524744076.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_peminjaman` int(10) NOT NULL,
  `id_pemilik` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_peminjaman`, `id_pemilik`, `id_peminjam`, `id_post`, `judul`, `tgl_pinjam`, `tgl_selesai`, `keterangan`, `status`) VALUES
(1, 13, 1, 19, 'Penginapan 5', '2017-11-15', '2017-11-16', 'blablabla', 'belum disetujui'),
(3, 1, 12, 3, 'Motor Tril', '2017-11-25', '2017-11-30', 'untuk naik gunung', 'sudah disetujui'),
(5, 2, 1, 2, 'penginapan 1', '2017-11-23', '2017-11-24', 'berlibur', 'sudah disetujui'),
(6, 12, 13, 16, 'Motor Tril 2', '2017-11-29', '2017-11-30', 'blabla..', 'belum disetujui'),
(7, 1, 2, 1, 'Ferari', '2017-11-08', '2017-11-21', 'blablabla...', 'permintaan ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar1` varchar(30) NOT NULL,
  `gambar2` varchar(30) NOT NULL,
  `gambar3` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `id_member`, `kategori`, `judul`, `alamat`, `kota`, `deskripsi`, `gambar1`, `gambar2`, `gambar3`, `status`) VALUES
(1, 1, 'kendaraan', 'Ferari', 'jl. ikan no 18, jakarta', 'Jakarta', 'kondisi mesin bagus ....', '1_1524737598.jpg', '1_15247375981.jpg', '1_1524737599.jpg', 'verified'),
(2, 2, 'kendaraan', 'penginapan 1', 'jl. cempaka no 90 malang', 'Malang', 'penginapan dengan harga terjangkau dan kualitas yang oke mempunyai ......', '2_1524739144.jpg', '2_15247391441.jpg', '2_15247391442.jpg', 'verified'),
(3, 1, 'kendaraan', 'Motor Tril', 'jl. ikan no 18a', 'Jakarta', 'kondisi mesin bagus', '3_1524737961.jpg', '3_15247379611.jpg', '3_15247379612.jpg', 'verified'),
(4, 1, 'kendaraan', 'Mobil VW', 'jl. alibaba no 10', 'Jakarta', 'blablabla....', '4_1524738678.jpg', '4_15247386781.jpg', '4_15247386782.jpg', 'verified'),
(13, 2, 'penginapan', 'penginapan 2', 'jl. sirap no 19 a', 'Malang', 'blablabla...', '2_1_1524739333.jpg', '2_2_1524739333.jpg', '2_3_1524739333.jpg', 'unverified'),
(14, 2, 'kendaraan', 'Penginapan', 'jl sirap no 19, malang', 'Malang', 'blablalba...', '14_1524739568.jpg', '2_2_1524739452.jpg', '2_3_1524739452.jpg', 'verified'),
(15, 12, 'kendaraan', 'Mobil pick up', 'jl mandala no 16', 'Malang', 'blablalbla...', '12_1_1524740013.jpg', '12_2_1524740013.jpg', '12_3_1524740013.jpg', 'verified'),
(16, 12, 'kendaraan', 'Motor Tril 2', 'jl mandala', 'Malang', 'blablabla...', '12_1_1524740272.jpg', '12_2_1524740272.jpg', '12_3_1524740272.jpg', 'verified'),
(17, 12, 'kendaraan', 'Mobil Pick up 2', 'jl mandala no 18', 'Malang', 'blablabla', '12_1_1524740354.jpg', '12_2_1524740354.jpg', '12_3_1524740354.jpg', 'verified'),
(18, 13, 'penginapan', 'penginapan 4', 'jl malio no 12', 'Jakarta', 'blablabla..', '13_1_1524740896.jpg', '13_2_1524740896.jpg', '13_3_1524740896.jpg', 'verified'),
(19, 13, 'penginapan', 'Penginapan 5', 'jl malio no 19', 'Jakarta', 'blablabla..', '13_1_1524740982.jpg', '13_2_1524740982.jpg', '13_3_1524740982.jpg', 'verified'),
(20, 13, 'penginapan', 'Penginapan 6', 'jl. malio no 20', 'Jakarta', 'blablabla..', '13_1_1524741066.jpg', '13_2_1524741066.jpg', '13_3_1524741066.jpg', 'unverified'),
(21, 1, 'kendaraan', 'tes1', 'jl. Sumbersari', 'Jakarta', 'tes1', '1_1_1526273754.jpg', '1_2_1526273754.jpg', '1_3_1526273754.jpg', 'unverified');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`email`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`,`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_peminjaman`),
  ADD KEY `id_member` (`id_pemilik`),
  ADD KEY `id_post` (`id_post`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_member` (`id_member`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `no_peminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
