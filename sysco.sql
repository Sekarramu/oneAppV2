-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 04:29 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `username`, `password`) VALUES
(1, 'Sekar Ramu', 'Sekar', '1');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `applied` varchar(500) DEFAULT NULL,
  `booked` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `name`, `applied`, `booked`, `status`, `email`) VALUES
(1, 'certi1', '', 'monday', 'fail', 'arun.r01'),
(2, 'certi2', 'ys', 'no', 'q', 'arun.r01'),
(3, 'certi2', 'yska', 'no', 'q', 'arun.r01'),
(4, '', '', '', '', 'arun.r01'),
(5, '1', '', '', '', 'arun.r01'),
(5, 'afdf', 're', 'fwff', 'sdfsf', 'sanath_varanasi'),
(5, 'afdf', 're', 'fwff', 'sdfsf', 'Anshikha.Sinha');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `thoughtId` int(11) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `thoughtId`, `email`) VALUES
(1, 'answer', 1, 'sekar'),
(2, 'answer2', 1, 'sekar'),
(3, 'answer3', 2, 'sekar');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `team` varchar(500) DEFAULT NULL,
  `reportingto` varchar(500) DEFAULT NULL,
  `manager` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobileno` varchar(500) NOT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `modeoftransport` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `team`, `reportingto`, `manager`, `email`, `mobileno`, `birthday`, `modeoftransport`, `address`) VALUES
(1, 'Ganesh Sadanandam', 'SUS', 'Naween Selwyn', 'Naween Selwyn', 'Ganesh_Sadanandam', '78239 97124', '22-11-1981', 'Self - Motorbike', 'G 604,AKSHAYA METROPOLIS ,6 FLR,GST ROAD ,  MARAIMALAINAGAR,CAFE COFFEE DAY'),
(2, 'Sanath Varanasi', 'chuma', '', '', '', '', 'iii', '', ''),
(3, 'Abhay Mishra03', NULL, NULL, NULL, 'Abhay_Mishra03', '', NULL, '', ''),
(4, 'Abinaya Vijaya Raj', NULL, NULL, NULL, 'Abinaya_VijayaRaj', '', NULL, '', ''),
(5, 'Alexander Mathi', NULL, NULL, NULL, 'Alexander_Mathi', '', NULL, '', ''),
(6, 'Anshikha Sinha', NULL, NULL, NULL, 'Anshikha.Sinha', '', NULL, '', ''),
(7, 'Arnab Saha', NULL, NULL, NULL, 'Arnab.Saha06', '', NULL, '', ''),
(8, 'Arthi A.C.', '', '', '', 'arthi.ac', '', '', '', ''),
(9, 'Arun R', 'POS', '', '', 'arun.r01', '', '', '', ''),
(10, 'B Ashwin', NULL, NULL, NULL, 'b.ashwin', '', NULL, '', ''),
(11, 'Bairavi Venugopal', NULL, NULL, NULL, 'Bairavi_Venugopal', '', NULL, '', ''),
(12, 'Balachandran M01', NULL, NULL, NULL, 'Balachandran.M01', '', NULL, '', ''),
(13, 'Bharath Kumar', NULL, NULL, NULL, 'Bharath_R11', '', NULL, '', ''),
(14, 'Charanraj V01', NULL, NULL, NULL, 'Charanraj_V01', '', NULL, '', ''),
(15, 'Chinchu Tresa Kurian', NULL, NULL, NULL, 'Chinchu.Kurian', '', NULL, '', ''),
(16, 'Deepan Chakravarthy', 'SUS Enhancements Sales/Finance', 'Prathiba Jagannathan', 'Ganesh Sadanandam', 'Deepan_p01', '9566982300', '30-07-1990', 'Train', 'New No 3, 1st cross street, Periyar Nagar, Adambakkam, Chennai - 600088'),
(17, 'Delphine E', NULL, NULL, NULL, 'delphine.e', '', NULL, '', ''),
(18, 'Devi Navaneetha Krishnan', NULL, NULL, NULL, 'devi.krishnan', '', NULL, '', ''),
(19, 'Ganapathy Sundar K', NULL, NULL, NULL, 'Ganapathy_Sundar', '', NULL, '', ''),
(20, 'Geogy Valavuchirackal Thomas', NULL, NULL, NULL, 'Geogy_VT', '', NULL, '', ''),
(21, 'Hariharasudhan N', 'SUS', 'Vinoth', 'Ganesh', 'hariharasudhan_N', '9626349273', '01071993', 'Walk', ''),
(22, 'Hema Devi Pandiar', NULL, NULL, NULL, 'HemaDevi_Pandiar', '', NULL, '', ''),
(23, 'Jayabaarathi R', NULL, NULL, NULL, 'jayabaarathi.r', '', NULL, '', ''),
(24, 'Jecintha Sheela Selvaraj', NULL, NULL, NULL, 'Jecintha_Selvaraj', '', NULL, '', ''),
(25, 'Jeyandran Soundararajan', NULL, NULL, NULL, 'Jeyandran_S', '', NULL, '', ''),
(26, 'Kavitha Sendur Pandian', NULL, NULL, NULL, 'Kavitha_S32', '', NULL, '', ''),
(27, 'Kirthiga K', NULL, NULL, NULL, 'kirthiga.k', '', NULL, '', ''),
(28, 'Kothai Arunachalam', NULL, NULL, NULL, 'kothai.arunachalam', '', NULL, '', ''),
(29, 'Krishna Kandath Jayakrishnan', NULL, NULL, NULL, 'krishna.jayakrishnan', '', NULL, '', ''),
(30, 'Maitrayee Mishra', NULL, NULL, NULL, 'Maitrayee.Mishra', '', NULL, '', ''),
(31, 'Mangala R', NULL, NULL, NULL, 'Mangala_R', '', NULL, '', ''),
(32, 'Mary Kimberlin Saranya', NULL, NULL, NULL, 'Mary_Saranya', '', NULL, '', ''),
(33, 'Mohammed Mubashir', NULL, NULL, NULL, 'Mohammed_Nazimuddin', '', NULL, '', ''),
(34, 'Mohan Kumar G', NULL, NULL, NULL, 'mohankumar.g', '', NULL, '', ''),
(35, 'Mukesh S02', NULL, NULL, NULL, 'Mukesh_S02', '', NULL, '', ''),
(36, 'Naga Siva Avinash Nune', NULL, NULL, NULL, 'Naga.Nune', '', NULL, '', ''),
(37, 'Nandhagopal Manogaran', NULL, NULL, NULL, 'Nandhagopal_Udayar', '', NULL, '', ''),
(38, 'Nandini Rajasekaran04', NULL, NULL, NULL, 'Nandini_R04', '', NULL, '', ''),
(39, 'Nishant Gupta21', NULL, NULL, NULL, 'Nishant.Gupta21', '', NULL, '', ''),
(40, 'Pavethra Rajan', NULL, NULL, NULL, 'Pavethra_Rajan', '', NULL, '', ''),
(41, 'Praburaj E', NULL, NULL, NULL, 'Praburaj_E', '', NULL, '', ''),
(42, 'Prathiba Jagannathan', NULL, NULL, NULL, 'Prathiba_Jagannathan', '', NULL, '', ''),
(43, 'Priyanka Lakshman Babu', NULL, NULL, NULL, 'Priyanka_L', '', NULL, '', ''),
(44, 'Ragav Venkatesswaran', NULL, NULL, NULL, 'ragav.v', '', NULL, '', ''),
(45, 'Rajkumar Rajappa', NULL, NULL, NULL, 'Rajkumar_Rajappa', '', NULL, '', ''),
(46, 'Rajkumar Munusamy', 'SUS OPTIMIZATION', 'SANATH', 'GANESH', 'Rajkumar_Munusamy', '7299161110', '02/10/1989', 'TRAIN ', '29/10 UPPERI KULAM STREET, KANCHIPURAM'),
(47, 'Ramkumar R', NULL, NULL, NULL, 'Ramkumar.R12', '', NULL, '', ''),
(48, 'Renish Nair', 'Profit Management ', 'Vinoth R', 'Ganesh Sadanandam', 'Renish_Nair', '9886966428', '30061993', 'Walking', 'D1 block,Sixpetals,gandhi street veerapuram'),
(49, 'Ruma Priyadharshni', NULL, NULL, NULL, 'Ruma_Venkatesh', '', NULL, '', ''),
(50, 'Santhosh Arumugam', NULL, NULL, NULL, 'santhosh.arumugam', '', NULL, '', ''),
(51, 'Sathyaraja.C', NULL, NULL, NULL, 'sathyarajac', '', NULL, '', ''),
(52, 'Seetha Lakshmi', NULL, NULL, NULL, 'seethalakshmi.g01', '', NULL, '', ''),
(53, 'Sekar Ramu', 'SUS Enhancement', 'Sanath Varanasi', 'Ganesh Sadanandam', 'Sekar_Ramu', '9941881180/9884831180', '14-05-1993', 'Train', ''),
(54, 'Shabatini Kingston', 'SUS-IMS', 'Rajkumar Rajappa', 'Ganesh Sadanandam', 'Shabatini_K', '9944007259', '25th october', 'Train', ''),
(55, 'Shalini Girmaji', 'Distributed Profit Management', 'Vinoth', 'Ganesh_sadanandam', 'shalini.girmaji', '9790946939', '01121995', 'Cab', 'Avigna Celeste, Anzhur'),
(56, 'Soundariya Kumaran', NULL, NULL, NULL, 'Soundariya_Kumaran', '', NULL, '', ''),
(57, 'Sowmya Shree P', NULL, NULL, NULL, 'Sowmya_P13', '', NULL, '', ''),
(58, 'Subha Napoleon Fernando', NULL, NULL, NULL, 'Subha_Fernando', '', NULL, '', ''),
(59, 'Suvigye Saxena', NULL, NULL, NULL, 'Suvigye.Saxena', '', NULL, '', ''),
(60, 'Swarnali Kalita', NULL, NULL, NULL, 'Swarnali_Kalita', '', NULL, '', ''),
(61, 'Thella Ramya', NULL, NULL, NULL, 'Thella.Ramya', '', NULL, '', ''),
(62, 'Thirumalai Mannan', NULL, NULL, NULL, 'Thirumalai_S01', '', NULL, '', ''),
(63, 'Thiyagarajan V02', NULL, NULL, NULL, 'Thiyagarajan_V02', '', NULL, '', ''),
(64, 'Vaishali Verma', NULL, NULL, NULL, 'vaishali.verma03', '', NULL, '', ''),
(65, 'Vigneshwari Sankar', NULL, NULL, NULL, 'vigneshwari.sankar', '', NULL, '', ''),
(66, 'VinothKumarR', NULL, NULL, NULL, 'VinothKumar_R', '', NULL, '', ''),
(67, 'Yaazushi Gupta', NULL, NULL, NULL, 'yaazushi.gupta', '', NULL, '', ''),
(68, 'sekar', 'vetti boy', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`id`, `Name`, `username`, `password`, `status`) VALUES
(2, 'Sekar', 'seram1', '2', ''),
(3, 'Ganesh Sadanandam', 'Ganesh_Sadanandam', 'sysco123', ''),
(4, 'Sanath Varanasi', 'SanathReddy_Varanasi', 'sysco123', ''),
(5, 'Abhay Mishra03', 'Abhay_Mishra03', 'sysco123', ''),
(6, 'Abinaya Vijaya Raj', 'Abinaya_VijayaRaj', 'sysco123', ''),
(7, 'Alexander Mathi', 'Alexander_Mathi', 'sysco123', ''),
(8, 'Anshikha Sinha', 'Anshikha.Sinha', 'sysco123', ''),
(9, 'Arnab Saha', 'Arnab.Saha06', 'sysco123', ''),
(10, 'Arthi A.C.', 'arthi.ac', 'sysco123', ''),
(11, 'Arun R', 'arun.r01', '2', ''),
(12, 'B Ashwin', 'b.ashwin', 'sysco123', ''),
(13, 'Bairavi Venugopal', 'Bairavi_Venugopal', 'sysco123', ''),
(14, 'Balachandran M01', 'Balachandran.M01', 'sysco123', ''),
(15, 'Bharath Kumar', 'Bharath_R11', 'sysco123', ''),
(16, 'Charanraj V01', 'Charanraj_V01', 'sysco123', ''),
(17, 'Chinchu Tresa Kurian', 'Chinchu.Kurian', 'sysco123', ''),
(18, 'Deepan Chakravarthy', 'Deepan_P01', 'sysco123', ''),
(19, 'Delphine E', 'delphine.e', 'sysco123', ''),
(20, 'Devi Navaneetha Krishnan', 'devi.krishnan', 'sysco123', ''),
(21, 'Ganapathy Sundar K', 'Ganapathy_Sundar', 'sysco123', ''),
(22, 'Geogy Valavuchirackal Thomas', 'Geogy_VT', 'sysco123', ''),
(23, 'Hariharasudhan Narayanan', 'Hariharasudhan_N', 'sysco123', ''),
(24, 'Hema Devi Pandiar', 'HemaDevi_Pandiar', 'sysco123', ''),
(25, 'Jayabaarathi R', 'jayabaarathi.r', 'sysco123', ''),
(26, 'Jecintha Sheela Selvaraj', 'Jecintha_Selvaraj', 'sysco123', ''),
(27, 'Jeyandran Soundararajan', 'Jeyandran_S', 'sysco123', ''),
(28, 'Kavitha Sendur Pandian', 'Kavitha_S32', 'sysco123', ''),
(29, 'Kirthiga K', 'kirthiga.k', 'sysco123', ''),
(30, 'Kothai Arunachalam', 'kothai.arunachalam', 'sysco123', ''),
(31, 'Krishna Kandath Jayakrishnan', 'krishna.jayakrishnan', 'sysco123', ''),
(32, 'Maitrayee Mishra', 'Maitrayee.Mishra', 'sysco123', ''),
(33, 'Mangala R', 'Mangala_R', 'sysco123', ''),
(34, 'Mary Kimberlin Saranya', 'Mary_Saranya', 'sysco123', ''),
(35, 'Mohammed Mubashir', 'Mohammed_Nazimuddin', 'sysco123', ''),
(36, 'Mohan Kumar G', 'mohankumar.g', 'sysco123', ''),
(37, 'Mukesh S02', 'Mukesh_S02', 'sysco123', ''),
(38, 'Naga Siva Avinash Nune', 'Naga.Nune', 'sysco123', ''),
(39, 'Nandhagopal Manogaran', 'Nandhagopal_Udayar', 'sysco123', ''),
(40, 'Nandini Rajasekaran04', 'Nandini_R04', 'sysco123', ''),
(41, 'Nishant Gupta21', 'Nishant.Gupta21', 'sysco123', ''),
(42, 'Pavethra Rajan', 'Pavethra_Rajan', 'sysco123', ''),
(43, 'Praburaj E', 'Praburaj_E', 'sysco123', ''),
(44, 'Prathiba Jagannathan', 'Prathiba_Jagannathan', 'sysco123', ''),
(45, 'Priyanka Lakshman Babu', 'Priyanka_L', 'sysco123', ''),
(46, 'Ragav Venkatesswaran', 'ragav.v', 'sysco123', ''),
(47, 'Rajkumar Rajappa', 'Rajkumar_Rajappa', 'sysco123', ''),
(48, 'Rajkumar Munusamy', 'Rajkumar_Munusamy', 'sysco123', ''),
(49, 'Ramkumar R', 'Ramkumar.R12', 'sysco123', ''),
(50, 'Renish Nair', 'Renish_Nair', 'sysco123', ''),
(51, 'Ruma Priyadharshni', 'Ruma_Venkatesh', 'sysco123', ''),
(52, 'Santhosh Arumugam', 'santhosh.arumugam', 'sysco123', ''),
(53, 'Sathyaraja.C', 'sathyarajac', 'sysco123', ''),
(54, 'Seetha Lakshmi', 'seethalakshmi.g01', 'sysco123', ''),
(55, 'Sekar Ramu', 'Sekar_Ramu', 'sysco123', ''),
(56, 'Shabatini Kingston', 'Shabatini_K', 'sysco123', ''),
(57, 'Shalini Girmaji', 'shalini.girmaji', 'sysco123', ''),
(58, 'Soundariya Kumaran', 'Soundariya_Kumaran', 'sysco123', ''),
(59, 'Sowmya Shree P', 'Sowmya_P13', 'sysco123', ''),
(60, 'Subha Napoleon Fernando', 'Subha_Fernando', 'sysco123', ''),
(61, 'Suvigye Saxena', 'Suvigye.Saxena', 'sysco123', ''),
(62, 'Swarnali Kalita', 'Swarnali_Kalita', 'sysco123', ''),
(63, 'Thella Ramya', 'Thella.Ramya', 'sysco123', ''),
(64, 'Thirumalai Mannan', 'Thirumalai_S01', 'sysco123', ''),
(65, 'Thiyagarajan V02', 'Thiyagarajan_V02', 'sysco123', ''),
(66, 'Vaishali Verma', 'vaishali.verma03', 'sysco123', ''),
(67, 'Vigneshwari Sankar', 'vigneshwari.sankar', 'sysco123', ''),
(68, 'VinothKumarR', 'VinothKumar_R', 'sysco123', ''),
(69, 'Yaazushi Gupta', 'yaazushi.gupta', 'sysco123', '');

-- --------------------------------------------------------

--
-- Table structure for table `thoughts`
--

CREATE TABLE `thoughts` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thoughts`
--

INSERT INTO `thoughts` (`id`, `question`, `email`) VALUES
(1, 'question1', 'sekar'),
(2, 'question2', 'sekar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thoughts`
--
ALTER TABLE `thoughts`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
