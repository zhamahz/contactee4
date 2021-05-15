-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2021 г., 15:05
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `contactee`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', 3, 1553822355),
('User', 2, 1553168239);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('changeOwnPassword', '/user-management/auth/change-own-password'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('deleteUsers', '/user-management/user/bulk-delete'),
('changeUserPassword', '/user-management/user/change-password'),
('createUsers', '/user-management/user/create'),
('deleteUsers', '/user-management/user/delete'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('editUsers', '/user-management/user/update'),
('viewUsers', '/user-management/user/view'),
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('User', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'editUsers'),
('editUserEmail', 'viewUserEmail'),
('assignRolesToUsers', 'viewUserRoles'),
('Admin', 'viewUsers'),
('assignRolesToUsers', 'viewUsers'),
('changeUserPassword', 'viewUsers'),
('createUsers', 'viewUsers'),
('deleteUsers', 'viewUsers'),
('editUsers', 'viewUsers'),
('Admin', 'viewVisitLog');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('userCommonPermissions', 'User common permission', 1553116978, 1553116978),
('userManagement', 'User management', 1553116978, 1553116978);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Åland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(10, 'Antarctica'),
(11, 'Antigua & Barbuda'),
(12, 'Argentina'),
(13, 'Armenia'),
(14, 'Aruba'),
(15, 'Ascension Island'),
(16, 'Australia'),
(17, 'Austria'),
(18, 'Azerbaijan'),
(19, 'Bahamas'),
(20, 'Bahrain'),
(21, 'Bangladesh'),
(22, 'Barbados'),
(23, 'Belarus'),
(24, 'Belgium'),
(25, 'Belize'),
(26, 'Benin'),
(27, 'Bermuda'),
(28, 'Bhutan'),
(29, 'Bolivia'),
(30, 'Bosnia & Herzegovina'),
(31, 'Botswana'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'British Virgin Islands'),
(35, 'Brunei'),
(36, 'Bulgaria'),
(37, 'Burkina Faso'),
(38, 'Burundi'),
(39, 'Cambodia'),
(40, 'Cameroon'),
(41, 'Canada'),
(42, 'Canary Islands'),
(43, 'Cape Verde'),
(44, 'Caribbean Netherlands'),
(45, 'Cayman Islands'),
(46, 'Central African Republic'),
(47, 'Ceuta & Melilla'),
(48, 'Chad'),
(49, 'Chile'),
(50, 'China'),
(51, 'Christmas Island'),
(52, 'Cocos (Keeling) Islands'),
(53, 'Colombia'),
(54, 'Comoros'),
(55, 'Congo - Brazzaville'),
(56, 'Congo - Kinshasa'),
(57, 'Cook Islands'),
(58, 'Costa Rica'),
(59, 'Côte d’Ivoire'),
(60, 'Croatia'),
(61, 'Cuba'),
(62, 'Curaçao'),
(63, 'Cyprus'),
(64, 'Czech Republic'),
(65, 'Denmark'),
(66, 'Diego Garcia'),
(67, 'Djibouti'),
(68, 'Dominica'),
(69, 'Dominican Republic'),
(70, 'Ecuador'),
(71, 'Egypt'),
(72, 'El Salvador'),
(73, 'Equatorial Guinea'),
(74, 'Eritrea'),
(75, 'Estonia'),
(76, 'Ethiopia'),
(77, 'Falkland Islands'),
(78, 'Faroe Islands'),
(79, 'Fiji'),
(80, 'Finland'),
(81, 'France'),
(82, 'French Guiana'),
(83, 'French Polynesia'),
(84, 'French Southern Territories'),
(85, 'Gabon'),
(86, 'Gambia'),
(87, 'Georgia'),
(88, 'Germany'),
(89, 'Ghana'),
(90, 'Gibraltar'),
(91, 'Greece'),
(92, 'Greenland'),
(93, 'Grenada'),
(94, 'Guadeloupe'),
(95, 'Guam'),
(96, 'Guatemala'),
(97, 'Guernsey'),
(98, 'Guinea'),
(99, 'Guinea-Bissau'),
(100, 'Guyana'),
(101, 'Haiti'),
(102, 'Honduras'),
(103, 'Hong Kong SAR China'),
(104, 'Hungary'),
(105, 'Iceland'),
(106, 'India'),
(107, 'Indonesia'),
(108, 'Iran'),
(109, 'Iraq'),
(110, 'Ireland'),
(111, 'Isle of Man'),
(112, 'Israel'),
(113, 'Italy'),
(114, 'Jamaica'),
(115, 'Japan'),
(116, 'Jersey'),
(117, 'Jordan'),
(118, 'Kazakhstan'),
(119, 'Kenya'),
(120, 'Kiribati'),
(121, 'Kosovo'),
(122, 'Kuwait'),
(123, 'Kyrgyzstan'),
(124, 'Laos'),
(125, 'Latvia'),
(126, 'Lebanon'),
(127, 'Lesotho'),
(128, 'Liberia'),
(129, 'Libya'),
(130, 'Liechtenstein'),
(131, 'Lithuania'),
(132, 'Luxembourg'),
(133, 'Macau SAR China'),
(134, 'Macedonia'),
(135, 'Madagascar'),
(136, 'Malawi'),
(137, 'Malaysia'),
(138, 'Maldives'),
(139, 'Mali'),
(140, 'Malta'),
(141, 'Marshall Islands'),
(142, 'Martinique'),
(143, 'Mauritania'),
(144, 'Mauritius'),
(145, 'Mayotte'),
(146, 'Mexico'),
(147, 'Micronesia'),
(148, 'Moldova'),
(149, 'Monaco'),
(150, 'Mongolia'),
(151, 'Montenegro'),
(152, 'Montserrat'),
(153, 'Morocco'),
(154, 'Mozambique'),
(155, 'Myanmar (Burma)'),
(156, 'Namibia'),
(157, 'Nauru'),
(158, 'Nepal'),
(159, 'Netherlands'),
(160, 'New Caledonia'),
(161, 'New Zealand'),
(162, 'Nicaragua'),
(163, 'Niger'),
(164, 'Nigeria'),
(165, 'Niue'),
(166, 'Norfolk Island'),
(167, 'North Korea'),
(168, 'Northern Mariana Islands'),
(169, 'Norway'),
(170, 'Oman'),
(171, 'Pakistan'),
(172, 'Palau'),
(173, 'Palestinian Territories'),
(174, 'Panama'),
(175, 'Papua New Guinea'),
(176, 'Paraguay'),
(177, 'Peru'),
(178, 'Philippines'),
(179, 'Pitcairn Islands'),
(180, 'Poland'),
(181, 'Portugal'),
(182, 'Puerto Rico'),
(183, 'Qatar'),
(184, 'Réunion'),
(185, 'Romania'),
(186, 'Russia'),
(187, 'Rwanda'),
(188, 'Samoa'),
(189, 'San Marino'),
(190, 'São Tomé & Príncipe'),
(191, 'Saudi Arabia'),
(192, 'Senegal'),
(193, 'Serbia'),
(194, 'Seychelles'),
(195, 'Sierra Leone'),
(196, 'Singapore'),
(197, 'Sint Maarten'),
(198, 'Slovakia'),
(199, 'Slovenia'),
(200, 'Solomon Islands'),
(201, 'Somalia'),
(202, 'South Africa'),
(203, 'South Georgia & South Sandwich Islands'),
(204, 'South Korea'),
(205, 'South Sudan'),
(206, 'Spain'),
(207, 'Sri Lanka'),
(208, 'St. Barthélemy'),
(209, 'St. Helena'),
(210, 'St. Kitts & Nevis'),
(211, 'St. Lucia'),
(212, 'St. Martin'),
(213, 'St. Pierre & Miquelon'),
(214, 'St. Vincent & Grenadines'),
(215, 'Sudan'),
(216, 'Suriname'),
(217, 'Svalbard & Jan Mayen'),
(218, 'Swaziland'),
(219, 'Sweden'),
(220, 'Switzerland'),
(221, 'Syria'),
(222, 'Taiwan'),
(223, 'Tajikistan'),
(224, 'Tanzania'),
(225, 'Thailand'),
(226, 'Timor-Leste'),
(227, 'Togo'),
(228, 'Tokelau'),
(229, 'Tonga'),
(230, 'Trinidad & Tobago'),
(231, 'Tristan da Cunha'),
(232, 'Tunisia'),
(233, 'Turkey'),
(234, 'Turkmenistan'),
(235, 'Turks & Caicos Islands'),
(236, 'Tuvalu'),
(237, 'U.S. Outlying Islands'),
(238, 'U.S. Virgin Islands'),
(239, 'Uganda'),
(240, 'Ukraine'),
(241, 'United Arab Emirates'),
(242, 'United Kingdom'),
(243, 'United States'),
(244, 'Uruguay'),
(245, 'Uzbekistan'),
(246, 'Vanuatu'),
(247, 'Vatican City'),
(248, 'Venezuela'),
(249, 'Vietnam'),
(250, 'Wallis & Futuna'),
(251, 'Western Sahara'),
(252, 'Yemen'),
(253, 'Zambia'),
(254, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Структура таблицы `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `speciality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `id_country` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo_passport` blob NOT NULL,
  `pdf_attestat` blob NOT NULL,
  `pdf_motivation` blob NOT NULL,
  `id_uni_1` int(11) NOT NULL,
  `id_program_1` int(11) NOT NULL,
  `datetime_reg_1` date NOT NULL,
  `id_uni_2` int(11) NOT NULL,
  `id_program_2` int(11) NOT NULL,
  `datetime_reg_2` date NOT NULL,
  `id_uni_3` int(11) NOT NULL,
  `id_program_3` int(11) NOT NULL,
  `datetime_reg_3` date NOT NULL,
  `id_uni_4` int(11) NOT NULL,
  `id_program_4` int(11) NOT NULL,
  `datetime_reg_4` date NOT NULL,
  `id_uni_5` int(11) NOT NULL,
  `id_program_5` int(11) NOT NULL,
  `datetime_reg_5` date NOT NULL,
  `id_uni_accepted_1` int(11) NOT NULL,
  `id_uni_accepted_2` int(11) NOT NULL,
  `id_uni_accepted_3` int(11) NOT NULL,
  `id_uni_accepted_4` int(11) NOT NULL,
  `id_uni_accepted_5` int(11) NOT NULL,
  `visa` char(20) NOT NULL,
  `datetime_visa` date NOT NULL,
  `status_visa` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `superadmin` smallint(6) DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', 'FA8pa808MoGF13R6Yu1Iku76znqnM9bH', '$2y$13$Go.CXY0lDzfqSghCL57B2.xJKjvSFuHrOQrrwtjzX7Ir1ki1mgZma', NULL, 1, 1, 1553116976, 1553116976, NULL, NULL, NULL, 0),
(3, 'admin', 'NC0bl9AWMvb3FvuvLZAFv--kKVirRaCt', '$2y$13$jxl1w5hNuSxuzzIYQtiY/OoZGAH6DPe9BrXZtFO.HEeQGhdfoaUh.', NULL, 1, 0, 1553822349, 1619530586, '31.186.51.161', '', '', 0),
(4, 'user', '_hql3NQ35X6YBWuEfk5c-ppHeP4aCI9s', '$2y$13$cXeL4eIsSUmwuEw/ixM7aeO1tIrAElBP8lSkGhQZ3Wa5WI59fOpN6', NULL, 1, 0, 1600539731, 1618465573, '31.186.51.161', '', '', 0),
(5, 'jama', 'fArI5sOJBkXXtY2iQ6ARhrGyK9w8_QfY', '$2y$13$Ao/5SUG4u4NrfZVtyKvYV.vfSIktnosijvCr/1xzZYXpUbWr.PoR2', NULL, 1, 0, 1619520283, 1619792738, '127.0.0.1', '', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(492, '6077cc111724e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 3, 1618463761, 'Chrome', 'Windows'),
(493, '6077d2fdb0f21', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 3, 1618465533, 'Chrome', 'Windows'),
(494, '6077d34c28d67', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 1, 1618465612, 'Chrome', 'Windows'),
(495, '6077d35ab0ccc', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 OPR/75.0.3969.149', 3, 1618465626, 'Chrome', 'Windows'),
(496, '60789fc334cba', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 3, 1618517955, 'Chrome', 'Windows'),
(497, '60789fd723a56', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 3, 1618517975, 'Chrome', 'Windows'),
(498, '60789ff3ca29d', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 4, 1618518003, 'Chrome', 'Windows'),
(499, '6078a011c1697', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 3, 1618518033, 'Chrome', 'Windows'),
(500, '6079c4ff1ae7e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 3, 1618593023, 'Chrome', 'Windows'),
(501, '607ac156bc8e5', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36', 3, 1618657622, 'Chrome', 'Windows'),
(502, '6087eaa78d7fa', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 3, 1619520167, 'Chrome', 'Windows'),
(503, '6087eb1be3bf4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 5, 1619520283, 'Chrome', 'Windows'),
(504, '6087eb2c64774', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 5, 1619520300, 'Chrome', 'Windows'),
(505, '6087eb356dd45', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 3, 1619520309, 'Chrome', 'Windows'),
(506, '6087eb49629d8', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 5, 1619520329, 'Chrome', 'Windows'),
(507, '608810dd313c9', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619529949, 'Chrome', 'Windows'),
(508, '6088113d05980', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 5, 1619530045, 'Chrome', 'Windows'),
(509, '608812a61c751', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619530406, 'Chrome', 'Windows'),
(510, '6088136515bf6', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619530597, 'Chrome', 'Windows'),
(511, '6088142c23ba4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 5, 1619530796, 'Chrome', 'Windows'),
(512, '6088159a17e05', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 5, 1619531162, 'Chrome', 'Windows'),
(513, '608815b585f4a', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619531189, 'Chrome', 'Windows'),
(514, '60889025c3d04', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619562533, 'Chrome', 'Windows'),
(515, '6088906930696', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 4, 1619562601, 'Chrome', 'Windows'),
(516, '60892cfa89520', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619602682, 'Chrome', 'Windows'),
(517, '6089381684f09', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619605526, 'Chrome', 'Windows'),
(518, '6089414e1bf9f', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619607886, 'Chrome', 'Windows'),
(519, '608947e66eba4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619609574, 'Chrome', 'Windows'),
(520, '608aba1ef3742', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 4, 1619704351, 'Chrome', 'Windows'),
(521, '608aba2f6a066', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619704367, 'Chrome', 'Windows'),
(522, '608aba4f54a32', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 4, 1619704399, 'Chrome', 'Windows'),
(523, '608aba67b18fe', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619704423, 'Chrome', 'Windows'),
(524, '608ac085ccef6', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619705989, 'Chrome', 'Windows'),
(525, '608c132e074f7', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619792686, 'Chrome', 'Windows'),
(526, '608c2ff7aaee4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1619800055, 'Chrome', 'Windows'),
(527, '6091482eaadfb', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 3, 1620133934, 'Chrome', 'Windows'),
(528, '609e97d861e24', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 3, 1621006296, 'Chrome', 'Windows');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_country` (`id_country`),
  ADD KEY `id_program_1` (`id_program_1`),
  ADD KEY `id_uni_1` (`id_uni_1`),
  ADD KEY `id_uni_2` (`id_uni_2`),
  ADD KEY `id_uni_3` (`id_uni_3`),
  ADD KEY `id_uni_4` (`id_uni_4`),
  ADD KEY `id_uni_5` (`id_uni_5`),
  ADD KEY `id_program_2` (`id_program_2`),
  ADD KEY `id_program_3` (`id_program_3`),
  ADD KEY `id_program_4` (`id_program_4`),
  ADD KEY `id_program_5` (`id_program_5`),
  ADD KEY `id_uni_accepted_1` (`id_uni_accepted_1`),
  ADD KEY `id_uni_accepted_2` (`id_uni_accepted_2`),
  ADD KEY `id_uni_accepted_3` (`id_uni_accepted_3`),
  ADD KEY `id_uni_accepted_4` (`id_uni_accepted_4`),
  ADD KEY `id_uni_accepted_5` (`id_uni_accepted_5`);

--
-- Индексы таблицы `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=529;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `student_registration_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_10` FOREIGN KEY (`id_program_3`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_11` FOREIGN KEY (`id_program_3`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_12` FOREIGN KEY (`id_program_4`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_13` FOREIGN KEY (`id_program_5`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_14` FOREIGN KEY (`id_uni_accepted_1`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_15` FOREIGN KEY (`id_uni_accepted_2`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_16` FOREIGN KEY (`id_uni_accepted_3`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_17` FOREIGN KEY (`id_uni_accepted_4`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_18` FOREIGN KEY (`id_uni_accepted_5`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_3` FOREIGN KEY (`id_program_1`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_4` FOREIGN KEY (`id_uni_1`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_5` FOREIGN KEY (`id_uni_2`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_6` FOREIGN KEY (`id_uni_3`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_7` FOREIGN KEY (`id_uni_4`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_8` FOREIGN KEY (`id_uni_5`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_9` FOREIGN KEY (`id_program_2`) REFERENCES `programs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
