-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Users_Type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users_Type` (
  `Id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users` (
  `Id` INT NOT NULL,
  `Users_Type_id` INT NOT NULL,
  `Name` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Photo` VARCHAR(255) NOT NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`),
  INDEX `fk_Users_Users_Categories_idx` (`Users_Type_id` ASC) VISIBLE,
  CONSTRAINT `fk_Users_Users_Categories`
    FOREIGN KEY (`Users_Type_id`)
    REFERENCES `mydb`.`Users_Type` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Flocks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Flocks` (
  `Id` INT NOT NULL,
  `Users_id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  INDEX `fk_Lotes_Users1_idx` (`Users_id` ASC) VISIBLE,
  PRIMARY KEY (`Id`),
  CONSTRAINT `fk_Lotes_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `mydb`.`Users` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Sheeps`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Sheeps` (
  `Id` INT NOT NULL,
  `Flocks_Id` INT NOT NULL,
  `Number` INT NOT NULL,
  `EarTag` VARCHAR(45) NOT NULL,
  `Sex` VARCHAR(45) NOT NULL,
  `Pregnancy` TINYINT(1) NOT NULL DEFAULT 0,
  `BirthDate` DATE NOT NULL,
  `Breed` VARCHAR(255) NOT NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  `Mother_Id` INT NOT NULL,
  `Father_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Ovelha_Lotes1_idx` (`Flocks_Id` ASC) VISIBLE,
  INDEX `fk_Sheeps_Sheeps1_idx` (`Mother_Id` ASC) VISIBLE,
  INDEX `fk_Sheeps_Sheeps2_idx` (`Father_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Ovelha_Lotes1`
    FOREIGN KEY (`Flocks_Id`)
    REFERENCES `mydb`.`Flocks` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sheeps_Sheeps1`
    FOREIGN KEY (`Mother_Id`)
    REFERENCES `mydb`.`Sheeps` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sheeps_Sheeps2`
    FOREIGN KEY (`Father_Id`)
    REFERENCES `mydb`.`Sheeps` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Diseases`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Diseases` (
  `Id` INT NOT NULL,
  `Sheeps_Id` INT NOT NULL,
  `Name` VARCHAR(255) NOT NULL,
  `Start_Date` DATE NOT NULL,
  `End_Date` DATE NULL,
  `Situation` VARCHAR(255) NULL,
  `Veterinarian` VARCHAR(255) NULL,
  `Treatment` VARCHAR(255) NULL,
  `Observation` VARCHAR(255) NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`),
  INDEX `fk_Diseases_Sheeps1_idx` (`Sheeps_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Diseases_Sheeps1`
    FOREIGN KEY (`Sheeps_Id`)
    REFERENCES `mydb`.`Sheeps` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Wounds`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Wounds` (
  `Id` INT NOT NULL,
  `Sheeps_Id` INT NOT NULL,
  `Description` VARCHAR(255) NOT NULL,
  `Date` VARCHAR(255) NOT NULL,
  `Location` VARCHAR(255) NULL,
  `Situation` VARCHAR(255) NULL,
  `Severity` VARCHAR(255) NULL,
  `Treatment` VARCHAR(255) NULL,
  `Observation` VARCHAR(255) NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`),
  INDEX `fk_Wounds_Sheeps1_idx` (`Sheeps_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Wounds_Sheeps1`
    FOREIGN KEY (`Sheeps_Id`)
    REFERENCES `mydb`.`Sheeps` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Vaccines`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vaccines` (
  `Id` INT NOT NULL,
  `Sheeps_Id` INT NOT NULL,
  `Name` VARCHAR(255) NOT NULL,
  `Aplication_Date` DATE NOT NULL,
  `Dose` VARCHAR(255) NULL,
  `Aplicator` VARCHAR(255) NULL,
  `Observation` VARCHAR(255) NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`),
  INDEX `fk_Vaccines_Sheeps1_idx` (`Sheeps_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Vaccines_Sheeps1`
    FOREIGN KEY (`Sheeps_Id`)
    REFERENCES `mydb`.`Sheeps` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Deworming`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Deworming` (
  `Id` INT NOT NULL,
  `Sheeps_Id` INT NOT NULL,
  `Vermifuge` VARCHAR(255) NOT NULL,
  `Aplication_Date` DATE NOT NULL,
  `Next_Aplication` DATE NULL,
  `Dose` VARCHAR(255) NULL,
  `Via` VARCHAR(255) NULL,
  `Aplicator` VARCHAR(255) NULL,
  `Observation` VARCHAR(255) NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`),
  INDEX `fk_Deworming_Sheeps1_idx` (`Sheeps_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Deworming_Sheeps1`
    FOREIGN KEY (`Sheeps_Id`)
    REFERENCES `mydb`.`Sheeps` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Faqs_Categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Faqs_Categories` (
  `Id` INT NOT NULL,
  `Name` VARCHAR(255) NOT NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Faqs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Faqs` (
  `Id` INT NOT NULL,
  `Faqs_Categories_Id` INT NOT NULL,
  `Question` VARCHAR(255) NOT NULL,
  `Answer` VARCHAR(255) NOT NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`, `Faqs_Categories_Id`),
  INDEX `fk_Faqs_Faqs_Categories1_idx` (`Faqs_Categories_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Faqs_Faqs_Categories1`
    FOREIGN KEY (`Faqs_Categories_Id`)
    REFERENCES `mydb`.`Faqs_Categories` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Treatments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Treatments` (
  `Id` INT NOT NULL,
  `Type` VARCHAR(255) NOT NULL,
  `Start_Date` DATE NOT NULL,
  `End_Date` DATE NULL,
  `Treatmentscol` VARCHAR(45) NULL,
  `Treatmentscol1` VARCHAR(45) NULL,
  `Medications` VARCHAR(255) NULL,
  `Dose_Frequency` VARCHAR(255) NULL,
  `Veterinarian` VARCHAR(255) NULL,
  `Observations` VARCHAR(255) NULL,
  `Active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
