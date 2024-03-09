-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 02:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohc`
--

-- --------------------------------------------------------

--
-- Table structure for table `arthritis`
--

CREATE TABLE `arthritis` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arthritis`
--

INSERT INTO `arthritis` (`id`, `symptom`, `value`) VALUES
(1, 'Joint pain', '1'),
(2, 'Swelling', '1'),
(3, 'Stiffness', '1'),
(4, 'Redness', '1'),
(5, 'Decreased range of motion', '1'),
(6, 'Fatigue', '0'),
(7, 'Fever', '0'),
(8, 'Weight loss', '0'),
(9, 'Weakness', '1');

-- --------------------------------------------------------

--
-- Table structure for table `attended`
--

CREATE TABLE `attended` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_lastname` varchar(255) NOT NULL,
  `identity_number` varchar(255) NOT NULL,
  `diseases` varchar(255) NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attended`
--

INSERT INTO `attended` (`id`, `patient_name`, `patient_lastname`, `identity_number`, `diseases`, `doc_id`, `age`, `region`, `sex`) VALUES
(1, 'Joseph', 'Chiweda', '63-2395228R-43', 'lung_cancer_symptoms', '63-1234567R-12', ' 29', 'Harare', 'Male'),
(2, 'Joseph', 'Chiweda', '63-2395228R-43', 'heart_disease', 'DOC0036', ' 29', 'Harare', 'Male'),
(3, 'Joseph', 'Chiweda', '63-2395228R-43', 'heart_disease', 'DOC0036', ' 29', 'Harare', 'Male'),
(4, 'Joseph', 'Chiweda', '63-2395228R-43', 'lung_cancer', 'DOC003', ' 29', 'Harare', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `bladder_cancer`
--

CREATE TABLE `bladder_cancer` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bladder_cancer`
--

INSERT INTO `bladder_cancer` (`id`, `symptom`, `value`) VALUES
(1, 'Blood in urine (hematuria)', '1'),
(2, 'Painful urination', '0'),
(3, 'Pelvic pain', '1'),
(4, 'Back pain', '1'),
(5, 'Frequent urination', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_lastname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `diseases` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `identity_number` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `doc_id`, `patient_name`, `patient_lastname`, `date`, `time`, `diseases`, `stage`, `identity_number`, `booking_id`, `region`, `age`, `sex`, `status`) VALUES
(5, 'DOC0037', 'Joseph', 'Chiweda', '2024-03-14', '13:00-14:30', 'bladder_cancer', '40', '63-2395228R-43', 'BID1', 'Harare', ' 29', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cervical_cancer`
--

CREATE TABLE `cervical_cancer` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cervical_cancer`
--

INSERT INTO `cervical_cancer` (`id`, `symptom`, `value`) VALUES
(1, 'Abnormal vaginal bleeding, such as bleeding after sex, between periods, or after menopause', ''),
(2, 'Watery, bloody vaginal discharge that may be heavy and have a foul odor', ''),
(3, 'Pelvic pain or pain during intercourse', '');

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `colon_cancer`
--

CREATE TABLE `colon_cancer` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colon_cancer`
--

INSERT INTO `colon_cancer` (`id`, `symptom`, `value`) VALUES
(1, 'A change in your bowel habits, including diarrhea or constipation or a change in the consistency of your stool', ''),
(2, 'Rectal bleeding or blood in your stool', ''),
(3, 'Persistent abdominal discomfort, such as cramps, gas or pain', ''),
(4, 'A feeling that your bowel doesn\'t empty completely', ''),
(5, 'Weakness or fatigue', ''),
(6, 'Unexplained weight loss', '');

-- --------------------------------------------------------

--
-- Table structure for table `diabetes`
--

CREATE TABLE `diabetes` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) DEFAULT NULL,
  `description` text,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diabetes`
--

INSERT INTO `diabetes` (`id`, `symptom`, `description`, `value`) VALUES
(1, 'Frequent urination', 'Excessive thirst and increased hunger are classic symptoms of diabetes.', ''),
(2, 'Increased thirst', 'Increased thirst can be an early warning sign of diabetes.', ''),
(3, 'Blurry vision', 'Blurry vision can be a symptom of high blood sugar levels.', ''),
(4, 'Slow healing', 'Diabetes can affect your body\'s ability to heal wounds.', ''),
(5, 'Fatigue', 'Feeling tired or fatigued is a common symptom of diabetes.', ''),
(6, 'Weight loss', 'Unexplained weight loss can occur in people with diabetes.', ''),
(7, 'Irritability', 'Changes in mood, such as irritability, can be a symptom of diabetes.', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `mohc_table` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `surname`, `sex`, `doc_id`, `speciality`, `region`, `mohc_table`) VALUES
(1, 'Mufaro', 'Marasha', 'Male', '63-1234567R-12', 'Oncology', 'Harare', 'LUNG_CANCER_SYMPTOMS'),
(2, 'Misheck ', 'Huni', 'Male', 'DOC003', 'Lung_cancer', 'Harare', ''),
(3, 'Jestina', 'Tembo', 'Female', 'DOC005', 'stroke', 'Manicaland', ''),
(4, 'Tonderai', 'Gotora', 'Male', 'DOC0032', 'diabetes', 'Masvingo', ''),
(5, 'Panashe', 'Maswaure', 'Male', 'DOC0033', 'Arthritis', 'Mashonaland central', ''),
(6, 'Jacob', ' Muungani', 'Male', 'DOC0034', 'Colon_cancer', 'Harare', ''),
(7, 'Christine', 'Hichilema', 'Female', 'DOC0035', 'Breast_cancer', 'Mashonaland west', ''),
(8, 'William', 'Muzadzi', 'Male', 'DOC0036', 'heart_disease', 'Harare', ''),
(9, 'Misheck ', 'Tariro', '', 'DOC0037', 'Bladder_cancer', 'Bulawayo', ''),
(10, 'Geoffrey', 'McMillan', 'Male', 'DOC0038', 'Cervical_cancer', 'Harare', ''),
(11, 'Timothy', 'Chironza', 'Male', 'DOC0039', 'Prostate_cancer', 'Harare', ''),
(12, 'Tabeth', 'Marecha', 'Male', 'DOC0040', 'Migraine_headaches', 'Bulawayo', '');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `id` int(11) NOT NULL,
  `string_value` varchar(255) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`id`, `string_value`, `value`, `doc_id`) VALUES
(1, 'Harare', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `graph_age`
--

CREATE TABLE `graph_age` (
  `id` int(11) NOT NULL,
  `string_value` varchar(255) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graph_age`
