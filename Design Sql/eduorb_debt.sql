-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2017 at 08:19 AM
-- Server version: 5.5.58-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduorb_debt`
--

-- --------------------------------------------------------

--
-- Table structure for table `DEBT_SETTLEMENT`
--

CREATE TABLE `DEBT_SETTLEMENT` (
  `DEBT_SETTLEMENT_ID` int(11) NOT NULL,
  `SIGN_UP_ID` int(11) NOT NULL,
  `DEBT_SETTLEMENT_WITH` text,
  `DEBT_SETTLEMENT_AMOUNT` text,
  `DEBT_SETTLEMENT_TYPE` text,
  `DEBT_SETTLEMENT_DATE` date DEFAULT NULL,
  `DEBT_SETTLEMENT_STATUS` int(11) DEFAULT '1',
  `DEBT_SETTLEMENT_CONTACT` text NOT NULL,
  `DEBT_SETTLEMENT_CUZ` text NOT NULL,
  `DEBT_SETTLEMENT_PAYMENT_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DEBT_SETTLEMENT`
--

INSERT INTO `DEBT_SETTLEMENT` (`DEBT_SETTLEMENT_ID`, `SIGN_UP_ID`, `DEBT_SETTLEMENT_WITH`, `DEBT_SETTLEMENT_AMOUNT`, `DEBT_SETTLEMENT_TYPE`, `DEBT_SETTLEMENT_DATE`, `DEBT_SETTLEMENT_STATUS`, `DEBT_SETTLEMENT_CONTACT`, `DEBT_SETTLEMENT_CUZ`, `DEBT_SETTLEMENT_PAYMENT_DATE`) VALUES
(7, 5, 'Juwel  Telecom', '42', 'Creditor', '2017-12-27', 0, '017********', ' I had loaded 40 tk in sajata gp number.', '2017-12-27'),
(8, 5, 'Mukrimul Islam', '55000', 'Debtor', '2017-12-27', 1, '01709654697', '        The payment of Bdtexm development cost. ', '2018-03-01'),
(9, 5, 'Jhony', '10000', 'Creditor', '2017-12-27', 1, '01672330427', '    When i had to pay my due with Sakib then the amount was needed..', '2018-02-10'),
(10, 5, 'Srimon', '1500', 'Creditor', '2017-12-27', 1, '01781708888', '     Buy some  clothes from Srimon  shop', '2018-02-03'),
(11, 5, 'Pias Bashak', '1700', 'Creditor', '2017-12-27', 1, '01684545219', '    Buy table fan and IPS adapter from Pias electronic shop.', '2018-03-05'),
(12, 5, 'Ankin Rahman', '10', 'Debtor', '2017-12-27', 0, '01795571484', 'For nothing. Just ', '2017-12-27'),
(18, 7, 'PAHMCH', '282000', 'Creditor', '2017-12-27', 1, '', ' SESSION, SEAT RENT, TUITION FEE', '2018-05-05'),
(21, 10, 'Abdullah Al Maruf', '300', 'Creditor', '2017-12-28', 1, '01703868106', 'To give treat', '2018-02-21'),
(22, 10, 'Mobinul Bivan', '300', 'Creditor', '2017-12-28', 1, '01778061923', 'Privet reason', '2018-01-06'),
(23, 10, 'TAHMID Majumder', '300', 'Creditor', '2017-12-28', 1, '01785661898', 'Ticket reason', '2018-01-07'),
(24, 10, 'Alimur Rahman Ankin', '1000', 'Debtor', '2017-12-28', 1, '01795571484', 'train rent', '2018-02-02'),
(25, 5, 'Mukrimul Islam', '100000', 'Debtor', '2017-12-29', 1, '01709654697', '        Bdtexm.com second payment issue', '2018-01-05'),
(26, 11, 'Tofael Ahmed Rafi', '300', 'Debtor', '2017-12-30', 1, '01798710944', 'Owed for treat & fine of HSC test exam', '2018-02-21'),
(27, 8, 'saiful islam ( Al Modina Electronic )', '195000', 'Debtor', '2017-12-30', 1, '01916302603', 'à¦¦à§‹à¦–à¦¾à¦¨à§‡ à¦ªà§à¦œà¦¿ à¦¬à¦¾à¦¬à¦¦', '0000-00-00'),
(28, 10, 'Nazirul Islam Apu', '200', 'Creditor', '2017-12-31', 1, '01786 540858', 'To bye a gift for Munim bhai...', '2018-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `SIGN_UP`
--

CREATE TABLE `SIGN_UP` (
  `SIGN_UP_ID` int(11) NOT NULL,
  `SIGN_UP_NAME` text,
  `SIGN_UP_DATE` date DEFAULT NULL,
  `SIGN_UP_PHONE` text,
  `SIGN_UP_MAIL` varchar(256) DEFAULT NULL,
  `SIGN_UP_PASSWORD` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SIGN_UP`
--

