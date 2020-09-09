CREATE TABLE `default`.`users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(255) NOT NULL ,
  `last_name` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `users` (`first_name`, `last_name`) VALUES
('John', 'Doe'),
('Jonnette', 'Doette');