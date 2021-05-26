-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2021 г., 19:01
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
-- Структура таблицы `abitur`
--

CREATE TABLE `abitur` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `id_university` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  `id_speciality` int(11) NOT NULL,
  `status1` varchar(255) NOT NULL,
  `date1` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status2` varchar(255) NOT NULL,
  `date2` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dop` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `abitur`
--

INSERT INTO `abitur` (`id`, `fullname`, `id_university`, `id_country`, `id_speciality`, `status1`, `date1`, `status2`, `date2`, `dop`) VALUES
(1, 'A1', 4, 2, 1, 'Принята', '2021-05-26 14:35:27', 'Принята', '2021-05-26 14:35:27', '12'),
(2, 'B2', 4, 2, 19, 'Принята', '2021-05-26 14:35:27', 'Принята', '2021-05-26 14:35:27', ''),
(3, 'C1', 4, 2, 34, 'Принята', '2021-05-26 14:58:16', 'Принята', '2021-05-26 14:58:16', NULL);

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
('Mid', 13, 1621324742),
('Mon', 12, 1621324712),
('Student', 16, 1621324927),
('Student', 17, 1621324949),
('University', 14, 1621324861),
('University', 15, 1621324888);

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
('Mid', 1, 'Mid', NULL, NULL, 1621324271, 1621324271, NULL),
('Mon', 1, 'Mon', NULL, NULL, 1621324241, 1621324241, NULL),
('Student', 1, 'Student', NULL, NULL, 1553168141, 1621324045, NULL),
('University', 1, 'University', NULL, NULL, 1621324366, 1621324366, NULL),
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
('Mon', 'Admin'),
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Mid', 'changeOwnPassword'),
('Mon', 'changeOwnPassword'),
('Student', 'changeOwnPassword'),
('University', 'changeOwnPassword'),
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
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `text` text,
  `file` varchar(255) DEFAULT NULL
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
-- Структура таблицы `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `text_date` varchar(255) DEFAULT NULL,
  `link` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `speciality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `programs`
--

