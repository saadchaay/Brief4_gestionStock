-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 11:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
(1, 'saad__', 'chaay00123'),
(2, 'fatimaZahra', 'password001');

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
(2, 'CHICKEN BURGww', 'Lorem ipsum dolor .', 'veggies.jpg'),
(5, 'PLAT PIZZA', 'sit amet consectetur adipisicing elit. Placeat nesciunt ab, quisquam vero neque quia voluptate quae alias, provident, nihil consequuntur expedita velit sequi debitis. Ad corporis quidem corrupti vel.', 'veggies.jpg'),
(6, 'PLAT PIZZA 2', 'lorem lorem lorem lorem lorem lorem lorem lorem .', 'veggies.jpg'),
(7, 'burger 2', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem ', 'veggies 2.png'),
(9, 'burger', 'fsdzcfs', 'Burger.jpg'),
(10, 'burger', 'jhjkl', 'menu2.jpg');

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
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `SKU_identity`, `image`, `_name`, `_description`, `_status`, `_quantity`, `_price`, `ID_category`) VALUES
(20, 589, 'banner2.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 23, 49, 10),
(22, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(23, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(25, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(26, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(27, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(28, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(29, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(30, 78900, 'Burger.jpg', 'product_name', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem iste vel esse, beatae aut quia eos ratione ipsum eligendi. Perferendis iste vel est, culpa ad quo ullam eveniet eaque.', 1, 678, 49, 2),
(31, 24211, 'bg-index.png', 'burger', 'lorem', 1, 32, 46, 10),
(32, 4567, 'banner2.jpg', 'products111', 'loreeeeeeeeeeeem', 1, 22, 244, 10);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_category`) REFERENCES `category` (`id_category`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
