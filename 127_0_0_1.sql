-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 07:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_management`
--
CREATE DATABASE IF NOT EXISTS `hostel_management` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel_management`;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `Att_id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`Att_id`, `Student_id`, `Date`) VALUES
(11, 201712051, '09/04/2018'),
(12, 201712082, '09/04/2018'),
(13, 201712052, '27/04/2018'),
(14, 201712051, '27/04/2018'),
(15, 201712039, '27/04/2018');

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE `bulletin` (
  `Image_id` int(11) NOT NULL,
  `Imagesrc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `Id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Student_name` varchar(20) NOT NULL,
  `Room_no` varchar(11) NOT NULL,
  `Out_date` varchar(10) NOT NULL,
  `Out_time` time NOT NULL,
  `Staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`Id`, `Student_id`, `Student_name`, `Room_no`, `Out_date`, `Out_time`, `Staff_id`) VALUES
(2, 201712082, 'Shikha', 'k217', '09/04/2018', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_id` int(11) NOT NULL,
  `City_name` varchar(20) NOT NULL,
  `State_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_id`, `City_name`, `State_id`) VALUES
(1, 'ahmedabad', 1),
(2, 'surat', 1),
(3, 'gandhinagar', 1),
(4, 'bhuj', 1),
(5, 'junagadh', 1),
(6, 'baroda', 1),
(7, 'anand', 1),
(8, 'patan', 1),
(9, 'palanpur', 1),
(10, 'bharuch', 1),
(11, 'new delhi', 2),
(12, 'faridabad', 2),
(13, 'chanakyapuri', 2),
(14, 'mumbai', 3),
(15, 'pune', 3),
(16, 'aurangabad', 3),
(17, 'dombivli', 3),
(18, 'jaipur', 4),
(19, 'udaipur', 4),
(20, 'ajmer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Type_of_complaint` int(20) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `Student_id`, `Type_of_complaint`, `Description`, `Date`, `Status`) VALUES
(1, 201712051, 3, 'water shortage', '07/01/2018', 1),
(2, 201712052, 2, 'blinking light.', '31/01/2018', 1),
(3, 201712039, 2, 'broken table', '22/02/2018', 0),
(4, 201712102, 1, 'Student of k311 is making noise', '21/01/2018', 1),
(5, 201712089, 3, 'wash room not clean of 1st floor', '07/03/2018', 0),
(6, 201712039, 3, '1st floor', '10/04/2018', 0),
(8, 201712089, 1, 'Cleaning', '27/04/2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_id` int(11) NOT NULL,
  `Country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_id`, `Country_name`) VALUES
(1, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `Id` int(10) NOT NULL,
  `In_time` time NOT NULL,
  `In_date` varchar(15) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Courier_company` varchar(50) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Out_time` time NOT NULL,
  `Out_date` varchar(12) NOT NULL,
  `Staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`Id`, `In_time`, `In_date`, `Student_id`, `Courier_company`, `Room_no`, `Out_time`, `Out_date`, `Staff_id`) VALUES
(1, '11:00:00', '17/02/2018', 201712039, 'Blue dart', 'k302', '15:00:00', '17/02/2018', 2),
(2, '12:00:00', '20/02/2018', 201712035, 'Amazon', 'k223', '18:00:00', '20/02/2018', 3),
(3, '13:00:00', '18/03/2018', 201712051, 'SSS', 'k204', '19:00:00', '18/03/2018', 3),
(4, '12:00:00', '17/03/2018', 201712052, 'Shein', 'k302', '16:22:02', '31/03/2018', 3),
(7, '15:50:33', '31/03/2018', 201712102, 'flipkart', 'k215', '00:00:00', 'null', 1),
(8, '23:19:52', '09/04/2018', 201712089, 'Myntra', 'k223', '00:00:00', 'null', 2),
(9, '20:21:36', '27/04/2018', 201712036, 'Shein', 'k209', '00:00:00', 'null', 1),
(10, '20:22:56', '27/04/2018', 201712063, 'SSS', 'k303', '00:00:00', 'null', 1),
(11, '20:24:13', '27/04/2018', 201712102, 'SSS', 'k215', '00:00:00', 'null', 1),
(12, '20:25:14', '27/04/2018', 201712051, 'Myntra', 'K204', '00:00:00', 'null', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_id` int(10) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Purpose` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_id`, `Student_id`, `Description`, `Purpose`) VALUES
(1, 201712052, 'excessive nuisance of monkeys and cats on first floor', 'animal nuisance'),
(2, 201712051, 'we barely know other students. Organizing activities on weekend to improve connections ', 'student interaction'),
(4, 201712039, 'no response about the mosquito net drive by HMC members', 'mosquito net drive');

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

CREATE TABLE `gadget` (
  `G_id` int(11) NOT NULL,
  `G_name` varchar(20) NOT NULL,
  `G_code` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`G_id`, `G_name`, `G_code`, `Student_id`) VALUES
(1, 'laptop', 11245687, 201712082),
(2, 'speaker', 20156789, 201712035),
(3, 'cooler', 201596, 201712089);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `Guest_id` int(11) NOT NULL,
  `Staff_id` int(11) NOT NULL,
  `Guest_name` varchar(30) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Room_no` varchar(11) NOT NULL,
  `Add_line1` varchar(50) NOT NULL,
  `Add_line2` varchar(50) NOT NULL,
  `City_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`Guest_id`, `Staff_id`, `Guest_name`, `Contact_no`, `Purpose`, `Room_no`, `Add_line1`, `Add_line2`, `City_id`) VALUES
