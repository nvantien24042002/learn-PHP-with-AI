-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2026 at 05:14 AM
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
-- Database: `mini_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `created_at`) VALUES
(3, 'Number one', 250000.00, 'Nước ngọt number one', '2026-09-09 17:18:54'),
(4, 'Bò Húc', 150000.00, 'Nước tăng lực bò húc', '2026-09-09 18:51:11'),
(5, 'Bò Húc', 150000.00, 'Nước tăng lực bò húc', '2026-09-09 18:51:47'),
(7, 'Aquarius', 15000.00, 'Nước bù khoáng và điện giải giúp giải khát khi chơi thể thao.', '2026-09-12 07:55:47'),
(8, 'Monster Energy Ultra', 58997.00, 'Nước tăng lực Monster Energy Ultra là dòng sản phẩm nước tăng lực không đường', '2026-09-12 09:07:01'),
(9, 'Nước uống KIRIN ICE', 11999.00, 'Nước uống KIRIN ICE+ trái cây vị đào (490ml)', '2026-09-12 09:29:47'),
(10, 'Bia Hà Nội', 270000.00, 'Bia Hơi Hà Nội , nồng độ cồn nhẹ', '2026-09-19 08:27:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
