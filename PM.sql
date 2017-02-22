-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `task` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`id`, `user_id`, `task`) VALUES
(1,	1,	' dfgdfg dfgdfg dfg dfg '),
(2,	2,	'dfgdfg dfg dfg dfgfgf were er sc srt s '),
(3,	1,	'dfgdfg rre et54g 4tf re'),
(4,	3,	'dfgfddffgg dfdfdf dfg'),
(5,	1,	'dss3r ty ytj yj nyn ');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1,	'Karen',	'5a4629189a54ce51bd2018227e923bbc',	1),
(2,	'Arsen',	'77bd74e8f1db91641369f6743fdfb174',	1),
(3,	'hayk',	'22acf722e6eef2b7a4355fe2ba57b355',	1),
(4,	'hakob',	'a12b295447b469c842be7ae232aad275',	0),
(5,	'Samvel',	'efe98810a6f1180341ad384ea6024586',	1);

-- 2017-02-22 12:57:29
