-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema coop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema coop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coop` DEFAULT CHARACTER SET utf8 ;
USE `coop` ;

-- -----------------------------------------------------
-- Table `coop`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coop`.`usuarios` (
  `id_usuarios` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(30) NOT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL,
  `last_login` TIMESTAMP NULL,
  PRIMARY KEY (`id_usuarios`, `usuario`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC),
  UNIQUE INDEX `id_usuarios_UNIQUE` (`id_usuarios` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coop`.`aportes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coop`.`aportes` (
  `idaportes` INT NOT NULL AUTO_INCREMENT,
  `monto` DECIMAL NOT NULL,
  `fecha_aporte` TIMESTAMP NULL,
  PRIMARY KEY (`idaportes`),
  UNIQUE INDEX `idaportes_UNIQUE` (`idaportes` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coop`.`proyectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coop`.`proyectos` (
  `idproyectos` INT NOT NULL,
  `nombre_proyecto` VARCHAR(255) NOT NULL,
  `monto_necesario` DECIMAL NULL,
  `fecha_creacion` DATE NULL,
  `fecha_finalizado` DATE NULL,
  `cantidad_votos` INT NULL,
  PRIMARY KEY (`idproyectos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coop`.`documentacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coop`.`documentacion` (
  `iddocumentacion` INT NOT NULL,
  `idproyectos` INT NOT NULL,
  `factura` BLOB NULL,
  `monto_factura` DECIMAL NULL,
  `fecha_subida` DATE NULL,
  PRIMARY KEY (`iddocumentacion`, `idproyectos`),
  INDEX `fk_documentacion_proyectos_idx` (`idproyectos` ASC),
  CONSTRAINT `fk_documentacion_proyectos`
    FOREIGN KEY (`idproyectos`)
    REFERENCES `coop`.`proyectos` (`idproyectos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
