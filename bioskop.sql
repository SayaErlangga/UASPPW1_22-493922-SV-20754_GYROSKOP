-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 07:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total_harga` (IN `no_pesanan` VARCHAR(20))   BEGIN
	SELECT * FROM pesanan WHERE no_pesanan = id_pesanan;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bioskop`
--

CREATE TABLE `bioskop` (
  `id_bioskop` varchar(20) NOT NULL,
  `nama_bioskop` varchar(100) NOT NULL,
  `lokasi_bioskop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bioskop`
--

INSERT INTO `bioskop` (`id_bioskop`, `nama_bioskop`, `lokasi_bioskop`) VALUES
('b001', 'ambarukmo xxi', 'yogyakarta'),
('b002', 'jwalk mmall cgv', 'yogyakarta'),
('b003', 'lippo plaza cinepolis', 'yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `nama_user` varchar(100) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `jumlah_kursi` int(3) NOT NULL,
  `total_harga` int(7) NOT NULL,
  `cover_film` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`nama_user`, `judul_film`, `jumlah_kursi`, `total_harga`, `cover_film`) VALUES
('albedo', 'Violet Evergarden', 1, 45000, 'https://image.tmdb.org/t/p/original/g7BpD4B5jN4D0AAuI5v0hdfaZIN.jpg'),
('keqing', 'Doraemon', 4, 180000, 'https://th.bing.com/th/id/R.0e9990f0ac297c119a4e7ecf150b208f?rik=bJgYAGnH3hTqsA&riu=http%3a%2f%2fmarcusgohmarcusgoh.com%2fwp%2fwp-content%2fuploads%2f2017%2f05%2fDoraemon-Poster.jpg&ehk=LHLztiLnaK35o8Aj5CHF5Fql%2fkDjAEXSj5Ez%2fYdu%2fNM%3d&risl=&pid=ImgRaw&r=0\"'),
('keqing', 'Mencuri Raden Saleh', 2, 90000, 'https://i.pinimg.com/originals/0e/9c/aa/0e9caa14ea7a6e538423c72bd1b6d46f.jpg'),
('angga', 'Spirited Away', 8, 360000, 'https://m.media-amazon.com/images/M/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg'),
('albedo', 'Mencuri Raden Saleh', 4, 180000, 'https://i.pinimg.com/originals/0e/9c/aa/0e9caa14ea7a6e538423c72bd1b6d46f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` varchar(20) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `genre_film` varchar(20) NOT NULL,
  `durasi_film` varchar(10) NOT NULL,
  `rating_film` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `genre_film`, `durasi_film`, `rating_film`) VALUES
('f001', 'The Shawshank Redemption', 'Drama', '2:22:00', 'R'),
('f002', 'The Godfather', 'Drama', '2:55:00', 'R'),
('f003', 'The Dark Knight', 'Action', '2:32:00', 'PG-13');

-- --------------------------------------------------------

--
-- Table structure for table `jadwaltayang`
--

CREATE TABLE `jadwaltayang` (
  `id_jadwalTayang` varchar(20) NOT NULL,
  `id_film` varchar(100) NOT NULL,
  `id_bioskop` varchar(100) NOT NULL,
  `waktu_tayang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwaltayang`
--

INSERT INTO `jadwaltayang` (`id_jadwalTayang`, `id_film`, `id_bioskop`, `waktu_tayang`) VALUES
('jt001', 'f001', 'b001', '16:00:00'),
('jt002', 'f002', 'b001', '14:00:00'),
('jt003', 'f003', 'b001', '09:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_film`
-- (See below for the actual view)
--
CREATE TABLE `list_film` (
`judul_film` varchar(50)
,`nama_bioskop` varchar(100)
,`waktu_tayang` time
);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_tiket` varchar(20) NOT NULL,
  `tanggal_pesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_tiket`, `tanggal_pesanan`) VALUES
('p001', 'u001', 't001', '2023-06-08'),
('p002', 'u001', 't002', '2023-06-07'),
('p003', 'u003', 't003', '2023-06-02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pesanan_tiket`
-- (See below for the actual view)
--
CREATE TABLE `pesanan_tiket` (
`nama_user` varchar(100)
,`judul_film` varchar(50)
,`nama_bioskop` varchar(100)
,`tanggal_pesanan` date
);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` varchar(20) NOT NULL,
  `id_jadwalTayang` varchar(20) NOT NULL,
  `jumlah_kursi` int(2) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_jadwalTayang`, `jumlah_kursi`, `harga`) VALUES
('t001', 'jt002', 2, 45000),
('t002', 'jt003', 1, 45000),
('t003', 'jt002', 3, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `no_telp` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `no_telp`) VALUES
('u001', 'jack', 'jackswamper@email.com', 627812332121),
('u002', 'keqing', 'keqing@email.user', 6281898987877),
('u003', 'jimmy', 'jimmyl@email.user', 6287800006767);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`) VALUES
(1, 'keqing', 'keqing@mail.user', 62875410732),
(2, 'albedo', 'albedo@mail.user', 62547328192),
(3, 'angga', 'angga@mail.user', 62875410732);

-- --------------------------------------------------------

--
-- Structure for view `list_film`
--
DROP TABLE IF EXISTS `list_film`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_film`  AS SELECT `film`.`judul_film` AS `judul_film`, `nama_bioskop` AS `nama_bioskop`, `jadwaltayang`.`waktu_tayang` AS `waktu_tayang` FROM ((`film` join `jadwaltayang` on(`jadwaltayang`.`id_film` = `film`.`id_film`)) join `bioskop` on(`id_bioskop` = `jadwaltayang`.`id_bioskop`))  ;

-- --------------------------------------------------------

--
-- Structure for view `pesanan_tiket`
--
DROP TABLE IF EXISTS `pesanan_tiket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pesanan_tiket`  AS SELECT `user`.`nama_user` AS `nama_user`, `film`.`judul_film` AS `judul_film`, `nama_bioskop` AS `nama_bioskop`, `pesanan`.`tanggal_pesanan` AS `tanggal_pesanan` FROM (((((`pesanan` join `user` on(`pesanan`.`id_user` = `user`.`id_user`)) join `tiket` on(`pesanan`.`id_tiket` = `tiket`.`id_tiket`)) join `jadwaltayang` on(`tiket`.`id_jadwalTayang` = `jadwaltayang`.`id_jadwalTayang`)) join `film` on(`jadwaltayang`.`id_film` = `film`.`id_film`)) join `bioskop` on(`id_bioskop` = `jadwaltayang`.`id_bioskop`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bioskop`
--
ALTER TABLE `bioskop`
  ADD PRIMARY KEY (`id_bioskop`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  ADD PRIMARY KEY (`id_jadwalTayang`),
  ADD KEY `id_film_fk` (`id_film`),
  ADD KEY `id_bioskop_fk` (`id_bioskop`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user_fk` (`id_user`),
  ADD KEY `id_tiket_fk` (`id_tiket`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_jadwalTayang_fk` (`id_jadwalTayang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwaltayang`
--
ALTER TABLE `jadwaltayang`
  ADD CONSTRAINT `id_bioskop_fk` FOREIGN KEY (`id_bioskop`) REFERENCES `bioskop` (`id_bioskop`),
  ADD CONSTRAINT `id_film_fk` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `id_tiket_fk` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`),
  ADD CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `id_jadwalTayang_fk` FOREIGN KEY (`id_jadwalTayang`) REFERENCES `jadwaltayang` (`id_jadwalTayang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
