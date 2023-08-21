-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Aug 21, 2023 at 03:02 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `topic` enum('harmonica','football','switzerland','e-guitar','maths') COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `answer_1` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_2` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_3` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_4` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question_text`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_id`) VALUES
(1, 'harmonica', 'What is another name for the harmonica?', 'Flute', NULL, NULL, NULL, NULL),
(2, 'harmonica', 'Which musical family does the harmonica belong to?', 'Wind Instruments', NULL, NULL, NULL, NULL),
(3, 'harmonica', 'Who is credited with inventing the modern harmonica in the 1820s?', 'Christian Friedrich Ludwig Buschmann', NULL, NULL, NULL, NULL),
(4, 'harmonica', 'How many reeds does a typical diatonic harmonica have?', '20 reeds', NULL, NULL, NULL, NULL),
(5, 'harmonica', 'Which brand is widely recognized as one of the most typical and iconic manufacturers of harmonicas in the world?', 'Hohner', NULL, NULL, NULL, NULL),
(6, 'harmonica', 'Which hand is used for playing the melody on a standard harmonica?', 'Left hand', NULL, NULL, NULL, NULL),
(7, 'harmonica', 'What is the term for the technique of bending a harmonica reed to produce a note outside its natural range?', 'Bending', NULL, NULL, NULL, NULL),
(8, 'harmonica', 'In chromatic harmonicas, what feature allows players to access all the notes of the chromatic scale?', 'Slide button', NULL, NULL, NULL, NULL),
(9, 'harmonica', 'Which harmonica playing technique involves playing two or more notes at once to create a fuller sound?', 'Chordal playing', NULL, NULL, NULL, NULL),
(10, 'harmonica', 'Which famous musician was known for playing the harmonica while playing the guitar and singing \"Blowin in the Wind?\"', 'Bob Dylan', NULL, NULL, NULL, NULL),
(11, 'harmonica', 'What is the name of the small hole on the back of a harmonica that allows air to escape?', 'Vents', NULL, NULL, NULL, NULL),
(12, 'harmonica', 'Which popular musical genre heavily features the use of the harmonica alongside guitars and vocals?', 'Folk music', NULL, NULL, NULL, NULL),
(13, 'harmonica', 'What is the term for a harmonica that is played in a cross position, where inhaling and exhaling produce different notes?', 'Cross harp', NULL, NULL, NULL, NULL),
(14, 'harmonica', 'In terms of pitch range, how does a bass harmonica compare to a standard diatonic harmonica?', 'Bass harmonica has a lower pitch range', NULL, NULL, NULL, NULL),
(15, 'harmonica', 'What is the purpose of the slide button on a chromatic harmonica?', 'Redirecting air', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
