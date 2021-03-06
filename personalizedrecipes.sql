-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 05:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalizedrecipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatID` int(11) NOT NULL,
  `CatName` varchar(15) NOT NULL,
  `CatLink` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `CatName`, `CatLink`) VALUES
(1, 'Chinese', ''),
(2, 'Healthy', ''),
(3, 'Indian', '');

-- --------------------------------------------------------

--
-- Table structure for table `ingforrecipe`
--

CREATE TABLE `ingforrecipe` (
  `RecipeID` int(11) NOT NULL,
  `IngredientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingforrecipe`
--

INSERT INTO `ingforrecipe` (`RecipeID`, `IngredientID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `IngID` int(11) NOT NULL,
  `IngName` varchar(15) NOT NULL,
  `IngLink` longtext NOT NULL,
  `IngType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`IngID`, `IngName`, `IngLink`, `IngType`) VALUES
(1, 'Cucumber', '', 'V'),
(2, 'Meat', '', 'P'),
(3, 'Apples', 'https://cozmo.jo/catalog/product/view/id/8298/category/787/', 'F'),
(5, 'Lemon', 'https://cozmo.jo/fruits-vegetables/african-lemons.html', 'V'),
(6, 'potato', 'https://cozmo.jo/catalog/product/view/id/8329/category/787/', 'C'),
(7, 'Spinach', 'https://cozmo.jo/catalog/product/view/id/8343/category/787/', 'V'),
(8, 'Chicken', '', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `ingtype`
--

CREATE TABLE `ingtype` (
  `TypeID` varchar(10) NOT NULL,
  `TypeName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingtype`
--

INSERT INTO `ingtype` (`TypeID`, `TypeName`) VALUES
('C', 'Carbs'),
('D', 'Dairy'),
('F', 'Fruits'),
('H', 'Herbs'),
('P', 'Proteins'),
('V', 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `RecID` int(11) NOT NULL,
  `RecName` varchar(30) NOT NULL,
  `RecLink` varchar(30) NOT NULL,
  `CatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`RecID`, `RecName`, `RecLink`, `CatID`) VALUES
(1, 'Salad', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stepsforrecipe`
--

CREATE TABLE `stepsforrecipe` (
  `StepID` int(11) NOT NULL,
  `RecID` int(11) NOT NULL,
  `Prepare` varchar(40) NOT NULL,
  `Cook` varchar(40) NOT NULL,
  `Notes` varchar(40) NOT NULL,
  `TimeTaken` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stepsforrecipe`
--

INSERT INTO `stepsforrecipe` (`StepID`, `RecID`, `Prepare`, `Cook`, `Notes`, `TimeTaken`) VALUES
(1, 1, 'Cut the cucumbers and tomato', 'mix them well', 'you can add other ingredients', '00:06:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `ingforrecipe`
--
ALTER TABLE `ingforrecipe`
  ADD PRIMARY KEY (`RecipeID`,`IngredientID`),
  ADD KEY `FK_IngID` (`IngredientID`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`IngID`),
  ADD KEY `FK_Type` (`IngType`);

--
-- Indexes for table `ingtype`
--
ALTER TABLE `ingtype`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`RecID`),
  ADD KEY `FK_Cat` (`CatID`);

--
-- Indexes for table `stepsforrecipe`
--
ALTER TABLE `stepsforrecipe`
  ADD PRIMARY KEY (`StepID`),
  ADD KEY `FK_RecID2` (`RecID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `IngID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `RecID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stepsforrecipe`
--
ALTER TABLE `stepsforrecipe`
  MODIFY `StepID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingforrecipe`
--
ALTER TABLE `ingforrecipe`
  ADD CONSTRAINT `FK_IngID` FOREIGN KEY (`IngredientID`) REFERENCES `ingredients` (`IngID`),
  ADD CONSTRAINT `FK_RecID` FOREIGN KEY (`RecipeID`) REFERENCES `recipes` (`RecID`);

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `FK_Type` FOREIGN KEY (`IngType`) REFERENCES `ingtype` (`TypeID`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `FK_Cat` FOREIGN KEY (`CatID`) REFERENCES `category` (`CatID`);

--
-- Constraints for table `stepsforrecipe`
--
ALTER TABLE `stepsforrecipe`
  ADD CONSTRAINT `FK_RecID2` FOREIGN KEY (`RecID`) REFERENCES `recipes` (`RecID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
