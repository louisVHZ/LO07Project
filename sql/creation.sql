-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(4) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `dateDeNaissance` DATE NULL,
  `rue` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `codePostal` INT(5) NULL,
  `photo` VARCHAR(100) NULL,
  `tel` INT(10) NULL,
  `email` VARCHAR(100) NULL,
  `remarque` VARCHAR(100) NULL,
  `role` VARCHAR(45) NULL,
  `password` VARCHAR(64) NULL,
  `admin` TINYINT(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table  `Langue`
-- -----------------------------------------------------
DROP TABLE IF EXISTS  `Langue` ;

CREATE TABLE IF NOT EXISTS `Langue` (
  `id` INT(4) NOT NULL,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Parler`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Parler` ;

CREATE TABLE IF NOT EXISTS   `Parler` (
  `users_id` INT(4) NOT NULL,
  `Langue_id` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `Langue_id`),
  INDEX `fk_users_has_Langue_Langue1_idx` (`Langue_id` ASC),
  INDEX `fk_users_has_Langue_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_Langue_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Langue_Langue1`
    FOREIGN KEY (`Langue_id`)
    REFERENCES `Langue` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Disponibilite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Disponibilite` ;

CREATE TABLE IF NOT EXISTS   `Disponibilite` (
  `id` INT(4) NOT NULL,
  `dateDebut` DATETIME NULL,
  `dateFin` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Avoir`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Avoir` ;

CREATE TABLE IF NOT EXISTS   `Avoir` (
  `users_id` INT(4) NOT NULL,
  `Disponibilite_id` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `Disponibilite_id`),
  INDEX `fk_users_has_Disponibilite_Disponibilite1_idx` (`Disponibilite_id` ASC),
  INDEX `fk_users_has_Disponibilite_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_Disponibilite_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Disponibilite_Disponibilite1`
    FOREIGN KEY (`Disponibilite_id`)
    REFERENCES   `Disponibilite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Evaluer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Evaluer` ;

CREATE TABLE IF NOT EXISTS   `Evaluer` (
  `users_id` INT(4) NOT NULL,
  `users_id1` INT(4) NOT NULL,
  `commentaire` VARCHAR(100) NULL,
  PRIMARY KEY (`users_id`, `users_id1`),
  INDEX `fk_users_has_users_users2_idx` (`users_id1` ASC),
  INDEX `fk_users_has_users_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_users_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_users_users2`
    FOREIGN KEY (`users_id1`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Enfant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Enfant` ;

CREATE TABLE IF NOT EXISTS   `Enfant` (
  `id` INT NOT NULL,
  `users_id` INT(4) NOT NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `dateDeNaissance` DATE NULL,
  `remarque` VARCHAR(100) NULL,
  `restrictionAlimentaire` VARCHAR(100) NULL,
  PRIMARY KEY (`id`, `users_id`),
  INDEX `fk_Enfant_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_Enfant_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Experience`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Experience` ;

CREATE TABLE IF NOT EXISTS   `Experience` (
  `id` INT(4) NOT NULL,
  `users_id` INT(4) NOT NULL,
  `description` VARCHAR(100) NULL,
  PRIMARY KEY (`id`, `users_id`),
  INDEX `fk_Experience_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_Experience_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Demande_de_garde`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Demande_de_garde` ;

CREATE TABLE IF NOT EXISTS   `Demande_de_garde` (
  `users_id` INT(4) NOT NULL,
  `users_id1` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `users_id1`),
  INDEX `fk_users_has_users_users4_idx` (`users_id1` ASC),
  INDEX `fk_users_has_users_users3_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_users_users3`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_users_users4`
    FOREIGN KEY (`users_id1`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Parler`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Parler` ;

CREATE TABLE IF NOT EXISTS   `Parler` (
  `users_id` INT(4) NOT NULL,
  `Langue_id` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `Langue_id`),
  INDEX `fk_users_has_Langue_Langue1_idx` (`Langue_id` ASC),
  INDEX `fk_users_has_Langue_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_Langue_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Langue_Langue1`
    FOREIGN KEY (`Langue_id`)
    REFERENCES   `Langue` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Avoir`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Avoir` ;

CREATE TABLE IF NOT EXISTS   `Avoir` (
  `users_id` INT(4) NOT NULL,
  `Disponibilite_id` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `Disponibilite_id`),
  INDEX `fk_users_has_Disponibilite_Disponibilite1_idx` (`Disponibilite_id` ASC),
  INDEX `fk_users_has_Disponibilite_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_Disponibilite_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Disponibilite_Disponibilite1`
    FOREIGN KEY (`Disponibilite_id`)
    REFERENCES   `Disponibilite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table   `Avoir2`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Avoir2` ;

CREATE TABLE IF NOT EXISTS   `Avoir2` (
  `users_id` INT(4) NOT NULL,
  `Disponibilite_id` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `garde_id`),
  INDEX `fk_users_has_Disponibilite_Disponibilite1_idx` (`Disponibilite_id` ASC),
  INDEX `fk_users_has_Disponibilite_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_Disponibilite_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_Disponibilite_Disponibilite1`
    FOREIGN KEY (`Disponibilite_id`)
    REFERENCES   `Disponibilite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table   `Avoir2`
-- -----------------------------------------------------
DROP TABLE IF EXISTS   `Avoir2` ;

CREATE TABLE IF NOT EXISTS   `Avoir2` (
  `users_id` INT(4) NOT NULL,
  `garde_id` INT(4) NOT NULL,
  PRIMARY KEY (`users_id`, `garde_id`),
  INDEX `fk_users_has_garde_garde1_idx` (`garde_id` ASC),
  INDEX `fk_users_has_garde_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_users_has_garde_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES   `users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_garde_garde1`
    FOREIGN KEY (`garde_id`)
    REFERENCES   `garde` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table   `Garde`
-- -----------------------------------------------------
DROP TABLE IF EXISTS Garde;

CREATE TABLE IF NOT EXISTS Garde (
  id int(4) NOT NULL,
  title varchar(64) DEFAULT NULL,
  start_date date DEFAULT NULL,
  end_date date DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;