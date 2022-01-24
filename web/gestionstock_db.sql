-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 11:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE database gestionstock_db ;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionstock_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'saad__', 'chaay00123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `_name` varchar(50) NOT NULL,
  `_description` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `_name`, `_description`, `image`) VALUES
(2, 'CHICKEN BURGGER', 'Lorem ipsum dolor .', 'burger.png'),
(4, 'burger', 'sit amet consectetur adipisicing elit. Placeat nesciunt ab, quisquam vero neque quia voluptate quae alias, provident, nihil consequuntur expedita velit sequi debitis. Ad corporis quidem corrupti vel.', 'veggies.jpg'),
(5, 'PLAT PIZZA', 'sit amet consectetur adipisicing elit. Placeat nesciunt ab, quisquam vero neque quia voluptate quae alias, provident, nihil consequuntur expedita velit sequi debitis. Ad corporis quidem corrupti vel.', 'veggies.jpg'),
(6, 'PLAT PIZZA 2', 'lorem lorem lorem lorem lorem lorem lorem lorem .', 'veggies.jpg'),
(7, 'burger 2', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem ', 'veggies 2.png');

--
-- Triggers `category`
--
DELIMITER $$
CREATE TRIGGER `before_delete_catg` BEFORE DELETE ON `category` FOR EACH ROW BEGIN
    DELETE FROM product WHERE `ID_category` = OLD.id_category;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `SKU_identity` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `_name` varchar(20) NOT NULL,
  `_description` text NOT NULL,
  `_status` tinyint(1) NOT NULL,
  `_quantity` int(11) NOT NULL,
  `_price` double NOT NULL,
  `ID_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `ID_category` (`ID_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
