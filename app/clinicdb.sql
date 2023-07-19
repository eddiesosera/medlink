-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(255) NOT NULL,
  `doctor_speciality_id` int(255) NOT NULL,
  `doctor_profile_url` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_surname` varchar(255) NOT NULL,
  `doctor_age` varchar(50) NOT NULL,
  `doctor_gender` varchar(10) NOT NULL,
  `doctor_gov_id` int(13) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `doctor_phone_number` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_speciality_id`, `doctor_profile_url`, `doctor_name`, `doctor_surname`, `doctor_age`, `doctor_gender`, `doctor_gov_id`, `doctor_email`, `doctor_phone_number`) VALUES
(1, 2, 'jose-pablo-dominguez-mRJXwQCb07E-unsplash.jpg', 'Jose', 'Pablo', '1990-05-09', 'Male', 1754235512, 'jose@gmail.com', 785121337),
(4, 1, 'bruno-rodrigues-PZ041PgKsFE-unsplash.jpg', 'Karabo', 'Ncobo', '2001-03-06', 'Male', 1765929051, 'karabo@gmail.com', 788443219),
(5, 4, 'maxim-tolchinskiy-n37MJK1dswA-unsplash.jpg', 'Glendor', 'Marvel', '1988-02-28', 'Female', 1756786999, 'glend@gmail.com', 883170908);

-- --------------------------------------------------------

--
-- Table structure for table `illness_types`
--

CREATE TABLE `illness_types` (
  `illness_id` int(11) NOT NULL,
  `illness_title` varchar(255) NOT NULL,
  `illness_severity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `illness_types`
--

INSERT INTO `illness_types` (`illness_id`, `illness_title`, `illness_severity`) VALUES
(1, 'Stress', 'Mild'),
(2, 'Anxiety', 'Mild'),
(3, 'Depression', 'Moderate'),
(4, 'Personality Disorder', 'Moderate'),
(5, 'Bipolar Disorder', 'Severe'),
(6, 'Chronical Depression', 'Severe'),
(7, 'OCD', 'Severe'),
(9, 'PTSD', 'Severe'),
(10, 'Psychosis', 'Severe');

-- --------------------------------------------------------

--
-- Table structure for table `medical_aid`
--

CREATE TABLE `medical_aid` (
  `medicalAid_id` int(255) NOT NULL,
  `medicalAid_organization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_aid`
--

INSERT INTO `medical_aid` (`medicalAid_id`, `medicalAid_organization`) VALUES
(1, 'Discovery'),
(2, 'Momentum'),
(4, 'MediHelp'),
(5, 'FedHealth'),
(6, 'Liberty'),
(7, 'GEMS'),
(8, 'No Medical Aid');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(255) NOT NULL,
  `patient_medicalAid_id` int(255) NOT NULL,
  `patient_illnesType_id` int(255) NOT NULL,
  `patient_profile_url` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_surname` varchar(255) NOT NULL,
  `patient_age` varchar(50) NOT NULL,
  `patient_gender` varchar(10) NOT NULL,
  `patient_gov_id` int(13) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_phone_number` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_medicalAid_id`, `patient_illnesType_id`, `patient_profile_url`, `patient_name`, `patient_surname`, `patient_age`, `patient_gender`, `patient_gov_id`, `patient_email`, `patient_phone_number`) VALUES
