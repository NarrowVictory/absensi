-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 06:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectabsensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` enum('Sakit','Izin','Alpa','Hadir') DEFAULT NULL,
  `id_kelas` varchar(8) DEFAULT NULL,
  `id_siswa` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `keterangan`, `id_kelas`, `id_siswa`) VALUES
(12, '2016-01-24', 'Izin', 'K1', '10113070'),
(13, '2016-01-24', 'Hadir', 'K1', '10115001'),
(14, '2016-01-24', 'Sakit', 'K1', '10115002'),
(15, '2019-12-26', 'Hadir', 'K1', '10115001'),
(16, '2019-12-26', 'Hadir', 'K1', '10115002');

-- --------------------------------------------------------

--
-- Table structure for table `absensi2`
--

CREATE TABLE `absensi2` (
  `tanggal` date NOT NULL,
  `keterangan` enum('Sakit','Izin','Alpa','Hadir') DEFAULT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `id_siswa` varchar(20) NOT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `mk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi2`
--

INSERT INTO `absensi2` (`tanggal`, `keterangan`, `id_kelas`, `id_siswa`, `semester`, `mk`) VALUES
('2020-01-01', 'Hadir', 'TI-1A', '1957301002', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301002', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301003', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301003', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Alpa', 'TI-1A', '1957301004', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301004', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301005', '1', 'Bahasa Assembly'),
('2020-01-01', 'Alpa', 'TI-1A', '1957301005', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Sakit', 'TI-1A', '1957301014', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301014', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301015', '1', 'Bahasa Assembly'),
('2020-01-01', 'Sakit', 'TI-1A', '1957301015', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Sakit', 'TI-1A', '1957301016', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301016', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301017', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301017', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301023', '1', 'Bahasa Assembly'),
('2020-01-01', 'Izin', 'TI-1A', '1957301023', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301025', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301025', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301026', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301026', '1', 'Logika dan Algoritma'),
('2020-01-01', 'Izin', 'TI-1A', '1957301027', '1', 'Bahasa Assembly'),
('2020-01-01', 'Hadir', 'TI-1A', '1957301027', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Alpa', 'TI-1A', '1957301002', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301002', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301002', '1', 'Matematika 1'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301002', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301003', '1', 'Bahasa Assembly'),
('2020-01-18', 'Izin', 'TI-1A', '1957301003', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301003', '1', 'Matematika 1'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301003', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301004', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301004', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301004', '1', 'Matematika 1'),
('2020-01-18', 'Alpa', 'TI-1A', '1957301004', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Alpa', 'TI-1A', '1957301005', '1', 'Bahasa Assembly'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301005', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301005', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301005', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301014', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301014', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301014', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301014', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301015', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301015', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Alpa', 'TI-1A', '1957301015', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301015', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Izin', 'TI-1A', '1957301016', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301016', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301016', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301016', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301017', '1', 'Bahasa Assembly'),
('2020-01-18', 'Izin', 'TI-1A', '1957301017', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301017', '1', 'Matematika 1'),
('2020-01-18', 'Izin', 'TI-1A', '1957301017', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301023', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301023', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301023', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301023', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Alpa', 'TI-1A', '1957301025', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301025', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301025', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301025', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301026', '1', 'Bahasa Assembly'),
('2020-01-18', 'Sakit', 'TI-1A', '1957301026', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Izin', 'TI-1A', '1957301026', '1', 'Matematika 1'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301026', '1', 'Praktikum Bahasa Ass'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301027', '1', 'Bahasa Assembly'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301027', '1', 'Logika dan Algoritma'),
('2020-01-18', 'Hadir', 'TI-1A', '1957301027', '1', 'Matematika 1'),
('2020-01-18', 'Alpa', 'TI-1A', '1957301027', '1', 'Praktikum Bahasa Ass');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `id` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `kd_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`id`, `pesan`, `kelas`, `tgl`, `kd_dosen`) VALUES
(1, '', 'K6', '2020-01-17', 'Hehe'),
(2, 'TES', 'K6', '2020-01-17', '978284'),
(3, '    Silahkan isi pesan anda\r\n    ', '436346', '2020-01-17', '3453'),
(4, '    Silahkan isi pesan anda\r\n    ', '436346', '2020-01-17', '34343'),
(5, '    Silahkan isi pesan anda\r\n    ', 'K1', '2020-01-16', '345435'),
(6, '    Dikarenakan Ada Acara Keluarga, Besok Libur ya\r\n    ', 'K1', '2020-01-16', 'P8'),
(7, 'Untuk Jadwal MK DPW, diganti hari jumat\r\n    ', 'I9', '2020-01-16', 'P3'),
(8, 'HEHE\r\n    ', 'I9', '2020-01-16', 'Diyang Mardiana');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(8) NOT NULL,
  `nama_guru` varchar(20) DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `foto_profil` varchar(254) DEFAULT NULL,
  `status` enum('Admin','Guru') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jk`, `tgl_lahir`, `email`, `username`, `password`, `no_telp`, `foto_profil`, `status`) VALUES
('MH', 'Muhammad Harris', 'Pria', '2020-01-12', 'harris@gmail.com', 'muhammadharris', 'e10adc3949ba59abbe56e057f20f883e', '082292221879', '35-351263_anime-naruto-all-character-images-sasuke-hd-wallpaper.png', 'Guru'),
('MRK', 'M Rifki Kardawi', 'Pria', '2020-01-12', 'rifkilhokseumawe2484@gmail.com', 'rifki123', 'e10adc3949ba59abbe56e057f20f883e', '082292221879', '35-351263_anime-naruto-all-character-images-sasuke-hd-wallpaper.png', 'Guru'),
('P1', 'Admin', 'Pria', '1994-05-19', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '00000', 'attachment_94788434.jpg', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(8) NOT NULL,
  `nama_kelas` varchar(20) DEFAULT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `id_guru` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_sekolah`, `id_guru`) VALUES
