-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql213.infinityfree.com
-- Generation Time: Jan 09, 2025 at 01:34 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38043533_webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Congratulations (Eng Ver.)', 'I don\'t even know how I can talk to you now\r\nIt\'s not you, the you who talks to me anymore\r\nAnd sure I know that sometimes it gets hard\r\nBut even with all my love, what we had\r\nYou just gave it up', 'The_Best_Day.jpg', '2024-12-06 11:03:53', 'admin'),
(2, 'Zombie (Eng Ver.)', 'Breathin\', but I\'ve been dyin\' inside\r\nNothin\' new and nothin\' feels right\r\nDeja-vu, so I close my eyes\r\nLet?the demon sing me a lullaby\r\nToday\'s a present that I don\'t want\r\nSo I\'m wonderin\' in this world\r\nAm I really the only one\r\nWho\'s been wantin\' to hide out\r\nFrom?the sun and run?', 'The_Book_of_Us_The_Demon.jpg', '2024-12-06 11:04:38', 'admin'),
(3, 'Good Enough', 'Climbin\' up to reach your land, never done\r\nAt the end I\'m pulled away, chances gone\r\nIs it gravity or ocean wind that always bring me back\r\nWanting you, let\'s be true, \'cause it\'s you\r\nJust let me wave to you, not wave goodbye\r\nLet me stay by your side', 'Deadlock.jpg', '2024-12-06 11:05:38', 'admin'),
(4, 'Happy', 'Will there be a day like that when it\'s all just good?\r\nA day that makes me laugh\r\nWithout worrying about tomorrow\r\nOne by one, something happens\r\nWill I ever be able to be truly happy?', 'Fourever.jpg', '2024-12-06 11:06:20', 'admin'),
(5, 'Save Me', 'As if the past days of reassuring myself\r\nThat it was okay are meaningless\r\nThe sunlight pouring down feels heavy\r\nI know I can\'t be runnin\'\r\nI\'m trapped below', 'Open_Beta_v6.3.jpg', '2024-12-06 11:07:00', 'admin'),
(6, 'iNSTEAD!', 'You stare at me like I\'m brain dead\r\n\"Dr. Bad News\" came with meds\r\nThink I\'m suffocating under water bad enough\r\nEmpty promises and lies are made with deeper cuts\r\nI\'m okay, un-afraid\r\nWhen my lungs collapse, it\'s overkill', 'Open_Beta_v6.4.jpg', '2024-12-06 11:08:13', 'admin'),
(9, 'ini artikel', 'artikel artikel', '20250108233519.jpeg', '2025-01-08 23:35:19', 'annisa');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `link` text NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `judul`, `link`, `tanggal`, `username`) VALUES
(1, 'boot1.jpg', 'DAY6 \"Better Better\" LIVE CLIP (with My Day ver.)', 'https://youtu.be/kQBAEEWwRgo?si=vL6kmiZHLkpTNBrz', '2024-12-15 11:46:47', 'admin'),
(2, 'boot2.jpg', '\'Congratulations\' IU Live Clip (With DAY6)', 'https://youtu.be/d6dOmhMqDdI?si=IITuzlPXQVkT7lkl', '2024-12-15 11:47:12', 'admin'),
(3, 'boot3.jpg', 'until the end of time | Xdinary Heroes Concert <Closed beta: v6.0>', 'https://youtu.be/eSGAMORFmPU?si=Ql7u1zl4Prvkxbfe', '2024-12-15 11:47:30', 'admin'),
(5, '20250104134423.jpg', 'testing', 'https://youtu.be/jePk5vWvyFk?si=t41A31pZzw1KOpLh', '2025-01-04 13:44:43', 'admin'),
(6, '20250105185501.jpg', 'TWICE â€œStrategy (feat. Megan Thee Stallion)â€ M/V', 'https://youtu.be/Sz_wWzgh-vQ?si=DK8ZZ3CsQT8HAc5_', '2025-01-05 18:55:01', 'admin'),
(7, '20250105185628.jpg', 'Stray Kids \"Walkin On Water\" M/V', 'https://youtu.be/ovHoY8UBIu8?si=cQAR8MEhlVVJL0DY', '2025-01-05 18:56:28', 'admin'),
(8, '20250105190136.jpg', 'aespa \'Whiplash\' MV', 'https://youtu.be/jWQx2f-CErU?si=Xjo9UBfMjDeo6tVE', '2025-01-05 19:01:36', 'admin'),
(9, '20250108190857.jpg', 'NMIXX - â€œRun For Roses(With. Young K (DAY6))â€ Band LIVE [it\'s Live]', 'https://youtu.be/MPsEX2NSDIQ?si=TeCW_DhvbCG0qjh4', '2025-01-08 19:08:57', 'admin'),
(12, '20250109000701.jpg', 'KickFlip (Umm Great) M/V', 'https://www.youtube.com/watch?v=L__ITOj-g8E', '2025-01-09 00:07:01', 'annisa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20250108234342.jpeg'),
(2, 'admin2', '4eae18cf9e54a0f62b44176d074cbe2f', '20250104142110.jpeg'),
(3, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20250105185835.png'),
(4, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '20250108193043.jpeg'),
(5, 'admin4', 'fc1ebc848e31e0a68e868432225e3c82', '20250108193103.jpeg'),
(6, 'admin5', '26a91342190d515231d7238b0c5438e1', '20250108193245.jpeg'),
(7, 'annisa', 'c9d2cce909ea37234be8af1a1f958805', '20250108193309.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
