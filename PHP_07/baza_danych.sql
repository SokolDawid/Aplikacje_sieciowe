SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `simpledb` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
USE `simpledb` ;

-- -----------------------------------------------------
-- Table `simpledb`.`creditcalc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simpledb`.`creditcalc` (
  `idcredit` INT NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `interest_rate` float NOT NULL,
  `monthly_installment` float NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idcredit`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;