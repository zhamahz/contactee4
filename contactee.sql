-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.22-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных contactee
CREATE DATABASE IF NOT EXISTS `contactee` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `contactee`;

-- Дамп структуры для таблица contactee.auth_assignment
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.auth_assignment: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
REPLACE INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
	('Admin', 3, 1553822355),
	('User', 2, 1553168239),
	('User', 4, 1553822818),
	('User', 5, 1560534694);
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;

-- Дамп структуры для таблица contactee.auth_item
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  KEY `fk_auth_item_group_code` (`group_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.auth_item: ~80 rows (приблизительно)
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
REPLACE INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
	('/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//controller', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//crud', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//extension', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//form', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//model', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('//module', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/asset/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/asset/compress', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/asset/template', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/cache/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/cache/flush', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/cache/flush-all', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/cache/flush-schema', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/cache/index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/fixture/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/fixture/load', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/fixture/unload', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/default/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/default/action', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/default/diff', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/default/index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/default/preview', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/gii/default/view', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/hello/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/hello/index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/help/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/help/index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/help/list', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/help/list-action-options', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/help/usage', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/message/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/message/config', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/message/config-template', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/message/extract', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/create', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/down', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/fresh', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/history', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/mark', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/new', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/redo', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/to', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/migrate/up', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/serve/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/serve/index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/*', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/change-password', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/create', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/delete', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/index', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/update', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('/user-management/user/view', 3, NULL, NULL, NULL, 1553116978, 1553116978, NULL),
	('Admin', 1, 'Admin', NULL, NULL, 1553116978, 1553116978, NULL),
	('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1553116978, 1553116978, 'userCommonPermissions'),
	('changeUserPassword', 2, 'Change user password', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('commonPermission', 2, 'Common permission', NULL, NULL, 1553116976, 1553116976, NULL),
	('createUsers', 2, 'Create users', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('deleteUsers', 2, 'Delete users', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('editUserEmail', 2, 'Edit user email', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('editUsers', 2, 'Edit users', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('User', 1, 'User', NULL, NULL, 1553168141, 1553168141, NULL),
	('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('viewUserEmail', 2, 'View user email', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('viewUserRoles', 2, 'View user roles', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('viewUsers', 2, 'View users', NULL, NULL, 1553116978, 1553116978, 'userManagement'),
	('viewVisitLog', 2, 'View visit log', NULL, NULL, 1553116978, 1553116978, 'userManagement');
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;

-- Дамп структуры для таблица contactee.auth_item_child
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.auth_item_child: ~28 rows (приблизительно)
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
REPLACE INTO `auth_item_child` (`parent`, `child`) VALUES
	('Admin', 'assignRolesToUsers'),
	('Admin', 'changeOwnPassword'),
	('Admin', 'changeUserPassword'),
	('Admin', 'createUsers'),
	('Admin', 'editUsers'),
	('Admin', 'viewUsers'),
	('Admin', 'viewVisitLog'),
	('assignRolesToUsers', '/user-management/user-permission/set'),
	('assignRolesToUsers', '/user-management/user-permission/set-roles'),
	('assignRolesToUsers', 'viewUserRoles'),
	('assignRolesToUsers', 'viewUsers'),
	('changeOwnPassword', '/user-management/auth/change-own-password'),
	('changeUserPassword', '/user-management/user/change-password'),
	('changeUserPassword', 'viewUsers'),
	('createUsers', '/user-management/user/create'),
	('createUsers', 'viewUsers'),
	('deleteUsers', '/user-management/user/bulk-delete'),
	('deleteUsers', '/user-management/user/delete'),
	('deleteUsers', 'viewUsers'),
	('editUserEmail', 'viewUserEmail'),
	('editUsers', '/user-management/user/bulk-activate'),
	('editUsers', '/user-management/user/bulk-deactivate'),
	('editUsers', '/user-management/user/update'),
	('editUsers', 'viewUsers'),
	('User', 'changeOwnPassword'),
	('viewUsers', '/user-management/user/grid-page-size'),
	('viewUsers', '/user-management/user/index'),
	('viewUsers', '/user-management/user/view');
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;

-- Дамп структуры для таблица contactee.auth_item_group
CREATE TABLE IF NOT EXISTS `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.auth_item_group: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `auth_item_group` DISABLE KEYS */;
REPLACE INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
	('userCommonPermissions', 'User common permission', 1553116978, 1553116978),
	('userManagement', 'User management', 1553116978, 1553116978);
/*!40000 ALTER TABLE `auth_item_group` ENABLE KEYS */;

-- Дамп структуры для таблица contactee.auth_rule
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.auth_rule: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;

-- Дамп структуры для таблица contactee.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(6) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.user: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
	(1, 'superadmin', 'FA8pa808MoGF13R6Yu1Iku76znqnM9bH', '$2y$13$Go.CXY0lDzfqSghCL57B2.xJKjvSFuHrOQrrwtjzX7Ir1ki1mgZma', NULL, 1, 1, 1553116976, 1553116976, NULL, NULL, NULL, 0),
	(3, 'admin', 'NC0bl9AWMvb3FvuvLZAFv--kKVirRaCt', '$2y$13$CE3poFlTjd01JVl2tWuvveY0SzU4ZZSMKHadR/W9xRMAtm4QIQzse', NULL, 1, 0, 1553822349, 1618465591, '31.186.51.161', '', '', 0),
	(4, 'user', '_hql3NQ35X6YBWuEfk5c-ppHeP4aCI9s', '$2y$13$cXeL4eIsSUmwuEw/ixM7aeO1tIrAElBP8lSkGhQZ3Wa5WI59fOpN6', NULL, 1, 0, 1600539731, 1618465573, '31.186.51.161', '', '', 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Дамп структуры для таблица contactee.user_visit_log
CREATE TABLE IF NOT EXISTS `user_visit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=496 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы contactee.user_visit_log: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `user_visit_log` DISABLE KEYS */;
REPLACE INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
	(492, '6077cc111724e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 3, 1618463761, 'Chrome', 'Windows'),
	(493, '6077d2fdb0f21', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 3, 1618465533, 'Chrome', 'Windows'),
	(494, '6077d34c28d67', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 1, 1618465612, 'Chrome', 'Windows'),
	(495, '6077d35ab0ccc', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 3, 1618465626, 'Chrome', 'Windows');
/*!40000 ALTER TABLE `user_visit_log` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
