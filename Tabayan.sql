-- MySQL Workbench Synchronization
-- Generated: 2020-07-14 19:03
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Reema Alhammadi

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `user_name` VARCHAR(45) NOT NULL,
  `user_password` VARCHAR(45) NOT NULL,
  `user_timeStamp` DATETIME GENERATED ALWAYS AS ()  COMMENT 'to know when the user sign in \n',
  `check_check_id` INT(11) NOT NULL,
  `check_check_id1` INT(11) NOT NULL,
  PRIMARY KEY (`user_name`, `check_check_id`, `check_check_id1`),
  UNIQUE INDEX `user_name_UNIQUE` (`user_name` ASC) VISIBLE,
  INDEX `fk_user_check1_idx` (`check_check_id1` ASC) VISIBLE,
  CONSTRAINT `fk_user_check1`
    FOREIGN KEY (`check_check_id1`)
    REFERENCES `mydb`.`check` (`check_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`data` (
  `data_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_kind` VARCHAR(45) NOT NULL,
  `data_date` DATETIME GENERATED ALWAYS AS (),
  `data_subject` VARCHAR(45) NOT NULL,
  `user_user_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`data_ID`, `user_user_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`check` (
  `check_id` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`check_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`data_has_check` (
  `data_has_check_col` INT(11) NOT NULL AUTO_INCREMENT,
  `data_data_ID` INT(10) UNSIGNED NOT NULL,
  `data_user_user_name` VARCHAR(45) NOT NULL,
  `check_user_user_name` VARCHAR(45) NOT NULL,
  `check_check_id` INT(11) NOT NULL,
  PRIMARY KEY (`data_has_check_col`, `data_data_ID`, `data_user_user_name`, `check_user_user_name`, `check_check_id`),
  INDEX `fk_data_has_check_data1_idx` (`data_data_ID` ASC, `data_user_user_name` ASC) VISIBLE,
  INDEX `fk_data_has_check_check1_idx` (`check_check_id` ASC) VISIBLE,
  CONSTRAINT `fk_data_has_check_data1`
    FOREIGN KEY (`data_data_ID` , `data_user_user_name`)
    REFERENCES `mydb`.`data` (`data_ID` , `user_user_name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_data_has_check_check1`
    FOREIGN KEY (`check_check_id`)
    REFERENCES `mydb`.`check` (`check_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`user_has_data` (
  `use_Data` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'counter of how manny data has been entered by the user \n',
  `user_user_name` VARCHAR(45) NOT NULL,
  `user_check_check_id` INT(11) NOT NULL,
  `data_data_ID` INT(10) UNSIGNED NOT NULL,
  `data_user_user_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`use_Data`, `user_user_name`, `user_check_check_id`, `data_data_ID`, `data_user_user_name`),
  INDEX `fk_user_has_data_data1_idx` (`data_data_ID` ASC, `data_user_user_name` ASC) VISIBLE,
  INDEX `fk_user_has_data_user1_idx` (`user_user_name` ASC, `user_check_check_id` ASC) VISIBLE,
  CONSTRAINT `fk_user_has_data_user1`
    FOREIGN KEY (`user_user_name` , `user_check_check_id`)
    REFERENCES `mydb`.`user` (`user_name` , `check_check_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_user_has_data_data1`
    FOREIGN KEY (`data_data_ID` , `data_user_user_name`)
    REFERENCES `mydb`.`data` (`data_ID` , `user_user_name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
