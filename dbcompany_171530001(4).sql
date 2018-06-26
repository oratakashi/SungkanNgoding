-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Jun 2018 pada 08.20
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcompany_171530001`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbaboutus`
--

CREATE TABLE `tbaboutus` (
  `id_about` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `detail_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbaboutus`
--

INSERT INTO `tbaboutus` (`id_about`, `judul`, `detail_about`) VALUES
(1, 'Coba Aja', '<p>Coba Coba</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkategori`
--

CREATE TABLE `tbkategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori_post` varchar(30) NOT NULL,
  `kategori_slug` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkategori`
--

INSERT INTO `tbkategori` (`id_kategori`, `kategori_post`, `kategori_slug`) VALUES
(3, 'Tutorial PHP', 'tutorial-php'),
(4, 'Tutorial MySQL', 'tutorial-mysql'),
(5, 'Tutorial HTML', 'tutorial-html'),
(6, 'Tutorial CSS', 'tutorial-css'),
(7, 'Tutorial Wordpress', 'tutorial-wordpress');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblayanan`
--

CREATE TABLE `tblayanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `slug_layanan` varchar(75) NOT NULL,
  `isi_layanan` text NOT NULL,
  `id_user` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblayanan`
--

INSERT INTO `tblayanan` (`id_layanan`, `nama_layanan`, `slug_layanan`, `isi_layanan`, `id_user`) VALUES
(1, 'Pembuatan Website', 'pembuatan-website', 'Jasa Pembuatan Website', 'ID001'),
(2, 'Pembuatan Aplikasi Android', 'pembuatan-aplikasi-desktop', '<p>Pembuatan Aplikasi Android</p>', 'ID001'),
(3, 'Kursus Pemprograman Online', 'kursus-pemprograman-online', '<p>Kursus Pemprograman Online</p>', 'ID001'),
(4, 'Jasa Instalasi Komputer', 'jasa-instalasi-komputer', '<p>Jasa Instalasi Komputer</p>', 'ID001'),
(5, 'Jasa Instalasi Laptop', 'jasa-instalasi-laptop', '<p>Jasa Instalasi Komputer</p>', 'ID001'),
(6, 'Jasa Instalasi Netbook', 'jasa-instalasi-netbook', '<p>Jasa Instalasi Netbook</p>', 'ID001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpost`
--

CREATE TABLE `tbpost` (
  `id_post` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug_judul` varchar(100) NOT NULL,
  `foto_header` varchar(15) NOT NULL,
  `thumbs` varchar(25) NOT NULL,
  `isi_post` text NOT NULL,
  `status_aktif` tinyint(1) NOT NULL,
  `id_user` char(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpost`
--

INSERT INTO `tbpost` (`id_post`, `tgl_post`, `id_kategori`, `judul`, `slug_judul`, `foto_header`, `thumbs`, `isi_post`, `status_aktif`, `id_user`, `time`) VALUES
(13, '2018-06-22', 6, 'Pengenalan CSS', 'pengenalan-css', '20180623124309', 'thumb_20180623124309', '<p style=\"text-align: justify;\">CSS pertama kali bermula sejak munculnya SGML pada tahun 1970an. Sejak kemunculannya tersebut, CSS mengalami perkembangan yang sangat pesat. Format dasar CSS yang banyak kita gunakan sekarang ini merupakan ide dari seoang programmer bernama Hakon Wium Lie yang tertuang dalam proposalnya mengenai Cascading HTML Style Sheet (CHSS) pada bulan Oktober 1994 (dalam konferensi W3C di Chicago, Illinois). Kemudian, beliau bersama-sama dengan seorang temannya yang bernama Bert Bos mengembangkan suatu standard CSS.</p>\r\n<p style=\"text-align: justify;\">Pada akhir tahun 1996, CSS telah resmi dipublikasikan (dan menyusul kemudian CSS Level 1 pada bulan Desember). Pengerjaan proyek ini juga didukung oleh seorang programmer bernama Thomas Reardon dari perusahaan software ternama, Microsoft. Cascading Style Sheet&nbsp;(CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.</p>\r\n<p style=\"text-align: justify;\">Sama halnya&nbsp;<em>styles</em>&nbsp;dalam&nbsp;<a href=\"https://id.wikipedia.org/wiki/Aplikasi\">aplikasi</a>&nbsp;pengolahan kata seperti&nbsp;<a href=\"https://id.wikipedia.org/wiki/Microsoft_Word\">Microsoft Word</a>&nbsp;yang dapat mengatur beberapa&nbsp;<em>style</em>, misalnya&nbsp;<em>heading</em>,&nbsp;<em>subbab</em>,&nbsp;<em>bodytext</em>,&nbsp;<em>footer</em>,&nbsp;<em>images</em>, dan&nbsp;<em>style</em>&nbsp;lainnya untuk dapat digunakan bersama-sama dalam beberapa berkas (<a href=\"https://id.wikipedia.org/wiki/File\"><em>file</em></a>).&nbsp;Pada umumnya CSS dipakai untuk memformat tampilan halaman web yang dibuat dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Bahasa\">bahasa</a>&nbsp;<a href=\"https://id.wikipedia.org/wiki/HTML\">HTML</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/XHTML\">XHTML</a>.</p>\r\n<p style=\"text-align: justify;\">CSS dapat mengendalikan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Ukuran\">ukuran</a>&nbsp;<a href=\"https://id.wikipedia.org/wiki/Gambar\">gambar</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Warna\">warna</a>&nbsp;bagian tubuh pada teks, warna&nbsp;<a href=\"https://id.wikipedia.org/wiki/Tabel\">tabel</a>, ukuran border, warna border, warna&nbsp;<a href=\"https://id.wikipedia.org/wiki/Hyperlink\">hyperlink</a>, warna&nbsp;<a href=\"https://id.wikipedia.org/wiki/Mouse\"><em>mouse</em></a><em>&nbsp;</em><em>over</em>, spasi antar paragraf, spasi antar teks, margin kiri, kanan, atas, bawah, dan parameter lainnya.&nbsp;CSS adalah bahasa&nbsp;<a href=\"https://id.wikipedia.org/wiki/Stylesheet\">style sheet</a>&nbsp;yang digunakan untuk mengatur tampilan dokumen.&nbsp;Dengan adanya CSS memungkinkan kita untuk menampilkan halaman yang sama dengan format yang berbeda.</p>\r\n<p style=\"text-align: justify;\">Sekarang penggunaan CSS telah semakin meluas dan terus dikembangkan. Hal ini juga akan mempermudah seorang web designer dalam mengembangkan suatu halaman web (situs).</p>', 0, 'ID001', '2018-06-23 10:54:30'),
(14, '2018-06-23', 7, 'Pengenalan Wordpress', 'pengenalan-wordpress', '20180623124542', 'thumb_20180623124542', '<p>www</p>', 0, 'ID001', '2018-06-23 10:54:27'),
(15, '2018-06-21', 5, 'Pengenalan HTML', 'pengenalan-html', '20180623124721', 'thumb_20180623124721', '<p><strong>HTML</strong> adalah singkatan dari <strong>Hypertext Markup Language</strong>. Disebut <strong>hypertext</strong> karena di dalam HTML sebuah text biasa dapat berfungsi lain, kita dapat membuatnya menjadi <strong>link</strong> yang dapat berpindah dari satu halaman ke halaman lainnya hanya dengan meng-<em>klik</em> text tersebut. Kemampuan text inilah yang dinamakan <strong>hypertext</strong>, walaupun pada implementasinya nanti tidak hanya text yang dapat dijadikan <strong>link</strong>.</p>\r\n<p>Disebut <strong>Markup Language</strong> karena bahasa <strong>HTML</strong> menggunakan tanda (<em>mark</em>), untuk menandai bagian-bagian dari text. Misalnya, text yang berada di antara tanda tertentu akan menjadi tebal, dan jika berada di antara tanda lainnya akan tampak besar. Tanda ini di kenal sebagai HTML <strong>tag</strong>.</p>\r\n<p>Jika anda ingin melihat bagaimana sebenarnya HTML, silahkan klik kanan halaman ini, lalu pilih <em>View Page Source</em> (di <em>Browser Mozilla Firefox</em> atau <em>Google Chrome</em>). Akan tampil sebuah halaman baru yang merupakan kode <strong>HTML</strong> dari halaman ini.</p>\r\n<p>&nbsp;</p>', 0, 'ID001', '2018-06-23 10:54:24'),
(16, '2018-06-20', 3, 'Pengenalan PHP', 'pengenalan-php', '20180624081551', 'thumb_20180624081551', '<h2>Apa itu PHP? Pengenalan PHP</h2>\r\n<p>PHP (PHP: Hypertext Prepocessor) adalah salah satu bahasa pemrograman web yang bersifat dinamis, dimana PHP adalah bahasa yang bisa disisipkan dengan sintaks HTML sehingga dapat menciptakan teknologi web dinamis seperti sekarang ini.</p>\r\n<p>PHP merupakan sebuah bahasa server-side untuk pemrograman web yang pada awalnya merupakan program CGI yang di khususkan untuk menerima input melalui form yang di tampilkan browser. PHP dikatakan bahasa server-side embedded script &nbsp;language maksudnya adalah sintaks-sintaks dan perintah yang diberikan akan sepenuhnya dijalankan oleh server dan di kirim ke komputer client berupa bahasa html.</p>\r\n<h2>Mengapa Harus PHP?</h2>\r\n<p>PHP adalah bahasa pemrograman web yang paling banyak di gunakan serta memiliki komunitas yang sangat banyak sehingga php mudah untuk dipelajari, selain itu PHP adalah salah satu bahasa multi platform yang dapat berjalan di berbagai sistem operasi.</p>\r\n<p>Kode PHP di simpan sebagai plain text dalam format ASCII sehingga bahasa PHP dapat ditulis dengan berbagai text editor diberbagai sistem operasi.</p>\r\n<p>Selain PHP sebenarnya masih banyak lagi banyak pemrograman web dinamis seperti phyton, ruby dan lain-lain, semuanya bisa digunakan dalam pembuatan teknologi web dinamis, hanya saja tergantung kebutuhan, banyak website besar dibuat dengan tidak menggunakan PHP sebagai bahasa web dinamis mereka, contohnya seperti google, twitter dan mungkin masih banyak lagi. Tetapi hal itu akan kita bahas nanti, setelah kita mengetahui seluruh aspek dasar bahasa pemrograman web dengan PHP maka penulis rasa untuk mempelajari bahasa lainnya tidak akan terlalu sulit, sampai disini pengenalan PHP semoga dapat bermanfaat &nbsp;untuk penulis dan pembaca.</p>', 0, 'ID001', '2018-06-24 06:15:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` char(10) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `lev_user` varchar(15) NOT NULL,
  `status_login` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama_user`, `pass`, `lev_user`, `status_login`) VALUES
('ID001', 'Oratakashi', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 0),
('ID003', 'Anissakd', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator', 0),
('ID004', 'Simbah Cakep Dahh', '827ccb0eea8a706c4c34a16891f84e7b', 'Operator', 0),
('ID005', 'Simbah Ganteng', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbaboutus`
--
ALTER TABLE `tbaboutus`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tblayanan`
--
ALTER TABLE `tblayanan`
  ADD PRIMARY KEY (`id_layanan`,`id_user`) USING BTREE,
  ADD KEY `fk_layanan` (`id_user`);

--
-- Indeks untuk tabel `tbpost`
--
ALTER TABLE `tbpost`
  ADD PRIMARY KEY (`id_post`,`id_kategori`,`id_user`),
  ADD KEY `fk_post2` (`id_user`),
  ADD KEY `fk_post` (`id_kategori`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbaboutus`
--
ALTER TABLE `tbaboutus`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbkategori`
--
ALTER TABLE `tbkategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblayanan`
--
ALTER TABLE `tblayanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbpost`
--
ALTER TABLE `tbpost`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblayanan`
--
ALTER TABLE `tblayanan`
  ADD CONSTRAINT `fk_layanan` FOREIGN KEY (`id_user`) REFERENCES `tbuser` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbpost`
--
ALTER TABLE `tbpost`
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`id_kategori`) REFERENCES `tbkategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_post2` FOREIGN KEY (`id_user`) REFERENCES `tbuser` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
