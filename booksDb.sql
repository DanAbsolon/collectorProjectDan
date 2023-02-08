-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Feb 08, 2023 at 10:02 AM
-- Server version: 5.7.41
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksShelf`
--

CREATE TABLE `booksShelf` (
  `id` int(11) NOT NULL,
  `authorFirstName` varchar(255) COLLATE latin1_bin NOT NULL,
  `authorSecondName` varchar(255) COLLATE latin1_bin NOT NULL,
  `bookTitle` varchar(255) COLLATE latin1_bin NOT NULL,
  `textType` varchar(255) COLLATE latin1_bin NOT NULL,
  `genre` varchar(255) COLLATE latin1_bin NOT NULL,
  `yearPublished` int(11) NOT NULL,
  `authorInspiration` varchar(5000) COLLATE latin1_bin NOT NULL,
  `keyQuote` varchar(5000) COLLATE latin1_bin NOT NULL,
  `languageWrittenIn` varchar(255) COLLATE latin1_bin NOT NULL,
  `subjectMatter` varchar(5000) COLLATE latin1_bin DEFAULT NULL,
  `link` varchar(5000) COLLATE latin1_bin NOT NULL,
  `extra` varchar(5000) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `booksShelf`
--

INSERT INTO `booksShelf` (`id`, `authorFirstName`, `authorSecondName`, `bookTitle`, `textType`, `genre`, `yearPublished`, `authorInspiration`, `keyQuote`, `languageWrittenIn`, `subjectMatter`, `link`, `extra`) VALUES
(1, 'Lloyd', 'Jones', 'Mister Pip', 'novel', 'neo-Victorian', 2006, 'civil war on Bougainville Island during the early 1990s, which Jones covered as a journalist, and a Dickens classic', 'A person entranced by a book simply forgets to breathe. The house can catch alight and a reader deep in a book will not look up until the wallpaper is in flames.', 'English', NULL, 'https://www.goodreads.com/book/show/543873.Mister_Pip', NULL),
(2, 'Chigozie', 'Obioma', 'The Fishermen', 'novel', 'realist', 2019, 'the fights of two of his brothers during their childhood, which were sometimes violent but thankfully without the tragic results imagined in the novel', 'I\'d heard someone say that the end of most things often bears a resemblance - even if faint - to their beginnings', 'English', NULL, 'https://www.goodreads.com/book/show/22875103-the-fishermen', NULL),
(4, 'Du', 'Nguy&#7877n', 'The Tale of Ki&#7873u', 'poem', 'epic', 1820, 'the plot of a seventeenth-century Chinese novel, and Nguy&#7877n\'s conflicting loyalties between the previous L&#234 king and the then current Nguy&#7877n emperor', 'A hundred years - in this life span on earth, talent and destiny are apt to feud. You must go through a play of ebb and flow and watch such things as make you sick at heart. Is it so strange that losses balance gains?', 'Vietnamese', NULL, 'https://www.goodreads.com/book/show/522888.The_Tale_of_Ki_u', NULL),
(5, ' Lucy', 'Ellmann', 'Ducks, Newburyport', 'novel', 'stream of consciousness', 2019, 'the complexity and vulnerability of human civilisation', 'the fact that it\'s unbelievable but every single thing alive has its own center of being, and looks out on the world from that point of view, even a worm, or a jellyfish, hamsters, owls, the fact that even a leaf has feelings, the fact that you know the leaves are enjoying this warm sun going right through them', 'English', NULL, 'https://www.goodreads.com/en/book/show/43412920', NULL),
(6, 'Ocean', 'Vuong', 'On Earth We\'re Briefly Gorgeous', 'novel', 'epistolary', 2019, 'Vuong\'s relationship with his mother and the impact of war', 'A page, turning, is a wing lifted with no twin, and therefore no flight. And yet we are moved.', 'English', NULL, 'https://www.goodreads.com/en/book/show/41880609', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksShelf`
--
ALTER TABLE `booksShelf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksShelf`
--
ALTER TABLE `booksShelf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
