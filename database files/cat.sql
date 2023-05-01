-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 09:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `ques` varchar(255) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL,
  `op4` varchar(255) NOT NULL,
  `cr_op` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`ques`, `op1`, `op2`, `op3`, `op4`, `cr_op`) VALUES
('Cis Dichloroethane belongs to C₂v point group, where as trans Dichloroethane belongs to', 'C2n', 'Dnh', 'C3v', 'C2h', 4),
('List the symmetry elements for the bent molecule H2O?', 'The symmetry elements for H2O include a C2 rotation axis, two perpendicular mirror planes, and an identity element.', 'The symmetry elements for H2O include a C4 rotation axis, two horizontal mirror planes, and a center of inversion.', 'The symmetry elements for H2O include a C2 rotation axis, a vertical mirror plane, and a center of inversion.', 'The symmetry elements for H2O include a C3 rotation axis, three perpendicular mirror planes, and an identity element.', 1),
('The order of Th group is', '11', '10', '18', '24', 4),
('The point group symmetry of the BF₃ is', 'D3h', 'D3n', 'D4h', 'C3v', 1),
('What is a point group?', 'A group of symmetry operations that leave at least one point in space unchanged.', 'A group of symmetry operations that leave the orientation of a molecule unchanged.', 'A group of symmetry operations that leave the energy of a molecule unchanged.', 'A group of symmetry operations that leave the spin of a molecule unchanged.', 1),
('What is a symmetry operation?', 'An action that can be performed on a molecule or crystal to produce an identical arrangement.', 'process of reflecting an object over a plane of symmetry.', 'An operation that results in the same appearance or arrangement of a molecule or crystal.', 'A mathematical transformation that leaves the molecule or crystal unchanged in appearance.', 1),
('What is the Schoenflies symbol for center of symmetry?', 'Cn', 'Sn', 'I', 'Sigma', 3),
('Which compound contains Icosahedron as a point group?', 'Cl2', 'Benzene', 'Fullerene', 'water', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `code`, `status`) VALUES
('jinay', 'jinayshah@1', 'jinay1619@gmail.com', '0686c40631f15fd315bf6b721ef7ce7d', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ques`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
