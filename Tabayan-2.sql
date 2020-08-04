-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2020 at 09:25 AM
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
-- Database: `Tabayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `#dataCheckTemporarily`
--

CREATE TABLE `#dataCheckTemporarily` (
  `user_email` varchar(45) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `data_ID` int(10) NOT NULL,
  `data_kind` varchar(45) NOT NULL,
  `data_date` date DEFAULT NULL,
  `data_subject` varchar(45) NOT NULL,
  `Data` text NOT NULL,
  `rumorCount` int(11) NOT NULL DEFAULT 0,
  `nonrumorCount` int(11) NOT NULL DEFAULT 0,
  `user_email` varchar(45) NOT NULL,
  `data_timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`data_ID`, `data_kind`, `data_date`, `data_subject`, `Data`, `rumorCount`, `nonrumorCount`, `user_email`, `data_timeStamp`) VALUES
(1, 'اشاعة', '2020-07-14', 'رياضة', 'اعتراض صاروخ بالستي فوق\r\nجامعة #جازان بثلاثةصواريخ مضادة\r\nمن ارض الحدث انفجارهائل بالسماء\r\n', 16, 6, 'FOUZ4@GMAIL.COM', '2020-08-03 22:25:29'),
(2, 'حقيقة', '2020-07-31', 'صحة', 'من بعد ماطلعت لناهيئة الترفيه ومراقصها وحنامن مصيبة لمصيبة غلاءفي الأسعار ونقص في \r\nالرواتب ثم هزة أرضية ثم صواريخ ثم الآن \r\n', 8, 5, 'FOUZ4@GMAIL.COM', '2020-08-03 22:25:44'),
(3, 'اشاعة', '2020-07-01', 'سياسه', 'ما يتداول عن غرامة 3000 ريال والسجن 6 أسابيع عقوبة عدم حمل الهوية الوطنية غير صحيح, والخبر الحقيقي يخص فقط عدم حمل هوية مقيم', 4, 1, 'FOUZ4@GMAIL.COM', '2020-08-03 22:26:18'),
(4, 'حقيقة', '2020-07-07', 'صحة', 'محكمة مانهاتن في #نيويورك \r\nتعلن رسمياً وبشكل قاطع ونهائي :\r\n\r\n لا مسؤولية للحكومة السعودية على هج', 2, 4, 'FOUZ4@GMAIL.COM', '2020-08-03 22:26:32'),
(5, 'حقيقة', '2020-07-02', 'صحة', 'RT @coluche_ar: نريد جواب ملالي الوهابية عن حكم التحاكم إلى غير شرع الله والرضى به والتفاخر بنتائجه وما آل إليه الحكم؟\r\n\r\n#محكمه_مانهاتن_براء', 5, 2, 'FOUZ4@GMAIL.COM', '2020-08-03 22:32:20'),
(6, 'حقيقة', '2020-07-15', 'سياسه', 'RT @moo_tsh: #محكمه_مانهاتن_براءه_السعوديه\r\nتذكروا تلك الأصوات من #ايران\r\nوالاصوات #الليبراليه العربية\r\nحين كانت تدين #السعودية بهجمات٩/١١\r\nوتض', 4, 1, 'FOUZ4@GMAIL.COM', '2020-08-03 22:33:06'),
(7, 'حقيقة', '2020-07-09', 'صحة', '#محكمه_مانهاتن_براءه_السعوديه\r\n\r\nامل يمني يشتغل ٤٠ سنه في مستشفي سليمان فقيه واليوم يوم تقاعده', 3, 1, 'FOUZ4@GMAIL.COM', '2020-08-03 22:42:05'),
(8, 'حقيقة', '2020-07-07', 'اقتصاد', '#محكمه_مانهاتن_براءه_السعوديه\r\n\r\nشي طبيعي ولاغبار عليه بلادي قبلة المسلمين ?\r\n\r\nاذا من المجرم الحقيقي !!!!! اكيد عرفتووه?', 2, 1, 'FOUZ4@GMAIL.COM', '2020-08-03 22:42:27'),
(9, 'اشاعة', '2020-07-01', 'سياسه', 'RT @Kamal6420: #حزب_الله_يستهدف_البحرين\r\nايران تجعل من الدين اداه لصنع الخلايا في دولنا الخليجيه والعربيه \r\nلابد من مراقبة من يذهب للدراسه في', 1, 0, 'FOUZ4@GMAIL.COM', '2020-08-03 22:42:53'),
(10, 'اشاعة', '2020-07-03', 'رياضة', 'RT @Zeyad7121: #حزب_الله_يستهدف_البحرين\r\nتوعد وزير الداخلية البحريني المنتمين إلى الخلايا الإرهابية قائلا:\r\nلن نتركهم يعملوا بدون حساب\r\nوختم ب', 2, 1, 'FOUZ4@GMAIL.COM', '2020-08-03 22:54:40'),
(11, 'اشاعة', '2020-07-04', 'اقتصاد', '\r\n\r\nباحدث اجهزه الكترونيه بدون تكسير\r\n\r\nعازل_اسطح_و_خزانات_بالضمان\r\n\r\nفحص_و_معالجه_ارتفاع_فاتوره_المياه', 1, 2, 'FOUZ4@GMAIL.COM', '2020-08-03 22:55:12'),
(12, 'حقيقة', '2020-07-27', 'صحة', '\r\n يفعلون بالعالم كيفما  يشاؤون ؟؟\r\nويفعل لها العالم مايشاؤون  ', 1, 0, 'FOUZ4@GMAIL.COM', '2020-07-29 06:36:17'),
(13, 'حقيقة', '2020-07-30', 'غير ذلك', 'test', 1, 0, 'FOUZ4@GMAIL.COM', '2020-07-29 06:42:31'),
(14, 'حقيقة', '2020-08-01', 'غير ذلك', 'test2', 1, 0, 'TEST2@GMAIL.COM', '2020-07-29 06:43:11'),
(15, 'حقيقة', NULL, 'غير ذلك', 'Test date ', 0, 0, 'fouzalrabaye@gmail.com', '2020-08-04 02:31:45'),
(16, 'لا اعلم', NULL, 'غير ذلك', 'test no ', 0, 0, 'fouzalrabaye@gmail.com', '2020-08-04 03:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `data_checked`
--

CREATE TABLE `data_checked` (
  `user_email` varchar(25) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_checked`
--

INSERT INTO `data_checked` (`user_email`, `data_id`) VALUES
('FOUZ3@GMAIL.COM', 1),
('FOUZ3@GMAIL.COM', 2),
('FOUZ3@GMAIL.COM', 3),
('FOUZ3@GMAIL.COM', 4),
('FOUZ3@GMAIL.COM', 5),
('Fouz@gmail.com', 1),
('Fouz@gmail.com', 2),
('Fouz@gmail.com', 3),
('Fouz@gmail.com', 4),
('TEST1@GMAIL.COM', 13),
('TEST1@GMAIL.COM', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_email` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_dataCount` int(11) NOT NULL DEFAULT 0,
  `user_type` varchar(45) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_status` varchar(45) NOT NULL DEFAULT 'pending',
  `token` varchar(45) DEFAULT NULL,
  `tokenExpire` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_email`, `user_password`, `user_dataCount`, `user_type`, `user_name`, `user_status`, `token`, `tokenExpire`) VALUES
('admain@gmail.com', '1234', 0, 'Admin', 'Admin', 'active', '', '0000-00-00 00:00:00'),
('fooooz399@gmail.com', '1234', 0, 'مدقق بيانات', 'Fouz', 'active', NULL, NULL),
('Fouz2@gmail.com', '1234', 0, 'مدقق بيانات', 'test', 'active', '', '0000-00-00 00:00:00'),
('FOUZ3@GMAIL.COM', '1234', 5, 'مدقق بيانات', 'shada', 'active', '', '0000-00-00 00:00:00'),
('FOUZ4@GMAIL.COM', '1234', 0, 'مدخل بيانات', 'فوز ', 'active', '', '0000-00-00 00:00:00'),
('Fouz@gmail.com', '1234', 0, 'DataChecker', '', 'pending', '', '0000-00-00 00:00:00'),
('fouzalrabaye@gmail.com', '1234', 0, 'مدخل بيانات', 'Fouz', 'active', '', '0000-00-00 00:00:00'),
('rawan864md@gmail.com', '1234', 0, 'مدخل بيانات', 'روان', 'active', '', '0000-00-00 00:00:00'),
('TEST1@GMAIL.COM', '1234', 2, 'مدقق بيانات', 'test1', 'active', '', '0000-00-00 00:00:00'),
('TEST2@GMAIL.COM', '1234', 0, 'مدخل بيانات', 'test2', 'active', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_ID`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `data_checked`
--
ALTER TABLE `data_checked`
  ADD PRIMARY KEY (`user_email`,`data_id`),
  ADD KEY `data_id` (`data_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user` (`user_email`);

--
-- Constraints for table `data_checked`
--
ALTER TABLE `data_checked`
  ADD CONSTRAINT `data_checked_ibfk_2` FOREIGN KEY (`user_email`) REFERENCES `user` (`user_email`),
  ADD CONSTRAINT `data_checked_ibfk_3` FOREIGN KEY (`data_id`) REFERENCES `data` (`data_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
