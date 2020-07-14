CREATE TABLE `staff_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `staff_id` int NOT NULL,
  `day` varchar(3) NOT NULL,
  `start_time` time NOT NULL,
  `end_time(4)` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stfschedule_staff_staff_id_idx` (`staff_id`),
  CONSTRAINT `fk_stfschedule_staff_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
);
