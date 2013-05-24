-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2013 at 12:19 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `platinum`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `title`, `content`, `image`, `order`) VALUES
(1, 'Outdoor Advertisment', '<p>\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</span></p>\r\n', '680d5-Genuine-AutoCAD-Family-of-Software-From-$199-by-CADTECH.jpg', 1),
(2, 'Adverts and Billboards', '<h3 style="box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; line-height: 1.3; font-weight: 500; font-size: 21px; color: rgb(235, 42, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</span></h3>\r\n', '745f7-Tanzanias-FirstIn-Ad-VideoDigital-Banner-Ad.png', 2),
(3, 'Lorem ipsum dolor sit amet', '<p>\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</span></p>\r\n', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`area_id`,`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `city_id`, `name`) VALUES
(1, 1, 'mikocheni'),
(2, 1, 'city center'),
(3, 1, 'chang''ombe'),
(4, 1, 'msasani'),
(5, 1, 'masaki'),
(6, 3, 'Sakina'),
(7, 3, 'Njiro'),
(8, 3, 'Ngarinaro'),
(9, 3, 'Kigenge'),
(10, 5, 'Nyakato');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) NOT NULL,
  `invetory_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=660 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `location_id`, `invetory_id`, `date`) VALUES
(17, 1, 27, '2013-05-27'),
(18, 1, 27, '2013-05-28'),
(19, 1, 27, '2013-05-29'),
(20, 1, 27, '2013-05-30'),
(21, 1, 27, '2013-05-31'),
(22, 1, 27, '2013-06-01'),
(23, 1, 27, '2013-06-02'),
(24, 1, 27, '2013-06-03'),
(25, 1, 27, '2013-06-04'),
(26, 1, 27, '2013-06-05'),
(27, 1, 27, '2013-06-06'),
(28, 1, 27, '2013-06-07'),
(29, 1, 27, '2013-06-08'),
(30, 1, 27, '2013-06-09'),
(31, 1, 27, '2013-06-10'),
(32, 1, 27, '2013-06-11'),
(33, 1, 27, '2013-06-12'),
(34, 1, 27, '2013-06-13'),
(35, 1, 27, '2013-06-14'),
(36, 1, 27, '2013-06-15'),
(37, 1, 27, '2013-06-16'),
(38, 1, 27, '2013-06-17'),
(39, 1, 27, '2013-06-18'),
(40, 1, 27, '2013-06-19'),
(41, 1, 27, '2013-06-20'),
(42, 1, 27, '2013-06-21'),
(43, 1, 27, '2013-06-22'),
(44, 1, 27, '2013-06-23'),
(45, 1, 27, '2013-06-24'),
(46, 1, 27, '2013-06-25'),
(47, 1, 27, '2013-06-26'),
(48, 1, 27, '2013-06-27'),
(49, 1, 27, '2013-06-28'),
(50, 1, 27, '2013-06-29'),
(51, 1, 27, '2013-06-30'),
(52, 1, 27, '2013-07-01'),
(53, 1, 27, '2013-07-02'),
(54, 1, 27, '2013-07-03'),
(55, 1, 27, '2013-07-04'),
(56, 1, 27, '2013-07-05'),
(57, 1, 27, '2013-07-06'),
(58, 1, 27, '2013-07-07'),
(59, 1, 27, '2013-07-08'),
(60, 1, 27, '2013-07-09'),
(61, 1, 27, '2013-07-10'),
(62, 1, 27, '2013-07-11'),
(63, 1, 27, '2013-07-12'),
(64, 1, 27, '2013-07-13'),
(65, 1, 27, '2013-07-14'),
(66, 1, 27, '2013-07-15'),
(67, 1, 27, '2013-07-16'),
(68, 1, 27, '2013-07-17'),
(69, 1, 27, '2013-07-18'),
(70, 1, 27, '2013-07-19'),
(71, 1, 27, '2013-07-20'),
(72, 1, 27, '2013-07-21'),
(73, 1, 27, '2013-07-22'),
(74, 1, 27, '2013-07-23'),
(75, 1, 27, '2013-07-24'),
(76, 1, 27, '2013-07-25'),
(77, 1, 27, '2013-07-26'),
(78, 1, 27, '2013-07-27'),
(79, 1, 27, '2013-07-28'),
(80, 1, 27, '2013-07-29'),
(81, 1, 27, '2013-07-30'),
(82, 1, 27, '2013-07-31'),
(83, 1, 27, '2013-08-01'),
(84, 1, 27, '2013-08-02'),
(85, 1, 27, '2013-08-03'),
(86, 1, 27, '2013-08-04'),
(87, 1, 27, '2013-08-05'),
(88, 1, 27, '2013-08-06'),
(89, 1, 27, '2013-08-07'),
(90, 1, 27, '2013-08-08'),
(91, 1, 27, '2013-08-09'),
(92, 1, 27, '2013-08-10'),
(93, 1, 27, '2013-08-11'),
(94, 1, 27, '2013-08-12'),
(95, 1, 27, '2013-08-13'),
(96, 1, 27, '2013-08-14'),
(97, 1, 27, '2013-08-15'),
(98, 1, 27, '2013-08-16'),
(99, 1, 27, '2013-08-17'),
(100, 1, 27, '2013-08-18'),
(101, 1, 27, '2013-08-19'),
(102, 1, 27, '2013-08-20'),
(103, 1, 27, '2013-08-21'),
(104, 1, 27, '2013-08-22'),
(105, 1, 27, '2013-08-23'),
(106, 1, 27, '2013-08-24'),
(107, 1, 27, '2013-08-25'),
(108, 1, 27, '2013-08-26'),
(109, 1, 27, '2013-08-27'),
(110, 1, 27, '2013-08-28'),
(111, 1, 27, '2013-08-29'),
(112, 1, 27, '2013-08-30'),
(113, 1, 27, '2013-08-31'),
(114, 1, 27, '2013-09-01'),
(115, 1, 27, '2013-09-02'),
(116, 1, 27, '2013-09-03'),
(117, 1, 27, '2013-09-04'),
(118, 1, 27, '2013-09-05'),
(119, 1, 27, '2013-09-06'),
(120, 1, 27, '2013-09-07'),
(121, 1, 27, '2013-09-08'),
(122, 1, 27, '2013-09-09'),
(123, 1, 27, '2013-09-10'),
(124, 1, 27, '2013-09-11'),
(125, 1, 27, '2013-09-12'),
(126, 1, 27, '2013-09-13'),
(127, 1, 27, '2013-09-14'),
(128, 1, 27, '2013-09-15'),
(129, 1, 27, '2013-09-16'),
(130, 1, 27, '2013-09-17'),
(131, 1, 27, '2013-09-18'),
(132, 1, 27, '2013-09-19'),
(133, 1, 27, '2013-09-20'),
(134, 1, 27, '2013-09-21'),
(135, 1, 27, '2013-09-22'),
(136, 1, 27, '2013-09-23'),
(137, 1, 27, '2013-09-24'),
(138, 1, 27, '2013-09-25'),
(139, 1, 27, '2013-09-26'),
(140, 1, 27, '2013-09-27'),
(141, 1, 27, '2013-09-28'),
(142, 1, 27, '2013-09-29'),
(143, 1, 27, '2013-09-30'),
(478, 3, 29, '2013-05-01'),
(479, 3, 29, '2013-05-02'),
(480, 3, 29, '2013-05-03'),
(481, 3, 29, '2013-05-04'),
(482, 3, 29, '2013-05-05'),
(483, 3, 29, '2013-05-06'),
(484, 3, 29, '2013-05-07'),
(485, 3, 29, '2013-05-08'),
(486, 3, 29, '2013-05-09'),
(487, 3, 29, '2013-05-10'),
(488, 3, 29, '2013-05-11'),
(489, 3, 29, '2013-05-12'),
(490, 3, 29, '2013-05-13'),
(491, 3, 29, '2013-05-14'),
(492, 3, 29, '2013-05-15'),
(493, 3, 29, '2013-05-16'),
(494, 3, 29, '2013-05-17'),
(495, 3, 29, '2013-05-18'),
(496, 3, 29, '2013-05-19'),
(497, 3, 29, '2013-05-20'),
(498, 3, 29, '2013-05-21'),
(499, 3, 29, '2013-05-22'),
(500, 3, 29, '2013-05-23'),
(501, 3, 29, '2013-05-24'),
(502, 3, 29, '2013-05-25'),
(503, 3, 29, '2013-05-26'),
(504, 3, 29, '2013-05-27'),
(505, 3, 29, '2013-05-28'),
(506, 3, 29, '2013-05-29'),
(507, 3, 29, '2013-05-30'),
(508, 3, 29, '2013-05-31'),
(509, 3, 29, '2013-06-01'),
(510, 3, 29, '2013-06-02'),
(511, 3, 29, '2013-06-03'),
(512, 3, 29, '2013-06-04'),
(513, 3, 29, '2013-06-05'),
(514, 3, 29, '2013-06-06'),
(515, 3, 29, '2013-06-07'),
(516, 3, 29, '2013-06-08'),
(517, 3, 29, '2013-06-09'),
(518, 3, 29, '2013-06-10'),
(519, 3, 29, '2013-06-11'),
(520, 3, 29, '2013-06-12'),
(521, 3, 29, '2013-06-13'),
(522, 3, 29, '2013-06-14'),
(523, 3, 29, '2013-06-15'),
(524, 3, 29, '2013-06-16'),
(525, 3, 29, '2013-06-17'),
(526, 3, 29, '2013-06-18'),
(527, 3, 29, '2013-06-19'),
(528, 3, 29, '2013-06-20'),
(529, 3, 29, '2013-06-21'),
(530, 3, 29, '2013-06-22'),
(531, 3, 29, '2013-06-23'),
(532, 3, 29, '2013-06-24'),
(533, 3, 29, '2013-06-25'),
(534, 3, 29, '2013-06-26'),
(535, 3, 29, '2013-06-27'),
(536, 3, 29, '2013-06-28'),
(537, 3, 29, '2013-06-29'),
(538, 3, 29, '2013-06-30'),
(539, 4, 30, '2013-01-19'),
(540, 4, 30, '2013-01-20'),
(541, 4, 30, '2013-01-21'),
(542, 4, 30, '2013-01-22'),
(543, 4, 30, '2013-01-23'),
(544, 4, 30, '2013-01-24'),
(545, 4, 30, '2013-01-25'),
(546, 4, 30, '2013-01-26'),
(547, 4, 30, '2013-01-27'),
(548, 4, 30, '2013-01-28'),
(549, 4, 30, '2013-01-29'),
(550, 4, 30, '2013-01-30'),
(551, 4, 30, '2013-01-31'),
(552, 4, 30, '2013-02-01'),
(553, 4, 30, '2013-02-02'),
(554, 4, 30, '2013-02-03'),
(555, 4, 30, '2013-02-04'),
(556, 4, 30, '2013-02-05'),
(557, 4, 30, '2013-02-06'),
(558, 4, 30, '2013-02-07'),
(559, 4, 30, '2013-02-08'),
(560, 4, 30, '2013-02-09'),
(561, 4, 30, '2013-02-10'),
(562, 4, 30, '2013-02-11'),
(563, 4, 30, '2013-02-12'),
(564, 4, 30, '2013-02-13'),
(565, 4, 30, '2013-02-14'),
(566, 4, 30, '2013-02-15'),
(567, 4, 30, '2013-02-16'),
(568, 4, 30, '2013-02-17'),
(569, 4, 30, '2013-02-18'),
(570, 4, 30, '2013-02-19'),
(571, 4, 30, '2013-02-20'),
(572, 4, 30, '2013-02-21'),
(573, 4, 30, '2013-02-22'),
(574, 4, 30, '2013-02-23'),
(575, 4, 30, '2013-02-24'),
(576, 4, 30, '2013-02-25'),
(577, 4, 30, '2013-02-26'),
(578, 4, 30, '2013-02-27'),
(579, 4, 30, '2013-02-28'),
(580, 4, 30, '2013-03-01'),
(581, 4, 30, '2013-03-02'),
(582, 4, 30, '2013-03-03'),
(583, 4, 30, '2013-03-04'),
(584, 4, 30, '2013-03-05'),
(585, 4, 30, '2013-03-06'),
(586, 4, 30, '2013-03-07'),
(587, 4, 30, '2013-03-08'),
(588, 4, 30, '2013-03-09'),
(589, 4, 30, '2013-03-10'),
(590, 4, 30, '2013-03-11'),
(591, 4, 30, '2013-03-12'),
(592, 4, 30, '2013-03-13'),
(593, 4, 30, '2013-03-14'),
(594, 4, 30, '2013-03-15'),
(595, 4, 30, '2013-03-16'),
(596, 4, 30, '2013-03-17'),
(597, 4, 30, '2013-03-18'),
(598, 4, 30, '2013-03-19'),
(599, 4, 30, '2013-03-20'),
(600, 4, 30, '2013-03-21'),
(601, 4, 30, '2013-03-22'),
(602, 4, 30, '2013-03-23'),
(603, 4, 30, '2013-03-24'),
(604, 4, 30, '2013-03-25'),
(605, 4, 30, '2013-03-26'),
(606, 4, 30, '2013-03-27'),
(607, 4, 30, '2013-03-28'),
(608, 4, 30, '2013-03-29'),
(609, 4, 30, '2013-03-30'),
(610, 4, 30, '2013-03-31'),
(611, 4, 30, '2013-04-01'),
(612, 4, 30, '2013-04-02'),
(613, 4, 30, '2013-04-03'),
(614, 4, 30, '2013-04-04'),
(615, 4, 30, '2013-04-05'),
(616, 4, 30, '2013-04-06'),
(617, 4, 30, '2013-04-07'),
(618, 4, 30, '2013-04-08'),
(619, 4, 30, '2013-04-09'),
(620, 4, 30, '2013-04-10'),
(621, 4, 30, '2013-04-11'),
(622, 4, 30, '2013-04-12'),
(623, 4, 30, '2013-04-13'),
(624, 4, 30, '2013-04-14'),
(625, 4, 30, '2013-04-15'),
(626, 4, 30, '2013-04-16'),
(627, 4, 30, '2013-04-17'),
(628, 4, 30, '2013-04-18'),
(629, 4, 30, '2013-04-19'),
(630, 4, 30, '2013-04-20'),
(631, 4, 30, '2013-04-21'),
(632, 4, 30, '2013-04-22'),
(633, 4, 30, '2013-04-23'),
(634, 4, 30, '2013-04-24'),
(635, 4, 30, '2013-04-25'),
(636, 4, 30, '2013-04-26'),
(637, 4, 30, '2013-04-27'),
(638, 4, 30, '2013-04-28'),
(639, 4, 30, '2013-04-29'),
(640, 4, 30, '2013-04-30'),
(641, 4, 30, '2013-05-01'),
(642, 4, 30, '2013-05-02'),
(643, 4, 30, '2013-05-03'),
(644, 4, 30, '2013-05-04'),
(645, 4, 30, '2013-05-05'),
(646, 4, 30, '2013-05-06'),
(647, 4, 30, '2013-05-07'),
(648, 4, 30, '2013-05-08'),
(649, 4, 30, '2013-05-09'),
(650, 4, 30, '2013-05-10'),
(651, 4, 30, '2013-05-11'),
(652, 4, 30, '2013-05-12'),
(653, 4, 30, '2013-05-13'),
(654, 4, 30, '2013-05-14'),
(655, 4, 30, '2013-05-15'),
(656, 4, 30, '2013-05-16'),
(657, 4, 30, '2013-05-17'),
(658, 4, 30, '2013-05-18'),
(659, 4, 30, '2013-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `name`) VALUES
(1, 'dar es salaam'),
(2, 'zanzibar'),
(3, 'arusha'),
(4, 'moshi'),
(5, 'Mwanza');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `description` tinytext NOT NULL,
  `order` int(11) NOT NULL,
  `show_on_site` enum('yes','no','','') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `logo`, `description`, `order`, `show_on_site`) VALUES
