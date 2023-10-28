
-- Membuang struktur basisdata untuk tugas_web_07
CREATE DATABASE IF NOT EXISTS `tugas_web_07` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tugas_web_07`;

-- membuang struktur untuk table tugas_web_07.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=UTF8MB4_GENERAL_CI;

DROP TABLE USER;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL primary key AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL
  )
ALTER TABLE user
ADD COLUMN `role` VARCHAR(255);
