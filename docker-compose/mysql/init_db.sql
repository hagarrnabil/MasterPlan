DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numbuildings` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cities` (name, numbuildings) VALUES ('Cairo',10),('Alexandria',7),('Portsaid',5),('Aswan',3),('Giza',9),('Luxor',3),('Hurghada',2),('Faiyum',1),('Suez',1),('Tanta',0),('Minya',0);
