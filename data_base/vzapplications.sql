-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2016 at 08:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vzapplications`
--

-- --------------------------------------------------------

--
-- Table structure for table `licenseapp`
--

CREATE TABLE IF NOT EXISTS `licenseapp` (
  `la_id` int(11) NOT NULL,
  `la_name` varchar(30) NOT NULL,
  `la_company_name` varchar(100) NOT NULL,
  `la_company_name2` varchar(100) NOT NULL,
  `la_company_name3` varchar(100) NOT NULL,
  `la_business_activities` varchar(255) NOT NULL,
  `la_company_type` varchar(25) NOT NULL,
  `la_share_capital` varchar(20) NOT NULL,
  `la_license_type` varchar(30) NOT NULL,
  `la_no_sh` varchar(2) NOT NULL,
  `la_created_date` date NOT NULL,
  `la_modified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licenseapp`
--

INSERT INTO `licenseapp` (`la_id`, `la_name`, `la_company_name`, `la_company_name2`, `la_company_name3`, `la_business_activities`, `la_company_type`, `la_share_capital`, `la_license_type`, `la_no_sh`, `la_created_date`, `la_modified_date`) VALUES
(1, 'LA-00443', 'Shahid Khan', 'Khan2', 'Khan3', 'IT Security Management , Online & Electronic Content', 'FZE', '100,000', 'Individual(s)', '1', '2016-01-14', '0000-00-00'),
(2, 'LA-00444', 'ssdsd', 'sdsdsd', '', 'IT Consultancy', 'FZC', '150,000', 'Corporate', '0', '0000-00-00', '0000-00-00'),
(3, 'LA-00445', 'Aqeel Awan', 'Testing', '', 'IT Consultancy,Helpdesk Services,Legal Consultancy,Broadcasting Management', 'FZC', '150,000', 'Both', '2', '0000-00-00', '0000-00-00'),
(4, 'LA-00446', 'khkhkh', 'kkhkhhkkhk', '', '', '', '', 'Individual', '0', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `shareholder`
--

CREATE TABLE IF NOT EXISTS `shareholder` (
  `sh_id` int(11) NOT NULL,
  `sh_type` enum('Individual','Corporate','pic','fpc') NOT NULL,
  `sh_pic` tinyint(1) NOT NULL,
  `sh_fpoc` tinyint(1) NOT NULL,
  `sh_gender` enum('Male','Female') NOT NULL,
  `sh_marital_status` enum('Married','Single','Divorced') NOT NULL,
  `sh_children` tinyint(1) NOT NULL,
  `sh_title` enum('Mr.','Mrs.','Ms.','Dr.','Prof.') NOT NULL,
  `sh_first_name` varchar(30) NOT NULL,
  `sh_middle_name` varchar(30) NOT NULL,
  `sh_last_name` varchar(30) NOT NULL,
  `sh_dob` varchar(20) NOT NULL,
  `sh_nationality` varchar(20) NOT NULL,
  `sh_pass_id` varchar(20) NOT NULL,
  `sh_pass_issue_d` varchar(20) NOT NULL,
  `sh_designation` varchar(100) NOT NULL,
  `sh_uae_resident` tinyint(1) NOT NULL,
  `sh_uae_stamp` tinyint(1) NOT NULL,
  `sh_per_o_sha` varchar(10) NOT NULL,
  `sh_val_p_sha` varchar(5) NOT NULL,
  `sh_num_o_sha` varchar(5) NOT NULL,
  `sh_val_of_sha` varchar(10) NOT NULL,
  `sh_ad_street` varchar(255) NOT NULL,
  `sh_ad_postal` varchar(50) NOT NULL,
  `sh_ad_state` varchar(50) NOT NULL,
  `sh_ad_city` varchar(30) NOT NULL,
  `sh_ad_mobile` varchar(25) NOT NULL,
  `sh_ad_email` varchar(25) NOT NULL,
  `sh_ad_country` varchar(20) NOT NULL,
  `sh_ad_telhome` varchar(20) NOT NULL,
  `sh_ad_teloffice` varchar(20) NOT NULL,
  `sh_ad_fax` varchar(20) NOT NULL,
  `sh_p_ad_same` tinyint(1) NOT NULL,
  `sh_p_street` varchar(255) NOT NULL,
  `sh_p_postal` varchar(50) NOT NULL,
  `sh_p_state` varchar(50) NOT NULL,
  `sh_p_city` varchar(50) NOT NULL,
  `sh_p_mobile` varchar(20) NOT NULL,
  `sh_p_email` varchar(20) NOT NULL,
  `sh_p_country` varchar(30) NOT NULL,
  `sh_p_telhome` varchar(20) NOT NULL,
  `sh_p_teloffice` varchar(20) NOT NULL,
  `sh_cop_name` varchar(20) NOT NULL,
  `sh_cop_pre_name` varchar(100) NOT NULL,
  `sh_cop_trade_name` varchar(100) NOT NULL,
  `sh_d_of_inc` varchar(20) NOT NULL,
  `sh_j_inc` varchar(100) NOT NULL,
  `sh_reg_num` int(100) NOT NULL,
  `sh_license_name` varchar(20) NOT NULL,
  `sh_created_date` date NOT NULL,
  `sh_modified_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shareholder`
--

INSERT INTO `shareholder` (`sh_id`, `sh_type`, `sh_pic`, `sh_fpoc`, `sh_gender`, `sh_marital_status`, `sh_children`, `sh_title`, `sh_first_name`, `sh_middle_name`, `sh_last_name`, `sh_dob`, `sh_nationality`, `sh_pass_id`, `sh_pass_issue_d`, `sh_designation`, `sh_uae_resident`, `sh_uae_stamp`, `sh_per_o_sha`, `sh_val_p_sha`, `sh_num_o_sha`, `sh_val_of_sha`, `sh_ad_street`, `sh_ad_postal`, `sh_ad_state`, `sh_ad_city`, `sh_ad_mobile`, `sh_ad_email`, `sh_ad_country`, `sh_ad_telhome`, `sh_ad_teloffice`, `sh_ad_fax`, `sh_p_ad_same`, `sh_p_street`, `sh_p_postal`, `sh_p_state`, `sh_p_city`, `sh_p_mobile`, `sh_p_email`, `sh_p_country`, `sh_p_telhome`, `sh_p_teloffice`, `sh_cop_name`, `sh_cop_pre_name`, `sh_cop_trade_name`, `sh_d_of_inc`, `sh_j_inc`, `sh_reg_num`, `sh_license_name`, `sh_created_date`, `sh_modified_date`) VALUES
(1, 'pic', 0, 0, '', '', 0, 'Mr.', '', '', '', '', 'AE', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 'AE', '', '', '', 0, '', '', '', '', '', '', 'AE', '', '', '', '', '', '', '', 0, 'LA-00446', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_admin` tinyint(4) NOT NULL DEFAULT '0',
  `user_firstname` varchar(255) NOT NULL DEFAULT '/',
  `user_lastname` varchar(255) NOT NULL DEFAULT '/',
  `user_language` char(2) NOT NULL DEFAULT 'en',
  `user_theme` varchar(255) NOT NULL DEFAULT 'default',
  `user_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_admin`, `user_firstname`, `user_lastname`, `user_language`, `user_theme`, `user_created`, `user_modified`, `user_role`) VALUES
(1, 'admin@vz.com', '1b8e6daa6e69f583e3c5c318f9524300', 1, 'Admin', 'Khan', 'en', 'default', '0000-00-00 00:00:00', '2016-01-14 17:57:07', '''user''');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `licenseapp`
--
ALTER TABLE `licenseapp`
  ADD PRIMARY KEY (`la_id`), ADD UNIQUE KEY `Name` (`la_name`);

--
-- Indexes for table `shareholder`
--
ALTER TABLE `shareholder`
  ADD PRIMARY KEY (`sh_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `licenseapp`
--
ALTER TABLE `licenseapp`
  MODIFY `la_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shareholder`
--
ALTER TABLE `shareholder`
  MODIFY `sh_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
