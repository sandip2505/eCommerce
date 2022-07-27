-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 04:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`, `role`, `status`) VALUES
(94, 'aman', 'rohan', 'ahire', 'rohan415@gmail.com', '$2y$10$X.J8bHeLPTaN9XI5O9P9ouHi4dL.sMhejGwSo746m1wX.y2qDEycy', 'MALE', 0, 0),
(95, 'amanq', 'amanq', 'shahq', 'amanqq@gmail.com', '$2y$10$dxIc.Gvs147ux.eKvKSjnOJOHn3bZh1zzfiAdpA5E1GYwQ4YuWYPe', 'FEMALE', 0, 0),
(96, 'sandip_1', 'sandip ganava', 'ganava', 'sandip18@gmail.com', '$2y$10$woGpcdtioZyrdkFI2ci67OKURh6eqnvMYdz5VAEojUev/OMAsIUQ6', 'MALE', 1, 1),
(97, 'moni_p', 'moni', 'ganava', 'moni@gmail.com', '$2y$10$UZT.wpBIS2JP5yfHk2BlZe5w2JRVdDJBb2r8VOMYZ7nsjpfnpd9y.', 'MALE', 0, 0),
(98, 'aman', 'aman', 'shah', 'aman123@gmail.com', '$2y$10$O633GC3dq7EDB.eFwBbODOmXxRVWvG.aM4/sRdy0pv6jTDi0DtktG', 'MALE', 0, 0),
(99, 'chandu_02', 'chandu', 'ganava', 'chandu@gmail.com', '$2y$10$KctXXxX91LkJezCLGhs7NOkg7lx95XSz7PjBAl2jkmPEWXyL6FDWu', 'MALE', 0, 0),
(100, 'sandip', 'sasas', 'ahire', 'rohan45@gmail.com', '$2y$10$/Mjm./yvhQ/LFoJ6CrNMbeWeeY7Ui6aoLDrYq9HyfkUi/3lwxDEu6', 'MALE', 0, 0),
(101, 'manoj', 'rajkumar', 'ganava', 'manoj@gmail.com', '$2y$10$LUZgRxrPOIl7CpAPgUqDlOZRXRsJS3aRBaVfmEaa7xoJ9OFiX9MC.', '', 0, 0),
(102, 'user_1', 'user_1', 'pro_user', 'user@gmail.com', '$2y$10$1qniOdph7ZuyBBkITrfQoeWD2ZvERP4gMwrpGE1nBuYBWdTbckxNS', '', 0, 0),
(103, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$10$tOd9JfY1op70s6xAF91fcehBySHo4mivjlIBjIv4F/pVg0kEYMNEO', '', 1, 0),
(104, 'rocky', 'rocky', 'patel', 'rocky@gmail.com', '$2y$10$2UnbMHDCOGnR0KJy0yM3BOtUKFyaJ2LV1qcJv2YjJk5BKID8ZKGia', '', 0, 0),
(105, 'mahesh', 'mahesh', 'ganava', 'mahesh@gmail.com', '$2y$10$30TlU./MQZl5yXyw4KfEv.iVpEilK0vs5OGu3GicmzQN3xi2Xr4Se', '', 0, 0),
(106, 'johar', 'johar', 'ganava', 'johar@gmail.com', '$2y$10$1r23zRuklwXg8YMDOJGt6e97xmlhAErvltaInL3RIC/4AcFQ.0OoS', '', 0, 0);

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