--

INSERT INTO `graph_age` (`id`, `string_value`, `value`, `doc_id`) VALUES
(1, ' 29', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `graph_sex`
--

CREATE TABLE `graph_sex` (
  `id` int(11) NOT NULL,
  `string_value` varchar(255) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graph_sex`
--

INSERT INTO `graph_sex` (`id`, `string_value`, `value`, `doc_id`) VALUES
(1, 'Male', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `heart_disease`
--

CREATE TABLE `heart_disease` (
  `id` int(11) NOT NULL,
  `symptom` text,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heart_disease`
--

INSERT INTO `heart_disease` (`id`, `symptom`, `value`) VALUES
(1, 'Chest pain or discomfort', '1'),
(2, 'Upper body pain or discomfort in the arms', '1'),
(3, 'Back pain or discomfort', '1'),
(4, 'Neck pain or discomfort', '1'),
(5, 'Jaw pain or discomfort', '0'),
(6, 'Upper stomach pain or discomfort', '1'),
(7, 'Shortness of breath', '1'),
(8, 'Nausea', '0'),
(9, 'Lightheadedness', '1'),
(10, 'Cold sweats', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lung_cancer`
--

CREATE TABLE `lung_cancer` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lung_cancer`
--

INSERT INTO `lung_cancer` (`id`, `symptom`, `value`) VALUES
(1, 'Persistent cough that worsens over time', '1'),
(2, 'Cough that produces blood', '1'),
(3, 'Chest pain that worsens with deep breathing, coughing, or laughing', '1'),
(4, 'Hoarseness', '0'),
(5, 'Shortness of breath', '1'),
(6, 'Wheezing', '0'),
(7, 'Fatigue', '1'),
(8, 'Loss of appetite', '0'),
(9, 'Unexplained weight loss', '0'),
(10, 'Bone pain', '0'),
(11, 'Headache', '1'),
(12, 'Swelling in the neck and face', '0'),
(13, 'Difficulty swallowing', '0');

-- --------------------------------------------------------

--
-- Table structure for table `migraine_headaches`
--

CREATE TABLE `migraine_headaches` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migraine_headaches`
--

INSERT INTO `migraine_headaches` (`id`, `symptom`, `value`) VALUES
(1, 'Throbbing or pulsating pain', '1'),
(2, 'Sensitivity to light, sound, and sometimes smells', '1'),
(3, 'Nausea and vomiting', '1'),
(4, 'Blurred vision', '1'),
(5, 'Lightheadedness, sometimes followed by fainting', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mohc_tables`
--

CREATE TABLE `mohc_tables` (
  `id` int(11) NOT NULL,
  `table_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mohc_tables`
--

INSERT INTO `mohc_tables` (`id`, `table_name`) VALUES
(1, 'stroke'),
(2, 'diabetes'),
(3, 'arthritis'),
(4, 'heart_disease'),
(5, 'migraine_headache'),
(6, 'bladder_cancer'),
(7, 'prostate_cancer'),
(8, 'lung_cancer'),
(9, 'colon_cancer'),
(10, 'cervical_cancer');

-- --------------------------------------------------------

--
-- Table structure for table `patient_results`
--

CREATE TABLE `patient_results` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_lastname` varchar(255) NOT NULL,
  `identity_number` varchar(255) NOT NULL,
  `results` varchar(255) NOT NULL,
  `presriptions` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `how_to_use` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_surname` varchar(255) NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `results_id` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_results`
--

INSERT INTO `patient_results` (`id`, `patient_name`, `patient_lastname`, `identity_number`, `results`, `presriptions`, `quantity`, `how_to_use`, `doc_name`, `doc_surname`, `doc_id`, `results_id`, `date`) VALUES
(6, 'Joseph', 'Chiweda', '63-2395228R-43', 'Negative', 'Parectylodiphiacxy', '10', 'Antibiotic', 'Misheck ', 'Tariro', 'DOC0037', 'FILE1', '2024-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `prostate_cancer`
--

CREATE TABLE `prostate_cancer` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prostate_cancer`
--

INSERT INTO `prostate_cancer` (`id`, `symptom`, `value`) VALUES
(1, 'Frequent urination, especially at night', '1'),
(2, 'Difficulty starting or stopping urination', '0'),
(3, 'Weak or interrupted urinary stream', '1'),
(4, 'Painful or burning sensation during urination', '1'),
(5, 'Blood in urine or semen', '0'),
(6, 'Painful ejaculation', '1'),
(7, 'Frequent pain or stiffness in the lower back, hips, or upper thighs', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stroke`
--

CREATE TABLE `stroke` (
  `id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stroke`
--

INSERT INTO `stroke` (`id`, `symptom`, `value`) VALUES
(1, 'Numbness or weakness in the face, arm, or leg, especially on one side', '1'),
(2, 'Confusion or trouble understanding other people', '1'),
(3, 'Difficulty speaking', '0'),
(4, 'Trouble seeing with one or both eyes', '1'),
(5, 'Difficulty walking, dizziness, or loss of balance or coordination', '1'),
(6, 'Severe headache with no known cause', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `identity_number` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `sex`, `identity_number`, `dob`, `region`, `password`, `phone`, `role`) VALUES
(1, 'Joseph', 'Chiweda', 'Male', '63-2395228R-43', '05/12/1994', 'Harare', '827ccb0eea8a706c4c34a16891f84e7b', '0774369619', 'user'),
(2, 'Mufaro', 'Marasha', 'Male', '63-1234567R-12', '2000-01-01', 'Harare', '827ccb0eea8a706c4c34a16891f84e7b', '0771234567', 'doctor'),
(3, 'Misheck ', 'Huni', 'Male', 'DOC003', '-', 'Harare', '827ccb0eea8a706c4c34a16891f84e7b', '0777123321', 'doctor'),
(4, 'admin', 'admin', 'Male', '12-1234567Z-12', '2002-12-31', 'Harare', '21232f297a57a5a743894a0e4a801fc3', '0777123321', 'admin'),
(31, 'Jestina', 'Tembo', 'Female', 'DOC005', '-', 'Manicaland', '4a7d1ed414474e4033ac29ccb8653d9b', '0777098765', 'doctor'),
(32, 'Tonderai', 'Gotora', 'Male', 'DOC0032', '-', 'Masvingo', '4a7d1ed414474e4033ac29ccb8653d9b', '0777098765', 'doctor'),
(33, 'Panashe', 'Maswaure', 'Male', 'DOC0033', '-', 'Mashonaland central', '4a7d1ed414474e4033ac29ccb8653d9b', '0777125621', 'doctor'),
(34, 'Jacob', ' Muungani', 'Male', 'DOC0034', '-', 'Harare', '4a7d1ed414474e4033ac29ccb8653d9b', '0777058765', 'doctor'),
(35, 'Christine', 'Hichilema', 'Female', 'DOC0035', '-', 'Mashonaland west', '4a7d1ed414474e4033ac29ccb8653d9b', '0777125521', 'doctor'),
(36, 'William', 'Muzadzi', 'Male', 'DOC0036', '-', 'Harare', '827ccb0eea8a706c4c34a16891f84e7b', '0777123365', 'doctor'),
(37, 'Misheck ', 'Tariro', '', 'DOC0037', '-', 'Bulawayo', '827ccb0eea8a706c4c34a16891f84e7b', '0777128621', 'doctor'),
(38, 'Geoffrey', 'McMillan', 'Male', 'DOC0038', '-', 'Harare', '4a7d1ed414474e4033ac29ccb8653d9b', '0777129321', 'doctor'),
(39, 'Timothy', 'Chironza', 'Male', 'DOC0039', '-', 'Harare', '4a7d1ed414474e4033ac29ccb8653d9b', '0777129364', 'doctor'),
(40, 'Tabeth', 'Marecha', 'Male', 'DOC0040', '-', 'Bulawayo', '4a7d1ed414474e4033ac29ccb8653d9b', '0777129456', 'doctor'),
(55, 'Andrew ', 'Tate', 'Male', '63-2395227R-43', '2003-09-28', 'Harare', '827ccb0eea8a706c4c34a16891f84e7b', '0777777777', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arthritis`
--
ALTER TABLE `arthritis`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `arthritis` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `attended`
--
ALTER TABLE `attended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bladder_cancer`
--
ALTER TABLE `bladder_cancer`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `bladder_cancer` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cervical_cancer`
--
ALTER TABLE `cervical_cancer`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `cervical_cancer` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colon_cancer`
--
ALTER TABLE `colon_cancer`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `colon_cancer` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `diabetes`
--
ALTER TABLE `diabetes`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `diabetes` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph_age`
--
ALTER TABLE `graph_age`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph_sex`
--
ALTER TABLE `graph_sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heart_disease`
--
ALTER TABLE `heart_disease`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `heart_disease` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `lung_cancer`
--
ALTER TABLE `lung_cancer`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `lung_cancer` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `migraine_headaches`
--
ALTER TABLE `migraine_headaches`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `migraine_headaches` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `mohc_tables`
--
ALTER TABLE `mohc_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_results`
--
ALTER TABLE `patient_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prostate_cancer`
--
ALTER TABLE `prostate_cancer`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `prostate_cancer` ADD FULLTEXT KEY `symptom` (`symptom`);

--
-- Indexes for table `stroke`
--
ALTER TABLE `stroke`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `stroke` ADD FULLTEXT KEY `symptom` (`symptom`);
ALTER TABLE `stroke` ADD FULLTEXT KEY `symptom_2` (`symptom`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arthritis`
--
ALTER TABLE `arthritis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attended`
--
ALTER TABLE `attended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bladder_cancer`
--
ALTER TABLE `bladder_cancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cervical_cancer`
--
ALTER TABLE `cervical_cancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colon_cancer`
--
ALTER TABLE `colon_cancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diabetes`
--
ALTER TABLE `diabetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `graph`
--
ALTER TABLE `graph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `graph_age`
--
ALTER TABLE `graph_age`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `graph_sex`
--
ALTER TABLE `graph_sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `heart_disease`
--
ALTER TABLE `heart_disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lung_cancer`
--
ALTER TABLE `lung_cancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migraine_headaches`
--
ALTER TABLE `migraine_headaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mohc_tables`
--
ALTER TABLE `mohc_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_results`
--
ALTER TABLE `patient_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prostate_cancer`
--
ALTER TABLE `prostate_cancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stroke`
--
ALTER TABLE `stroke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
