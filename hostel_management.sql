-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 12:28 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `Att_id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_id` int(11) NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`Att_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`Att_id`, `Student_id`, `Date`) VALUES
(1, 201712016, '21/01/2018'),
(2, 201712035, '24/01/2018'),
(3, 201712022, '02/02/2018'),
(4, 201712022, '07/01/2018'),
(5, 201712016, '09/01/2018'),
(6, 201712039, '26/03/2018'),
(7, 201712035, '27/03/2018'),
(8, 201712022, '27/03/2018'),
(9, 201712039, '27/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE IF NOT EXISTS `bulletin` (
  `Image_id` int(11) NOT NULL AUTO_INCREMENT,
  `Imagesrc` varchar(50) NOT NULL,
  PRIMARY KEY (`Image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bulletin`
--


-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_id` int(11) NOT NULL,
  `Student_name` varchar(20) NOT NULL,
  `Room_no` varchar(11) NOT NULL,
  `Out_date` varchar(10) NOT NULL,
  `Out_time` time NOT NULL,
  `Staff_id` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`Id`, `Student_id`, `Student_name`, `Room_no`, `Out_date`, `Out_time`, `Staff_id`) VALUES
(1, 201712016, 'vidvata', 'j101', '10/01/2018', '18:45:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `City_id` int(11) NOT NULL AUTO_INCREMENT,
  `City_name` varchar(20) NOT NULL,
  `State_id` int(11) NOT NULL,
  PRIMARY KEY (`City_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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

CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_id` int(11) NOT NULL,
  `Type_of_complaint` int(20) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Status` tinyint(11) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `Student_id`, `Type_of_complaint`, `Description`, `Date`, `Status`) VALUES
(1, 201712022, 3, 'water shortage', '07/01/2018', 1),
(2, 201712016, 2, 'blinking light.', '31/01/2018', 0),
(3, 201712035, 2, 'broken table', '22/02/2018', 0),
(4, 201712111, 1, 'Student of k311 is making noise', '21/01/2018', 0),
(5, 201712022, 3, 'wash room not clean of 1st floor', '07/03/2018', 0),
(6, 201712039, 1, 'hiiiiiiioi', '08/04/2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `Country_id` int(11) NOT NULL AUTO_INCREMENT,
  `Country_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_id`, `Country_name`) VALUES
(1, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE IF NOT EXISTS `courier` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `In_time` time NOT NULL,
  `In_date` varchar(15) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Courier_company` varchar(50) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Out_time` time NOT NULL,
  `Out_date` varchar(12) NOT NULL,
  `Staff_id` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`Id`, `In_time`, `In_date`, `Student_id`, `Courier_company`, `Room_no`, `Out_time`, `Out_date`, `Staff_id`) VALUES
(1, '11:00:00', '17/02/2018', 201712016, 'Blue dart', 'j101', '15:00:00', '17/02/2018', 2),
(2, '12:00:00', '20/02/2018', 201712111, 'Amazon', 'k205', '18:00:00', '20/02/2018', 3),
(3, '13:00:00', '18/03/2018', 201712016, '', 'j101', '19:00:00', '18/03/2018', 3),
(4, '12:00:00', '17/03/2018', 201712111, '', 'k205', '16:22:02', '31/03/2018', 3),
(7, '15:50:33', '31/03/2018', 201712039, 'flipkart', 'k306', '00:00:00', 'null', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

CREATE TABLE IF NOT EXISTS `gadget` (
  `G_id` int(11) NOT NULL AUTO_INCREMENT,
  `G_name` varchar(20) NOT NULL,
  `G_code` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  PRIMARY KEY (`G_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`G_id`, `G_name`, `G_code`, `Student_id`) VALUES
(1, 'laptop', 11245687, 201712016),
(2, 'speaker', 20156789, 201712035),
(3, 'cooler', 201596, 201712111);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `Guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_id` int(11) NOT NULL,
  `Guest_name` varchar(30) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Room_no` varchar(11) NOT NULL,
  `Add_line1` varchar(50) NOT NULL,
  `Add_line2` varchar(50) NOT NULL,
  `City_id` int(11) NOT NULL,
  PRIMARY KEY (`Guest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`Guest_id`, `Staff_id`, `Guest_name`, `Contact_no`, `Purpose`, `Room_no`, `Add_line1`, `Add_line2`, `City_id`) VALUES
(1, 2, 'xyzw', '8520369874', 'convocation', 'j301', 'abcd', 'surat', 2),
(2, 1, 'abcd', '8956231250', 'synapse', 'j105', 'maninagar', 'ahmeadbad', 1),
(3, 2, 'monika', '8856254120', 'convocation', 'k205', 'vatva', 'ahmedabad', 1),
(6, 1, 'Madhu', '9427711545', 'Ifest', 'k102', 'ashsndjn ', 'sjnc', 14);

-- --------------------------------------------------------

--
-- Table structure for table `in_out`
--

CREATE TABLE IF NOT EXISTS `in_out` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_id` int(11) NOT NULL,
  `In_time` time NOT NULL,
  `In_date` varchar(10) NOT NULL,
  `Out_time` time NOT NULL,
  `Out_date` varchar(10) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Name_of_relative` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `in_out`
--

