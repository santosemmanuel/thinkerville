-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 11:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `answer_id` int(11) NOT NULL,
  `exam_options` varchar(2000) NOT NULL,
  `exam_question_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`answer_id`, `exam_options`, `exam_question_id`) VALUES
(2, 'A', '12'),
(3, 'B', '12'),
(4, 'C', '12'),
(5, 'D', '12'),
(6, '20', '11'),
(7, '24', '11'),
(8, '28', '11'),
(9, '32', '11'),
(10, '4 years', '10'),
(11, '6 years', '10'),
(12, '8 years', '10'),
(13, '10 years', '10'),
(14, 'The Malolos Constitution', '9'),
(15, 'The Freedom Constitution', '9'),
(16, 'The 1935 Constitution', '9'),
(17, 'The 1987 Constitution', '9'),
(18, 'Sampaguita', '8'),
(19, 'Rose', '8'),
(20, 'Sunflower', '8'),
(21, 'Orchid', '8'),
(22, '60%', '7'),
(23, '65.5%', '7'),
(24, '70.5', '7'),
(25, '75%', '7'),
(27, '260 pandesals', '6'),
(28, '240 pandesals', '6'),
(29, '300 pandesals', '6'),
(30, '220 pandesals', '6'),
(31, 'Php 25', '4'),
(32, 'Php 30', '4'),
(33, 'Php 35', '4'),
(34, 'Php 40', '4'),
(35, 'is', '3'),
(36, 'are', '3'),
(37, 'were', '3'),
(38, 'have', '3'),
(39, '20', '2'),
(40, '22', '2'),
(41, '24', '2'),
(42, '26', '2'),
(43, 'The argument is invalid', '1'),
(44, 'The argument is valid', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_list`
--

CREATE TABLE `tbl_book_list` (
  `id` int(11) NOT NULL,
  `book_name` varchar(45) NOT NULL,
  `book_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(25) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `contact_name`, `company_name`, `contact_num`, `email_address`, `user_id`) VALUES
(1, 'Alleth Rey Dazo', 'Jolly Management Solution Inc.', '0910427190', 'myemail@gmail.com', 1),
(20, 'Kimberly Miape', 'Jolly Management Solution Inc.', '545-8855', 'kimiape@gmail.com', 1),
(26, 'Pedro', 'FDCI', '091235467', 'email@gmail.com', 2),
(31, 'Chiara May Permentilla', 'Akari', '091234', 'chichi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `client_email` varchar(45) NOT NULL,
  `client_message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `client_email`, `client_message`) VALUES
(1, 'dasdasd', 'dasdasd'),
(2, 'fsd', 'fsfsdfsdfsdjkfsdjcdsbcsd'),
(3, 'fsd', 'fsfsdfsdfsdjkfsdjcdsbcsd'),
(4, '', 'fdsfsdf'),
(6, 'fsdfsd', 'fsdfsdf'),
(7, 'fsdfsd', 'fsdfsdfsd'),
(8, 'sdfsdfsd', 'fsdfsdf'),
(9, 'fsfds', 'fsdfsd'),
(10, 'dad', 'asdas'),
(11, '', 'dasdsa'),
(12, 'asdasdas', 'dasdas'),
(13, 'fsdfsd', 'fsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(45) NOT NULL,
  `prod_type` varchar(45) NOT NULL,
  `prod_price` varchar(45) NOT NULL,
  `prod_quantity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `prod_name`, `prod_type`, `prod_price`, `prod_quantity`) VALUES
(7, 'Omega Sardines', 'Can Goods', '20', '24'),
(14, 'Coca-cola', 'Soft drinks', '35', '6'),
(26, 'Sprite', 'Soft drinks', '35', '12'),
(27, 'Bingo', 'Biscuits', '7', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `question_id` int(11) NOT NULL,
  `question_set` varchar(1000) NOT NULL,
  `question_type` varchar(65) NOT NULL,
  `question_answer` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`question_id`, `question_set`, `question_type`, `question_answer`) VALUES
(1, 'Determine the validity of the following argument:\n\"All cats have tails. Whiskers is a cat. Therefore, Whiskers has a tail.\"', 'Logic', 'The argument is valid.'),
(2, 'Identify the missing number in the following number series:\n3, 6, 9, 15, __, 33, 42', 'Logical reasoning', '24'),
(3, 'Identify the correct form of the verb to complete the sentence:\n\nThe group of students ________ going on a field trip to the museum tomorrow.', 'English Grammar', 'is'),
(4, 'A fruit vendor bought a crate of mangoes for Php 1,200. If he wants to make a 25% profit, what should be the selling price of the mangoes per piece if there are 60 mangoes in the crate?', 'Numerical Competency', 'Php 30'),
(6, 'A small bakery produces an average of 200 pandesals per day. On weekends, they experience an increase in demand, and the production increases by 30%. How many pandesals does the bakery produce on weekends?', 'Numerical Competency', '240 pandesals'),
(7, 'The city of Metroville experienced a significant drop in its crime rate after implementing two community programs: \"Youth Engagement\" and \"Neighborhood Watch.\" The crime rate decreased by 45% due to \"Youth Engagement\" and by 30% due to \"Neighborhood Watch.\" If both programs are implemented together, what percentage of crime rate reduction can be expected?', 'Analytical Competency', '65.5%'),
(8, 'What is the national flower of the Philippines?', 'General Information', 'Sampaguita'),
(9, 'What is the name of the current constitution of the Philippines?', 'General Information', 'The 1987 Constitution'),
(10, 'What is the term length for a Philippine Senator?', 'General Information', '6 years'),
(11, 'What is the next number in the following sequence?\r\n\r\n2, 4, 8, 16, __', 'Numerical Competency', '32'),
(12, ' Identify the sentence with the correct subject-verb agreement.\na) The group of students is going on a field trip.\nb) The group of students are going on a field trip.\nc) The group of students were going on a field trip.\nd) The group of students have going on a field trip.', 'English Grammar', 'a) The group of students is going on a field trip.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(35) NOT NULL,
  `student_course` varchar(65) NOT NULL,
  `student_school` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_name`, `student_course`, `student_school`) VALUES
(1, 'Kimberly Miape', 'Bachelor of Science in Information Technology', 'Palompon Institute of Technology'),
(9, 'Alleth Rey Dazo', 'Bachelor of Science in Information Technology', 'Eastern Visayas State University');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `user_complete_name` varchar(65) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `user_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `user_complete_name`, `user_name`, `user_password`) VALUES
(1, 'Alleth Dazo', 'myemail@gmail.com', 'password1'),
(2, 'Pedro', 'sample@email.com', 'password2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `tbl_book_list`
--
ALTER TABLE `tbl_book_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_book_list`
--
ALTER TABLE `tbl_book_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