INSERT INTO `SIGN_UP` (`SIGN_UP_ID`, `SIGN_UP_NAME`, `SIGN_UP_DATE`, `SIGN_UP_PHONE`, `SIGN_UP_MAIL`, `SIGN_UP_PASSWORD`) VALUES
(3, 'Alimur Rahman Ankin', '2017-12-26', '01795571484', 'ankinrahman4698@gmail.com', 'ankin123'),
(5, 'Azzizur Rahman Rakin ', '2017-12-27', '01795583423', 'arrakin1992@gmail.com', 'arr645261'),
(7, 'SAZZAD UR RAHMAN TURJA', '2017-12-27', '01733597796', 'srturja@gmail.com', 'd150207'),
(8, 'Mojibur Rahman', '2017-12-27', '01916098880', 'mojib1963@gmail.com', '88953431'),
(10, 'Tofael Ahmed Rafi', '2017-12-28', '01798710944', 'tofaelrafi7234@gmail.com', '/radirafi/'),
(11, 'Abdullah Al Maruf', '2017-12-29', '01703868106', 'aamaruf131@gmail.com', '13118216'),
(12, 'Abir Farajee', '2017-12-30', '01980709929', 'abir@gmail.com', '123123'),
(13, 'Monir Hossain', '2017-12-30', '01731820324', 'monirhossain66350@gmail.com', '66350375'),
(16, 'Shammi', '2017-12-30', '01878333282', 'mim.bhuiyan.167@gmail.com', 'oaaynee'),
(19, 'Shadakurrahman', '2017-12-30', '01915225904', 'shadakurrahman@hotmail.com ', 'bangladesh098'),
(21, 'Shihab Munna', '2017-12-30', '01626318831', 'shihabmunna47@gmail.com', '123456'),
(22, 'Mukrimul', '2017-12-31', '01919797998', 'mokremulislam@yahoo.com', '01725140303');

-- --------------------------------------------------------

--
-- Table structure for table `TO_DO_LIST`
--

CREATE TABLE `TO_DO_LIST` (
  `TO_DO_LIST_ID` int(11) NOT NULL,
  `SIGN_UP_ID` int(11) NOT NULL,
  `TO_DO_LIST_DETAIL` text,
  `TO_DO_LIST_DURATION` text,
  `TO_DO_LIST_DATE` date DEFAULT NULL,
  `TO_DO_LIST_STATUS` int(11) DEFAULT '1',
  `TO_DO_LIST_WHEN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TO_DO_LIST`
--

INSERT INTO `TO_DO_LIST` (`TO_DO_LIST_ID`, `SIGN_UP_ID`, `TO_DO_LIST_DETAIL`, `TO_DO_LIST_DURATION`, `TO_DO_LIST_DATE`, `TO_DO_LIST_STATUS`, `TO_DO_LIST_WHEN`) VALUES
(1, 3, 'nothing', '2017-12-03', '2017-12-27', 1, '0000-00-00'),
(2, 3, 'Go to Dhaka for EDUORB', '2 day', '2017-12-27', 1, '2017-12-29'),
(3, 5, '  I will have to go Dhaka for EduOrb Presentation.   ', '2 Day', '2017-12-27', 1, '2018-01-01'),
(5, 5, 'Attend in a party with turjo', '1 hour', '2017-12-27', 0, '2017-12-27'),
(6, 8, 'I will have to proper treatment for my body.', '1 day', '2017-12-27', 2, '2017-12-29'),
(7, 10, 'Admission test in BUFT for textile engineering.', '', '2017-12-28', 1, '2018-01-06'),
(8, 10, 'Form fill up for admission test in BUFT.', '', '2017-12-28', 1, '2017-12-31'),
(9, 11, ' Kibriya Uncle-s Marriage Day. ', '', '2017-12-30', 1, '2018-01-05'),
(10, 11, 'Write an write up on Shop Management after presentation.', '', '2017-12-31', 1, '2017-12-31'),
(11, 5, '  Make a simple party for the issue of Happy New Year 2018  ', '2 Hours', '2017-12-31', 1, '2017-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DEBT_SETTLEMENT`
--
ALTER TABLE `DEBT_SETTLEMENT`
  ADD PRIMARY KEY (`DEBT_SETTLEMENT_ID`,`SIGN_UP_ID`),
  ADD KEY `fk_DEBT_SETTLEMENT_SIGN_UP_idx` (`SIGN_UP_ID`);

--
-- Indexes for table `SIGN_UP`
--
ALTER TABLE `SIGN_UP`
  ADD PRIMARY KEY (`SIGN_UP_ID`),
  ADD UNIQUE KEY `SIGN_UP_MAIL` (`SIGN_UP_MAIL`);

--
-- Indexes for table `TO_DO_LIST`
--
ALTER TABLE `TO_DO_LIST`
  ADD PRIMARY KEY (`TO_DO_LIST_ID`,`SIGN_UP_ID`),
  ADD KEY `fk_TO_DO_LIST_SIGN_UP1_idx` (`SIGN_UP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DEBT_SETTLEMENT`
--
ALTER TABLE `DEBT_SETTLEMENT`
  MODIFY `DEBT_SETTLEMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `SIGN_UP`
--
ALTER TABLE `SIGN_UP`
  MODIFY `SIGN_UP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `TO_DO_LIST`
--
ALTER TABLE `TO_DO_LIST`
  MODIFY `TO_DO_LIST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `DEBT_SETTLEMENT`
--
ALTER TABLE `DEBT_SETTLEMENT`
  ADD CONSTRAINT `fk_DEBT_SETTLEMENT_SIGN_UP` FOREIGN KEY (`SIGN_UP_ID`) REFERENCES `SIGN_UP` (`SIGN_UP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `TO_DO_LIST`
--
ALTER TABLE `TO_DO_LIST`
  ADD CONSTRAINT `fk_TO_DO_LIST_SIGN_UP1` FOREIGN KEY (`SIGN_UP_ID`) REFERENCES `SIGN_UP` (`SIGN_UP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
