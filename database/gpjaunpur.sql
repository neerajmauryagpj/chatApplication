-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 02:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpjaunpur`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MSG_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `FRIEND_ID` int(11) NOT NULL,
  `MSG` varchar(500) NOT NULL,
  `TIME` time(6) NOT NULL DEFAULT current_timestamp(),
  `DATE` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MSG_ID`, `USER_ID`, `FRIEND_ID`, `MSG`, `TIME`, `DATE`) VALUES
(1, 1, 2, 'neeraj maurya', '00:17:27.000000', '2020-03-17'),
(2, 1, 2, 'how are you', '00:18:10.000000', '2020-03-17'),
(3, 1, 2, 'I am fine', '00:18:27.000000', '2020-03-17'),
(4, 1, 5, 'hello', '00:35:58.000000', '2020-03-17'),
(5, 1, 5, 'hello', '00:40:03.000000', '2020-03-17'),
(6, 1, 5, 'dfghjk', '00:42:21.000000', '2020-03-17'),
(7, 1, 5, 'asdf', '00:46:22.000000', '2020-03-17'),
(9, 1, 2, 'asdfghjkl', '01:13:42.000000', '2020-03-17'),
(11, 6, 3, 'hello amit ji', '10:13:10.000000', '2020-03-18'),
(13, 3, 1, 'hiiii', '08:30:37.000000', '2020-03-19'),
(14, 3, 4, 'hello opprkash', '08:40:10.000000', '2020-03-19'),
(17, 3, 4, 'हाय राज मौर्य	', '09:09:45.000000', '2020-03-19'),
(20, 3, 1, 'light aya hai', '09:12:47.000000', '2020-03-19'),
(21, 3, 1, 'nahi', '09:12:53.000000', '2020-03-19'),
(22, 1, 3, 'hello how are you ', '09:14:16.000000', '2020-03-19'),
(23, 1, 3, 'I am fine', '09:14:34.000000', '2020-03-19'),
(28, 4, 2, 'hii shivam ', '19:08:14.000000', '2020-03-19'),
(29, 4, 3, 'hii amit yadav', '19:08:53.000000', '2020-03-19'),
(30, 4, 2, ' I am good, how about you?', '19:13:27.000000', '2020-03-19'),
(31, 2, 4, ' I am good, how about you?', '19:14:41.000000', '2020-03-19'),
(32, 4, 2, 'kaha', '19:16:37.000000', '2020-03-19'),
(33, 2, 4, 'i am fine', '19:18:06.000000', '2020-03-19'),
(34, 4, 2, 'sd', '19:18:40.000000', '2020-03-19'),
(47, 2, 4, 'vpn', '19:24:10.000000', '2020-03-19'),
(48, 2, 4, 'do you know about vpn', '19:24:51.000000', '2020-03-19'),
(49, 4, 2, 'no , if you can be explain then eplain it.', '19:26:28.000000', '2020-03-19'),
(55, 4, 1, 'lasvfkadmbnn;hvndajhh hlgjdlahdjha dsjhasrfndjhua dhsvpcdasjnmdvicj dviaknasphijknfd dashipvdnasmhio vhpas9ihjkrdikja hhiadsoknrdfaihk dya7uihjkbr 7yauihjkbra7yuijbfyhijkre auihjkdfjaslhfga', '19:30:33.000000', '2020-03-19'),
(66, 2, 2, 'sdfvsdfv', '19:33:05.000000', '2020-03-19'),
(67, 2, 2, 'sfgbcvbdwer', '19:33:13.000000', '2020-03-19'),
(70, 3, 4, 'hello', '19:51:48.000000', '2020-03-19'),
(71, 3, 4, 'xcghjkoiuhgv ', '19:53:13.000000', '2020-03-19'),
(72, 3, 4, 'hoooo', '20:04:44.000000', '2020-03-19'),
(73, 2, 3, 'kao', '20:11:59.000000', '2020-03-19'),
(74, 2, 3, 'kaise ho', '20:12:12.000000', '2020-03-19'),
(75, 2, 3, 'hhasjhfpui;av g9aiz;', '20:16:13.000000', '2020-03-19'),
(76, 2, 3, 'nnabba', '20:16:27.000000', '2020-03-19'),
(77, 2, 3, 'kdoshvbrja ', '20:16:35.000000', '2020-03-19'),
(78, 2, 3, 'nsdaoioo;bd', '20:16:43.000000', '2020-03-19'),
(79, 2, 3, 'snmc iosa', '20:16:48.000000', '2020-03-19'),
(80, 2, 3, ' kixaoidka', '20:16:53.000000', '2020-03-19'),
(81, 2, 3, 'nxoivph a8yiudjsa', '20:17:04.000000', '2020-03-19'),
(82, 1, 3, 'how are you', '06:31:31.000000', '2020-04-03'),
(83, 1, 3, 'a fine', '06:32:02.000000', '2020-04-03'),
(84, 1, 3, 'fdfgh', '06:32:16.000000', '2020-04-03'),
(85, 1, 3, 'hhhh', '06:39:56.000000', '2020-04-03'),
(86, 1, 3, 'hiii amit', '06:45:58.000000', '2020-04-03'),
(87, 3, 1, 'hii shivam', '06:46:35.000000', '2020-04-03'),
(88, 2, 1, 'hii ', '21:38:51.000000', '2020-04-03'),
(89, 2, 1, 'how are you', '21:39:07.000000', '2020-04-03'),
(90, 1, 2, 'bn', '21:39:34.000000', '2020-04-03'),
(91, 2, 1, 'how aaaa', '21:42:22.000000', '2020-04-03'),
(92, 2, 1, 'ha shivam', '21:50:19.000000', '2020-04-03'),
(93, 1, 2, 'llknm,cKV kl', '21:51:26.000000', '2020-04-03'),
(94, 2, 1, 'how are you shivam aur batao kaise ho', '10:47:11.000000', '2020-04-14'),
(95, 1, 2, 'i am fine and you ', '10:48:17.000000', '2020-04-14'),
(96, 1, 2, 'heelllllafadsokvmc a', '10:49:06.000000', '2020-04-14'),
(97, 2, 1, 'ha ds m]ab ha xca c 88aid cie', '10:49:21.000000', '2020-04-14'),
(98, 1, 2, 'hello shivam yadav kaise ho', '13:07:20.000000', '2020-04-14'),
(99, 1, 2, 'ham to ', '13:07:37.000000', '2020-04-14'),
(100, 2, 1, 'mai to thik hu', '13:07:53.000000', '2020-04-14'),
(101, 1, 2, 'kyo kya kar rahe ho', '13:08:10.000000', '2020-04-14'),
(102, 5, 1, 'habhai  mai to \n', '13:10:53.000000', '2020-04-14'),
(103, 5, 1, 'aur batao', '13:11:04.000000', '2020-04-14'),
(104, 1, 5, 'sab mast hai', '13:11:21.000000', '2020-04-14'),
(105, 8, 6, 'hiii rajkumar \n\n', '14:31:58.000000', '2020-04-17'),
(106, 8, 6, 'kaise ho aur', '14:32:08.000000', '2020-04-17'),
(107, 6, 8, 'i an well done', '14:33:03.000000', '2020-04-17'),
(108, 6, 8, 'anvc 8ahik', '14:33:08.000000', '2020-04-17'),
(109, 6, 8, 'haaa', '04:29:37.000000', '2020-04-18'),
(110, 6, 8, '\n vcadiok,', '04:37:23.000000', '2020-04-18'),
(111, 6, 2, 'ndsia', '04:42:16.000000', '2020-04-18'),
(112, 6, 1, 'hwwkk', '04:51:15.000000', '2020-04-18'),
(113, 6, 1, 'haaaa', '04:54:08.000000', '2020-04-18'),
(114, 6, 1, ',pgfsou89ikmb rgs9obl,', '04:54:16.000000', '2020-04-18'),
(115, 3, 6, 'hii rajkumar ', '05:11:53.000000', '2020-04-18'),
(116, 3, 6, 'hii manbcbujam', '05:12:11.000000', '2020-04-18'),
(118, 2, 3, 'hii', '20:47:37.000000', '2020-04-18'),
(121, 4, 5, 'hello ', '13:41:21.000000', '2020-04-19'),
(122, 4, 5, 'hemant', '13:43:36.000000', '2020-04-19'),
(123, 5, 4, 'hii', '13:56:36.000000', '2020-04-19'),
(124, 5, 4, 'opprakash', '13:57:10.000000', '2020-04-19'),
(125, 5, 4, 'haaaaaa', '13:58:05.000000', '2020-04-19'),
(126, 4, 5, 'nkdhnuasjm', '13:59:44.000000', '2020-04-19'),
(127, 5, 4, 'sdfgjhkhgr', '14:00:46.000000', '2020-04-19'),
(128, 5, 4, 'mkcdshvp 7sa', '14:01:10.000000', '2020-04-19'),
(129, 4, 5, 'hyuiop', '14:01:46.000000', '2020-04-19'),
(130, 5, 4, 'knsa;vkb', '14:02:35.000000', '2020-04-19'),
(131, 5, 4, 'hrarada', '14:02:53.000000', '2020-04-19'),
(132, 4, 5, 'ahaycau', '14:03:01.000000', '2020-04-19'),
(133, 4, 5, 'hii hemant', '14:15:42.000000', '2020-04-19'),
(134, 5, 4, 'hello op', '14:16:00.000000', '2020-04-19'),
(135, 4, 5, 'hiii ', '14:18:12.000000', '2020-04-19'),
(136, 5, 4, 'hiiitscvds addfshgcgvbkn', '14:18:26.000000', '2020-04-19'),
(137, 5, 4, 'hsad8tv8gdsa', '14:18:49.000000', '2020-04-19'),
(138, 4, 5, 'sdgfhjkjh', '14:18:56.000000', '2020-04-19'),
(139, 3, 4, 'op', '05:34:13.000000', '2020-04-20'),
(141, 3, 0, 'bliuo', '06:16:21.000000', '2020-04-21'),
(142, 3, 0, ' nkujjk', '06:16:35.000000', '2020-04-21'),
(143, 1, 2, 'hii shivam', '21:38:41.000000', '2020-04-23'),
(144, 3, 2, 'hii shiva, ', '02:16:22.000000', '2020-04-24'),
(145, 1, 3, 'hello', '11:12:48.000000', '2020-06-24'),
(146, 3, 1, 'ncvnjaf89ubad88vbpvbpidb a', '11:13:04.000000', '2020-06-24'),
(147, 1, 3, 'heheehe ehehe eehe \n', '11:13:54.000000', '2020-06-24'),
(148, 9, 1, 'hiiiii', '07:51:45.000000', '2020-06-25'),
(149, 9, 1, 'goood morning', '07:52:01.000000', '2020-06-25'),
(150, 1, 9, 'hiiii', '07:53:05.000000', '2020-06-25'),
(151, 9, 1, 'hiiivfvadhc kxj;ao', '07:53:13.000000', '2020-06-25'),
(152, 1, 9, 'nkmdvbpf faenbkcvpqer', '07:53:19.000000', '2020-06-25'),
(153, 3, 1, 'hello', '10:31:20.000000', '2020-06-28'),
(154, 1, 3, 'ahisjdavypae', '10:31:27.000000', '2020-06-28'),
(155, 3, 0, 'kf[og[orkf,c5tiokfmcrjfmc ', '06:17:31.000000', '2020-07-10'),
(156, 1, 0, 'mkopkk', '21:34:27.000000', '2020-07-16'),
(157, 1, 0, 'bnm', '21:34:57.000000', '2020-07-16'),
(158, 1, 9, 'nrrtaja maurya', '21:50:54.000000', '2020-07-16'),
(159, 1, 10, 'hello panakja maurya ji kaise hi\n', '07:02:11.000000', '2020-07-25'),
(160, 10, 1, 'hiii sadjch', '14:55:56.000000', '2020-07-25'),
(161, 1, 10, 'hii am neeraj', '14:56:52.000000', '2020-07-25'),
(162, 1, 10, 'hifd', '14:56:59.000000', '2020-07-25'),
(163, 10, 1, 'am fine', '14:57:14.000000', '2020-07-25'),
(164, 1, 2, 'hiii', '06:14:32.000000', '2020-08-01'),
(165, 1, 2, 'hey', '06:15:44.000000', '2020-08-01'),
(166, 2, 1, 'hlo', '06:16:12.000000', '2020-08-01'),
(167, 1, 10, 'hiii', '12:53:24.000000', '2020-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `myfriend`
--

CREATE TABLE `myfriend` (
  `MYID` int(11) NOT NULL,
  `USER_ID` varchar(11) NOT NULL,
  `FRIEND_ID` varchar(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `UPLOADPIC` varchar(200) NOT NULL,
  `ADD_DATE` date NOT NULL DEFAULT current_timestamp(),
  `STATUS` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myfriend`
--

INSERT INTO `myfriend` (`MYID`, `USER_ID`, `FRIEND_ID`, `NAME`, `UPLOADPIC`, `ADD_DATE`, `STATUS`) VALUES
(3, '3', '10', 'pankaj kumar maurya', 'profile-img10.png', '2020-08-01', 0),
(4, '10', '3', 'amit yadav', 'IMG-20191105-WA0042.jpg', '2020-08-01', 0),
(5, '2', '1', 'Neeraj Maurya', 'profile-img1.png', '2020-08-01', 0),
(6, '1', '2', 'Shivam Yadav', 'profile-img2.png', '2020-08-01', 0),
(9, '4', '1', 'Neeraj Maurya', 'profile-img1.png', '2020-08-03', 0),
(10, '1', '4', 'omprakash', 'IMG_20200130_135205.jpg', '2020-08-03', 0),
(13, '5', '1', 'Neeraj Maurya', 'profile-img1.png', '2020-08-07', 0),
(14, '1', '5', 'Hemat yadav', 'profile-img5.png', '2020-08-07', 0),
(15, '3', '1', 'Neeraj Maurya', 'profile-img1.png', '2020-08-07', 0),
(16, '1', '3', 'amit yadav', 'IMG-20191105-WA0042.jpg', '2020-08-07', 0),
(17, '2', '3', 'amit yadav', 'IMG-20191105-WA0042.jpg', '2020-08-07', 0),
(18, '3', '2', 'Shivam Yadav', 'profile-img2.png', '2020-08-07', 0),
(19, '10', '1', 'Neeraj Maurya', 'profile-img1.png', '2020-08-31', 0),
(20, '1', '10', 'pankaj kumar maurya', 'profile-img10.png', '2020-08-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `REQ_ID` int(11) NOT NULL,
  `FRIEND_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`REQ_ID`, `FRIEND_ID`, `USER_ID`, `NAME`, `STATUS`) VALUES
(3, 3, 2, 'Shivam Yadav', 1),
(4, 3, 10, 'pankaj kumar maurya', 1),
(5, 1, 10, 'pankaj kumar maurya', 1),
(15, 4, 1, 'Neeraj Maurya', 1),
(20, 2, 1, 'Neeraj Maurya', 1),
(21, 10, 1, 'Neeraj Maurya', 1),
(22, 5, 1, 'Neeraj Maurya', 1),
(23, 6, 1, 'Neeraj Maurya', 0),
(24, 8, 1, 'Neeraj Maurya', 0),
(25, 3, 1, 'Neeraj Maurya', 1),
(28, 2, 3, 'amit yadav', 1),
(29, 10, 1, 'Neeraj Maurya', 1),
(30, 1, 0, '', 0),
(31, 2, 0, '', 0),
(32, 6, 1, 'Neeraj Maurya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `MOBILE` varchar(10) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `COUNTRY` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `UPLOADPIC` varchar(200) NOT NULL DEFAULT 'profile_default.png',
  `REG_DATE` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `NAME`, `MOBILE`, `DOB`, `GENDER`, `COUNTRY`, `EMAIL`, `PASSWORD`, `UPLOADPIC`, `REG_DATE`) VALUES
(1, 'Neeraj Maurya', '7068678170', '2020-02-16', '', '', 'nm@gmail.com', '12345', 'profile-img1.png', '2020-02-18 00:35:05'),
(2, 'Shivam Yadav', '9696331551', '2020-02-16', '', '', 'shivam@gmail.com', 'shivam123', 'profile-img2.png', '2020-02-18 00:35:05'),
(3, 'amit yadav', '9632587410', '2020-02-18', '', '', 'amit@gmail.com', 'amit123', 'IMG-20191105-WA0042.jpg', '2020-02-18 00:35:05'),
(4, 'omprakash', '1236547893', '2020-02-03', '', '', 'op@gmail.com', 'op123', 'IMG_20200130_135205.jpg', '2020-02-18 00:35:05'),
(5, 'Hemat yadav', '7896542315', '2020-02-06', '', '', 'hemant@gmail.com', 'hemant123', 'profile-img5.png', '2020-02-18 06:59:48'),
(6, 'Raj Kumar', '8009902545', '2020-03-02', '', '', 'raj@gmail.com', 'raj123', 'profile-img6.png', '2020-03-18 10:11:26'),
(8, 'Ankit Maurya', '7839014570', '2005-03-16', 'Male', 'India', 'ankit@gmail.com', 'ankit123', '13.gif', '2020-04-17 14:30:17'),
(9, 'Abhishek maurya', '930518575', '2020-06-30', 'Male', 'India', 'abhishek@gmail.com', 'abhishek123', 'profile-img9.png', '2020-06-25 07:50:43'),
(10, 'pankaj kumar maurya', '917063950', '2020-07-20', 'Male', 'India', 'pankaj@gmail.com', 'pankaj123', 'profile-img10.png', '2020-07-25 07:00:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MSG_ID`);

--
-- Indexes for table `myfriend`
--
ALTER TABLE `myfriend`
  ADD PRIMARY KEY (`MYID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`REQ_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MSG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `myfriend`
--
ALTER TABLE `myfriend`
  MODIFY `MYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `REQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