(20, '820', '0b245-8020.png', '', 0, 'yes'),
(22, 'Magazetini', 'a236d-magazetini-logo.jpg', '', 0, 'yes'),
(23, 'Events', 'e1a0a-eventstz-logo.png', '', 0, 'yes'),
(24, 'Choka', 'b8ddc-djchoka.png', '', 0, 'yes'),
(25, 'Michuzi', '6c5ad-Michuzi-blog-logo-resize.jpg', 'Michuzi', 0, 'yes'),
(26, 'Fetty', 'cbdbe-b7b39-dj-fetty-logo.png', '', 0, 'yes'),
(27, 'G5', 'c875e-G5-CLICK-logo.jpg', '', 0, 'yes'),
(28, 'swahili', '7f282-smn-logo.jpg', '', 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `landlord_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`,`landlord_id`,`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `landlord_id`, `client_id`, `email`, `phone`) VALUES
(7, 3, 0, 'emmanuel@zoomtanzania.com', '0713711773'),
(8, 4, 0, 'dos@yahoo.com', '07463746832'),
(10, 0, 20, 'emmanuel@zoomtanzania.com', '0713711773');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(2, 'Taste-and-Buy-Delicious-Treats-at-the-upcoming-Oyster-Bay-Farmers-Market', '0713711773', 'emmanuel.mariki@yahoo.com', 'testing', 'iegherioghefignre efwiughiuergheru ewughewriughr'),
(3, 'Taste-and-Buy-Delicious-Treats-at-the-upcoming-Oyster-Bay-Farmers-Market', '0713711773', 'emmanuel.mariki@yahoo.com', 'testing', 'iegherioghefignre efwiughiuergheru ewughewriughr'),
(4, 'Taste-and-Buy-Delicious-Treats-at-the-upcoming-Oyster-Bay-Farmers-Market', '0713711773', 'emmanuel.mariki@yahoo.com', 'testing', 'iegherioghefignre efwiughiuergheru ewughewriughr'),
(5, 'Aruti-HR-and-Payroll-Software-Now-Available-at-Reduced-Rates', '0713711773', 'admin@admin.com', 'Nafasi za Kazi Mpya, Leo 27 Nov', 'Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas'),
(6, 'Introducing-Express-Lunches-at-Akemi–Dar-Revolving-Restaurant', '0713711773', 'emmanuel.mariki@yahoo.com', 'Nafasi za Kazi Mpya, Leo 27 Nov', 'fjaskfjdsgkh dskghdskghds dskghdsfkjghdf skdghdfkj dskghdfkgjh dskjghdfkjghf dfbjhdf\r\ngdjgbdskjg ds''g\r\ndsgdjdggdf dskgjdhkg wietewion  '),
(7, 'Taste-and-Buy-Delicious-Treats-at-the-upcoming-Oyster-Bay-Farmers-Market', '0713711773', 'emmanuel.mariki@yahoo.com', 'testing', 'iodhqfhewkjgfewgew\r\ngerwgernkbnerklnberbnb ewbrnerklnger\r\negnerkgherklh wegjewriogher'),
(8, 'Get-Easy-to-Use-Fax-Machines-from-Netways', '0713711773', 'emmanuel.mariki@yahoo.com', 'Nafasi za Kazi Mpya, Leo 27 Nov', 'jakfhkasjfhds dskjghdskjghds dskgjhdskjghd dsgklhdsklghds ksdhgdskg slgdslgh sdlghdslkg sldkghdsklgh lsdghdslgkh sklghdslghds\r\ngvdsgkhdskg skghdskghdf dkgdskghds skghdskghdsk sklghkdslghsl ieogheioghdso dsklhgldskhgdsl aswloghdsklhgkls sdkghldshgdsl lskdhgdslkhgbsogdso dsghds');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `image`, `caption`, `order`) VALUES
(1, 'dfba6-Slide_3.gif', '<p>\r\n	ahsdgjhas</p>\r\n', 0),
(2, 'bc09f-Slide_1---Copy.gif', '<p>\r\n	hdcasjfhasfjsd</p>\r\n', 0),
(3, '6da5b-Slide_2.gif', '<p>\r\n	aacxhAGCASH</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE IF NOT EXISTS `inventories` (
  `inventory_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `renewal_terms` text NOT NULL,
  PRIMARY KEY (`inventory_id`,`location_id`,`client_id`),
  UNIQUE KEY `inventory_id` (`inventory_id`),
  KEY `end_date` (`end_date`),
  KEY `start_date` (`start_date`),
  KEY `end_date_2` (`end_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`inventory_id`, `location_id`, `client_id`, `start_date`, `end_date`, `renewal_terms`) VALUES
(27, 1, 28, '2013-05-27', '2013-09-30', '<p>\r\n	svdsvdsbvdsbv</p>\r\n'),
(29, 3, 23, '2013-05-01', '2013-06-30', '<p>\r\n	sdvdsgvdsgds</p>\r\n'),
(30, 4, 25, '2013-01-19', '2013-05-19', '<p>\r\n	Let&#39;s first think about what we are creating. We want a standard calendar that will display dates month by month, and in this tutorial we will make it dynamic as to display the current month, and highlight the current day. But unfortunately this isn&#39;t as simple as printing out 31 days and labelling them up. Because calendars show dates preceding and succeeding the month, we need to display our data based on the day of the week that the month starts on, this is something we need to think about when designing the code. Not all months have 31 days in them either, so we need to build a system which adapts to each month.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE IF NOT EXISTS `landlords` (
  `landlord_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`landlord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `landlords`
--

INSERT INTO `landlords` (`landlord_id`, `first_name`, `last_name`, `contact`) VALUES
(3, 'Emmanuel', 'Mariki', '<a href="http://localhost/platinum/Admin/add_landlord_contacts/3">Conctacts</a>'),
(4, 'Dolorosa', 'Shirima', '<a href="http://localhost/platinum/Admin/add_landlord_contacts/4">Conctacts</a>'),
(5, 'Kankiza', 'Tibaijuka', '<a href="http://localhost/platinum/Admin/add_landlord_contacts/5">Conctacts</a>'),
(6, 'Terence', 'Silonda', '<a href="http://localhost/platinum/Admin/add_landlord_contacts/6">Conctacts</a>');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `landlord_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `faces` enum('1','2','3','4','') NOT NULL,
  `description` text NOT NULL,
  `illuminated` enum('Yes','No','','') NOT NULL,
  `images` text NOT NULL,
  `latitude` int(255) NOT NULL,
  `longitude` int(255) NOT NULL,
  `annual_rent` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_model` enum('Annual','Bi - Annual','Quarterly','') NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`location_id`,`landlord_id`,`size_id`,`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `landlord_id`, `size_id`, `area_id`, `location_name`, `faces`, `description`, `illuminated`, `images`, `latitude`, `longitude`, `annual_rent`, `amount`, `payment_model`, `start_date`, `end_date`) VALUES
(1, 3, 1, 9, ' Temporibus autem', '3', '<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n', 'Yes', '', 1244, 42423, '54465467547575', 2147483647, 'Bi - Annual', '2013-05-01', '2005-05-31'),
(2, 4, 1, 5, 'Lorem ipsum dolor sit amet', '3', '<p>\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</span></p>\r\n', 'Yes', '', 3545, 434, '6000000000', 565, 'Quarterly', '2013-05-15', '2013-08-30'),
(3, 5, 2, 5, 'Msasani', '4', '<p>\r\n	MySQL joins are hard for beginners. At least for me when I was beginner. I will try to explain the joins in the simplest possible way. Join in MySQL is a query where you can join one or more tables. For example we have two tables: products and buyers with the following structures.<br />\r\n	Table products:</p>\r\n', 'Yes', '', 3435, 45345, '5667686', 54465, 'Annual', '2013-05-15', '2019-05-30'),
(4, 6, 1, 9, 'Vusile Location', '3', '<p>\r\n	Let&#39;s first think about what we are creating. We want a standard calendar that will display dates month by month, and in this tutorial we will make it dynamic as to display the current month, and highlight the current day. But unfortunately this isn&#39;t as simple as printing out 31 days and labelling them up. Because calendars show dates preceding and succeeding the month, we need to display our data based on the day of the week that the month starts on, this is something we need to think about when designing the code. Not all months have 31 days in them either, so we need to build a system which adapts to each month.</p>\r\n', 'Yes', '', 2147483647, 675, '6765', 35335, 'Bi - Annual', '2013-01-10', '2014-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `location_images`
--

CREATE TABLE IF NOT EXISTS `location_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `location_images`
--

INSERT INTO `location_images` (`id`, `location_id`, `photo`, `caption`) VALUES
(5, 2, '84312-001.jpg', '<p>\r\n	ffwfegfew</p>\r\n'),
(6, 2, '7d7be-_DSC0195.JPG', '<p>\r\n	sffasfs</p>\r\n'),
(7, 2, '9a8e0-4bb52-6.jpg', '<p>\r\n	fsfsaf</p>\r\n'),
(8, 2, 'e07a4-4f27a-5.jpg', '<p>\r\n	fsfewfew</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `menu_order` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`,`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `page_id`, `name`, `url`, `menu_order`) VALUES
(1, 2, 'Large Format', 'Outdoor/Large_Format', 1),
(2, 2, 'Small Format', 'Outdoor/Small_Format', 2),
(3, 3, 'Point of Sales', '', 3),
(4, 3, 'Off Premise', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `slug` tinytext NOT NULL,
  `story` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `url`, `slug`, `story`, `image`, `date_created`, `date_updated`) VALUES
(2, 'This is my second news', 'This-is-my-second-news', 'Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas', '<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem q</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem q</p>\r\n', '64100-mainda.jpg', '2013-05-10 09:30:51', '0000-00-00'),
(3, 'We Can keep Testing', 'We-Can-keep-Testing', 'Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas', '<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. <img alt="" src="http://localhost/platinum/assets/grocery_crud/texteditor/ckfinder/userfiles/images/6cd12-Date.jpg" style="width: 150px; height: 184px; border-width: 2px; border-style: solid; margin: 2px; float: right;" />Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n<p>\r\n	Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</p>\r\n', '9f7ec-56678660.preview.jpg', '2013-05-10 09:32:01', '0000-00-00'),
(7, 'soluta nobis est eligendi opti', 'soluta nobis est eligendi opti', 'Facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas', '<p>\r\n	Facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas</p>\r\n<p>\r\n	Facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas</p>\r\n<p>\r\n	<img alt="" src="http://localhost/platinum/assets/grocery_crud/texteditor/ckfinder/userfiles/images/xlov.jpg" style="width: 200px; height: 122px; border-width: 5px; border-style: solid; float: right;" />Facilis est et expedita distinctio. Nam libero tempore, ct quo minus id quod maxime placeat facere possimus, omnis voluptas</p>\r\n<p>\r\n	Facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas</p>\r\n<p>\r\n	Facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas</p>\r\n', '71149-xlov.jpg', '2013-05-10 11:37:48', '0000-00-00'),
(8, ' omnis dolor repellendu Temporibus autem', ' omnis dolor repellendu Temporibus autem', 'Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas', '<p>\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, s.</span><span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">omnis voluptas assumenda est, omnis dolor repellendu</span><span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;"> Temporibus autem</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color: rgb(43, 43, 45); font-family: Geneva, Helvetica, Arial, sans-serif; font-size: 14.44444465637207px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24.44444465637207px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem</span></p>\r\n', '58032-Vibrant-&-Inspiring-Artisan-Market,-Sat-25-May-at-Oysterbay-Shopping-Centre.jpg', '2013-05-15 07:45:23', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `outdoor`
--

CREATE TABLE IF NOT EXISTS `outdoor` (
  `outdoor_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `use_id` enum('1','0','','') NOT NULL DEFAULT '1',
  `images` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`outdoor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `outdoor`
--

INSERT INTO `outdoor` (`outdoor_id`, `url`, `title`, `use_id`, `images`, `description`) VALUES
(1, 'large-Format', 'large Format', '1', '<a href="http://localhost/platinum/Admin/View_outdoor_images/1">Images</a>', '<p style="text-align: justify;">\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</p>\r\n'),
(3, 'Search-Locations', 'Search Locations', '0', '<a href="http://localhost/platinum/Admin/View_outdoor_images/3">Images</a>', '<p>\r\n	cbbgffdff</p>\r\n'),
(6, 'middle-format', 'middle format', '1', '<a href="http://localhost/platinum/Admin/View_outdoor_images/6">Images</a>', '<p>\r\n	format</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `outdoor_faces`
--

CREATE TABLE IF NOT EXISTS `outdoor_faces` (
  `face_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`face_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `outdoor_faces`
--

INSERT INTO `outdoor_faces` (`face_id`, `number`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `outdoor_location`
--

CREATE TABLE IF NOT EXISTS `outdoor_location` (
  `outdoor_location_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`outdoor_location_id`,`city_id`,`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `outdoor_sizes`
--

CREATE TABLE IF NOT EXISTS `outdoor_sizes` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `outdoor_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`size_id`,`outdoor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `outdoor_sizes`
--

INSERT INTO `outdoor_sizes` (`size_id`, `outdoor_id`, `size`, `width`, `height`) VALUES
(1, 0, '600 X 400', 600, 400),
(2, 0, '800 X 600', 800, 600),
(3, 0, '1000 X 800', 1000, 800);

-- --------------------------------------------------------

--
-- Table structure for table `search_location`
--

CREATE TABLE IF NOT EXISTS `search_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`,`city_id`,`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `signage`
--

CREATE TABLE IF NOT EXISTS `signage` (
  `signage_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` enum('op','pos','','') NOT NULL,
  PRIMARY KEY (`signage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `signage`
--

INSERT INTO `signage` (`signage_id`, `title`, `url`, `type`) VALUES
(1, 'Point of Sales', 'Point-of-Sales', 'pos'),
(2, 'Off Premise', 'Off-Premise', 'op');

-- --------------------------------------------------------

--
-- Table structure for table `signage_types`
--

CREATE TABLE IF NOT EXISTS `signage_types` (
  `synage_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` enum('op','pos','','') NOT NULL DEFAULT 'pos',
  PRIMARY KEY (`synage_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `signage_types`
--

INSERT INTO `signage_types` (`synage_type_id`, `title`, `url`, `images`, `description`, `type`) VALUES
(64, 'point of sales type 2', 'Pos-point-of-sales-type-2', '<a href="http://localhost/platinum/Admin/View_Images/64">Images</a>', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>\r\n', 'pos'),
(65, 'point of sales type 5', 'Pos-point-of-sales-type-5', '<a href="http://localhost/platinum/Admin/View_Images/65">Images</a>', '<p>\r\n	hsahshbvdsh</p>\r\n', 'pos'),
(66, 'point of sales type 3', 'Pos-point-of-sales-type-3', '<a href="http://localhost/platinum/Admin/View_Images/66">Images</a>', '<p>\r\n	hadasjdfs</p>\r\n', 'pos'),
(67, 'point of sales type 4', 'Pos-point-of-sales-type-4', '<a href="http://localhost/platinum/Admin/View_Images/67">Images</a>', '<p>\r\n	DHASHJDFASJFGDS</p>\r\n', 'pos'),
(68, 'off premise type 1', 'Op-off-premise-type-1', '<a href="http://localhost/platinum/Admin/View_Images/68">Images</a>', '<p>\r\n	sioafoasifdso</p>\r\n', 'op');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `outdoor_id` int(11) NOT NULL,
  `signage_type_id` varchar(255) NOT NULL,
  `signage_url` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `title`, `image`, `outdoor_id`, `signage_type_id`, `signage_url`, `caption`) VALUES
(140, 'Pos-point-of-sales-type-2', '0bd4c-001.jpg', 0, '64', 'Pos-point-of-sales-type-2', '<p>\r\n	dsfjdshfd</p>\r\n'),
(141, 'Pos-point-of-sales-type-5', '81794-images.jpg', 0, '65', 'Pos-point-of-sales-type-5', '<p>\r\n	aschasbdhasfasj</p>\r\n'),
(144, 'Op-off-premise-type-1', '51445-35a8b-Ca.jpg', 0, '68', 'Op-off-premise-type-1', '<p>\r\n	hacsbh</p>\r\n'),
(145, 'large-Format', '404ca-7af7f-8.jpg', 1, '', '', '<p>\r\n	hacsjs</p>\r\n'),
(146, 'Pos-point-of-sales-type-2', '9bd49-leo.jpg', 0, '64', 'Pos-point-of-sales-type-2', '<p>\r\n	HADHAGSF</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sub_pages`
--

CREATE TABLE IF NOT EXISTS `sub_pages` (
  `sub_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`sub_page_id`,`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sub_pages`
--

INSERT INTO `sub_pages` (`sub_page_id`, `page_id`, `name`, `order`) VALUES
(1, 1, 'Large Format', 1),
(2, 1, 'Small Format', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
