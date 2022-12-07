-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 10:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdepartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `doc` date NOT NULL,
  `regno` varchar(10) NOT NULL,
  `scode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`doc`, `regno`, `scode`) VALUES
('2020-06-15', '109CS19028', '15CS31T'),
('2020-06-15', '109CS19029', '15CS31T'),
('2020-06-15', '109CS19030', '15CS31T'),
('2020-06-10', '109CS19028', '15CS31T'),
('2020-06-10', '109CS19029', '15CS31T'),
('2020-06-10', '109CS19045', '15CS31T'),
('2020-09-01', '109CS19030', '15CS31T'),
('2020-09-01', '109CS19031', '15CS31T'),
('2020-09-02', '109CS19030', '15CS31T'),
('2020-09-02', '109CS19031', '15CS31T'),
('2020-09-01', '109CS19044', '15CS32T'),
('2020-09-02', '109CS19044', '15CS32T'),
('2020-09-03', '109CS19044', '15CS32T'),
('2020-09-04', '109CS19045', '15CS32T'),
('2020-09-05', '109CS19045', '15CS32T'),
('2020-09-06', '109CS19045', '15CS32T'),
('2020-09-07', '109CS19045', '15CS32T'),
('2020-09-11', '109CS19028', '15CS31T'),
('2020-09-11', '109CS19044', '15CS31T'),
('2020-09-12', '109CS19028', '15CS31T'),
('2020-09-12', '109CS19044', '15CS31T'),
('2020-09-13', '109CS19028', '15CS31T'),
('2020-09-13', '109CS19044', '15CS31T'),
('2020-09-14', '109CS19028', '15CS31T'),
('2020-09-14', '109CS19044', '15CS31T'),
('2020-09-15', '109CS19028', '15CS31T'),
('2020-09-15', '109CS19044', '15CS31T'),
('2020-09-16', '109CS19028', '15CS31T'),
('2020-09-16', '109CS19044', '15CS31T'),
('2020-09-17', '109CS19028', '15CS31T'),
('2020-09-17', '109CS19044', '15CS31T'),
('2020-09-18', '109CS19028', '15CS31T'),
('2020-09-19', '109CS19028', '15CS31T'),
('2020-09-19', '109CS19044', '15CS31T'),
('2020-09-20', '109CS19028', '15CS31T'),
('2020-09-20', '109CS19044', '15CS31T'),
('2020-09-21', '109CS19028', '15CS31T'),
('2020-09-21', '109CS19044', '15CS31T'),
('2020-09-22', '109CS19028', '15CS31T'),
('2020-09-22', '109CS19044', '15CS31T'),
('2020-09-23', '109CS19028', '15CS31T'),
('2020-09-23', '109CS19044', '15CS31T'),
('2020-09-24', '109CS19028', '15CS31T'),
('2020-09-24', '109CS19044', '15CS31T'),
('2020-09-25', '109CS19028', '15CS31T'),
('2020-09-25', '109CS19044', '15CS31T'),
('2020-09-26', '109CS19028', '15CS31T'),
('2020-09-26', '109CS19044', '15CS31T'),
('2020-09-27', '109CS19028', '15CS31T'),
('2020-09-27', '109CS19044', '15CS31T'),
('2020-09-28', '109CS19028', '15CS31T'),
('2020-09-28', '109CS19044', '15CS31T'),
('2020-09-29', '109CS19028', '15CS31T'),
('2020-09-29', '109CS19044', '15CS31T'),
('2020-09-30', '109CS19028', '15CS31T'),
('2020-09-30', '109CS19044', '15CS31T'),
('2020-10-01', '109CS19028', '15CS31T'),
('2020-10-01', '109CS19044', '15CS31T'),
('2020-10-02', '109CS19028', '15CS31T'),
('2020-10-03', '109CS19028', '15CS31T'),
('2020-10-04', '109CS19028', '15CS31T'),
('2020-10-05', '109CS19028', '15CS31T'),
('2020-10-06', '109CS19028', '15CS31T'),
('2020-10-06', '109CS19044', '15CS31T'),
('2020-10-07', '109CS19028', '15CS31T'),
('2020-10-07', '109CS19044', '15CS31T'),
('2020-09-26', '109CS19028', '15ME31T'),
('2020-09-26', '109CS19044', '15ME31T'),
('2020-09-29', '109ME19028', '15ME31T'),
('2020-09-29', '109ME19029', '15ME31T'),
('2020-09-03', '109ME19032', '15ME31T'),
('2020-09-03', '109ME19044', '15ME31T'),
('2020-09-30', '109ME19028', '15ME31T'),
('2020-09-30', '109ME19045', '15ME31T'),
('2020-09-30', '109CE19003', '15CE33T '),
('2020-09-30', '109CE19061', '15CE33T '),
('2020-09-30', '109CE19062', '15CE33T '),
('2020-10-01', '109CE19003', '15CE33T '),
('2020-10-01', '109CE19061', '15CE33T '),
('2020-10-01', '109CE19062', '15CE33T '),
('2020-10-02', '109CE19007', '15CE33T '),
('2020-10-02', '109CE19060', '15CE33T ');

-- --------------------------------------------------------

--
-- Table structure for table `classtakendate`
--

CREATE TABLE `classtakendate` (
  `doc` date NOT NULL,
  `scode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtakendate`
--

INSERT INTO `classtakendate` (`doc`, `scode`) VALUES
('2020-06-15', '15CS31T'),
('2020-06-10', '15CS31T'),
('2020-09-01', '15CS31T'),
('2020-09-02', '15CS31T'),
('2020-09-01', '15CS32T'),
('2020-09-02', '15CS32T'),
('2020-09-03', '15CS32T'),
('2020-09-04', '15CS32T'),
('2020-09-05', '15CS32T'),
('2020-09-06', '15CS32T'),
('2020-09-07', '15CS32T'),
('2020-09-11', '15CS31T'),
('2020-09-12', '15CS31T'),
('2020-09-13', '15CS31T'),
('2020-09-14', '15CS31T'),
('2020-09-15', '15CS31T'),
('2020-09-16', '15CS31T'),
('2020-09-17', '15CS31T'),
('2020-09-18', '15CS31T'),
('2020-09-19', '15CS31T'),
('2020-09-20', '15CS31T'),
('2020-09-21', '15CS31T'),
('2020-09-22', '15CS31T'),
('2020-09-23', '15CS31T'),
('2020-09-24', '15CS31T'),
('2020-09-25', '15CS31T'),
('2020-09-26', '15CS31T'),
('2020-09-27', '15CS31T'),
('2020-09-28', '15CS31T'),
('2020-09-29', '15CS31T'),
('2020-09-30', '15CS31T'),
('2020-10-01', '15CS31T'),
('2020-10-02', '15CS31T'),
('2020-10-03', '15CS31T'),
('2020-10-04', '15CS31T'),
('2020-10-05', '15CS31T'),
('2020-10-06', '15CS31T'),
('2020-10-07', '15CS31T'),
('2020-09-26', '15ME31T'),
('2020-09-29', '15ME31T'),
('2020-09-03', '15ME31T'),
('2020-09-30', '15ME31T'),
('2020-09-30', '15CE33T '),
('2020-10-01', '15CE33T '),
('2020-10-02', '15CE33T ');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(1) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `ecode` varchar(10) NOT NULL,
  `branch` varchar(2) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fname`, `mname`, `lname`, `ecode`, `branch`, `role`, `password`) VALUES
