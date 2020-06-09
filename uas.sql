-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 07.02
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formnilai`
--

CREATE TABLE `formnilai` (
  `kode_pendaftaran` char(10) NOT NULL,
  `semester3_bi` int(5) NOT NULL,
  `semester3_mm` int(5) NOT NULL,
  `semester3_ipa` int(5) NOT NULL,
  `semester3_bing` int(5) NOT NULL,
  `semester4_bi` int(5) NOT NULL,
  `semester4_mm` int(5) NOT NULL,
  `semester4_ipa` int(5) NOT NULL,
  `semester4_bing` int(5) NOT NULL,
  `semester5_bi` int(5) NOT NULL,
  `semester5_mm` int(5) NOT NULL,
  `semester5_ipa` int(5) NOT NULL,
  `semester5_bing` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formnilai`
--

INSERT INTO `formnilai` (`kode_pendaftaran`, `semester3_bi`, `semester3_mm`, `semester3_ipa`, `semester3_bing`, `semester4_bi`, `semester4_mm`, `semester4_ipa`, `semester4_bing`, `semester5_bi`, `semester5_mm`, `semester5_ipa`, `semester5_bing`) VALUES
('KD200001', 80, 89, 90, 78, 80, 89, 88, 98, 92, 77, 99, 78),
('KD200002', 90, 89, 87, 78, 89, 89, 97, 90, 92, 88, 90, 89),
('KD200003', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
('KD200004', 80, 90, 80, 89, 82, 92, 85, 90, 89, 95, 90, 95);

-- --------------------------------------------------------

--
-- Struktur dari tabel `formortu`
--

CREATE TABLE `formortu` (
  `kode_pendaftaran` varchar(10) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(10) NOT NULL,
  `pekerjaan_ayah` varchar(15) NOT NULL,
  `penghasilan_ayah` varchar(10) NOT NULL,
  `telepon_ayah` int(13) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` varchar(10) NOT NULL,
  `telepon_ibu` int(13) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `pendidikan_wali` varchar(10) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(10) NOT NULL,
  `telepon_wali` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formortu`
--

INSERT INTO `formortu` (`kode_pendaftaran`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `telepon_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `telepon_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `telepon_wali`) VALUES
('KD200001', 'Diyat', 'SMA/SMK/MA', 'Wiraswasta', '3jt-5jt', 2147483647, 'Indah', 'SMA/SMK/MA', 'Ibu Rumah Tangga', '-500rb', 2147483647, '', '', '', '', 0),
('KD200002', 'alata', 'S1', 'PNS', '3jt-5jt', 2147483647, 'Wulan', 'Diploma', 'Ibu Rumah Tangga', '&lt;500rb', 2147483647, '', '', '', '', 0),
('KD200003', 'Lukman', 'SMA/SMK/MA', 'Wiraswasta', '1jt-3jt', 2147483647, 'Purwanti', 'S1', 'Wiraswasta', '3jt-5jt', 2147483647, '', '', '', '', 0),
('KD200004', 'Dika', 'S3', 'Perangkat Desa', '10jt+', 2147483647, 'Rahma', 'S3', 'Ibu Rumah Tangga', '10jt+', 2147483647, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `formsekolah`
--

CREATE TABLE `formsekolah` (
  `kode_pendaftaran` varchar(10) NOT NULL,
  `npsn` int(10) NOT NULL,
  `nama_asal_sekolah` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  `alamat_asal_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formsekolah`
--

INSERT INTO `formsekolah` (`kode_pendaftaran`, `npsn`, `nama_asal_sekolah`, `status`, `alamat_asal_sekolah`) VALUES
('KD200001', 2147483647, 'SMPN 1 Kauman', 'Negri', 'Jln'),
('KD200002', 2147483647, 'SMPN 1 Tulungagung', 'Negri', 'Jln soekarno hatta'),
('KD200003', 696969, 'SMPN 35 Surabaya', 'Negri', 'Jln. Rungkut Asri'),
('KD200004', 123098, 'SMPN 1 Surabaya', 'Negri', 'Jl. Pahlawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formsiswa`
--

CREATE TABLE `formsiswa` (
  `kode_pendaftaran` char(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nik` int(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `no_akta` int(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kwn` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_tinggal` varchar(20) NOT NULL,
  `moda_transportasi` varchar(20) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `peminatan_jurusan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formsiswa`
--

INSERT INTO `formsiswa` (`kode_pendaftaran`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_akta`, `agama`, `kwn`, `alamat`, `tempat_tinggal`, `moda_transportasi`, `anak_ke`, `no_telepon`, `peminatan_jurusan`) VALUES
('KD200001', 'Hellen Agustina', 'Perempuan', 2147483647, 2147483647, 'Tulungagung', '1999-08-8', 2147483647, 'Islam', 'Indonesia (WNI)', 'Tulungagung', 'Bersama Orang Tua', 'Motor', 1, 2147483647, 'IPA'),
('KD200002', 'Salsabila', 'Perempuan', 1234567890, 2147483647, 'Surabaya', '2000-10-8', 2147483647, 'Islam', 'Indonesia (WNI)', 'Surabaya', 'Bersama Orang Tua', 'Motor', 2, 2147483647, 'IPA'),
('KD200003', 'Primandika', 'Laki-Laki', 1234567890, 123455, 'Surabaya', '2000-04-15', 1234560987, 'Islam', 'Indonesia (WNI)', 'Jln. Kendangsari YKP', 'Bersama Orang Tua', 'Motor', 1, 2147483647, 'IPA'),
('KD200004', 'Adit', 'Laki-Laki', 9876543, 11111112, 'Surabaya', '2004-09-16', 1234560987, 'Islam', 'Indonesia (WNI)', 'Jl. Singapore no. 1', 'Bersama Orang Tua', 'Motor', 2, 2147483647, 'IPA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploadberkas`
--

CREATE TABLE `uploadberkas` (
  `kode_pendaftaran` varchar(10) NOT NULL,
  `gambar_diri` varchar(100) NOT NULL,
  `gambar_kk` varchar(100) NOT NULL,
  `gambar_raport3` varchar(100) NOT NULL,
  `gambar_raport4` varchar(100) NOT NULL,
  `gambar_raport5` varchar(100) NOT NULL,
  `gambar_nisn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uploadberkas`
--

INSERT INTO `uploadberkas` (`kode_pendaftaran`, `gambar_diri`, `gambar_kk`, `gambar_raport3`, `gambar_raport4`, `gambar_raport5`, `gambar_nisn`) VALUES
('KD200001', 'IMG_5350.JPG', 'IMG_5390.JPG', 'IMG_5391.JPG', 'IMG_5389.JPG', 'IMG_5385.JPG', 'IMG_5388.JPG'),
('KD200002', 'IMG_5394.JPG', 'IMG_5383.JPG', 'IMG_5378.JPG', 'IMG_5369.JPG', 'IMG_5379.JPG', 'IMG_5352.JPG'),
('KD200003', 'WP_Venom-2560x1440_00000.jpg', 'WP_Thanos-4125x2160_00429.jpg', 'WP_Sister_Slayer-2560x1440_00000.jpg', 'WP_Chaos_Clown-2560x1440_00000.jpg', 'WP_Noctua-2560x1440_00000.jpg', '92630_11.jpg'),
('KD200004', 'foto.jpg', 'kk.jpg', 'raport3.jpg', 'raport4.jpg', 'raport5.jpg', 'nisn.jpg'),
('KD200005', 'foto.jpg', 'kk.jpg', 'raport3.jpg', 'raport4.jpg', 'raport5.jpg', 'nisn.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi`
--

CREATE TABLE `verifikasi` (
  `kode_pendaftaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `verifikasi`
--

INSERT INTO `verifikasi` (`kode_pendaftaran`) VALUES
('KD200001');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `formnilai`
--
ALTER TABLE `formnilai`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indeks untuk tabel `formortu`
--
ALTER TABLE `formortu`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indeks untuk tabel `formsekolah`
--
ALTER TABLE `formsekolah`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indeks untuk tabel `formsiswa`
--
ALTER TABLE `formsiswa`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indeks untuk tabel `uploadberkas`
--
ALTER TABLE `uploadberkas`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indeks untuk tabel `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`kode_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
