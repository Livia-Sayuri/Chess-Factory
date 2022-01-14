CREATE DATABASE login;

USE login;

CREATE TABLE `login`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(200) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`user_id`));

INSERT INTO `user`(`user_id`, `user`, `password`) VALUES ('1','Liv','PA$$W0RD');

