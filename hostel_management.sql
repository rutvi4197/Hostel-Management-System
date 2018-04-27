-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 07:55 PM
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
(12, 201712082, '09/04/2018');

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
(2, 201712052, 2, 'blinking light.', '31/01/2018', 0),
(3, 201712039, 2, 'broken table', '22/02/2018', 0),
(4, 201712102, 1, 'Student of k311 is making noise', '21/01/2018', 0),
(5, 201712089, 3, 'wash room not clean of 1st floor', '07/03/2018', 0);

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
(8, '23:19:52', '09/04/2018', 201712089, 'Myntra', 'k223', '00:00:00', 'null', 2);

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
(11, 1, 'Radhika', '6549873210', 'Synapse', 'k207', 'Gujarati Society', 'Bandra', 14);

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
(8, 201712033, '00:00:00', 'null', '22:47:58', '09/04/2018', 'Rajkot', '7416548526', 'Bhavna'),
(9, 201712089, '00:00:00', 'null', '22:54:58', '09/04/2018', 'Rajkot', '8529871234', 'nita');

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
('k209', 0),
('k223', 0),
('k204', 1),
('k207', 1),
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
(5, 1, '13:28:50', '00:00:00', '28/03/2018'),
(6, 1, '12:45:37', '00:00:00', '31/03/2018'),
(7, 1, '10:55:55', '00:00:00', '02/04/2018'),
(8, 1, '18:47:03', '00:00:00', '03/04/2018'),
(9, 1, '22:18:48', '22:19:57', '04/04/2018'),
(10, 1, '13:14:13', '18:13:15', '05/04/2018'),
(11, 1, '17:21:08', '00:00:00', '08/04/2018'),
(12, 1, '20:21:32', '22:42:07', '09/04/2018'),
(13, 2, '22:42:16', '00:00:00', '09/04/2018');

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
(201712033, 'Bhakti', 'Shah', 'Alpesh', 'Rupal', '9726390447', '9726390447', '15/2/1996', 'k207', 'MscIT', 'bhaktishah920@gmail.com', 'abc', 'k-207 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o+ve', 0, '2, Dhanraj Apt. ,', 'Kankaria', 1, 1),
(201712035, 'Ami', 'Bhatt', 'vijay', 'hina', '7820070171', '7820070171', '7/05/1997', 'k223', 'MscIT', 'amibhatt7@gmail.com', 'abc', 'k-223 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, 'nilkanth society,SBS colony', 'porbandar', 20, 0),
(201712036, 'tulika', 'tulika', 'BM Prasad', 'kiran', '8765432190', '9638527410', '28/05/1994', 'k209', 'MscIT', 'tulika@gmail.com', 'abc', 'k-209 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'b positive', 0, 'shubroto park', 'palam', 11, 0),
(201712039, 'Rutvi', 'Shah', 'Biren', 'Manisha', '9427711474', '9825647030', '04/01/1997', 'k302', 'MscIT', 'shahritu2111@gmail.com', 'rutvi', '1299/2 sector 5a', 'gandhinagar', 3, 'B+', 0, 'C-25 prena viraj tower-1', 'near jodhpur gam', 1, 1),
(201712051, 'Shilpi', 'Soni', 'nainesh', 'bhavna', '9909960601', '9977899977', '4/2/1997', 'k204', 'MscIT', 'aapdebadha12@gmail.com', 'abc', 'k-204 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'a positive', 0, 'Satyakam Society,', 'nehrunagar', 1, 0),
(201712052, 'Nisha', 'Parikh', 'Amit Parikh', 'Jyoti Parikh', '7623936347', '9824335671', '07/01/1997', 'k302', 'MscIT', 'nishaparikh71@gmail.com', 'nishu', 'k-302 ,HoR Women,Daiict Campus', 'Daiict Road', 6, 'b positive', 0, 'Ghadiyali pole,Kalidas Bhaijis Khadki,Opp. Jain De', 'Mandvi', 6, 1),
(201712089, 'nidhi', 'vyas', 'mayur', 'nita', '7405197581', '8529637415', '6/1/1997', 'k223', 'MscIT', 'vyasnidhi@gmail.com', 'abc', 'k-223 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'o positive', 0, 'ganesh park', 'raiya road', 18, 1),
(201712102, 'Devisha', 'Surti', 'Vinay', 'Shefali', '9409645400', '9409645400', '09/03/1997', 'K215', 'MscIT', 'devishasurti@gmail.com', 'devisha', 'k-302 ,HoR Women,Daiict Campus', 'Daiict Road', 3, 'B+', 0, 'D-13 shree hari park,b/s gopi vallabh tower', 'Satellite', 1, 1);

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
(10, 'Raman', 'Electricity', '20:39:24', '00:00:00', '09/04/2018'),
(11, 'Raju', 'Carpenter', '20:39:58', '00:00:00', '09/04/2018'),
(12, 'Mahesh', 'plumber', '20:40:26', '00:00:00', '09/04/2018'),
(13, 'Manoj', 'Electricity', '20:41:18', '20:41:35', '09/04/2018'),
(14, 'Suresh', 'plumber', '20:42:09', '00:00:00', '09/04/2018');

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
  MODIFY `Att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `Country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `G_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `Guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `in_out`
--
ALTER TABLE `in_out`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff_attendence`
--
ALTER TABLE `staff_attendence`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `V_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
