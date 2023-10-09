

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `Issues` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `IssueType` varchar(255) NOT NULL,
  `TheIssue` varchar(255) NOT NULL,
  `Status` enum('Incomplete','Complete','','') NOT NULL DEFAULT 'Incomplete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Issues` (`ID`, `Name`, `Email`, `Department`, `IssueType`, `TheIssue`, `Status`) VALUES
(1, 'John Doe', 'JohnDoe@gmail.com', 'Human Resources', 'Hardware', 'Mouse is not working', 'Incomplete'),
(2, 'Tyrion Lannister', 'Lannister@Kingsland.com', 'Dwarven', 'Cable Issues', 'Internet cable too short', 'Incomplete'),
(3, 'Albus Dumbledore', 'ADumbledore@Hogwarts.com', 'Head Master', 'Hardware', 'Elder wand is not working properly', 'Incomplete'),
(4, 'Foster Holmes', 'Folmes@gmail.com', 'Human Resources', 'Software', 'Random Windows update', 'Incomplete'),
(5, 'Hecat', 'Hecat@Hogwarts.com', 'Dark Arts', 'Hardware', 'Issue with the smart board', 'Incomplete'),
(6, 'Stefan', 'STfan@gmail.com', 'Maths', 'Software', 'Book software is not working', 'Incomplete'),
(7, 'Mathew', 'Mthew@gmail.com', 'Chemistry', 'Cable Issues', 'Cable is missing', 'Incomplete');

ALTER TABLE `Issues`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `Issues`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
