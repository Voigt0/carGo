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
-- Table `mydb`.`LOCACAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`LOCACAO` (
  `LOC_ID` INT NOT NULL,
  `LOC_ENTRADA` DATE NULL,
  `LOC_SAIDA` DATE NULL,
  `LOC_VALOR` DECIMAL(10,2) NULL,
  PRIMARY KEY (`LOC_ID`))
ENGINE = InnoDB;
