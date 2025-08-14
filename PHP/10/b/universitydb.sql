-- --------------------------------------------------------
-- Table structure for table `faculty`
-- --------------------------------------------------------
CREATE TABLE `faculty` (
  `faculty_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `faculty_name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
(1, 'Economics'),
(2, 'IT'),
(3, 'Law');

-- --------------------------------------------------------
-- Table structure for table `province`
-- --------------------------------------------------------
CREATE TABLE `province` (
  `province_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(1, 'Phnom Penh'),
(2, 'Kandal'),
(3, 'Kampot'),
(4, 'Kep');

-- --------------------------------------------------------
-- Table structure for table `university`
-- --------------------------------------------------------
CREATE TABLE `university` (
  `university_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `university_name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`university_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `university` (`university_id`, `university_name`) VALUES
(1, 'RULE'),
(2, 'NUM'),
(3, 'BBU');

-- --------------------------------------------------------
-- Table structure for table `student`
-- --------------------------------------------------------
CREATE TABLE `student` (
  `student_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_name` VARCHAR(40) NOT NULL,
  `gender` VARCHAR(6) NOT NULL,
  `stu_university_id` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `stu_faculty_id` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `stu_province_id` INT(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `student` (`student_id`, `student_name`, `gender`, `stu_university_id`, `stu_faculty_id`, `stu_province_id`) VALUES
(1, 'Sreng Sineang', 'Female', 1, 1, 1),
(2, 'Huy Makara', 'Male', 1, 2, 2),
(3, 'Chean Sopheak', 'Male', 2, 3, 3),
(4, 'Heng Hay', 'Male', 3, 1, 4),
(5, 'Phen Sophana', 'Male', 2, 2, 1);