('veeranna', 'v', 'k', '1111', 'ec', 'hod', 'abc'),
('nagaraj', 'y', 'madri', '144372', 'cs', 'faculty', 'abc'),
('shivaraj', 'c', 'haligodi', '22222', 'ec', 'faculty', 'abc'),
('prashanth', 'v', 'bijapure', '33333', 'cs', 'faculty', 'abc'),
('manjula', 'm', 'moolbarthi', '55555', 'cs', 'hod', 'abc'),
('bharakath', 'i', 'hussain', '66666', 'me', 'hod', 'abc'),
('arvind', 'r', 'rangdal', '77777', 'me', 'faculty', 'abc'),
('prashanth', 'v', 'bijapure', '99999', 'cs', 'admin', 'abc'),
('basavaraj', 'c', 'c', '143040', 'ce', 'hod', 'abc'),
('shanmuappa', 's', 'patil', '14412', 'ce', 'faculty', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`filename`) VALUES
('Desert.jpg'),
('Desert.jpg'),
('Desert.jpg'),
('Desert.jpg'),
('Chrysanthemum.jpg'),
('Chrysanthemum.jpg'),
('nagarajpassport.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sem` int(1) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(2) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sem`, `regno`, `name`, `branch`, `mobile`) VALUES
(0, '109CS17001', 'AKSHTA', 'cs', 0),
(5, '109CS17013', 'GANESH', 'cs', 1111111),
(5, '109CS17025', 'NAFEESHA ALAM', 'cs', 1111111),
(5, '109CS18006', 'AKHELESH REDDY', 'cs', 1111111),
(5, '109CS18009', 'ANJALI R KULKARNI', 'cs', 1111111),
(5, '109CS18010', 'ANKUSH', 'cs', 1111111),
(5, '109CS18013', 'BABURAO', 'cs', 1111111),
(5, '109CS18014', 'BHAGYASHREE   S', 'cs', 1111111),
(5, '109CS18015', 'BHAGYASHREE   M', 'cs', 1111111),
(5, '109CS18018', 'FAIZ AHMED', '11', 0),
(5, '109CS18019', 'GURU JADHAV', '11', 0),
(5, '109CS18020', 'GURURAJ', 'cs', 1111111),
(5, '109CS18021', 'HAMEED', 'cs', 1111111),
(5, '109CS18023', 'MAHADEVAPPA A SHABADI', 'cs', 1111111),
(5, '109CS18024', 'MANJUNATH', 'cs', 1111111),
(5, '109CS18025', 'MD SABEEL', 'cs', 1111111),
(5, '109CS18027', 'MOHAMMED INAYATH', 'cs', 1111111),
(5, '109CS18028', 'MOHAMMED UMAIR SHAIKH', 'cs', 1111111),
(5, '109CS18029', 'MOHEMMAD OWAIZ ALI', 'cs', 1111111),
(5, '109CS18033', 'POOJA P PATOLI', 'cs', 1111111),
(5, '109CS18034', 'PRAJWAL S NILOOR', 'cs', 1111111),
(5, '109CS18036', 'RADHIKA', 'cs', 1111111),
(5, '109CS18037', 'RASHMI', 'cs', 1111111),
(5, '109CS18038', 'ROHEETH MEHINDRAKAR', 'cs', 1111111),
(5, '109CS18039', 'SAGAR', 'cs', 1111111),
(5, '109CS18042', 'SEEMA M', 'cs', 1111111),
(5, '109CS18043', 'SHAHANA ANJUM', 'cs', 1111111),
(5, '109CS18045', 'SHARAVAN KUMAR', 'cs', 1111111),
(5, '109CS18046', 'SHILPARANI', 'cs', 1111111),
(5, '109CS18047', 'SHIVANI', 'cs', 1111111),
(5, '109CS18048', 'SHRUSTI', 'cs', 1111111),
(5, '109CS18049', 'SHWETA', 'cs', 1111111),
(5, '109CS18050', 'SOURABH SHANKARLING DHANSHETTY', 'cs', 1111111),
(5, '109CS18052', 'SUJATA', 'cs', 1111111),
(5, '109CS18053', 'SURYAKANT', 'cs', 1111111),
(5, '109CS18055', 'SYED MOHAMMAD RAFEEQ', 'cs', 1111111),
(5, '109CS18056', 'VEERENDRA PATIL', 'cs', 1111111),
(5, '109CS18057', 'VEERESH', 'cs', 1111111),
(5, '109CS18058', 'VIDYASHREE', 'cs', 1111111),
(5, '109CS18059', 'VIJAY', 'cs', 1111111),
(5, '109CS18060', 'VIKRAM', 'cs', 1111111),
(3, '109CS19028', 'MANOJKUMAR', 'cs', 1111111),
(3, '109CS19029', 'MD DANISH', 'cs', 1111111),
(3, '109CS19030', 'MD HAROON RASHEED', 'cs', 1111111),
(3, '109CS19031', 'MOHAMMED NADEEM', 'cs', 1111111),
(3, '109CS19032', 'MOHAMMED SAMEER', 'cs', 1111111),
(3, '109CS19033', 'MOHAMMED TOUQEER JUNAIDI', 'cs', 1111111),
(3, '109CS19034', 'MOHD JUNAID AHMED', 'cs', 1111111),
(3, '109CS19035', 'MOHD MUZZAMMIL', 'cs', 1111111),
(3, '109CS19036', 'MOUNESH PANCHAL', 'cs', 1111111),
(3, '109CS19037', 'NAGARAJ', 'cs', 1111111),
(3, '109CS19038', 'NANDINI', 'cs', 1111111),
(3, '109CS19039', 'PRAJWAL', 'cs', 1111111),
(3, '109CS19040', 'PRASHANT', 'cs', 1111111),
(3, '109CS19042', 'RANGA', 'cs', 1111111),
(3, '109CS19043', 'ROHAN MEHINDRAKAR', 'cs', 1111111),
(3, '109CS19044', 'RUDRAPPA', 'cs', 1111111),
(3, '109CS19045', 'SAFAMARWA', 'cs', 1111111),
(3, '109ME19028', 'MANOJ', 'ME', 1111111),
(3, '109ME19029', 'ASHOK', 'ME', 1111111),
(3, '109ME19030', 'MD  RASHEED', 'ME', 1111111),
(3, '109ME19031', ' NADEEM', 'ME', 1111111),
(3, '109ME19032', ' SAMEER', 'ME', 1111111),
(3, '109ME19033', 'MOHAMMED', 'ME', 1111111),
(3, '109ME19034', 'MOHD  AHMED', 'ME', 1111111),
(3, '109ME19035', 'ZAMMIL', 'ME', 1111111),
(3, '109ME19036', 'MOUNESH ', 'ME', 1111111),
(3, '109ME19037', 'NAGARAJ', 'ME', 1111111),
(3, '109ME19038', 'NANDINI', 'ME', 1111111),
(3, '109ME19039', 'PRAJWAL', 'ME', 1111111),
(3, '109ME19040', 'PRAHASH', 'ME', 1111111),
(3, '109ME19042', 'RANGARAJ', 'ME', 1111111),
(3, '109ME19043', 'ROHAN ', 'ME', 1111111),
(3, '109ME19044', 'RAGAPPA', 'ME', 1111111),
(3, '109ME19045', 'SAFAMARWA', 'ME', 1111111),
(3, '109CE19002', 'AKASH', 'ce', 222222),
(3, '109CE19003', 'AMULYA', 'ce', 222222),
(3, '109CE19004', 'ANMOL B GOURE', 'ce', 222222),
(3, '109CE19005', 'ANUPRIYA MALGE', 'ce', 222222),
(3, '109CE19007', 'ARPITA', 'ce', 222222),
(3, '109CE19008', 'ARUNKUMAR', 'ce', 222222),
(3, '109CE19009', 'BEERALING KALLUR', 'ce', 222222),
(3, '109CE19010', 'BHAGYAVANTI', 'ce', 222222),
(3, '109CE19011', 'BHARATH', 'ce', 222222),
(3, '109CE19012', 'BHAVANA', 'ce', 222222),
(3, '109CE19013', 'DARSHAN KUMAR', 'ce', 222222),
(3, '109CE19014', 'DEVARAJ', 'ce', 222222),
(3, '109CE19015', 'ESHWAR', 'ce', 222222),
(3, '109CE19016', 'ESHWAR', 'ce', 222222),
(3, '109CE19017', 'HANAMANT', 'ce', 222222),
(3, '109CE19018', 'KIRAN', 'ce', 222222),
(3, '109CE19019', 'KIRANKUMARI KEMPE', 'ce', 222222),
(3, '109CE19020', 'MALASHREE', 'ce', 222222),
(3, '109CE19021', 'MALLIKARJUN', 'ce', 222222),
(3, '109CE19022', 'MANIK PRABHU', 'ce', 222222),
(3, '109CE19023', 'MEGHA', 'ce', 222222),
(3, '109CE19024', 'MITHUN', 'ce', 222222),
(3, '109CE19025', 'MOHAMMED TALHA', 'ce', 222222),
(3, '109CE19026', 'NAGESH', 'ce', 222222),
(3, '109CE19027', 'NARENDRA S B', 'ce', 222222),
(3, '109CE19028', 'PRAJWAL', 'ce', 222222),
(3, '109CE19029', 'PRAJWAL AURADI', 'ce', 222222),
(3, '109CE19031', 'PRATIBHA', 'ce', 222222),
(3, '109CE19032', 'PREMA', 'ce', 222222),
(3, '109CE19033', 'PRITHVIRAJ B', 'ce', 222222),
(3, '109CE19034', 'PRIYA', 'ce', 222222),
(3, '109CE19035', 'RADHIKA', 'ce', 222222),
(3, '109CE19037', 'REVANASIDDAPPA', 'ce', 222222),
(3, '109CE19038', 'RITIK', 'ce', 222222),
(3, '109CE19039', 'SABUREDDY', 'ce', 222222),
(3, '109CE19040', 'SACHIN', 'ce', 222222),
(3, '109CE19041', 'SACHIN R', 'ce', 222222),
(3, '109CE19042', 'SAGAR', 'ce', 222222),
(3, '109CE19043', 'SAGAR BHIMASHANKAR \n DHARMAVADI', 'ce', 222222),
(3, '109CE19044', 'SAIREDDY', 'ce', 222222),
(3, '109CE19045', 'SATEESH KUMAR', 'ce', 222222),
(3, '109CE19046', 'SHANKAR', 'ce', 222222),
(3, '109CE19047', 'SHANTABAI', 'ce', 222222),
(3, '109CE19048', 'SHARAN', 'ce', 222222),
(3, '109CE19049', 'SHARANABASAPPA', 'ce', 222222),
(3, '109CE19050', 'SHARANABASAPPA PATIL', 'ce', 222222),
(3, '109CE19051', 'SHARANABASU', 'ce', 222222),
(3, '109CE19053', 'SHIVAKUMAR', 'ce', 222222),
(3, '109CE19054', 'SHIVAPRASAD', 'ce', 222222),
(3, '109CE19055', 'SHIVASHANKAR', 'ce', 222222),
(3, '109CE19056', 'SHREEKANT TAMMAN', 'ce', 222222),
(3, '109CE19057', 'SHRI VALLABH', 'ce', 222222),
(3, '109CE19058', 'SHRIPAD', 'ce', 222222),
(3, '109CE19059', 'SRUSHTI PARMESHWAR\n BHUSANOOR', 'ce', 222222),
(3, '109CE19060', 'VIJAYALAXMEE', 'ce', 222222),
(3, '109CE19061', 'VISHAL', 'ce', 222222),
(3, '109CE19062', 'VISHAL REDDY', 'ce', 222222),
(5, '109CE17006', 'AMBIKA', 'ce', 66666),
(5, '109CE18001', 'ABDUL RAZAK', 'ce', 66666),
(5, '109CE18002', 'ABHISHEK', 'ce', 66666),
(5, '109CE18003', 'ADITYA', 'ce', 66666),
(5, '109CE18004', 'AKASH', 'ce', 66666),
(5, '109CE18006', 'AKHILESH', 'ce', 66666),
(5, '109CE18007', 'AKHILESH BHARMASHETTY', 'ce', 66666),
(5, '109CE18009', 'ANANDA', 'ce', 66666),
(5, '109CE18010', 'ANIL KUMAR', 'ce', 66666),
(5, '109CE18011', 'ARCHANA', 'ce', 66666),
(5, '109CE18014', 'AVINASH', 'ce', 66666),
(5, '109CE18015', 'AVINASH', 'ce', 66666),
(5, '109CE18016', 'BHAGESH', 'ce', 66666),
(5, '109CE18017', 'BHAGESHA JAGIRADAR', 'ce', 66666),
(5, '109CE18018', 'BHARATKUMAR', 'ce', 66666),
(5, '109CE18019', 'CHETAN C SURYAVANSHI', 'ce', 66666),
(5, '109CE18020', 'DEVINDRA', 'ce', 66666),
(5, '109CE18021', 'GURURAJ', 'ce', 66666),
(5, '109CE18022', 'ISHWAR', 'ce', 66666),
(5, '109CE18023', 'KANAKADAS', 'ce', 66666),
(5, '109CE18024', 'LAXMI', 'ce', 66666),
(5, '109CE18025', 'LOKESH', 'ce', 66666),
(5, '109CE18026', 'MAHAMMAD KASIM', 'ce', 66666),
(5, '109CE18027', 'MAHENDRAREDDY', 'ce', 66666),
(5, '109CE18029', 'MALLIKARJUN', 'ce', 66666),
(5, '109CE18030', 'MALLINATH', 'ce', 66666),
(5, '109CE18032', 'MEGHA', 'ce', 66666),
(5, '109CE18033', 'MEGHANA', 'ce', 66666),
(5, '109CE18034', 'MOHAN', 'ce', 66666),
(5, '109CE18036', 'NAMITA', 'ce', 66666),
(5, '109CE18037', 'NAVEEN', 'ce', 66666),
(5, '109CE18038', 'PARAMESHWAR', 'ce', 66666),
(5, '109CE18039', 'PARVATI', 'ce', 66666),
(5, '109CE18040', 'PAVITRA', 'ce', 66666),
(5, '109CE18041', 'PRAGATHI P HAZARE', 'ce', 66666),
(5, '109CE18042', 'PRAMOD', 'ce', 66666),
(5, '109CE18043', 'PRAVEEN', 'ce', 66666),
(5, '109CE18045', 'RAHUL', 'ce', 66666),
(5, '109CE18046', 'RANJITA', 'ce', 66666),
(5, '109CE18047', 'SACHIN', 'ce', 66666),
(5, '109CE18048', 'SAKSHI MALLALLIKAR', 'ce', 66666),
(5, '109CE18049', 'SAMARTH MORDE', 'ce', 66666),
(5, '109CE18050', 'SHAIK SHADAB DANIYAL', 'ce', 66666),
(5, '109CE18051', 'SHEELA', 'ce', 66666),
(5, '109CE18053', 'SHREYAS SUNIL UKHANDE', 'ce', 66666),
(5, '109CE18054', 'SHRIKANT', 'ce', 66666),
(5, '109CE18055', 'SIDDAMMA', 'ce', 66666),
(5, '109CE18056', 'SIDDHAROODHA', 'ce', 66666),
(5, '109CE18057', 'SIDDHAROODHA', 'ce', 66666),
(5, '109CE18059', 'SYED SAMEER', 'ce', 66666),
(5, '109CE18060', 'TAJODDIN', 'ce', 66666),
(5, '109CE18061', 'VIJAY BIRADAR', 'ce', 66666),
(5, '109CE18062', 'VIJAYLAXMI', 'ce', 66666),
(5, '109CE18063', 'YOGESH', 'ce', 66666),
(5, '109CE19301', 'ABHISHEK', 'ce', 66666),
(5, '109CE19302', 'AMARNATH', 'ce', 66666),
(5, '109CE19303', 'PRASHANT', 'ce', 66666),
(5, '109CE19304', 'PRASHANTH', 'ce', 66666),
(5, '109CE19305', 'RAHUL', 'ce', 66666),
(5, '109CE19306', 'SONAKSHI', 'ce', 66666),
(5, '115CE18051', 'SHIVARAJ', 'ce', 66666),
(5, '117CE18023', 'MANIKANTA', 'ce', 66666),
(5, '166CE18039', 'PAVAN', 'ce', 66666),
(5, '109EC17002', 'AKASH B ZALKI', 'ec', 3333),
(5, '109EC17017', 'K NARSIMHA', 'ec', 3333),
(5, '109EC17027', 'MD YASEEN', 'ec', 3333),
(5, '109EC17043', 'SANTOSH', 'ec', 3333),
(5, '109EC17045', 'SARVESH S BIRADAR', 'ec', 3333),
(5, '109EC18002', 'AFREENBANU', 'ec', 3333),
(5, '109EC18003', 'AJAY', 'ec', 3333),
(5, '109EC18004', 'AKASH', 'ec', 3333),
(5, '109EC18006', 'AKASH R KORE', 'ec', 3333),
(5, '109EC18007', 'AKHILA', 'ec', 3333),
(5, '109EC18008', 'AKKAMAHADEVI', 'ec', 3333),
(5, '109EC18009', 'AKSHAYA SING THAKUR', 'ec', 3333),
(5, '109EC18010', 'ASHWINI MALGE', 'ec', 3333),
(5, '109EC18014', 'CHETAN', 'ec', 3333),
(5, '109EC18015', 'CHETANA', 'ec', 3333),
(5, '109EC18017', 'HEMALATA', 'ec', 3333),
(5, '109EC18018', 'JEEVANKUMAR', 'ec', 3333),
(5, '109EC18019', 'KAVERI S', 'ec', 3333),
(5, '109EC18021', 'KIRANKUMAR BHAGELLI', 'ec', 3333),
(5, '109EC18025', 'MANIKANTH PATTAR', 'ec', 3333),
(5, '109EC18026', 'MD FAISAL', 'ec', 3333),
(5, '109EC18027', 'MD ZEESHAN', 'ec', 3333),
(5, '109EC18028', 'MD ZOHEB KHAN', 'ec', 3333),
(5, '109EC18031', 'PALLAVI', 'ec', 3333),
(5, '109EC18032', 'PRATHAM', 'ec', 3333),
(5, '109EC18033', 'PRATHVIRAJ', 'ec', 3333),
(5, '109EC18036', 'RAKESH', 'ec', 3333),
(5, '109EC18037', 'RAMESHA', 'ec', 3333),
(5, '109EC18038', 'RANJEETA', 'ec', 3333),
(5, '109EC18043', 'SAMEENA', 'ec', 3333),
(5, '109EC18046', 'SHARANU', 'ec', 3333),
(5, '109EC18047', 'SHIVAKUMAR', 'ec', 3333),
(5, '109EC18048', 'SHIVALEELA', 'ec', 3333),
(5, '109EC18049', 'SHIVALINGAPPA BIRADAR', 'ec', 3333),
(5, '109EC18050', 'SHIVANAND', 'ec', 3333),
(5, '109EC18051', 'SIDRAMAYYA', 'ec', 3333),
(5, '109EC18052', 'SRINIVAS', 'ec', 3333),
(5, '109EC18053', 'SUDARSHAN', 'ec', 3333),
(5, '109EC18054', 'SUKANYA', 'ec', 3333),
(5, '109EC18056', 'SUSHMA', 'ec', 3333),
(5, '109EC18057', 'SWATI', 'ec', 3333),
(5, '109EC18058', 'SWATI', 'ec', 3333),
(5, '109EC18060', 'VAISHALI', 'ec', 3333),
(5, '109EC18062', 'VISHAL RAO DESHMUKH', 'ec', 3333),
(5, '109EC18201', 'CHETAN', 'ec', 3333),
(5, '109EC19301', 'ABHISHEK D NAGARAJ', 'ec', 3333),
(5, '109EC19302', 'AMIRSAB MAHABOOB SAB', 'ec', 3333),
(5, '109EC19303', 'ARUN MALLESHAPPA HUNGUND', 'ec', 3333),
(5, '109EC19304', 'LATIFKHAN FAYAZKHAN', 'ec', 3333),
(5, '109EC19305', 'RAVIKIRAN NANDAPPA', 'ec', 3333),
(5, '109EC19306', 'REVANSIDDAYYA SANGAYYA SWAMI', 'ec', 3333),
(5, '109EC19307', 'VIKRAM SAYAPPA', 'ec', 3333),
(0, '', '', '', 0),
(0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjectalloted`
--

CREATE TABLE `subjectalloted` (
  `fcode` varchar(10) NOT NULL,
  `scode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectalloted`
--

INSERT INTO `subjectalloted` (`fcode`, `scode`) VALUES
('77777', '15ME31T'),
('66666', '15ME32T'),
('14412', '15CE33T '),
('14412', '15CE52T');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sem` int(1) NOT NULL,
  `branch` varchar(2) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sem`, `branch`, `scode`, `sname`) VALUES
(0, 'cs', '15SC01T', 'ENGG MATHS-I'),
(1, 'cs', '15CS03T', 'APP SCIENCE'),
(1, 'cs', '15EC01T', 'CEEE'),
(1, 'cs', '15SC06P', 'SCIENCE LAB'),
(1, 'cs', '15EC02P', 'BEEE LAB'),
(1, 'cs', '15CS11T', 'BCS LAB'),
(3, 'cs', '15CS31T', 'C-PRG'),
(3, 'cs', '15CS32T', 'OS'),
(3, 'cs', '15CS33T', 'DBMS'),
(3, 'cs', '15CS34T', 'CN'),
(3, 'cs', '15CS35P', 'C-LAB'),
(3, 'cs', '15CS36P', 'DBMS LAB'),
(3, 'cs', '15CS37P', 'LINUX LAB'),
(5, 'cs', '15CS51T', 'SE'),
(5, 'cs', '15CS52T', 'WP'),
(5, 'cs', '15CS53T', 'DM'),
(5, 'cs', '15CS54T', 'GC'),
(5, 'cs', '15CS55P', 'WP LAB'),
(5, 'cs', '15CS56P', 'PL/SQL'),
(5, 'cs', '15CS57P', 'PP LAB'),
(5, 'cs', '15CS58P', 'PW-I'),
(3, 'ec', '15EC32T', 'de'),
(3, 'ec', '15EC33T', 'dsp'),
(3, 'ec', '15EC34T', 'adc'),
(3, 'ec', '15EC35P', 'de-LAB'),
(3, 'ec', '15EC36P', 'dsp LAB'),
(3, 'ec', '15EC37P', 'LINUX LAB'),
(1, 'ce', '15CE01E ', ' Communication Skills in English'),
(1, 'ce', '15SC01M ', 'Engineering Mathematics-I'),
(1, 'ce', '15CE11T ', 'Materials of construction '),
(1, 'ce', '15CE12D', ' Engineering Drawing-I '),
(1, 'ce', '15CE13P ', 'Basic Computer Skills Lab'),
(1, 'ce', '15CE14P', 'Materials of construction Lab'),
(2, 'ce', '15SC02M', 'Engineering Mathematics - II'),
(2, 'ce', '15SC03S', ' Applied science  '),
(2, 'ce', '15CE21T ', 'Surveying-I '),
(2, 'ce', '15CE22D', 'Engineering Drawing-II'),
(2, 'ce', '15SC04P ', ' Applied Science Lab  '),
(2, 'ce', '15CE23P', ' Surveying Practice-I'),
(3, 'ce', '15CE31T ', 'Engineering Mechanics & Strength of Materials'),
(3, 'ce', '15CE32T ', 'Water supply Engineering'),
(3, 'ce', '15CE33T ', ' Surveying-II'),
(3, 'ce', '15CE34T ', 'Construction Technology'),
(3, 'ce', '15CE35D', 'Building Planning and Drawing'),
(3, 'ce', '15CE36P ', 'Surveying Practice-II '),
(3, 'ce', '15CE37P ', 'Basic CAD in Civil Engg'),
(4, 'ce', '15CE41T', 'Hydraulics '),
(4, 'ce', '15CE42T', 'Sanitary Engineering '),
(4, 'ce', '15CE43T', 'Concrete Technology '),
(4, 'ce', '15CE44T', 'Professional Ethics & Indian Constitution'),
(4, 'ce', '15CE45P', 'Soil &Material Testing lab'),
(4, 'ce', '15CE46P', 'Comp. Aided Bldg Planning & Drawing'),
(4, 'ce', '15CE47P', 'Hydraulics & Environmental Lab'),
(5, 'ce', '15CE51T', ' Design of RCC '),
(5, 'ce', '15CE52T', 'Water Resources Engineering'),
(5, 'ce', '15CE53T', ' Estimating & Costing   '),
(5, 'ce', '15CE54T', 'Transportation Engineering'),
(5, 'ce', '15CE55D', ' Irrigation and Bridge Drawing'),
(5, 'ce', '15CE56P', ' Construction Practice '),
(5, 'ce', '15CE57P', 'Professional Practice '),
(5, 'ce', '15CE58P', 'PROJECT WORK-I'),
(6, 'ce', '15CE61T', 'Design of Steel & Masonary Structures'),
(6, 'ce', '15CE62T', ' Project Management and Valuation'),
(6, 'ce', '15CE64P', 'Computer Application Lab'),
(6, 'ce', '15CE65P', 'Extensive Survey Camp/Project'),
(6, 'ce', '15CE66P', ' Project Work-II '),
(6, 'ce', '15CE67P', '**In-plant Training'),
(6, 'ce', '15CE63A ', 'Town Planning '),
(6, 'ce', '15CE63C ', ' Solid Waste Management'),
(6, 'ce', '15CE63B  ', ' Geo Technical Engineering '),
(6, 'ce', '15CE63F ', 'Environmental Impact Assessment'),
(6, 'ce', '15CE63G', 'Theory of Structures'),
(1, 'ec', '15SC02M', 'Engineering Mathematics - II'),
(1, 'ec', '15CPO1E', 'Communication skills in English'),
(1, 'ec', '15EC21T', 'Basics of semiconductor devices'),
(2, 'ec', '15EC22P', 'Semiconductor devices Lab'),
(2, 'ec', '15EC23P', 'Digital electronics lab-I'),
(2, 'ec', '15EC24P', 'Mathematical simulation lab'),
(4, 'ec', '15EC41T', 'Professional ethics and indian constitution'),
(4, 'ec', '15EC42T', 'Microcontrollers and Its Applications'),
(4, 'ec', '15EC43T', 'Digital Communication'),
(4, 'ec', '15EC44T', 'Data communication & Networks'),
(4, 'ec', '15EC45P', 'Professional practice lab'),
(4, 'ec', '15EC46P', 'Microcontrollers and Its Applications Lab'),
(4, 'ec', '15EC47P', 'Digital Communication and Networking  Lab'),
(6, 'ec', '15EC61T', 'Industrial Automation '),
(6, 'ec', '15EC62T', 'Embedded Systems'),
(6, 'ec', '15EC63A', 'Medical Electronics'),
(6, 'ec', '15EC64P', 'IA LAB'),
(6, 'ec', '15EC65P', 'Verilog Lab'),
(6, 'ec', '15EC66P', 'Project Work'),
(6, 'ec', '15EC67P', 'Inplant training Lab'),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tattendance`
--

CREATE TABLE `tattendance` (
  `tdate` date NOT NULL,
  `scode` varchar(10) NOT NULL,
  `regno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `regno` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `co1` float NOT NULL,
  `co2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `regno` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `co1` float NOT NULL,
  `co2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test3`
--

CREATE TABLE `test3` (
  `regno` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `co1` float NOT NULL,
  `co2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testattendance`
--

CREATE TABLE `testattendance` (
  `regno` varchar(10) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `tdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmarks`
--

CREATE TABLE `tmarks` (
  `co1` float NOT NULL,
  `co2` float NOT NULL,
  `name` varchar(30) NOT NULL,
  `regno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
