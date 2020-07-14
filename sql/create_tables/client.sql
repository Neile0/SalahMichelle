CREATE TABLE `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `contact_phone` varchar(9) NOT NULL,
  `contact_mail` varchar(64) DEFAULT NULL,
  `mailing_list` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ;
