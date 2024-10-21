-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2024 pada 07.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(6, '2024-10-04-035543', 'App\\Database\\Migrations\\User', 'default', 'App', 1728618072, 1),
(7, '2024-10-11-033648', 'App\\Database\\Migrations\\TbKat1', 'default', 'App', 1728618072, 1),
(8, '2024-10-11-033658', 'App\\Database\\Migrations\\TbKat2', 'default', 'App', 1728618072, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat1`
--

CREATE TABLE `tb_kat1` (
  `id_kat1` int(10) UNSIGNED NOT NULL,
  `kat1` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat2`
--

CREATE TABLE `tb_kat2` (
  `id_kat2` int(10) UNSIGNED NOT NULL,
  `kat2` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `surat` varchar(80) DEFAULT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `sifat` varchar(20) NOT NULL,
  `perihal` varchar(200) DEFAULT NULL,
  `terusan` varchar(50) DEFAULT NULL,
  `ket_terusan` varchar(255) DEFAULT NULL,
  `tindakan` varchar(50) DEFAULT NULL,
  `ket_tindakan` varchar(255) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `file` varchar(500) NOT NULL,
  `kat1` varchar(255) NOT NULL,
  `kat2` varchar(255) NOT NULL,
  `ket` enum('masuk','keluar') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `foto`, `username`, `password`, `nama`, `email`, `level`, `jenis_kelamin`, `alamat`, `status`, `created_at`) VALUES
(1, 'avatar1.png', 'redo1', '$2y$10$fjyf9ue34yZok5XYxTQrMOyhCqypJA.oSCA6CnY1mJrNTvBViN7kK', 'redo', '', 'Admin', NULL, 'alamat baru', 'nonaktif', '2024-10-18 03:39:53'),
(2, '', 'nita2', '$2y$10$zsYcOHK0VnssHx2LEvzN8eXNkhBx3/km9WjjhEwj5fipKGT4mcqfq', 'nita', '', 'User', NULL, 'addssd', 'aktif', '2024-10-18 03:39:53'),
(3, 'avatar3.png', 'roma3', '$2y$10$7mCAyae5NdkHuh.vM6p/FOlp1j8qTSxQ1m2ja1KjCZeDTbnupc9uO', 'roma', '', 'User', NULL, '', 'aktif', '2024-10-18 03:39:53'),
(4, 'avatar4.png', 'zahra4', '$2y$10$.fjYX9TQ6Bhj81REshynh.yhj7xYX380Q0Xmzy84L7RN8yXIUcrTW', 'zahra', 'zahra4@gmail.com', 'User', NULL, NULL, 'nonaktif', '2024-10-18 03:39:54'),
(5, 'avatar3.png', 'nita5', '$2y$10$/85AMukYR/RYgWiwxjCiUOxQgY7/fHW32N5its3O3GCXw3Mnrk57W', 'nita', 'nita5@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(6, 'avatar2.png', 'redo6', '$2y$10$WzKMsit0vGyBaLvNZ.mS/.7jF73pEJZtdhU6RdEacdg3yAnzjxfY.', 'redo', 'redo6@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(7, 'avatar1.png', 'nita7', '$2y$10$U3d4cVlm.qRpTM/FW41qD.UGTDDsBE1I/g.5X/ytVxcr0VVuFdgt2', 'nita', 'nita7@gmail.com', 'User', NULL, NULL, 'nonaktif', '2024-10-18 03:39:54'),
(8, 'avatar5.png', 'nita8', '$2y$10$KFrPxX6KvHn/YCm/0LDdfuvcm6O5zFNgU4lqlVXRd3Uh6g8prZD2i', 'nita', 'nita8@gmail.com', 'User', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(9, 'avatar1.png', 'roma9', '$2y$10$4b6xclX3Oti0fVXSsoQC4um.7UKNaAAg2EoeOn0XbbaVzbZWt59yO', 'roma', 'roma9@gmail.com', 'User', NULL, NULL, 'nonaktif', '2024-10-18 03:39:54'),
(10, 'avatar1.png', 'nita10', '$2y$10$FpYPrd/oe9IkawZ4NKoOP.LmEzD0xEXJLExN7VlGb8d8liClNsQ6i', 'nita', 'nita10@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(11, 'avatar5.png', 'roma11', '$2y$10$G.cXdUV86JDkH9/gUsCkSuI9jPNDOpVz7yGV3AbEuzlu.9VUVNwlu', 'roma', 'roma11@gmail.com', 'Admin', NULL, NULL, 'nonaktif', '2024-10-18 03:39:54'),
(12, 'avatar5.png', 'nita12', '$2y$10$y/fX17qw1m6UaJEDxnnJNec/tZA9haO.8NAb.95Y/KK6sKd.nuvuW', 'nita', 'nita12@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(13, 'avatar2.png', 'nita13', '$2y$10$Y7vv7GoiOiEeA0./88.N1en1E4yz5rA.19aMehV7szL4DbK1/9SKS', 'nita', 'nita13@gmail.com', 'Admin', NULL, NULL, 'nonaktif', '2024-10-18 03:39:54'),
(14, 'avatar1.png', 'redo14', '$2y$10$3BgUY.euJtGipfVRff3zaOLhCXzaMSUxjr4ldTVfeHGQoUnvuwrB6', 'redo', 'redo14@gmail.com', 'User', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(15, 'avatar4.png', 'zahra15', '$2y$10$ezB1FWlcwwDNzM2e16laAetiziG15yamNpuCiOo407Sv/YJ1KVr/2', 'zahra', 'zahra15@gmail.com', 'User', NULL, NULL, 'nonaktif', '2024-10-18 03:39:54'),
(16, 'avatar4.png', 'redo16', '$2y$10$0yAeuOfI69jI6XXXl.Psu.NDwbTd93VwisXFmnYY1opkzWg/alLPC', 'redo', 'redo16@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:54'),
(17, 'avatar3.png', 'nita17', '$2y$10$x.ePMLJXWfPY1yRjCOpWU.Z9IHn2v0tFETlunXQrVt2Kx.G12en5W', 'nita', 'nita17@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:55'),
(18, 'avatar5.png', 'nita18', '$2y$10$R7QsxDG7du7UO9CjsEQn9.x9mzziyI705WSHIbIZSomXI6uPgzcK6', 'nita', 'nita18@gmail.com', 'Admin', NULL, NULL, 'aktif', '2024-10-18 03:39:55'),
(19, 'avatar4.png', 'zahra19', '$2y$10$4EXuBC2ls3qe9OU.wtgcK.kA8pzESD.eKs.zMGhp.HkusDuCz0N7.', 'zahra', 'zahra19@gmail.com', 'User', NULL, NULL, 'aktif', '2024-10-18 03:39:55'),
(20, 'avatar5.png', 'zahra20', '$2y$10$3TsZESfll14SggyhU64dUuWhTFiy894uGm.G27C8tkEmU0UhNpyT6', 'zahra', 'zahra20@gmail.com', 'User', NULL, NULL, 'aktif', '2024-10-18 03:39:55'),
(21, '', 'new1', '$2y$10$GOIx0VAPNWqZCdGg7KYLfelTPJAL2UvT3lEHC134eo8cpE3pnccXS', 'New', 'new@gmail.com', 'Admin', NULL, '', 'aktif', '2024-10-18 13:19:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kat1`
--
ALTER TABLE `tb_kat1`
  ADD PRIMARY KEY (`id_kat1`);

--
-- Indeks untuk tabel `tb_kat2`
--
ALTER TABLE `tb_kat2`
  ADD PRIMARY KEY (`id_kat2`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kat1`
--
ALTER TABLE `tb_kat1`
  MODIFY `id_kat1` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kat2`
--
ALTER TABLE `tb_kat2`
  MODIFY `id_kat2` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
