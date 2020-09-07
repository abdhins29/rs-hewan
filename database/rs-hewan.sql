-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2019 pada 13.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs-hewan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kd_dokter` varchar(5) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `jam_kerja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kd_dokter`, `nm_dokter`, `gender`, `jam_kerja`) VALUES
('DK001', 'Drh. Isra Hadi', 'Laki-laki', '08.00 - 16.00'),
('DK002', 'Drh. Teguh Rianda', 'Laki-laki', '08.00 - 16.00'),
('DK003', 'Drh. Fira Leni', 'Perempuan', '08.00 - 16.00'),
('DK004', 'Drh. Nella Desiona', 'Perempuan', '08.00 - 16.00'),
('DK005', 'Drh. Hesty Rahayu', 'Perempuan', '08.00 - 16.00'),
('DK006', 'Drh. Annisa Rizka', 'Perempuan', '08.00 - 16.00'),
('DK007', 'Drh. Zella Nofitri', 'Perempuan', '08.00 - 16.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelayanan`
--

CREATE TABLE `tbl_pelayanan` (
  `kd_pelayanan` varchar(5) NOT NULL,
  `jns_pelayanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelayanan`
--

INSERT INTO `tbl_pelayanan` (`kd_pelayanan`, `jns_pelayanan`) VALUES
('JP001', 'Medical Check Up'),
('JP002', 'Operasi Mayor'),
('JP003', 'Operasi Minor'),
('JP004', 'Vaksinasi'),
('JP005', 'Konsultasi Kesehatan Hewan'),
('JP006', 'Cek Darah Lengkap (Hematologi)'),
('JP007', 'Cek Kimia Darah'),
('JP008', 'Pemeriksaan Parasit'),
('JP009', 'Cek dan Pemeriksaan Kulit'),
('JP010', 'Radiologi'),
('JP011', 'USG'),
('JP012', 'Apotek Lengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_regishewan`
--

CREATE TABLE `tbl_regishewan` (
  `kd_pasien` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nm_pasien` varchar(50) NOT NULL,
  `spesies` varchar(50) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `nm_pemilik` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_regishewan`
--

INSERT INTO `tbl_regishewan` (`kd_pasien`, `id_user`, `nm_pasien`, `spesies`, `umur`, `sex`, `nm_pemilik`, `alamat`) VALUES
('PS001', 2, 'Bruno', 'Buldog', '2th', 'Jantan', 'Dyvia Lefionita', 'Padang'),
('PS002', 2, 'Skype', 'Cihuahua', '1,5th', 'Betina', 'Dyvia Lefionita', 'Padang'),
('PS003', 3, 'Jimo', 'Kucing Anggora', '1th', 'Jantan', 'Joni', 'Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_res` int(11) NOT NULL,
  `kd_reservasi` varchar(5) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `kd_pasien` varchar(5) NOT NULL,
  `kd_pelayanan` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_res`, `kd_reservasi`, `tgl_masuk`, `tgl_keluar`, `kd_pasien`, `kd_pelayanan`, `kelas`) VALUES
(5, 'RS001', '2019-10-19', '2019-10-19', 'PS001', 'JP001', 'Kelas 1'),
(8, 'RS002', '2019-10-19', '2019-10-19', 'PS002', 'JP001', 'Kelas 1'),
(9, 'RS002', '2019-10-19', '2019-10-19', 'PS002', 'JP006', 'Kelas 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tmp`
--

CREATE TABLE `tbl_tmp` (
  `id_tmp` varchar(5) NOT NULL,
  `kd_pasien` varchar(5) NOT NULL,
  `kd_pelayanan` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nm_user`, `username`, `alamat`, `gender`, `nohp`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'rumah sakit hewan sumatera barat', 'Perempuan', '08123999999', 'admin', 'admin'),
(2, 'Cici', 'cici', 'padang', 'Perempuan', '08126877777', 'cici', 'user'),
(3, 'Joni', 'joni', 'padang', 'Laki-laki', '081268999999', 'joni', 'user'),
(4, 'Ardi', 'ardi', 'Padang Panjang', 'Laki-laki', '08526278888', 'ardi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indeks untuk tabel `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  ADD PRIMARY KEY (`kd_pelayanan`);

--
-- Indeks untuk tabel `tbl_regishewan`
--
ALTER TABLE `tbl_regishewan`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indeks untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_res`);

--
-- Indeks untuk tabel `tbl_tmp`
--
ALTER TABLE `tbl_tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
