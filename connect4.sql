CREATE SCHEMA IF NOT EXISTS `connect4` DEFAULT CHARACTER SET utf8mb4 ;

USE `connect4` ;

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) AUTO_INCREMENT NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `games_played` int(5) DEFAULT 0,
  `win` int(5) DEFAULT 0,
  `loss` int(5) DEFAULT 0,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
