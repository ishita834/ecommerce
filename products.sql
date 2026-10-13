-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2026 at 06:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category_id`, `stock`, `created_at`) VALUES
(1, 'Classic T-Shirt', 'Premium cotton casual T-shirt.', 599.00, 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab', 1, 100, '2026-10-13 04:15:42'),
(2, 'Running Sneakers', 'Comfortable sneakers for everyday use.', 1999.00, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff', 2, 100, '2026-10-13 04:15:42'),
(3, 'Classic Watch', 'Elegant watch for everyday wear.', 1499.00, 'https://images.unsplash.com/photo-1523275335684-37898b6baf30', 4, 100, '2026-10-13 04:15:42'),
(4, 'Travel Backpack', 'Stylish and spacious travel backpack.', 999.00, 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62', 4, 100, '2026-10-13 04:15:42'),
(5, 'Wireless Headphones', 'High-quality wireless headphones.', 2499.00, 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e', 3, 100, '2026-10-13 04:15:42'),
(6, 'Premium Sunglasses', 'Stylish sunglasses with premium design.', 799.00, 'https://images.unsplash.com/photo-1511499767150-a48a237f0083', 4, 100, '2026-10-13 04:15:42'),
(7, 'Leather Handbag', 'Elegant handbag for everyday use.', 1799.00, 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa', 4, 100, '2026-10-13 04:15:42'),
(8, 'Smartphone', 'Modern smartphone with premium features.', 14999.00, 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9', 3, 100, '2026-10-13 04:15:42'),
(9, 'Classic T-Shirt', 'Premium cotton casual T-shirt.', 599.00, 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab', 1, 100, '2026-10-13 04:26:45'),
(10, 'Running Sneakers', 'Comfortable sneakers for everyday use.', 1999.00, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff', 2, 100, '2026-10-13 04:26:45'),
(11, 'Classic Watch', 'Elegant watch for everyday wear.', 1499.00, 'https://images.unsplash.com/photo-1523275335684-37898b6baf30', 4, 100, '2026-10-13 04:26:45'),
(12, 'Travel Backpack', 'Stylish and spacious travel backpack.', 999.00, 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62', 4, 100, '2026-10-13 04:26:45'),
(13, 'Wireless Headphones', 'High-quality wireless headphones.', 2499.00, 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e', 3, 100, '2026-10-13 04:26:45'),
(14, 'Premium Sunglasses', 'Stylish sunglasses with premium design.', 799.00, 'https://images.unsplash.com/photo-1511499767150-a48a237f0083', 4, 100, '2026-10-13 04:26:45'),
(15, 'Leather Handbag', 'Elegant handbag for everyday use.', 1799.00, 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa', 4, 100, '2026-10-13 04:26:45'),
(16, 'Smartphone', 'Modern smartphone with premium features.', 14999.00, 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9', 3, 100, '2026-10-13 04:26:45'),
(17, 'Classic T-Shirt', 'Premium cotton casual T-shirt.', 599.00, 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab', 1, 100, '2026-10-13 04:34:03'),
(18, 'Running Sneakers', 'Comfortable sneakers for everyday use.', 1999.00, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff', 2, 100, '2026-10-13 04:34:03'),
(19, 'Classic Watch', 'Elegant watch for everyday wear.', 1499.00, 'https://images.unsplash.com/photo-1523275335684-37898b6baf30', 4, 100, '2026-10-13 04:34:03'),
(20, 'Travel Backpack', 'Stylish and spacious travel backpack.', 999.00, 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62', 4, 100, '2026-10-13 04:34:03'),
(21, 'Wireless Headphones', 'High-quality wireless headphones.', 2499.00, 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e', 3, 100, '2026-10-13 04:34:03'),
(22, 'Premium Sunglasses', 'Stylish sunglasses with premium design.', 799.00, 'https://images.unsplash.com/photo-1511499767150-a48a237f0083', 4, 100, '2026-10-13 04:34:03'),
(23, 'Leather Handbag', 'Elegant handbag for everyday use.', 1799.00, 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa', 4, 100, '2026-10-13 04:34:03'),
(24, 'Smartphone', 'Modern smartphone with premium features.', 14999.00, 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9', 3, 100, '2026-10-13 04:34:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