('TI-1A', 'TI-1A', 1, 'P2'),
('TI-1B', 'TI-1B', 1, 'P2'),
('TI-1C', 'TI-1C', 1, 'P2'),
('TI-2A', 'TI-2A', 1, 'P2'),
('TI-2B', 'TI-2B', 1, 'P2'),
('TI-2C', 'TI-2C', 1, 'P2'),
('TI-3A', 'TI-3A', 1, 'P2'),
('TI-3B', 'TI-3B', 1, 'P2'),
('TI-3C', 'TI-3C', 1, 'P2'),
('TI-4A', 'TI-4A', 1, 'P2'),
('TI-4B', 'TI-4B', 1, 'P2'),
('TI-4C', 'TI-4C', 1, 'P2');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `deskripsi`) VALUES
(1, 'Politeknik Negeri Lhokseumawe', 'Jl. Medan-Banda Aceh - Kota Lh', 'Mandiri, Unggul, Global');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(12) NOT NULL,
  `nama_siswa` varchar(20) DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `nama_ortu` varchar(20) DEFAULT NULL,
  `telp_ortu` varchar(13) DEFAULT NULL,
  `id_kelas` varchar(8) DEFAULT NULL,
  `foto_murid` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jk`, `tgl_lahir`, `alamat`, `no_telp`, `nama_ortu`, `telp_ortu`, `id_kelas`, `foto_murid`) VALUES
('1657301001', 'Ahmad Kurniawan', 'Pria', '2020-01-21', 'Lhokseumawe', '082292221879', 'gyijh', '089876541234', 'TI-4A', '32c85c66e56c16729b04de8e76051d04.png'),
('1657301004', 'Awanda Wiratama', 'Pria', '2020-01-14', 'Lhokseumawe', '08645431245', 'bjbkj', '089876541234', 'TI-4A', '111.jpg'),
('1657301006', 'Aida Ulfa', 'Wanita', '2019-12-31', 'Lhokseumawe', '098767893265', 'grgr', '076478532568', 'TI-4C', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1657301008', 'Nur Fajeriana', 'Wanita', '2020-01-19', 'Lhokseumawe', '08645431245', 'gyijh', '076478532568', 'TI-4A', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1657301010', 'Suviana Visca', 'Wanita', '2020-01-07', 'Lhokseumawe', '098767893265', 'gyijh', '08654566647', 'TI-4A', 'Gambar-Anime-Cewek-10.jpg'),
('1657301015', 'Fadhil Purnahar', 'Pria', '2020-01-10', 'Lhokseumawe', '094376347524', 'MH', '089876541234', 'TI-4B', '1084449.jpg'),
('1657301016', 'Cut Mila', 'Wanita', '2020-01-20', 'Lhokseumawe', '08554344458', 'bjbkj', '089876541234', 'TI-4B', 'images (1).jpg'),
('1657301017', 'Noni Novita', 'Wanita', '2020-01-21', 'Lhokseumawe', '08645431245', 'bjbkj', '076478532568', 'TI-4B', '6041925-dark-anime-wallpaper.jpg'),
('1657301018', 'Fadhel Irawan', 'Pria', '2020-01-15', 'Lhokseumawe', '08645431245', 'wkwk', '089876541234', 'TI-4B', '111.jpg'),
('1657301025', 'Della Arista', 'Wanita', '2020-01-29', 'Lhokseumawe', '08645431245', 'bjbkj', '076478532568', 'TI-4C', 'Gambar-Anime-Cewek-10.jpg'),
('1657301027', 'Iqbal Panutan', 'Pria', '2020-01-22', 'Lhokseumawe', '082292221879', 'gfhg', '089876541234', 'TI-4C', '32c85c66e56c16729b04de8e76051d04.png'),
('1757301002', 'Raisul Wazifuddin', 'Pria', '2020-01-13', 'Lhokseumawe', '082292221879', 'grgr', '082292221879', 'TI-3A', '1084449.jpg'),
('1757301004', 'Muhammad Fazhil', 'Pria', '2020-01-30', 'Lhoksukon', '098767893265', 'grgr', '096734287645', 'TI-3A', '6041925-dark-anime-wallpaper.jpg'),
('1757301007', 'Qisha Shahira', 'Pria', '2020-01-14', 'Lhokseumawe', '082292221879', 'wkwk', '096734287645', 'TI-3C', 'images (1).jpg'),
('1757301009', 'Qatrun Nada', 'Wanita', '2020-01-14', 'Lhokseumawe', '082292221879', 'MH', '076478532568', 'TI-3A', 'images (1).jpg'),
('1757301010', 'Cut Adnin Nalisa', 'Wanita', '2020-01-21', 'Lhokseumawe', '098767893265', 'MH', '096734287645', 'TI-3A', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1757301015', 'Khairunnisa Atami', 'Wanita', '2020-01-28', 'Lhokseumawe', '094376347524', 'grgr', '082292221879', 'TI-3A', 'images (1).jpg'),
('1757301034', 'Alwazir Fitrah', 'Pria', '2020-01-14', 'Lhokseumawe', '098767893265', 'MH', '082292221879', 'TI-3A', '11.jpg'),
('1757301038', 'Adji Prasetyo', 'Pria', '2020-01-15', 'Lhokseumawe', '098767893265', 'wkwk', '089876541234', 'TI-3C', '111.jpg'),
('1757301050', 'Aulia Suhada', 'Pria', '2020-01-21', 'Lhokseumawe', '08554344458', 'grgr', '096734287645', 'TI-3A', '1218612_wallpaper-anime-lucu.jpg'),
('1757301059', 'Savira Camalia Niswa', 'Wanita', '2020-01-15', 'Lhoksukon', '098767893265', 'bjbkj', '082292221879', 'TI-3C', 'Gambar-Anime-Cewek-10.jpg'),
('1757301063', 'Sylva Maidyta', 'Wanita', '2020-01-26', 'Lhokseumawe', '08554344458', 'gfhg', '076478532568', 'TI-3A', '111.jpg'),
('1757301065', 'Cahaya Julita', 'Wanita', '2020-01-16', 'Lhokseumawe', '094376347524', 'gfhg', '089876541234', 'TI-3B', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1757301066', 'Suci Aprilya', 'Wanita', '2020-01-28', 'Lhokseumawe', '082292221879', 'gyijh', '076478532568', 'TI-3B', 'Gambar-Anime-Cewek-10.jpg'),
('1757301067', 'Azira Firsty', 'Pria', '2020-01-19', 'Lhokseumawe', '08645431245', 'grgr', '076478532568', 'TI-3A', 'download.jpg'),
('1757301069', 'Amaldi Sunan Darga', 'Pria', '2020-01-13', 'Lhokseumawe', '08554344458', 'gfhg', '082292221879', 'TI-3A', '166274381-352-k133585.jpg'),
('1757301071', 'Chaidir Al Mujabbar ', 'Pria', '2020-01-14', 'Lhokseumawe', '094376347524', 'bjbkj', '08654566647', 'TI-3B', '32c85c66e56c16729b04de8e76051d04.png'),
('18573010', 'Muhammad', 'Pria', '2019-12-19', 'Muhammad Rifki', '08765444', 'eerer', 'rere', 'I9', 'bayu.jpg'),
('1857301003', 'Reza Alfara', 'Pria', '2020-01-26', 'Lhokseumawe', '08554344458', 'gfhg', '076478532568', 'TI-2A', '11.jpg'),
('1857301005', 'Nurfaizah', 'Pria', '2020-01-27', 'Lhokseumawe', '098767893265', 'bjbkj', '082292221879', 'TI-2B', '32c85c66e56c16729b04de8e76051d04.png'),
('1857301007', 'Sarah Amelia', 'Wanita', '2020-01-19', 'Lhokseumawe', '08645431245', 'wkwk', '082292221879', 'TI-2C', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1857301008', 'Cut Salsabila Umara', 'Wanita', '2020-01-09', 'Lhokseumawe', '08554344458', 'gfhg', '089876541234', 'TI-2A', '1084449.jpg'),
('1857301009', 'Ika Wulandari', 'Wanita', '2020-01-06', 'Lhokseumawe', '098767893265', 'wkwk', '076478532568', 'TI-2A', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1857301011', 'Dian Maulida', 'Wanita', '2020-01-22', 'Lhoksukon', '08645431245', 'wkwk', '096734287645', 'TI-2A', 'Gambar-Anime-Cewek-10.jpg'),
('1857301014', 'Salsa Bila Akmal', 'Wanita', '2020-01-18', 'Lhokseumawe', '08645431245', 'grgr', '089876541234', 'TI-2A', '166274381-352-k133585.jpg'),
('1857301015', 'Nisri Faradilla', 'Wanita', '2020-01-07', 'Lhokseumawe', '098767893265', 'gfhg', '096734287645', 'TI-2A', 'images (1).jpg'),
('1857301016', 'Teuku Nuruzzahari', 'Pria', '2020-01-20', 'Lhoksukon', '08645431245', 'grgr', '076478532568', 'TI-2A', '32c85c66e56c16729b04de8e76051d04.png'),
('1857301017', 'Muhammad Rezeki Anan', 'Pria', '2020-01-29', 'Lhokseumawe', '08554344458', 'gfhg', '076478532568', 'TI-2A', '111.jpg'),
('1857301018', 'Muhammad Yudi Ramadh', 'Pria', '2020-01-17', 'Lhoksukon', '08554344458', 'gfhg', '08654566647', 'TI-2A', 'download.jpg'),
('1857301029', 'Muhammad Fadil Khair', 'Pria', '2020-01-20', 'Lhokseumawe', '08554344458', 'grgr', '089876541234', 'TI-2B', '166274381-352-k133585.jpg'),
('1857301032', 'Nishra Ilkhalissia', 'Wanita', '2020-01-21', 'Lhokseumawe', '098767893265', 'gfhg', '076478532568', 'TI-2B', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1857301034', 'Nabila Mufida', 'Wanita', '2020-01-22', 'Lhoksukon', '08645431245', 'gfhg', '096734287645', 'TI-2B', 'Gambar-Anime-Cewek-10.jpg'),
('1857301035', 'Rahmahtillah', 'Wanita', '2020-01-12', 'Lhoksukon', '082292221879', 'wkwk', '076478532568', 'TI-2B', 'images (1).jpg'),
('1857301039', 'Maulana', 'Pria', '2020-01-15', 'Lhokseumawe', '098767893265', 'wkwk', '089876541234', 'TI-2B', '11.jpg'),
('1857301041', 'Muhammad Rizky Maula', 'Pria', '2020-01-19', 'Lhokseumawe', '08554344458', 'grgr', '096734287645', 'TI-2B', 'download.jpg'),
('1857301042', 'Muhammad Rizal', 'Pria', '2020-01-12', 'Lhokseumawe', '08645431245', 'bjbkj', '096734287645', 'TI-2B', '111.jpg'),
('1857301047', 'Muhammad Rifki Karda', 'Pria', '2020-01-13', 'Lhokseumawe', '08554344458', 'gfhg', '096734287645', 'TI-2B', '111.jpg'),
('1857301051', 'Rizky Ananda', 'Pria', '2020-01-22', 'Lhokseumawe', '08645431245', 'gfhg', '089876541234', 'TI-2C', '166274381-352-k133585.jpg'),
('1857301053', 'Tajun Nur', 'Pria', '2020-01-15', 'Lhokseumawe', '08645431245', 'wkwk', '08654566647', 'TI-2C', 'download.jpg'),
('1857301055', 'Ryandi Aziz', 'Pria', '2020-01-01', 'Lhokseumawe', '082292221879', 'gyijh', '076478532568', 'TI-2C', '32c85c66e56c16729b04de8e76051d04.png'),
('1857301070', 'Muhammad Harris', 'Pria', '2020-01-15', 'Lhoksukon', '082292221879', 'MH', '082292221879', 'TI-2B', 'a6042daf47ff16e463d783fe1f7c4891.jpg'),
('1957301002', 'Annisa Rizka Aulia', 'Wanita', '2020-01-14', 'Lhokseumawe', '08645431245', 'grgr', '089876541234', 'TI-1A', '111.jpg'),
('1957301003', 'Dicky Aulia Harahap', 'Pria', '2019-12-31', 'Lhokseumawe', '098767893265', 'gfhg', '096734287645', 'TI-1A', '32c85c66e56c16729b04de8e76051d04.png'),
('1957301004', 'Maulida Syadzwina', 'Wanita', '2020-01-21', 'Lhokseumawe', '094376347524', 'bjbkj', '076478532568', 'TI-1A', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1957301005', 'Mhd Taufik Alhamdi P', 'Pria', '2020-01-17', 'Lhokseumawe', '098767893265', 'bjbkj', '076478532568', 'TI-1A', '166274381-352-k133585.jpg'),
('1957301006', 'Muhammad Fajar Al Fa', 'Pria', '2020-01-08', 'Lhokseumawe', '098767893265', 'wkwk', '076478532568', 'TI-1B', 'best-anime-Tokya-Ghoul-HD-wallpapers_4d470f76dc99e18ad75087b1b8410ea9.jpg'),
('1957301007', 'Muhammad Kausar', 'Pria', '2020-01-22', 'Lhokseumawe', '08554344458', 'gfhg', '08654566647', 'TI-1B', 'download.jpg'),
('1957301008', 'Rahmaini Salsabila S', 'Wanita', '2020-01-16', 'Lhokseumawe', '08554344458', 'bjbkj', '076478532568', 'TI-1B', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1957301009', 'Raufdiaqsa Putra', 'Pria', '2020-01-28', 'Lhokseumawe', '098767893265', 'gyijh', '08654566647', 'TI-1B', '111.jpg'),
('1957301010', 'Rifnatul Hasanah', 'Wanita', '2020-01-30', 'Lhokseumawe', '08554344458', 'bjbkj', '096734287645', 'TI-1C', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1957301011', 'Rizka Rahmadini Sali', 'Wanita', '0000-00-00', 'Lhokseumawe', '098767893265', 'grgr', '089876541234', 'TI-1C', '6041925-dark-anime-wallpaper.jpg'),
('1957301012', 'Shofwan Abd Kadir Na', 'Pria', '2020-01-06', 'Lhokseumawe', '098767893265', 'bjbkj', '08654566647', 'TI-1C', 'download.jpg'),
('1957301013', 'Tri Azmi Ramadhani', 'Pria', '2020-01-21', 'Lhokseumawe', '098767893265', 'grgr', '096734287645', 'TI-1C', 'Gambar-Anime-Cewek-10.jpg'),
('1957301014', 'Mesti', 'Wanita', '2020-01-02', 'Lhokseumawe', '098767893265', 'MH', '076478532568', 'TI-1A', 'Gambar-Anime-Cewek-10.jpg'),
('1957301015', 'Abdurrazaq', 'Pria', '2020-01-24', 'Lhokseumawe', '08554344458', 'bjbkj', '096734287645', 'TI-1A', '11.jpg'),
('1957301016', 'Muhammad Hafidl', 'Pria', '2020-01-20', 'Lhokseumawe', '08645431245', 'wkwk', '089876541234', 'TI-1A', '32c85c66e56c16729b04de8e76051d04.png'),
('1957301017', 'Salma Sheila Maulina', 'Wanita', '2020-01-10', 'Lhokseumawe', '08645431245', 'gfhg', '096734287645', 'TI-1A', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1957301018', 'Saidah', 'Wanita', '2020-01-23', 'Lhokseumawe', '094376347524', 'wkwk', '096734287645', 'TI-1B', '6041925-dark-anime-wallpaper.jpg'),
('1957301020', 'Rizqillah', 'Wanita', '2020-01-28', 'Lhokseumawe', '082292221879', 'wkwk', '076478532568', 'TI-1C', 'images (1).jpg'),
('1957301021', 'Nilam Ikhwana', 'Wanita', '2020-01-24', 'Lhokseumawe', '094376347524', 'bjbkj', '096734287645', 'TI-1C', 'Gambar-Anime-Cewek-10.jpg'),
('1957301023', 'Raihan Jihan', 'Pria', '2020-01-30', 'Lhokseumawe', '08645431245', 'bjbkj', '076478532568', 'TI-1A', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg'),
('1957301025', 'Isnani', 'Wanita', '2020-01-08', 'Lhoksukon', '08554344458', 'wkwk', '08654566647', 'TI-1A', 'Gambar-Anime-Cewek-10.jpg'),
('1957301026', 'Farah Raihanunnisa', 'Wanita', '2020-01-12', 'Lhoksukon', '082292221879', 'MH', '082292221879', 'TI-1A', 'Gambar-Anime-Cewek-10.jpg'),
('1957301027', 'Rahmat Dany Rizki', 'Pria', '2020-01-15', 'Lhokseumawe', '08554344458', 'grgr', '076478532568', 'TI-1A', '6041925-dark-anime-wallpaper.jpg'),
('1957301028', 'Awalul Zikri Annur', 'Wanita', '2020-01-29', 'Lhokseumawe', '08554344458', 'gyijh', '089876541234', 'TI-1B', 'best-anime-Tokya-Ghoul-HD-wallpapers_4d470f76dc99e18ad75087b1b8410ea9.jpg'),
('1957301029', 'Dara Melisa', 'Wanita', '2020-01-08', 'Lhokseumawe', '098767893265', 'gfhg', '096734287645', 'TI-1B', 'images (1).jpg'),
('1957301030', 'Rayta Amara', 'Wanita', '2020-01-08', 'Lhokseumawe', '098767893265', 'bjbkj', '096734287645', 'TI-1B', 'bintang-sma-0ecd22883b277180232aaec44f1d13ac_600x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `kode_mk` varchar(8) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `kd_guru` varchar(6) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`kode_mk`, `nama_mk`, `kd_guru`, `semester`) VALUES
('A11', 'Bahasa Assembly', 'MH', 1),
('A12', 'Bahasa Assembly', 'MRK', 1),
('A13', 'Praktikum Bahasa Assembly', 'MRK', 1),
('A14', 'Praktikum Bahasa Assembly', 'MH', 1),
('A15', 'Matematika 1', 'MH', 1),
('A16', 'Logika dan Algoritma', 'MH', 1),
('A17', 'Keterampilan Komputer', 'MRK', 1),
('A18', 'Konsep Teknologi Informasi', 'MRK', 1),
('B11', 'Aljabar Linier', 'MRK', 2),
('B12', 'Bahasa inggris 2', 'MRK', 2),
('B13', 'Bahasa inggris 2', 'MH', 2),
('B14', 'Organisasi Komputer', 'MH', 2),
('B15', 'Metode Numerik', 'MH', 2),
('B18', 'Agama', 'MRK', 2),
('C11', 'DPW', 'MRK', 3),
('C15', 'Bahasa inggris 3', 'MH', 3),
('C16', 'Basis Data 1', 'MH', 3),
('C17', 'Praktikum Basis Data 1', 'MH', 3),
('C18', 'Arsitektur CPU', 'MRK', 3),
('C19', 'PBO', 'MRK', 3),
('D11', 'Bahasa inggris 4', 'MRK', 4),
('D12', 'Basis Data 2', 'MRK', 4),
('D13', 'Praktikum Basis Data 2', 'MRK', 4),
('D14', 'Komputer Grafik', 'MH', 4),
('D15', 'Sistem Operasi', 'MH', 4),
('D16', 'Pemograman Lanjur', 'MH', 4),
('E11', 'Konsep Jaringan Komputer', 'MH', 5),
('E12', 'Praktikum Konsep Jaringan Komputer', 'MH', 5),
('E13', 'Kecerdasan Buatan', 'MH', 5),
('E14', 'Pengelahan Sinyal Digital', 'MRK', 5),
('E15', 'Sistem Informasi Managemen', 'MRK', 5),
('E16', 'Simulasi dan Pemodelan', 'MRK', 5),
('F11', 'Machine Learning', 'MRK', 6),
('F12', 'Pengelahan Citra Digital ', 'MRK', 6),
('F13', 'Praktikum Pengelahan Citra Digital ', 'MRK', 6),
('F14', 'Pengenalan Pola', 'MH', 6),
('F15', 'Rancangan Analisa Algoritma', 'MH', 6),
('F16', 'Praktikum Rancangan Analisa Algoritma', 'MH', 6),
('G11', 'Metode Penelitian', 'MH', 7),
('G12', 'Computer Vision', 'MH', 7),
('G13', 'Proyek Akhir 1', 'MH', 7),
('G14', 'Kerja Praktek', 'MRK', 7),
('G15', 'Data Mirning', 'MRK', 7),
('G16', 'Keamanan Jaringan', 'MRK', 7),
('H11', 'Mobile Computing', 'MRK', 8),
('H12', 'Manajemen Proyek TI', 'MH', 8),
('MK123', 'Bahasa Korea', 'P10', 1),
('MK1234', 'Bahasa Jepang', 'P3', 1),
('MK12345', 'Bahasa Alien', '123123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `absensi2`
--
ALTER TABLE `absensi2`
  ADD PRIMARY KEY (`tanggal`,`id_siswa`,`mk`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
