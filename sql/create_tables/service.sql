CREATE TABLE `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(144) DEFAULT NULL,
  `duration` int NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
);