INSERT INTO `in_out` (`Id`, `Student_id`, `In_time`, `In_date`, `Out_time`, `Out_date`, `Place`, `Contact_no`, `Name_of_relative`) VALUES
(1, 201712022, '14:34:41', 'null', '15:00:00', '28/03/2018', 'ahmedabad', '8956232189', 'vaneeta'),
(2, 201712111, '18:00:00', '11/02/2018', '13:00:00', '08/02/2018', 'surat', '9988230158', 'ankita'),
(3, 201712039, '07:17:00', '18/03/2018', '10:00:00', '16/03/2018', 'Bopal', '9426837158', 'nirvisha'),
(4, 201712022, '00:00:00', 'null', '17:22:25', '31/03/2018', 'Baroda', '1234567891', 'Nilamasi');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `Room_no` varchar(10) NOT NULL,
  `No_of_occupants` int(11) NOT NULL,
  PRIMARY KEY (`Room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_no`, `No_of_occupants`) VALUES
('j101', 1),
('j105', 0),
('j207', 0),
('j301', 0),
('j311', 1),
('k202', 0),
('k205', 2),
('k303', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_name` varchar(30) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Add_line1` varchar(50) NOT NULL,
  `Add_line2` varchar(50) NOT NULL,
  `City_id` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`Staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_id`, `Staff_name`, `Contact_no`, `Add_line1`, `Add_line2`, `City_id`, `Password`, `Is_active`) VALUES
(1, 'kapila', '8962584120', 'xyz', 'surat', 2, '123456789', 1),
(2, 'anjana', '9962458201', 'maninagar', 'ahmedabad', 1, 'abcd1234', 0),
(3, 'aunty3', '8965120489', 'vatva', 'ahmeadbad', 1, '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendence`
--

CREATE TABLE IF NOT EXISTS `staff_attendence` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_id` int(11) NOT NULL,
  `In_time` time NOT NULL,
  `Out_time` time NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `staff_attendence`
--

INSERT INTO `staff_attendence` (`Id`, `Staff_id`, `In_time`, `Out_time`, `Date`) VALUES
(1, 1, '06:00:00', '14:00:00', '12/03/2018'),
(2, 2, '14:00:00', '20:00:00', '12/03/2018'),
(3, 3, '20:00:00', '06:00:00', '13/03/2018'),
(4, 1, '11:51:46', '11:59:34', '27/03/2018'),
(5, 1, '13:28:50', '00:00:00', '28/03/2018'),
(6, 1, '12:45:37', '00:00:00', '31/03/2018'),
(7, 1, '10:55:55', '00:00:00', '02/04/2018'),
(8, 1, '18:47:03', '00:00:00', '03/04/2018'),
(9, 1, '22:18:48', '22:19:57', '04/04/2018'),
(10, 1, '13:14:13', '18:13:15', '05/04/2018'),
(11, 1, '17:21:08', '00:00:00', '08/04/2018');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `State_id` int(11) NOT NULL AUTO_INCREMENT,
  `State_name` varchar(25) NOT NULL,
  `Country_id` int(11) NOT NULL,
  PRIMARY KEY (`State_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `student` (
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
  `valid` tinyint(2) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `First_name`, `Last_name`, `Father_name`, `Mother_name`, `Contact_no`, `Parent_no`, `Dob`, `Room_no`, `Course`, `Email`, `Password`, ` T_add_line1`, `T_add_line2`, `T_city_id`, `Blood_group`, `Ishmc`, `P_add_line1`, `P_add_line2`, `p_city_id`, `valid`) VALUES
(201712022, 'Vaneeta', 'Malviya', 'abc', 'xyz', '9033126492', '1234567896', '1-1-1996', 'k205', 'mscit', '201712022@gmail.com', 'abcd', 'asdfg', 'asdfg 335009', 1, 'o positive', 1, 'asdfg', 'asdfg', 1, 1),
(201712039, 'Rutvi', 'Shah', 'Birenkumar', 'Manisha', '9427711474', '9825647029', '04-01-1997', 'j311', 'MSC.IT', 'shahritu2111@gmail.com', 'rutvi', 'qwerty', 'zxcvb', 2, 'b positive', 0, 'qwerty', 'zxcvb', 2, 1),
(201712102, 'devisha', 'surti', 'vinay', 'shefali', '8905106525', '9825647030', '09-03-1998', 'k215', 'MSc.IT', 'devi@gmail.com', 'abcd', 'skjfjj', 'snsfjenj', 1, 'b+', 0, 'c-25 prena viraj tower 1', 'near jodhpur gam', 1, 0),
(201712111, 'nirvisha', 'soni', 'xyz', 'abc', '9851067209', '7625501298', '15/05/1996', 'k205', 'mscit', '201712111@gmail.com', '1234567', 'abcde', 'bhuj', 4, 'b negative', 0, 'abcdef', 'bhuj', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_complaint`
--

CREATE TABLE IF NOT EXISTS `type_of_complaint` (
  `Type_id` int(11) NOT NULL AUTO_INCREMENT,
  `Type_name` varchar(25) NOT NULL,
  PRIMARY KEY (`Type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `visitor` (
  `V_id` int(11) NOT NULL AUTO_INCREMENT,
  `V_name` varchar(30) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `In_time` time NOT NULL,
  `Out_time` time NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`V_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`V_id`, `V_name`, `Purpose`, `In_time`, `Out_time`, `Date`) VALUES
(1, 'xyz', 'broken table repair', '14:00:00', '15:00:00', '12/02/2018'),
(2, 'abcd', 'electricity issue', '09:00:00', '14:00:00', '15/03/2018'),
(3, 'abcde', 'internet issue', '17:00:00', '19:00:00', '02/02/2018'),
(4, 'ghi', 'cleaning floor', '06:00:00', '10:00:00', '12/02/2018'),
(8, 'vidvata', 'electricity', '08:59:08', '15:44:43', '27/03/2018'),
(9, 'rutvi', 'electricity', '15:06:17', '00:00:00', '31/03/2018');
