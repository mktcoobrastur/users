CREATE TABLE `atendentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qnt_vendas` int(11) DEFAULT '0',
  `representante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `atendentes` VALUES (1,'Daphne Fontana','daphne.jpg','sound.mp3',7,'televenda',NULL,NULL,NULL,NULL),(2,'Ana Maria Cardoso','anamaria.jpg','sound.mp3',27,'televenda',NULL,NULL,NULL,NULL),(3,'Danielle Dias','danielle.jpg','sound.mp3',19,'televenda',NULL,NULL,NULL,NULL),(4,'Marilena Messa','marilena.jpg','sound.mp3',18,'televenda',NULL,NULL,NULL,NULL),(5,'Sandra Schneider','sandra.jpg','sound.mp3',21,'televenda',NULL,NULL,NULL,NULL),(6,'Liane Duarte','liane.jpg','sound.mp3',15,'televenda',NULL,NULL,NULL,NULL),(7,'Mariana Santos','mariana.jpg','sound.mp3',19,'televenda',NULL,NULL,NULL,NULL),(8,'Morgana da Silva','morgana.jpg','sound.mp3',16,'televenda',NULL,NULL,NULL,NULL),(9,'Aurelia de Carvalho','aurelia.jpg','sound.mp3',26,'televenda',NULL,NULL,NULL,NULL),(10,'Camila de Moraes','camila.jpg','sound.mp3',12,'televenda',NULL,NULL,NULL,NULL),(11,'Luciana Soncini','luciana.jpg','sound.mp3',10,'televenda',NULL,NULL,NULL,NULL),(12,'Jessica Friedrichs','jessica.jpg','sound.mp3',8,'televenda',NULL,NULL,NULL,NULL),(13,'Aline Rodrigues','aline.jpg','sound.mp3',16,'televenda',NULL,NULL,NULL,NULL),(14,'Ana Kalina Cabral','foto.jpg','sound.mp3',12,'televenda',NULL,NULL,NULL,NULL),(15,'Danubia Santos','anamaria.jpg','sound.mp3',15,'televenda',NULL,NULL,NULL,NULL),(16,'Ana Caroline Souto','liane.jpg','sound.mp3',29,'televenda',NULL,NULL,NULL,NULL),(17,'Marcia Flach','marcia.jpg','sound.mp3',14,'televenda',NULL,NULL,NULL,NULL),(18,'Tailaine Elias','tailaine.jpg','sound.mp3',15,'televenda',NULL,NULL,NULL,NULL),(19,'Silvia Travi','danielle.jpg','sound.mp3',5,'televenda',NULL,NULL,NULL,NULL),(20,'Joyce Fereira','joyce.jpg','sound.mp3',30,'televenda',NULL,NULL,NULL,NULL);