(7, 1, 'Stuti', '7537111484', 'Synapse', 'k302', 'Konark Society,near Railway Colony', 'visat', 1),
(8, 1, 'Riya', '9876548520', 'Concurs', 'k215', 'b203 Shree Rang nanocity,', 'Sargashan', 3),
(9, 1, 'Vrinda', '7418529635', 'iFest', 'k215', 'Shanti nagar Society', 'tarsali', 6),
(10, 1, 'Nidhi', '8529637413', 'Synapse', 'k207', 'Vagheshwari Society', 'Karjan', 1),
(11, 1, 'Radhika', '6549873210', 'Synapse', 'k207', 'Gujarati Society', 'Bandra', 14),
(12, 1, 'Dipal', '9637419518', 'Concurs', 'k313', 'Shakti Society', 'op road', 10),
(13, 1, 'Manavi', '7859853251', 'iFest', 'k311', 'Sawara Recidency', 'Vasna', 7),
(14, 1, 'Shivani', '8798987778', 'Synapse', 'k223', 'Parul Society', 'Amit Nagar', 5),
(15, 1, 'Nishita', '8889997772', 'TedX', 'k209', 'Tarang Society', 'Akota', 6),
(16, 1, 'Abhilasha', '9998887775', 'TedX', 'k223', 'Pancham square', 'Subhanpura', 6);

-- --------------------------------------------------------

--
-- Table structure for table `in_out`
--

CREATE TABLE `in_out` (
  `Id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `In_time` time NOT NULL,
  `In_date` varchar(10) NOT NULL,
  `Out_time` time NOT NULL,
  `Out_date` varchar(10) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Name_of_relative` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_out`
--

INSERT INTO `in_out` (`Id`, `Student_id`, `In_time`, `In_date`, `Out_time`, `Out_date`, `Place`, `Contact_no`, `Name_of_relative`) VALUES
(5, 201712051, '22:42:28', '09/04/2018', '22:34:40', '09/04/2018', 'Surat', '9877899877', 'Nainesh'),
(6, 201712052, '00:00:00', 'null', '22:43:56', '09/04/2018', 'Baroda', '9824335671', 'Jyoti'),
(7, 201712102, '00:00:00', 'null', '22:46:06', '09/04/2018', 'Bihar', '8529879514', 'Krishma'),
(8, 201712033, '08:55:46', '17/04/2018', '22:47:58', '09/04/2018', 'Rajkot', '7416548526', 'Bhavna'),
(9, 201712089, '00:00:00', 'null', '22:54:58', '09/04/2018', 'Rajkot', '8529871234', 'nita'),
(10, 201712022, '00:00:00', 'null', '21:36:54', '27/04/2018', 'Surat', '8529637416', 'Vaneeta');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_no` varchar(10) NOT NULL,
  `No_of_occupants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_no`, `No_of_occupants`) VALUES