(1, 4, 1, 'elizeu-dias-2EGNqazbAMk-unsplash.jpg', 'Leanne', 'Graham', '23051990', 'Male', 2147483647, 'leannegraham@gmail.com', 2029182132),
(2, 5, 1, 'brooke-cagle-Ss3wTFJPAVY-unsplash.jpg', 'Ervin', 'Howell', '1995-05-09', 'Female', 2147483647, 'Ervinh@gmail.com', 2029182132),
(4, 8, 1, 'ali-morshedlou-WMD64tMfc4k-unsplash.jpg', 'Chelsey', 'Dietrich', '1993-05-13', 'Female', 2147483647, 'chelsey@gmail.com', 2147483647),
(5, 2, 2, 'brooke-cagle-NoRsyXmHGpI-unsplash.jpg', 'Emilio', 'Van Dijk', '2003-06-25', 'Male', 175646578, 'emil@gmail.com', 719654414),
(6, 8, 9, 'leon-elldot-f6HbVnGtNnY-unsplash.jpg', 'Cindy', 'Skosana', '1997-09-27', 'Female', 765437979, 'cindy@gmail.com', 784325566),
(9, 7, 7, 'rayul-_M6gy9oHgII-unsplash.jpg', 'Dani', 'Moore', '2000-07-21', 'Male', 2147483647, 'dani@gmail.com', 862334455);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionist_id` int(255) NOT NULL,
  `receptionist_rank_id` int(255) NOT NULL DEFAULT 2,
  `receptionist_profile_url` varchar(255) NOT NULL,
  `receptionist_name` varchar(255) NOT NULL,
  `receptionist_surname` varchar(255) NOT NULL,
  `receptionist_age` varchar(50) NOT NULL,
  `receptionist_gender` varchar(10) NOT NULL,
  `receptionist_phone_number` int(9) NOT NULL,
  `receptionist_email` varchar(255) NOT NULL,
  `receptionist_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionist_id`, `receptionist_rank_id`, `receptionist_profile_url`, `receptionist_name`, `receptionist_surname`, `receptionist_age`, `receptionist_gender`, `receptionist_phone_number`, `receptionist_email`, `receptionist_password`) VALUES
(1, 1, 'linkedin-sales-solutions-1A8yP_5msac-unsplash.jpg', 'Katty', 'Gambe', '23-05-1990', 'Female', 2147483647, 'kat@gmail.com', '1234'),
(2, 2, 'tabitha-turner-LJrbfaoWMgU-unsplash.jpg', 'Beauty', 'van Vyk', '2023-06-21', 'Female', 2147483647, 'bvk@gmail.com', '1234'),
(3, 2, 'true-agency-JwP90y9wgr4-unsplash (1).jpg', 'Dennis', 'van Vyk', '1988-02-23', 'Female', 226966771, 'dennis@gmail.com', '1234'),
(4, 1, 'maria-lupan-fE5IaNta2KM-unsplash.jpg', 'Susan', 'Scott', '1965-10-07', 'Female', 773032836, 'susan@gmail.com', '1234'),
(8, 2, 'centre-for-ageing-better-I-1cKK1-bnY-unsplash.jpg', 'Sandy', 'Cook', '1966-02-24', 'Female', 2147483647, 'sandy@gmail.com', '1234'),
(9, 2, 'cdc-n0sFXM_r-mI-unsplash.jpg', 'Jane', 'Smith', '1986-09-09', 'Female', 814566123, 'janesmith000@gmail.com', 'jane');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist_rank`
--

CREATE TABLE `receptionist_rank` (
  `rank_id` int(255) NOT NULL,
  `rank_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist_rank`
--

INSERT INTO `receptionist_rank` (`rank_id`, `rank_title`) VALUES
(1, 'Head '),
(2, 'Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `therapysession`
--

CREATE TABLE `therapysession` (
  `therapySession_id` int(255) NOT NULL,
  `receptionist_id` int(255) NOT NULL,
  `patient_id` int(255) NOT NULL,
  `doctor_id` int(255) NOT NULL,
  `session_date` varchar(50) NOT NULL,
  `session_time` varchar(5) NOT NULL,
  `session_room` varchar(5) NOT NULL,
  `attended` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `therapysession`
--

INSERT INTO `therapysession` (`therapySession_id`, `receptionist_id`, `patient_id`, `doctor_id`, `session_date`, `session_time`, `session_room`, `attended`) VALUES
(3, 1, 3, 3, '2023-06-25', '14:05', 'B1', 'Pending'),
(9, 1, 1, 1, '2023-06-28', '09:00', 'A1', 'Pending'),
(10, 1, 4, 2, '2023-06-28', '10:05', 'A1', 'Pending'),
(11, 1, 4, 1, '2023-06-29', '10:05', 'A2', 'Pending'),
(12, 1, 5, 4, '2023-06-29', '11:05', 'B2', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `illness_types`
--
ALTER TABLE `illness_types`
  ADD PRIMARY KEY (`illness_id`),
  ADD KEY `illness_id` (`illness_id`);

--
-- Indexes for table `medical_aid`
--
ALTER TABLE `medical_aid`
  ADD KEY `medicalAid_id` (`medicalAid_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `patient_medicalAid_id` (`patient_medicalAid_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionist_id`);

--
-- Indexes for table `receptionist_rank`
--
ALTER TABLE `receptionist_rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `therapysession`
--
ALTER TABLE `therapysession`
  ADD PRIMARY KEY (`therapySession_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `illness_types`
--
ALTER TABLE `illness_types`
  MODIFY `illness_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `receptionist_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `receptionist_rank`
--
ALTER TABLE `receptionist_rank`
  MODIFY `rank_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `therapysession`
--
ALTER TABLE `therapysession`
  MODIFY `therapySession_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`patient_medicalAid_id`) REFERENCES `medical_aid` (`medicalAid_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
