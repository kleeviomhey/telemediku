-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2020 pada 16.44
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
-- Database: `telemediku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Angga Raswiantono', 'anggaraswiantono@gmail.com', 'default.jpg', '$2y$10$CwZAfOLUGJLoRiD62YZwGO.mKhI2NiEsVqt0tGvYwLdH4YhAdrBXO', 1, 1, 1576415151),
(2, 'Abi', 'Abi@gmail.com', 'default.jpg', '$2y$10$Ke4E.kwaH/3m47j5Z50DPunEfrIHY0vSeZrMPqen0TWI5IxJgu2lS', 2, 1, 1593619880);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`) VALUES
(1, 'Website'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_sub_menu`
--

CREATE TABLE `admin_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_sub_menu`
--

INSERT INTO `admin_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dasboard', 'admin/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'Menu Management', 'admin/memumanagement', 'fas fa-fw fa-tasks', 1),
(3, 2, 'My Profile', 'admin/admin/myprofile', 'fas fa-fw fa-user', 1),
(4, 1, 'Collapse', 'admin/home/collapse', 'far fa-square', 1),
(5, 1, 'F.A.Q', 'admin/home/faq', 'far fa-question-circle', 1),
(6, 1, 'Edukasi Covid19', 'admin/educovid', 'fas fa-book-medical', 1),
(7, 1, 'Edukasi Sosial Ekonomi', 'admin/edusoskom', 'fas fa-hand-holding-usd', 1),
(8, 1, 'Galery KKM', 'admin/galerykkm', 'far fa-image', 1),
(9, 2, 'Edit Profile', 'admin/admin/editprofile', 'fas fa-fw fa-user-edit', 1),
(10, 2, 'Change Password', 'admin/admin/changepassword', 'fas fa-fw fa-key', 1),
(11, 2, 'Add New Admin', 'admin/admin/addnewadmin', 'fas fa-user-plus', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `collapse`
--

CREATE TABLE `collapse` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `collapse`
--

INSERT INTO `collapse` (`id`, `image`) VALUES
(18, 'Banner_1-01.jpg'),
(20, 'Banner_2-02-02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasi_covid`
--

CREATE TABLE `edukasi_covid` (
  `id` int(11) NOT NULL,
  `judul` varchar(228) NOT NULL,
  `paragraf1` varchar(500) NOT NULL,
  `paragraf2` varchar(500) NOT NULL,
  `paragraf3` varchar(500) NOT NULL,
  `paragraf4` varchar(500) NOT NULL,
  `paragraf5` varchar(500) NOT NULL,
  `paragraf6` varchar(500) NOT NULL,
  `paragraf7` varchar(500) NOT NULL,
  `paragraf8` varchar(500) NOT NULL,
  `paragraf9` varchar(500) NOT NULL,
  `gambar` varchar(228) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `oleh` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `edukasi_covid`
--

INSERT INTO `edukasi_covid` (`id`, `judul`, `paragraf1`, `paragraf2`, `paragraf3`, `paragraf4`, `paragraf5`, `paragraf6`, `paragraf7`, `paragraf8`, `paragraf9`, `gambar`, `tanggal`, `oleh`) VALUES
(28, 'coba lagi lagi sekali lagi', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coab', '15868442006754.png', 1592930609, 'admin'),
(30, 'coba', 'nnnn', 'sjhx guqcv', 'vr huwvwe', 'dbsj h wuwe', 'hbgvt7rv', 'dchbyucd', 'jb dcscd', 'hd cbsbcd', 'bs dggcd', 'tips-menghindari-covid-1914.jpg', 1593018409, 'admin'),
(34, 'cobaaaaaaaaaaaaaaaaaaaaaa', 'nnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnn', 'nsssssssssssssssss', 'nssssssssnsnsnsnsn', 'nnnsssssssssssssssss', '500x500putih.png', 1593435046, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasi_sosial_ekonomi`
--

CREATE TABLE `edukasi_sosial_ekonomi` (
  `id` int(11) NOT NULL,
  `judul` varchar(228) NOT NULL,
  `paragraf1` varchar(500) NOT NULL,
  `paragraf2` varchar(500) NOT NULL,
  `paragraf3` varchar(500) NOT NULL,
  `paragraf4` varchar(500) NOT NULL,
  `paragraf5` varchar(500) NOT NULL,
  `paragraf6` varchar(500) NOT NULL,
  `paragraf7` varchar(500) NOT NULL,
  `paragraf8` varchar(500) NOT NULL,
  `paragraf9` varchar(500) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `oleh` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `edukasi_sosial_ekonomi`
--

INSERT INTO `edukasi_sosial_ekonomi` (`id`, `judul`, `paragraf1`, `paragraf2`, `paragraf3`, `paragraf4`, `paragraf5`, `paragraf6`, `paragraf7`, `paragraf8`, `paragraf9`, `gambar`, `tanggal`, `oleh`) VALUES
(1, 'Terungkap, Alasan Terjadi Lonjakan Kasus Positif Covid-19 di Jawa Tengah', 'Gubernur Jawa Tengah Ganjar Pranowo mengungkapkan kasus positif Covid-19 di Jawa Tengah meningkat signifikan pasca-Lebaran lalu. Sebelumnya, tercatat ada penambahan 139 kasus positif Covid-19 di Jateng. Menurut Ganjar, lonjakan tersebut terjadi seiring dilakukannya tes massal secara masif di seluruh kabupaten/kota di Jawa Tengah. \"Bahwa ada peningkatan iya, ada di kabupaten tertentu iya. Seperti di Kota Semarang, yang terjadi di Pasar Kobong, Pasar Karanganyu. Itu karena dilakukan tes massal sec', 'Ganjar mengatakan, dari tes massal tersebut diketahui proses penularannya ternyata berasal dari wilayah yang berbeda. \"Rapid itu dipakai untuk pengecekan dan memang diketahui (penularannya) bukan hanya dari wilayahnya saja tapi berasal dari berbagai tempat,\" ujarnya. Selain itu, Ganjar menyebutkan kasus penambahan di Desa Krincing, Kabupaten Magelang juga sangat tinggi. Diketahui, dalam satu RT saja jumlah penularannya ada yang mencapai 27 orang.', '\"Di Desa Krincing Magelang itu dari Klaster Gowa. Itu tinggi sekali. Maka kita cari dan berkali-kali saya meminta kawan-kawan yang dari Gowa melaporlah agar kita bisa melakukan penelusuran dengan baik,\" jelasnya.', 'Hingga saat ini, Pemerintah Provinsi Jawa Tengah telah menyalurkan sebanyak 38.111 rapid test ke seluruh kabupaten/kota dan rumah sakit di Jawa Tengah dalam dua tahap.', '', '', '', '', '', '1.jpg', 0, ''),
(9, 'v vvbvbbv', '', '', '', '', '', '', '', '', '', 'Meja_Belajar_Anak_Minimalis.jpg', 0, ''),
(10, 'coba ganti judul lagi sekarang sekali lagi', 'sama tes ganti gambar', 'jvyuvt hbhvg  h g ', 'h', 'n', 'n', 'b', 'n', 'n', '', 'tips-menghindari-covid-19.jpg', 1593090333, 'admin'),
(11, 'coba tambah artikel edukasi sosial ekonomi', 'cobahbcbryv h fhebbrv', ' hhdbbfu hvfbybr hbvybyre ', 'bubebr hbrybyr ', 'brbvieeb hbivbr hbyvbe bvygre aiurwb iurbyv', 'hbwrbiru hbybfwbyiwowc uyby', 'hbybybrvbr', '', '', '', 'disamping.png', 1593088936, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(128) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Apakah COVID-19 perlu dikhawatirkan?', 'Sebanyak 80 persen kasus COVID-19 bersifat \"ringan\", sehingga perawatan yang cukup dapat memulihkan mereka segera dalam waktu cepat. Namun, dikarenakan penyebarannya yang cepat, diimbau untuk tetap waspada pada penyebaran COVID-19. Jika Anda merasakan gejala-gejalanya, maka jangan ragu untuk menghubungi Hotline 024-3580713 atau ke fasilitas kesehatan terdekat.'),
(2, 'Apakah orang tua rentan terkena COVID-19?', 'Tidak hanya manula, bahkan generasi muda pun dapat tertular COVID-19 jika tidak menjaga diri. Biasanya, manula memang rentan terkena COVID-19 dikarenakan sistem imun tubuh yang sudah tidak seprima dulu. Selain itu, manula yang memiliki riwayat penyakit seperti hipertensi, diabetes, penyakit pernapasan, atau penyakit parah lainnya memiliki kemungkinan besar untuk tertular COVID-19 akut.'),
(5, 'Apakah COVID-19 sama dengan SARS dan MERS?', 'Severe Acute Respiratory Syndrome (SARS-CoV) yang berawal dari 2003 dan Middle East Respiratory Syndrome (MERS-CoV) pada 2012 memang sama-sama menyerang pernapasan, sama seperti COVID-19. Meskipun disebabkan oleh jenis virus yang sama, COVID-19, dan MERS serta SARS memiliki jenis virus corona yang berbeda. Dari segi penularan, COVID-19 jauh lebih pesat dibandingkan SARS dan MERS.'),
(6, 'Perlukah saya menggunakan masker?', 'Perlu. Karena ketika seseorang berada di luar rumah, akan ada banyak sekali ancaman penularan virus. Sesuai rekomendasi dari WHO, semua orang (baik yang sakit maupun yang sehat) perlu menggunakan masker. Masyarakat umum, dapat menggunakan masker berbahan dasar kain. Penggunaan masker kain tidak lebih dari 4 (empat) jam. Setelahnya, masker harus dicuci menggunakan sabun dan air, serta dipastikan bersih sebelum dipakai kembali. Masker bedah atau masker N95 hanya untuk tenaga kesehatan (karena terb'),
(7, 'Apakah COVID-19 dapat melekat pada benda mati?', 'Ya. COVID-19 dapat menempel pada benda mati atau barang selama beberapa jam atau beberapa hari jika tidak secepatnya dibersihkan dengan disinfektan. Akan tetapi, ketahanan COVID-19 menempel pada satu benda tergantung dari beberapa faktor seperti suhu, kelembapan, dan jenis permukaan. Sesudah membersihkan barang yang terpapar COVID-19 dengan disinfektan, segera bersihkan tangan dengan alkohol atau sabun. Hindari menyentuh mata, hidung dan mulut.'),
(8, 'Apakah COVID-19 sudah ada obatnya?', 'Hingga saat ini, vaksin dan obat untuk COVID-19 masih dalam tahap penelitian. Pengobatan masih berupa pengobatan suportif.'),
(9, 'Apakah hewan peliharaan dapat menularkan COVID-19? ', 'WHO menyatakan bahwa COVID-19 tidak dapat ditularkan dari hewan peliharaan apapun, baik anjing maupun kucing. Tidak ada dasar ilmiah yang mendukung penyebaran COVID-19 lewat hewan peliharaan. Namun Anda tetap perlu menjaga kebersihan dengan rajin mencuci tangan setelah melakukan kontak dengan hewan peliharaan.'),
(10, 'Apakah ada hal lain yang tidak boleh dilakukan demi mencegah COVID-19?', 'Tidak merokok dan tidak menggunakan masker berlapis-lapis. Jika Anda memang mengalami gejala-gejala COVID-19, segera hubungi Hotline 024-3580713 atau laporkan diri ke rumah sakit rujukan virus corona.'),
(11, 'Apakah Antibiotik efektif mencegah dan menangani COVID-19?', 'Tidak. Antibiotik tidak dapat melawan virus, melainkan hanya melawan infeksi bakteri. COVID-19 disebabkan oleh virus sehingga antibiotik tidak efektif. Antibiotik tidak boleh digunakan untuk mencegah atau mengobati COVID-19. Antibiotik hanya digunakan sesuai arahan dokter untuk mengobati infeksi bakteri. '),
(12, 'coba ganti pertanyaan', 'coba lagi ganti jawaban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery_kkm`
--

CREATE TABLE `galery_kkm` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galery_kkm`
--

INSERT INTO `galery_kkm` (`id`, `gambar`, `judul`, `keterangan`) VALUES
(2, 'img-kkm.jpg', 'Logo KKM R2', 'coba'),
(3, 'img-kkm121.jpg', 'Proses Pembuatan Masker', 'conba'),
(4, 'img-kkm5.jpg', 'Proses Pembagian Masker', 'hbcuib hr hb'),
(5, 'gallery-4.jpg', 'hbuhf jnddu JEIEHC', 'jnuv hbhuw ijbbbwjn hxbjbuir'),
(6, 'gallery-5.jpg', 'hbubrivu jbubuwk jbcuibq', 'hujndwecu hbywbyiw hwdbbwsie beybwkebu jnudnuw'),
(7, 'gallery-6.jpg', 'hbbewiwb jnabsu ebicdi habkdjbciudc iucbie', 'bbiwb whbbw abiwnsj ihbeibe hbsbiwr'),
(8, 'gallery-7.jpg', 'coba', 'coba'),
(9, 'gallery-8.jpg', 'hbwibwe', 'hbwei ihwbuwe wbiw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `title`, `url`, `is_active`) VALUES
(1, 'Home', 'user', 1),
(2, 'Galery KKM', 'galerykkm', 1),
(3, 'Edukasi Covid19', 'edukasicovid', 1),
(4, 'Edukasi Sosial Ekonomi', 'edukasisosialekonomi', 1),
(5, 'About', 'about', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `collapse`
--
ALTER TABLE `collapse`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edukasi_covid`
--
ALTER TABLE `edukasi_covid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edukasi_sosial_ekonomi`
--
ALTER TABLE `edukasi_sosial_ekonomi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery_kkm`
--
ALTER TABLE `galery_kkm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `collapse`
--
ALTER TABLE `collapse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `edukasi_covid`
--
ALTER TABLE `edukasi_covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `edukasi_sosial_ekonomi`
--
ALTER TABLE `edukasi_sosial_ekonomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `galery_kkm`
--
ALTER TABLE `galery_kkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
