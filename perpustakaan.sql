-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2019 at 02:21 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nim` bigint(12) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `nim`, `jurusan`, `fakultas`, `jenis_kelamin`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`) VALUES
(1001, 'edwynn', 1714321001, 'teknik informatika', 'teknik', 'L', 'jl. mawar', 'jawa timur', 'karangpilang', 'karangpilang'),
(1002, 'eza', 1714321002, 'teknik informatika', 'teknik', 'L', 'jl. Melati', 'jawa timur', 'karangpilang', 'karangpilang'),
(1003, 'bicky', 1714321003, 'teknik informatika', 'teknik', 'L', 'jl.kamboja', 'jawa timur', 'karangpilang', 'karangpilang'),
(1004, 'faisal', 1714321004, 'teknik informatika', 'teknik', 'L', 'jl.kenanga', 'jawa timur', 'karangpilang', 'karangpilang'),
(1005, 'zen', 1714321005, 'teknik informatika', 'teknik', 'L', 'jl.tank', 'jawa timur', 'karangpilang', 'karangpilang'),
(1006, 'suseno', 1714321006, 'teknik informatika', 'teknik', 'L', 'jl.ranjau', 'jawa timur', 'kebonsari', 'kebonsari'),
(1007, 'suseno dwi', 1714321007, 'ekonomi', 'manajemen', 'L', 'jl.aspal', 'jawa barat', 'kebonsari', 'kebonsari'),
(1008, 'yuga', 1714321008, 'ekonomi', 'manajemen', 'L', 'jl.anggrek', 'jawa barat', 'lembang', 'lembang'),
(1009, 'yoga', 1714321009, 'ekonomi', 'manajemen', 'L', 'jl.kuda', 'jawa barat', 'lembang', 'lembang'),
(1010, 'erwin', 1714321010, 'ekonomi', 'manajemen', 'L', 'jl.harimau', 'jawa barat', 'lembang', 'lembang'),
(1011, 'felix', 1714321011, 'ekonomi', 'manajemen', 'L', 'jl.kancil', 'jawa tengah', 'kebumen', 'kebumen'),
(1012, ' nur anggraini', 1714321012, 'ekonomi', 'manajemen', 'W', 'jl.nangka', 'jawa tengah', 'kebumen', 'kebumen'),
(1013, 'sigit', 1714321013, 'hukum', 'hukum', 'L', 'jl.ikan', 'jawa tengah', 'losari', 'losari'),
(1014, 'ayuk ', 1714321014, 'hukum', 'hukum', 'W', 'jl.pari', 'jawa tengah', 'pandaan', 'pandaan'),
(1015, 'vio', 1714321015, 'hukum', 'hukum', 'W', 'jl.kambing', 'jawa barat', 'sukorame', 'sukorame'),
(1016, 'irfan', 1714321016, 'teknik elektro', 'teknik', 'L', 'jl.maju', 'jawa barat', 'sukorame', 'sukorame'),
(1017, 'fakri', 1714321017, 'teknik elektro', 'teknik', 'L', 'jl.mundur', 'jawa barat', 'pandaan', 'pandaan'),
(1018, 'farhan', 1714321018, 'teknik elektro', 'teknik', 'L', 'jl.kana', 'jawa tmur', 'lembang', 'lembang'),
(1019, 'niko', 1714321019, 'ilmu komunikasi', 'fisip', 'L', 'jl.kiri', 'jawa tmur', 'karangpilang', 'karangpilang'),
(1020, 'koko', 1714321021, 'teknik informatika', 'teknik', 'Pri', 'sadadfs', 'asdsa', 'sdsad', 'asdasd'),
(1022, 'pratama', 1714321022, 'akuntansi', 'ekonomi', 'Pria', 'sfdsfdsfsf', 'asdasd', 'asdasd', 'asdsdas'),
(1024, 'fitri', 1714321026, 'hukum', 'hukum', 'Wanita', 'sadsd', 'asdasasdsaasd', 'asasdsas', 'saasdasd'),
(1025, 'phpMyAdmin', 1714321025, 'IPA', '', 'Pria', 'sfdsfdsfsf', 'asdasd', 'asdasd', 'asdsdas'),
(1026, 'Aulia', 1714321026, 'teknik informatika', 'TEKNIK', 'P', 'JL.GAYUNGAN RAYA NO.456', 'JAWA TIMUR', 'KOTA SURABAYA', 'GAYUNGAN'),
(1027, 'Azizah', 1714321027, 'teknik informatika', 'TEKNIK', 'P', 'JL. JEPARA NO 54 ', 'JAWA TIMUR', 'KOTA SURABAYA', 'BUBUTAN'),
(1028, 'Dwi Putri', 1714321028, 'teknik informatika', 'TEKNIK', 'P', 'JL. IKAN BESAR RAYA', 'KALIMANTAN BARA', 'KABUPATEN LANDA', 'MANDOR'),
(1029, 'Elva', 1714321029, 'teknik informatika', 'TEKNIK', 'P', 'JL.RAWA BEBEK NO.1', 'DKI JAKARTA', 'KOTA JAKARTA UT', 'PADEMANGAN'),
(1030, 'Hilmi', 1714321030, 'teknik informatika', 'TEKNIK', 'L', 'KEL JATIMULYA 55', 'JAWA TIMUR', 'KABUPATEN MALAN', 'WONOSARI'),
(1031, 'Abdul Aziz', 1714321031, 'teknik informatika', 'TEKNIK', 'L', 'DS PASINAN LEMAH PUTIH NO 87 ', 'JAWA TIMUR', 'KABUPATEN GRESI', 'WRINGIN ANOM'),
(1032, 'Zainal', 1714321032, 'teknik informatika', 'TEKNIK', 'L', 'DS SUKOHARJO NO 70', 'JAWA TIMUR', 'KABUPATEN NGANJ', 'WILANGAN'),
(1033, 'Rizkia', 1714321033, 'teknik informatika', 'TEKNIK', 'P', 'JL. MANGGA DUA CILACAP BARU', 'JAWA TENGAH', 'KABUPATEN CILAC', 'CILACAP TENGAH'),
(1034, 'Putri', 1714321034, 'teknik informatika', 'TEKNIK', 'P', 'JL.BANJAR MELATI RT 59 RW 18 KEL. PABEAN', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'SEDATI'),
(1035, 'Danar', 1714321035, 'teknik informatika', 'TEKNIK', 'L', 'DESA GUNUNGSARI NO 14', 'JAWA TIMUR', 'KOTA SURABAYA', 'DUKUH PAKIS'),
(1036, 'Ipung', 1714321036, 'teknik informatika', 'TEKNIK', 'L', 'JL.ANUGRAH II RAYA', 'JAWA TIMUR', 'KABUPATEN KEDIR', 'KANDAT'),
(1037, 'Sherli', 1714321037, 'teknik informatika', 'TEKNIK', 'P', 'JL.MERAK III SELATAN', 'KALIMANTAN UTAR', 'KOTA TARAKAN', 'TARAKAN UTARA'),
(1038, 'Bambang', 1714321038, 'teknik informatika', 'TEKNIK', 'L', 'KEL KARANGSARI NO 50', 'JAWA BARAT', 'KOTA CIREBON', 'WERU'),
(1039, 'Triyono', 1714321039, 'teknik informatika', 'TEKNIK', 'L', 'JL. WINONGKO UTARA', 'JAWA TIMUR', 'KABUPATEN MAGET', 'MAGETAN'),
(1040, 'Fauziah', 1714321040, 'teknik elektro', 'TEKNIK', 'P', 'JL. MELATI MEKAR JAYA', 'JAWA TIMUR', 'KABUPATEN NGAWI', 'PADAS'),
(1041, 'Farid', 1714321041, 'teknik elektro', 'TEKNIK', 'L', 'JL. PINGGANG JAYA', 'JAWA TIMUR', 'KABUPATEN BANGK', 'KONANG'),
(1042, 'Izati S', 1714321042, 'teknik elektro', 'TEKNIK', 'P', 'DS SUKA BANJAR NO 11', 'BENGKULU', 'KABUPATEN KAUR', 'MUARA TETAP'),
(1043, 'Imam ', 1714321043, 'teknik elektro', 'TEKNIK', 'L', 'JL.MERAK INDAH GANG IV', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'SIDOARJO'),
(1044, 'Purnomo', 1714321044, 'teknik elektro', 'TEKNIK', 'L', 'JL. ACEH BARU NO.43 AE', 'ACEH', 'KABUPATEN ACEH ', 'ARONGAN LAMBALE'),
(1045, 'Dea', 1714321045, 'teknik elektro', 'TEKNIK', 'P', 'JL. RAYA KOSAMBI SELATAN', 'BANTEN', 'KABUPATEN TANGE', 'KOSAMBI'),
(1046, 'Ananda', 1714321046, 'teknik elektro', 'TEKNIK', 'L', 'JL. MESAHAN RAYA', 'JAWA TIMUR', 'PASURUAN', 'BUGULKIDUL'),
(1047, 'Sabrina', 1714321047, 'teknik elektro', 'TEKNIK', 'P', 'JL.H.SYUKUR INDAH GANG IV', 'JAWA TIMUR', 'KOTA SURABAYA', 'KARANG PILANG'),
(1048, 'Wahyu', 1714321048, 'teknik elektro', 'TEKNIK', 'L', 'KEL GUNUNG ANYAR TAMBAK', 'JAWA TIMUR', 'KOTA SURABAYA', 'GUNUNG ANYAR'),
(1049, 'Dian P', 1714321049, 'teknik elektro', 'TEKNIK', 'P', 'DS TAMBAK WEDI NO 17 ', 'JAWA TIMUR', 'KOTA SURABAYA', 'KENJERAN'),
(1050, 'Agung', 1714321050, 'teknik elektro', 'TEKNIK', 'L', 'JL. INDAH SARI', 'JAWA TIMUR', 'KABUPATEN LAMON', 'KALITENGAH'),
(1051, 'Zahra', 1714321051, 'teknik sipil', 'TEKNIK', 'P', 'JL. ACEH BARU NO.45 AE', 'ACEH', 'KABUPATEN ACEH ', 'ARONGAN LAMBALE'),
(1052, 'Udin', 1714321052, 'teknik sipil', 'TEKNIK', 'L', 'JL. INDAH MEKAR SARI', 'JAWA TENGAH', 'KABUPATEN KEBUM', 'KARANGGAYAM'),
(1053, 'Ramadhan', 1714321053, 'teknik sipil', 'TEKNIK', 'L', 'KEL GUNUNG AGUNG ', 'LAMPUNG', 'KOTA BANDAR LAM', 'LANGKAPURA'),
(1054, 'Istiana', 1714321054, 'teknik sipil', 'TEKNIK', 'P', 'JL. SUNAN BONANG ETAN', 'JAWA TENGAH', 'KABUPATEN DEMAK', 'BONANG'),
(1055, 'Anisa', 1714321055, 'teknik sipil', 'TEKNIK', 'P', 'JL.PADEPADE RT 05 KELURAHAN ASINAN', 'JAWA TIMUR', 'KABUPATEN SUMEN', 'BLUTO'),
(1056, 'Fatmawati', 1714321056, 'teknik sipil', 'TEKNIK', 'P', 'JL.SEDATIGEDE RT 16 RW 07 KEL. SEDATI', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'SEDATI'),
(1057, 'Angga P', 1714321057, 'teknik sipil', 'TEKNIK', 'L', 'JL SEJAHTERAH ALAM', 'JAWA BARAT', 'KABUPATEN BEKAS', 'CIKARANG TIMUR'),
(1058, 'Zainuddin', 1714321058, 'teknik sipil', 'TEKNIK', 'L', 'DS SUMBER TEMPUR RT 05', 'JAWA TIMUR', 'KABUPATEN MALAN', 'WONOSARI'),
(1059, 'Samsul', 1714321059, 'teknik sipil', 'TEKNIK', 'L', 'JL. HAJI SYUKUR', 'JAWA TIMUR', 'KABUPATEN LAMON', 'LAMONGAN'),
(1060, 'Eka Bayu', 1714321060, 'teknik sipil', 'TEKNIK', 'L', 'JL. SUKOLILO SELATAN', 'JAWA TENGAH', 'KABUPATEN KLATE', 'KEBONARUM'),
(1061, 'Irfandi', 1714321061, 'teknik sipil', 'TEKNIK', 'L', 'JL. MERAK SARI MALANG NO.12', 'JAWA TIMUR', 'KABUPATEN MALAN', 'DONOMULYO'),
(1062, 'Weny ', 1714321062, 'teknik sipil', 'TEKNIK', 'P', 'DS LANGKA PURA NO 11', 'LAMPUNG', 'KOTA BANDAR LAM', 'LANGKAPURA'),
(1063, 'Maulida', 1714321063, 'manajemen', 'EKONOMI', 'P', 'DS KENDANG DUKUH NO 34', 'JAWA TIMUR', 'KABUPATEN PASUR', 'WONOREJO'),
(1064, 'Ajeng', 1714321064, 'manajemen', 'EKONOMI', 'P', 'JL RAYA LABANG NO 51', 'JAWA TIMUR', 'KABUPATEN BANGK', 'LABANG'),
(1065, 'Husni', 1714321065, 'manajemen', 'EKONOMI', 'L', 'DS KEDUNG BARUK NO 56', 'JAWA TIMUR', 'KOTA SURABAYA', 'RUNGKUT'),
(1066, 'Anang', 1714321066, 'manajemen', 'EKONOMI', 'L', 'JL.RAWA BEBEK NO.1', 'DKI JAKARTA', 'KOTA JAKARTA UT', 'PADEMANGAN'),
(1067, 'Herman', 1714321067, 'manajemen', 'EKONOMI', 'L', 'JL. ACEH BARU NO.43 AE', 'ACEH', 'KABUPATEN ACEH ', 'ARONGAN LAMBALE'),
(1068, 'Fauzan', 1714321068, 'manajemen', 'EKONOMI', 'L', 'JL.SARANGHEU PANGLIMA', 'BENGKULU', 'KABUPATEN KAUR', 'KAUR UTARA'),
(1069, 'Reza', 1714321069, 'manajemen', 'EKONOMI', 'L', 'JL.PANGLIMA SUDIRMAN NO.1 BLOK AE', 'JAWA TIMUR', 'KABUPATEN BONDO', 'CURAH DAMI'),
(1070, 'Aisyah', 1714321070, 'manajemen', 'EKONOMI', 'W', 'JL.PADEPADE RT 05 KELURAHAN ASINAN', 'JAWA TIMUR', 'KABUPATEN SUMEN', 'BLUTO'),
(1071, 'Yuli', 1714321071, 'manajemen', 'EKONOMI', 'W', 'JL.ANUGRAH II RAYA', 'JAWA TIMUR', 'KABUPATEN KEDIR', 'KANDAT'),
(1072, 'Ria', 1714321072, 'manajemen', 'EKONOMI', 'W', 'JL.GAYUNGAN RAYA NO.456', 'JAWA TIMUR', 'KOTA SURABAYA', 'GAYUNGAN'),
(1073, 'Fahrudi', 1714321073, 'manajemen', 'EKONOMI', 'L', 'JL.MADIUN-PONOROGO RAYA II', 'JAWA TIMUR', 'KABUPATEN MADIU', 'DOLOPO'),
(1074, 'Izati', 1714321074, 'manajemen', 'EKONOMI', 'W', 'JL. MANGGA DUA CILACAP BARU', 'JAWA TENGAH', 'KABUPATEN CILAC', 'CILACAP TENGAH'),
(1075, 'Taufik', 1714321075, 'manajemen', 'EKONOMI', 'L', 'JL.BATU ASIH RT 05 RW 12 KEL.PANJIAGUNG', 'JAWA TIMUR', 'KOTA BATU', 'JUNREJO'),
(1076, 'Uswatun', 1714321076, 'manajemen', 'EKONOMI', 'W', 'JL.ANGGORA SELATAN II', 'JAWA TIMUR', 'KABUPATEN LAMON', 'DEKET'),
(1077, 'Junaidi', 1714321077, 'administrasi publik', 'FISIP', 'L', 'JL. AYANI BERBEK TIMUR III', 'JAWA TIMUR', 'KABUPATEN NGANJ', 'BERBEK'),
(1078, 'Fendi', 1714321078, 'administrasi publik', 'FISIP', 'L', 'JL.SIWALAN GANG 3', 'JAWA TIMUR', 'KABUPATEN MADIU', 'BALEREJO'),
(1079, 'Fatini', 1714321079, 'administrasi publik', 'FISIP', 'W', 'JL.H.SYUKUR INDAH GANG IV', 'JAWA TIMUR', 'KOTA SURABAYA', 'KARANG PILANG'),
(1080, 'Halili', 1714321080, 'administrasi publik', 'FISIP', 'L', 'JL.SEDATIGEDE RT 16 RW 07 KEL. SEDATI', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'SEDATI'),
(1081, 'Mumun', 1714321081, 'administrasi publik', 'FISIP', 'W', 'JL.BANJAR MELATI RT 59 RW 18 KEL. PABEAN', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'SEDATI'),
(1082, 'Hasbun', 1714321082, 'administrasi publik', 'FISIP', 'L', 'JL.KONDANG LEGI TENGAH', 'JAWA TIMUR', 'KOTA MALANG', 'KEDUNGKANDANG'),
(1083, 'Kamil', 1714321083, 'administrasi publik', 'FISIP', 'L', 'DUSUN KEBON GEDE ANOM RT 18', 'JAWA TIMUR', 'KABUPATEN PONOR', 'SAMPUNG'),
(1084, 'Eka', 1714321084, 'administrasi publik', 'FISIP', 'W', 'JL.MERAK III SELATAN', 'KALIMANTAN UTAR', 'KOTA TARAKAN', 'TARAKAN UTARA'),
(1085, 'Bayu', 1714321085, 'ilmu hukum', 'HUKUM', 'L', 'JL.KI HAJAR DEWANTORO NO.22 PERUM ANGKASA', 'KEPULAUAN BANGK', 'KOTA PANGKAL PI', 'TAMAN SARI'),
(1086, 'Rifal', 1714321086, 'ilmu hukum', 'HUKUM', 'L', 'JL.MANUKUARI MALANG III UTARA', 'JAWA TENGAH', 'KABUPATEN BOYOL', 'CEPOGO'),
(1087, 'Huda', 1714321087, 'ilmu hukum', 'HUKUM', 'L', 'JL.IWAK GABUS GANG SONO WETAN', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'TULANGAN'),
(1088, 'Lutfia', 1714321088, 'ilmu hukum', 'HUKUM', 'W', 'JL.SUWALAYAN RT 05 RW 14 KEL. REJOSO', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'KREMBUNG'),
(1089, 'Yanuar', 1714321089, 'ilmu hukum', 'HUKUM', 'L', 'JL.MERAK INDAH GANG IV', 'JAWA TIMUR', 'KABUPATEN SIDOA', 'SIDOARJO'),
(1090, 'Hanif', 1714321090, 'ilmu hukum', 'HUKUM', 'L', 'JL. RAYA INDAH SURABAYA', 'JAWA TIMUR', 'KOTA SURABAYA', 'WONOCOLO'),
(1091, 'Maulidah', 1714321091, 'ilmu hukum', 'HUKUM', 'W', 'JL. MESAHAN RAYA', 'JAWA TIMUR', 'KOTA PASURUAN', 'BUGULKIDUL'),
(1092, 'Rima', 1714321092, 'ilmu hukum', 'HUKUM', 'W', 'DS.KEDIREN RAYA INDAH SENTOSA', 'JAWA TIMUR', 'KABUPATEN TRENG', 'GANDUSARI'),
(1093, 'Meinar', 1714321093, 'ilmu hukum', 'HUKUM', 'W', 'DS. KEDIREN LEMBEYAN WETAN', 'JAWA TIMUR', 'KABUPATEN MAGET', 'LEMBEYAN'),
(1094, 'Fauzi', 1714321094, 'ilmu hukum', 'HUKUM', 'L', 'JL.IKAN BANDUNG RT 08 RW 12', 'JAWA TIMUR', 'KOTA MOJOKERTO', 'PRAJURIT KULON'),
(1095, 'Busri', 1714321095, 'ilmu komunikasi', 'FISIP', 'L', 'DS. MANJANGAN PAMEKASAN KULON', 'JAWA TIMUR', 'KABUPATEN PAMEK', 'BATU MARMAR'),
(1096, 'Rahmat', 1714321096, 'ilmu komunikasi', 'FISIP', 'L', 'JL.MENANGGAL JAYA', 'JAWA TIMUR', 'KABUPATEN NGAWI', 'PARON'),
(1097, 'Hikmah', 1714321097, 'ilmu komunikasi', 'FISIP', 'W', 'JL.RAYA ANINDA', 'JAWA TIMUR', 'KABUPATEN PASUR', 'PASREPAN'),
(1098, 'Hidayat', 1714321098, 'ilmu komunikasi', 'FISIP', 'L', 'JL. WILANGAN SELATAN', 'JAWA TIMUR', 'KOTA MADIUN', 'MANGU HARJO'),
(1099, 'Dini', 1714321099, 'ilmu komunikasi', 'FISIP', 'W', 'JL. IWAK SEGRO SELATAN', 'JAWA TENGAH', 'KABUPATEN PATI', 'SUKOLILO'),
(1100, 'Slamet', 1714321100, 'ilmu komunikasi', 'FISIP', 'L', 'JL. GAYUNGAN INDAH', 'JAWA TIMUR', 'KABUPATEN KEDIR', 'KAYEN KIDUL'),
(1101, 'Riyadi', 1714321101, 'ilmu komunikasi', 'FISIP', 'L', 'JL. IKAN BANDENG NO.433', 'JAWA TIMUR', 'KABUPATEN LAMON', 'KEMBANGBAHU'),
(1102, 'Rani', 1714321102, 'akuntansi', 'EKONOMI', 'W', 'JL. RUNGKUT KERTAJAYA', 'JAWA TIMUR', 'KOTA SURABAYA', 'GUNUNG ANYAR'),
(1103, 'Suci', 1714321103, 'akuntansi', 'EKONOMI', 'W', 'JL. SELOPURO INDAH', 'JAWA TIMUR', 'KABUPATEN BLITA', 'SELOPURO'),
(1104, 'Riko', 1714321104, 'akuntansi', 'EKONOMI', 'L', 'JL. BANGGIL MULYOREJO', 'JAWA TIMUR', 'KABUPATEN PASUR', 'GEMPOL'),
(1105, 'Rosi', 1714321105, 'akuntansi', 'EKONOMI', 'L', 'JL. POLIS RUWET JAYA', 'JAWA TIMUR', 'KABUPATEN MADIU', 'KEBONSARI'),
(1106, 'Inaya', 1714321106, 'akuntansi', 'EKONOMI', 'W', 'JL. SIANIDA ASAP', 'JAWA TIMUR', 'KABUPATEN LAMON', 'KEMBANGBAHU'),
(1107, 'Alva', 1714321107, 'akuntansi', 'EKONOMI', 'W', 'JL. KEBOA ANOM 4', 'JAWA TIMUR', 'KABUPATEN MALAN', 'KEPANJEN'),
(1108, 'Lutfi ', 1714321108, 'akuntansi', 'EKONOMI', 'L', 'JL. SEJUK MERATA', 'JAWA TIMUR', 'KABUPATEN MALAN', 'DAMPIT'),
(1109, 'Agri', 1714321109, 'akuntansi', 'EKONOMI', 'L', 'JL. SUSAH SENANG BERSAMA', 'JAWA TIMUR', 'KABUPATEN BOJON', 'KASIMAN'),
(1110, 'Yudo', 1714321110, 'akuntansi', 'EKONOMI', 'L', 'JL.WINGKIS JAYA IV', 'JAWA TIMUR', 'KABUPATEN NGANJ', 'PRAMBON');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_buku`
--

CREATE TABLE IF NOT EXISTS `bidang_buku` (
  `id_bidang` int(10) NOT NULL,
  `judul_buku` varchar(20) NOT NULL,
  `bidang_buku` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_buku`
