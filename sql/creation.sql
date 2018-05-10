-- -----------------------------------------------------
-- Table `Utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `id` INT(4) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `dateDeNaissance` DATE NULL,
  `rue` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `codePostal` INT(5) NULL,
  `photo` VARCHAR(45) NULL,
  `tel` INT(10) NULL,
  `email` VARCHAR(100) NULL,
  `motdepasse` VARCHAR(45) NULL,
  `admin` TINYINT(1) NULL CHECK VALUE IN (0, 1),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Parent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Parent` (
  `id` INT(4) NOT NULL,
  `remarque` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Parent_Utilisateur`
    FOREIGN KEY (`id`)
    REFERENCES `Utilisateur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Nounou`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Nounou` (
  `id` INT(4) NOT NULL,
  `presentation` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Nounou_Utilisateur1`
    FOREIGN KEY (`id`)
    REFERENCES `Utilisateur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Langue`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Langue` (
  `id` INT(4) NOT NULL,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Parler`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Parler` (
  `Nounou_id` INT(4) NOT NULL,
  `Langue_id` INT(4) NOT NULL,
  PRIMARY KEY (`Nounou_id`, `Langue_id`),
  INDEX `fk_Nounou_has_Langue_Langue1_idx` (`Langue_id` ASC),
  INDEX `fk_Nounou_has_Langue_Nounou1_idx` (`Nounou_id` ASC),
  CONSTRAINT `fk_Nounou_has_Langue_Nounou1`
    FOREIGN KEY (`Nounou_id`)
    REFERENCES `Nounou` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Nounou_has_Langue_Langue1`
    FOREIGN KEY (`Langue_id`)
    REFERENCES `Langue` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table .`Disponibilite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Disponibilite` (
  `id` INT(4) NOT NULL,
  `dateDebut` DATETIME NULL,
  `dateFin` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Avoir`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Avoir` (
  `Nounou_id` INT(4) NOT NULL,
  `Disponibilité_id` INT(4) NOT NULL,
  PRIMARY KEY (`Nounou_id`, `Disponibilité_id`),
  INDEX `fk_Nounou_has_Disponibilité_Disponibilité1_idx` (`Disponibilité_id` ASC),
  INDEX `fk_Nounou_has_Disponibilité_Nounou1_idx` (`Nounou_id` ASC),
  CONSTRAINT `fk_Nounou_has_Disponibilité_Nounou1`
    FOREIGN KEY (`Nounou_id`)
    REFERENCES `Nounou` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Nounou_has_Disponibilité_Disponibilité1`
    FOREIGN KEY (`Disponibilité_id`)
    REFERENCES `Disponibilite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Evaluer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Evaluer` (
  `Parent_id` INT(4) NOT NULL,
  `Nounou_id` INT(4) NOT NULL,
  `note` INT(1) NULL,
  `commentaire` VARCHAR(100) NULL,
  PRIMARY KEY (`Parent_id`, `Nounou_id`),
  INDEX `fk_Parent_has_Nounou_Nounou1_idx` (`Nounou_id` ASC),
  INDEX `fk_Parent_has_Nounou_Parent1_idx` (`Parent_id` ASC),
  CONSTRAINT `fk_Parent_has_Nounou_Parent1`
    FOREIGN KEY (`Parent_id`)
    REFERENCES `Parent` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Parent_has_Nounou_Nounou1`
    FOREIGN KEY (`Nounou_id`)
    REFERENCES `Nounou` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Enfant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Enfant` (
  `id` INT NOT NULL,
  `Parent_id` INT(4) NOT NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `dateDeNaissance` DATE NULL,
  `remarque` VARCHAR(100) NULL,
  `restrictionAlimentaire` VARCHAR(100) NULL,
  PRIMARY KEY (`id`, `Parent_id`),
  INDEX `fk_Enfant_Parent1_idx` (`Parent_id` ASC),
  CONSTRAINT `fk_Enfant_Parent1`
    FOREIGN KEY (`Parent_id`)
    REFERENCES `Parent` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Experience`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Experience` (
  `id` INT(4) NOT NULL,
  `Nounou_id` INT(4) NOT NULL,
  `description` VARCHAR(100) NULL,
  PRIMARY KEY (`id`, `Nounou_id`),
  INDEX `fk_Experience_Nounou1_idx` (`Nounou_id` ASC),
  CONSTRAINT `fk_Experience_Nounou1`
    FOREIGN KEY (`Nounou_id`)
    REFERENCES `Nounou` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DemandeDeGarde`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DemandeDeGarde` (
  `Parent_id` INT(4) NOT NULL,
  `Nounou_id` INT(4) NOT NULL,
  `message` VARCHAR(50) NULL,
  PRIMARY KEY (`Parent_id`, `Nounou_id`),
  INDEX `fk_Parent_has_Nounou_Nounou2_idx` (`Nounou_id` ASC),
  INDEX `fk_Parent_has_Nounou_Parent2_idx` (`Parent_id` ASC),
  CONSTRAINT `fk_Parent_has_Nounou_Parent2`
    FOREIGN KEY (`Parent_id`)
    REFERENCES `Parent` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Parent_has_Nounou_Nounou2`
    FOREIGN KEY (`Nounou_id`)
    REFERENCES `Nounou` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
