-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2018 pada 05.29
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mediskin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apoointment`
--

CREATE TABLE `apoointment` (
  `No` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` int(15) NOT NULL,
  `klinik_pilih` varchar(50) NOT NULL,
  `dokter_pilih` varchar(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_clinic`
--

CREATE TABLE `data_clinic` (
  `id` int(11) NOT NULL,
  `klinik` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(25) NOT NULL,
  `berlangganan` varchar(25) NOT NULL,
  `telepon` char(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jadwal_klinik` text NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_clinic`
--

INSERT INTO `data_clinic` (`id`, `klinik`, `nama_pemilik`, `email`, `password`, `berlangganan`, `telepon`, `alamat`, `jadwal_klinik`, `foto`) VALUES
(3, 'Md Glowing Klinik', 'medina zein', 'mdglowingskin@gmail.com', '123mdku', 'Rp.69.999', '0226301015', 'jln. Aceh No.60, Merdeka, Sumur Bandung, Kota Band', 'Senin s/d Sabtu : 11.00 - 18.00', 0x6d642d636c696e69632d62792d6c617a6574612e6a7067),
(4, 'Airin Klinik', 'dr.wahyuningsih', 'airinku@gmail.com', '123airin', 'Rp.69.999', '02651508890', 'jln. antapani no 33', 'Senin s/d Sabtu : 11.00 - 16.00', 0x31362e6a7067),
(5, 'Erha Klinik', ' zein Arrahman', 'erhakliniku@gmail.com', '123erha', 'Rp.69.999', '022630757', 'Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal,Ba', 'Senin s/d Sabtu : 11.00 - 17.00', 0x31312e6a7067),
(7, 'Carissa Klinik', 'Santi Iryawanti', 'carissaku@gmail.com', '123carissa', 'Rp.69.999', '022657001', 'Jl. Soekarno-Hatta No.56, Bandung', 'Senin s/d Jumat : 11.00 - 17.00', 0x6361726973616b752e6a7067),
(8, 'Natasha Klinik', 'natasha aina', 'natashaku@gmail.com', '123natasha', 'Rp.69.999', '0222630075', 'Jl. Supratman No.84, Cihaur Geulis, Cibeunying ', 'Senin - Sabtu : 09.00 sd 16.30', 0x31302e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `level` varchar(25) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` char(30) NOT NULL,
  `password` char(30) NOT NULL,
  `umur` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `telepon` text NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `level`, `nama_user`, `username`, `email`, `password`, `umur`, `gender`, `telepon`, `alamat`) VALUES
(4, 'user', 'Rina Anjari', 'rinaanjari', 'rinaanjari75@gmail.com', '123Anjari', 20, 'Perempuan', '085220572002', 'jln Cilengkrang 1 no 30'),
(7, 'user', 'rana altari', 'ranaa', 'ranaaltari75@gmail.com', '123rana', 20, 'Perempuan', '081226370517', 'jln. Margahayu no 33'),
(9, 'user', 'Lita Arina', 'litaarinda', 'litaaarinda55@gmail.com', '123lita', 19, 'Perempuan', '085220572002', 'Jln.Palintang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `rek` char(50) NOT NULL,
  `tot` double NOT NULL,
  `tel` int(15) NOT NULL,
  `tgl` date NOT NULL,
  `bukti` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `nama`, `rek`, `tot`, `tel`, `tgl`, `bukti`) VALUES
(1, 'Medina Zein', '3300-255-1256', 124.999, 2147483647, '0000-00-00', 0x372e6a7067),
(2, 'Medina Zein', '3300-255-1256', 124.999, 2147483647, '2018-12-24', 0x372e6a7067),
(3, 'aina natasha', '3300-255-12000', 69.999, 2147483647, '2018-12-25', 0x756e647568616e2e706e67),
(4, 'Rina Anjari', '3300-255-1256', 399.999, 2147483647, '0000-00-00', 0x41504558342e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `langganan`
--

CREATE TABLE `langganan` (
  `id_member` int(11) NOT NULL,
  `jns_member` varchar(50) NOT NULL,
  `hrg_member` double NOT NULL,
  `bulanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `langganan`
--

INSERT INTO `langganan` (`id_member`, `jns_member`, `hrg_member`, `bulanan`) VALUES
(1, 'Reguler', 69.999, 'bulan'),
(2, 'Exclusive', 124.999, '6 bulan'),
(3, 'Premium', 399.999, 'tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_pay` int(11) NOT NULL,
  `email_pay` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_pay`, `email_pay`, `nama`, `total`) VALUES
(4, 'medinaku@gmail.com', 'medina zein', 124.999),
(5, 'medinaku@gmail.com', 'medina zein', 124.999),
(8, 'ainanatasha', 'Aina natasha', 69.999),
(9, 'rinaanjari75@gmail.com', 'Rina Anjari', 399.999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `alamat_dokter` varchar(50) NOT NULL,
  `klinik_dokter` varchar(25) NOT NULL,
  `jadwal_dokter` text NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `ruangan`, `alamat_dokter`, `klinik_dokter`, `jadwal_dokter`, `gambar`) VALUES
(64, 'dr. Ina Lina. SpKk', 'ER-001', 'Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal,Ba', 'Erha Klinik', 'Senin : 10.00 s/d 14.30\r\nRabu : 10.00 s/d 14.30', 0x496e73742d696d6167652d312e6a7067),
(65, 'dr. Yunus Ahmad, SpKk', 'ER-002', 'Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal,Ba', 'Erha Klinik', 'Kamis : 14.00 s/d 18.00\r\nJumat : 14.00 s/d 18.00', 0x64722d61727468612d6c61746965662d73706d312e363030783830302e6a7067),
(66, 'dr. Lia ,SpKk', 'R-05', 'Jl. Supratman No.84, Cihaur Geulis, Cibeunying', 'Natasha Klinik', 'Senin : 09.00 s/d 11.00,\r\nRabu  : 10.00 s/d 13.00', 0x646f6b746572332e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apoointment`
--
ALTER TABLE `apoointment`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `data_clinic`
--
ALTER TABLE `data_clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal` (`jadwal`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_pay`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apoointment`
--
ALTER TABLE `apoointment`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_clinic`
--
ALTER TABLE `data_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `langganan`
--
ALTER TABLE `langganan`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_dokter` (`id_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