--

INSERT INTO `bidang_buku` (`id_bidang`, `judul_buku`, `bidang_buku`) VALUES
(1201, 'semeru', 'bacaan'),
(1202, 'astronomi', 'pelajaran'),
(1203, 'kalkulus', 'pelajaran'),
(1204, ' anatomi tubuh', 'pelajaran'),
(1205, ' planet bumi', 'bacaan'),
(1206, 'bangun ruang', 'pelajaran'),
(1207, 'si kancil', 'fabel'),
(1208, 'timun mas', 'dongeng'),
(1209, 'tangkuban perahu', 'dongeng'),
(1210, 'laut terbelah', 'novel');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(10) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `kode_buku` int(10) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_buku`),
  KEY `kode_buku` (`kode_buku`),
  KEY `id_bidang` (`id_bidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_bidang`, `judul_buku`, `kode_buku`, `jumlah_buku`, `status`) VALUES
(2002, 1202, 'astronomi', 3002, 3, 'tersedia'),
(2003, 1203, 'kalkulus', 3003, 6, 'tersedia'),
(2004, 1204, ' anatomi tubuh', 3004, 2, 'tersedia'),
(2005, 1205, ' planet bumi', 3005, 10, 'tersedia'),
(2006, 1206, 'bangun ruang', 3006, 12, 'tersedia'),
(2007, 1207, 'si kancil', 3007, 6, 'tersedia'),
(2008, 1208, 'timun mas', 3008, 14, 'tersedia'),
(2009, 1209, 'tangkuban perahu', 3009, 20, 'tersedia'),
(2010, 202, 'Tips ringan Sepeda Motor', 302, 1, 'asd'),
(2011, 202, 'Kupas Tuntas Aplikasi chat All in one+facebook', 302, 1, ''),
(2012, 202, 'Semua Bisa Menjadi Programmer Visual fox pro 9.0', 302, 1, ''),
(2013, 202, 'Motivaksi Metanoiac', 302, 1, ''),
(2014, 202, 'Terampil Membuat Topi Kembar Cantik dan Ceria', 302, 1, ''),
(2015, 202, 'Anti Forensik', 302, 2, ''),
(2016, 202, 'Cara Membuat Mempelajari Bahasa Jepang', 302, 1, ''),
(2017, 202, 'Kursus Wirausaha Aneka Resep dan Kiat Usaha Kebab&', 302, 1, ''),
(2018, 202, 'Bunga Rampai Pemikiran Islam', 302, 1, ''),
(2019, 202, 'Al-Ghazwa Al-Fikri Dalam Sorotan Islam', 302, 1, ''),
(2020, 202, 'Ikan Balita', 302, 1, ''),
(2021, 202, 'Philodendron', 302, 1, ''),
(2022, 202, 'Berhasil Dalam Wwancara', 302, 1, ''),
(2023, 202, 'Intisari', 302, 4, ''),
(2024, 202, 'Tangisan Malam Hari', 302, 4, ''),
(2025, 202, 'Aneka Aplikasi Penting Untuk Ponsel', 302, 2, ''),
(2026, 202, 'Menjadi Terkenal dengan Youtube', 302, 2, ''),
(2027, 202, 'Penolong Rahasia', 302, 4, ''),
(2028, 202, 'Biar Puasa nggak sia-sia', 302, 1, ''),
(2029, 202, 'Penyakit Hati dan Obatnya', 302, 1, ''),
(2030, 202, 'Materi Tarbiyah', 302, 1, ''),
(2031, 202, 'Contoh-contoh Pidato Sederhana', 302, 1, ''),
(2032, 202, 'Strategi Dakwah Hizbut Tahrir', 302, 1, ''),
(2033, 202, 'Salam Canda 2', 302, 1, ''),
(2034, 202, 'Si Kancil', 302, 1, ''),
(2035, 202, 'Seeri 100 Jilbab Annisa Rhapsody', 302, 1, ''),
(2036, 202, 'Buku Latihan Autocad', 302, 1, ''),
(2037, 204, 'Panduan Praktis Pemakaian Autocad 2000', 302, 1, ''),
(2038, 204, 'Ms. Access For Windows 95', 302, 1, ''),
(2039, 204, 'The Saying Of Han Fei Zi', 302, 1, ''),
(2040, 204, 'Rahasia Kesehatan Nabi', 302, 1, ''),
(2041, 204, 'Pc DOS Versi 3. 30', 302, 1, ''),
(2042, 204, 'Bom Bali', 302, 1, ''),
(2043, 204, 'Tool Presentasi Terbaik', 302, 1, ''),
(2044, 204, 'Eksplorasi Tabel Interaktif dengan Excel', 302, 1, ''),
(2045, 204, 'Mencari Laba besar dari situs keanggotan', 302, 1, ''),
(2046, 204, 'Teori & Praktek membuat Aplikasi Akuntansi', 302, 1, ''),
(2047, 204, 'Sejarah Kabupaten Cilacap', 304, 1, ''),
(2048, 204, 'Desain Kaus Zodiak dg corel Draw', 304, 1, ''),
(2049, 204, 'Cara Asyik Membuat Flash Website dengan Wix', 304, 1, ''),
(2050, 205, 'Gampang Menyusun Laporan Keungan Organisasi Nirlab', 304, 2, ''),
(2051, 205, 'Easy Networking', 304, 1, ''),
(2052, 205, '108 Tip Keamanan Blog dan Jaringan Sosial', 304, 1, ''),
(2053, 205, 'Doping Penambah Kekuatan Mesin', 304, 1, ''),
(2054, 205, 'Jurus Dahsyat membuat Ringtone sendiri', 304, 1, ''),
(2055, 205, 'Buku Pintar Penerbitan Buku', 304, 1, ''),
(2056, 205, '5 langkah sukses Jualan Online di dinomareket com', 304, 1, ''),
(2057, 205, 'Having Fun With Plurk', 304, 1, ''),
(2058, 205, 'Khutbah Jum''ah& Idain dari kampus', 304, 1, ''),
(2059, 205, 'Pengantar Studi hukum Perdata', 304, 1, ''),
(2060, 205, 'Ekonomi Pembangunan', 304, 1, ''),
(2061, 205, 'Lukis Wajah Mudah dengan ilustrator CS 3', 304, 1, ''),
(2062, 205, 'Berfikir Cepat dan Produktif', 304, 1, ''),
(2063, 205, 'Aplikasi Access dalam pengolahan Data', 304, 1, ''),
(2064, 205, 'GA-631 m- ES 2L/ GA-631M- ES2C', 304, 1, ''),
(2065, 205, 'From Competing to Collaborating', 304, 1, ''),
(2066, 205, 'Ms. Office 2007 (word & Excel)', 304, 1, ''),
(2067, 205, 'Corel Draw x4', 304, 1, ''),
(2068, 205, 'Pemrograman Visual Basic 6.0', 304, 1, ''),
(2069, 205, 'Foto Editing Online', 304, 2, ''),
(2070, 205, 'Dakwah Islam', 304, 1, ''),
(2071, 205, 'Survei Online', 304, 1, ''),
(2072, 205, 'Cara Dahsyat Optimalisasi laptop', 304, 1, ''),
(2073, 205, 'Teknik mengoptimalkan Password', 304, 1, ''),
(2074, 205, 'Petunjuk melamar Pekerjaan', 304, 1, ''),
(2075, 205, 'Mudahnya Mengeruk Dollar', 305, 1, ''),
(2076, 207, 'Perdagangan berjangka Fultures Trading', 305, 1, ''),
(2077, 207, '25 Kreasi Corel Draw 12', 305, 1, ''),
(2078, 207, 'Belajar dan penduan Praktis Ms word & Excel 2000', 305, 1, ''),
(2079, 207, 'Dasar-dasar Perbankan', 305, 1, ''),
(2080, 207, 'Kreasi Bingkai dg Coreldraw 12', 305, 1, ''),
(2081, 207, 'Singkat Tepat Jelas power point 7.0', 305, 1, ''),
(2082, 207, 'pasti Bisa Corel Draw x5', 305, 1, ''),
(2083, 207, 'Desain Slide dg corel Draw & Power Point', 305, 1, ''),
(2084, 207, 'Kiamat 2012', 305, 1, ''),
(2085, 207, 'Aplikasi Chatting gratis untuk ponsel', 305, 1, ''),
(2086, 207, 'Merancang gambar dengan Corel Draw 11', 305, 1, ''),
(2087, 207, 'Kursus Kilat menguasai SpSS untuk ukm', 305, 1, ''),
(2088, 207, 'Langkah Spektakuler Instalasi multi- OS dalam satu', 305, 1, ''),
(2089, 207, 'Kamus Pinyin', 305, 1, ''),
(2090, 207, 'Kumpulan Naskah Lakon Terpilih', 305, 1, ''),
(2091, 208, 'Perpustakan Organisasi &tata kerjanya', 305, 1, ''),
(2092, 208, 'Membuka Kebok Tokoh * dalam tubuh liberal', 305, 1, ''),
(2093, 208, 'Chairul Tanjung Si anak singkong', 305, 1, ''),
(2094, 208, 'Kearsipan', 305, 1, ''),
(2095, 208, 'Strucuture and reading comprehension', 306, 1, ''),
(2096, 208, 'Tata bahasa bahasa inggris', 306, 1, ''),
(2097, 208, 'Stenografi inggris', 306, 1, ''),
(2098, 208, 'Regular Verby& Irregural Verbs', 306, 1, ''),
(2099, 208, 'Pelajaran Bahasa Arab tingkat dasar', 306, 1, ''),
(2100, 208, 'Mujarobat Ilmu Gaib', 306, 1, ''),
(2101, 208, 'Cara membuat Kue* aneka gizi', 306, 1, ''),
(2102, 208, 'Pedoman tutorian Program D-11 PGSD', 306, 1, ''),
(2103, 208, 'Undang - Undang Perbankan', 306, 1, ''),
(2104, 208, 'Pelajaran Stenografi SMK', 306, 1, ''),
(2105, 208, 'Keuangan Negara dalam Teori dan Praktek', 306, 1, ''),
(2106, 208, 'Ekonomi Mikro', 306, 1, ''),
(2107, 208, 'The Language OF international Trade in English', 306, 1, ''),
(2108, 208, 'Kesekretarisan dan Adiminstrasi Perkantoran', 306, 1, ''),
(2109, 208, 'Ekonomi Moneter', 306, 1, ''),
(2110, 208, 'Fasih Berbahasa Indonesia', 306, 1, ''),
(2111, 208, 'Filsatifat Pancasila', 306, 1, ''),
(2112, 208, 'Teori dan Latihan Mengetik Praktis', 306, 1, ''),
(2113, 208, 'Stenagografi SMK jiLID 2', 306, 1, ''),
(2114, 206, 'Stenagografi SMK jiLID 3', 306, 1, ''),
(2115, 206, 'Agribisnis yang Membumi', 306, 1, ''),
(2116, 206, '', 306, 1, ''),
(2117, 206, 'Chic', 306, 4, ''),
(2118, 206, 'Kawanku unbeatable fun Girl', 306, 4, ''),
(2119, 206, 'Car & Tuning Guide', 306, 5, ''),
(2120, 206, 'R 2', 306, 4, ''),
(2121, 206, 'Sekar', 306, 3, ''),
(2122, 206, 'Sedap', 306, 3, ''),
(2123, 206, 'Flona', 306, 4, ''),
(2124, 206, 'Flona', 306, 1, ''),
(2125, 206, 'Otobiografi, Kecelakaan membawa berkah', 306, 1, ''),
(2126, 206, 'Flori', 306, 1, ''),
(2127, 206, 'Bisnis Muslim', 306, 1, ''),
(2128, 206, 'Philodendron', 306, 1, ''),
(2129, 206, 'Hot Game', 306, 4, ''),
(2130, 206, 'Asus Product Guide', 306, 1, ''),
(2131, 206, 'Futures', 306, 1, ''),
(2132, 206, 'Peace of Mind With Toyota', 306, 3, ''),
(2133, 206, 'Usaha Adenium di Rumah', 306, 1, ''),
(2134, 206, 'Dokter Ita', 306, 1, ''),
(2135, 206, 'Asus Product Guide', 306, 1, ''),
(2136, 206, 'Auto Bild', 307, 4, ''),
(2137, 2010, 'Hai', 307, 4, ''),
(2138, 2010, 'Ide bisnis', 307, 4, ''),
(2139, 2010, 'Idea', 307, 4, ''),
(2140, 2010, 'Angkasa', 307, 4, ''),
(2141, 2010, 'Mother & Baby', 307, 1, ''),
(2142, 2010, 'Trubus No 452', 307, 1, ''),
(2143, 2010, 'Trubus No 401', 307, 1, ''),
(2144, 2010, 'Trubus No 412', 307, 1, ''),
(2145, 2010, 'Trubus No. 444', 307, 1, ''),
(2146, 2010, 'Femina', 307, 1, ''),
(2147, 2010, 'Trubus No. 453', 307, 1, ''),
(2148, 2010, 'Trubus No. 464', 307, 1, ''),
(2149, 2010, 'Trubus No 456', 307, 1, ''),
(2150, 2010, 'Trubus No 413', 307, 1, ''),
(2151, 2010, 'Trubus No. 426', 307, 1, ''),
(2152, 2010, 'Trubus No. 398', 307, 1, ''),
(2153, 2010, 'Kemen Keuangan RI ', 307, 1, ''),
(2154, 2010, 'Kemen Keuangan RI', 307, 2, ''),
(2155, 2010, 'al-wa''ie No. 146', 307, 0, ''),
(2156, 2010, 'al-wa''ie No. 116', 307, 0, ''),
(2157, 2010, 'al-wa''ie No. 115', 307, 1, ''),
(2158, 2010, 'al-wa''ie No. 118', 307, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE IF NOT EXISTS `jenis_buku` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(20) NOT NULL,
  `jenis_buku` varchar(20) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`kode_buku`, `judul_buku`, `jenis_buku`, `tahun_terbit`, `penerbit`, `penulis`) VALUES
(3001, 'semeru', 'fiksi', 1999, 'grasindo', 'ikhwan'),
(3002, 'astronomi', 'biologi', 2000, 'grasindo', 'arie pangestu'),
(3003, 'kalkulus', 'matematika', 2000, 'grasindo', 'rudi pambudi'),
(3004, ' anatomi tubuh', 'biologi', 2014, 'java book', 'rudi pambudi'),
(3005, ' planet bumi', 'astronomi', 2014, 'java book', 'mracela z'),
(3006, 'bangun ruang', 'matematika', 2014, 'java book', 'akbar pratama'),
(3007, 'si kancil', 'fabel', 2003, 'samudra buku', 'akbar pratama'),
(3008, 'timun mas', 'legenda', 2018, 'ak group', 'yuni azmi'),
(3009, 'tangkuban perahu', 'legenda', 2013, 'alfa media', 'yuli rachma'),
(3010, 'laut terbelah', 'novel', 1998, 'alfa media', 'jack bull'),
(3011, 'Geografi', 'dunia', 1998, 'akbar pratama', 'koko');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(10) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE IF NOT EXISTS `tbl_denda` (
  `id_denda` int(10) NOT NULL,
  `kode_denda` int(10) NOT NULL,
  `jenis_denda` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `tarif_denda` int(10) NOT NULL,
  PRIMARY KEY (`id_denda`),
  KEY `kode_denda` (`kode_denda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hilang`
--

CREATE TABLE IF NOT EXISTS `tbl_hilang` (
  `id_hilang` int(10) NOT NULL,
  `tarif_denda` int(15) NOT NULL,
  PRIMARY KEY (`id_hilang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengembalian`
--

CREATE TABLE IF NOT EXISTS `tbl_pengembalian` (
  `id_pengembalian` int(10) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `total_denda` varchar(20) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `buku` varchar(20) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda_telat` varchar(20) NOT NULL,
  `denda_buku` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pengembalian`),
  KEY `id_anggota` (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengembalian`
