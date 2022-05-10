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
-- Table `mydb`.`CLIENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CLIENTE` (
  `CLI_ID` INT NOT NULL,
  `CLI_NOME` VARCHAR(45) NULL,
  `CLI_SOBRENOME` VARCHAR(45) NULL,
  `CLI_NASCIMENTO` DATE NULL,
  `CLI_TELEFONE` VARCHAR(45) NULL,
  `CLI_EMAIL` VARCHAR(45) NULL,
  `CLI_TELEFONERES` VARCHAR(45) NULL,
  `CLI_CNH` VARCHAR(45) NULL,
  `CLI_CNHVALIDADE` VARCHAR(45) NULL,
  `CLI_CNHPERMISSAO` VARCHAR(45) NULL,
  PRIMARY KEY (`CLI_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`LOJA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`LOJA` (
  `LOJ_ID` INT NOT NULL,
  `LOJ_NOME` VARCHAR(45) NULL,
  `LOJ_ESTADO` VARCHAR(45) NULL,
  `LOJ_CIDADE` VARCHAR(45) NULL,
  `LOJ_RUA` VARCHAR(45) NULL,
  `LOJ_NUMERO` VARCHAR(45) NULL,
  `LOJ_TELEFONE` VARCHAR(45) NULL,
  PRIMARY KEY (`LOJ_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`VEICULO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`VEICULO` (
  `VEI_ID` INT NOT NULL,
  `VEI_MARCA` VARCHAR(45) NULL,
  `VEI_MODELO` VARCHAR(45) NULL,
  `VEI_ANO` VARCHAR(45) NULL,
  `VEI_COR` VARCHAR(45) NULL,
  `VEI_PLACA` VARCHAR(45) NULL,
  `VEI_DOCUMENTO` VARCHAR(45) NULL,
  `VEI_SEGURO` VARCHAR(45) NULL,
  `VEI_COMBUSTIVEL` VARCHAR(45) NULL,
  `VEI_SEGURANCA` VARCHAR(45) NULL,
  `VEI_CONFORTO` VARCHAR(45) NULL,
  `VEI_VALOR` DECIMAL(10,2) NULL,
  `LOJA_LOJ_ID` INT NOT NULL,
  PRIMARY KEY (`VEI_ID`),
  INDEX `fk_VEICULO_LOJA1_idx` (`LOJA_LOJ_ID` ASC) VISIBLE,
  CONSTRAINT `fk_VEICULO_LOJA1`
    FOREIGN KEY (`LOJA_LOJ_ID`)
    REFERENCES `mydb`.`LOJA` (`LOJ_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`LOCACAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`LOCACAO` (
  `LOC_ID` INT NOT NULL,
  `LOC_ENTRADA` DATE NULL,
  `LOC_SAIDA` DATE NULL,
  PRIMARY KEY (`LOC_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`EFETUACAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`EFETUACAO` (
  `CLI_ID` INT NOT NULL,
  `VEI_ID` INT NOT NULL,
  `LOC_ID` INT NOT NULL,
  PRIMARY KEY (`CLI_ID`, `VEI_ID`, `LOC_ID`),
  INDEX `fk_EFETUACAO_VEICULO1_idx` (`VEI_ID` ASC) VISIBLE,
  INDEX `fk_EFETUACAO_LOCACAO1_idx` (`LOC_ID` ASC) VISIBLE,
  CONSTRAINT `fk_EFETUACAO_CLIENTE`
    FOREIGN KEY (`CLI_ID`)
    REFERENCES `mydb`.`CLIENTE` (`CLI_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EFETUACAO_VEICULO1`
    FOREIGN KEY (`VEI_ID`)
    REFERENCES `mydb`.`VEICULO` (`VEI_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EFETUACAO_LOCACAO1`
    FOREIGN KEY (`LOC_ID`)
    REFERENCES `mydb`.`LOCACAO` (`LOC_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ENDERECO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ENDERECO` (
  `CLI_ID` INT NOT NULL,
  `CLI_CIDADE` VARCHAR(45) NULL,
  `CLI_RUA` VARCHAR(45) NULL,
  `CLI_NUMERO` VARCHAR(45) NULL,
  INDEX `fk_ENDERECO_CLIENTE1_idx` (`CLI_ID` ASC) VISIBLE,
  CONSTRAINT `fk_ENDERECO_CLIENTE1`
    FOREIGN KEY (`CLI_ID`)
    REFERENCES `mydb`.`CLIENTE` (`CLI_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`LOGIN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`LOGIN` (
  `CLI_ID` INT NOT NULL,
  `CLI_CPF` VARCHAR(45) NULL,
  `CLI_SENHA` VARCHAR(45) NULL,
  INDEX `fk_LOGIN_CLIENTE1_idx` (`CLI_ID` ASC) VISIBLE,
  CONSTRAINT `fk_LOGIN_CLIENTE1`
    FOREIGN KEY (`CLI_ID`)
    REFERENCES `mydb`.`CLIENTE` (`CLI_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