INSERT INTO `programs` (`id`, `speciality`) VALUES
(1, 'Информатика\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT '16',
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `id_country` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo_passport` blob,
  `pdf_attestat` blob,
  `pdf_motivation` blob,
  `id_uni_1` int(11) DEFAULT NULL,
  `id_program_1` int(11) DEFAULT NULL,
  `datetime_reg_1` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_uni_2` int(11) DEFAULT NULL,
  `id_program_2` int(11) DEFAULT NULL,
  `datetime_reg_2` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_uni_3` int(11) DEFAULT NULL,
  `id_program_3` int(11) DEFAULT NULL,
  `datetime_reg_3` datetime NOT NULL,
  `id_uni_4` int(11) DEFAULT NULL,
  `id_program_4` int(11) DEFAULT NULL,
  `datetime_reg_4` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_uni_5` int(11) DEFAULT NULL,
  `id_program_5` int(11) DEFAULT NULL,
  `datetime_reg_5` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_uni_accepted_1` int(11) DEFAULT NULL,
  `id_uni_accepted_2` int(11) DEFAULT NULL,
  `id_uni_accepted_3` int(11) DEFAULT NULL,
  `id_uni_accepted_4` int(11) DEFAULT NULL,
  `id_uni_accepted_5` int(11) DEFAULT NULL,
  `visa` char(20) DEFAULT NULL,
  `datetime_visa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_visa` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student_registration`
--

INSERT INTO `student_registration` (`id`, `id_user`, `fullname`, `gender`, `birthday`, `id_country`, `email`, `photo_passport`, `pdf_attestat`, `pdf_motivation`, `id_uni_1`, `id_program_1`, `datetime_reg_1`, `id_uni_2`, `id_program_2`, `datetime_reg_2`, `id_uni_3`, `id_program_3`, `datetime_reg_3`, `id_uni_4`, `id_program_4`, `datetime_reg_4`, `id_uni_5`, `id_program_5`, `datetime_reg_5`, `id_uni_accepted_1`, `id_uni_accepted_2`, `id_uni_accepted_3`, `id_uni_accepted_4`, `id_uni_accepted_5`, `visa`, `datetime_visa`, `status_visa`) VALUES
(5, 16, 'Айсулуу Джумабекова', 'женский', '2000-07-04', 10, 'test', NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:18:41', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:17:25', NULL),
(6, 16, 'test2', '', NULL, 1, '', '', '', '', NULL, NULL, '2021-05-26 10:18:41', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:17:25', NULL),
(7, 16, 'test1', '', NULL, 1, '', 0x6c6f676f2e706e67, '', '', NULL, NULL, '2021-05-26 10:18:41', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:17:25', NULL),
(8, 16, 'ais12', '', NULL, 1, '', '', '', '', NULL, NULL, '2021-05-26 10:54:13', NULL, NULL, '2021-05-26 10:54:13', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:54:13', NULL),
(9, 16, 'ais23', '', NULL, 1, '', '', '', '', NULL, NULL, '2021-05-26 10:56:00', NULL, NULL, '2021-05-26 10:56:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '2021-05-26 10:56:00', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:56:00', NULL),
(10, 17, 'Мажитова Жамиля', '', NULL, 1, '', '', '', '', NULL, NULL, '2021-05-26 11:05:32', NULL, NULL, '2021-05-26 11:05:32', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '2021-05-26 11:05:32', NULL, NULL, '2021-05-26 11:05:32', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 11:05:32', NULL),
(11, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2021-05-26 14:37:16', NULL, NULL, '2021-05-26 14:37:16', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '2021-05-26 14:37:16', NULL, NULL, '2021-05-26 14:37:16', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 14:37:16', NULL),
(12, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 14:39:24', 1, 1, '2021-05-26 14:39:24', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '2021-05-26 14:39:24', NULL, NULL, '2021-05-26 14:39:24', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 14:39:24', NULL),
(13, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2021-05-26 14:42:12', 3, 1, '2021-05-26 14:42:12', 2, 1, '0000-00-00 00:00:00', 1, 1, '2021-05-26 14:42:12', 2, 1, '2021-05-26 14:42:12', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 14:42:12', NULL),
(14, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2021-05-26 14:42:35', 1, 1, '2021-05-26 14:42:35', 1, 1, '0000-00-00 00:00:00', 1, 1, '2021-05-26 14:42:35', 1, 1, '2021-05-26 14:42:35', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 14:42:35', NULL),
(15, 16, 'test15', '', NULL, 1, '', '', '', '', NULL, NULL, '2021-05-26 14:53:15', NULL, NULL, '2021-05-26 14:53:15', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '2021-05-26 14:53:15', NULL, NULL, '2021-05-26 14:53:15', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 14:53:15', NULL),
(16, 16, 'тест11', '', NULL, 1, '', '', '', '', NULL, NULL, '2021-05-26 15:09:44', NULL, NULL, '2021-05-26 15:09:44', NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, '2021-05-26 15:09:44', NULL, NULL, '2021-05-26 15:09:44', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 15:09:44', NULL),
(17, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2021-05-26 15:11:25', 3, 1, '2021-05-26 15:11:25', 2, 1, '0000-00-00 00:00:00', 3, 1, '2021-05-26 15:11:25', 2, 1, '2021-05-26 15:11:25', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-26 15:11:25', NULL);

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

--
-- Дамп данных таблицы `university`
--

INSERT INTO `university` (`id`, `name`, `type`, `address`, `email`) VALUES
(1, 'КРСУ', 'Высшее учебное заведение', '720000, г. Бишкек, ул. Киевская, 44', 'krsu@krsu.edu.kg'),
(2, 'КГТУ', 'Высшее учебное заведение', '720044, Кыргызстан, г.Бишкек, пр.Ч.Айтматова, 66', 'rector@kstu.kg'),
(3, 'КГМА', 'Высшее учебное заведение', 'ул. И.Ахунбаева, 92, Бишкек, 720020', 'akhunbaev@kgma.kg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
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
  `email_confirmed` smallint(1) NOT NULL DEFAULT '0',
  `id_university` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`, `id_university`) VALUES
(1, 'superadmin', 'FA8pa808MoGF13R6Yu1Iku76znqnM9bH', '$2y$13$Go.CXY0lDzfqSghCL57B2.xJKjvSFuHrOQrrwtjzX7Ir1ki1mgZma', NULL, 1, 1, 1553116976, 1553116976, NULL, NULL, NULL, 0, 0),
(12, 'mon', 'qcew3K_kWXwsF8Bag4sKPmMrV5kN4M0s', '$2y$13$cDfmeYb0p8/WlBCxoMKh0uvZoZN8t7EQGI2VyDqmbT4Yq90nVRNZ.', NULL, 1, 0, 1621324700, 1621324700, '127.0.0.1', '', '', 0, NULL),
(13, 'mid', '7hudV5dAvl1_8tLzHuvXzGFO25iCfH8w', '$2y$13$8/4G.cLN9fazY3IL4tBgmOTWuTEmPAnKxQlcK.fE1/3o3pFIUBjSO', NULL, 1, 0, 1621324735, 1621324735, '127.0.0.1', '', '', 0, NULL),
(14, 'university1', 'Yo3CG1454dpm9hqIYBGMOwGHhc9cNDjE', '$2y$13$09sgXUUu2gZ9dCu6j11QI.WQOxRsLKmjSSMYCPfJwJOWXNBJB1zFy', NULL, 1, 0, 1621324854, 1622041449, '127.0.0.1', '', '', 0, 1),
(15, 'university2', 'v7UhAHroXy_pzjUKi2TjIv4tWKARYiP2', '$2y$13$c.UjLyBCO2UDtnaotDxCvO5b0xcWeqeMJR9cRxoeQLRZ1lMR8RLRO', NULL, 1, 0, 1621324884, 1621324884, '127.0.0.1', '', '', 0, 2),
(16, 'student1', '6LKMO8eypJHIMeKmoGlSAOFMMhl7NgP1', '$2y$13$PxjL24lxSlSOexz8SVp/U.Dp.Iril8h8SDVFh2SnK4G3pG4o6Frqy', NULL, 1, 0, 1621324927, 1621324927, '127.0.0.1', '', NULL, 0, NULL),
(17, 'student2', 'M4Vdd6vLpP6s_fUqBamOUjBouUlRWRsM', '$2y$13$a0kgKfMAkdYY60Uhi1Hh3u2J7N3cSqVMlCCquCDGNAbbCjcW1Xhve', NULL, 1, 0, 1621324949, 1621324949, '127.0.0.1', '', NULL, 0, NULL);

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
(549, '60a372e71a6f5', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 1, 1621324519, 'Chrome', 'Windows'),
(550, '60a3747f4450f', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 16, 1621324927, 'Chrome', 'Windows'),
(551, '60a3749576b7c', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 17, 1621324949, 'Chrome', 'Windows'),
(552, '60a37fcee5a07', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 1, 1621327822, 'Chrome', 'Windows'),
(553, '60a37fd888e63', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 13, 1621327832, 'Chrome', 'Windows'),
(554, '60a3834c71245', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 1, 1621328716, 'Chrome', 'Windows'),
(555, '60a385e12841b', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 15, 1621329377, 'Chrome', 'Windows'),
(556, '60a385e903a06', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 12, 1621329385, 'Chrome', 'Windows'),
(557, '60a3861162e06', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 1, 1621329425, 'Chrome', 'Windows'),
(558, '60a38aaa39c1e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 13, 1621330602, 'Chrome', 'Windows'),
(559, '60a38aba92125', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 1, 1621330618, 'Chrome', 'Windows'),
(560, '60a38c5e98f81', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 12, 1621331038, 'Chrome', 'Windows'),
(561, '60a38ce05824e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 1, 1621331168, 'Chrome', 'Windows'),
(562, '60a38cf42c25f', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 17, 1621331188, 'Chrome', 'Windows'),
(563, '60a38e2694853', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 12, 1621331494, 'Chrome', 'Windows'),
(564, '60a38e2fd1221', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 17, 1621331503, 'Chrome', 'Windows'),
(565, '60a39bdbe7e13', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 12, 1621335003, 'Chrome', 'Windows'),
(566, '60a3a0e7b222f', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 OPR/76.0.4017.107', 12, 1621336295, 'Chrome', 'Windows'),
(567, '60a505ee5d4ef', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621427694, 'Chrome', 'Windows'),
(568, '60a50e31e8823', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 17, 1621429809, 'Chrome', 'Windows'),
(569, '60a511ff35618', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621430783, 'Chrome', 'Windows'),
(570, '60a51ee20ff3b', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621434082, 'Chrome', 'Windows'),
(571, '60a53c1f93ff1', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621441567, 'Chrome', 'Windows'),
(572, '60a54b3d628e7', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621445437, 'Chrome', 'Windows'),
(573, '60a573669c4a4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621455718, 'Chrome', 'Windows'),
(574, '60a57d77cccaf', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621458295, 'Chrome', 'Windows'),
(575, '60a5f4dd6e100', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1621488861, 'Chrome', 'Windows'),
(576, '60a601d36fc56', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621492179, 'Chrome', 'Windows'),
(577, '60a625c49f252', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621501380, 'Chrome', 'Windows'),
(578, '60a659bfd0a71', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621514687, 'Chrome', 'Windows'),
(579, '60a65fd34ef41', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621516243, 'Chrome', 'Windows'),
(580, '60a661aae840e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621516714, 'Chrome', 'Windows'),
(581, '60a661de92676', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621516766, 'Chrome', 'Windows'),
(582, '60a66c37a6800', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1621519415, 'Chrome', 'Windows'),
(583, '60a73074c603e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621569652, 'Chrome', 'Windows'),
(584, '60a730ce0d47a', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621569742, 'Chrome', 'Windows'),
(585, '60a730ebad367', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621569771, 'Chrome', 'Windows'),
(586, '60a732eaddec2', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621570282, 'Chrome', 'Windows'),
(587, '60a7331ad9388', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 13, 1621570330, 'Chrome', 'Windows'),
(588, '60a7332a92c17', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1621570346, 'Chrome', 'Windows'),
(589, '60a7334e6150b', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1621570382, 'Chrome', 'Windows'),
(590, '60a73368389b5', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621570408, 'Chrome', 'Windows'),
(591, '60a73372861fb', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621570418, 'Chrome', 'Windows'),
(592, '60a733ee2f4d1', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621570542, 'Chrome', 'Windows'),
(593, '60a73b3d1f655', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621572413, 'Chrome', 'Windows'),
(594, '60a73b45d7e9f', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621572421, 'Chrome', 'Windows'),
(595, '60a73b4bc4cb0', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621572427, 'Chrome', 'Windows'),
(596, '60a73d52848c8', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621572946, 'Chrome', 'Windows'),
(597, '60a73d89f0b5f', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621573001, 'Chrome', 'Windows'),
(598, '60a73dca95f74', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621573066, 'Chrome', 'Windows'),
(599, '60a73e6f9ae84', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621573231, 'Chrome', 'Windows'),
(600, '60a73edcb4a1a', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621573340, 'Chrome', 'Windows'),
(601, '60a747bcd3c85', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 1, 1621575612, 'Chrome', 'Windows'),
(602, '60a747ea8b809', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621575658, 'Chrome', 'Windows'),
(603, '60a74a00715c0', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621576192, 'Chrome', 'Windows'),
(604, '60a762ac4e2ce', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 12, 1621582508, 'Chrome', 'Windows'),
(605, '60a762c90ffe2', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621582537, 'Chrome', 'Windows'),
(606, '60a787197f8de', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1621591833, 'Chrome', 'Windows'),
(607, '60a78f03c4ddf', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 17, 1621593859, 'Chrome', 'Windows'),
(608, '60a79201063b6', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1621594625, 'Chrome', 'Windows'),
(609, '60ae1d56dc101', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622023510, 'Chrome', 'Windows'),
(610, '60ae1d8c2273c', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622023564, 'Chrome', 'Windows'),
(611, '60ae1dac1c03d', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622023596, 'Chrome', 'Windows'),
(612, '60ae1e6c43f4a', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622023788, 'Chrome', 'Windows'),
(613, '60ae1ea5f0e86', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622023845, 'Chrome', 'Windows'),
(614, '60ae1ffcbf12c', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622024188, 'Chrome', 'Windows'),
(615, '60ae29722aed4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622026610, 'Chrome', 'Windows'),
(616, '60ae29771017d', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622026615, 'Chrome', 'Windows'),
(617, '60ae2b44e4a70', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 17, 1622027076, 'Chrome', 'Windows'),
(618, '60ae2b6d42ae8', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 17, 1622027117, 'Chrome', 'Windows'),
(619, '60ae2c6c0e2e2', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622027372, 'Chrome', 'Windows'),
(620, '60ae2c7814234', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622027384, 'Chrome', 'Windows'),
(621, '60ae2e325eda6', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622027826, 'Chrome', 'Windows'),
(622, '60ae2e374e648', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622027831, 'Chrome', 'Windows'),
(623, '60ae2e52bef44', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622027858, 'Chrome', 'Windows'),
(624, '60ae2e66312b4', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622027878, 'Chrome', 'Windows'),
(625, '60ae2eb821021', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622027960, 'Chrome', 'Windows'),
(626, '60ae303ea6f6c', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622028350, 'Chrome', 'Windows'),
(627, '60ae305310bac', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622028371, 'Chrome', 'Windows'),
(628, '60ae3199e67f5', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622028697, 'Chrome', 'Windows'),
(629, '60ae3562d4914', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622029666, 'Chrome', 'Windows'),
(630, '60ae35944ff74', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 17, 1622029716, 'Chrome', 'Windows'),
(631, '60ae3f1d02409', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622032157, 'Chrome', 'Windows'),
(632, '60ae41c84acae', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622032840, 'Chrome', 'Windows'),
(633, '60ae41df72504', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622032863, 'Chrome', 'Windows'),
(634, '60ae5c0fe5993', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622039567, 'Chrome', 'Windows'),
(635, '60ae5f8e136d9', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 17, 1622040462, 'Chrome', 'Windows'),
(636, '60ae6277db791', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622041207, 'Chrome', 'Windows'),
(637, '60ae628180389', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622041217, 'Chrome', 'Windows'),
(638, '60ae634eeb532', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622041422, 'Chrome', 'Windows'),
(639, '60ae64a8ce418', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622041768, 'Chrome', 'Windows'),
(640, '60ae65502c370', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622041936, 'Chrome', 'Windows'),
(641, '60ae68be2ce39', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 16, 1622042814, 'Chrome', 'Windows'),
(642, '60ae68c6e3462', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622042822, 'Chrome', 'Windows'),
(643, '60ae6a448a634', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622043204, 'Chrome', 'Windows'),
(644, '60ae6c54f4023', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622043733, 'Chrome', 'Windows'),
(645, '60ae6eef2428e', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622044399, 'Chrome', 'Windows'),
(646, '60ae6f271e0e8', '127.0.0.1', 'ru', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 14, 1622044455, 'Chrome', 'Windows');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abitur`
--
ALTER TABLE `abitur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_country` (`id_country`),
  ADD KEY `id_speciality` (`id_speciality`),
  ADD KEY `id_university` (`id_university`);

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
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `exam`
--
ALTER TABLE `exam`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_university` (`id_university`);

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
-- AUTO_INCREMENT для таблицы `abitur`
--
ALTER TABLE `abitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=647;

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

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_university`) REFERENCES `university` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