--

INSERT INTO `tbl_pengembalian` (`id_pengembalian`, `jatuh_tempo`, `tgl_pinjam`, `keterangan`, `total_denda`, `id_anggota`, `nama`, `jurusan`, `buku`, `tgl_pengembalian`, `denda_telat`, `denda_buku`) VALUES
(7001, '2018-04-20', '2018-04-12', 'Terlambat', 'Rp.279,000', 1001, 'edwyn', 'teknik informatika', 'semeru', '2019-01-23', 'Rp. 279,000', 'Rp.0,-'),
(7002, '2018-04-17', '2018-04-10', 'Rusak', 'Rp.314,000', 1002, 'eza', 'teknik informatika', 'astronomi', '2019-01-26', 'Rp. 284,000', 'Rp.30,000,-'),
(7024, '2019-01-24', '2019-01-17', 'Tidak Ada', 'Rp.0', 1019, 'niko', 'teknik informatika', 'timun mas', '2019-01-23', 'Rp. 0', 'Rp.0,-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjam` (
  `id_pinjam` int(10) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `buku` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jatuh_tempo` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `id_anggota` (`id_anggota`),
  KEY `buku` (`buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7025 ;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_anggota`, `nama`, `buku`, `jurusan`, `tgl_pinjam`, `jatuh_tempo`, `status`) VALUES
(7001, 1001, 'edwyn', 'semeru', 'teknik informatika', '2018-04-12', '2018-04-20', ''),
(7002, 1002, 'eza', 'astronomi', 'teknik informatika', '2018-04-10', '2018-04-17', ''),
(7003, 1003, 'bicky', 'kalkulus', 'teknik informatika', '2018-01-01', '2018-01-08', ''),
(7004, 1004, 'faisal', ' anatomi tubuh', 'teknik informatika', '2018-02-28', '2018-03-05', ''),
(7005, 1005, 'zen', ' planet bumi', 'teknik informatika', '2018-03-30', '2018-04-6', ''),
(7006, 1006, 'suseno', 'bangun ruang', 'teknik informatika', '2018-03-31', '2018-04-06', ''),
(7007, 1007, 'suseno dwi', 'si kancil', 'ekonomi', '2018-02-28', '2018-03-05', ''),
(7008, 1008, 'yuga', 'timun mas', 'ekonomi', '2018-03-01', '2018-03-08', ''),
(7009, 1009, 'yoga', 'tangkuban perahu', 'ekonomi', '2018-03-02', '2018-03-09', ''),
(7010, 1010, 'erwin', 'laut terbelah', 'ekonomi', '2018-05-10', '2018-05-17', ''),
(7011, 1011, 'felix', 'laut terbelah', 'ekonomi', '2018-04-18', '2018-04-25', ''),
(7012, 1012, ' nur anggraini', 'laut terbelah', 'ekonomi', '2018-06-13', '2018-06-20', ''),
(7013, 1013, 'sigit', ' anatomi tubuh', 'hukum', '2018-06-12', '2018-06-19', ''),
(7014, 1014, 'ayuk ', ' anatomi tubuh', 'hukum', '2018-06-13', '2018-06-20', ''),
(7015, 1015, 'vio', 'bangun ruang', 'hukum', '2018-06-14', '2018-06-21', ''),
(7016, 1016, 'irfan', 'semeru', 'teknik elektro', '2018-07-02', '2018-07-09', ''),
(7017, 1017, 'fakri', ' anatomi tubuh', 'teknik elektro', '2018-07-03', '2018-07-10', ''),
(7018, 1018, 'farhan', 'tangkuban perahu', 'teknik elektro', '2018-07-04', '2018-07-11', ''),
(7019, 1019, 'niko', 'kalkulus', 'ilmu komunikasi', '2018-09-09', '2018-09-15', ''),
(7022, 1025, '', '', 'teknik informatika', '2019-01-10', '2019-01-17', ''),
(7024, 1019, 'niko', 'timun mas', 'teknik informatika', '2019-01-17', '2019-01-24', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rusak`
--

CREATE TABLE IF NOT EXISTS `tbl_rusak` (
  `id_rusak` int(10) NOT NULL,
  `tarif_denda` int(15) NOT NULL,
  PRIMARY KEY (`id_rusak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terlambat`
--

CREATE TABLE IF NOT EXISTS `tbl_terlambat` (
  `id_terlambat` int(10) NOT NULL,
  `tarif_denda` int(15) NOT NULL,
  PRIMARY KEY (`id_terlambat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `buku` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `nama`, `jurusan`, `buku`, `tgl_pinjam`, `tgl_pengembalian`) VALUES
(123, '', 'teknik informatika', '', '2018-12-27', '0000-00-00'),
(124, '', 'teknik informatika', '', '2018-12-27', '0000-00-00'),
(125, '', 'teknik informatika', '', '2018-12-28', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin@admin.com', 'admin'),
(2, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'Guest', 'guest@gmail.com', 'anggota'),
(3, 'koko', 'pilkoplo', 'Administrator', 'akbarpratama65@gmail.com', 'anggota'),
(0, 'pratama', 'pilkoplo', 'akbar', 'anandadwiky10@gmail.com', 'petugas'),
(0, 'kepala perpus', 'perpus', 'akbar pratama', 'akbarp1256@gmail.com', 'kepala');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_hilang`
--
ALTER TABLE `tbl_hilang`
  ADD CONSTRAINT `tbl_hilang_ibfk_1` FOREIGN KEY (`id_hilang`) REFERENCES `tbl_denda` (`kode_denda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD CONSTRAINT `tbl_pengembalian_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD CONSTRAINT `tbl_pinjam_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rusak`
--
ALTER TABLE `tbl_rusak`
  ADD CONSTRAINT `tbl_rusak_ibfk_1` FOREIGN KEY (`id_rusak`) REFERENCES `tbl_denda` (`kode_denda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_terlambat`
--
ALTER TABLE `tbl_terlambat`
  ADD CONSTRAINT `tbl_terlambat_ibfk_1` FOREIGN KEY (`id_terlambat`) REFERENCES `tbl_denda` (`kode_denda`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
