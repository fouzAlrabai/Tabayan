-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2020 at 11:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `check_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`check_id`, `user_name`, `data_id`) VALUES
(17, 'ROLA@GMAIL.COM', 1),
(18, 'ROLA@GMAIL.COM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `data_ID` int(10) UNSIGNED NOT NULL,
  `data_kind` varchar(45) NOT NULL,
  `data_date` datetime DEFAULT NULL,
  `data_subject` varchar(45) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `Data` text NOT NULL,
  `rumorCount` int(11) NOT NULL DEFAULT 0,
  `nonrumorCount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`data_ID`, `data_kind`, `data_date`, `data_subject`, `user_email`, `Data`, `rumorCount`, `nonrumorCount`) VALUES
(1, 'حقيقة', '2020-07-01 09:22:31', 'اقتصاد', 'Fouz@gmail.com', 'ارتفاع اسعار البنزين ', 24, 24),
(2, 'اشاعة', '2020-07-01 09:22:31', 'صحة', 'Fouz@gmail.com', 'فايروس كورونا مفتعل وليس بالصدفة', 25, 11),
(3, 'حقيقة', '2020-07-02 04:06:27', 'رياضة', 'Rola@gmail.com', 'اعتزال ياسر القحطاني ', 3, 15),
(4, 'حقيقة', '2020-07-02 04:06:27', 'رياضة', 'Rola@gmail.com', 'اعتزال محمد عبده ', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dataCheckTemporarily`
--

CREATE TABLE `dataCheckTemporarily` (
  `user_email` varchar(45) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_checked`
--

CREATE TABLE `data_checked` (
  `user_email` varchar(45) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_checked`
--

INSERT INTO `data_checked` (`user_email`, `data_id`) VALUES
('FOUZ3@GMAIL.COM', 1),
('FOUZ3@GMAIL.COM', 3),
('TAHANI@GMAIL.COM', 4),
('TAHANI@GMAIL.COM', 3),
('TAHANI@GMAIL.COM', 1),
('ROLA@GMAIL.COM', 1),
('ROLA@GMAIL.COM', 3),
('ROLA@GMAIL.COM', 4),
('FOUZ3@GMAIL.COM', 4),
('FOUZ3@GMAIL.COM', 2),
('FOUZ@GMAIL.COM', 1),
('FOUZ@GMAIL.COM', 2),
('FOUZ@GMAIL.COM', 3),
('FOUZ@GMAIL.COM', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_has_check`
--

CREATE TABLE `data_has_check` (
  `data_has_check_col` int(11) NOT NULL,
  `data_data_ID` int(10) UNSIGNED NOT NULL,
  `data_user_user_name` varchar(45) NOT NULL,
  `check_user_user_name` varchar(45) NOT NULL,
  `check_check_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_email` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_timeStamp` datetime DEFAULT NULL,
  `user_dataCount` int(11) NOT NULL DEFAULT 0,
  `user_type` varchar(45) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_status` varchar(45) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_email`, `user_password`, `user_timeStamp`, `user_dataCount`, `user_type`, `user_name`, `user_status`) VALUES
('ADMAIN@GMAIL.COM', '1234', NULL, 0, 'Admin', 'admin', 'active'),
('FOUZ2@GMAIL.COM', '1234', NULL, 0, 'مدقق بيانات', 'Fouz', 'active'),
('FOUZ3@GMAIL.COM', '1234', NULL, 7, 'مدقق بيانات', 'فوز٣', 'active'),
('FOUZ@GMAIL.COM', '1234', NULL, 38, 'مدقق بيانات', 'فوز ', 'active'),
('MALAK@GMAIL.COM', '1234', NULL, 0, 'مدقق بيانات', 'ملاك الربعي ', 'active'),
('REEMA@GMAIL.COM', '1234', NULL, 0, 'مدخل بيانات', 'ريما', 'active'),
('ROLA@GMAIL.COM', '1234', NULL, 43, 'مدقق بيانات', 'رولا', 'active'),
('SALWA@GMAIL.COM', '1234', NULL, 0, 'مدخل بيانات', 'سلوى', 'active'),
('SHADA@GMAIL.COM', '1234', NULL, 0, 'مدخل بيانات', 'shada', 'active'),
('SHAHAD@GMAIL.COM', '1234', NULL, 0, 'مدقق بيانات', 'شهد', 'active'),
('TAHANI@GMAIL.COM', '1234', NULL, 8, 'مدقق بيانات', 'تهاني', 'active'),
('TAMIM@GMAIL.COM', '1234', NULL, 0, 'مدخل بيانات', 'تميم', 'active'),
('TEST@GMAIL.COM', '1234', NULL, 0, 'مدخل بيانات', 'test', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_data`
--

CREATE TABLE `user_has_data` (
  `use_Data` int(11) NOT NULL COMMENT 'counter of how manny data has been entered by the user \n',
  `user_user_name` varchar(45) NOT NULL,
  `user_check_check_id` int(11) NOT NULL,
  `data_data_ID` int(10) UNSIGNED NOT NULL,
  `data_user_user_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check`
--
ALTER TABLE `check`
  ADD PRIMARY KEY (`check_id`,`user_name`,`data_id`) USING BTREE,
  ADD KEY `fk_check_user1_idx` (`user_name`,`data_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_ID`,`user_email`);

--
-- Indexes for table `data_has_check`
--
ALTER TABLE `data_has_check`
  ADD PRIMARY KEY (`data_has_check_col`,`data_data_ID`,`data_user_user_name`,`check_user_user_name`,`check_check_id`),
  ADD KEY `fk_data_has_check_data1_idx` (`data_data_ID`,`data_user_user_name`),
  ADD KEY `fk_data_has_check_check1_idx` (`check_check_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_name_UNIQUE` (`user_email`);

--
-- Indexes for table `user_has_data`
--
ALTER TABLE `user_has_data`
  ADD PRIMARY KEY (`use_Data`,`user_user_name`,`user_check_check_id`,`data_data_ID`,`data_user_user_name`),
  ADD KEY `fk_user_has_data_data1_idx` (`data_data_ID`,`data_user_user_name`),
  ADD KEY `fk_user_has_data_user1_idx` (`user_user_name`,`user_check_check_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check`
--
ALTER TABLE `check`
  MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_has_check`
--
ALTER TABLE `data_has_check`
  MODIFY `data_has_check_col` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_has_data`
--
ALTER TABLE `user_has_data`
  MODIFY `use_Data` int(11) NOT NULL AUTO_INCREMENT COMMENT 'counter of how manny data has been entered by the user \n';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check`
--
ALTER TABLE `check`
  ADD CONSTRAINT `fk_check_user1` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_has_check`
--
ALTER TABLE `data_has_check`
  ADD CONSTRAINT `fk_data_has_check_check1` FOREIGN KEY (`check_check_id`) REFERENCES `check` (`check_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_data_has_check_data1` FOREIGN KEY (`data_data_ID`,`data_user_user_name`) REFERENCES `data` (`data_ID`, `user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_has_data`
--
ALTER TABLE `user_has_data`
  ADD CONSTRAINT `fk_user_has_data_data1` FOREIGN KEY (`data_data_ID`,`data_user_user_name`) REFERENCES `data` (`data_ID`, `user_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_has_data_user1` FOREIGN KEY (`user_user_name`) REFERENCES `user` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
