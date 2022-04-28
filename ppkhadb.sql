-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2020 pada 13.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppkhadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan_karir`
--

CREATE TABLE `bimbingan_karir` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bimbingan_karir`
--

INSERT INTO `bimbingan_karir` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'Bli-bli', 'Audit', '2020-10-25', 'Telah Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instrumen_tracer_study`
--

CREATE TABLE `instrumen_tracer_study` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `instrumen_tracer_study`
--

INSERT INTO `instrumen_tracer_study` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'Gojek', 'GSG', '2020-10-25', 'Belum Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partisipasi_alumni`
--

CREATE TABLE `partisipasi_alumni` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partisipasi_alumni`
--

INSERT INTO `partisipasi_alumni` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'Shopee', 'Audit', '2020-10-25', 'Belum Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rasio_alumni`
--

CREATE TABLE `rasio_alumni` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rasio_alumni`
--

INSERT INTO `rasio_alumni` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'Metrodata', 'Audit', '2020-10-25', 'Telah Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat_kepuasan_alumni`
--

CREATE TABLE `tingkat_kepuasan_alumni` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tingkat_kepuasan_alumni`
--

INSERT INTO `tingkat_kepuasan_alumni` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'IT Del', 'Audit', '2020-10-25', 'Belum Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracer_study`
--

CREATE TABLE `tracer_study` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tracer_study`
--

INSERT INTO `tracer_study` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 12', '1.xlsx', '1.xlsx', 'IT Del2', 'Audit2', '2020-10-29', 'Telah Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran_kerja_lulusan`
--

CREATE TABLE `ukuran_kerja_lulusan` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran_kerja_lulusan`
--

INSERT INTO `ukuran_kerja_lulusan` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'IT Del', 'Audit', '2020-10-25', 'Belum Dilaksanakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `PASSWORD`, `nama`, `email`, `photo`, `notelp`) VALUES
('Joh', 'johaja', 'Johannes PM Manurung', 'joh12@gmail.com', 'Tidak ada', '081234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu_tunggu_kerja_lulusan`
--

CREATE TABLE `waktu_tunggu_kerja_lulusan` (
  `id_kegiatan` int(20) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file_biaya` varchar(100) NOT NULL,
  `pengada` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `waktu_tunggu_kerja_lulusan`
--

INSERT INTO `waktu_tunggu_kerja_lulusan` (`id_kegiatan`, `nama_kegiatan`, `nama_file`, `file_biaya`, `pengada`, `lokasi`, `tanggal`, `STATUS`) VALUES
(1, 'Kegiatan 1', 'xyz.xls', 'abc.xls', 'IT Del', 'Audit', '2020-10-25', 'Telah Dilaksanakan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bimbingan_karir`
--
ALTER TABLE `bimbingan_karir`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `instrumen_tracer_study`
--
ALTER TABLE `instrumen_tracer_study`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `partisipasi_alumni`
--
ALTER TABLE `partisipasi_alumni`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `rasio_alumni`
--
ALTER TABLE `rasio_alumni`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tingkat_kepuasan_alumni`
--
ALTER TABLE `tingkat_kepuasan_alumni`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tracer_study`
--
ALTER TABLE `tracer_study`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `ukuran_kerja_lulusan`
--
ALTER TABLE `ukuran_kerja_lulusan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `waktu_tunggu_kerja_lulusan`
--
ALTER TABLE `waktu_tunggu_kerja_lulusan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bimbingan_karir`
--
ALTER TABLE `bimbingan_karir`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `instrumen_tracer_study`
--
ALTER TABLE `instrumen_tracer_study`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `partisipasi_alumni`
--
ALTER TABLE `partisipasi_alumni`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rasio_alumni`
--
ALTER TABLE `rasio_alumni`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tingkat_kepuasan_alumni`
--
ALTER TABLE `tingkat_kepuasan_alumni`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tracer_study`
--
ALTER TABLE `tracer_study`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ukuran_kerja_lulusan`
--
ALTER TABLE `ukuran_kerja_lulusan`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `waktu_tunggu_kerja_lulusan`
--
ALTER TABLE `waktu_tunggu_kerja_lulusan`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