('j311', 1),
('j312', 1),
('j313', 1),
('k204', 1),
('k207', 1),
('k209', 1),
('k215', 1),
('k223', 2),
('k302', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_id` int(11) NOT NULL,
  `Staff_name` varchar(30) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Add_line1` varchar(50) NOT NULL,
  `Add_line2` varchar(50) NOT NULL,
  `City_id` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_id`, `Staff_name`, `Contact_no`, `Add_line1`, `Add_line2`, `City_id`, `Password`, `Is_active`) VALUES
(1, 'kapila', '8962584120', 'vraj society', 'surat', 2, '123456789', 1),
(2, 'anjana', '9962458201', 'maninagar', 'ahmedabad', 1, '123456789', 1),
(3, 'Nanda', '8965120489', 'vatva', 'ahmeadbad', 1, '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendence`
--

CREATE TABLE `staff_attendence` (
  `Id` int(11) NOT NULL,
  `Staff_id` int(11) NOT NULL,
  `In_time` time NOT NULL,
  `Out_time` time NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_attendence`
--

INSERT INTO `staff_attendence` (`Id`, `Staff_id`, `In_time`, `Out_time`, `Date`) VALUES
(1, 1, '06:00:00', '14:00:00', '12/03/2018'),
(2, 2, '14:00:00', '20:00:00', '12/03/2018'),
(3, 3, '20:00:00', '06:00:00', '13/03/2018'),
(4, 1, '11:51:46', '11:59:34', '27/03/2018'),
(9, 1, '22:18:48', '22:19:57', '04/04/2018'),
(10, 1, '13:14:13', '18:13:15', '05/04/2018'),
(12, 1, '20:21:32', '22:42:07', '09/04/2018'),
(14, 1, '08:17:58', '14:58:32', '10/04/2018'),
(16, 1, '11:46:33', '11:50:29', '13/04/2018'),
(19, 1, '19:21:40', '19:28:25', '27/04/2018'),
(20, 2, '19:28:32', '00:00:00', '27/04/2018');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_id` int(11) NOT NULL,
  `State_name` varchar(25) NOT NULL,
  `Country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_id`, `State_name`, `Country_id`) VALUES
(1, 'gujarat', 1),
(2, 'delhi', 1),
(3, 'maharashtra', 1),
(4, 'rajasthan', 1),
(5, 'panjab', 1),
(6, 'bihar', 1),
(7, 'goa', 1),
(8, 'madhya pradesh', 1),
(9, 'jharkhand', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Father_name` varchar(20) NOT NULL,
  `Mother_name` varchar(20) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Parent_no` varchar(11) NOT NULL,
  `Dob` varchar(10) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  ` T_add_line1` varchar(50) NOT NULL,
  `T_add_line2` varchar(50) NOT NULL,
  `T_city_id` int(11) NOT NULL,
  `Blood_group` varchar(20) NOT NULL,
  `Ishmc` tinyint(1) NOT NULL,
  `P_add_line1` varchar(50) NOT NULL,
  `P_add_line2` varchar(50) NOT NULL,
  `p_city_id` int(10) NOT NULL,
  `valid` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `First_name`, `Last_name`, `Father_name`, `Mother_name`, `Contact_no`, `Parent_no`, `Dob`, `Room_no`, `Course`, `Email`, `Password`, ` T_add_line1`, `T_add_line2`, `T_city_id`, `Blood_group`, `Ishmc`, `P_add_line1`, `P_add_line2`, `p_city_id`, `valid`) VALUES
(201712022, 'Vaneeta', 'Malviya', 'ramish', 'isha', '9639517536', '6549871239', '1/1/1996', 'j312', 'MscIT', 'vaneeta@gmail.com', 'abc', 'k-312 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, '21 VrajNiketan', 'gopipura', 2, 1),
(201712027, 'Priya', 'Handekar', 'nainesh', 'Chaya', '9876548525', '7418529634', '3/7/1995', 'j327', 'MscIT', 'priyahandekar703@gmail.com', 'abc', 'j-327 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, 'A/1, Sanjay tower', 'near jodhpur gam', 12, 1),
(201712033, 'Bhakti', 'Shah', 'Alpesh', 'Rupal', '9726390447', '9726390447', '15/2/1996', 'k207', 'MscIT', 'bhaktishah920@gmail.com', 'abc', 'k-207 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o+ve', 0, '2, Dhanraj Apt. ,', 'Kankaria', 1, 1),
(201712035, 'Ami', 'Bhatt', 'vijay', 'hina', '7820070171', '7820070171', '7/05/1997', 'k223', 'MscIT', 'amibhatt7@gmail.com', 'abc', 'k-223 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, 'nilkanth society,SBS colony', 'porbandar', 20, 1),
(201712036, 'tulika', 'tulika', 'BM Prasad', 'kiran', '8765432190', '9638527410', '28/05/1994', 'k209', 'MscIT', 'tulika@gmail.com', 'abc', 'k-209 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'b positive', 0, 'shubroto park', 'palam', 11, 0),
(201712039, 'Rutvi', 'Shah', 'Biren', 'Manisha', '9427711474', '9825647030', '04/01/1997', 'k302', 'MscIT', 'shahritu2111@gmail.com', 'rutvi', '1299/2 sector 5a', 'gandhinagar', 3, 'B+', 0, 'C-25 prena viraj tower-1', 'near jodhpur gam', 1, 1),
(201712051, 'Shilpi', 'Soni', 'nainesh', 'bhavna', '9909960601', '9977899977', '4/2/1997', 'k204', 'MscIT', 'aapdebadha12@gmail.com', 'abc', 'k-204 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'a positive', 0, 'Satyakam Society,', 'nehrunagar', 1, 1),
(201712052, 'Nisha', 'Parikh', 'Amit Parikh', 'Jyoti Parikh', '7623936347', '9824335671', '07/01/1997', 'k302', 'MscIT', 'nishaparikh71@gmail.com', 'nishu', 'k-302 ,HoR Women,Daiict Campus', 'Daiict Road', 6, 'b positive', 0, 'Ghadiyali pole,Kalidas Bhaijis Khadki,Opp. Jain De', 'Mandvi', 6, 1),
(201712063, 'Aashka', 'Shah', 'abc', 'abc', '1234567894', '5612348974', '26/10/1996', 'k303', 'MscIT', '201712063@daiict.ac.in', 'qwertyu', 'k-303 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'O+ve', 0, 'B-6 Amar Flats, Vasna Barrage Road', 'Opposite Divine Life School', 1, 0),
(201712071, 'Priyanka', 'Dodiya', 'Ramesh', 'Sita', '9797925101', '9825143241', '14/02/1997', 'j311', 'MscIT', 'priyanka@gmail.com', 'abc', 'J-311 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o+ve', 0, 'Krishna Society', 'Airport Road', 5, 0),
(201712089, 'nidhi', 'vyas', 'mayur', 'nita', '7405197581', '8529637415', '6/1/1997', 'k223', 'MscIT', 'vyasnidhi@gmail.com', 'abc', 'k-223 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, 'ganesh park', 'raiya road', 18, 1),
(201712102, 'Devisha', 'Surti', 'Vinay', 'Shefali', '9409645400', '9409645400', '09/03/1997', 'K215', 'MscIT', 'devishasurti@gmail.com', 'devisha', 'k-302 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'B+', 0, 'D-13 shree hari park,b/s gopi vallabh tower', 'Satellite', 1, 1),
(201712113, 'Aayushi', 'Shah', 'Dharmesh', 'Jigna', '8529637416', '8527418979', '20/12/1996', 'k204', 'MscIT', 'aayushi97shah@gmail.com', 'abc', 'k-204 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, '97,Shanti tower', 'nehrunagar', 1, 0),
(201712121, 'Palak', 'Mittal', 'Kamal', 'Nayana', '9879639516', '9637538462', '08/06/1996', 'j313', 'MscIT', 'palak@gmail.com', 'abc', 'j-313 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'b positive', 0, 'Regal Residency', 'Vesu', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_complaint`
--

CREATE TABLE `type_of_complaint` (
  `Type_id` int(11) NOT NULL,
  `Type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_complaint`
--

INSERT INTO `type_of_complaint` (`Type_id`, `Type_name`) VALUES
(1, 'Urgent'),
(2, 'Electricity'),
(3, 'Cleaning'),
(4, 'Water'),
(5, 'Harassment'),
(6, 'Maintenance'),
(7, 'Carpenter');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `V_id` int(11) NOT NULL,
  `V_name` varchar(30) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `In_time` time NOT NULL,
  `Out_time` time NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`V_id`, `V_name`, `Purpose`, `In_time`, `Out_time`, `Date`) VALUES
(10, 'Raman', 'Electricity', '20:39:24', '23:28:32', '09/04/2018'),
(11, 'Raju', 'Carpenter', '20:39:58', '00:00:00', '09/04/2018'),
(12, 'Mahesh', 'plumber', '20:40:26', '00:00:00', '09/04/2018'),
(13, 'Manoj', 'Electricity', '20:41:18', '20:41:35', '09/04/2018'),
(14, 'Suresh', 'plumber', '20:42:09', '00:00:00', '09/04/2018'),
(15, 'Manavi', 'Cleaning', '20:17:56', '00:00:00', '27/04/2018'),
(16, 'Urmila', 'Cleaning', '20:18:23', '00:00:00', '27/04/2018'),
(17, 'Gauri', 'Cleaning', '20:18:51', '00:00:00', '27/04/2018'),
(18, 'Ganga', 'Cleaning', '20:19:16', '00:00:00', '27/04/2018'),
(19, 'Vilas', 'Cleaning', '20:19:42', '00:00:00', '27/04/2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`Att_id`);

--
-- Indexes for table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`Image_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Country_id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_id`,`Student_id`);

--
-- Indexes for table `gadget`
--
ALTER TABLE `gadget`
  ADD PRIMARY KEY (`G_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`Guest_id`);

--
-- Indexes for table `in_out`
--
ALTER TABLE `in_out`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_no`),
  ADD KEY `No_of_occupants` (`No_of_occupants`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_id`);

--
-- Indexes for table `staff_attendence`
--
ALTER TABLE `staff_attendence`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `type_of_complaint`
--
ALTER TABLE `type_of_complaint`
  ADD PRIMARY KEY (`Type_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `Att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `Image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `Country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `G_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `Guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `in_out`
--
ALTER TABLE `in_out`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff_attendence`
--
ALTER TABLE `staff_attendence`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `type_of_complaint`
--
ALTER TABLE `type_of_complaint`
  MODIFY `Type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `V_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'hostel_management', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["attendence","bulletin","checkout","city","complaint","country","courier","gadget","guest","in_out","room","staff","staff_attendence","state","student","type_of_complaint","visitor"],"table_structure[]":["attendence","bulletin","checkout","city","complaint","country","courier","gadget","guest","in_out","room","staff","staff_attendence","state","student","type_of_complaint","visitor"],"table_data[]":["attendence","bulletin","checkout","city","complaint","country","courier","gadget","guest","in_out","room","staff","staff_attendence","state","student","type_of_complaint","visitor"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"hostel_management","table":"room"},{"db":"hostel_management","table":"student"},{"db":"hostel_management","table":"state"},{"db":"hostel_management","table":"staff_attendence"},{"db":"hostel_management","table":"staff"},{"db":"hostel_management","table":"in_out"},{"db":"hostel_management","table":"guest"},{"db":"hostel_management","table":"gadget"},{"db":"hostel_management","table":"feedback"},{"db":"hostel_management","table":"courier"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'hostel_management', 'room', '{"sorted_col":"`room`.`Room_no` ASC"}', '2018-04-27 17:35:46'),
('root', 'hostel_management', 'student', '{"sorted_col":"`student`.`Room_no` ASC"}', '2018-04-27 17:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-03-21 11:24:09', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
