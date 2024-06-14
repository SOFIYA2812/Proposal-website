-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2024 at 01:42 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aessob`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `unique_id` int NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `pin_no` varchar(255) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `privateword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`unique_id`, `card_no`, `acc_no`, `pin_no`, `first_name`, `last_name`, `username`, `password`, `privateword`) VALUES
(22, '4403111982374589', '04012345678901', '345673', 'Nazifah', 'Marzuki', 'Efa', '010093', 'Pretty'),
(23, '4404112348543946', '04123456789012', '345234', 'Amalina', 'Ramli', 'Malina', '456789', 'What'),
(25, '4403123983478456', '04234567890123', '948734', 'Melna', 'Fame', 'MelNa39', '922331', 'Bee'),
(26, '4401234567890123', '04345678901234', '812345', 'Liam', 'Smith', 'liamsmith23', 'liams23', 'Bluebird'),
(27, '4422567890123456', '04456789012345', '623456', 'Emily', 'Davis', 'emilydavis_89', 'emilydavis89', 'Sunflower'),
(28, '4433987654321098', '04567890123456', '934567', 'Jacob', 'Martinez', ' jacob.martinez', 'jm@00', 'Thunder'),
(29, '4455321098765432', '04678901234567', '945678', 'Olivia', 'Brown', 'oliviabrown78', 'OliveB78', 'Moonlight'),
(30, '4466876543210987', '04789012345678', '256789', 'Ethan', 'Garcia', 'ethangarcia02', 'ethan2002', 'Stardust'),
(31, '4477543210987654', '04890123456789', '767890', 'Sophia', 'Rodriguez', 'sophiarodriguez_77', 'sophia77', 'Firefly'),
(32, '4488210987654321', '04901234567890', '998901', 'Noah', 'Wilson', 'noah.wilson', 'noah00', 'Ocean'),
(33, '4499654321098765', '04012345678901', '989012', 'Ava', 'Taylor', 'ava.taylor_45', 'taylorava45', 'Mountain'),
(34, '4410987654321098', '04123456789012', '990123', 'Michael', 'Anderson', 'michael_anderson', 'michael34', 'Whisper'),
(35, '4411432109876543', '04234567890123', '391234', 'Isabella', 'Thomas', 'isabella_thomas99', 'bella99', 'Aurora'),
(36, '4412109876543210', '04345678901234', '992345', 'Maya', 'Johnson', 'mayajohnson84', 'mayaJ84', 'Starlight'),
(37, '4413876543210987', '04456789012345', '993456', 'Benjamin', 'Lee', 'benjamin_lee87', 'benjamin87', 'Starshine'),
(38, '4409872154783294', '04567890123456', '784532', 'Rina', 'Omar', 'rinaomar22', 'Rina@22', 'Star'),
(39, '4409872150932294', '04561290323456', '873209', 'Rose', 'Dawson', 'rosedawson97', 'roseD@97', 'Titanic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
