CREATE TABLE `staff_provides` (
  `staff_id` int NOT NULL,
  `service_id` int NOT NULL,
  PRIMARY KEY (`staff_id`,`service_id`),
  KEY `fk_stfprovides_service_service_id_idx` (`service_id`),
  CONSTRAINT `fk_stfprovides_service_service_id` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_stfprovides_staff_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
);
