-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2026 pada 10.59
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
-- Database: `profile_cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `tahun_belajar` varchar(40) NOT NULL,
  `tempat_belajar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id_education`, `nama_jurusan`, `tahun_belajar`, `tempat_belajar`, `deskripsi`) VALUES
(11, 'Pengembangan Perangkat Lunak & GIM', '2024 -2027', 'SMK N 3 BANJAR', 'Fokus pada pembelajaran pemrograman web, basis data (MySQL/PHP), serta pengembangan antarmuka pengguna (UI/UX).');

-- --------------------------------------------------------

--
-- Struktur dari tabel `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nama`, `icon`) VALUES
(5, 'CSS', 'devicon-css3-plain'),
(14, 'Java', 'devicon-java-plain'),
(16, 'Bootstrap', 'devicon-bootstrap-plain'),
(19, 'laravel', 'devicon-laravel-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `nama_pekerjaan` varchar(200) NOT NULL,
  `tahun_bekerja` varchar(250) NOT NULL,
  `tempat_bekerja` varchar(100) NOT NULL,
  `deskripsi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id_job`, `nama_pekerjaan`, `tahun_bekerja`, `tempat_bekerja`, `deskripsi`) VALUES
(14, 'Web Developer Intern', 'Juli 2026 - Desember 2026', 'PT. LAUWBA TECHO INDONESIA', 0x2d204d656d62616e7475206d656e67656d62616e676b616e2064616e206d656d6f746f6e672074656d706c6174652055492f5558206d656e6a6164692074616d70696c616e207765622064696e616d6973206d656e6767756e616b616e205048502064616e20426f6f7473747261702e0d0a2d204d656e67696e746567726173696b616e206461746162617365204d7953514c20756e74756b2070656e67656c6f6c61616e206461746120706f72746f666f6c696f2e0d0a2d204d656d62616e74752070656d656c6968617261616e2064616e207065726261696b616e2074616d70696c616e2073697374656d2077656220696e7465726e616c2e);

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE `language` (
  `id_language` int(11) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `flag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id_language`, `bahasa`, `flag`) VALUES
(1, 'Indonesia ', '1784793908.jpg'),
(2, 'Jepang ', '1784793918.jpg'),
(3, 'Inggris ', '1786072896.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'kalin14@gmail.com', 'kalinrahasia0188'),
(2, 'robi14@gmail.com', 'robirahasia2907');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobile`
--

