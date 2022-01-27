-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 07:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alicyart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id`, `category_name`) VALUES
(1, 'Sosmed'),
(2, 'Branding'),
(3, 'Ilustration'),
(4, 'Printed Needs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_designer`
--

CREATE TABLE `tb_designer` (
  `id_designer` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_designer`
--

INSERT INTO `tb_designer` (`id_designer`, `user`, `keterangan`) VALUES
(1, 2, 'Availabe');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `o_deskripsi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `faktur` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `designer` int(11) DEFAULT NULL,
  `s_awal` varchar(255) NOT NULL,
  `s_akhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `p_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `category`, `product`, `judul`, `deskripsi`, `harga`, `p_product`) VALUES
(2, 1, 'ALA CARTE', 'Instagram Post 75K', '-', '75.000', 'product.png'),
(3, 1, 'ALA CARTE', 'Highlight Cover 50K', '-', '50.000', 'product.png'),
(4, 1, 'SWIPE CONTENT', 'Content 60K', '-', '60.000', 'product.png'),
(5, 1, 'ALA CARTE', 'Instagram Story 65K\r\n', '-', '65.000', 'product.png'),
(6, 1, 'SWIPE CONTENT', 'Cover 75K\r\n', '-', '75.000', 'product.png'),
(7, 1, 'VALUE SET', 'Social media design 650K', 'Include 9 instagram post and 2 times re-vision per post, Pssst content is prepared by client.', '650.000', 'product.png'),
(8, 1, 'FULL SET', 'Social media design + content 800K', 'No need to worry about anything, we got you all covered! All in including content and 9 instagram post design with 2 time re-vision per post!', '800.000', 'product.png'),
(9, 2, 'UMKM NEEDS', 'Logo Only 400K', 'We notice that this quarantine bring out lots of potential in everyone! Affordable logo design for UMKM is available!', '400.000', 'product.png'),
(10, 2, 'CORPORATE NEEDS', 'Logo + GSM 1000K', 'Start up is everywhere and for those who need any logo design with a complete Graphic Standard Manual, we\'re ready to help you!', '1.000.000', 'product.png'),
(11, 2, 'APPETIZER', 'Logo + Thank you card + 3 Instagram post 675K', '-', '675.000', 'product.png'),
(12, 2, 'MAIN COURSE', 'Logo + Thank you card + Sticker 6 Instagram post + 3 Instagram story 1.245K', '-', '1.245.000', 'product.png'),
(13, 3, 'SELF ILLUSTRATION', 'Custom self illustration  150K', 'The price is per person, Half body illustration with plain background.', '150.000', 'product.png'),
(14, 3, 'FOOD ILLUSTRATION', 'Food Illustration 110K', 'The price is per food/menu. There will be special package if you take more than 10!', '110.000', 'product.png'),
(15, 3, 'SMALL ICON (APPS)', 'Small Icon 150K', 'The price is per icon. There will be special package if you take more than 5!', '150.000', 'product.png'),
(16, 3, 'BIG ICON (APPS)', 'Big Icon/Vector 300K', 'The price is per icon. There will be special package if you take more than 5!', '300.000', 'product.png'),
(17, 4, 'DESIGN PACKAGING', 'Packaging Design Start From 150K', 'Discuss with us your dream packaging and we\'ll calculate the price for you!', '150.000', 'product.png'),
(18, 4, 'POSTER', 'Poster Design Start From 150K', 'Tell us your reference and we\'ll calculate the price for you', '150.000', 'product.png'),
(19, 4, 'STANDING BANNER', 'Standing Banner Design 250K', '-', '250.000', 'product.png'),
(20, 4, 'BROCHURE', 'Brochure Design Start From 300K', 'Tell us your reference and we\'ll calculate the price for you!', '300.000', 'product.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `name`) VALUES
(1, 'Upload bukti'),
(2, 'Menunggu Verifikasi'),
(3, 'Pengerjaan design'),
(4, 'Pesanan selesai'),
(5, 'Transfer Prove'),
(6, 'Pesan Dibatalkan'),
(7, 'faktur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `role` varchar(25) NOT NULL,
  `picture_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `name`, `email`, `password`, `no_tlp`, `role`, `picture_profile`) VALUES
(2, 'Jefri N.I', 'jefrini@gmail.com', '123', '6285890211707', 'designer', 'profile.png'),
(7, 'Jefri Nanda', 'jefri@gmail.com', '123456', '6285890211707', 'customer', 'profile.png'),
(11, 'ADMIN', 'admin@alicyart.com', '123', '6285890211707', 'owner', 'profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_designer`
--
ALTER TABLE `tb_designer`
  ADD PRIMARY KEY (`id_designer`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `user` (`user`,`product`),
  ADD KEY `product` (`product`),
  ADD KEY `status` (`status`),
  ADD KEY `designer` (`designer`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_designer`
--
ALTER TABLE `tb_designer`
  MODIFY `id_designer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_designer`
--
ALTER TABLE `tb_designer`
  ADD CONSTRAINT `tb_designer_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`user`) REFERENCES `tb_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_3` FOREIGN KEY (`status`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_4` FOREIGN KEY (`designer`) REFERENCES `tb_designer` (`id_designer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tb_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
