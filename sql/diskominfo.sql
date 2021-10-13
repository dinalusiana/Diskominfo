-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2021 pada 17.11
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
-- Database: `diskominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `PASSWORD`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('tyo', 'd6a4740b2da6818f9d2da4fba80a72bf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `colocation`
--

CREATE TABLE `colocation` (
  `no` int(11) NOT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `nama_server` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `prosesor` varchar(255) DEFAULT NULL,
  `ram` varchar(255) DEFAULT NULL,
  `storage` varchar(255) DEFAULT NULL,
  `psu` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `type_server` varchar(255) DEFAULT NULL,
  `allocation` int(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tgl_pemasangan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `colocation`
--

INSERT INTO `colocation` (`no`, `instansi`, `ip`, `nama_server`, `os`, `prosesor`, `ram`, `storage`, `psu`, `merk`, `serial_number`, `location`, `type_server`, `allocation`, `keterangan`, `tgl_pemasangan`) VALUES
(1, 'Badan Kepegawaian Daerah Provinsi Jawa Tengah', '', 'BKD Cloud I', 'Proxmox', 'Intel Xeon ES-2407 (1 socket)', '128', '1000', '750 VA', 'HP PROLIANT DL380 GEN 8', '', 3, 'Rack Mount', 2, 'normal', '2017-01-01'),
(2, 'Badan Kepegawaian Daerah Provinsi Jawa Tengah', '', 'BKD Cloud II', 'Proxmox', '-', '', '', '', 'HP PROLIANT DL380 GEN 9', '', 4, 'Rack Mount', 2, 'normal', '2017-09-15'),
(3, 'Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah', '', 'ARPUSDA I', 'Unix/Linux', 'Intel Xeon E5506', '8', '1000', '-', 'FUJITSU PRIMERGY R300 S6', '', 2, 'Rack Mount', 2, 'normal', '2017-01-01'),
(4, 'Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah', '', 'ARPUSDA II', 'CentOS', 'Intel Xeon E5-2630 v4 2.2 GHz, 6 core', '64', '1000', '750x2 Watt', 'DELL PowerEdge R730', '', 2, 'Rack Mount', 2, 'normal', '2018-05-04'),
(5, 'Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah', '', 'ARPUSDA III', 'Proxmox', 'Intel(R) Xeon(R) silver 4110 CPU @ 2.10 GHz', '32', '3600', '750 Watt', 'Lenovo SR550', '', 5, 'Rack Mount', 2, 'Normal', '2019-04-29'),
(6, 'Dinas Koperasi, Usaha Kecil dan Menengah provinsi Jawa Tengah', '', 'DINKOP', '-', '-', '', '', '', 'SYSTEM X3650 M4', '', 3, 'Rack Mount', 2, 'normal', '2017-01-01'),
(7, 'Inspektorat Provinsi Jawa Tengah', '', 'SIMWAS', '-', '-', '', '', '', 'SYSTEM X3650 M4', '', 3, 'Rack Mount', 2, 'normal', '2017-01-01'),
(8, 'Dinas Perhubungan Provinsi Jawa Tengah', '', 'SIMJT', '-', '-', '', '', '', 'SYSTEM X3620 M3', '', 4, 'Rack Mount', 2, 'normal', '2017-01-01'),
(9, 'Dinas Perhubungan Provinsi Jawa Tengah', '', 'Web dan Aplikasi (KARTINI)', 'Centos 7', 'Intel Xeon ES-2620/26Hz', '8', '600', '', 'SYSTEM X3550 M4', '', 6, 'Rack Mount', 1, 'normal', '2018-01-12'),
(10, 'Dinas Perhubungan Provinsi Jawa Tengah', '', 'vpn cctv', '-', '-', '', '1000', '', 'HP Proliant DL20 Gen 9', '', 4, 'Rack Mount', 1, 'Normal', '0000-00-00'),
(11, 'Biro Administrasi Pembangunan Dearah Setda Provisi Jawa Tengah', '', 'SIMBANG DA', '-', '-', '', '', '', 'HP PROLIANT DL38562', '', 6, 'Rack Mount', 2, 'normal', '2017-01-01'),
(12, 'Dinas Pendidikan dan Kebudayaan Provinsi Jawa Tengah', '', 'PENDIDIKAAN-JAPIN', '-', '-', '', '', '', 'SYSTEM X3350 M4', '', 4, 'Rack Mount', 1, 'normal', '2017-05-18'),
(13, 'DPRD Provinsi Jawa Tengah', '', 'Server DPRD', 'Centos 7', 'XE0N GC 3S-2620 V 32,49 Hz', '16', '600', '550 Watt', 'LENOVO SYSTEM X 3350 M5', '', 4, 'Rack Mount', 1, 'normal', '2017-04-11'),
(14, 'Dinas Kepemudaan, Olah Raga dan Pariwisata Provinsi Jawa Tengah', '', 'DELL Power Edge R420', 'Centos 7', 'Intel(R) Xeon(R) CPU E5-2430 0 @ 2.20 GHz', '16', '600', '550 Watt', 'Power Edge R420', '', 4, 'Rack Mount', 2, 'normal', '2017-04-12'),
(15, 'Dinas Kepemudaan Olah Raga dan Pariwisata Provinsi Jawa Tengah', '', 'HP Proliant DL60 Gen9', 'Linux', 'Intel(R) Xeon(R) E5-2600 v-product family', '16', '1000', '550 Watt', 'HP Proliant DL60 Gen9', '', 6, 'Rack Mount', 1, 'Normal', '0000-00-00'),
(16, 'Dinas Kepemudaan Olah Raga dan Pariwisata Provinsi Jawa Tengah', '', 'IBM System X3550M4', 'Linux', 'Xeon E-5 2600 V2', '16', '1000', '550 Watt', 'SYSTEM X3550 M4', '', 6, 'Rack Mount', 2, 'Normal', '2017-01-10'),
(17, 'Dinas Pekerjaan Umum Sumber Daya Air dan Penataan Ruang Provinsi Jawa Tengah', ' ', 'Lenovo X3650', 'CentOS 7', 'Intel Xeon E335506', '2', '', 'Power Suplay bot-plug', 'SYSTEM X3650 M5', ' ', 4, 'Rack Mount', 2, 'Normal', '2017-01-01'),
(18, 'RSUD Margono Purwokerto Provinsi Jawa Tengah', ' ', 'QNAPTS-8794', '-', 'Intel Core i3 3.3 GHz', '4', '1000', ' ', ' QNAP TS-EC880U', ' ', 4, 'Rack Mount', 2, 'Normal', '2017-01-01'),
(19, 'Dinas Pekerjaan Umum Bina Marga dan Cipta Karya Provinsi Jawa Tengah', ' ', 'Storage', '-', '-', '-', '8000', ' ', 'STOREWIZ E V3700', ' ', 1, 'Rack Mount', 1, 'Normal', '2017-01-01'),
(20, 'Badan Pengelola Keuangan dan Aset Daerah Provinsi Jawa Tengah', ' ', 'Cloud 6', 'Proxmox 4.4', 'Intel', '40', '1000', '550 Watt', 'HP PROLIANT DL 160 GEN9', ' ', 4, 'Rack Mount', 1, 'Normal', '2017-04-11'),
(21, 'Dinas Tenaga Kerja dan Transmigrasi Provinsi Jawa Tengah', ' ', 'Nakertrans', 'Centos 6.8', 'Intel (R) Xeon (R) CPU E5520 @ 2.27 GHz', '6', '438', '550 Watt', 'Dell Power Edge R710', ' ', 3, 'Rack Mount', 2, 'Normal', '2017-07-14'),
(22, 'Satpol PP Provinsi Jawa Tengah', ' ', 'Satpol I', '-', '-', '12', ' ', ' ', 'Lenovo RS 140', ' ', 3, 'Rack Mount', 1, 'Normal', '2017-05-12'),
(23, ' Satpol PP Provinsi Jawa Tengah', ' ', 'Satpol II', '-', '-', ' ', ' ', ' ', 'Lenovo RS 140', ' ', 3, 'Rack Mount', 1, 'Normal', '2017-05-12'),
(24, 'Biro Hukum Setda Provinsi Jawa Tengah', ' ', 'Cloud JDIHUKUM', 'Proxmox', 'xeon 6 Core E5-2603V5', '16', '1000', '550 Watt', 'SYSTEM X 3550 M5', ' ', 4, 'Rack Mount', 1, 'Normal', '2018-04-30'),
(25, 'Dinas Komunikasi dan Informatika Provinsi Jawa Tengah', ' ', 'Relawan TIK', '-', '-', '32', '1800', '550 Watt', 'IBM System X3650', ' ', 5, 'Rack Mount', 2, 'Normal', '2018-05-28'),
(26, 'Dinas Kearsipan dan Perpustakaan', ' ', 'Arpusda', 'Proxmox', 'Intel(R) Xeon(R) Silver 4110 CPU @ 2.10GHz', '32', '3600', '750 Watt', 'Lenovo sr550', ' ', 1, 'Rack Mount', 2, 'Normal', '2019-04-29'),
(27, 'Dinas Komunikasi dan Informatika', '', 'PDKI', 'Proxmox', 'Intel(R) Xeon(R) Silver 4114 CPU 10 cores @ 2.10 GHz', '32', '3000', '750', 'DELL EMC', '', 1, 'Rack Mount', 2, 'Normal', '0000-00-00'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(29, '', '', '', '', '', '', '', '', '', '', 2, 'Rack Mount', 0, 'Normal', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hosting`
--