CREATE TABLE `mobile` (
  `id_mobile` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobile`
--

INSERT INTO `mobile` (`id_mobile`, `nama`, `icon`) VALUES
(13, 'JavaScript', 'devicon-javascript-plain'),
(18, 'PHP', 'devicon-php-plain'),
(19, 'CSS', 'devicon-css3-plain'),
(20, 'HTML', 'devicon-html5-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `judul_portfolio` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul_portfolio`, `img`, `link`, `deskripsi`, `jenis`) VALUES
(11, 'Pemilihan KetOs', '1784865454.jpg', 'www.download_osis_smk3.com', 'Memilih Pemimpin yg Baik & Bertanggungjawab', 'APP'),
(13, 'MT. PRAU', '1784867026.jpg', 'www.download_mt._prau.com', 'KEINDAHAN DI ATAS AWAN', 'APP'),
(16, 'Curug Grigis', '1785207338.jpg', 'http://grigisbutton_', 'Wisata Alam dengan Air Terjun yg Indah', 'WEB'),
(20, 'MPLS MTS N 8 CIAMIS 2025', '1785913557.jpg', 'https://mpls', 'Membelah hebel', 'WEB'),
(21, 'Latihan', '1785913689.jpg', 'https://latihan', 'Melatih Fisik dan Batin', 'WEB'),
(22, 'IPSI CUP KOTA BANJAR', '1785913951.jpg', 'www.kejuaraan_kota_banjar_', 'Event kejuaraan olahraga pencak silat IPSI Cup Kota Banjar', 'APP'),
(23, 'IPSI CUP KAB. CIAMIS', '1785914229.jpg', 'www.kejuaraan_kab.ciamis_', 'Event kejuaraan olahraga pencak silat IPSI Cup Kab. Ciamis', 'APP'),
(24, 'JUARA I | VIDEO HARI KARTINI', '1785914579.jpg', 'https://harikartinipplg2', 'Membuat video kreasi di hari Kartini', 'WEB'),
(26, 'CURUG LUHUR CIMANGGU', '1786067404.jpg', 'https://curugluhurcimanggupangandaran_', 'PEMANDANGAN CURUG YANG INDAH DAN MELEWATI BANYAK RINTANGAN', 'WEB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reference`
--

CREATE TABLE `reference` (
  `id_reference` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reference`
--

INSERT INTO `reference` (`id_reference`, `nama`, `jabatan`, `perusahaan`, `phone`, `email`) VALUES
(1, 'Kalinna Rizki Riah', 'Pelajar', 'SMK N 3 BANJAR', '085871472153', 'rizkiriahkalinna@gmail.com'),
(10, 'Robi Sugiara', 'Pelajar', 'SMA N 1 LAKBOK', '087698765678', 'robkal@gmail.com'),
(11, 'Vino', 'Pelajar', 'SMK TRI BINTANG', '085678906543', 'vino98@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebar_photo`
--

CREATE TABLE `sidebar_photo` (
  `id_sidebar_photo` int(11) NOT NULL,
  `sidebar_photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sidebar_photo`
--

INSERT INTO `sidebar_photo` (`id_sidebar_photo`, `sidebar_photo`) VALUES
(28, '1786069396.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nama_skill` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`) VALUES
(1, 'PHP '),
(6, 'HTML'),
(7, 'CSS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addres` text NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nama`, `about`, `website`, `phone`, `email`, `addres`, `linkedin`, `nationality`) VALUES
(10998, 'Kalinna R. R', 'Saya Kalinna, siswi SMK Negeri 3 Banjar jurusan PENGEMBANGAN PERANGKAT LUNAK & GIM (PPLG) yang lagi fokus ngembangin keahlian di bidang Web Development dan UI/UX Design. Saya biasa ngoding web pakai HTML, CSS, PHP, dan JavaScript, plus bikin desain antarmuka pakai Figma, Canva, atau CorelDraw. Saya selalu antusias buat belajar hal-hal baru dan ngabisin waktu buat ngembangin proyek web yang rapi dan enak dipakai.', 'https://www.instagram.com/p/DYKTgJXEfjs/?igsh=MTdhNHI5aWI1NWVxdQ==', '085871472153', 'kalinna.rizki24@smk.belajar.id', 'Yogyakarta', 'https://www.instagram.com/likestrwbrrymtcha_?igsh=MXdiN25yZ3FlbWJxZg==', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `id_tools` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`id_tools`, `nama`, `icon`) VALUES
(1, 'VSCode', 'devicon-vscode-plain'),
(2, 'MySQL', 'devicon-mysql-plain'),
(3, 'Firebase', 'devicon-firebase-plain'),
(4, 'Canva', 'devicon-canva-original'),
(5, 'Android Studio', 'devicon-androidstudio-plain'),
(6, 'Composer', 'devicon-composer-line'),
(10, 'PHP', 'devicon-php-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `training`
--

CREATE TABLE `training` (
  `id_training` int(11) NOT NULL,
  `nama_training` varchar(256) NOT NULL,
  `tahun_training` varchar(256) NOT NULL,
  `tempat_training` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `tahun_training`, `tempat_training`, `deskripsi`) VALUES
(14, 'Web Development Basics', '2026', 'PT LAUWBA TECHNO INDONESIA', 'Mengikuti pelatihan pembuatan website interaktif menggunakan HTML, CSS, JavaScript, dan PHP.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indeks untuk tabel `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indeks untuk tabel `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_mobile`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`);

--
-- Indeks untuk tabel `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  ADD PRIMARY KEY (`id_sidebar_photo`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indeks untuk tabel `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_mobile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  MODIFY `id_sidebar_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11006;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
