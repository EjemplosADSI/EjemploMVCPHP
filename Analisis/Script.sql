-- MySQL Script generated by MySQL Workbench
-- 08/11/14 12:57:59
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Clientes_Example
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Clientes_Example` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Clientes_Example` ;

-- -----------------------------------------------------
-- Table `Clientes_Example`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Clientes_Example`.`Usuarios` (
  `idUsuarios` INT NOT NULL AUTO_INCREMENT,
  `tipo_identificacion` ENUM('C.C','T.I','C.E') NOT NULL,
  `Identificacion` BIGINT NOT NULL,
  `Nombres` VARCHAR(60) NOT NULL,
  `Apellidos` VARCHAR(60) NOT NULL,
  `Telefono` BIGINT NOT NULL,
  `Direccion` VARCHAR(45) NOT NULL,
  `Fecha_Nacimiento` DATE NOT NULL,
  `Saldo_Cuenta` DOUBLE NOT NULL,
  `user_login` VARCHAR(20) NOT NULL,
  `pass_login` VARCHAR(20) NOT NULL,
  `estado` ENUM('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  UNIQUE INDEX `idUsuarios_UNIQUE` (`idUsuarios` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
