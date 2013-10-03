SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `dbmexmov` ;
CREATE SCHEMA IF NOT EXISTS `dbmexmov` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dbmexmov` ;

-- -----------------------------------------------------
-- Table `dbmexmov`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`Usuario` (
  `idUsuario` VARCHAR(10) NOT NULL ,
  `correo` VARCHAR(45) NOT NULL ,
  `Nombre` VARCHAR(45) NOT NULL ,
  `Apellido` VARCHAR(45) NOT NULL ,
  `Fecha_N` DATE NOT NULL ,
  `trabajo` VARCHAR(20) NOT NULL ,
  `Universidad` VARCHAR(20) NOT NULL ,
  `Area` VARCHAR(25) NOT NULL ,
  `Estado` VARCHAR(20) NOT NULL ,
  `Foto` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`idUsuario`, `correo`) ,
  UNIQUE INDEX `idUsuario_UNIQUE` (`idUsuario` ASC) ,
  UNIQUE INDEX `correo_UNIQUE` (`correo` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`Metas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`Metas` (
  `idMetas` INT NOT NULL ,
  `Descripcion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idMetas`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`define`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`define` (
  `idMetas` INT NOT NULL ,
  `idUsuario` VARCHAR(10) NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_final` DATE NOT NULL ,
  `realizada` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`idMetas`) ,
  INDEX `idUsuario_idx` (`idUsuario` ASC) ,
  CONSTRAINT `idMetas`
    FOREIGN KEY (`idMetas` )
    REFERENCES `dbmexmov`.`Metas` (`idMetas` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `dbmexmov`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`amigos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`amigos` (
  `idamigos` INT NOT NULL AUTO_INCREMENT ,
  `idUsuerA` VARCHAR(10) NOT NULL ,
  `Confirmacion` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`idamigos`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`Solicitud`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`Solicitud` (
  `idSolicitud` INT NOT NULL ,
  `idUsuario` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`idSolicitud`) ,
  INDEX `idUsuario_idx` (`idUsuario` ASC) ,
  CONSTRAINT `idSolicitud`
    FOREIGN KEY (`idSolicitud` )
    REFERENCES `dbmexmov`.`amigos` (`idamigos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `dbmexmov`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `dbmexmov`.`trofeo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`trofeo` (
  `idTrofeo` INT NOT NULL AUTO_INCREMENT ,
  `Descripcion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTrofeo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`gana`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`gana` (
  `idgana` INT NOT NULL ,
  `IdUsuario` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`idgana`) ,
  INDEX `idUsuario_idx` (`IdUsuario` ASC) ,
  CONSTRAINT `idgana`
    FOREIGN KEY (`idgana` )
    REFERENCES `dbmexmov`.`trofeo` (`idTrofeo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`IdUsuario` )
    REFERENCES `dbmexmov`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `dbmexmov`.`actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`actividad` (
  `idactividad` INT NOT NULL ,
  `Descripcion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idactividad`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`realiza`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`realiza` (
  `idrealiza` INT NOT NULL AUTO_INCREMENT ,
  `idactividad` INT NOT NULL ,
  `idUsuario` VARCHAR(10) NOT NULL ,
  `distancia` INT NOT NULL ,
  `tiempo` INT NOT NULL ,
  `calorias` INT NOT NULL ,
  `fecha` DATE NOT NULL ,
  `dispositivo` VARCHAR(45) NOT NULL ,
  INDEX `idactividad_idx` (`idactividad` ASC) ,
  PRIMARY KEY (`idrealiza`) ,
  INDEX `idUsuario_idx` (`idUsuario` ASC) ,
  CONSTRAINT `idactividad`
    FOREIGN KEY (`idactividad` )
    REFERENCES `dbmexmov`.`actividad` (`idactividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `dbmexmov`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `dbmexmov`.`test`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`test` (
  `idtest` INT NOT NULL AUTO_INCREMENT ,
  `tipoTest` VARCHAR(45) NOT NULL ,
  `respuesta` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idtest`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmexmov`.`contesta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbmexmov`.`contesta` (
  `idUsuario` VARCHAR(10) NOT NULL ,
  `idtest` INT NOT NULL ,
  PRIMARY KEY (`idUsuario`, `idtest`) ,
  INDEX `idtest_idx` (`idtest` ASC) ,
  INDEX `idUsuario_idx` (`idUsuario` ASC) ,
  CONSTRAINT `idtest`
    FOREIGN KEY (`idtest` )
    REFERENCES `dbmexmov`.`test` (`idtest` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `dbmexmov`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

USE `dbmexmov` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
