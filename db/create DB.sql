-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cooperativa
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cooperativa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cooperativa` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `cooperativa` ;

-- -----------------------------------------------------
-- Table `cooperativa`.`aportes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cooperativa`.`aportes` (
  `idaportes` INT(11) NOT NULL AUTO_INCREMENT,
  `monto` DECIMAL(10,0) NOT NULL,
  `fecha_aporte` TIMESTAMP NULL DEFAULT NULL,
  `proyectos_idproyectos` INT(11) NULL,
  PRIMARY KEY (`idaportes`),
  UNIQUE INDEX `idaportes_UNIQUE` (`idaportes` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cooperativa`.`proyectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cooperativa`.`proyectos` (
  `idproyectos` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` VARCHAR(255) NOT NULL,
  `monto_necesario` DECIMAL(12,2) NULL DEFAULT NULL,
  `fecha_creacion` DATE NULL DEFAULT NULL,
  `fecha_finalizado` DATE NULL DEFAULT NULL,
  `cantidad_votos` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idproyectos`),
  UNIQUE INDEX `idproyectos_UNIQUE` (`idproyectos` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cooperativa`.`documentacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cooperativa`.`documentacion` (
  `iddocumentacion` INT(11) NOT NULL AUTO_INCREMENT,
  `idproyectos` INT(11) NOT NULL,
  `factura` BLOB NULL DEFAULT NULL,
  `monto_factura` DECIMAL(12,2) NULL DEFAULT NULL,
  `fecha_subida` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`iddocumentacion`),
  INDEX `fk_documentacion_proyectos_idx` (`idproyectos` ASC) VISIBLE,
  CONSTRAINT `fk_documentacion_proyectos`
    FOREIGN KEY (`idproyectos`)
    REFERENCES `cooperativa`.`proyectos` (`idproyectos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cooperativa`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cooperativa`.`usuarios` (
  `id_usuarios` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(30) NOT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(8) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT NULL,
  `last_login` TIMESTAMP NULL DEFAULT NULL,
  `tipo_usuario` VARCHAR(1) NULL,
  PRIMARY KEY (`id_usuarios`),
  UNIQUE INDEX `id_usuarios_UNIQUE` (`id_usuarios` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
