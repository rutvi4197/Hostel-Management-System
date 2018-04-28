-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2018 at 05:13 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`Id`, `Student_id`, `Student_name`, `Room_no`, `Out_date`, `Out_time`, `Staff_id`) VALUES
(2, 201712082, 'Shikha', 'k217', '09/04/2018', '00:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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

CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `Student_id` int(11) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  PRIMARY KEY (`Feedback_id`,`Student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
(1, 'laptop', 11245687, 201712082),
(2, 'speaker', 20156789, 201712035),
(3, 'cooler', 201596, 201712089);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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

CREATE TABLE IF NOT EXISTS `room` (
  `Room_no` varchar(10) NOT NULL,
  `No_of_occupants` int(11) NOT NULL,
  PRIMARY KEY (`Room_no`),
  KEY `No_of_occupants` (`No_of_occupants`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_no`, `No_of_occupants`) VALUES
('j311', 1),
('j312', 1),
('j313', 1),
('k207', 1),
('k209', 1),
('k215', 1),
('k204', 2),
('k223', 2),
('k302', 2);

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
(1, 'kapila', '8962584120', 'vraj society', 'surat', 2, '123456789', 1),
(2, 'anjana', '9962458201', 'maninagar', 'ahmedabad', 1, '123456789', 1),
(3, 'Nanda', '8965120489', 'vatva', 'ahmeadbad', 1, '123456789', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

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
(20, 2, '19:28:32', '00:00:00', '27/04/2018'),
(21, 1, '00:23:49', '00:00:00', '28/04/2018');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
