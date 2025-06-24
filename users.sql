-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2025 at 05:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crc_otimar_sas`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `numero_doc` varchar(30) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `genre`, `tipo_documento`, `numero_doc`, `nacionalidad`, `celular`, `email`, `fecha_nacimiento`, `usuario`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Eric Joan Perea Rodriguez', 'M', 'CC', '1111111111', 'Polombiano', '55555555', 'lol@test.com', '2000-10-20', 'eperearo', '$2y$10$/txHDXsBBPQlgiRjSnaBo.PJxxWkkYKT0iyz0xgQNVjBD73twQ9iG', '2025-06-19 20:33:02', '2025-06-24 02:38:21'),
(2, 'Crisli Castro', 'F', 'CC', '12312111', 'Colo', '3152621132', 'prueba@test.com', '2004-06-16', 'yoongi8', '$2y$10$2mgAxgzgE/I52YiBaWY2Zur3FQYkO1sEdbGUnwDn.1TOUZ.B4t1fu', '2025-06-19 21:16:21', '2025-06-24 02:40:58'),
(3, 'Evelyn Rodriguez', 'F', 'CC', '31231231', 'Colombiano', '131231231', 'test@12311.com', '1111-12-12', 'mechis', '$2y$10$.CrYwgZGXnw9GzAAPcemZ.BWlW1zuSzuG6UMqLybvlevn2yR8D8ym', '2025-06-20 01:18:32', '2025-06-24 02:15:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