CREATE TABLE `hosting` (
  `no` int(11) NOT NULL,
  `nama_opd` varchar(255) DEFAULT NULL,
  `lokasi_hosting` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `quota` varchar(255) DEFAULT NULL,
  `used` varchar(255) DEFAULT NULL,
  `keb_bw` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hosting`
--

INSERT INTO `hosting` (`no`, `nama_opd`, `lokasi_hosting`, `domain`, `package`, `quota`, `used`, `keb_bw`, `nama`, `telepon`) VALUES
(1, 'Inspektorat Provinsi Jawa Tengah', '', 'http://inspektorat.jatengprov.go.id', '', '10000 M', '2575', '', '', ''),
(2, 'DPRD Provinsi Jawa Tengah', '', 'http://dprd.jatengprov.go.id', '', 'unlimited', '2026.46', '', '', ''),
(3, 'DPRD Provinsi Jawa Tengah untuk Aplikasi Elibrary', '', 'http://elibary.dprd.jatengprov.go.id', '', 'unlimited', '338.27', '', '', ''),
(4, 'DPRD Provinsi Jawa Tengah untuk Aplikasi Warta Legislatif', '', 'http://wartalegislatif.dprd.jatengprov.go.id', '', 'unlimited', '1146.13', '', '', ''),
(5, 'DPRD Provinsi Jawa Tengah untuk PPID', '', 'http://ppid.dprd.jatengprov.go.id', '', 'unlimited', '0.26', '', '', ''),
(6, 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Provinsi Jawa Tengah', '', 'http://bapedda.jatengprov.go.id/2016', '', 'unlimited', '10092,44', '70', '', ''),
(7, 'Badan Pengelola Pendapatan Daerah Provinsi Jawa Tengah', '', 'http://bppd.jatengprov.go.id', '', 'unlimited', '772.88', '', '', ''),
(8, 'Badan Pengelolaan Pendapatan Daerah Provinsi Jawa Tengah untuk Aplikasi PAD Online', '', 'Proses Pengajuan', '', '', '', '', '', ''),
(11, 'Badan Pengelola Keuangan dan Aset Daerah Provinsi Jawa Tengah', '', 'http://bpkad.jatengprov.go.id', '', '1000 M', '3370', '', '', ''),
(15, 'wqw', '', '', '', '', '', '', '', ''),
(18, 'RSUD Prof. Dr. Margono Soekarjo', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `no` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`no`, `location`) VALUES
(1, 'RACK 1'),
(2, 'RACK 2'),
(3, 'RACK 3'),
(4, 'RACK 4'),
(5, 'RACK 5'),
(6, 'RACK 6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `colocation`
--
ALTER TABLE `colocation`
  ADD PRIMARY KEY (`no`),
  ADD KEY `location` (`location`);

--
-- Indeks untuk tabel `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `colocation`
--
ALTER TABLE `colocation`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `hosting`
--
ALTER TABLE `hosting`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `colocation`
--
ALTER TABLE `colocation`
  ADD CONSTRAINT `colocation_ibfk_1` FOREIGN KEY (`location`) REFERENCES `rak` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
