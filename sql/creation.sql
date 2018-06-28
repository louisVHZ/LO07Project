--
-- Base de données :  `nounou`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `users_id` int(4) NOT NULL,
  `Disponibilite_id` int(4) NOT NULL,
  PRIMARY KEY (`users_id`,`Disponibilite_id`),
  KEY `fk_users_has_Disponibilite_Disponibilite1_idx` (`Disponibilite_id`),
  KEY `fk_users_has_Disponibilite_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`users_id`, `Disponibilite_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `avoir2`
--

DROP TABLE IF EXISTS `avoir2`;
CREATE TABLE IF NOT EXISTS `avoir2` (
  `users_id` int(4) NOT NULL,
  `garde_id` int(4) NOT NULL,
  PRIMARY KEY (`users_id`,`garde_id`),
  KEY `fk_users_has_garde_garde1_idx` (`garde_id`),
  KEY `fk_users_has_garde_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avoir2`
--

INSERT INTO `avoir2` (`users_id`, `garde_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `demande_de_garde`
--

DROP TABLE IF EXISTS `demande_de_garde`;
CREATE TABLE IF NOT EXISTS `demande_de_garde` (
  `users_id` int(4) NOT NULL,
  `users_id1` int(4) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`users_id`,`users_id1`),
  KEY `fk_users_has_users_users4_idx` (`users_id1`),
  KEY `fk_users_has_users_users3_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande_de_garde`
--

INSERT INTO `demande_de_garde` (`users_id`, `users_id1`, `start_date`, `end_date`) VALUES
(6, 5, '2018-06-01', '2018-06-02'),
(6, 7, '2018-06-01', '2018-06-02');

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

DROP TABLE IF EXISTS `disponibilite`;
CREATE TABLE IF NOT EXISTS `disponibilite` (
  `id` int(4) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id`, `title`, `start_date`, `end_date`) VALUES
(1, 'Disponibilité', '2018-06-13 00:00:00', '2018-06-15 00:00:00'),
(2, 'Disponnibilité', '2018-06-06 00:00:00', '2018-06-07 00:00:00'),
(3, 'Disponibilité', '2018-06-17 00:00:00', '2018-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

DROP TABLE IF EXISTS `enfant`;
CREATE TABLE IF NOT EXISTS `enfant` (
  `id` int(11) NOT NULL,
  `users_id` int(4) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `dateDeNaissance` date DEFAULT NULL,
  `remarque` varchar(100) DEFAULT NULL,
  `restrictionAlimentaire` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_Enfant_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

DROP TABLE IF EXISTS `evaluer`;
CREATE TABLE IF NOT EXISTS `evaluer` (
  `users_id` int(4) NOT NULL,
  `users_id1` int(4) NOT NULL,
  `commentaire` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`users_id`,`users_id1`),
  KEY `fk_users_has_users_users2_idx` (`users_id1`),
  KEY `fk_users_has_users_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(4) NOT NULL,
  `users_id` int(4) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_Experience_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `garde`
--

DROP TABLE IF EXISTS `garde`;
CREATE TABLE IF NOT EXISTS `garde` (
  `id` int(4) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `garde`
--

INSERT INTO `garde` (`id`, `title`, `start_date`, `end_date`) VALUES
(1, 'Garde', '2018-06-28', '2018-06-29');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(4) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parler`
--

DROP TABLE IF EXISTS `parler`;
CREATE TABLE IF NOT EXISTS `parler` (
  `users_id` int(4) NOT NULL,
  `Langue_id` int(4) NOT NULL,
  PRIMARY KEY (`users_id`,`Langue_id`),
  KEY `fk_users_has_Langue_Langue1_idx` (`Langue_id`),
  KEY `fk_users_has_Langue_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `dateDeNaissance` date DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `remarque` varchar(100) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `valide` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(64) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `remember_token` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `fk_users_has_Disponibilite_Disponibilite1` FOREIGN KEY (`Disponibilite_id`) REFERENCES `disponibilite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_Disponibilite_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `avoir2`
--
ALTER TABLE `avoir2`
  ADD CONSTRAINT `fk_users_has_garde_garde1` FOREIGN KEY (`garde_id`) REFERENCES `garde` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_garde_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `demande_de_garde`
--
ALTER TABLE `demande_de_garde`
  ADD CONSTRAINT `fk_users_has_users_users3` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_users_users4` FOREIGN KEY (`users_id1`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `fk_Enfant_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `evaluer`
--
ALTER TABLE `evaluer`
  ADD CONSTRAINT `fk_users_has_users_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_users_users2` FOREIGN KEY (`users_id1`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `fk_Experience_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `parler`
--
ALTER TABLE `parler`
  ADD CONSTRAINT `fk_users_has_Langue_Langue1` FOREIGN KEY (`Langue_id`) REFERENCES `langue` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_Langue_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;