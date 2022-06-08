-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 09:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `shortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `shortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(7, '2022-05-30-062348', 'App\\Database\\Migrations\\AddCustomers', 'default', 'App', 1653915006, 1),
(8, '2022-05-30-065302', 'App\\Database\\Migrations\\Addadress', 'default', 'App', 1653915006, 1),
(9, '2022-05-30-124003', 'App\\Database\\Migrations\\Addcardhistory', 'default', 'App', 1653915006, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_arrange_section`
--

CREATE TABLE `seo_arrange_section` (
  `id` int(11) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `soroting_order` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_arrange_section`
--

INSERT INTO `seo_arrange_section` (`id`, `section_title`, `section_id`, `menu_id`, `submenu_id`, `title`, `soroting_order`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Slider Section', 30, 1, 0, 'home slider', 2, 1, 1, 1, '2022-04-14 12:33:19', '2022-06-04 03:33:00'),
(18, 'Image Section', 25, 1, 0, 'test-heading', 8, 1, 1, 1, '2022-04-14 12:33:19', '2022-06-04 03:33:00'),
(19, 'Custom Section', 16, 1, 0, 'Why Choose Aliya Healthcare Group', 4, 1, 1, 1, '2022-04-14 12:33:19', '2022-06-04 03:33:00'),
(20, 'Post Section', 5, 1, 0, 'test-heading21', 11, 1, 1, 1, '2022-04-14 12:33:19', '2022-06-04 03:33:00'),
(21, 'Faqs Section', 6, 1, 0, 'test-heading', 10, 1, 1, 1, '2022-04-14 12:33:19', '2022-06-04 03:33:00'),
(22, 'Testimonials Section', 5, 1, 0, 'test-heading21', 3, 1, 1, 1, '2022-04-14 12:33:19', '2022-06-04 03:33:00'),
(23, 'MLC Section', 3, 2, 0, 'test-heading', 1, 1, NULL, 1, '2022-04-15 05:17:44', NULL),
(24, 'Business Section', 4, 2, 0, 'test-heading', 2, 1, NULL, 1, '2022-04-15 05:17:44', NULL),
(25, 'MLC Section', 5, 2, 0, 'test-heading update', 3, 1, NULL, 1, '2022-04-15 05:17:44', NULL),
(26, 'Service Section', 7, 2, 0, 'test-heading', 4, 1, NULL, 1, '2022-04-15 05:17:44', NULL),
(27, 'Video Section', 5, 2, 0, 'test-heading', 5, 1, NULL, 1, '2022-04-15 05:17:44', NULL),
(28, 'Faqs Section', 6, 2, 0, 'test-heading', 6, 1, NULL, 1, '2022-04-15 05:17:44', NULL),
(29, 'Service Section', 7, 3, 17, 'test-heading', 1, 1, 1, 1, '2022-05-12 09:59:19', '2022-05-12 05:01:04'),
(30, 'Product Section', 28, 3, 17, 'wqewqew w ', 2, 1, 1, 1, '2022-05-12 09:59:19', '2022-05-12 05:01:04'),
(31, 'Video Section', 5, 3, 17, 'test-heading', 3, 1, 1, 1, '2022-05-12 09:59:19', '2022-05-12 05:01:04'),
(32, 'Post Section', 5, 3, 17, 'test-heading21', 4, 1, 1, 1, '2022-05-12 09:59:19', '2022-05-12 05:01:04'),
(33, 'Business Section', 4, 3, 17, 'test-heading', 5, 1, 1, 1, '2022-05-12 09:59:19', '2022-05-12 05:01:04'),
(34, 'MLC Section', 3, 3, 17, 'test-heading', 6, 1, 1, 1, '2022-05-12 09:59:19', '2022-05-12 05:01:04'),
(35, 'Video Section', 5, 4, 19, 'test-heading', 1, 1, NULL, 1, '2022-05-12 09:59:22', NULL),
(36, 'Business Section', 4, 4, 19, 'test-heading', 2, 1, NULL, 1, '2022-05-12 09:59:22', NULL),
(37, 'Product Section', 28, 3, 18, 'wqewqew w ', 1, 1, NULL, 1, '2022-05-12 10:00:30', NULL),
(38, 'Video Section', 5, 3, 18, 'test-heading', 2, 1, NULL, 1, '2022-05-12 10:00:30', NULL),
(39, 'Testimonials Section', 5, 3, 18, 'test-heading21', 3, 1, NULL, 1, '2022-05-12 10:00:30', NULL),
(40, 'Business Section', 4, 3, 18, 'test-heading', 4, 1, NULL, 1, '2022-05-12 10:00:30', NULL),
(41, 'MLC Section', 5, 3, 18, 'test-heading update', 5, 1, NULL, 1, '2022-05-12 10:00:30', NULL),
(42, 'Slider Section', 39, 6, 0, 'Home', 1, 1, NULL, 1, '2022-06-04 08:32:27', NULL),
(43, 'Banner Section', 24, 1, 0, 'afas', 1, 1, NULL, 1, '2022-06-04 08:33:00', NULL),
(44, 'Image Section', 30, 1, 0, 'Heading', 9, 1, NULL, 1, '2022-06-04 08:33:00', NULL),
(45, 'Business Section', 7, 1, 0, 'Heading', 12, 1, NULL, 1, '2022-06-04 08:33:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_banner`
--

CREATE TABLE `seo_banner` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `page_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`page_id`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_banner`
--

INSERT INTO `seo_banner` (`id`, `banner_image`, `banner_name`, `content`, `page_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(24, '1652850746_2f55fd2998eca8968236.jpeg', 'afas', 'safas', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', 1, NULL, 1, '2022-05-18 05:12:26', NULL),
(25, '1652852716_53dded3f274a4ea89ee0.png', 'Ba', 'text', '[{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"}]', 1, NULL, 1, '2022-05-18 05:45:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_business`
--

CREATE TABLE `seo_business` (
  `id` int(11) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_business`
--

INSERT INTO `seo_business` (`id`, `business_type`, `user_id`, `status`, `created_at`, `update_at`) VALUES
(22, 'Software development', 1, 1, '2022-03-25 10:48:41', '2022-03-26 11:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `seo_cart_history`
--

CREATE TABLE `seo_cart_history` (
  `id` int(5) UNSIGNED NOT NULL,
  `customer_id` int(5) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `cart_status` enum('Pending','Paid','Cancel') NOT NULL DEFAULT 'Pending',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_cart_history`
--

INSERT INTO `seo_cart_history` (`id`, `customer_id`, `status`, `product_id`, `quantity`, `cart_status`, `updated_at`, `created_at`) VALUES
(1, 1, '', 32, 3, 'Pending', '2022-05-30 15:01:44', '2022-05-30 18:32:06'),
(2, 1, '', 33, 1, 'Pending', '2022-05-30 15:01:44', '2022-05-30 18:32:06'),
(3, 1, '', 34, 1, 'Pending', NULL, '2022-06-02 12:04:15'),
(4, 1, 'Active', 35, 4, 'Pending', NULL, '2022-06-02 12:27:41'),
(5, 1, 'Active', 36, 1, 'Pending', NULL, '2022-06-02 12:29:33'),
(6, 1, 'Active', 37, 1, 'Pending', NULL, '2022-06-02 13:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `seo_city`
--

CREATE TABLE `seo_city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_city`
--

INSERT INTO `seo_city` (`id`, `city_name`, `state_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'New-Delhi', 4, 1, NULL, '2022-03-26 05:58:24', NULL, 1),
(2, 'Meerut', 6, 1, NULL, '2022-03-26 05:59:23', NULL, 1),
(4, 'Panipat', 5, 1, NULL, '2022-03-26 06:00:09', NULL, 1),
(7, 'Noida', 6, 1, NULL, '2022-03-26 06:01:31', NULL, 1),
(8, 'San Jose', 1, 1, NULL, '2022-03-26 06:05:22', NULL, 1),
(9, 'Test-california', 1, 1, NULL, '2022-03-26 12:30:14', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_country`
--

CREATE TABLE `seo_country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_country`
--

INSERT INTO `seo_country` (`id`, `country_name`, `created_by`, `updated_by`, `status`, `created_at`, `update_at`) VALUES
(1, 'United States of America', 1, NULL, 1, '2022-03-26 05:42:03', NULL),
(2, 'India', 1, NULL, 1, '2022-03-26 05:42:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_customers`
--

CREATE TABLE `seo_customers` (
  `id` int(5) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address2` text DEFAULT NULL,
  `address3` text DEFAULT NULL,
  `user_type` enum('Customer','Admin') NOT NULL DEFAULT 'Customer',
  `image` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `reset_token` int(11) DEFAULT NULL,
  `reset_time` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_customers`
--

INSERT INTO `seo_customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `address`, `address2`, `address3`, `user_type`, `image`, `dob`, `reset_token`, `reset_time`, `updated_at`, `created_at`) VALUES
(1, 'Biru Sharma 2', 'sharma', 'birusharma@gmail.com', '1212121212', 'MTIzNDU2', 'Delhi', NULL, NULL, 'Customer', '1654333048_8f2f002bc24a10d7d636.jpg', NULL, 0, NULL, NULL, '2022-05-30 18:23:34'),
(2, 'Biru Sharma', NULL, 'birendersharma@sartiaglobal.com', NULL, 'MTIzNDU2', 'New Dlhi', NULL, NULL, 'Customer', NULL, NULL, 0, NULL, NULL, '2022-05-31 13:32:45'),
(3, 'Biru', 'Sharma', 'birusharma@gmail.com12', NULL, 'MTIzNDU2', 'noida', NULL, NULL, 'Customer', NULL, NULL, 0, NULL, NULL, '2022-05-31 13:40:14'),
(4, 'Biru 2', 'Sharma', 'demo@gmail.com', '9898989898', 'MTI=', 'afaf', NULL, NULL, 'Customer', NULL, '2022-05-04', 508639, 1654337170, NULL, '2022-05-31 13:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `seo_customers_address`
--

CREATE TABLE `seo_customers_address` (
  `id` int(5) UNSIGNED NOT NULL,
  `address` text DEFAULT NULL,
  `customer_id` int(5) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_customers_address`
--

INSERT INTO `seo_customers_address` (`id`, `address`, `customer_id`, `updated_at`, `created_at`) VALUES
(1, 'Delhi', 1, NULL, '2022-05-30 18:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `seo_custom_insert`
--

CREATE TABLE `seo_custom_insert` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `foot` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_custom_insert`
--

INSERT INTO `seo_custom_insert` (`id`, `head`, `foot`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(3, 'dfdfd werwer', 'adasdas dfsd werewr', 1, 1, 1, '2022-04-08 06:16:41', '2022-04-08 01:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `seo_custom_section`
--

CREATE TABLE `seo_custom_section` (
  `id` int(11) NOT NULL,
  `page_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`page_id`)),
  `upload_image` varchar(255) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_custom_section`
--

INSERT INTO `seo_custom_section` (`id`, `page_id`, `upload_image`, `position`, `heading`, `description`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(28, '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', '1654244744_c9fab84eae1ac5f67077.png', 'left', 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, 1, 1, '2022-05-24 11:19:31', '2022-06-03 03:25:44'),
(29, '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', '1653393002_abf250d6c03dd12b288b.jpg', 'stretch', '1914 translation by H. Rackham', '<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n', 1, 1, 1, '2022-05-24 11:50:02', '2022-05-31 06:43:02'),
(30, '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', '1654245777_160e6c4a112087a6f94c.webp', 'left', 'Mobile', '<p>This is mobile sections</p>\r\n', 1, NULL, 1, '2022-06-03 08:42:57', NULL),
(31, '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', NULL, 'right', 'dsaf', '<p>asf</p>\r\n', 1, 1, 1, '2022-06-07 11:42:44', '2022-06-07 06:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `seo_employees`
--

CREATE TABLE `seo_employees` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `emp_first_name` varchar(255) NOT NULL,
  `emp_last_name` varchar(255) NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_date_of_hire` date NOT NULL,
  `emp_date_of_joining` date NOT NULL,
  `emp_date_of_birth` date NOT NULL,
  `emp_gender` varchar(1) NOT NULL,
  `emp_experience` float NOT NULL,
  `emp_designation` int(11) NOT NULL,
  `emp_department` int(11) NOT NULL,
  `emp_status` tinyint(1) NOT NULL DEFAULT 1,
  `emp_created_at` datetime NOT NULL,
  `emp_update_at` datetime DEFAULT NULL,
  `emp_update_by` int(11) DEFAULT NULL,
  `emp_created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_enquiry`
--

CREATE TABLE `seo_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_enquiry`
--

INSERT INTO `seo_enquiry` (`id`, `name`, `email`, `phone`, `source`, `message`, `status`, `created_at`, `updated_at`) VALUES
(81, 'Model Name', 'email@gmail.com', '9696969696', 'e-plugin', 'Modal Message section', 1, '2022-06-04 08:08:14', NULL),
(82, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:16:49', NULL),
(83, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:17:05', NULL),
(84, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:17:06', NULL),
(85, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:17:17', NULL),
(86, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:18:14', NULL),
(87, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:18:46', NULL),
(88, 'Biru Sharma', 'birusharma@gmail.com', '9696969696', 'e-plugin', 'Message form Biru Sharma, Kushinagar UP', 1, '2022-06-04 08:19:26', NULL),
(89, 'Model Name', 'email@gmail.com', '9696969696', 'e-plugin', 'Modal Message section Message form Biru Sharma, Kushinagar  Message form Biru Sharma, Kushinagar UP	Message form Biru Sharma, Kushinagar UP	Message form Biru Sharma, Kushinagar UP	Message form Biru Sharma, Kushinagar UP	Message form Biru Sharma, Kushinaga', 1, '2022-06-04 10:20:01', NULL),
(90, 'Model Name', 'email@gmail.com', '9696969696', 'e-plugin', 'Modal Message section', 1, '2022-06-04 08:08:14', NULL),
(91, 'Model Name', 'email@gmail.com', '9696969696', 'e-plugin', 'Modal Message section', 1, '2022-06-04 08:08:14', NULL),
(92, 'Model Name', 'email@gmail.com', '9696969696', 'e-plugin', 'Modal Message section', 1, '2022-06-04 08:08:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_faqs`
--

CREATE TABLE `seo_faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_faqs`
--

INSERT INTO `seo_faqs` (`id`, `title`, `content`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Faq\'s-1', 'dasas asd sd dsadasd sdasd update', 1, 1, 1, '2022-04-08 09:00:41', '2022-04-11 01:43:39'),
(2, 'Faq\'s-2', 'dsad dsadasd sdsad dsdaswew', 1, 1, 1, '2022-04-08 09:01:01', '2022-04-11 01:43:59'),
(4, 'Faq\'s-3', 'sffaf fsdfs sf ff', 1, 1, 1, '2022-04-08 09:01:21', '2022-04-11 01:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `seo_faqs_section`
--

CREATE TABLE `seo_faqs_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `faqs_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`faqs_ids`)),
  `pages_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_id`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_faqs_section`
--

INSERT INTO `seo_faqs_section` (`id`, `heading`, `faqs_ids`, `pages_id`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(6, 'test-heading', '[\"1\",\"2\",\"4\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"}]', 1, 1, 1, '2022-04-12 09:18:24', '2022-04-12 04:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `seo_header_footer`
--

CREATE TABLE `seo_header_footer` (
  `id` int(11) NOT NULL,
  `header_background` varchar(20) NOT NULL,
  `header_text` varchar(20) NOT NULL,
  `navbar_background` varchar(20) NOT NULL,
  `navbar_text` varchar(20) NOT NULL,
  `searchbar_color` varchar(20) NOT NULL,
  `footer_background` varchar(20) NOT NULL,
  `footer_text_color` varchar(20) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `copyright_background` varchar(20) NOT NULL,
  `copyright_text` varchar(20) NOT NULL,
  `copyright_text_color` varchar(20) NOT NULL,
  `sitemap` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_header_footer`
--

INSERT INTO `seo_header_footer` (`id`, `header_background`, `header_text`, `navbar_background`, `navbar_text`, `searchbar_color`, `footer_background`, `footer_text_color`, `footer_text`, `copyright_background`, `copyright_text`, `copyright_text_color`, `sitemap`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, '#f5e20f', '#0d0d0d', '#ead706', '#0d0d0d', '#1d8160', '#f8d216', '#050505', 'sssds wda', '#fafafa', 'copyright content', '#050505', 'http://www.gmail.com', 1, 1, 1, '2022-03-30 12:42:38', '2022-06-04 04:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `seo_images_gallery`
--

CREATE TABLE `seo_images_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_images_gallery`
--

INSERT INTO `seo_images_gallery` (`id`, `title`, `image`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(12, 'First', '1654340678_4e4465182de28e18d526.jpg', 1, NULL, 1, '2022-06-04 11:04:38', NULL),
(13, 'Second', '1654340742_6fbd5d9ea534119496cf.jpg', 1, NULL, 1, '2022-06-04 11:05:42', NULL),
(14, 'Third', '1654340755_5eb3c8a4b85039c89a3e.jpg', 1, NULL, 1, '2022-06-04 11:05:55', NULL),
(15, 'Fourth', '1654340773_53f5476ea906573d23e7.jpg', 1, NULL, 1, '2022-06-04 11:06:13', NULL),
(19, 'Fifth', '1654498384_ae6e8584f16d27fb7f2d.jpg', 1, NULL, 1, '2022-06-06 06:44:45', NULL),
(20, 'Seven', '1654600677_f456d57592da026c4bc5.webp', 1, NULL, 1, '2022-06-07 11:17:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_images_section`
--

CREATE TABLE `seo_images_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_images_section`
--

INSERT INTO `seo_images_section` (`id`, `heading`, `images`, `pages`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(33, 'Images', '[\"12\",\"13\",\"14\",\"15\",\"19\",\"20\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Service -\"},{\"menu\":\"4\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Products -\"},{\"menu\":\"5\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Updates\"},{\"menu\":\"6\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Contact\"}]', 1, 1, 1, '2022-06-07 11:34:20', '2022-06-08 00:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `seo_inventery`
--

CREATE TABLE `seo_inventery` (
  `id` int(11) NOT NULL,
  `purchase_inventry` int(11) NOT NULL,
  `per_inventry_price` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_inventery`
--

INSERT INTO `seo_inventery` (`id`, `purchase_inventry`, `per_inventry_price`, `total_amount`, `purchase_date`, `payment_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 1, 5000, 5900, '2022-03-29 15:40:25', 2147483647, 1, 1, NULL, '2022-03-29 10:10:25', NULL),
(6, 3, 5000, 17700, '2022-03-29 15:40:28', 2147483647, 1, 1, NULL, '2022-03-29 10:10:28', NULL),
(7, 2, 5000, 11800, '2022-03-29 15:40:46', 1267405983, 1, 1, NULL, '2022-03-29 10:10:46', NULL),
(8, 2, 5000, 11800, '2022-03-29 16:24:35', 956783241, 1, 1, NULL, '2022-03-29 10:54:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_locality`
--

CREATE TABLE `seo_locality` (
  `id` int(11) NOT NULL,
  `locality_name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_locality`
--

INSERT INTO `seo_locality` (`id`, `locality_name`, `city_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Meerut-1', 2, 1, NULL, '2022-03-26 12:38:15', NULL, 1),
(2, 'Meerut-2', 2, 1, NULL, '2022-03-26 12:38:24', NULL, 1),
(3, 'Delhi', 1, 1, NULL, '2022-03-26 12:38:37', NULL, 1),
(4, 'Noida-1', 7, 1, NULL, '2022-03-26 12:38:44', NULL, 1),
(5, 'Panipat-1', 4, 1, NULL, '2022-03-26 12:39:00', NULL, 1),
(6, 'San Jose-1', 8, 1, NULL, '2022-03-26 12:39:12', NULL, 1),
(7, 'Test-california-1', 9, 1, NULL, '2022-03-26 12:39:43', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_mcl`
--

CREATE TABLE `seo_mcl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mcl` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mcl`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_menus`
--

CREATE TABLE `seo_menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(100) DEFAULT NULL,
  `default_menu` tinyint(1) DEFAULT 0,
  `sub_menu` int(11) DEFAULT 0,
  `footer_menu` tinyint(1) DEFAULT 0,
  `sorting_order` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_menus`
--

INSERT INTO `seo_menus` (`id`, `menu_name`, `menu_link`, `default_menu`, `sub_menu`, `footer_menu`, `sorting_order`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, 1, 0, 0, 1, 1, NULL, 1, '2022-03-31 01:23:18', NULL),
(2, 'About Us', 'about', 1, 0, 0, 2, 1, NULL, 1, '2022-03-31 01:23:43', NULL),
(3, 'Services', 'services', 1, 0, 0, 5, 1, 1, 1, '2022-03-31 01:24:27', '2022-05-13 01:55:20'),
(4, 'Products', 'products', 0, 0, 0, 4, 1, 1, 1, '2022-03-31 01:24:35', '2022-03-31 02:55:16'),
(5, 'Updates', 'updates', 0, 0, 0, 3, 1, 1, 1, '2022-05-13 01:27:46', '2022-05-19 23:47:25'),
(6, 'Contact', 'contact', 1, 0, 0, 7, 1, NULL, 1, '2022-05-25 01:37:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_meta_data`
--

CREATE TABLE `seo_meta_data` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_meta_data`
--

INSERT INTO `seo_meta_data` (`id`, `keyword`, `pages`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"1\",\"2\",\"3\"]', 1, NULL, 1, '2022-04-07 11:35:27', NULL),
(3, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"3\"]', 1, NULL, 1, '2022-04-07 11:48:31', NULL),
(4, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"2\"]', 1, NULL, 1, '2022-04-07 11:48:49', NULL),
(5, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"4\"]', 1, NULL, 1, '2022-04-07 11:50:47', NULL),
(6, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"3\",\"4\"]', 1, NULL, 1, '2022-04-07 11:51:21', NULL),
(7, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"3\",\"4\"]', 1, NULL, 1, '2022-04-07 11:51:44', NULL),
(9, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"2\"]', 1, NULL, 1, '2022-04-07 12:01:13', NULL),
(10, 'DVT PUMP ON RENTAL SERVICES IN VIKAS NAGAR GHAZIABAD', '[\"3\"]', 1, NULL, 1, '2022-04-07 12:01:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_mlc_section`
--

CREATE TABLE `seo_mlc_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `mlc_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_mlc_section`
--

INSERT INTO `seo_mlc_section` (`id`, `heading`, `mlc_ids`, `pages`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(3, 'test-heading', 'null', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"},{\"menu\":\"3\",\"sub_menu\":\"17\",\"sub_menu_title\":\"Service -Colostomy Care\"}]', 1, 1, 1, '2022-04-12 09:27:29', '2022-04-12 04:28:02'),
(4, 'eee', 'null', '[{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"}]', 1, NULL, 1, '2022-04-12 10:11:34', NULL),
(5, 'test-heading update', 'null', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\"18\",\"sub_menu_title\":\"Service -Critical Care Nurse\"}]', 1, NULL, 1, '2022-04-12 10:12:53', NULL),
(6, 'Heading', 'null', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, NULL, 1, '2022-05-18 06:41:02', NULL),
(8, 'Heading', 'null', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, NULL, 1, '2022-05-18 07:48:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_order`
--

CREATE TABLE `seo_order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` int(20) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `page_title`, `menu_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 0, 1, NULL, 1, '2022-04-04 07:47:56', '2022-04-04 09:47:30'),
(2, 'About-Us', 0, 1, NULL, 1, '2022-04-04 07:49:21', '2022-04-04 09:48:22'),
(3, 'services - service-1', 0, 1, NULL, 1, '2022-04-04 07:49:21', '2022-04-04 09:48:22'),
(4, 'services- services-2', 0, 1, NULL, 1, '2022-04-04 07:49:52', '2022-04-04 09:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `seo_payments`
--

CREATE TABLE `seo_payments` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `final_amount` int(11) NOT NULL,
  `products_quantity` text NOT NULL,
  `created_at` int(11) DEFAULT current_timestamp(),
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_payments`
--

INSERT INTO `seo_payments` (`id`, `customer_id`, `payment_id`, `order_id`, `discount`, `final_amount`, `products_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'pay_JcEeoMTfDVG3dN', 'order_JcEecDHUiKRUvG', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(2, 1, 'pay_JcEgRgkxZujWit', 'order_JcEgIrFKBBLVDS', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(3, 1, 'pay_JcEnXWdD6Ar251', 'order_JcEnQxduxzNzBD', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(4, 1, 'pay_JcEo4yGowJwAI3', 'order_JcEnlWq21XmFZI', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(5, 1, 'pay_JcEopYakPXEcdx', 'order_JcEohfXlPS0a9O', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(6, 1, 'pay_JcEpgz5KAcfxgV', 'order_JcEpTrMsvAQR3i', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(7, 1, 'pay_JcEqURJ2N6zDdR', 'order_JcEqL7SQKP8AUM', 15000, 136009, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(8, 1, 'pay_JcVvGzXoNrp9ps', 'order_JcVvAfB3jtXc40', 0, 1009, '[{\"product_id\":\"33\",\"quantity\":\"1\"}]', 2147483647, NULL),
(9, 1, 'pay_JcWrVI1jPlr8FG', 'order_JcWrDWcKGLmMUz', 15012, 137209, '[{\"product_id\":\"32\",\"quantity\":\"3\"},{\"product_id\":\"33\",\"quantity\":\"1\"},{\"product_id\":\"34\",\"quantity\":\"1\"}]', 2147483647, NULL),
(10, 1, 'pay_JcX0aY8up4KZ4A', 'order_JcX0Kvx6SMDFYI', 12, 2209, '[{\"product_id\":\"33\",\"quantity\":\"1\"},{\"product_id\":\"34\",\"quantity\":\"1\"}]', 2147483647, NULL),
(11, 1, 'pay_JcXIjCnPlXZ71O', 'order_JcXIUOUR1ZpaxA', 1960, 84038, '[{\"product_id\":\"35\",\"quantity\":\"1\"},{\"product_id\":\"36\",\"quantity\":\"1\"}]', 2147483647, NULL),
(12, 1, 'pay_JcXolSUh6Vs6Av', 'order_JcXodV0jLOUvyk', 6676, 197222, '[{\"product_id\":\"35\",\"quantity\":\"1\"},{\"product_id\":\"36\",\"quantity\":\"1\"},{\"product_id\":\"37\",\"quantity\":\"1\"}]', 2147483647, NULL),
(13, 1, 'pay_JcXuP14rnLuHgI', 'order_JcXuGsAJmwNYQW', 7839, 48157, '[{\"product_id\":\"35\",\"quantity\":\"4\"}]', 2147483647, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pincode`
--

CREATE TABLE `seo_pincode` (
  `id` int(11) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `locality_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_pincode`
--

INSERT INTO `seo_pincode` (`id`, `pincode`, `locality_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 0, 1, NULL, 1, '2022-03-26 12:34:07', NULL),
(2, '', 0, 1, NULL, 1, '2022-03-26 12:35:19', NULL),
(3, '', 0, 1, NULL, 1, '2022-03-26 12:36:17', NULL),
(4, '250001', 3, 1, NULL, 1, '2022-03-26 12:40:02', NULL),
(5, '250002', 1, 1, NULL, 1, '2022-03-26 12:40:08', NULL),
(6, '250003', 2, 1, NULL, 1, '2022-03-26 12:40:19', NULL),
(7, '250004', 4, 1, NULL, 1, '2022-03-26 12:40:25', NULL),
(8, '250005', 5, 1, NULL, 1, '2022-03-26 12:40:32', NULL),
(9, '250006', 6, 1, NULL, 1, '2022-03-26 12:40:41', NULL),
(10, '250007', 7, 1, NULL, 1, '2022-03-26 12:40:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_plugin`
--

CREATE TABLE `seo_plugin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_type` int(11) NOT NULL,
  `plugin_logo` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `business_description` varchar(255) DEFAULT NULL,
  `plugin_appearance` int(5) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `linkedIn_link` varchar(255) DEFAULT NULL,
  `plugin_code` text DEFAULT NULL,
  `plugin_key` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `locality` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `website_domain` varchar(255) NOT NULL,
  `is_installed` tinyint(2) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_plugin`
--

INSERT INTO `seo_plugin` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `business_name`, `business_type`, `plugin_logo`, `background_image`, `business_description`, `plugin_appearance`, `facebook_link`, `twitter_link`, `google_link`, `linkedIn_link`, `plugin_code`, `plugin_key`, `address`, `country`, `city`, `locality`, `state`, `pin_code`, `website_domain`, `is_installed`, `status`, `created_by`, `updated_by`, `created_at`, `update_at`) VALUES
(1, 'Plugins-1', 'Test', 'demo1@gmail.com', 'h7lF5W3z', '9874521458', 'Demo Business Name', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e-PARICHAYA5327846019', 'dwewew sdfsdds fsdfs', 2, 4, 5, 5, 8, 'http://www.demo1.com', 0, 0, 1, 0, '2022-03-29 13:20:07', '0000-00-00'),
(2, 'Plugin-2', 'Test', 'demo2@gmail.com', 'vD2go9yn', '9874563257', 'Demo Business Name-2', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e-PARICHAYA3694287015', 'dwewew sdfsdds fsdfs', 1, 8, 6, 1, 9, 'http://www.demo_1.com', 0, 0, 1, 0, '2022-03-29 13:21:31', '0000-00-00'),
(3, 'Demo Business Name-3', 'testing', 'demo-3@gmail.com', 'bo4nlzgW', '7891214654', 'Demo Business Name-3', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'e-PARICHAYA7628093451', 'ghfg', 2, 7, 4, 6, 7, 'http://www.demo-2.com', 0, 0, 1, 0, '2022-03-29 13:22:21', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `seo_posts`
--

CREATE TABLE `seo_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `featured` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_posts`
--

INSERT INTO `seo_posts` (`id`, `title`, `slug`, `image`, `status`, `featured`, `description`, `created_by`, `update_by`, `created_at`, `updated_at`) VALUES
(5, 'First time stst', 'first-time-stst-sgsdfg', '1653559176_7c6c1153cbd5cafad91c.jpg', 'published', 'no', '<p>safasfasf</p>\r\n', 1, 1, '2022-05-26 08:54:45', '2022-05-26 04:59:36'),
(6, 'Blockchain Technology', 'blockchain-technology', '1653559430_fb03f752d698b009406f.jpg', 'published', 'no', '<h3>Blockchain Technology</h3>\r\n\r\n<p>You&#39;ve certainly heard the term &#39;blockchain technology&#39; a lot in the last several years, most likely in relation to cryptocurrencies like Bitcoin. Indeed, you might be wondering, &quot;What is blockchain technology?&quot; Blockchain appears to be a clich&eacute;, but only to the extent that it has no useful significance that a layperson can grasp. It&#39;s essential to know &quot;what is blockchain technology,&quot; as well as the technology utilized, how it works, and how it&#39;s becoming most important in the Virtual world.</p>\r\n\r\n<p>As blockchain evolves and becomes more user-friendly, it is up to you to keep up with this rapidly changing technology in order to be prepared for the future. If you&#39;re new to blockchain, this is the site to start learning the basics. You&#39;ll learn how to react to the question, &quot;What is blockchain technology?&quot; in this article. You&#39;ll also get to know how blockchain works, why it&#39;s essential, and how you may advance your career in this field.</p>\r\n\r\n<h3>What Is Blockchain Technology?</h3>\r\n\r\n<p>Blockchain technology is a web of peer-to-peer nodes that supports transactional documents, also known as blocks, of the public in diverse databases, also known as the &quot;chain.&quot; This type of storage is mostly referred to as a &#39;digital ledger.&#39;</p>\r\n\r\n<p>Every transaction in this database is verified and protected by the digital signature of the owner, which confirms and secures the transaction from fraud. As a result, digital data is incredibly secure.</p>\r\n\r\n<p>To put it another way, the account individuals are similar to a Google spreadsheet in that it is distributed across a network of computers and stores transaction data based on actual sales. The intriguing aspect is that everyone can view the data, but they cannot alter it.</p>\r\n\r\n<h3>Why is Blockchain Popular?</h3>\r\n\r\n<p>Suppose you&#39;re transmitting money from your bank account to family or friends. You&#39;d use web banking to deed the funds to the other person&#39;s account number. Your bank modernizes the transaction documents once the transaction is done. Isn&#39;t it specific enough? There is a potential concern that most of us are clueless of.</p>\r\n\r\n<p>These kinds of transactions can be misused within a matter of seconds. People who are aware of this truth are often hesitant to use these types of transactions, which is why third-party payment programs have grown in popularity in recent years. However, it is rigorously because of this exposure that Blockchain technology was developed.</p>\r\n\r\n<p>Blockchain is a digital ledger that has recently gained a lot of attention and traction in the technology world but why has it attracted such a massive audience? So, let&#39;s take a closer look to understand the notion.</p>\r\n\r\n<p>Data and transaction records are important aspects of the business. These details are frequently handled in-house or via a third party such as brokers, bankers, or lawyers, which adds time, payment, or both to the business. Fortunately, Blockchain destroys this long procedure and allows a quicker trading process, saving time and money.</p>\r\n\r\n<p>Most people believe that Blockchain and Bitcoin are interchangeable terms, but this is not the case. Blockchain is a technology capable of supporting a variety of applications in a variety of industries, including finance, supply chain, manufacturing, and so on, but Bitcoin is money that is secure thanks to Blockchain technology.</p>\r\n\r\n<h3>Advantages of BlockChain</h3>\r\n\r\n<p>Blockchain is a new technology that offers a number of benefits in an increasingly digital world:</p>\r\n\r\n<ul>\r\n	<li><strong>Exceptionally Safe</strong>&nbsp;It utilizes a digital signature technology to perform fraud-free transactions, making it challenging for other users to unethical or edit an individual&#39;s data without a remarkable digital signature.</li>\r\n	<li><strong>Decentralized System</strong>&nbsp;Normally, transactions require the approval of regulatory bodies like a government or a bank; but, with Blockchain, transactions are completed through user consensus, resulting in smoother, safer, and faster transactions.</li>\r\n	<li><strong>Ability to Automate</strong>&nbsp;It&#39;s programmable, and when the stimulus&#39;s parameters are matched, it can automatically develop a sequence of activities, events, and payments.</li>\r\n</ul>\r\n\r\n<h3>What Are the Best Investment Options for Blockchain Technology?</h3>\r\n\r\n<p>Blockchain technology and stocks can be profitable investments, and there are a few options for getting started with your first blockchain investment. When it decides to invest in blockchain technology, Bitcoin is probably the first person that springs to mind, and it shouldn&#39;t be disregarded. Several apps and benefits are in premature stages of growth and are expanding funds for using blockchain technology. You can purchase coins as an investor with the hope that expenses will increase as the service or app gets more prevalent.</p>\r\n\r\n<h3>Conclusion</h3>\r\n\r\n<p>Although we only scratched the surface of blockchain applications&#39; industry-wide capabilities in this article, the field&#39;s career opportunities are expanding at a rapid pace.</p>\r\n', 1, NULL, '2022-05-26 10:03:50', NULL),
(7, 'Robotic Process Automation', 'robotic-process-automation', '1653559499_8df53db29bcef4b6c22c.jpg', 'published', 'no', '<h3>Robotic Process Automation</h3>\r\n\r\n<p>RPA (Robotic Process Automation) is a software solution that enables anyone to automate digital tasks quickly and efficiently.</p>\r\n\r\n<p>RPA enables software developers to create software robots, or &quot;bots,&quot; that can learn, mimic, and then execute business processes based on rules. Users can use RPA automation to build bots by watching human digital actions. Show whatever you want your robots to do, then leave them to it. Robotic Process Automation software bots can communicate with any application or system in the same manner that humans can, except that the RPA bots could work around the clock, nonstop, significantly faster, and with 100% accuracy and precision.</p>\r\n\r\n<p>Robotic Process Automation saves a considerable amount of time and human effort. It is both time-saving and cost-effective. Provides various scalability and intelligence, all are significant characteristics of robotic process automation.</p>\r\n\r\n<h3>Every RPA System Must Have the Following Three Capabilities:</h3>\r\n\r\n<ul>\r\n	<li>Using screen scraping or API connection to communicate with other services.</li>\r\n	<li>For bot programming, a decision-making interface is provided.</li>\r\n	<li>It is unnecessary to know how to program to use RPA Tools.</li>\r\n</ul>\r\n\r\n<p>Small, medium and large enterprises all employ RPA tools, but they must be able to rely on the software heavily.</p>\r\n\r\n<h3>Types of Robotic Process Automation</h3>\r\n\r\n<p>The many RPA are listed below:</p>\r\n\r\n<ul>\r\n	<li>Attended automation: In automating operations, some tools will require human intervention.</li>\r\n	<li>Unattended automation: These tools are brilliant and competent in deciding on their own.</li>\r\n	<li>Hybrid RPA: These technologies will integrate both attended and unsupervised automation capabilities.</li>\r\n</ul>\r\n\r\n<h3>What are the Business Benefits of RPA?</h3>\r\n\r\n<p>Robotic process automation allows businesses to become more cost-effective, adaptable, and responsive. It also improves staff satisfaction, involvement, and performance by removing tedious chores from their daily routines.</p>\r\n\r\n<p>RPA is non-intrusive and can be applied quickly to speed up the digital transformation process. It is also great for automating operations with legacy systems that do not have APIs, virtual desktop infrastructures (VDIs), or database access.</p>\r\n\r\n<h3>Benefits of Robotic Process Automation</h3>\r\n\r\n<ol>\r\n	<li>The business environment is constantly strengthening. To expand and maintain credibility, a company continuously develops its product, sales, marketing, and other processes.</li>\r\n	<li>A traditional business uses many IT systems to operate its overall operations. Because of financial, schedule, and development terrible issues, many IT systems are not changed regularly as business processes grow. As a result, the business process does not match the technical activity of the IT system.</li>\r\n	<li>A human workforce is engaged to fill the gap between systems and processes to solve this technical and organizational debt. For instance, a corporation changed its sales procedure so that a necessary 50 percent fee is required to complete a product booking. However, this has not yet been coded in the IT system. If a 50% prepayment is made, a human worker has to review the invoice and payment details and complete the sales order.</li>\r\n</ol>\r\n\r\n<p>The company uses Robotic Automation to employ virtual staff that look and act like human workers. A modification in a few lines of software code is always quicker and less expensive than educating hundreds of personnel in the progress of a process change.</p>\r\n\r\n<h3>Here Are Some Perks of Robotic Process Automation:</h3>\r\n\r\n<ul>\r\n	<li>A human can only work for 8 hours every day on average, whereas robots can work nonstop for 24 hours.</li>\r\n	<li>Human productivity is 60 percent on average with few errors, compared to 100 percent with no omissions for robots.</li>\r\n	<li>Robots are considerably superior to humans.</li>\r\n</ul>\r\n\r\n<h3>What Makes RPA So Revolutionary?</h3>\r\n\r\n<p>RPA technology is changing how people work all around the world.</p>\r\n\r\n<p>Logging into systems and applications, transferring files and folders, retrieving, copying, and compounding by the fact, filling in forms, and generating routine analysis and reports are all tasks that software robots execute instead of people. Powerful robots can even conduct mental jobs such as deciphering language, taking part in chats and conversations, comprehending unstructured data, and making complicated decisions with advanced machine learning models.</p>\r\n\r\n<p>When robots handle these types of repetitive, high-volume jobs, humans can focus on what they do best and love more: developing, collaborating, producing, and engaging with consumers. Businesses benefit from the enhanced output, efficiency, and security as well. It is no surprise that RPA is changing the way we work.</p>\r\n\r\n<h3>Why Is Robotic Process Automation Necessary?</h3>\r\n\r\n<p>RPA is a part of the software that automates part or all of the processes in a specific business process. RPA also applies to both simple and complex business operations. It can also be used for procedures that your employees undertake regularly and those when they only do once in a while.</p>\r\n\r\n<p>Technology will continue to play an increasingly crucial role in the workplace as it advances. As a result, RPA should be considered. You will streamline business procedures, cut expenses, improve customer service, and more by doing so.</p>\r\n', 1, NULL, '2022-05-26 10:04:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_post_section`
--

CREATE TABLE `seo_post_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `pages_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_id`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_post_section`
--

INSERT INTO `seo_post_section` (`id`, `heading`, `pages_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(5, 'test-heading21', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"},{\"menu\":\"3\",\"sub_menu\":\"17\",\"sub_menu_title\":\"Service -Colostomy Care\"}]', 1, NULL, 1, '2022-04-12 09:23:00', NULL),
(6, ' sf Heading', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, 1, 1, '2022-05-18 06:21:49', '2022-05-18 03:21:24'),
(8, 'Heading', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"}]', 1, NULL, 1, '2022-05-18 06:24:00', NULL),
(9, 'What is Lorem Ipsum?', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, NULL, 1, '2022-05-26 08:32:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_products`
--

CREATE TABLE `seo_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `menu_link` text NOT NULL,
  `menu_id` int(11) NOT NULL,
  `total_inventry` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `extra_charge` int(11) NOT NULL DEFAULT 0,
  `main_image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `related_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`related_product`)),
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `specification` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_products`
--

INSERT INTO `seo_products` (`id`, `product_name`, `menu_link`, `menu_id`, `total_inventry`, `mrp`, `discount`, `extra_charge`, `main_image`, `banner`, `related_product`, `short_description`, `long_description`, `specification`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(35, 'Realme C35 Glowing Green 64 GB', 'realme-c35-glowing-green-64-gb', 4, 10, 13999, 14, 0, '1654152596_166823a756c58a2fafc9.webp', NULL, 'null', '<p>Thanks to the 2 SIM card slots and a microSD card slot on this realme C35 mobile phone, you can enjoy blazing-fast network connectivity as well as massive storage.</p>\r\n', '<p>Watch videos, TV shows, and play games for hours with the realme C35 smartphone. This mobile phone comes equipped with a powerful 5000 mAh battery so that you can indulge in long hours of entertainment. Also, this mobile phone has a 16.76 cm (6.6) display for mesmerizing visuals. Moreover, this phone is powered by an efficient 12 nm octa-core Processor to offer seamless gaming and easy multi-tasking.</p>\r\n', '<ul>\r\n	<li>4 GB RAM | 64 GB ROM | Expandable Upto 1 TB</li>\r\n	<li>16.76 cm (6.6 inch) Full HD+ Display</li>\r\n	<li>50MP + 2MP + 0.3MP | 8MP Front Camera</li>\r\n	<li>5000 mAh Lithium Polymer Battery</li>\r\n	<li>Unisoc Tiger T616 Processor</li>\r\n</ul>\r\n', 1, 1, 1, '2022-06-02 06:49:56', '2022-06-02 03:24:23'),
(36, 'APPLE iPhone 12 Green 128 GB', 'apple-iphone-12-green-128-gb', 4, 10, 70999, 0, 1000, '1654152699_23a25e5997b7e335a45e.webp', NULL, 'null', '<p>7 day seller replacement policy/brand assistance for device issues</p>\r\n', '<p>et your financial losses covered for online transaction frauds on all bank accounts, credit/ debit cards, mobile wallets. Covers scam calls, OTP SMS frauds, UPI, netbanking, Cyber Attacks, Sim-swapping, Phishing, Spoofing, and more.</p>\r\n\r\n<p>et your financial losses covered for online transaction frauds on all bank accounts, credit/ debit cards, mobile wallets. Covers scam calls, OTP SMS frauds, UPI, netbanking, Cyber Attacks, Sim-swapping, Phishing, Spoofing, and more.</p>\r\n\r\n<p>et your financial losses covered for online transaction frauds on all bank accounts, credit/ debit cards, mobile wallets. Covers scam calls, OTP SMS frauds, UPI, netbanking, Cyber Attacks, Sim-swapping, Phishing, Spoofing, and more.</p>\r\n', '<ul>\r\n	<li>128 GB ROM</li>\r\n	<li>15.49 cm (6.1 inch) Super Retina XDR Display</li>\r\n	<li>12MP + 12MP | 12MP Front Camera</li>\r\n	<li>A14 Bionic Chip with Next Generation Neural Engine Processor</li>\r\n	<li>Ceramic Shield</li>\r\n	<li>Industry-leading IP68 Water Resistance</li>\r\n	<li>All Screen OLED Display</li>\r\n	<li>12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording</li>\r\n</ul>\r\n', 1, 1, 1, '2022-06-02 06:51:39', '2022-06-02 03:24:34'),
(37, 'APPLE 2020 Macbook Air M1', 'apple-2020-macbook-air-m1', 4, 12, 117900, 4, 0, '1654152855_f7b15c12f7de998a499f.webp', NULL, 'null', '<p>APPLE 2020 Macbook Air M1 - (8 GB/512 GB SSD/Mac OS Big Sur) MGNA3HN/A&nbsp;&nbsp;(13.3 inch, Silver, 1.29 kg)</p>\r\n', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>MacBook Air, 30 W USB-C Power Adapter, USB-C Charge Cable (2m), User Guide, Warranty Documents</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Number</td>\r\n			<td>\r\n			<ul>\r\n				<li>MGNA3HN/A</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Part Number</td>\r\n			<td>\r\n			<ul>\r\n				<li>MGNA3HN/A</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Series</td>\r\n			<td>\r\n			<ul>\r\n				<li>2020 Macbook Air</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Color</td>\r\n			<td>\r\n			<ul>\r\n				<li>Silver</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>Thin and Light Laptop</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Suitable For</td>\r\n			<td>\r\n			<ul>\r\n				<li>Processing &amp; Multitasking</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Battery Backup</td>\r\n			<td>\r\n			<ul>\r\n				<li>Upto 15 Hours</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power Supply</td>\r\n			<td>\r\n			<ul>\r\n				<li>30 W AC Adapter</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MS Office Provided</td>\r\n			<td>\r\n			<ul>\r\n				<li>No</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Processor And Memory Features</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Processor Brand</td>\r\n			<td>\r\n			<ul>\r\n				<li>Apple</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor Name</td>\r\n			<td>\r\n			<ul>\r\n				<li>M1</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SSD</td>\r\n			<td>\r\n			<ul>\r\n				<li>Yes</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SSD Capacity</td>\r\n			<td>\r\n			<ul>\r\n				<li>512 GB</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM</td>\r\n			<td>\r\n			<ul>\r\n				<li>8 GB</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>DDR4</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor Variant</td>\r\n			<td>\r\n			<ul>\r\n				<li>Apple M1 Chip</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Expandable Memory</td>\r\n			<td>\r\n			<ul>\r\n				<li>Upto 16 GB</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Graphic Processor</td>\r\n			<td>\r\n			<ul>\r\n				<li>NA</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Number of Cores</td>\r\n			<td>\r\n			<ul>\r\n				<li>8</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Operating System</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Operating System</td>\r\n			<td>\r\n			<ul>\r\n				<li>Mac OS Big Sur</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Port And Slot Features</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Mic In</td>\r\n			<td>\r\n			<ul>\r\n				<li>Yes</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB Port</td>\r\n			<td>\r\n			<ul>\r\n				<li>2 x Thunderbolt / USB 4 Ports (Supports Charging, DisplayPort, Thunderbolt 3 (Upto 40 Gbps), USB 3.1 (2nd Gen, Upto 10 Gbps))</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Display And Audio Features</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Touchscreen</td>\r\n			<td>\r\n			<ul>\r\n				<li>No</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size</td>\r\n			<td>\r\n			<ul>\r\n				<li>33.78 cm (13.3 inch)</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Resolution</td>\r\n			<td>\r\n			<ul>\r\n				<li>2560 x 1600 Pixel</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>Quad LED Backlit IPS Display (227 PPI, 400 nits Brightness, Wide Colour (P3), True Tone Technology)</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Speakers</td>\r\n			<td>\r\n			<ul>\r\n				<li>Built-in Speakers</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Internal Mic</td>\r\n			<td>\r\n			<ul>\r\n				<li>Three-mic Array with Directional Beamforming</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sound Properties</td>\r\n			<td>\r\n			<ul>\r\n				<li>Stereo Speakers, Wide Stereo Sound, Support for Dolby Atmos Playback</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Connectivity Features</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Wireless LAN</td>\r\n			<td>\r\n			<ul>\r\n				<li>IEEE 802.11ax (Wi-Fi 6)</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth</td>\r\n			<td>\r\n			<ul>\r\n				<li>v5.0</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Dimensions</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Dimensions</td>\r\n			<td>\r\n			<ul>\r\n				<li>304.1 x 212.4 x 10.9 mm</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>\r\n			<ul>\r\n				<li>1.29 kg</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Additional Features</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Disk Drive</td>\r\n			<td>\r\n			<ul>\r\n				<li>Not Available</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Web Camera</td>\r\n			<td>\r\n			<ul>\r\n				<li>720p FaceTime HD Webcam</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Keyboard</td>\r\n			<td>\r\n			<ul>\r\n				<li>Backlit Magic Keyboard</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pointer Device</td>\r\n			<td>\r\n			<ul>\r\n				<li>Force Touch Trackpad</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Included Software</td>\r\n			<td>\r\n			<ul>\r\n				<li>Built-in Apps: iMovie, Siri, GarageBand, Pages, Numbers, Photos, Keynote, Safari, Mail, FaceTime, Messages, Maps, Stocks, Home, Voice Memos, Notes, Calendar, Contacts, Reminders, Photo Booth, Preview, Books, App Store, Time Machine, TV, Music, Podcasts, Find My, QuickTime Player</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Additional Features</td>\r\n			<td>\r\n			<ul>\r\n				<li>49.9 WHr Li-polymer Battery</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Warranty</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Warranty Summary</td>\r\n			<td>\r\n			<ul>\r\n				<li>1 Year Limited Warra&shy;nty</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Warranty Service Type</td>\r\n			<td>\r\n			<ul>\r\n				<li>Onsite</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Covered in Warranty</td>\r\n			<td>\r\n			<ul>\r\n				<li>Manufacturing Defects</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Not Covered in Warranty</td>\r\n			<td>\r\n			<ul>\r\n				<li>Physical Damage</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Domestic Warranty</td>\r\n			<td>\r\n			<ul>\r\n				<li>1 Year</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Stylish &amp; Portable Thin and Light Laptop</li>\r\n	<li>13.3 inch Quad LED Backlit IPS Display (227 PPI, 400 nits Brightness, Wide Colour (P3), True Tone Technology)</li>\r\n	<li>Light Laptop without Optical Disk Drive</li>\r\n</ul>\r\n', 1, 1, 1, '2022-06-02 06:54:15', '2022-06-02 03:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `seo_products_section`
--

CREATE TABLE `seo_products_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`products`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_products_section`
--

INSERT INTO `seo_products_section` (`id`, `heading`, `products`, `pages`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(33, 'What is Lorem Ipsum?', '[\"31\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', 1, NULL, 1, '2022-05-25 11:53:34', NULL),
(34, '1914 translation by H. Rackham', '[\"31\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"}]', 1, NULL, 1, '2022-05-25 12:13:12', NULL),
(35, 'What is Lorem Ipsum? sf', '[\"35\",\"36\"]', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Service -\"}]', 1, 1, 1, '2022-06-07 11:43:29', '2022-06-07 06:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `seo_product_orders`
--

CREATE TABLE `seo_product_orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` enum('Paid','Ordered','Shipped','Out For Delivery','Delivered','Cancelled') NOT NULL DEFAULT 'Paid',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_product_orders`
--

INSERT INTO `seo_product_orders` (`id`, `customer_id`, `product_id`, `product_image`, `product_name`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 35, '1654152596_166823a756c58a2fafc9.webp', 'Realme C35 (Glowing Green, 64 GB)', 12039.1, 1, 'Ordered', '2022-06-02 02:00:52', '2022-06-02 02:00:52'),
(4, 1, 36, '1654152699_23a25e5997b7e335a45e.webp', 'APPLE iPhone 12 (Green, 128 GB)', 71999, 1, 'Ordered', '2022-06-02 02:00:52', '2022-06-02 02:00:52'),
(5, 1, 35, '1654152596_166823a756c58a2fafc9.webp', 'Realme C35 (Glowing Green, 64 GB)', 12039.1, 1, 'Ordered', '2022-06-02 02:31:14', '2022-06-02 02:31:14'),
(6, 1, 36, '1654152699_23a25e5997b7e335a45e.webp', 'APPLE iPhone 12 (Green, 128 GB)', 71999, 1, 'Ordered', '2022-06-02 02:31:14', '2022-06-02 02:31:14'),
(7, 1, 37, '1654152855_f7b15c12f7de998a499f.webp', 'APPLE 2020 Macbook Air M1', 113184, 1, 'Ordered', '2022-06-02 02:31:14', '2022-06-02 02:31:14'),
(8, 1, 35, '1654152596_166823a756c58a2fafc9.webp', 'Realme C35 (Glowing Green, 64 GB)', 48156.6, 4, 'Ordered', '2022-06-02 02:36:30', '2022-06-02 02:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `seo_query_section`
--

CREATE TABLE `seo_query_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `pages_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_query_section`
--

INSERT INTO `seo_query_section` (`id`, `heading`, `pages_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Heading', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, 1, 1, '2022-05-18 07:46:20', '2022-05-18 02:48:45'),
(8, 'Why Choose Aliya Healthcare Group', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, NULL, 1, '2022-05-18 07:48:49', NULL),
(9, 'Why Choose Aliya Healthcare Group', '[{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"}]', 1, NULL, 1, '2022-05-18 07:48:54', NULL),
(10, 'Heading', '[{\"menu\":\"3\",\"sub_menu\":\"17\",\"sub_menu_title\":\"Service -Colostomy Care\"}]', 1, NULL, 1, '2022-05-18 07:48:59', NULL),
(11, 'Why Choose Aliya Healthcare Group', '[{\"menu\":\"3\",\"sub_menu\":\"16\",\"sub_menu_title\":\"Service -Babysitter & Japa Services\"}]', 1, NULL, 1, '2022-05-18 07:49:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_roles`
--

CREATE TABLE `seo_roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(255) NOT NULL,
  `role_permission` text NOT NULL,
  `role_status` tinyint(1) NOT NULL DEFAULT 1,
  `role_created_at` datetime NOT NULL,
  `role_update_at` datetime DEFAULT NULL,
  `role_update_by` int(11) DEFAULT NULL,
  `role_created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_roles`
--

INSERT INTO `seo_roles` (`role_id`, `role_title`, `role_permission`, `role_status`, `role_created_at`, `role_update_at`, `role_update_by`, `role_created_by`) VALUES
(1, 'Administrator', 'a:1:{i:0;s:3:\"cru\";}', 1, '2022-03-01 10:39:28', '2022-03-01 10:39:28', NULL, NULL),
(2, 'Super admin', 'a:1:{i:0;s:4:\"crud\";}', 1, '2022-03-03 09:24:53', '2022-03-03 09:24:53', NULL, NULL),
(3, 'users', 'a:1:{i:0;s:3:\"cru\";}', 1, '2022-03-03 09:24:53', '2022-03-03 09:24:53', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seo_service`
--

CREATE TABLE `seo_service` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_link` varchar(256) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `related_services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content` text DEFAULT NULL,
  `short_description` varchar(250) NOT NULL DEFAULT 'Biru SHarma',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_service`
--

INSERT INTO `seo_service` (`id`, `service`, `menu_id`, `menu_link`, `slug`, `image`, `banner`, `related_services`, `content`, `short_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(36, 'Rahut Rawat', 3, 'rahutrawat', 'rahutrawat', '1654236922_e279d6739f06261b1095.jpg', '1654236922_e338de92c40ae05018ee.jpg', 'null', '<p>asf</p>\r\n', 'Biru SHarma', 1, 1, 1, '2022-06-03 06:13:15', '2022-06-03 01:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `seo_services_section`
--

CREATE TABLE `seo_services_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`services`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `discription` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_services_section`
--

INSERT INTO `seo_services_section` (`id`, `heading`, `services`, `pages`, `discription`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Heading', '[\"17\"]', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 'sdfsf', 1, 1, 1, '2022-05-17 12:06:59', '2022-05-17 07:07:04'),
(13, 's', '[\"36\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"4\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Products -\"}]', 'sf', 1, 1, 1, '2022-06-07 11:43:06', '2022-06-07 06:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'app',
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `setting_name`, `setting_value`, `type`, `deleted`) VALUES
(10, 'email_sent_from_name', '', 'app', 0),
(11, 'accepted_file_formats', 'jpg,jpeg,png,doc,xlsx,txt,pdf,zip', 'app', 0),
(12, 'allow_partial_invoice_payment_from_clients', '1', 'app', 0),
(13, 'allowed_ip_addresses', '', 'app', 0),
(14, 'app_title', 'DIVIEDUCARE CAREER SOLUTIONS', 'app', 0),
(15, 'client_can_pay_invoice_without_login', '1', 'app', 0),
(16, 'company_address', 'B-37 3rd Floor, Sector 2,\r\nNoida, U.P - 201301, India', 'app', 0),
(17, 'company_email', 'info@kk.com', 'app', 0),
(18, 'company_name', 'Kishore Kumar', 'app', 0),
(19, 'company_phone', '+91 783 846 9950', 'app', 0),
(20, 'company_vat_number', '', 'app', 0),
(21, 'company_website', 'www.example.com', 'app', 0),
(22, 'conversion_rate', '', 'app', 0),
(23, 'currency_position', 'left', 'app', 0),
(24, 'currency_symbol', '₹', 'app', 0),
(25, 'date_format', 'd-m-Y', 'app', 0),
(26, 'decimal_separator', '.', 'app', 0),
(27, 'default_currency', 'INR', 'app', 0),
(28, 'default_due_date_after_billing_date', '', 'app', 0),
(29, 'default_left_menu', '', 'app', 0),
(30, 'default_template', '1', 'app', 0),
(31, 'default_theme_color', '557bbb', 'app', 0),
(32, 'email_protocol', 'smtp', 'app', 0),
(33, 'email_sent_from_address', 'nileshgautam@sartiaglobal.com', 'app', 0),
(34, 'email_sent_from_name', 'Kishore kumar', 'app', 0),
(36, 'email_smtp_pass', 'Sartia@@2022', 'app', 0),
(37, 'email_smtp_port', '465', 'app', 0),
(38, 'email_smtp_security_type', 'none', 'app', 0),
(39, 'email_smtp_user', 'nilesh.sartia@gmail.com', 'app', 0),
(40, 'enable_footer', '1', 'app', 0),
(41, 'enable_rich_text_editor', '1', 'app', 0),
(42, 'favicon', 'a:1:{s:9:\"file_name\";s:30:\"_file619f601002f42-favicon.png\";}', 'app', 0),
(43, 'first_day_of_week', '0', 'app', 0),
(44, 'footer_copyright_text', 'Kishore kumar @2022', 'app', 0),
(45, 'footer_menus', '', 'app', 0),
(46, 'initial_number_of_the_invoice', '1', 'app', 0),
(47, 'invoice_color', '', 'app', 0),
(48, 'invoice_footer', '<p><br></p>', 'app', 0),
(49, 'invoice_logo', '', 'app', 0),
(50, 'invoice_prefix', '', 'app', 0),
(51, 'invoice_style', 'style_1', 'app', 0),
(52, 'item_purchase_code', '321321a', 'app', 0),
(53, 'language', 'english', 'app', 0),
(54, 'module_announcement', '1', 'app', 0),
(55, 'module_attendance', '1', 'app', 0),
(56, 'module_chat', '1', 'app', 0),
(57, 'module_estimate', '1', 'app', 0),
(58, 'module_estimate_request', '1', 'app', 0),
(59, 'module_event', '1', 'app', 0),
(60, 'module_expense', '1', 'app', 0),
(61, 'module_gantt', '1', 'app', 0),
(62, 'module_help', '1', 'app', 0),
(63, 'module_invoice', '1', 'app', 0),
(64, 'module_knowledge_base', '1', 'app', 0),
(65, 'module_lead', '1', 'app', 0),
(66, 'module_leave', '1', 'app', 0),
(67, 'module_message', '1', 'app', 0),
(68, 'module_note', '1', 'app', 0),
(69, 'module_order', '1', 'app', 0),
(70, 'module_project_timesheet', '1', 'app', 0),
(71, 'module_proposal', '1', 'app', 0),
(72, 'module_ticket', '1', 'app', 0),
(73, 'module_timeline', '1', 'app', 0),
(74, 'module_todo', '1', 'app', 0),
(75, 'no_of_decimals', '2', 'app', 0),
(76, 'rows_per_page', '10', 'app', 0),
(77, 'rtl', '0', 'app', 0),
(78, 'scrollbar', 'jquery', 'app', 0),
(79, 'send_bcc_to', '', 'app', 0),
(80, 'send_invoice_due_after_reminder', '', 'app', 0),
(81, 'send_invoice_due_pre_reminder', '', 'app', 0),
(82, 'send_recurring_invoice_reminder_before_creation', '', 'app', 0),
(83, 'show_background_image_in_signin_page', 'yes', 'app', 0),
(84, 'show_logo_in_signin_page', 'yes', 'app', 0),
(85, 'show_theme_color_changer', 'yes', 'app', 0),
(86, 'signin_page_background', 'a:4:{s:9:\"file_name\";s:82:\"system_file619f5dd0e9fee-tumblr_a61aadb6fe435f084ce331662effeb6d_70a42eb8_1280.jpg\";s:9:\"file_size\";s:6:\"146675\";s:7:\"file_id\";N;s:12:\"service_type\";N;}', 'app', 0),
(87, 'site_logo', 'a:1:{s:9:\"file_name\";s:32:\"_file619f5e00e79a7-site-logo.png\";}', 'app', 0),
(88, 'task_point_range', '5', 'app', 0),
(89, 'time_format', 'small', 'app', 0),
(90, 'timezone', 'Asia/Kolkata', 'app', 0),
(91, 'users_can_input_only_total_hours_instead_of_period', '', 'app', 0),
(92, 'users_can_start_multiple_timers_at_a_time', '', 'app', 0),
(93, 'weekends', '0,6', 'app', 0),
(94, 'email_smtp_host', 'ssl://smtp.gmail.com', 'app', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seo_slider`
--

CREATE TABLE `seo_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `heading_color` varchar(50) DEFAULT '#000000',
  `text_color` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_slider`
--

INSERT INTO `seo_slider` (`id`, `name`, `title`, `description`, `slider_image`, `heading_color`, `text_color`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(20, 'First ', 'Welcome to our shop 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing                                                    elit. Iste quam velit saepe dolorem deserunt quo quidem                                                    ad optio. 111111111', '1653122742_7341ab804fd93870af93.jpeg', '#a04b4b', '#791111', 1, 1, 1, '2022-05-21 08:45:42', '2022-05-24 05:38:58'),
(21, 'Second', 'Welcome to our shop 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing                                                    elit. Iste quam velit saepe dolorem deserunt quo quidem                                                    ad optio. 222222', '1654345176_5862de1ef6e3282fc4e3.jpg', '#7a1015', '#e6c628', 1, 1, 1, '2022-05-21 08:46:05', '2022-06-04 07:19:36'),
(22, 'Third', 'Welcome to our shop 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing\n                                                    elit. Iste quam velit saepe dolorem deserunt quo quidem\n                                                    ad optio. 33333', '1653122830_a1ba1afa0406f2e93234.jpeg', '#000000', '#000000', 1, 1, 1, '2022-05-21 08:47:10', '2022-05-23 06:09:41'),
(23, 'Fourth', 'Welcome to our shop 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing\n                                                    elit. Iste quam velit saepe dolorem deserunt quo quidem\n                                                    ad optio. 44444', '1653122845_f95aa2c82e4e9a126d1e.jpeg', '#000000', '#000000', 1, 1, 1, '2022-05-21 08:47:25', '2022-05-23 06:10:06'),
(24, 'fggd', 'gdg', 'dgdg', '1654244706_527ab9711f0a54d37b41.jpg', '#000000', '#000000', 1, 1, 1, '2022-06-03 06:29:12', '2022-06-03 03:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `seo_slider_section`
--

CREATE TABLE `seo_slider_section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `page_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`page_id`)),
  `menu_id` int(11) DEFAULT 0,
  `service_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `slider` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`slider`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_slider_section`
--

INSERT INTO `seo_slider_section` (`id`, `section_name`, `page_id`, `menu_id`, `service_id`, `product_id`, `slider`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(39, 'Home', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Service -\"},{\"menu\":\"4\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Products -\"},{\"menu\":\"5\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Updates\"},{\"menu\":\"6\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Contact\"}]', 0, 0, 0, '[\"20\",\"21\",\"22\",\"23\"]', 1, 1, 1, '2022-05-21 08:47:56', '2022-05-27 05:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `seo_state`
--

CREATE TABLE `seo_state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_state`
--

INSERT INTO `seo_state` (`id`, `state_name`, `country_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'California	', 1, 1, NULL, 1, '2022-03-26 05:43:05', NULL),
(2, 'Hawaii', 1, 1, 1, 0, '2022-03-26 05:43:21', '2022-03-26 17:40:04'),
(4, 'Delhi', 2, 1, NULL, 1, '2022-03-26 05:46:43', NULL),
(5, 'Haryana', 2, 1, NULL, 1, '2022-03-26 05:46:47', NULL),
(6, 'Uttar Pradesh', 2, 1, NULL, 1, '2022-03-26 05:46:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_testimonial`
--

CREATE TABLE `seo_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_testimonial`
--

INSERT INTO `seo_testimonial` (`id`, `name`, `image`, `description`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Testimonials-1', '/assets/img/testimonials_image/1514040715Automation.jpg', 'Testimonials-1 Description*', 1, 1, 1, '2022-04-08 08:22:22', '2022-04-15 07:49:13'),
(2, 'Testimonials-2', '', 'Testimonials-2 Description*', 1, 1, 1, '2022-04-08 08:22:32', '2022-04-15 07:50:44'),
(3, 'Testimonials-3', '', 'Testimonials-3 Description*', 1, 1, 1, '2022-04-08 08:22:39', '2022-04-11 00:41:17'),
(5, 'Testimonials-4', '/assets/img/testimonials_image/949427678Blockchain.jpg', 'Testimonials-4 Description*', 1, NULL, 1, '2022-04-15 12:50:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_testimonials_section`
--

CREATE TABLE `seo_testimonials_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `testimonials` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`testimonials`)),
  `pages_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_ids`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_testimonials_section`
--

INSERT INTO `seo_testimonials_section` (`id`, `heading`, `testimonials`, `pages_ids`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Heading', '[\"1\"]', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, 1, 1, '2022-05-18 06:01:29', '2022-05-18 01:03:27'),
(8, 'Heading', '[\"1\"]', '[{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, NULL, 1, '2022-05-18 06:02:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_users`
--

CREATE TABLE `seo_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_roleid` int(11) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_profile` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_phone_no` varchar(50) DEFAULT NULL,
  `website_URL` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `default_theme` varchar(50) DEFAULT NULL,
  `current_theme` varchar(50) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `domain_url` varchar(255) DEFAULT NULL,
  `font_size` varchar(255) DEFAULT NULL,
  `business_description` text DEFAULT NULL,
  `business_logo` varchar(255) DEFAULT NULL,
  `business_icon` varchar(255) DEFAULT NULL,
  `business_address` varchar(255) DEFAULT NULL,
  `alternate_address` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `alternate_email_id` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `alternate_mobile` varchar(20) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `facebook_page` varchar(255) DEFAULT NULL,
  `youtube_page` varchar(255) DEFAULT NULL,
  `linkedin_page` varchar(255) DEFAULT NULL,
  `twitter_page` varchar(255) DEFAULT NULL,
  `instagram_page` varchar(255) DEFAULT NULL,
  `currency` int(11) NOT NULL DEFAULT 1,
  `theme_name` varchar(50) DEFAULT 'theme1',
  `theme_color` varchar(50) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_users`
--

INSERT INTO `seo_users` (`id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_roleid`, `user_status`, `company_logo`, `company_name`, `company_profile`, `company_address`, `company_phone_no`, `website_URL`, `facebook_link`, `twitter_link`, `google_plus`, `linkedIn`, `default_theme`, `current_theme`, `business_name`, `domain_url`, `font_size`, `business_description`, `business_logo`, `business_icon`, `business_address`, `alternate_address`, `email_id`, `alternate_email_id`, `mobile`, `alternate_mobile`, `opening_hours`, `facebook_page`, `youtube_page`, `linkedin_page`, `twitter_page`, `instagram_page`, `currency`, `theme_name`, `theme_color`, `key`, `secret`, `user_created_at`, `user_updated_at`) VALUES
(1, 'Demo', 'demo@gmail.com', '9354774014', 'MTIzNDU2', 1, 1, '/assets/img/logo/1372996140profile.jpeg', 'Dummy-11 test', 'Easily Create, Send & Analyze Your Newsletter Campaigns. ', 'Jasimodine - Central Street, Lusaka, Zambia', '9876541111', 'https://demo.com/', '', '', '', '', 'primary', 'blue', 'Demo', 'http://www.demo.com', '11', 'Demo business description', '1653135367_33f0a6f34a3df9e13db2.jpg', '1653135367_a54b1857e0f6f844be27.jpg', 'Plot Number 6, Shop Number 1, Nyay Khand Ist Indirapuram, Ghaziabad', 'B 5/150, Sector 3, Rohini C\nNEAR MAXI CAR WASH\nNEAR GURUDWARA SINGH SABHA, INFRONT OF JAIPUR GOLDEN HOSPITAL ROAD\nDELHI, Delhi 110085\nIndia', 'demo@gmail.com', 'demo2@gmail.com', '9643461577', '8800845768', 'Mon to Sat 10:00 A.M to 7:00 P.M', 'https://www.facebook.com/demo', 'https://www.youtube.com/channel/demo', 'demo linkedin', 'demo twitter', 'demo instagram', 1, 'theme3', 'default', '', 'hQ7g55qqqTq79Ap1bAfrQq9s', '2022-03-15 07:56:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_user_access_permissions`
--

CREATE TABLE `seo_user_access_permissions` (
  `uap_id` int(11) NOT NULL,
  `uap_user_id` int(11) NOT NULL,
  `uap_permission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`uap_permission`)),
  `uap_status` tinyint(1) NOT NULL DEFAULT 1,
  `uap_created_at` datetime NOT NULL,
  `uap_update_at` datetime DEFAULT NULL,
  `uap_update_by` int(11) DEFAULT NULL,
  `uap_created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_user_access_permissions`
--

INSERT INTO `seo_user_access_permissions` (`uap_id`, `uap_user_id`, `uap_permission`, `uap_status`, `uap_created_at`, `uap_update_at`, `uap_update_by`, `uap_created_by`) VALUES
(1, 3, '[ { \"module_id\": 1, \"full_access\":false, \"role_id\":1, \"submodule\": [ { \"id\": 1, \"role_id\": 1 }, { \"id\": 2, \"role_id\": 1 } ] }, { \"module_id\": 2, \"full_access\":true, \"role_id\":2, \"submodule\": [ ] } ]', 1, '2022-03-03 10:53:27', '2022-03-03 10:53:27', NULL, NULL),
(2, 4, '[ { \"module_id\": 1, \"full_access\":false, \"role_id\":1, \"submodule\": [ { \"id\": 1, \"role_id\": 1 }, { \"id\": 2, \"role_id\": 1 },{ \"id\": 3, \"role_id\": 1 } ] }, { \"module_id\": 2, \"full_access\":true, \"role_id\":2, \"submodule\": [ ] } ]', 1, '2022-03-03 10:53:27', '2022-03-03 10:53:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_validate_user`
--

CREATE TABLE `seo_validate_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_validate_user`
--

INSERT INTO `seo_validate_user` (`id`, `email`, `password`) VALUES
(1, 'user.varification@gmail.com', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `seo_verification`
--

CREATE TABLE `seo_verification` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `params` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_videos_gallery`
--

CREATE TABLE `seo_videos_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_videos_gallery`
--

INSERT INTO `seo_videos_gallery` (`id`, `title`, `url`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Recliner Bed', 'https://www.youtube.com/watch?v=ib3ey-nVUhE', 1, NULL, 1, '2022-04-08 07:52:57', NULL),
(4, 'Avatar', 'https://www.youtube.com/watch?v=a8Gx8wiNbs8', 1, NULL, 1, '2022-05-26 05:25:49', NULL),
(5, 'Morning', 'https://www.youtube.com/watch?v=a8Gx8wiNbs8', 1, NULL, 1, '2022-05-26 05:27:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_video_section`
--

CREATE TABLE `seo_video_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `videos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`videos`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_video_section`
--

INSERT INTO `seo_video_section` (`id`, `heading`, `videos`, `pages`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(9, 'First Video', '[\"1\",\"4\",\"5\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"},{\"menu\":\"3\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Service -\"},{\"menu\":\"4\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Products -\"},{\"menu\":\"5\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Updates\"},{\"menu\":\"6\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Contact\"}]', 1, NULL, 1, '2022-06-08 05:40:49', NULL),
(10, 'New', '[\"1\",\"4\"]', '[{\"menu\":\"1\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"Home\"},{\"menu\":\"2\",\"sub_menu\":\" 0\",\"sub_menu_title\":\"About Us\"}]', 1, NULL, 1, '2022-06-08 06:00:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', 101),
(2, 'Andhra Pradesh', 101),
(3, 'Arunachal Pradesh', 101),
(4, 'Assam', 101),
(5, 'Bihar', 101),
(6, 'Chandigarh', 101),
(7, 'Chhattisgarh', 101),
(8, 'Dadra and Nagar Haveli', 101),
(9, 'Daman and Diu', 101),
(10, 'Delhi', 101),
(11, 'Goa', 101),
(12, 'Gujarat', 101),
(13, 'Haryana', 101),
(14, 'Himachal Pradesh', 101),
(15, 'Jammu and Kashmir', 101),
(16, 'Jharkhand', 101),
(17, 'Karnataka', 101),
(18, 'Kenmore', 101),
(19, 'Kerala', 101),
(20, 'Lakshadweep', 101),
(21, 'Madhya Pradesh', 101),
(22, 'Maharashtra', 101),
(23, 'Manipur', 101),
(24, 'Meghalaya', 101),
(25, 'Mizoram', 101),
(26, 'Nagaland', 101),
(27, 'Narora', 101),
(28, 'Natwar', 101),
(29, 'Odisha', 101),
(30, 'Paschim Medinipur', 101),
(31, 'Pondicherry', 101),
(32, 'Punjab', 101),
(33, 'Rajasthan', 101),
(34, 'Sikkim', 101),
(35, 'Tamil Nadu', 101),
(36, 'Telangana', 101),
(37, 'Tripura', 101),
(38, 'Uttar Pradesh', 101),
(39, 'Uttarakhand', 101),
(40, 'Vaishali', 101),
(41, 'West Bengal', 101),
(42, 'Badakhshan', 1),
(43, 'Badgis', 1),
(44, 'Baglan', 1),
(45, 'Balkh', 1),
(46, 'Bamiyan', 1),
(47, 'Farah', 1),
(48, 'Faryab', 1),
(49, 'Gawr', 1),
(50, 'Gazni', 1),
(51, 'Herat', 1),
(52, 'Hilmand', 1),
(53, 'Jawzjan', 1),
(54, 'Kabul', 1),
(55, 'Kapisa', 1),
(56, 'Khawst', 1),
(57, 'Kunar', 1),
(58, 'Lagman', 1),
(59, 'Lawghar', 1),
(60, 'Nangarhar', 1),
(61, 'Nimruz', 1),
(62, 'Nuristan', 1),
(63, 'Paktika', 1),
(64, 'Paktiya', 1),
(65, 'Parwan', 1),
(66, 'Qandahar', 1),
(67, 'Qunduz', 1),
(68, 'Samangan', 1),
(69, 'Sar-e Pul', 1),
(70, 'Takhar', 1),
(71, 'Uruzgan', 1),
(72, 'Wardag', 1),
(73, 'Zabul', 1),
(74, 'Berat', 2),
(75, 'Bulqize', 2),
(76, 'Delvine', 2),
(77, 'Devoll', 2),
(78, 'Dibre', 2),
(79, 'Durres', 2),
(80, 'Elbasan', 2),
(81, 'Fier', 2),
(82, 'Gjirokaster', 2),
(83, 'Gramsh', 2),
(84, 'Has', 2),
(85, 'Kavaje', 2),
(86, 'Kolonje', 2),
(87, 'Korce', 2),
(88, 'Kruje', 2),
(89, 'Kucove', 2),
(90, 'Kukes', 2),
(91, 'Kurbin', 2),
(92, 'Lezhe', 2),
(93, 'Librazhd', 2),
(94, 'Lushnje', 2),
(95, 'Mallakaster', 2),
(96, 'Malsi e Madhe', 2),
(97, 'Mat', 2),
(98, 'Mirdite', 2),
(99, 'Peqin', 2),
(100, 'Permet', 2),
(101, 'Pogradec', 2),
(102, 'Puke', 2),
(103, 'Sarande', 2),
(104, 'Shkoder', 2),
(105, 'Skrapar', 2),
(106, 'Tepelene', 2),
(107, 'Tirane', 2),
(108, 'Tropoje', 2),
(109, 'Vlore', 2),
(110, '\'Ayn Daflah', 3),
(111, '\'Ayn Tamushanat', 3),
(112, 'Adrar', 3),
(113, 'Algiers', 3),
(114, 'Annabah', 3),
(115, 'Bashshar', 3),
(116, 'Batnah', 3),
(117, 'Bijayah', 3),
(118, 'Biskrah', 3),
(119, 'Blidah', 3),
(120, 'Buirah', 3),
(121, 'Bumardas', 3),
(122, 'Burj Bu Arririj', 3),
(123, 'Ghalizan', 3),
(124, 'Ghardayah', 3),
(125, 'Ilizi', 3),
(126, 'Jijili', 3),
(127, 'Jilfah', 3),
(128, 'Khanshalah', 3),
(129, 'Masilah', 3),
(130, 'Midyah', 3),
(131, 'Milah', 3),
(132, 'Muaskar', 3),
(133, 'Mustaghanam', 3),
(134, 'Naama', 3),
(135, 'Oran', 3),
(136, 'Ouargla', 3),
(137, 'Qalmah', 3),
(138, 'Qustantinah', 3),
(139, 'Sakikdah', 3),
(140, 'Satif', 3),
(141, 'Sayda\'', 3),
(142, 'Sidi ban-al-\'Abbas', 3),
(143, 'Suq Ahras', 3),
(144, 'Tamanghasat', 3),
(145, 'Tibazah', 3),
(146, 'Tibissah', 3),
(147, 'Tilimsan', 3),
(148, 'Tinduf', 3),
(149, 'Tisamsilt', 3),
(150, 'Tiyarat', 3),
(151, 'Tizi Wazu', 3),
(152, 'Umm-al-Bawaghi', 3),
(153, 'Wahran', 3),
(154, 'Warqla', 3),
(155, 'Wilaya d Alger', 3),
(156, 'Wilaya de Bejaia', 3),
(157, 'Wilaya de Constantine', 3),
(158, 'al-Aghwat', 3),
(159, 'al-Bayadh', 3),
(160, 'al-Jaza\'ir', 3),
(161, 'al-Wad', 3),
(162, 'ash-Shalif', 3),
(163, 'at-Tarif', 3),
(164, 'Eastern', 4),
(165, 'Manu\'a', 4),
(166, 'Swains Island', 4),
(167, 'Western', 4),
(168, 'Andorra la Vella', 5),
(169, 'Canillo', 5),
(170, 'Encamp', 5),
(171, 'La Massana', 5),
(172, 'Les Escaldes', 5),
(173, 'Ordino', 5),
(174, 'Sant Julia de Loria', 5),
(175, 'Bengo', 6),
(176, 'Benguela', 6),
(177, 'Bie', 6),
(178, 'Cabinda', 6),
(179, 'Cunene', 6),
(180, 'Huambo', 6),
(181, 'Huila', 6),
(182, 'Kuando-Kubango', 6),
(183, 'Kwanza Norte', 6),
(184, 'Kwanza Sul', 6),
(185, 'Luanda', 6),
(186, 'Lunda Norte', 6),
(187, 'Lunda Sul', 6),
(188, 'Malanje', 6),
(189, 'Moxico', 6),
(190, 'Namibe', 6),
(191, 'Uige', 6),
(192, 'Zaire', 6),
(193, 'Other Provinces', 7),
(194, 'Sector claimed by Argentina/Ch', 8),
(195, 'Sector claimed by Argentina/UK', 8),
(196, 'Sector claimed by Australia', 8),
(197, 'Sector claimed by France', 8),
(198, 'Sector claimed by New Zealand', 8),
(199, 'Sector claimed by Norway', 8),
(200, 'Unclaimed Sector', 8),
(201, 'Barbuda', 9),
(202, 'Saint George', 9),
(203, 'Saint John', 9),
(204, 'Saint Mary', 9),
(205, 'Saint Paul', 9),
(206, 'Saint Peter', 9),
(207, 'Saint Philip', 9),
(208, 'Buenos Aires', 10),
(209, 'Catamarca', 10),
(210, 'Chaco', 10),
(211, 'Chubut', 10),
(212, 'Cordoba', 10),
(213, 'Corrientes', 10),
(214, 'Distrito Federal', 10),
(215, 'Entre Rios', 10),
(216, 'Formosa', 10),
(217, 'Jujuy', 10),
(218, 'La Pampa', 10),
(219, 'La Rioja', 10),
(220, 'Mendoza', 10),
(221, 'Misiones', 10),
(222, 'Neuquen', 10),
(223, 'Rio Negro', 10),
(224, 'Salta', 10),
(225, 'San Juan', 10),
(226, 'San Luis', 10),
(227, 'Santa Cruz', 10),
(228, 'Santa Fe', 10),
(229, 'Santiago del Estero', 10),
(230, 'Tierra del Fuego', 10),
(231, 'Tucuman', 10),
(232, 'Aragatsotn', 11),
(233, 'Ararat', 11),
(234, 'Armavir', 11),
(235, 'Gegharkunik', 11),
(236, 'Kotaik', 11),
(237, 'Lori', 11),
(238, 'Shirak', 11),
(239, 'Stepanakert', 11),
(240, 'Syunik', 11),
(241, 'Tavush', 11),
(242, 'Vayots Dzor', 11),
(243, 'Yerevan', 11),
(244, 'Aruba', 12),
(245, 'Auckland', 13),
(246, 'Australian Capital Territory', 13),
(247, 'Balgowlah', 13),
(248, 'Balmain', 13),
(249, 'Bankstown', 13),
(250, 'Baulkham Hills', 13),
(251, 'Bonnet Bay', 13),
(252, 'Camberwell', 13),
(253, 'Carole Park', 13),
(254, 'Castle Hill', 13),
(255, 'Caulfield', 13),
(256, 'Chatswood', 13),
(257, 'Cheltenham', 13),
(258, 'Cherrybrook', 13),
(259, 'Clayton', 13),
(260, 'Collingwood', 13),
(261, 'Frenchs Forest', 13),
(262, 'Hawthorn', 13),
(263, 'Jannnali', 13),
(264, 'Knoxfield', 13),
(265, 'Melbourne', 13),
(266, 'New South Wales', 13),
(267, 'Northern Territory', 13),
(268, 'Perth', 13),
(269, 'Queensland', 13),
(270, 'South Australia', 13),
(271, 'Tasmania', 13),
(272, 'Templestowe', 13),
(273, 'Victoria', 13),
(274, 'Werribee south', 13),
(275, 'Western Australia', 13),
(276, 'Wheeler', 13),
(277, 'Bundesland Salzburg', 14),
(278, 'Bundesland Steiermark', 14),
(279, 'Bundesland Tirol', 14),
(280, 'Burgenland', 14),
(281, 'Carinthia', 14),
(282, 'Karnten', 14),
(283, 'Liezen', 14),
(284, 'Lower Austria', 14),
(285, 'Niederosterreich', 14),
(286, 'Oberosterreich', 14),
(287, 'Salzburg', 14),
(288, 'Schleswig-Holstein', 14),
(289, 'Steiermark', 14),
(290, 'Styria', 14),
(291, 'Tirol', 14),
(292, 'Upper Austria', 14),
(293, 'Vorarlberg', 14),
(294, 'Wien', 14),
(295, 'Abseron', 15),
(296, 'Baki Sahari', 15),
(297, 'Ganca', 15),
(298, 'Ganja', 15),
(299, 'Kalbacar', 15),
(300, 'Lankaran', 15),
(301, 'Mil-Qarabax', 15),
(302, 'Mugan-Salyan', 15),
(303, 'Nagorni-Qarabax', 15),
(304, 'Naxcivan', 15),
(305, 'Priaraks', 15),
(306, 'Qazax', 15),
(307, 'Saki', 15),
(308, 'Sirvan', 15),
(309, 'Xacmaz', 15),
(310, 'Abaco', 16),
(311, 'Acklins Island', 16),
(312, 'Andros', 16),
(313, 'Berry Islands', 16),
(314, 'Biminis', 16),
(315, 'Cat Island', 16),
(316, 'Crooked Island', 16),
(317, 'Eleuthera', 16),
(318, 'Exuma and Cays', 16),
(319, 'Grand Bahama', 16),
(320, 'Inagua Islands', 16),
(321, 'Long Island', 16),
(322, 'Mayaguana', 16),
(323, 'New Providence', 16),
(324, 'Ragged Island', 16),
(325, 'Rum Cay', 16),
(326, 'San Salvador', 16),
(327, '\'Isa', 17),
(328, 'Badiyah', 17),
(329, 'Hidd', 17),
(330, 'Jidd Hafs', 17),
(331, 'Mahama', 17),
(332, 'Manama', 17),
(333, 'Sitrah', 17),
(334, 'al-Manamah', 17),
(335, 'al-Muharraq', 17),
(336, 'ar-Rifa\'a', 17),
(337, 'Bagar Hat', 18),
(338, 'Bandarban', 18),
(339, 'Barguna', 18),
(340, 'Barisal', 18),
(341, 'Bhola', 18),
(342, 'Bogora', 18),
(343, 'Brahman Bariya', 18),
(344, 'Chandpur', 18),
(345, 'Chattagam', 18),
(346, 'Chittagong Division', 18),
(347, 'Chuadanga', 18),
(348, 'Dhaka', 18),
(349, 'Dinajpur', 18),
(350, 'Faridpur', 18),
(351, 'Feni', 18),
(352, 'Gaybanda', 18),
(353, 'Gazipur', 18),
(354, 'Gopalganj', 18),
(355, 'Habiganj', 18),
(356, 'Jaipur Hat', 18),
(357, 'Jamalpur', 18),
(358, 'Jessor', 18),
(359, 'Jhalakati', 18),
(360, 'Jhanaydah', 18),
(361, 'Khagrachhari', 18),
(362, 'Khulna', 18),
(363, 'Kishorganj', 18),
(364, 'Koks Bazar', 18),
(365, 'Komilla', 18),
(366, 'Kurigram', 18),
(367, 'Kushtiya', 18),
(368, 'Lakshmipur', 18),
(369, 'Lalmanir Hat', 18),
(370, 'Madaripur', 18),
(371, 'Magura', 18),
(372, 'Maimansingh', 18),
(373, 'Manikganj', 18),
(374, 'Maulvi Bazar', 18),
(375, 'Meherpur', 18),
(376, 'Munshiganj', 18),
(377, 'Naral', 18),
(378, 'Narayanganj', 18),
(379, 'Narsingdi', 18),
(380, 'Nator', 18),
(381, 'Naugaon', 18),
(382, 'Nawabganj', 18),
(383, 'Netrakona', 18),
(384, 'Nilphamari', 18),
(385, 'Noakhali', 18),
(386, 'Pabna', 18),
(387, 'Panchagarh', 18),
(388, 'Patuakhali', 18),
(389, 'Pirojpur', 18),
(390, 'Rajbari', 18),
(391, 'Rajshahi', 18),
(392, 'Rangamati', 18),
(393, 'Rangpur', 18),
(394, 'Satkhira', 18),
(395, 'Shariatpur', 18),
(396, 'Sherpur', 18),
(397, 'Silhat', 18),
(398, 'Sirajganj', 18),
(399, 'Sunamganj', 18),
(400, 'Tangayal', 18),
(401, 'Thakurgaon', 18),
(402, 'Christ Church', 19),
(403, 'Saint Andrew', 19),
(404, 'Saint George', 19),
(405, 'Saint James', 19),
(406, 'Saint John', 19),
(407, 'Saint Joseph', 19),
(408, 'Saint Lucy', 19),
(409, 'Saint Michael', 19),
(410, 'Saint Peter', 19),
(411, 'Saint Philip', 19),
(412, 'Saint Thomas', 19),
(413, 'Brest', 20),
(414, 'Homjel\'', 20),
(415, 'Hrodna', 20),
(416, 'Mahiljow', 20),
(417, 'Mahilyowskaya Voblasts', 20),
(418, 'Minsk', 20),
(419, 'Minskaja Voblasts\'', 20),
(420, 'Petrik', 20),
(421, 'Vicebsk', 20),
(422, 'Antwerpen', 21),
(423, 'Berchem', 21),
(424, 'Brabant', 21),
(425, 'Brabant Wallon', 21),
(426, 'Brussel', 21),
(427, 'East Flanders', 21),
(428, 'Hainaut', 21),
(429, 'Liege', 21),
(430, 'Limburg', 21),
(431, 'Luxembourg', 21),
(432, 'Namur', 21),
(433, 'Ontario', 21),
(434, 'Oost-Vlaanderen', 21),
(435, 'Provincie Brabant', 21),
(436, 'Vlaams-Brabant', 21),
(437, 'Wallonne', 21),
(438, 'West-Vlaanderen', 21),
(439, 'Belize', 22),
(440, 'Cayo', 22),
(441, 'Corozal', 22),
(442, 'Orange Walk', 22),
(443, 'Stann Creek', 22),
(444, 'Toledo', 22),
(445, 'Alibori', 23),
(446, 'Atacora', 23),
(447, 'Atlantique', 23),
(448, 'Borgou', 23),
(449, 'Collines', 23),
(450, 'Couffo', 23),
(451, 'Donga', 23),
(452, 'Littoral', 23),
(453, 'Mono', 23),
(454, 'Oueme', 23),
(455, 'Plateau', 23),
(456, 'Zou', 23),
(457, 'Hamilton', 24),
(458, 'Saint George', 24),
(459, 'Bumthang', 25),
(460, 'Chhukha', 25),
(461, 'Chirang', 25),
(462, 'Daga', 25),
(463, 'Geylegphug', 25),
(464, 'Ha', 25),
(465, 'Lhuntshi', 25),
(466, 'Mongar', 25),
(467, 'Pemagatsel', 25),
(468, 'Punakha', 25),
(469, 'Rinpung', 25),
(470, 'Samchi', 25),
(471, 'Samdrup Jongkhar', 25),
(472, 'Shemgang', 25),
(473, 'Tashigang', 25),
(474, 'Timphu', 25),
(475, 'Tongsa', 25),
(476, 'Wangdiphodrang', 25),
(477, 'Beni', 26),
(478, 'Chuquisaca', 26),
(479, 'Cochabamba', 26),
(480, 'La Paz', 26),
(481, 'Oruro', 26),
(482, 'Pando', 26),
(483, 'Potosi', 26),
(484, 'Santa Cruz', 26),
(485, 'Tarija', 26),
(486, 'Federacija Bosna i Hercegovina', 27),
(487, 'Republika Srpska', 27),
(488, 'Central Bobonong', 28),
(489, 'Central Boteti', 28),
(490, 'Central Mahalapye', 28),
(491, 'Central Serowe-Palapye', 28),
(492, 'Central Tutume', 28),
(493, 'Chobe', 28),
(494, 'Francistown', 28),
(495, 'Gaborone', 28),
(496, 'Ghanzi', 28),
(497, 'Jwaneng', 28),
(498, 'Kgalagadi North', 28),
(499, 'Kgalagadi South', 28),
(500, 'Kgatleng', 28),
(501, 'Kweneng', 28),
(502, 'Lobatse', 28),
(503, 'Ngamiland', 28),
(504, 'Ngwaketse', 28),
(505, 'North East', 28),
(506, 'Okavango', 28),
(507, 'Orapa', 28),
(508, 'Selibe Phikwe', 28),
(509, 'South East', 28),
(510, 'Sowa', 28),
(511, 'Bouvet Island', 29),
(512, 'Acre', 30),
(513, 'Alagoas', 30),
(514, 'Amapa', 30),
(515, 'Amazonas', 30),
(516, 'Bahia', 30),
(517, 'Ceara', 30),
(518, 'Distrito Federal', 30),
(519, 'Espirito Santo', 30),
(520, 'Estado de Sao Paulo', 30),
(521, 'Goias', 30),
(522, 'Maranhao', 30),
(523, 'Mato Grosso', 30),
(524, 'Mato Grosso do Sul', 30),
(525, 'Minas Gerais', 30),
(526, 'Para', 30),
(527, 'Paraiba', 30),
(528, 'Parana', 30),
(529, 'Pernambuco', 30),
(530, 'Piaui', 30),
(531, 'Rio Grande do Norte', 30),
(532, 'Rio Grande do Sul', 30),
(533, 'Rio de Janeiro', 30),
(534, 'Rondonia', 30),
(535, 'Roraima', 30),
(536, 'Santa Catarina', 30),
(537, 'Sao Paulo', 30),
(538, 'Sergipe', 30),
(539, 'Tocantins', 30),
(540, 'British Indian Ocean Territory', 31),
(541, 'Belait', 32),
(542, 'Brunei-Muara', 32),
(543, 'Temburong', 32),
(544, 'Tutong', 32),
(545, 'Blagoevgrad', 33),
(546, 'Burgas', 33),
(547, 'Dobrich', 33),
(548, 'Gabrovo', 33),
(549, 'Haskovo', 33),
(550, 'Jambol', 33),
(551, 'Kardzhali', 33),
(552, 'Kjustendil', 33),
(553, 'Lovech', 33),
(554, 'Montana', 33),
(555, 'Oblast Sofiya-Grad', 33),
(556, 'Pazardzhik', 33),
(557, 'Pernik', 33),
(558, 'Pleven', 33),
(559, 'Plovdiv', 33),
(560, 'Razgrad', 33),
(561, 'Ruse', 33),
(562, 'Shumen', 33),
(563, 'Silistra', 33),
(564, 'Sliven', 33),
(565, 'Smoljan', 33),
(566, 'Sofija grad', 33),
(567, 'Sofijska oblast', 33),
(568, 'Stara Zagora', 33),
(569, 'Targovishte', 33),
(570, 'Varna', 33),
(571, 'Veliko Tarnovo', 33),
(572, 'Vidin', 33),
(573, 'Vraca', 33),
(574, 'Yablaniza', 33),
(575, 'Bale', 34),
(576, 'Bam', 34),
(577, 'Bazega', 34),
(578, 'Bougouriba', 34),
(579, 'Boulgou', 34),
(580, 'Boulkiemde', 34),
(581, 'Comoe', 34),
(582, 'Ganzourgou', 34),
(583, 'Gnagna', 34),
(584, 'Gourma', 34),
(585, 'Houet', 34),
(586, 'Ioba', 34),
(587, 'Kadiogo', 34),
(588, 'Kenedougou', 34),
(589, 'Komandjari', 34),
(590, 'Kompienga', 34),
(591, 'Kossi', 34),
(592, 'Kouritenga', 34),
(593, 'Kourweogo', 34),
(594, 'Leraba', 34),
(595, 'Mouhoun', 34),
(596, 'Nahouri', 34),
(597, 'Namentenga', 34),
(598, 'Noumbiel', 34),
(599, 'Oubritenga', 34),
(600, 'Oudalan', 34),
(601, 'Passore', 34),
(602, 'Poni', 34),
(603, 'Sanguie', 34),
(604, 'Sanmatenga', 34),
(605, 'Seno', 34),
(606, 'Sissili', 34),
(607, 'Soum', 34),
(608, 'Sourou', 34),
(609, 'Tapoa', 34),
(610, 'Tuy', 34),
(611, 'Yatenga', 34),
(612, 'Zondoma', 34),
(613, 'Zoundweogo', 34),
(614, 'Bubanza', 35),
(615, 'Bujumbura', 35),
(616, 'Bururi', 35),
(617, 'Cankuzo', 35),
(618, 'Cibitoke', 35),
(619, 'Gitega', 35),
(620, 'Karuzi', 35),
(621, 'Kayanza', 35),
(622, 'Kirundo', 35),
(623, 'Makamba', 35),
(624, 'Muramvya', 35),
(625, 'Muyinga', 35),
(626, 'Ngozi', 35),
(627, 'Rutana', 35),
(628, 'Ruyigi', 35),
(629, 'Banteay Mean Chey', 36),
(630, 'Bat Dambang', 36),
(631, 'Kampong Cham', 36),
(632, 'Kampong Chhnang', 36),
(633, 'Kampong Spoeu', 36),
(634, 'Kampong Thum', 36),
(635, 'Kampot', 36),
(636, 'Kandal', 36),
(637, 'Kaoh Kong', 36),
(638, 'Kracheh', 36),
(639, 'Krong Kaeb', 36),
(640, 'Krong Pailin', 36),
(641, 'Krong Preah Sihanouk', 36),
(642, 'Mondol Kiri', 36),
(643, 'Otdar Mean Chey', 36),
(644, 'Phnum Penh', 36),
(645, 'Pousat', 36),
(646, 'Preah Vihear', 36),
(647, 'Prey Veaeng', 36),
(648, 'Rotanak Kiri', 36),
(649, 'Siem Reab', 36),
(650, 'Stueng Traeng', 36),
(651, 'Svay Rieng', 36),
(652, 'Takaev', 36),
(653, 'Adamaoua', 37),
(654, 'Centre', 37),
(655, 'Est', 37),
(656, 'Littoral', 37),
(657, 'Nord', 37),
(658, 'Nord Extreme', 37),
(659, 'Nordouest', 37),
(660, 'Ouest', 37),
(661, 'Sud', 37),
(662, 'Sudouest', 37),
(663, 'Alberta', 38),
(664, 'British Columbia', 38),
(665, 'Manitoba', 38),
(666, 'New Brunswick', 38),
(667, 'Newfoundland and Labrador', 38),
(668, 'Northwest Territories', 38),
(669, 'Nova Scotia', 38),
(670, 'Nunavut', 38),
(671, 'Ontario', 38),
(672, 'Prince Edward Island', 38),
(673, 'Quebec', 38),
(674, 'Saskatchewan', 38),
(675, 'Yukon', 38),
(676, 'Boavista', 39),
(677, 'Brava', 39),
(678, 'Fogo', 39),
(679, 'Maio', 39),
(680, 'Sal', 39),
(681, 'Santo Antao', 39),
(682, 'Sao Nicolau', 39),
(683, 'Sao Tiago', 39),
(684, 'Sao Vicente', 39),
(685, 'Grand Cayman', 40),
(686, 'Bamingui-Bangoran', 41),
(687, 'Bangui', 41),
(688, 'Basse-Kotto', 41),
(689, 'Haut-Mbomou', 41),
(690, 'Haute-Kotto', 41),
(691, 'Kemo', 41),
(692, 'Lobaye', 41),
(693, 'Mambere-Kadei', 41),
(694, 'Mbomou', 41),
(695, 'Nana-Gribizi', 41),
(696, 'Nana-Mambere', 41),
(697, 'Ombella Mpoko', 41),
(698, 'Ouaka', 41),
(699, 'Ouham', 41),
(700, 'Ouham-Pende', 41),
(701, 'Sangha-Mbaere', 41),
(702, 'Vakaga', 41),
(703, 'Batha', 42),
(704, 'Biltine', 42),
(705, 'Bourkou-Ennedi-Tibesti', 42),
(706, 'Chari-Baguirmi', 42),
(707, 'Guera', 42),
(708, 'Kanem', 42),
(709, 'Lac', 42),
(710, 'Logone Occidental', 42),
(711, 'Logone Oriental', 42),
(712, 'Mayo-Kebbi', 42),
(713, 'Moyen-Chari', 42),
(714, 'Ouaddai', 42),
(715, 'Salamat', 42),
(716, 'Tandjile', 42),
(717, 'Aisen', 43),
(718, 'Antofagasta', 43),
(719, 'Araucania', 43),
(720, 'Atacama', 43),
(721, 'Bio Bio', 43),
(722, 'Coquimbo', 43),
(723, 'Libertador General Bernardo O\'', 43),
(724, 'Los Lagos', 43),
(725, 'Magellanes', 43),
(726, 'Maule', 43),
(727, 'Metropolitana', 43),
(728, 'Metropolitana de Santiago', 43),
(729, 'Tarapaca', 43),
(730, 'Valparaiso', 43),
(731, 'Anhui', 44),
(734, 'Aomen', 44),
(735, 'Beijing', 44),
(736, 'Beijing Shi', 44),
(737, 'Chongqing', 44),
(738, 'Fujian', 44),
(740, 'Gansu', 44),
(741, 'Guangdong', 44),
(743, 'Guangxi', 44),
(744, 'Guizhou', 44),
(745, 'Hainan', 44),
(746, 'Hebei', 44),
(747, 'Heilongjiang', 44),
(748, 'Henan', 44),
(749, 'Hubei', 44),
(750, 'Hunan', 44),
(751, 'Jiangsu', 44),
(753, 'Jiangxi', 44),
(754, 'Jilin', 44),
(755, 'Liaoning', 44),
(757, 'Nei Monggol', 44),
(758, 'Ningxia Hui', 44),
(759, 'Qinghai', 44),
(760, 'Shaanxi', 44),
(761, 'Shandong', 44),
(763, 'Shanghai', 44),
(764, 'Shanxi', 44),
(765, 'Sichuan', 44),
(766, 'Tianjin', 44),
(767, 'Xianggang', 44),
(768, 'Xinjiang', 44),
(769, 'Xizang', 44),
(770, 'Yunnan', 44),
(771, 'Zhejiang', 44),
(773, 'Christmas Island', 45),
(774, 'Cocos (Keeling) Islands', 46),
(775, 'Amazonas', 47),
(776, 'Antioquia', 47),
(777, 'Arauca', 47),
(778, 'Atlantico', 47),
(779, 'Bogota', 47),
(780, 'Bolivar', 47),
(781, 'Boyaca', 47),
(782, 'Caldas', 47),
(783, 'Caqueta', 47),
(784, 'Casanare', 47),
(785, 'Cauca', 47),
(786, 'Cesar', 47),
(787, 'Choco', 47),
(788, 'Cordoba', 47),
(789, 'Cundinamarca', 47),
(790, 'Guainia', 47),
(791, 'Guaviare', 47),
(792, 'Huila', 47),
(793, 'La Guajira', 47),
(794, 'Magdalena', 47),
(795, 'Meta', 47),
(796, 'Narino', 47),
(797, 'Norte de Santander', 47),
(798, 'Putumayo', 47),
(799, 'Quindio', 47),
(800, 'Risaralda', 47),
(801, 'San Andres y Providencia', 47),
(802, 'Santander', 47),
(803, 'Sucre', 47),
(804, 'Tolima', 47),
(805, 'Valle del Cauca', 47),
(806, 'Vaupes', 47),
(807, 'Vichada', 47),
(808, 'Mwali', 48),
(809, 'Njazidja', 48),
(810, 'Nzwani', 48),
(811, 'Bouenza', 49),
(812, 'Brazzaville', 49),
(813, 'Cuvette', 49),
(814, 'Kouilou', 49),
(815, 'Lekoumou', 49),
(816, 'Likouala', 49),
(817, 'Niari', 49),
(818, 'Plateaux', 49),
(819, 'Pool', 49),
(820, 'Sangha', 49),
(821, 'Bandundu', 50),
(822, 'Bas-Congo', 50),
(823, 'Equateur', 50),
(824, 'Haut-Congo', 50),
(825, 'Kasai-Occidental', 50),
(826, 'Kasai-Oriental', 50),
(827, 'Katanga', 50),
(828, 'Kinshasa', 50),
(829, 'Maniema', 50),
(830, 'Nord-Kivu', 50),
(831, 'Sud-Kivu', 50),
(832, 'Aitutaki', 51),
(833, 'Atiu', 51),
(834, 'Mangaia', 51),
(835, 'Manihiki', 51),
(836, 'Mauke', 51),
(837, 'Mitiaro', 51),
(838, 'Nassau', 51),
(839, 'Pukapuka', 51),
(840, 'Rakahanga', 51),
(841, 'Rarotonga', 51),
(842, 'Tongareva', 51),
(843, 'Alajuela', 52),
(844, 'Cartago', 52),
(845, 'Guanacaste', 52),
(846, 'Heredia', 52),
(847, 'Limon', 52),
(848, 'Puntarenas', 52),
(849, 'San Jose', 52),
(850, 'Abidjan', 53),
(851, 'Agneby', 53),
(852, 'Bafing', 53),
(853, 'Denguele', 53),
(854, 'Dix-huit Montagnes', 53),
(855, 'Fromager', 53),
(856, 'Haut-Sassandra', 53),
(857, 'Lacs', 53),
(858, 'Lagunes', 53),
(859, 'Marahoue', 53),
(860, 'Moyen-Cavally', 53),
(861, 'Moyen-Comoe', 53),
(862, 'N\'zi-Comoe', 53),
(863, 'Sassandra', 53),
(864, 'Savanes', 53),
(865, 'Sud-Bandama', 53),
(866, 'Sud-Comoe', 53),
(867, 'Vallee du Bandama', 53),
(868, 'Worodougou', 53),
(869, 'Zanzan', 53),
(870, 'Bjelovar-Bilogora', 54),
(871, 'Dubrovnik-Neretva', 54),
(872, 'Grad Zagreb', 54),
(873, 'Istra', 54),
(874, 'Karlovac', 54),
(875, 'Koprivnica-Krizhevci', 54),
(876, 'Krapina-Zagorje', 54),
(877, 'Lika-Senj', 54),
(878, 'Medhimurje', 54),
(879, 'Medimurska Zupanija', 54),
(880, 'Osijek-Baranja', 54),
(881, 'Osjecko-Baranjska Zupanija', 54),
(882, 'Pozhega-Slavonija', 54),
(883, 'Primorje-Gorski Kotar', 54),
(884, 'Shibenik-Knin', 54),
(885, 'Sisak-Moslavina', 54),
(886, 'Slavonski Brod-Posavina', 54),
(887, 'Split-Dalmacija', 54),
(888, 'Varazhdin', 54),
(889, 'Virovitica-Podravina', 54),
(890, 'Vukovar-Srijem', 54),
(891, 'Zadar', 54),
(892, 'Zagreb', 54),
(893, 'Camaguey', 55),
(894, 'Ciego de Avila', 55),
(895, 'Cienfuegos', 55),
(896, 'Ciudad de la Habana', 55),
(897, 'Granma', 55),
(898, 'Guantanamo', 55),
(899, 'Habana', 55),
(900, 'Holguin', 55),
(901, 'Isla de la Juventud', 55),
(902, 'La Habana', 55),
(903, 'Las Tunas', 55),
(904, 'Matanzas', 55),
(905, 'Pinar del Rio', 55),
(906, 'Sancti Spiritus', 55),
(907, 'Santiago de Cuba', 55),
(908, 'Villa Clara', 55),
(909, 'Government controlled area', 56),
(910, 'Limassol', 56),
(911, 'Nicosia District', 56),
(912, 'Paphos', 56),
(913, 'Turkish controlled area', 56),
(914, 'Central Bohemian', 57),
(915, 'Frycovice', 57),
(916, 'Jihocesky Kraj', 57),
(917, 'Jihochesky', 57),
(918, 'Jihomoravsky', 57),
(919, 'Karlovarsky', 57),
(920, 'Klecany', 57),
(921, 'Kralovehradecky', 57),
(922, 'Liberecky', 57),
(923, 'Lipov', 57),
(924, 'Moravskoslezsky', 57),
(925, 'Olomoucky', 57),
(926, 'Olomoucky Kraj', 57),
(927, 'Pardubicky', 57),
(928, 'Plzensky', 57),
(929, 'Praha', 57),
(930, 'Rajhrad', 57),
(931, 'Smirice', 57),
(932, 'South Moravian', 57),
(933, 'Straz nad Nisou', 57),
(934, 'Stredochesky', 57),
(935, 'Unicov', 57),
(936, 'Ustecky', 57),
(937, 'Valletta', 57),
(938, 'Velesin', 57),
(939, 'Vysochina', 57),
(940, 'Zlinsky', 57),
(941, 'Arhus', 58),
(942, 'Bornholm', 58),
(943, 'Frederiksborg', 58),
(944, 'Fyn', 58),
(945, 'Hovedstaden', 58),
(946, 'Kobenhavn', 58),
(947, 'Kobenhavns Amt', 58),
(948, 'Kobenhavns Kommune', 58),
(949, 'Nordjylland', 58),
(950, 'Ribe', 58),
(951, 'Ringkobing', 58),
(952, 'Roervig', 58),
(953, 'Roskilde', 58),
(954, 'Roslev', 58),
(955, 'Sjaelland', 58),
(956, 'Soeborg', 58),
(957, 'Sonderjylland', 58),
(958, 'Storstrom', 58),
(959, 'Syddanmark', 58),
(960, 'Toelloese', 58),
(961, 'Vejle', 58),
(962, 'Vestsjalland', 58),
(963, 'Viborg', 58),
(964, '\'Ali Sabih', 59),
(965, 'Dikhil', 59),
(966, 'Jibuti', 59),
(967, 'Tajurah', 59),
(968, 'Ubuk', 59),
(969, 'Saint Andrew', 60),
(970, 'Saint David', 60),
(971, 'Saint George', 60),
(972, 'Saint John', 60),
(973, 'Saint Joseph', 60),
(974, 'Saint Luke', 60),
(975, 'Saint Mark', 60),
(976, 'Saint Patrick', 60),
(977, 'Saint Paul', 60),
(978, 'Saint Peter', 60),
(979, 'Azua', 61),
(980, 'Bahoruco', 61),
(981, 'Barahona', 61),
(982, 'Dajabon', 61),
(983, 'Distrito Nacional', 61),
(984, 'Duarte', 61),
(985, 'El Seybo', 61),
(986, 'Elias Pina', 61),
(987, 'Espaillat', 61),
(988, 'Hato Mayor', 61),
(989, 'Independencia', 61),
(990, 'La Altagracia', 61),
(991, 'La Romana', 61),
(992, 'La Vega', 61),
(993, 'Maria Trinidad Sanchez', 61),
(994, 'Monsenor Nouel', 61),
(995, 'Monte Cristi', 61),
(996, 'Monte Plata', 61),
(997, 'Pedernales', 61),
(998, 'Peravia', 61),
(999, 'Puerto Plata', 61),
(1000, 'Salcedo', 61),
(1001, 'Samana', 61),
(1002, 'San Cristobal', 61),
(1003, 'San Juan', 61),
(1004, 'San Pedro de Macoris', 61),
(1005, 'Sanchez Ramirez', 61),
(1006, 'Santiago', 61),
(1007, 'Santiago Rodriguez', 61),
(1008, 'Valverde', 61),
(1009, 'Aileu', 62),
(1010, 'Ainaro', 62),
(1011, 'Ambeno', 62),
(1012, 'Baucau', 62),
(1013, 'Bobonaro', 62),
(1014, 'Cova Lima', 62),
(1015, 'Dili', 62),
(1016, 'Ermera', 62),
(1017, 'Lautem', 62),
(1018, 'Liquica', 62),
(1019, 'Manatuto', 62),
(1020, 'Manufahi', 62),
(1021, 'Viqueque', 62),
(1022, 'Azuay', 63),
(1023, 'Bolivar', 63),
(1024, 'Canar', 63),
(1025, 'Carchi', 63),
(1026, 'Chimborazo', 63),
(1027, 'Cotopaxi', 63),
(1028, 'El Oro', 63),
(1029, 'Esmeraldas', 63),
(1030, 'Galapagos', 63),
(1031, 'Guayas', 63),
(1032, 'Imbabura', 63),
(1033, 'Loja', 63),
(1034, 'Los Rios', 63),
(1035, 'Manabi', 63),
(1036, 'Morona Santiago', 63),
(1037, 'Napo', 63),
(1038, 'Orellana', 63),
(1039, 'Pastaza', 63),
(1040, 'Pichincha', 63),
(1041, 'Sucumbios', 63),
(1042, 'Tungurahua', 63),
(1043, 'Zamora Chinchipe', 63),
(1044, 'Aswan', 64),
(1045, 'Asyut', 64),
(1046, 'Bani Suwayf', 64),
(1047, 'Bur Sa\'id', 64),
(1048, 'Cairo', 64),
(1049, 'Dumyat', 64),
(1050, 'Kafr-ash-Shaykh', 64),
(1051, 'Matruh', 64),
(1052, 'Muhafazat ad Daqahliyah', 64),
(1053, 'Muhafazat al Fayyum', 64),
(1054, 'Muhafazat al Gharbiyah', 64),
(1055, 'Muhafazat al Iskandariyah', 64),
(1056, 'Muhafazat al Qahirah', 64),
(1057, 'Qina', 64),
(1058, 'Sawhaj', 64),
(1059, 'Sina al-Janubiyah', 64),
(1060, 'Sina ash-Shamaliyah', 64),
(1061, 'ad-Daqahliyah', 64),
(1062, 'al-Bahr-al-Ahmar', 64),
(1063, 'al-Buhayrah', 64),
(1064, 'al-Fayyum', 64),
(1065, 'al-Gharbiyah', 64),
(1066, 'al-Iskandariyah', 64),
(1067, 'al-Ismailiyah', 64),
(1068, 'al-Jizah', 64),
(1069, 'al-Minufiyah', 64),
(1070, 'al-Minya', 64),
(1071, 'al-Qahira', 64),
(1072, 'al-Qalyubiyah', 64),
(1073, 'al-Uqsur', 64),
(1074, 'al-Wadi al-Jadid', 64),
(1075, 'as-Suways', 64),
(1076, 'ash-Sharqiyah', 64),
(1077, 'Ahuachapan', 65),
(1078, 'Cabanas', 65),
(1079, 'Chalatenango', 65),
(1080, 'Cuscatlan', 65),
(1081, 'La Libertad', 65),
(1082, 'La Paz', 65),
(1083, 'La Union', 65),
(1084, 'Morazan', 65),
(1085, 'San Miguel', 65),
(1086, 'San Salvador', 65),
(1087, 'San Vicente', 65),
(1088, 'Santa Ana', 65),
(1089, 'Sonsonate', 65),
(1090, 'Usulutan', 65),
(1091, 'Annobon', 66),
(1092, 'Bioko Norte', 66),
(1093, 'Bioko Sur', 66),
(1094, 'Centro Sur', 66),
(1095, 'Kie-Ntem', 66),
(1096, 'Litoral', 66),
(1097, 'Wele-Nzas', 66),
(1098, 'Anseba', 67),
(1099, 'Debub', 67),
(1100, 'Debub-Keih-Bahri', 67),
(1101, 'Gash-Barka', 67),
(1102, 'Maekel', 67),
(1103, 'Semien-Keih-Bahri', 67),
(1104, 'Harju', 68),
(1105, 'Hiiu', 68),
(1106, 'Ida-Viru', 68),
(1107, 'Jarva', 68),
(1108, 'Jogeva', 68),
(1109, 'Laane', 68),
(1110, 'Laane-Viru', 68),
(1111, 'Parnu', 68),
(1112, 'Polva', 68),
(1113, 'Rapla', 68),
(1114, 'Saare', 68),
(1115, 'Tartu', 68),
(1116, 'Valga', 68),
(1117, 'Viljandi', 68),
(1118, 'Voru', 68),
(1119, 'Addis Abeba', 69),
(1120, 'Afar', 69),
(1121, 'Amhara', 69),
(1122, 'Benishangul', 69),
(1123, 'Diredawa', 69),
(1124, 'Gambella', 69),
(1125, 'Harar', 69),
(1126, 'Jigjiga', 69),
(1127, 'Mekele', 69),
(1128, 'Oromia', 69),
(1129, 'Somali', 69),
(1130, 'Southern', 69),
(1131, 'Tigray', 69),
(1132, 'Christmas Island', 70),
(1133, 'Cocos Islands', 70),
(1134, 'Coral Sea Islands', 70),
(1135, 'Falkland Islands', 71),
(1136, 'South Georgia', 71),
(1137, 'Klaksvik', 72),
(1138, 'Nor ara Eysturoy', 72),
(1139, 'Nor oy', 72),
(1140, 'Sandoy', 72),
(1141, 'Streymoy', 72),
(1142, 'Su uroy', 72),
(1143, 'Sy ra Eysturoy', 72),
(1144, 'Torshavn', 72),
(1145, 'Vaga', 72),
(1146, 'Central', 73),
(1147, 'Eastern', 73),
(1148, 'Northern', 73),
(1149, 'South Pacific', 73),
(1150, 'Western', 73),
(1151, 'Ahvenanmaa', 74),
(1152, 'Etela-Karjala', 74),
(1153, 'Etela-Pohjanmaa', 74),
(1154, 'Etela-Savo', 74),
(1155, 'Etela-Suomen Laani', 74),
(1156, 'Ita-Suomen Laani', 74),
(1157, 'Ita-Uusimaa', 74),
(1158, 'Kainuu', 74),
(1159, 'Kanta-Hame', 74),
(1160, 'Keski-Pohjanmaa', 74),
(1161, 'Keski-Suomi', 74),
(1162, 'Kymenlaakso', 74),
(1163, 'Lansi-Suomen Laani', 74),
(1164, 'Lappi', 74),
(1165, 'Northern Savonia', 74),
(1166, 'Ostrobothnia', 74),
(1167, 'Oulun Laani', 74),
(1168, 'Paijat-Hame', 74),
(1169, 'Pirkanmaa', 74),
(1170, 'Pohjanmaa', 74),
(1171, 'Pohjois-Karjala', 74),
(1172, 'Pohjois-Pohjanmaa', 74),
(1173, 'Pohjois-Savo', 74),
(1174, 'Saarijarvi', 74),
(1175, 'Satakunta', 74),
(1176, 'Southern Savonia', 74),
(1177, 'Tavastia Proper', 74),
(1178, 'Uleaborgs Lan', 74),
(1179, 'Uusimaa', 74),
(1180, 'Varsinais-Suomi', 74),
(1181, 'Ain', 75),
(1182, 'Aisne', 75),
(1183, 'Albi Le Sequestre', 75),
(1184, 'Allier', 75),
(1185, 'Alpes-Cote dAzur', 75),
(1186, 'Alpes-Maritimes', 75),
(1187, 'Alpes-de-Haute-Provence', 75),
(1188, 'Alsace', 75),
(1189, 'Aquitaine', 75),
(1190, 'Ardeche', 75),
(1191, 'Ardennes', 75),
(1192, 'Ariege', 75),
(1193, 'Aube', 75),
(1194, 'Aude', 75),
(1195, 'Auvergne', 75),
(1196, 'Aveyron', 75),
(1197, 'Bas-Rhin', 75),
(1198, 'Basse-Normandie', 75),
(1199, 'Bouches-du-Rhone', 75),
(1200, 'Bourgogne', 75),
(1201, 'Bretagne', 75),
(1202, 'Brittany', 75),
(1203, 'Burgundy', 75),
(1204, 'Calvados', 75),
(1205, 'Cantal', 75),
(1206, 'Cedex', 75),
(1207, 'Centre', 75),
(1208, 'Charente', 75),
(1209, 'Charente-Maritime', 75),
(1210, 'Cher', 75),
(1211, 'Correze', 75),
(1212, 'Corse-du-Sud', 75),
(1213, 'Cote-d\'Or', 75),
(1214, 'Cotes-d\'Armor', 75),
(1215, 'Creuse', 75),
(1216, 'Crolles', 75),
(1217, 'Deux-Sevres', 75),
(1218, 'Dordogne', 75),
(1219, 'Doubs', 75),
(1220, 'Drome', 75),
(1221, 'Essonne', 75),
(1222, 'Eure', 75),
(1223, 'Eure-et-Loir', 75),
(1224, 'Feucherolles', 75),
(1225, 'Finistere', 75),
(1226, 'Franche-Comte', 75),
(1227, 'Gard', 75),
(1228, 'Gers', 75),
(1229, 'Gironde', 75),
(1230, 'Haut-Rhin', 75),
(1231, 'Haute-Corse', 75),
(1232, 'Haute-Garonne', 75),
(1233, 'Haute-Loire', 75),
(1234, 'Haute-Marne', 75),
(1235, 'Haute-Saone', 75),
(1236, 'Haute-Savoie', 75),
(1237, 'Haute-Vienne', 75),
(1238, 'Hautes-Alpes', 75),
(1239, 'Hautes-Pyrenees', 75),
(1240, 'Hauts-de-Seine', 75),
(1241, 'Herault', 75),
(1242, 'Ile-de-France', 75),
(1243, 'Ille-et-Vilaine', 75),
(1244, 'Indre', 75),
(1245, 'Indre-et-Loire', 75),
(1246, 'Isere', 75),
(1247, 'Jura', 75),
(1248, 'Klagenfurt', 75),
(1249, 'Landes', 75),
(1250, 'Languedoc-Roussillon', 75),
(1251, 'Larcay', 75),
(1252, 'Le Castellet', 75),
(1253, 'Le Creusot', 75),
(1254, 'Limousin', 75),
(1255, 'Loir-et-Cher', 75),
(1256, 'Loire', 75),
(1257, 'Loire-Atlantique', 75),
(1258, 'Loiret', 75),
(1259, 'Lorraine', 75),
(1260, 'Lot', 75),
(1261, 'Lot-et-Garonne', 75),
(1262, 'Lower Normandy', 75),
(1263, 'Lozere', 75),
(1264, 'Maine-et-Loire', 75),
(1265, 'Manche', 75),
(1266, 'Marne', 75),
(1267, 'Mayenne', 75),
(1268, 'Meurthe-et-Moselle', 75),
(1269, 'Meuse', 75),
(1270, 'Midi-Pyrenees', 75),
(1271, 'Morbihan', 75),
(1272, 'Moselle', 75),
(1273, 'Nievre', 75),
(1274, 'Nord', 75),
(1275, 'Nord-Pas-de-Calais', 75),
(1276, 'Oise', 75),
(1277, 'Orne', 75),
(1278, 'Paris', 75),
(1279, 'Pas-de-Calais', 75),
(1280, 'Pays de la Loire', 75),
(1281, 'Pays-de-la-Loire', 75),
(1282, 'Picardy', 75),
(1283, 'Puy-de-Dome', 75),
(1284, 'Pyrenees-Atlantiques', 75),
(1285, 'Pyrenees-Orientales', 75),
(1286, 'Quelmes', 75),
(1287, 'Rhone', 75),
(1288, 'Rhone-Alpes', 75),
(1289, 'Saint Ouen', 75),
(1290, 'Saint Viatre', 75),
(1291, 'Saone-et-Loire', 75),
(1292, 'Sarthe', 75),
(1293, 'Savoie', 75),
(1294, 'Seine-Maritime', 75),
(1295, 'Seine-Saint-Denis', 75),
(1296, 'Seine-et-Marne', 75),
(1297, 'Somme', 75),
(1298, 'Sophia Antipolis', 75),
(1299, 'Souvans', 75),
(1300, 'Tarn', 75),
(1301, 'Tarn-et-Garonne', 75),
(1302, 'Territoire de Belfort', 75),
(1303, 'Treignac', 75),
(1304, 'Upper Normandy', 75),
(1305, 'Val-d\'Oise', 75),
(1306, 'Val-de-Marne', 75),
(1307, 'Var', 75),
(1308, 'Vaucluse', 75),
(1309, 'Vellise', 75),
(1310, 'Vendee', 75),
(1311, 'Vienne', 75),
(1312, 'Vosges', 75),
(1313, 'Yonne', 75),
(1314, 'Yvelines', 75),
(1315, 'Cayenne', 76),
(1316, 'Saint-Laurent-du-Maroni', 76),
(1317, 'Iles du Vent', 77),
(1318, 'Iles sous le Vent', 77),
(1319, 'Marquesas', 77),
(1320, 'Tuamotu', 77),
(1321, 'Tubuai', 77),
(1322, 'Amsterdam', 78),
(1323, 'Crozet Islands', 78),
(1324, 'Kerguelen', 78),
(1325, 'Estuaire', 79),
(1326, 'Haut-Ogooue', 79),
(1327, 'Moyen-Ogooue', 79),
(1328, 'Ngounie', 79),
(1329, 'Nyanga', 79),
(1330, 'Ogooue-Ivindo', 79),
(1331, 'Ogooue-Lolo', 79),
(1332, 'Ogooue-Maritime', 79),
(1333, 'Woleu-Ntem', 79),
(1334, 'Banjul', 80),
(1335, 'Basse', 80),
(1336, 'Brikama', 80),
(1337, 'Janjanbureh', 80),
(1338, 'Kanifing', 80),
(1339, 'Kerewan', 80),
(1340, 'Kuntaur', 80),
(1341, 'Mansakonko', 80),
(1342, 'Abhasia', 81),
(1343, 'Ajaria', 81),
(1344, 'Guria', 81),
(1345, 'Imereti', 81),
(1346, 'Kaheti', 81),
(1347, 'Kvemo Kartli', 81),
(1348, 'Mcheta-Mtianeti', 81),
(1349, 'Racha', 81),
(1350, 'Samagrelo-Zemo Svaneti', 81),
(1351, 'Samche-Zhavaheti', 81),
(1352, 'Shida Kartli', 81),
(1353, 'Tbilisi', 81),
(1354, 'Auvergne', 82),
(1355, 'Baden-Wurttemberg', 82),
(1356, 'Bavaria', 82),
(1357, 'Bayern', 82),
(1358, 'Beilstein Wurtt', 82),
(1359, 'Berlin', 82),
(1360, 'Brandenburg', 82),
(1361, 'Bremen', 82),
(1362, 'Dreisbach', 82),
(1363, 'Freistaat Bayern', 82),
(1364, 'Hamburg', 82),
(1365, 'Hannover', 82),
(1366, 'Heroldstatt', 82),
(1367, 'Hessen', 82),
(1368, 'Kortenberg', 82),
(1369, 'Laasdorf', 82),
(1370, 'Land Baden-Wurttemberg', 82),
(1371, 'Land Bayern', 82),
(1372, 'Land Brandenburg', 82),
(1373, 'Land Hessen', 82),
(1374, 'Land Mecklenburg-Vorpommern', 82),
(1375, 'Land Nordrhein-Westfalen', 82),
(1376, 'Land Rheinland-Pfalz', 82),
(1377, 'Land Sachsen', 82),
(1378, 'Land Sachsen-Anhalt', 82),
(1379, 'Land Thuringen', 82),
(1380, 'Lower Saxony', 82),
(1381, 'Mecklenburg-Vorpommern', 82),
(1382, 'Mulfingen', 82),
(1383, 'Munich', 82),
(1384, 'Neubeuern', 82),
(1385, 'Niedersachsen', 82),
(1386, 'Noord-Holland', 82),
(1387, 'Nordrhein-Westfalen', 82),
(1388, 'North Rhine-Westphalia', 82),
(1389, 'Osterode', 82),
(1390, 'Rheinland-Pfalz', 82),
(1391, 'Rhineland-Palatinate', 82),
(1392, 'Saarland', 82),
(1393, 'Sachsen', 82),
(1394, 'Sachsen-Anhalt', 82),
(1395, 'Saxony', 82),
(1396, 'Schleswig-Holstein', 82),
(1397, 'Thuringia', 82),
(1398, 'Webling', 82),
(1399, 'Weinstrabe', 82),
(1400, 'schlobborn', 82),
(1401, 'Ashanti', 83),
(1402, 'Brong-Ahafo', 83),
(1403, 'Central', 83),
(1404, 'Eastern', 83),
(1405, 'Greater Accra', 83),
(1406, 'Northern', 83),
(1407, 'Upper East', 83),
(1408, 'Upper West', 83),
(1409, 'Volta', 83),
(1410, 'Western', 83),
(1411, 'Gibraltar', 84),
(1412, 'Acharnes', 85),
(1413, 'Ahaia', 85),
(1414, 'Aitolia kai Akarnania', 85),
(1415, 'Argolis', 85),
(1416, 'Arkadia', 85),
(1417, 'Arta', 85),
(1418, 'Attica', 85),
(1419, 'Attiki', 85),
(1420, 'Ayion Oros', 85),
(1421, 'Crete', 85),
(1422, 'Dodekanisos', 85),
(1423, 'Drama', 85),
(1424, 'Evia', 85),
(1425, 'Evritania', 85),
(1426, 'Evros', 85),
(1427, 'Evvoia', 85),
(1428, 'Florina', 85),
(1429, 'Fokis', 85),
(1430, 'Fthiotis', 85),
(1431, 'Grevena', 85),
(1432, 'Halandri', 85),
(1433, 'Halkidiki', 85),
(1434, 'Hania', 85),
(1435, 'Heraklion', 85),
(1436, 'Hios', 85),
(1437, 'Ilia', 85),
(1438, 'Imathia', 85),
(1439, 'Ioannina', 85),
(1440, 'Iraklion', 85),
(1441, 'Karditsa', 85),
(1442, 'Kastoria', 85),
(1443, 'Kavala', 85),
(1444, 'Kefallinia', 85),
(1445, 'Kerkira', 85),
(1446, 'Kiklades', 85),
(1447, 'Kilkis', 85),
(1448, 'Korinthia', 85),
(1449, 'Kozani', 85),
(1450, 'Lakonia', 85),
(1451, 'Larisa', 85),
(1452, 'Lasithi', 85),
(1453, 'Lesvos', 85),
(1454, 'Levkas', 85),
(1455, 'Magnisia', 85),
(1456, 'Messinia', 85),
(1457, 'Nomos Attikis', 85),
(1458, 'Nomos Zakynthou', 85),
(1459, 'Pella', 85),
(1460, 'Pieria', 85),
(1461, 'Piraios', 85),
(1462, 'Preveza', 85),
(1463, 'Rethimni', 85),
(1464, 'Rodopi', 85),
(1465, 'Samos', 85),
(1466, 'Serrai', 85),
(1467, 'Thesprotia', 85),
(1468, 'Thessaloniki', 85),
(1469, 'Trikala', 85),
(1470, 'Voiotia', 85),
(1471, 'West Greece', 85),
(1472, 'Xanthi', 85),
(1473, 'Zakinthos', 85),
(1474, 'Aasiaat', 86),
(1475, 'Ammassalik', 86),
(1476, 'Illoqqortoormiut', 86),
(1477, 'Ilulissat', 86),
(1478, 'Ivittuut', 86),
(1479, 'Kangaatsiaq', 86),
(1480, 'Maniitsoq', 86),
(1481, 'Nanortalik', 86),
(1482, 'Narsaq', 86),
(1483, 'Nuuk', 86),
(1484, 'Paamiut', 86),
(1485, 'Qaanaaq', 86),
(1486, 'Qaqortoq', 86),
(1487, 'Qasigiannguit', 86),
(1488, 'Qeqertarsuaq', 86),
(1489, 'Sisimiut', 86),
(1490, 'Udenfor kommunal inddeling', 86),
(1491, 'Upernavik', 86),
(1492, 'Uummannaq', 86),
(1493, 'Carriacou-Petite Martinique', 87),
(1494, 'Saint Andrew', 87),
(1495, 'Saint Davids', 87),
(1496, 'Saint George\'s', 87),
(1497, 'Saint John', 87),
(1498, 'Saint Mark', 87),
(1499, 'Saint Patrick', 87),
(1500, 'Basse-Terre', 88),
(1501, 'Grande-Terre', 88),
(1502, 'Iles des Saintes', 88),
(1503, 'La Desirade', 88),
(1504, 'Marie-Galante', 88),
(1505, 'Saint Barthelemy', 88),
(1506, 'Saint Martin', 88),
(1507, 'Agana Heights', 89),
(1508, 'Agat', 89),
(1509, 'Barrigada', 89),
(1510, 'Chalan-Pago-Ordot', 89),
(1511, 'Dededo', 89),
(1512, 'Hagatna', 89),
(1513, 'Inarajan', 89),
(1514, 'Mangilao', 89),
(1515, 'Merizo', 89),
(1516, 'Mongmong-Toto-Maite', 89),
(1517, 'Santa Rita', 89),
(1518, 'Sinajana', 89),
(1519, 'Talofofo', 89),
(1520, 'Tamuning', 89),
(1521, 'Yigo', 89),
(1522, 'Yona', 89),
(1523, 'Alta Verapaz', 90),
(1524, 'Baja Verapaz', 90),
(1525, 'Chimaltenango', 90),
(1526, 'Chiquimula', 90),
(1527, 'El Progreso', 90),
(1528, 'Escuintla', 90),
(1529, 'Guatemala', 90),
(1530, 'Huehuetenango', 90),
(1531, 'Izabal', 90),
(1532, 'Jalapa', 90),
(1533, 'Jutiapa', 90),
(1534, 'Peten', 90),
(1535, 'Quezaltenango', 90),
(1536, 'Quiche', 90),
(1537, 'Retalhuleu', 90),
(1538, 'Sacatepequez', 90),
(1539, 'San Marcos', 90),
(1540, 'Santa Rosa', 90),
(1541, 'Solola', 90),
(1542, 'Suchitepequez', 90),
(1543, 'Totonicapan', 90),
(1544, 'Zacapa', 90),
(1545, 'Alderney', 91),
(1546, 'Castel', 91),
(1547, 'Forest', 91),
(1548, 'Saint Andrew', 91),
(1549, 'Saint Martin', 91),
(1550, 'Saint Peter Port', 91),
(1551, 'Saint Pierre du Bois', 91),
(1552, 'Saint Sampson', 91),
(1553, 'Saint Saviour', 91),
(1554, 'Sark', 91),
(1555, 'Torteval', 91),
(1556, 'Vale', 91),
(1557, 'Beyla', 92),
(1558, 'Boffa', 92),
(1559, 'Boke', 92),
(1560, 'Conakry', 92),
(1561, 'Coyah', 92),
(1562, 'Dabola', 92),
(1563, 'Dalaba', 92),
(1564, 'Dinguiraye', 92),
(1565, 'Faranah', 92),
(1566, 'Forecariah', 92),
(1567, 'Fria', 92),
(1568, 'Gaoual', 92),
(1569, 'Gueckedou', 92),
(1570, 'Kankan', 92),
(1571, 'Kerouane', 92),
(1572, 'Kindia', 92),
(1573, 'Kissidougou', 92),
(1574, 'Koubia', 92),
(1575, 'Koundara', 92),
(1576, 'Kouroussa', 92),
(1577, 'Labe', 92),
(1578, 'Lola', 92),
(1579, 'Macenta', 92),
(1580, 'Mali', 92),
(1581, 'Mamou', 92),
(1582, 'Mandiana', 92),
(1583, 'Nzerekore', 92),
(1584, 'Pita', 92),
(1585, 'Siguiri', 92),
(1586, 'Telimele', 92),
(1587, 'Tougue', 92),
(1588, 'Yomou', 92),
(1589, 'Bafata', 93),
(1590, 'Bissau', 93),
(1591, 'Bolama', 93),
(1592, 'Cacheu', 93),
(1593, 'Gabu', 93),
(1594, 'Oio', 93),
(1595, 'Quinara', 93),
(1596, 'Tombali', 93),
(1597, 'Barima-Waini', 94),
(1598, 'Cuyuni-Mazaruni', 94),
(1599, 'Demerara-Mahaica', 94),
(1600, 'East Berbice-Corentyne', 94),
(1601, 'Essequibo Islands-West Demerar', 94),
(1602, 'Mahaica-Berbice', 94),
(1603, 'Pomeroon-Supenaam', 94),
(1604, 'Potaro-Siparuni', 94),
(1605, 'Upper Demerara-Berbice', 94),
(1606, 'Upper Takutu-Upper Essequibo', 94),
(1607, 'Artibonite', 95),
(1608, 'Centre', 95),
(1609, 'Grand\'Anse', 95),
(1610, 'Nord', 95),
(1611, 'Nord-Est', 95),
(1612, 'Nord-Ouest', 95),
(1613, 'Ouest', 95),
(1614, 'Sud', 95),
(1615, 'Sud-Est', 95),
(1616, 'Heard and McDonald Islands', 96),
(1617, 'Atlantida', 97),
(1618, 'Choluteca', 97),
(1619, 'Colon', 97),
(1620, 'Comayagua', 97),
(1621, 'Copan', 97),
(1622, 'Cortes', 97),
(1623, 'Distrito Central', 97),
(1624, 'El Paraiso', 97),
(1625, 'Francisco Morazan', 97),
(1626, 'Gracias a Dios', 97),
(1627, 'Intibuca', 97),
(1628, 'Islas de la Bahia', 97),
(1629, 'La Paz', 97),
(1630, 'Lempira', 97),
(1631, 'Ocotepeque', 97),
(1632, 'Olancho', 97),
(1633, 'Santa Barbara', 97),
(1634, 'Valle', 97),
(1635, 'Yoro', 97),
(1636, 'Hong Kong', 98),
(1637, 'Bacs-Kiskun', 99),
(1638, 'Baranya', 99),
(1639, 'Bekes', 99),
(1640, 'Borsod-Abauj-Zemplen', 99),
(1641, 'Budapest', 99),
(1642, 'Csongrad', 99),
(1643, 'Fejer', 99),
(1644, 'Gyor-Moson-Sopron', 99),
(1645, 'Hajdu-Bihar', 99),
(1646, 'Heves', 99),
(1647, 'Jasz-Nagykun-Szolnok', 99),
(1648, 'Komarom-Esztergom', 99),
(1649, 'Nograd', 99),
(1650, 'Pest', 99),
(1651, 'Somogy', 99),
(1652, 'Szabolcs-Szatmar-Bereg', 99),
(1653, 'Tolna', 99),
(1654, 'Vas', 99),
(1655, 'Veszprem', 99),
(1656, 'Zala', 99),
(1657, 'Austurland', 100),
(1658, 'Gullbringusysla', 100),
(1659, 'Hofu borgarsva i', 100),
(1660, 'Nor urland eystra', 100),
(1661, 'Nor urland vestra', 100),
(1662, 'Su urland', 100),
(1663, 'Su urnes', 100),
(1664, 'Vestfir ir', 100),
(1665, 'Vesturland', 100),
(1666, 'Aceh', 102),
(1667, 'Bali', 102),
(1668, 'Bangka-Belitung', 102),
(1669, 'Banten', 102),
(1670, 'Bengkulu', 102),
(1671, 'Gandaria', 102),
(1672, 'Gorontalo', 102),
(1673, 'Jakarta', 102),
(1674, 'Jambi', 102),
(1675, 'Jawa Barat', 102),
(1676, 'Jawa Tengah', 102),
(1677, 'Jawa Timur', 102),
(1678, 'Kalimantan Barat', 102),
(1679, 'Kalimantan Selatan', 102),
(1680, 'Kalimantan Tengah', 102),
(1681, 'Kalimantan Timur', 102),
(1682, 'Kendal', 102),
(1683, 'Lampung', 102),
(1684, 'Maluku', 102),
(1685, 'Maluku Utara', 102),
(1686, 'Nusa Tenggara Barat', 102),
(1687, 'Nusa Tenggara Timur', 102),
(1688, 'Papua', 102),
(1689, 'Riau', 102),
(1690, 'Riau Kepulauan', 102),
(1691, 'Solo', 102),
(1692, 'Sulawesi Selatan', 102),
(1693, 'Sulawesi Tengah', 102),
(1694, 'Sulawesi Tenggara', 102),
(1695, 'Sulawesi Utara', 102),
(1696, 'Sumatera Barat', 102),
(1697, 'Sumatera Selatan', 102),
(1698, 'Sumatera Utara', 102),
(1699, 'Yogyakarta', 102),
(1700, 'Ardabil', 103),
(1701, 'Azarbayjan-e Bakhtari', 103),
(1702, 'Azarbayjan-e Khavari', 103),
(1703, 'Bushehr', 103),
(1704, 'Chahar Mahal-e Bakhtiari', 103),
(1705, 'Esfahan', 103),
(1706, 'Fars', 103),
(1707, 'Gilan', 103),
(1708, 'Golestan', 103),
(1709, 'Hamadan', 103),
(1710, 'Hormozgan', 103),
(1711, 'Ilam', 103),
(1712, 'Kerman', 103),
(1713, 'Kermanshah', 103),
(1714, 'Khorasan', 103),
(1715, 'Khuzestan', 103),
(1716, 'Kohgiluyeh-e Boyerahmad', 103),
(1717, 'Kordestan', 103),
(1718, 'Lorestan', 103),
(1719, 'Markazi', 103),
(1720, 'Mazandaran', 103),
(1721, 'Ostan-e Esfahan', 103),
(1722, 'Qazvin', 103),
(1723, 'Qom', 103),
(1724, 'Semnan', 103),
(1725, 'Sistan-e Baluchestan', 103),
(1726, 'Tehran', 103),
(1727, 'Yazd', 103),
(1728, 'Zanjan', 103),
(1729, 'Babil', 104),
(1730, 'Baghdad', 104),
(1731, 'Dahuk', 104),
(1732, 'Dhi Qar', 104),
(1733, 'Diyala', 104),
(1734, 'Erbil', 104),
(1735, 'Irbil', 104),
(1736, 'Karbala', 104),
(1737, 'Kurdistan', 104),
(1738, 'Maysan', 104),
(1739, 'Ninawa', 104),
(1740, 'Salah-ad-Din', 104),
(1741, 'Wasit', 104),
(1742, 'al-Anbar', 104),
(1743, 'al-Basrah', 104),
(1744, 'al-Muthanna', 104),
(1745, 'al-Qadisiyah', 104),
(1746, 'an-Najaf', 104),
(1747, 'as-Sulaymaniyah', 104),
(1748, 'at-Ta\'mim', 104),
(1749, 'Armagh', 105),
(1750, 'Carlow', 105),
(1751, 'Cavan', 105),
(1752, 'Clare', 105),
(1753, 'Cork', 105),
(1754, 'Donegal', 105),
(1755, 'Dublin', 105),
(1756, 'Galway', 105),
(1757, 'Kerry', 105),
(1758, 'Kildare', 105),
(1759, 'Kilkenny', 105),
(1760, 'Laois', 105),
(1761, 'Leinster', 105),
(1762, 'Leitrim', 105),
(1763, 'Limerick', 105),
(1764, 'Loch Garman', 105),
(1765, 'Longford', 105),
(1766, 'Louth', 105),
(1767, 'Mayo', 105),
(1768, 'Meath', 105),
(1769, 'Monaghan', 105),
(1770, 'Offaly', 105),
(1771, 'Roscommon', 105),
(1772, 'Sligo', 105),
(1773, 'Tipperary North Riding', 105),
(1774, 'Tipperary South Riding', 105),
(1775, 'Ulster', 105),
(1776, 'Waterford', 105),
(1777, 'Westmeath', 105),
(1778, 'Wexford', 105),
(1779, 'Wicklow', 105),
(1780, 'Beit Hanania', 106),
(1781, 'Ben Gurion Airport', 106),
(1782, 'Bethlehem', 106),
(1783, 'Caesarea', 106),
(1784, 'Centre', 106),
(1785, 'Gaza', 106),
(1786, 'Hadaron', 106),
(1787, 'Haifa District', 106),
(1788, 'Hamerkaz', 106),
(1789, 'Hazafon', 106),
(1790, 'Hebron', 106),
(1791, 'Jaffa', 106),
(1792, 'Jerusalem', 106),
(1793, 'Khefa', 106),
(1794, 'Kiryat Yam', 106),
(1795, 'Lower Galilee', 106),
(1796, 'Qalqilya', 106),
(1797, 'Talme Elazar', 106),
(1798, 'Tel Aviv', 106),
(1799, 'Tsafon', 106),
(1800, 'Umm El Fahem', 106),
(1801, 'Yerushalayim', 106),
(1802, 'Abruzzi', 107),
(1803, 'Abruzzo', 107),
(1804, 'Agrigento', 107),
(1805, 'Alessandria', 107),
(1806, 'Ancona', 107),
(1807, 'Arezzo', 107),
(1808, 'Ascoli Piceno', 107),
(1809, 'Asti', 107),
(1810, 'Avellino', 107),
(1811, 'Bari', 107),
(1812, 'Basilicata', 107),
(1813, 'Belluno', 107),
(1814, 'Benevento', 107),
(1815, 'Bergamo', 107),
(1816, 'Biella', 107),
(1817, 'Bologna', 107),
(1818, 'Bolzano', 107),
(1819, 'Brescia', 107),
(1820, 'Brindisi', 107),
(1821, 'Calabria', 107),
(1822, 'Campania', 107),
(1823, 'Cartoceto', 107),
(1824, 'Caserta', 107),
(1825, 'Catania', 107),
(1826, 'Chieti', 107),
(1827, 'Como', 107),
(1828, 'Cosenza', 107),
(1829, 'Cremona', 107),
(1830, 'Cuneo', 107),
(1831, 'Emilia-Romagna', 107),
(1832, 'Ferrara', 107),
(1833, 'Firenze', 107),
(1834, 'Florence', 107),
(1835, 'Forli-Cesena ', 107),
(1836, 'Friuli-Venezia Giulia', 107),
(1837, 'Frosinone', 107),
(1838, 'Genoa', 107),
(1839, 'Gorizia', 107),
(1840, 'L\'Aquila', 107),
(1841, 'Lazio', 107),
(1842, 'Lecce', 107),
(1843, 'Lecco', 107),
(1845, 'Liguria', 107),
(1846, 'Lodi', 107),
(1847, 'Lombardia', 107),
(1848, 'Lombardy', 107),
(1849, 'Macerata', 107),
(1850, 'Mantova', 107),
(1851, 'Marche', 107),
(1852, 'Messina', 107),
(1853, 'Milan', 107),
(1854, 'Modena', 107),
(1855, 'Molise', 107),
(1856, 'Molteno', 107),
(1857, 'Montenegro', 107),
(1858, 'Monza and Brianza', 107),
(1859, 'Naples', 107),
(1860, 'Novara', 107),
(1861, 'Padova', 107),
(1862, 'Parma', 107),
(1863, 'Pavia', 107),
(1864, 'Perugia', 107),
(1865, 'Pesaro-Urbino', 107),
(1866, 'Piacenza', 107),
(1867, 'Piedmont', 107),
(1868, 'Piemonte', 107),
(1869, 'Pisa', 107),
(1870, 'Pordenone', 107),
(1871, 'Potenza', 107),
(1872, 'Puglia', 107),
(1873, 'Reggio Emilia', 107),
(1874, 'Rimini', 107),
(1875, 'Roma', 107),
(1876, 'Salerno', 107),
(1877, 'Sardegna', 107),
(1878, 'Sassari', 107),
(1879, 'Savona', 107),
(1880, 'Sicilia', 107),
(1881, 'Siena', 107),
(1882, 'Sondrio', 107),
(1883, 'South Tyrol', 107),
(1884, 'Taranto', 107),
(1885, 'Teramo', 107),
(1886, 'Torino', 107),
(1887, 'Toscana', 107),
(1888, 'Trapani', 107),
(1889, 'Trentino-Alto Adige', 107),
(1890, 'Trento', 107),
(1891, 'Treviso', 107),
(1892, 'Udine', 107),
(1893, 'Umbria', 107),
(1894, 'Valle d\'Aosta', 107),
(1895, 'Varese', 107),
(1896, 'Veneto', 107),
(1897, 'Venezia', 107),
(1898, 'Verbano-Cusio-Ossola', 107),
(1899, 'Vercelli', 107),
(1900, 'Verona', 107),
(1901, 'Vicenza', 107),
(1902, 'Viterbo', 107),
(1903, 'Buxoro Viloyati', 108),
(1904, 'Clarendon', 108),
(1905, 'Hanover', 108),
(1906, 'Kingston', 108),
(1907, 'Manchester', 108),
(1908, 'Portland', 108),
(1909, 'Saint Andrews', 108),
(1910, 'Saint Ann', 108),
(1911, 'Saint Catherine', 108),
(1912, 'Saint Elizabeth', 108),
(1913, 'Saint James', 108),
(1914, 'Saint Mary', 108),
(1915, 'Saint Thomas', 108),
(1916, 'Trelawney', 108),
(1917, 'Westmoreland', 108),
(1918, 'Aichi', 109),
(1919, 'Akita', 109),
(1920, 'Aomori', 109),
(1921, 'Chiba', 109),
(1922, 'Ehime', 109),
(1923, 'Fukui', 109),
(1924, 'Fukuoka', 109),
(1925, 'Fukushima', 109),
(1926, 'Gifu', 109),
(1927, 'Gumma', 109),
(1928, 'Hiroshima', 109),
(1929, 'Hokkaido', 109),
(1930, 'Hyogo', 109),
(1931, 'Ibaraki', 109),
(1932, 'Ishikawa', 109),
(1933, 'Iwate', 109),
(1934, 'Kagawa', 109),
(1935, 'Kagoshima', 109),
(1936, 'Kanagawa', 109),
(1937, 'Kanto', 109),
(1938, 'Kochi', 109),
(1939, 'Kumamoto', 109),
(1940, 'Kyoto', 109),
(1941, 'Mie', 109),
(1942, 'Miyagi', 109),
(1943, 'Miyazaki', 109),
(1944, 'Nagano', 109),
(1945, 'Nagasaki', 109),
(1946, 'Nara', 109),
(1947, 'Niigata', 109),
(1948, 'Oita', 109),
(1949, 'Okayama', 109),
(1950, 'Okinawa', 109),
(1951, 'Osaka', 109),
(1952, 'Saga', 109),
(1953, 'Saitama', 109),
(1954, 'Shiga', 109),
(1955, 'Shimane', 109),
(1956, 'Shizuoka', 109),
(1957, 'Tochigi', 109),
(1958, 'Tokushima', 109),
(1959, 'Tokyo', 109),
(1960, 'Tottori', 109),
(1961, 'Toyama', 109),
(1962, 'Wakayama', 109),
(1963, 'Yamagata', 109),
(1964, 'Yamaguchi', 109),
(1965, 'Yamanashi', 109),
(1966, 'Grouville', 110),
(1967, 'Saint Brelade', 110),
(1968, 'Saint Clement', 110),
(1969, 'Saint Helier', 110),
(1970, 'Saint John', 110),
(1971, 'Saint Lawrence', 110),
(1972, 'Saint Martin', 110),
(1973, 'Saint Mary', 110),
(1974, 'Saint Peter', 110),
(1975, 'Saint Saviour', 110),
(1976, 'Trinity', 110),
(1977, '\'Ajlun', 111),
(1978, 'Amman', 111),
(1979, 'Irbid', 111),
(1980, 'Jarash', 111),
(1981, 'Ma\'an', 111),
(1982, 'Madaba', 111),
(1983, 'al-\'Aqabah', 111),
(1984, 'al-Balqa\'', 111),
(1985, 'al-Karak', 111),
(1986, 'al-Mafraq', 111),
(1987, 'at-Tafilah', 111),
(1988, 'az-Zarqa\'', 111),
(1989, 'Akmecet', 112),
(1990, 'Akmola', 112),
(1991, 'Aktobe', 112),
(1992, 'Almati', 112),
(1993, 'Atirau', 112),
(1994, 'Batis Kazakstan', 112),
(1995, 'Burlinsky Region', 112),
(1996, 'Karagandi', 112),
(1997, 'Kostanay', 112),
(1998, 'Mankistau', 112),
(1999, 'Ontustik Kazakstan', 112),
(2000, 'Pavlodar', 112),
(2001, 'Sigis Kazakstan', 112),
(2002, 'Soltustik Kazakstan', 112),
(2003, 'Taraz', 112),
(2004, 'Central', 113),
(2005, 'Coast', 113),
(2006, 'Eastern', 113),
(2007, 'Nairobi', 113),
(2008, 'North Eastern', 113),
(2009, 'Nyanza', 113),
(2010, 'Rift Valley', 113),
(2011, 'Western', 113),
(2012, 'Abaiang', 114),
(2013, 'Abemana', 114),
(2014, 'Aranuka', 114),
(2015, 'Arorae', 114),
(2016, 'Banaba', 114),
(2017, 'Beru', 114),
(2018, 'Butaritari', 114),
(2019, 'Kiritimati', 114),
(2020, 'Kuria', 114),
(2021, 'Maiana', 114),
(2022, 'Makin', 114),
(2023, 'Marakei', 114),
(2024, 'Nikunau', 114),
(2025, 'Nonouti', 114),
(2026, 'Onotoa', 114),
(2027, 'Phoenix Islands', 114),
(2028, 'Tabiteuea North', 114),
(2029, 'Tabiteuea South', 114),
(2030, 'Tabuaeran', 114),
(2031, 'Tamana', 114),
(2032, 'Tarawa North', 114),
(2033, 'Tarawa South', 114),
(2034, 'Teraina', 114),
(2035, 'Chagangdo', 115),
(2036, 'Hamgyeongbukto', 115),
(2037, 'Hamgyeongnamdo', 115),
(2038, 'Hwanghaebukto', 115),
(2039, 'Hwanghaenamdo', 115),
(2040, 'Kaeseong', 115),
(2041, 'Kangweon', 115),
(2042, 'Nampo', 115),
(2043, 'Pyeonganbukto', 115),
(2044, 'Pyeongannamdo', 115),
(2045, 'Pyeongyang', 115),
(2046, 'Yanggang', 115),
(2047, 'Busan', 116),
(2048, 'Cheju', 116),
(2049, 'Chollabuk', 116),
(2050, 'Chollanam', 116),
(2051, 'Chungbuk', 116),
(2052, 'Chungcheongbuk', 116),
(2053, 'Chungcheongnam', 116),
(2054, 'Chungnam', 116),
(2055, 'Daegu', 116),
(2056, 'Gangwon-do', 116),
(2057, 'Goyang-si', 116),
(2058, 'Gyeonggi-do', 116),
(2059, 'Gyeongsang ', 116),
(2060, 'Gyeongsangnam-do', 116),
(2061, 'Incheon', 116),
(2062, 'Jeju-Si', 116),
(2063, 'Jeonbuk', 116),
(2064, 'Kangweon', 116),
(2065, 'Kwangju', 116),
(2066, 'Kyeonggi', 116),
(2067, 'Kyeongsangbuk', 116),
(2068, 'Kyeongsangnam', 116),
(2069, 'Kyonggi-do', 116),
(2070, 'Kyungbuk-Do', 116),
(2071, 'Kyunggi-Do', 116),
(2072, 'Kyunggi-do', 116),
(2073, 'Pusan', 116),
(2074, 'Seoul', 116),
(2075, 'Sudogwon', 116),
(2076, 'Taegu', 116),
(2077, 'Taejeon', 116),
(2078, 'Taejon-gwangyoksi', 116),
(2079, 'Ulsan', 116),
(2080, 'Wonju', 116),
(2081, 'gwangyoksi', 116),
(2082, 'Al Asimah', 117),
(2083, 'Hawalli', 117),
(2084, 'Mishref', 117),
(2085, 'Qadesiya', 117),
(2086, 'Safat', 117),
(2087, 'Salmiya', 117),
(2088, 'al-Ahmadi', 117),
(2089, 'al-Farwaniyah', 117),
(2090, 'al-Jahra', 117),
(2091, 'al-Kuwayt', 117),
(2092, 'Batken', 118),
(2093, 'Bishkek', 118),
(2094, 'Chui', 118),
(2095, 'Issyk-Kul', 118),
(2096, 'Jalal-Abad', 118),
(2097, 'Naryn', 118),
(2098, 'Osh', 118),
(2099, 'Talas', 118),
(2100, 'Attopu', 119),
(2101, 'Bokeo', 119),
(2102, 'Bolikhamsay', 119),
(2103, 'Champasak', 119),
(2104, 'Houaphanh', 119),
(2105, 'Khammouane', 119),
(2106, 'Luang Nam Tha', 119),
(2107, 'Luang Prabang', 119),
(2108, 'Oudomxay', 119),
(2109, 'Phongsaly', 119),
(2110, 'Saravan', 119),
(2111, 'Savannakhet', 119),
(2112, 'Sekong', 119),
(2113, 'Viangchan Prefecture', 119),
(2114, 'Viangchan Province', 119),
(2115, 'Xaignabury', 119),
(2116, 'Xiang Khuang', 119),
(2117, 'Aizkraukles', 120),
(2118, 'Aluksnes', 120),
(2119, 'Balvu', 120),
(2120, 'Bauskas', 120),
(2121, 'Cesu', 120),
(2122, 'Daugavpils', 120),
(2123, 'Daugavpils City', 120),
(2124, 'Dobeles', 120),
(2125, 'Gulbenes', 120),
(2126, 'Jekabspils', 120),
(2127, 'Jelgava', 120),
(2128, 'Jelgavas', 120),
(2129, 'Jurmala City', 120),
(2130, 'Kraslavas', 120),
(2131, 'Kuldigas', 120),
(2132, 'Liepaja', 120),
(2133, 'Liepajas', 120),
(2134, 'Limbazhu', 120),
(2135, 'Ludzas', 120),
(2136, 'Madonas', 120),
(2137, 'Ogres', 120),
(2138, 'Preilu', 120),
(2139, 'Rezekne', 120),
(2140, 'Rezeknes', 120),
(2141, 'Riga', 120),
(2142, 'Rigas', 120),
(2143, 'Saldus', 120),
(2144, 'Talsu', 120),
(2145, 'Tukuma', 120),
(2146, 'Valkas', 120),
(2147, 'Valmieras', 120),
(2148, 'Ventspils', 120),
(2149, 'Ventspils City', 120),
(2150, 'Beirut', 121),
(2151, 'Jabal Lubnan', 121),
(2152, 'Mohafazat Liban-Nord', 121),
(2153, 'Mohafazat Mont-Liban', 121),
(2154, 'Sidon', 121),
(2155, 'al-Biqa', 121),
(2156, 'al-Janub', 121),
(2157, 'an-Nabatiyah', 121),
(2158, 'ash-Shamal', 121),
(2159, 'Berea', 122),
(2160, 'Butha-Buthe', 122),
(2161, 'Leribe', 122),
(2162, 'Mafeteng', 122),
(2163, 'Maseru', 122),
(2164, 'Mohale\'s Hoek', 122),
(2165, 'Mokhotlong', 122),
(2166, 'Qacha\'s Nek', 122),
(2167, 'Quthing', 122),
(2168, 'Thaba-Tseka', 122),
(2169, 'Bomi', 123),
(2170, 'Bong', 123),
(2171, 'Grand Bassa', 123),
(2172, 'Grand Cape Mount', 123),
(2173, 'Grand Gedeh', 123),
(2174, 'Loffa', 123),
(2175, 'Margibi', 123),
(2176, 'Maryland and Grand Kru', 123),
(2177, 'Montserrado', 123),
(2178, 'Nimba', 123),
(2179, 'Rivercess', 123),
(2180, 'Sinoe', 123),
(2181, 'Ajdabiya', 124),
(2182, 'Fezzan', 124),
(2183, 'Banghazi', 124),
(2184, 'Darnah', 124),
(2185, 'Ghadamis', 124),
(2186, 'Gharyan', 124),
(2187, 'Misratah', 124),
(2188, 'Murzuq', 124),
(2189, 'Sabha', 124),
(2190, 'Sawfajjin', 124),
(2191, 'Surt', 124),
(2192, 'Tarabulus', 124);
INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(2193, 'Tarhunah', 124),
(2194, 'Tripolitania', 124),
(2195, 'Tubruq', 124),
(2196, 'Yafran', 124),
(2197, 'Zlitan', 124),
(2198, 'al-\'Aziziyah', 124),
(2199, 'al-Fatih', 124),
(2200, 'al-Jabal al Akhdar', 124),
(2201, 'al-Jufrah', 124),
(2202, 'al-Khums', 124),
(2203, 'al-Kufrah', 124),
(2204, 'an-Nuqat al-Khams', 124),
(2205, 'ash-Shati\'', 124),
(2206, 'az-Zawiyah', 124),
(2207, 'Balzers', 125),
(2208, 'Eschen', 125),
(2209, 'Gamprin', 125),
(2210, 'Mauren', 125),
(2211, 'Planken', 125),
(2212, 'Ruggell', 125),
(2213, 'Schaan', 125),
(2214, 'Schellenberg', 125),
(2215, 'Triesen', 125),
(2216, 'Triesenberg', 125),
(2217, 'Vaduz', 125),
(2218, 'Alytaus', 126),
(2219, 'Anyksciai', 126),
(2220, 'Kauno', 126),
(2221, 'Klaipedos', 126),
(2222, 'Marijampoles', 126),
(2223, 'Panevezhio', 126),
(2224, 'Panevezys', 126),
(2225, 'Shiauliu', 126),
(2226, 'Taurages', 126),
(2227, 'Telshiu', 126),
(2228, 'Telsiai', 126),
(2229, 'Utenos', 126),
(2230, 'Vilniaus', 126),
(2231, 'Capellen', 127),
(2232, 'Clervaux', 127),
(2233, 'Diekirch', 127),
(2234, 'Echternach', 127),
(2235, 'Esch-sur-Alzette', 127),
(2236, 'Grevenmacher', 127),
(2237, 'Luxembourg', 127),
(2238, 'Mersch', 127),
(2239, 'Redange', 127),
(2240, 'Remich', 127),
(2241, 'Vianden', 127),
(2242, 'Wiltz', 127),
(2243, 'Macau', 128),
(2244, 'Berovo', 129),
(2245, 'Bitola', 129),
(2246, 'Brod', 129),
(2247, 'Debar', 129),
(2248, 'Delchevo', 129),
(2249, 'Demir Hisar', 129),
(2250, 'Gevgelija', 129),
(2251, 'Gostivar', 129),
(2252, 'Kavadarci', 129),
(2253, 'Kichevo', 129),
(2254, 'Kochani', 129),
(2255, 'Kratovo', 129),
(2256, 'Kriva Palanka', 129),
(2257, 'Krushevo', 129),
(2258, 'Kumanovo', 129),
(2259, 'Negotino', 129),
(2260, 'Ohrid', 129),
(2261, 'Prilep', 129),
(2262, 'Probishtip', 129),
(2263, 'Radovish', 129),
(2264, 'Resen', 129),
(2265, 'Shtip', 129),
(2266, 'Skopje', 129),
(2267, 'Struga', 129),
(2268, 'Strumica', 129),
(2269, 'Sveti Nikole', 129),
(2270, 'Tetovo', 129),
(2271, 'Valandovo', 129),
(2272, 'Veles', 129),
(2273, 'Vinica', 129),
(2274, 'Antananarivo', 130),
(2275, 'Antsiranana', 130),
(2276, 'Fianarantsoa', 130),
(2277, 'Mahajanga', 130),
(2278, 'Toamasina', 130),
(2279, 'Toliary', 130),
(2280, 'Balaka', 131),
(2281, 'Blantyre City', 131),
(2282, 'Chikwawa', 131),
(2283, 'Chiradzulu', 131),
(2284, 'Chitipa', 131),
(2285, 'Dedza', 131),
(2286, 'Dowa', 131),
(2287, 'Karonga', 131),
(2288, 'Kasungu', 131),
(2289, 'Lilongwe City', 131),
(2290, 'Machinga', 131),
(2291, 'Mangochi', 131),
(2292, 'Mchinji', 131),
(2293, 'Mulanje', 131),
(2294, 'Mwanza', 131),
(2295, 'Mzimba', 131),
(2296, 'Mzuzu City', 131),
(2297, 'Nkhata Bay', 131),
(2298, 'Nkhotakota', 131),
(2299, 'Nsanje', 131),
(2300, 'Ntcheu', 131),
(2301, 'Ntchisi', 131),
(2302, 'Phalombe', 131),
(2303, 'Rumphi', 131),
(2304, 'Salima', 131),
(2305, 'Thyolo', 131),
(2306, 'Zomba Municipality', 131),
(2307, 'Johor', 132),
(2308, 'Kedah', 132),
(2309, 'Kelantan', 132),
(2310, 'Kuala Lumpur', 132),
(2311, 'Labuan', 132),
(2312, 'Melaka', 132),
(2313, 'Negeri Johor', 132),
(2314, 'Negeri Sembilan', 132),
(2315, 'Pahang', 132),
(2316, 'Penang', 132),
(2317, 'Perak', 132),
(2318, 'Perlis', 132),
(2319, 'Pulau Pinang', 132),
(2320, 'Sabah', 132),
(2321, 'Sarawak', 132),
(2322, 'Selangor', 132),
(2323, 'Sembilan', 132),
(2324, 'Terengganu', 132),
(2325, 'Alif Alif', 133),
(2326, 'Alif Dhaal', 133),
(2327, 'Baa', 133),
(2328, 'Dhaal', 133),
(2329, 'Faaf', 133),
(2330, 'Gaaf Alif', 133),
(2331, 'Gaaf Dhaal', 133),
(2332, 'Ghaviyani', 133),
(2333, 'Haa Alif', 133),
(2334, 'Haa Dhaal', 133),
(2335, 'Kaaf', 133),
(2336, 'Laam', 133),
(2337, 'Lhaviyani', 133),
(2338, 'Male', 133),
(2339, 'Miim', 133),
(2340, 'Nuun', 133),
(2341, 'Raa', 133),
(2342, 'Shaviyani', 133),
(2343, 'Siin', 133),
(2344, 'Thaa', 133),
(2345, 'Vaav', 133),
(2346, 'Bamako', 134),
(2347, 'Gao', 134),
(2348, 'Kayes', 134),
(2349, 'Kidal', 134),
(2350, 'Koulikoro', 134),
(2351, 'Mopti', 134),
(2352, 'Segou', 134),
(2353, 'Sikasso', 134),
(2354, 'Tombouctou', 134),
(2355, 'Gozo and Comino', 135),
(2356, 'Inner Harbour', 135),
(2357, 'Northern', 135),
(2358, 'Outer Harbour', 135),
(2359, 'South Eastern', 135),
(2360, 'Valletta', 135),
(2361, 'Western', 135),
(2362, 'Castletown', 136),
(2363, 'Douglas', 136),
(2364, 'Laxey', 136),
(2365, 'Onchan', 136),
(2366, 'Peel', 136),
(2367, 'Port Erin', 136),
(2368, 'Port Saint Mary', 136),
(2369, 'Ramsey', 136),
(2370, 'Ailinlaplap', 137),
(2371, 'Ailuk', 137),
(2372, 'Arno', 137),
(2373, 'Aur', 137),
(2374, 'Bikini', 137),
(2375, 'Ebon', 137),
(2376, 'Enewetak', 137),
(2377, 'Jabat', 137),
(2378, 'Jaluit', 137),
(2379, 'Kili', 137),
(2380, 'Kwajalein', 137),
(2381, 'Lae', 137),
(2382, 'Lib', 137),
(2383, 'Likiep', 137),
(2384, 'Majuro', 137),
(2385, 'Maloelap', 137),
(2386, 'Mejit', 137),
(2387, 'Mili', 137),
(2388, 'Namorik', 137),
(2389, 'Namu', 137),
(2390, 'Rongelap', 137),
(2391, 'Ujae', 137),
(2392, 'Utrik', 137),
(2393, 'Wotho', 137),
(2394, 'Wotje', 137),
(2395, 'Fort-de-France', 138),
(2396, 'La Trinite', 138),
(2397, 'Le Marin', 138),
(2398, 'Saint-Pierre', 138),
(2399, 'Adrar', 139),
(2400, 'Assaba', 139),
(2401, 'Brakna', 139),
(2402, 'Dhakhlat Nawadibu', 139),
(2403, 'Hudh-al-Gharbi', 139),
(2404, 'Hudh-ash-Sharqi', 139),
(2405, 'Inshiri', 139),
(2406, 'Nawakshut', 139),
(2407, 'Qidimagha', 139),
(2408, 'Qurqul', 139),
(2409, 'Taqant', 139),
(2410, 'Tiris Zammur', 139),
(2411, 'Trarza', 139),
(2412, 'Black River', 140),
(2413, 'Eau Coulee', 140),
(2414, 'Flacq', 140),
(2415, 'Floreal', 140),
(2416, 'Grand Port', 140),
(2417, 'Moka', 140),
(2418, 'Pamplempousses', 140),
(2419, 'Plaines Wilhelm', 140),
(2420, 'Port Louis', 140),
(2421, 'Riviere du Rempart', 140),
(2422, 'Rodrigues', 140),
(2423, 'Rose Hill', 140),
(2424, 'Savanne', 140),
(2425, 'Mayotte', 141),
(2426, 'Pamanzi', 141),
(2427, 'Aguascalientes', 142),
(2428, 'Baja California', 142),
(2429, 'Baja California Sur', 142),
(2430, 'Campeche', 142),
(2431, 'Chiapas', 142),
(2432, 'Chihuahua', 142),
(2433, 'Coahuila', 142),
(2434, 'Colima', 142),
(2435, 'Distrito Federal', 142),
(2436, 'Durango', 142),
(2437, 'Estado de Mexico', 142),
(2438, 'Guanajuato', 142),
(2439, 'Guerrero', 142),
(2440, 'Hidalgo', 142),
(2441, 'Jalisco', 142),
(2442, 'Mexico', 142),
(2443, 'Michoacan', 142),
(2444, 'Morelos', 142),
(2445, 'Nayarit', 142),
(2446, 'Nuevo Leon', 142),
(2447, 'Oaxaca', 142),
(2448, 'Puebla', 142),
(2449, 'Queretaro', 142),
(2450, 'Quintana Roo', 142),
(2451, 'San Luis Potosi', 142),
(2452, 'Sinaloa', 142),
(2453, 'Sonora', 142),
(2454, 'Tabasco', 142),
(2455, 'Tamaulipas', 142),
(2456, 'Tlaxcala', 142),
(2457, 'Veracruz', 142),
(2458, 'Yucatan', 142),
(2459, 'Zacatecas', 142),
(2460, 'Chuuk', 143),
(2461, 'Kusaie', 143),
(2462, 'Pohnpei', 143),
(2463, 'Yap', 143),
(2464, 'Balti', 144),
(2465, 'Cahul', 144),
(2466, 'Chisinau', 144),
(2467, 'Chisinau Oras', 144),
(2468, 'Edinet', 144),
(2469, 'Gagauzia', 144),
(2470, 'Lapusna', 144),
(2471, 'Orhei', 144),
(2472, 'Soroca', 144),
(2473, 'Taraclia', 144),
(2474, 'Tighina', 144),
(2475, 'Transnistria', 144),
(2476, 'Ungheni', 144),
(2477, 'Fontvieille', 145),
(2478, 'La Condamine', 145),
(2479, 'Monaco-Ville', 145),
(2480, 'Monte Carlo', 145),
(2481, 'Arhangaj', 146),
(2482, 'Bajan-Olgij', 146),
(2483, 'Bajanhongor', 146),
(2484, 'Bulgan', 146),
(2485, 'Darhan-Uul', 146),
(2486, 'Dornod', 146),
(2487, 'Dornogovi', 146),
(2488, 'Dundgovi', 146),
(2489, 'Govi-Altaj', 146),
(2490, 'Govisumber', 146),
(2491, 'Hentij', 146),
(2492, 'Hovd', 146),
(2493, 'Hovsgol', 146),
(2494, 'Omnogovi', 146),
(2495, 'Orhon', 146),
(2496, 'Ovorhangaj', 146),
(2497, 'Selenge', 146),
(2498, 'Suhbaatar', 146),
(2499, 'Tov', 146),
(2500, 'Ulaanbaatar', 146),
(2501, 'Uvs', 146),
(2502, 'Zavhan', 146),
(2503, 'Montserrat', 147),
(2504, 'Agadir', 148),
(2505, 'Casablanca', 148),
(2506, 'Chaouia-Ouardigha', 148),
(2507, 'Doukkala-Abda', 148),
(2508, 'Fes-Boulemane', 148),
(2509, 'Gharb-Chrarda-Beni Hssen', 148),
(2510, 'Guelmim', 148),
(2511, 'Kenitra', 148),
(2512, 'Marrakech-Tensift-Al Haouz', 148),
(2513, 'Meknes-Tafilalet', 148),
(2514, 'Oriental', 148),
(2515, 'Oujda', 148),
(2516, 'Province de Tanger', 148),
(2517, 'Rabat-Sale-Zammour-Zaer', 148),
(2518, 'Sala Al Jadida', 148),
(2519, 'Settat', 148),
(2520, 'Souss Massa-Draa', 148),
(2521, 'Tadla-Azilal', 148),
(2522, 'Tangier-Tetouan', 148),
(2523, 'Taza-Al Hoceima-Taounate', 148),
(2524, 'Wilaya de Casablanca', 148),
(2525, 'Wilaya de Rabat-Sale', 148),
(2526, 'Cabo Delgado', 149),
(2527, 'Gaza', 149),
(2528, 'Inhambane', 149),
(2529, 'Manica', 149),
(2530, 'Maputo', 149),
(2531, 'Maputo Provincia', 149),
(2532, 'Nampula', 149),
(2533, 'Niassa', 149),
(2534, 'Sofala', 149),
(2535, 'Tete', 149),
(2536, 'Zambezia', 149),
(2537, 'Ayeyarwady', 150),
(2538, 'Bago', 150),
(2539, 'Chin', 150),
(2540, 'Kachin', 150),
(2541, 'Kayah', 150),
(2542, 'Kayin', 150),
(2543, 'Magway', 150),
(2544, 'Mandalay', 150),
(2545, 'Mon', 150),
(2546, 'Nay Pyi Taw', 150),
(2547, 'Rakhine', 150),
(2548, 'Sagaing', 150),
(2549, 'Shan', 150),
(2550, 'Tanintharyi', 150),
(2551, 'Yangon', 150),
(2552, 'Caprivi', 151),
(2553, 'Erongo', 151),
(2554, 'Hardap', 151),
(2555, 'Karas', 151),
(2556, 'Kavango', 151),
(2557, 'Khomas', 151),
(2558, 'Kunene', 151),
(2559, 'Ohangwena', 151),
(2560, 'Omaheke', 151),
(2561, 'Omusati', 151),
(2562, 'Oshana', 151),
(2563, 'Oshikoto', 151),
(2564, 'Otjozondjupa', 151),
(2565, 'Yaren', 152),
(2566, 'Bagmati', 153),
(2567, 'Bheri', 153),
(2568, 'Dhawalagiri', 153),
(2569, 'Gandaki', 153),
(2570, 'Janakpur', 153),
(2571, 'Karnali', 153),
(2572, 'Koshi', 153),
(2573, 'Lumbini', 153),
(2574, 'Mahakali', 153),
(2575, 'Mechi', 153),
(2576, 'Narayani', 153),
(2577, 'Rapti', 153),
(2578, 'Sagarmatha', 153),
(2579, 'Seti', 153),
(2580, 'Bonaire', 154),
(2581, 'Curacao', 154),
(2582, 'Saba', 154),
(2583, 'Sint Eustatius', 154),
(2584, 'Sint Maarten', 154),
(2585, 'Amsterdam', 155),
(2586, 'Benelux', 155),
(2587, 'Drenthe', 155),
(2588, 'Flevoland', 155),
(2589, 'Friesland', 155),
(2590, 'Gelderland', 155),
(2591, 'Groningen', 155),
(2592, 'Limburg', 155),
(2593, 'Noord-Brabant', 155),
(2594, 'Noord-Holland', 155),
(2595, 'Overijssel', 155),
(2596, 'South Holland', 155),
(2597, 'Utrecht', 155),
(2598, 'Zeeland', 155),
(2599, 'Zuid-Holland', 155),
(2600, 'Iles', 156),
(2601, 'Nord', 156),
(2602, 'Sud', 156),
(2603, 'Area Outside Region', 157),
(2604, 'Auckland', 157),
(2605, 'Bay of Plenty', 157),
(2606, 'Canterbury', 157),
(2607, 'Christchurch', 157),
(2608, 'Gisborne', 157),
(2609, 'Hawke\'s Bay', 157),
(2610, 'Manawatu-Wanganui', 157),
(2611, 'Marlborough', 157),
(2612, 'Nelson', 157),
(2613, 'Northland', 157),
(2614, 'Otago', 157),
(2615, 'Rodney', 157),
(2616, 'Southland', 157),
(2617, 'Taranaki', 157),
(2618, 'Tasman', 157),
(2619, 'Waikato', 157),
(2620, 'Wellington', 157),
(2621, 'West Coast', 157),
(2622, 'Atlantico Norte', 158),
(2623, 'Atlantico Sur', 158),
(2624, 'Boaco', 158),
(2625, 'Carazo', 158),
(2626, 'Chinandega', 158),
(2627, 'Chontales', 158),
(2628, 'Esteli', 158),
(2629, 'Granada', 158),
(2630, 'Jinotega', 158),
(2631, 'Leon', 158),
(2632, 'Madriz', 158),
(2633, 'Managua', 158),
(2634, 'Masaya', 158),
(2635, 'Matagalpa', 158),
(2636, 'Nueva Segovia', 158),
(2637, 'Rio San Juan', 158),
(2638, 'Rivas', 158),
(2639, 'Agadez', 159),
(2640, 'Diffa', 159),
(2641, 'Dosso', 159),
(2642, 'Maradi', 159),
(2643, 'Niamey', 159),
(2644, 'Tahoua', 159),
(2645, 'Tillabery', 159),
(2646, 'Zinder', 159),
(2647, 'Abia', 160),
(2648, 'Abuja Federal Capital Territor', 160),
(2649, 'Adamawa', 160),
(2650, 'Akwa Ibom', 160),
(2651, 'Anambra', 160),
(2652, 'Bauchi', 160),
(2653, 'Bayelsa', 160),
(2654, 'Benue', 160),
(2655, 'Borno', 160),
(2656, 'Cross River', 160),
(2657, 'Delta', 160),
(2658, 'Ebonyi', 160),
(2659, 'Edo', 160),
(2660, 'Ekiti', 160),
(2661, 'Enugu', 160),
(2662, 'Gombe', 160),
(2663, 'Imo', 160),
(2664, 'Jigawa', 160),
(2665, 'Kaduna', 160),
(2666, 'Kano', 160),
(2667, 'Katsina', 160),
(2668, 'Kebbi', 160),
(2669, 'Kogi', 160),
(2670, 'Kwara', 160),
(2671, 'Lagos', 160),
(2672, 'Nassarawa', 160),
(2673, 'Niger', 160),
(2674, 'Ogun', 160),
(2675, 'Ondo', 160),
(2676, 'Osun', 160),
(2677, 'Oyo', 160),
(2678, 'Plateau', 160),
(2679, 'Rivers', 160),
(2680, 'Sokoto', 160),
(2681, 'Taraba', 160),
(2682, 'Yobe', 160),
(2683, 'Zamfara', 160),
(2684, 'Niue', 161),
(2685, 'Norfolk Island', 162),
(2686, 'Northern Islands', 163),
(2687, 'Rota', 163),
(2688, 'Saipan', 163),
(2689, 'Tinian', 163),
(2690, 'Akershus', 164),
(2691, 'Aust Agder', 164),
(2692, 'Bergen', 164),
(2693, 'Buskerud', 164),
(2694, 'Finnmark', 164),
(2695, 'Hedmark', 164),
(2696, 'Hordaland', 164),
(2697, 'Moere og Romsdal', 164),
(2698, 'Nord Trondelag', 164),
(2699, 'Nordland', 164),
(2700, 'Oestfold', 164),
(2701, 'Oppland', 164),
(2702, 'Oslo', 164),
(2703, 'Rogaland', 164),
(2704, 'Soer Troendelag', 164),
(2705, 'Sogn og Fjordane', 164),
(2706, 'Stavern', 164),
(2707, 'Sykkylven', 164),
(2708, 'Telemark', 164),
(2709, 'Troms', 164),
(2710, 'Vest Agder', 164),
(2711, 'Vestfold', 164),
(2712, 'ÃƒÂ˜stfold', 164),
(2713, 'Al Buraimi', 165),
(2714, 'Dhufar', 165),
(2715, 'Masqat', 165),
(2716, 'Musandam', 165),
(2717, 'Rusayl', 165),
(2718, 'Wadi Kabir', 165),
(2719, 'ad-Dakhiliyah', 165),
(2720, 'adh-Dhahirah', 165),
(2721, 'al-Batinah', 165),
(2722, 'ash-Sharqiyah', 165),
(2723, 'Baluchistan', 166),
(2724, 'Federal Capital Area', 166),
(2725, 'Federally administered Tribal ', 166),
(2726, 'North-West Frontier', 166),
(2727, 'Northern Areas', 166),
(2728, 'Punjab', 166),
(2729, 'Sind', 166),
(2730, 'Aimeliik', 167),
(2731, 'Airai', 167),
(2732, 'Angaur', 167),
(2733, 'Hatobohei', 167),
(2734, 'Kayangel', 167),
(2735, 'Koror', 167),
(2736, 'Melekeok', 167),
(2737, 'Ngaraard', 167),
(2738, 'Ngardmau', 167),
(2739, 'Ngaremlengui', 167),
(2740, 'Ngatpang', 167),
(2741, 'Ngchesar', 167),
(2742, 'Ngerchelong', 167),
(2743, 'Ngiwal', 167),
(2744, 'Peleliu', 167),
(2745, 'Sonsorol', 167),
(2746, 'Ariha', 168),
(2747, 'Bayt Lahm', 168),
(2748, 'Bethlehem', 168),
(2749, 'Dayr-al-Balah', 168),
(2750, 'Ghazzah', 168),
(2751, 'Ghazzah ash-Shamaliyah', 168),
(2752, 'Janin', 168),
(2753, 'Khan Yunis', 168),
(2754, 'Nabulus', 168),
(2755, 'Qalqilyah', 168),
(2756, 'Rafah', 168),
(2757, 'Ram Allah wal-Birah', 168),
(2758, 'Salfit', 168),
(2759, 'Tubas', 168),
(2760, 'Tulkarm', 168),
(2761, 'al-Khalil', 168),
(2762, 'al-Quds', 168),
(2763, 'Bocas del Toro', 169),
(2764, 'Chiriqui', 169),
(2765, 'Cocle', 169),
(2766, 'Colon', 169),
(2767, 'Darien', 169),
(2768, 'Embera', 169),
(2769, 'Herrera', 169),
(2770, 'Kuna Yala', 169),
(2771, 'Los Santos', 169),
(2772, 'Ngobe Bugle', 169),
(2773, 'Panama', 169),
(2774, 'Veraguas', 169),
(2775, 'East New Britain', 170),
(2776, 'East Sepik', 170),
(2777, 'Eastern Highlands', 170),
(2778, 'Enga', 170),
(2779, 'Fly River', 170),
(2780, 'Gulf', 170),
(2781, 'Madang', 170),
(2782, 'Manus', 170),
(2783, 'Milne Bay', 170),
(2784, 'Morobe', 170),
(2785, 'National Capital District', 170),
(2786, 'New Ireland', 170),
(2787, 'North Solomons', 170),
(2788, 'Oro', 170),
(2789, 'Sandaun', 170),
(2790, 'Simbu', 170),
(2791, 'Southern Highlands', 170),
(2792, 'West New Britain', 170),
(2793, 'Western Highlands', 170),
(2794, 'Alto Paraguay', 171),
(2795, 'Alto Parana', 171),
(2796, 'Amambay', 171),
(2797, 'Asuncion', 171),
(2798, 'Boqueron', 171),
(2799, 'Caaguazu', 171),
(2800, 'Caazapa', 171),
(2801, 'Canendiyu', 171),
(2802, 'Central', 171),
(2803, 'Concepcion', 171),
(2804, 'Cordillera', 171),
(2805, 'Guaira', 171),
(2806, 'Itapua', 171),
(2807, 'Misiones', 171),
(2808, 'Neembucu', 171),
(2809, 'Paraguari', 171),
(2810, 'Presidente Hayes', 171),
(2811, 'San Pedro', 171),
(2812, 'Amazonas', 172),
(2813, 'Ancash', 172),
(2814, 'Apurimac', 172),
(2815, 'Arequipa', 172),
(2816, 'Ayacucho', 172),
(2817, 'Cajamarca', 172),
(2818, 'Cusco', 172),
(2819, 'Huancavelica', 172),
(2820, 'Huanuco', 172),
(2821, 'Ica', 172),
(2822, 'Junin', 172),
(2823, 'La Libertad', 172),
(2824, 'Lambayeque', 172),
(2825, 'Lima y Callao', 172),
(2826, 'Loreto', 172),
(2827, 'Madre de Dios', 172),
(2828, 'Moquegua', 172),
(2829, 'Pasco', 172),
(2830, 'Piura', 172),
(2831, 'Puno', 172),
(2832, 'San Martin', 172),
(2833, 'Tacna', 172),
(2834, 'Tumbes', 172),
(2835, 'Ucayali', 172),
(2836, 'Batangas', 173),
(2837, 'Bicol', 173),
(2838, 'Bulacan', 173),
(2839, 'Cagayan', 173),
(2840, 'Caraga', 173),
(2841, 'Central Luzon', 173),
(2842, 'Central Mindanao', 173),
(2843, 'Central Visayas', 173),
(2844, 'Cordillera', 173),
(2845, 'Davao', 173),
(2846, 'Eastern Visayas', 173),
(2847, 'Greater Metropolitan Area', 173),
(2848, 'Ilocos', 173),
(2849, 'Laguna', 173),
(2850, 'Luzon', 173),
(2851, 'Mactan', 173),
(2852, 'Metropolitan Manila Area', 173),
(2853, 'Muslim Mindanao', 173),
(2854, 'Northern Mindanao', 173),
(2855, 'Southern Mindanao', 173),
(2856, 'Southern Tagalog', 173),
(2857, 'Western Mindanao', 173),
(2858, 'Western Visayas', 173),
(2859, 'Pitcairn Island', 174),
(2860, 'Biale Blota', 175),
(2861, 'Dobroszyce', 175),
(2862, 'Dolnoslaskie', 175),
(2863, 'Dziekanow Lesny', 175),
(2864, 'Hopowo', 175),
(2865, 'Kartuzy', 175),
(2866, 'Koscian', 175),
(2867, 'Krakow', 175),
(2868, 'Kujawsko-Pomorskie', 175),
(2869, 'Lodzkie', 175),
(2870, 'Lubelskie', 175),
(2871, 'Lubuskie', 175),
(2872, 'Malomice', 175),
(2873, 'Malopolskie', 175),
(2874, 'Mazowieckie', 175),
(2875, 'Mirkow', 175),
(2876, 'Opolskie', 175),
(2877, 'Ostrowiec', 175),
(2878, 'Podkarpackie', 175),
(2879, 'Podlaskie', 175),
(2880, 'Polska', 175),
(2881, 'Pomorskie', 175),
(2882, 'Poznan', 175),
(2883, 'Pruszkow', 175),
(2884, 'Rymanowska', 175),
(2885, 'Rzeszow', 175),
(2886, 'Slaskie', 175),
(2887, 'Stare Pole', 175),
(2888, 'Swietokrzyskie', 175),
(2889, 'Warminsko-Mazurskie', 175),
(2890, 'Warsaw', 175),
(2891, 'Wejherowo', 175),
(2892, 'Wielkopolskie', 175),
(2893, 'Wroclaw', 175),
(2894, 'Zachodnio-Pomorskie', 175),
(2895, 'Zukowo', 175),
(2896, 'Abrantes', 176),
(2897, 'Acores', 176),
(2898, 'Alentejo', 176),
(2899, 'Algarve', 176),
(2900, 'Braga', 176),
(2901, 'Centro', 176),
(2902, 'Distrito de Leiria', 176),
(2903, 'Distrito de Viana do Castelo', 176),
(2904, 'Distrito de Vila Real', 176),
(2905, 'Distrito do Porto', 176),
(2906, 'Lisboa e Vale do Tejo', 176),
(2907, 'Madeira', 176),
(2908, 'Norte', 176),
(2909, 'Paivas', 176),
(2910, 'Arecibo', 177),
(2911, 'Bayamon', 177),
(2912, 'Carolina', 177),
(2913, 'Florida', 177),
(2914, 'Guayama', 177),
(2915, 'Humacao', 177),
(2916, 'Mayaguez-Aguadilla', 177),
(2917, 'Ponce', 177),
(2918, 'Salinas', 177),
(2919, 'San Juan', 177),
(2920, 'Doha', 178),
(2921, 'Jarian-al-Batnah', 178),
(2922, 'Umm Salal', 178),
(2923, 'ad-Dawhah', 178),
(2924, 'al-Ghuwayriyah', 178),
(2925, 'al-Jumayliyah', 178),
(2926, 'al-Khawr', 178),
(2927, 'al-Wakrah', 178),
(2928, 'ar-Rayyan', 178),
(2929, 'ash-Shamal', 178),
(2930, 'Saint-Benoit', 179),
(2931, 'Saint-Denis', 179),
(2932, 'Saint-Paul', 179),
(2933, 'Saint-Pierre', 179),
(2934, 'Alba', 180),
(2935, 'Arad', 180),
(2936, 'Arges', 180),
(2937, 'Bacau', 180),
(2938, 'Bihor', 180),
(2939, 'Bistrita-Nasaud', 180),
(2940, 'Botosani', 180),
(2941, 'Braila', 180),
(2942, 'Brasov', 180),
(2943, 'Bucuresti', 180),
(2944, 'Buzau', 180),
(2945, 'Calarasi', 180),
(2946, 'Caras-Severin', 180),
(2947, 'Cluj', 180),
(2948, 'Constanta', 180),
(2949, 'Covasna', 180),
(2950, 'Dambovita', 180),
(2951, 'Dolj', 180),
(2952, 'Galati', 180),
(2953, 'Giurgiu', 180),
(2954, 'Gorj', 180),
(2955, 'Harghita', 180),
(2956, 'Hunedoara', 180),
(2957, 'Ialomita', 180),
(2958, 'Iasi', 180),
(2959, 'Ilfov', 180),
(2960, 'Maramures', 180),
(2961, 'Mehedinti', 180),
(2962, 'Mures', 180),
(2963, 'Neamt', 180),
(2964, 'Olt', 180),
(2965, 'Prahova', 180),
(2966, 'Salaj', 180),
(2967, 'Satu Mare', 180),
(2968, 'Sibiu', 180),
(2969, 'Sondelor', 180),
(2970, 'Suceava', 180),
(2971, 'Teleorman', 180),
(2972, 'Timis', 180),
(2973, 'Tulcea', 180),
(2974, 'Valcea', 180),
(2975, 'Vaslui', 180),
(2976, 'Vrancea', 180),
(2977, 'Adygeja', 181),
(2978, 'Aga', 181),
(2979, 'Alanija', 181),
(2980, 'Altaj', 181),
(2981, 'Amur', 181),
(2982, 'Arhangelsk', 181),
(2983, 'Astrahan', 181),
(2984, 'Bashkortostan', 181),
(2985, 'Belgorod', 181),
(2986, 'Brjansk', 181),
(2987, 'Burjatija', 181),
(2988, 'Chechenija', 181),
(2989, 'Cheljabinsk', 181),
(2990, 'Chita', 181),
(2991, 'Chukotka', 181),
(2992, 'Chuvashija', 181),
(2993, 'Dagestan', 181),
(2994, 'Evenkija', 181),
(2995, 'Gorno-Altaj', 181),
(2996, 'Habarovsk', 181),
(2997, 'Hakasija', 181),
(2998, 'Hanty-Mansija', 181),
(2999, 'Ingusetija', 181),
(3000, 'Irkutsk', 181),
(3001, 'Ivanovo', 181),
(3002, 'Jamalo-Nenets', 181),
(3003, 'Jaroslavl', 181),
(3004, 'Jevrej', 181),
(3005, 'Kabardino-Balkarija', 181),
(3006, 'Kaliningrad', 181),
(3007, 'Kalmykija', 181),
(3008, 'Kaluga', 181),
(3009, 'Kamchatka', 181),
(3010, 'Karachaj-Cherkessija', 181),
(3011, 'Karelija', 181),
(3012, 'Kemerovo', 181),
(3013, 'Khabarovskiy Kray', 181),
(3014, 'Kirov', 181),
(3015, 'Komi', 181),
(3016, 'Komi-Permjakija', 181),
(3017, 'Korjakija', 181),
(3018, 'Kostroma', 181),
(3019, 'Krasnodar', 181),
(3020, 'Krasnojarsk', 181),
(3021, 'Krasnoyarskiy Kray', 181),
(3022, 'Kurgan', 181),
(3023, 'Kursk', 181),
(3024, 'Leningrad', 181),
(3025, 'Lipeck', 181),
(3026, 'Magadan', 181),
(3027, 'Marij El', 181),
(3028, 'Mordovija', 181),
(3029, 'Moscow', 181),
(3030, 'Moskovskaja Oblast', 181),
(3031, 'Moskovskaya Oblast', 181),
(3032, 'Moskva', 181),
(3033, 'Murmansk', 181),
(3034, 'Nenets', 181),
(3035, 'Nizhnij Novgorod', 181),
(3036, 'Novgorod', 181),
(3037, 'Novokusnezk', 181),
(3038, 'Novosibirsk', 181),
(3039, 'Omsk', 181),
(3040, 'Orenburg', 181),
(3041, 'Orjol', 181),
(3042, 'Penza', 181),
(3043, 'Perm', 181),
(3044, 'Primorje', 181),
(3045, 'Pskov', 181),
(3046, 'Pskovskaya Oblast', 181),
(3047, 'Rjazan', 181),
(3048, 'Rostov', 181),
(3049, 'Saha', 181),
(3050, 'Sahalin', 181),
(3051, 'Samara', 181),
(3052, 'Samarskaya', 181),
(3053, 'Sankt-Peterburg', 181),
(3054, 'Saratov', 181),
(3055, 'Smolensk', 181),
(3056, 'Stavropol', 181),
(3057, 'Sverdlovsk', 181),
(3058, 'Tajmyrija', 181),
(3059, 'Tambov', 181),
(3060, 'Tatarstan', 181),
(3061, 'Tjumen', 181),
(3062, 'Tomsk', 181),
(3063, 'Tula', 181),
(3064, 'Tver', 181),
(3065, 'Tyva', 181),
(3066, 'Udmurtija', 181),
(3067, 'Uljanovsk', 181),
(3068, 'Ulyanovskaya Oblast', 181),
(3069, 'Ust-Orda', 181),
(3070, 'Vladimir', 181),
(3071, 'Volgograd', 181),
(3072, 'Vologda', 181),
(3073, 'Voronezh', 181),
(3074, 'Butare', 182),
(3075, 'Byumba', 182),
(3076, 'Cyangugu', 182),
(3077, 'Gikongoro', 182),
(3078, 'Gisenyi', 182),
(3079, 'Gitarama', 182),
(3080, 'Kibungo', 182),
(3081, 'Kibuye', 182),
(3082, 'Kigali-ngali', 182),
(3083, 'Ruhengeri', 182),
(3084, 'Ascension', 183),
(3085, 'Gough Island', 183),
(3086, 'Saint Helena', 183),
(3087, 'Tristan da Cunha', 183),
(3088, 'Christ Church Nichola Town', 184),
(3089, 'Saint Anne Sandy Point', 184),
(3090, 'Saint George Basseterre', 184),
(3091, 'Saint George Gingerland', 184),
(3092, 'Saint James Windward', 184),
(3093, 'Saint John Capesterre', 184),
(3094, 'Saint John Figtree', 184),
(3095, 'Saint Mary Cayon', 184),
(3096, 'Saint Paul Capesterre', 184),
(3097, 'Saint Paul Charlestown', 184),
(3098, 'Saint Peter Basseterre', 184),
(3099, 'Saint Thomas Lowland', 184),
(3100, 'Saint Thomas Middle Island', 184),
(3101, 'Trinity Palmetto Point', 184),
(3102, 'Anse-la-Raye', 185),
(3103, 'Canaries', 185),
(3104, 'Castries', 185),
(3105, 'Choiseul', 185),
(3106, 'Dennery', 185),
(3107, 'Gros Inlet', 185),
(3108, 'Laborie', 185),
(3109, 'Micoud', 185),
(3110, 'Soufriere', 185),
(3111, 'Vieux Fort', 185),
(3112, 'Miquelon-Langlade', 186),
(3113, 'Saint-Pierre', 186),
(3114, 'Charlotte', 187),
(3115, 'Grenadines', 187),
(3116, 'Saint Andrew', 187),
(3117, 'Saint David', 187),
(3118, 'Saint George', 187),
(3119, 'Saint Patrick', 187),
(3120, 'A\'ana', 188),
(3121, 'Aiga-i-le-Tai', 188),
(3122, 'Atua', 188),
(3123, 'Fa\'asaleleaga', 188),
(3124, 'Gaga\'emauga', 188),
(3125, 'Gagaifomauga', 188),
(3126, 'Palauli', 188),
(3127, 'Satupa\'itea', 188),
(3128, 'Tuamasaga', 188),
(3129, 'Va\'a-o-Fonoti', 188),
(3130, 'Vaisigano', 188),
(3131, 'Acquaviva', 189),
(3132, 'Borgo Maggiore', 189),
(3133, 'Chiesanuova', 189),
(3134, 'Domagnano', 189),
(3135, 'Faetano', 189),
(3136, 'Fiorentino', 189),
(3137, 'Montegiardino', 189),
(3138, 'San Marino', 189),
(3139, 'Serravalle', 189),
(3140, 'Agua Grande', 190),
(3141, 'Cantagalo', 190),
(3142, 'Lemba', 190),
(3143, 'Lobata', 190),
(3144, 'Me-Zochi', 190),
(3145, 'Pague', 190),
(3146, 'Al Khobar', 191),
(3147, 'Aseer', 191),
(3148, 'Ash Sharqiyah', 191),
(3149, 'Asir', 191),
(3150, 'Central Province', 191),
(3151, 'Eastern Province', 191),
(3152, 'Ha\'il', 191),
(3153, 'Jawf', 191),
(3154, 'Jizan', 191),
(3155, 'Makkah', 191),
(3156, 'Najran', 191),
(3157, 'Qasim', 191),
(3158, 'Tabuk', 191),
(3159, 'Western Province', 191),
(3160, 'al-Bahah', 191),
(3161, 'al-Hudud-ash-Shamaliyah', 191),
(3162, 'al-Madinah', 191),
(3163, 'ar-Riyad', 191),
(3164, 'Dakar', 192),
(3165, 'Diourbel', 192),
(3166, 'Fatick', 192),
(3167, 'Kaolack', 192),
(3168, 'Kolda', 192),
(3169, 'Louga', 192),
(3170, 'Saint-Louis', 192),
(3171, 'Tambacounda', 192),
(3172, 'Thies', 192),
(3173, 'Ziguinchor', 192),
(3174, 'Central Serbia', 193),
(3175, 'Kosovo and Metohija', 193),
(3176, 'Vojvodina', 193),
(3177, 'Anse Boileau', 194),
(3178, 'Anse Royale', 194),
(3179, 'Cascade', 194),
(3180, 'Takamaka', 194),
(3181, 'Victoria', 194),
(3182, 'Eastern', 195),
(3183, 'Northern', 195),
(3184, 'Southern', 195),
(3185, 'Western', 195),
(3186, 'Singapore', 196),
(3187, 'Banskobystricky', 197),
(3188, 'Bratislavsky', 197),
(3189, 'Kosicky', 197),
(3190, 'Nitriansky', 197),
(3191, 'Presovsky', 197),
(3192, 'Trenciansky', 197),
(3193, 'Trnavsky', 197),
(3194, 'Zilinsky', 197),
(3195, 'Benedikt', 198),
(3196, 'Gorenjska', 198),
(3197, 'Gorishka', 198),
(3198, 'Jugovzhodna Slovenija', 198),
(3199, 'Koroshka', 198),
(3200, 'Notranjsko-krashka', 198),
(3201, 'Obalno-krashka', 198),
(3202, 'Obcina Domzale', 198),
(3203, 'Obcina Vitanje', 198),
(3204, 'Osrednjeslovenska', 198),
(3205, 'Podravska', 198),
(3206, 'Pomurska', 198),
(3207, 'Savinjska', 198),
(3208, 'Slovenian Littoral', 198),
(3209, 'Spodnjeposavska', 198),
(3210, 'Zasavska', 198),
(3211, 'Pitcairn', 199),
(3212, 'Central', 200),
(3213, 'Choiseul', 200),
(3214, 'Guadalcanal', 200),
(3215, 'Isabel', 200),
(3216, 'Makira and Ulawa', 200),
(3217, 'Malaita', 200),
(3218, 'Rennell and Bellona', 200),
(3219, 'Temotu', 200),
(3220, 'Western', 200),
(3221, 'Awdal', 201),
(3222, 'Bakol', 201),
(3223, 'Banadir', 201),
(3224, 'Bari', 201),
(3225, 'Bay', 201),
(3226, 'Galgudug', 201),
(3227, 'Gedo', 201),
(3228, 'Hiran', 201),
(3229, 'Jubbada Hose', 201),
(3230, 'Jubbadha Dexe', 201),
(3231, 'Mudug', 201),
(3232, 'Nugal', 201),
(3233, 'Sanag', 201),
(3234, 'Shabellaha Dhexe', 201),
(3235, 'Shabellaha Hose', 201),
(3236, 'Togdher', 201),
(3237, 'Woqoyi Galbed', 201),
(3238, 'Eastern Cape', 202),
(3239, 'Free State', 202),
(3240, 'Gauteng', 202),
(3241, 'Kempton Park', 202),
(3242, 'Kramerville', 202),
(3243, 'KwaZulu Natal', 202),
(3244, 'Limpopo', 202),
(3245, 'Mpumalanga', 202),
(3246, 'North West', 202),
(3247, 'Northern Cape', 202),
(3248, 'Parow', 202),
(3249, 'Table View', 202),
(3250, 'Umtentweni', 202),
(3251, 'Western Cape', 202),
(3252, 'South Georgia', 203),
(3253, 'Central Equatoria', 204),
(3254, 'A Coruna', 205),
(3255, 'Alacant', 205),
(3256, 'Alava', 205),
(3257, 'Albacete', 205),
(3258, 'Almeria', 205),
(3260, 'Asturias', 205),
(3261, 'Avila', 205),
(3262, 'Badajoz', 205),
(3263, 'Balears', 205),
(3264, 'Barcelona', 205),
(3267, 'Burgos', 205),
(3268, 'Caceres', 205),
(3269, 'Cadiz', 205),
(3270, 'Cantabria', 205),
(3271, 'Castello', 205),
(3273, 'Ceuta', 205),
(3274, 'Ciudad Real', 205),
(3281, 'Cordoba', 205),
(3282, 'Cuenca', 205),
(3284, 'Girona', 205),
(3285, 'Granada', 205),
(3286, 'Guadalajara', 205),
(3287, 'Guipuzcoa', 205),
(3288, 'Huelva', 205),
(3289, 'Huesca', 205),
(3290, 'Jaen', 205),
(3291, 'La Rioja', 205),
(3292, 'Las Palmas', 205),
(3293, 'Leon', 205),
(3295, 'Lleida', 205),
(3296, 'Lugo', 205),
(3297, 'Madrid', 205),
(3298, 'Malaga', 205),
(3299, 'Melilla', 205),
(3300, 'Murcia', 205),
(3301, 'Navarra', 205),
(3302, 'Ourense', 205),
(3303, 'Pais Vasco', 205),
(3304, 'Palencia', 205),
(3305, 'Pontevedra', 205),
(3306, 'Salamanca', 205),
(3308, 'Segovia', 205),
(3309, 'Sevilla', 205),
(3310, 'Soria', 205),
(3311, 'Tarragona', 205),
(3312, 'Santa Cruz de Tenerife', 205),
(3313, 'Teruel', 205),
(3314, 'Toledo', 205),
(3315, 'Valencia', 205),
(3316, 'Valladolid', 205),
(3317, 'Vizcaya', 205),
(3318, 'Zamora', 205),
(3319, 'Zaragoza', 205),
(3320, 'Amparai', 206),
(3321, 'Anuradhapuraya', 206),
(3322, 'Badulla', 206),
(3323, 'Boralesgamuwa', 206),
(3324, 'Colombo', 206),
(3325, 'Galla', 206),
(3326, 'Gampaha', 206),
(3327, 'Hambantota', 206),
(3328, 'Kalatura', 206),
(3329, 'Kegalla', 206),
(3330, 'Kilinochchi', 206),
(3331, 'Kurunegala', 206),
(3332, 'Madakalpuwa', 206),
(3333, 'Maha Nuwara', 206),
(3334, 'Malwana', 206),
(3335, 'Mannarama', 206),
(3336, 'Matale', 206),
(3337, 'Matara', 206),
(3338, 'Monaragala', 206),
(3339, 'Mullaitivu', 206),
(3340, 'North Eastern Province', 206),
(3341, 'North Western Province', 206),
(3342, 'Nuwara Eliya', 206),
(3343, 'Polonnaruwa', 206),
(3344, 'Puttalama', 206),
(3345, 'Ratnapuraya', 206),
(3346, 'Southern Province', 206),
(3347, 'Tirikunamalaya', 206),
(3348, 'Tuscany', 206),
(3349, 'Vavuniyawa', 206),
(3350, 'Western Province', 206),
(3351, 'Yapanaya', 206),
(3352, 'kadawatha', 206),
(3353, 'A\'ali-an-Nil', 207),
(3354, 'Bahr-al-Jabal', 207),
(3355, 'Central Equatoria', 207),
(3356, 'Gharb Bahr-al-Ghazal', 207),
(3357, 'Gharb Darfur', 207),
(3358, 'Gharb Kurdufan', 207),
(3359, 'Gharb-al-Istiwa\'iyah', 207),
(3360, 'Janub Darfur', 207),
(3361, 'Janub Kurdufan', 207),
(3362, 'Junqali', 207),
(3363, 'Kassala', 207),
(3364, 'Nahr-an-Nil', 207),
(3365, 'Shamal Bahr-al-Ghazal', 207),
(3366, 'Shamal Darfur', 207),
(3367, 'Shamal Kurdufan', 207),
(3368, 'Sharq-al-Istiwa\'iyah', 207),
(3369, 'Sinnar', 207),
(3370, 'Warab', 207),
(3371, 'Wilayat al Khartum', 207),
(3372, 'al-Bahr-al-Ahmar', 207),
(3373, 'al-Buhayrat', 207),
(3374, 'al-Jazirah', 207),
(3375, 'al-Khartum', 207),
(3376, 'al-Qadarif', 207),
(3377, 'al-Wahdah', 207),
(3378, 'an-Nil-al-Abyad', 207),
(3379, 'an-Nil-al-Azraq', 207),
(3380, 'ash-Shamaliyah', 207),
(3381, 'Brokopondo', 208),
(3382, 'Commewijne', 208),
(3383, 'Coronie', 208),
(3384, 'Marowijne', 208),
(3385, 'Nickerie', 208),
(3386, 'Para', 208),
(3387, 'Paramaribo', 208),
(3388, 'Saramacca', 208),
(3389, 'Wanica', 208),
(3390, 'Svalbard', 209),
(3391, 'Hhohho', 210),
(3392, 'Lubombo', 210),
(3393, 'Manzini', 210),
(3394, 'Shiselweni', 210),
(3395, 'Alvsborgs Lan', 211),
(3396, 'Angermanland', 211),
(3397, 'Blekinge', 211),
(3398, 'Bohuslan', 211),
(3399, 'Dalarna', 211),
(3400, 'Gavleborg', 211),
(3401, 'Gaza', 211),
(3402, 'Gotland', 211),
(3403, 'Halland', 211),
(3404, 'Jamtland', 211),
(3405, 'Jonkoping', 211),
(3406, 'Kalmar', 211),
(3407, 'Kristianstads', 211),
(3408, 'Kronoberg', 211),
(3409, 'Norrbotten', 211),
(3410, 'Orebro', 211),
(3411, 'Ostergotland', 211),
(3412, 'Saltsjo-Boo', 211),
(3413, 'Skane', 211),
(3414, 'Smaland', 211),
(3415, 'Sodermanland', 211),
(3416, 'Stockholm', 211),
(3417, 'Uppsala', 211),
(3418, 'Varmland', 211),
(3419, 'Vasterbotten', 211),
(3420, 'Vastergotland', 211),
(3421, 'Vasternorrland', 211),
(3422, 'Vastmanland', 211),
(3423, 'Vastra Gotaland', 211),
(3424, 'Aargau', 212),
(3425, 'Appenzell Inner-Rhoden', 212),
(3426, 'Appenzell-Ausser Rhoden', 212),
(3427, 'Basel-Landschaft', 212),
(3428, 'Basel-Stadt', 212),
(3429, 'Bern', 212),
(3430, 'Canton Ticino', 212),
(3431, 'Fribourg', 212),
(3432, 'Geneve', 212),
(3433, 'Glarus', 212),
(3434, 'Graubunden', 212),
(3435, 'Heerbrugg', 212),
(3436, 'Jura', 212),
(3437, 'Kanton Aargau', 212),
(3438, 'Luzern', 212),
(3439, 'Morbio Inferiore', 212),
(3440, 'Muhen', 212),
(3441, 'Neuchatel', 212),
(3442, 'Nidwalden', 212),
(3443, 'Obwalden', 212),
(3444, 'Sankt Gallen', 212),
(3445, 'Schaffhausen', 212),
(3446, 'Schwyz', 212),
(3447, 'Solothurn', 212),
(3448, 'Thurgau', 212),
(3449, 'Ticino', 212),
(3450, 'Uri', 212),
(3451, 'Valais', 212),
(3452, 'Vaud', 212),
(3453, 'Vauffelin', 212),
(3454, 'Zug', 212),
(3455, 'Zurich', 212),
(3456, 'Aleppo', 213),
(3457, 'Dar\'a', 213),
(3458, 'Dayr-az-Zawr', 213),
(3459, 'Dimashq', 213),
(3460, 'Halab', 213),
(3461, 'Hamah', 213),
(3462, 'Hims', 213),
(3463, 'Idlib', 213),
(3464, 'Madinat Dimashq', 213),
(3465, 'Tartus', 213),
(3466, 'al-Hasakah', 213),
(3467, 'al-Ladhiqiyah', 213),
(3468, 'al-Qunaytirah', 213),
(3469, 'ar-Raqqah', 213),
(3470, 'as-Suwayda', 213),
(3471, 'Changhua County', 214),
(3472, 'Chiayi County', 214),
(3473, 'Chiayi City', 214),
(3474, 'Taipei City', 214),
(3475, 'Hsinchu County', 214),
(3476, 'Hsinchu City', 214),
(3477, 'Hualien County', 214),
(3480, 'Kaohsiung City', 214),
(3481, 'Keelung City', 214),
(3482, 'Kinmen County', 214),
(3483, 'Miaoli County', 214),
(3484, 'Nantou County', 214),
(3486, 'Penghu County', 214),
(3487, 'Pingtung County', 214),
(3488, 'Taichung City', 214),
(3492, 'Tainan City', 214),
(3493, 'New Taipei City', 214),
(3495, 'Taitung County', 214),
(3496, 'Taoyuan City', 214),
(3497, 'Yilan County', 214),
(3498, 'YunLin County', 214),
(3500, 'Dushanbe', 215),
(3501, 'Gorno-Badakhshan', 215),
(3502, 'Karotegin', 215),
(3503, 'Khatlon', 215),
(3504, 'Sughd', 215),
(3505, 'Arusha', 216),
(3506, 'Dar es Salaam', 216),
(3507, 'Dodoma', 216),
(3508, 'Iringa', 216),
(3509, 'Kagera', 216),
(3510, 'Kigoma', 216),
(3511, 'Kilimanjaro', 216),
(3512, 'Lindi', 216),
(3513, 'Mara', 216),
(3514, 'Mbeya', 216),
(3515, 'Morogoro', 216),
(3516, 'Mtwara', 216),
(3517, 'Mwanza', 216),
(3518, 'Pwani', 216),
(3519, 'Rukwa', 216),
(3520, 'Ruvuma', 216),
(3521, 'Shinyanga', 216),
(3522, 'Singida', 216),
(3523, 'Tabora', 216),
(3524, 'Tanga', 216),
(3525, 'Zanzibar and Pemba', 216),
(3526, 'Amnat Charoen', 217),
(3527, 'Ang Thong', 217),
(3528, 'Bangkok', 217),
(3529, 'Buri Ram', 217),
(3530, 'Chachoengsao', 217),
(3531, 'Chai Nat', 217),
(3532, 'Chaiyaphum', 217),
(3533, 'Changwat Chaiyaphum', 217),
(3534, 'Chanthaburi', 217),
(3535, 'Chiang Mai', 217),
(3536, 'Chiang Rai', 217),
(3537, 'Chon Buri', 217),
(3538, 'Chumphon', 217),
(3539, 'Kalasin', 217),
(3540, 'Kamphaeng Phet', 217),
(3541, 'Kanchanaburi', 217),
(3542, 'Khon Kaen', 217),
(3543, 'Krabi', 217),
(3544, 'Krung Thep', 217),
(3545, 'Lampang', 217),
(3546, 'Lamphun', 217),
(3547, 'Loei', 217),
(3548, 'Lop Buri', 217),
(3549, 'Mae Hong Son', 217),
(3550, 'Maha Sarakham', 217),
(3551, 'Mukdahan', 217),
(3552, 'Nakhon Nayok', 217),
(3553, 'Nakhon Pathom', 217),
(3554, 'Nakhon Phanom', 217),
(3555, 'Nakhon Ratchasima', 217),
(3556, 'Nakhon Sawan', 217),
(3557, 'Nakhon Si Thammarat', 217),
(3558, 'Nan', 217),
(3559, 'Narathiwat', 217),
(3560, 'Nong Bua Lam Phu', 217),
(3561, 'Nong Khai', 217),
(3562, 'Nonthaburi', 217),
(3563, 'Pathum Thani', 217),
(3564, 'Pattani', 217),
(3565, 'Phangnga', 217),
(3566, 'Phatthalung', 217),
(3567, 'Phayao', 217),
(3568, 'Phetchabun', 217),
(3569, 'Phetchaburi', 217),
(3570, 'Phichit', 217),
(3571, 'Phitsanulok', 217),
(3572, 'Phra Nakhon Si Ayutthaya', 217),
(3573, 'Phrae', 217),
(3574, 'Phuket', 217),
(3575, 'Prachin Buri', 217),
(3576, 'Prachuap Khiri Khan', 217),
(3577, 'Ranong', 217),
(3578, 'Ratchaburi', 217),
(3579, 'Rayong', 217),
(3580, 'Roi Et', 217),
(3581, 'Sa Kaeo', 217),
(3582, 'Sakon Nakhon', 217),
(3583, 'Samut Prakan', 217),
(3584, 'Samut Sakhon', 217),
(3585, 'Samut Songkhran', 217),
(3586, 'Saraburi', 217),
(3587, 'Satun', 217),
(3588, 'Si Sa Ket', 217),
(3589, 'Sing Buri', 217),
(3590, 'Songkhla', 217),
(3591, 'Sukhothai', 217),
(3592, 'Suphan Buri', 217),
(3593, 'Surat Thani', 217),
(3594, 'Surin', 217),
(3595, 'Tak', 217),
(3596, 'Trang', 217),
(3597, 'Trat', 217),
(3598, 'Ubon Ratchathani', 217),
(3599, 'Udon Thani', 217),
(3600, 'Uthai Thani', 217),
(3601, 'Uttaradit', 217),
(3602, 'Yala', 217),
(3603, 'Yasothon', 217),
(3604, 'Centre', 218),
(3605, 'Kara', 218),
(3606, 'Maritime', 218),
(3607, 'Plateaux', 218),
(3608, 'Savanes', 218),
(3609, 'Atafu', 219),
(3610, 'Fakaofo', 219),
(3611, 'Nukunonu', 219),
(3612, 'Eua', 220),
(3613, 'Ha\'apai', 220),
(3614, 'Niuas', 220),
(3615, 'Tongatapu', 220),
(3616, 'Vava\'u', 220),
(3617, 'Arima-Tunapuna-Piarco', 221),
(3618, 'Caroni', 221),
(3619, 'Chaguanas', 221),
(3620, 'Couva-Tabaquite-Talparo', 221),
(3621, 'Diego Martin', 221),
(3622, 'Glencoe', 221),
(3623, 'Penal Debe', 221),
(3624, 'Point Fortin', 221),
(3625, 'Port of Spain', 221),
(3626, 'Princes Town', 221),
(3627, 'Saint George', 221),
(3628, 'San Fernando', 221),
(3629, 'San Juan', 221),
(3630, 'Sangre Grande', 221),
(3631, 'Siparia', 221),
(3632, 'Tobago', 221),
(3633, 'Aryanah', 222),
(3634, 'Bajah', 222),
(3635, 'Bin \'Arus', 222),
(3636, 'Binzart', 222),
(3637, 'Gouvernorat de Ariana', 222),
(3638, 'Gouvernorat de Nabeul', 222),
(3639, 'Gouvernorat de Sousse', 222),
(3640, 'Hammamet Yasmine', 222),
(3641, 'Jundubah', 222),
(3642, 'Madaniyin', 222),
(3643, 'Manubah', 222),
(3644, 'Monastir', 222),
(3645, 'Nabul', 222),
(3646, 'Qabis', 222),
(3647, 'Qafsah', 222),
(3648, 'Qibili', 222),
(3649, 'Safaqis', 222),
(3650, 'Sfax', 222),
(3651, 'Sidi Bu Zayd', 222),
(3652, 'Silyanah', 222),
(3653, 'Susah', 222),
(3654, 'Tatawin', 222),
(3655, 'Tawzar', 222),
(3656, 'Tunis', 222),
(3657, 'Zaghwan', 222),
(3658, 'al-Kaf', 222),
(3659, 'al-Mahdiyah', 222),
(3660, 'al-Munastir', 222),
(3661, 'al-Qasrayn', 222),
(3662, 'al-Qayrawan', 222),
(3663, 'Adana', 223),
(3664, 'Adiyaman', 223),
(3665, 'Afyon', 223),
(3666, 'Agri', 223),
(3667, 'Aksaray', 223),
(3668, 'Amasya', 223),
(3669, 'Ankara', 223),
(3670, 'Antalya', 223),
(3671, 'Ardahan', 223),
(3672, 'Artvin', 223),
(3673, 'Aydin', 223),
(3674, 'Balikesir', 223),
(3675, 'Bartin', 223),
(3676, 'Batman', 223),
(3677, 'Bayburt', 223),
(3678, 'Bilecik', 223),
(3679, 'Bingol', 223),
(3680, 'Bitlis', 223),
(3681, 'Bolu', 223),
(3682, 'Burdur', 223),
(3683, 'Bursa', 223),
(3684, 'Canakkale', 223),
(3685, 'Cankiri', 223),
(3686, 'Corum', 223),
(3687, 'Denizli', 223),
(3688, 'Diyarbakir', 223),
(3689, 'Duzce', 223),
(3690, 'Edirne', 223),
(3691, 'Elazig', 223),
(3692, 'Erzincan', 223),
(3693, 'Erzurum', 223),
(3694, 'Eskisehir', 223),
(3695, 'Gaziantep', 223),
(3696, 'Giresun', 223),
(3697, 'Gumushane', 223),
(3698, 'Hakkari', 223),
(3699, 'Hatay', 223),
(3700, 'Icel', 223),
(3701, 'Igdir', 223),
(3702, 'Isparta', 223),
(3703, 'Istanbul', 223),
(3704, 'Izmir', 223),
(3705, 'Kahramanmaras', 223),
(3706, 'Karabuk', 223),
(3707, 'Karaman', 223),
(3708, 'Kars', 223),
(3709, 'Karsiyaka', 223),
(3710, 'Kastamonu', 223),
(3711, 'Kayseri', 223),
(3712, 'Kilis', 223),
(3713, 'Kirikkale', 223),
(3714, 'Kirklareli', 223),
(3715, 'Kirsehir', 223),
(3716, 'Kocaeli', 223),
(3717, 'Konya', 223),
(3718, 'Kutahya', 223),
(3719, 'Lefkosa', 223),
(3720, 'Malatya', 223),
(3721, 'Manisa', 223),
(3722, 'Mardin', 223),
(3723, 'Mugla', 223),
(3724, 'Mus', 223),
(3725, 'Nevsehir', 223),
(3726, 'Nigde', 223),
(3727, 'Ordu', 223),
(3728, 'Osmaniye', 223),
(3729, 'Rize', 223),
(3730, 'Sakarya', 223),
(3731, 'Samsun', 223),
(3732, 'Sanliurfa', 223),
(3733, 'Siirt', 223),
(3734, 'Sinop', 223),
(3735, 'Sirnak', 223),
(3736, 'Sivas', 223),
(3737, 'Tekirdag', 223),
(3738, 'Tokat', 223),
(3739, 'Trabzon', 223),
(3740, 'Tunceli', 223),
(3741, 'Usak', 223),
(3742, 'Van', 223),
(3743, 'Yalova', 223),
(3744, 'Yozgat', 223),
(3745, 'Zonguldak', 223),
(3746, 'Ahal', 224),
(3747, 'Asgabat', 224),
(3748, 'Balkan', 224),
(3749, 'Dasoguz', 224),
(3750, 'Lebap', 224),
(3751, 'Mari', 224),
(3752, 'Grand Turk', 225),
(3753, 'South Caicos and East Caicos', 225),
(3754, 'Funafuti', 226),
(3755, 'Nanumanga', 226),
(3756, 'Nanumea', 226),
(3757, 'Niutao', 226),
(3758, 'Nui', 226),
(3759, 'Nukufetau', 226),
(3760, 'Nukulaelae', 226),
(3761, 'Vaitupu', 226),
(3762, 'Central', 227),
(3763, 'Eastern', 227),
(3764, 'Northern', 227),
(3765, 'Western', 227),
(3766, 'Cherkas\'ka', 228),
(3767, 'Chernihivs\'ka', 228),
(3768, 'Chernivets\'ka', 228),
(3769, 'Crimea', 228),
(3770, 'Dnipropetrovska', 228),
(3771, 'Donets\'ka', 228),
(3772, 'Ivano-Frankivs\'ka', 228),
(3773, 'Kharkiv', 228),
(3774, 'Kharkov', 228),
(3775, 'Khersonska', 228),
(3776, 'Khmel\'nyts\'ka', 228),
(3777, 'Kirovohrad', 228),
(3778, 'Krym', 228),
(3779, 'Kyyiv', 228),
(3780, 'Kyyivs\'ka', 228),
(3781, 'L\'vivs\'ka', 228),
(3782, 'Luhans\'ka', 228),
(3783, 'Mykolayivs\'ka', 228),
(3784, 'Odes\'ka', 228),
(3785, 'Odessa', 228),
(3786, 'Poltavs\'ka', 228),
(3787, 'Rivnens\'ka', 228),
(3788, 'Sevastopol\'', 228),
(3789, 'Sums\'ka', 228),
(3790, 'Ternopil\'s\'ka', 228),
(3791, 'Volyns\'ka', 228),
(3792, 'Vynnyts\'ka', 228),
(3793, 'Zakarpats\'ka', 228),
(3794, 'Zaporizhia', 228),
(3795, 'Zhytomyrs\'ka', 228),
(3796, 'Abu Zabi', 229),
(3797, 'Ajman', 229),
(3798, 'Dubai', 229),
(3799, 'Ras al-Khaymah', 229),
(3800, 'Sharjah', 229),
(3801, 'Sharjha', 229),
(3802, 'Umm al Qaywayn', 229),
(3803, 'al-Fujayrah', 229),
(3804, 'ash-Shariqah', 229),
(3805, 'Aberdeen', 230),
(3806, 'Aberdeenshire', 230),
(3807, 'Argyll', 230),
(3808, 'Armagh', 230),
(3809, 'Bedfordshire', 230),
(3810, 'Belfast', 230),
(3811, 'Berkshire', 230),
(3812, 'Birmingham', 230),
(3813, 'Brechin', 230),
(3814, 'Bridgnorth', 230),
(3815, 'Bristol', 230),
(3816, 'Buckinghamshire', 230),
(3817, 'Cambridge', 230),
(3818, 'Cambridgeshire', 230),
(3819, 'Channel Islands', 230),
(3820, 'Cheshire', 230),
(3821, 'Cleveland', 230),
(3822, 'Co Fermanagh', 230),
(3823, 'Conwy', 230),
(3824, 'Cornwall', 230),
(3825, 'Coventry', 230),
(3826, 'Craven Arms', 230),
(3827, 'Cumbria', 230),
(3828, 'Denbighshire', 230),
(3829, 'Derby', 230),
(3830, 'Derbyshire', 230),
(3831, 'Devon', 230),
(3832, 'Dial Code Dungannon', 230),
(3833, 'Didcot', 230),
(3834, 'Dorset', 230),
(3835, 'Dunbartonshire', 230),
(3836, 'Durham', 230),
(3837, 'East Dunbartonshire', 230),
(3838, 'East Lothian', 230),
(3839, 'East Midlands', 230),
(3840, 'East Sussex', 230),
(3841, 'East Yorkshire', 230),
(3842, 'England', 230),
(3843, 'Essex', 230),
(3844, 'Fermanagh', 230),
(3845, 'Fife', 230),
(3846, 'Flintshire', 230),
(3847, 'Fulham', 230),
(3848, 'Gainsborough', 230),
(3849, 'Glocestershire', 230),
(3850, 'Gwent', 230),
(3851, 'Hampshire', 230),
(3852, 'Hants', 230),
(3853, 'Herefordshire', 230),
(3854, 'Hertfordshire', 230),
(3855, 'Ireland', 230),
(3856, 'Isle Of Man', 230),
(3857, 'Isle of Wight', 230),
(3858, 'Kenford', 230),
(3859, 'Kent', 230),
(3860, 'Kilmarnock', 230),
(3861, 'Lanarkshire', 230),
(3862, 'Lancashire', 230),
(3863, 'Leicestershire', 230),
(3864, 'Lincolnshire', 230),
(3865, 'Llanymynech', 230),
(3866, 'London', 230),
(3867, 'Ludlow', 230),
(3868, 'Manchester', 230),
(3869, 'Mayfair', 230),
(3870, 'Merseyside', 230),
(3871, 'Mid Glamorgan', 230),
(3872, 'Middlesex', 230),
(3873, 'Mildenhall', 230),
(3874, 'Monmouthshire', 230),
(3875, 'Newton Stewart', 230),
(3876, 'Norfolk', 230),
(3877, 'North Humberside', 230),
(3878, 'North Yorkshire', 230),
(3879, 'Northamptonshire', 230),
(3880, 'Northants', 230),
(3881, 'Northern Ireland', 230),
(3882, 'Northumberland', 230),
(3883, 'Nottinghamshire', 230),
(3884, 'Oxford', 230),
(3885, 'Powys', 230),
(3886, 'Roos-shire', 230),
(3887, 'SUSSEX', 230),
(3888, 'Sark', 230),
(3889, 'Scotland', 230),
(3890, 'Scottish Borders', 230),
(3891, 'Shropshire', 230),
(3892, 'Somerset', 230),
(3893, 'South Glamorgan', 230),
(3894, 'South Wales', 230),
(3895, 'South Yorkshire', 230),
(3896, 'Southwell', 230),
(3897, 'Staffordshire', 230),
(3898, 'Strabane', 230),
(3899, 'Suffolk', 230),
(3900, 'Surrey', 230),
(3901, 'Sussex', 230),
(3902, 'Twickenham', 230),
(3903, 'Tyne and Wear', 230),
(3904, 'Tyrone', 230),
(3905, 'Utah', 230),
(3906, 'Wales', 230),
(3907, 'Warwickshire', 230),
(3908, 'West Lothian', 230),
(3909, 'West Midlands', 230),
(3910, 'West Sussex', 230),
(3911, 'West Yorkshire', 230),
(3912, 'Whissendine', 230),
(3913, 'Wiltshire', 230),
(3914, 'Wokingham', 230),
(3915, 'Worcestershire', 230),
(3916, 'Wrexham', 230),
(3917, 'Wurttemberg', 230),
(3918, 'Yorkshire', 230),
(3919, 'Alabama', 231),
(3920, 'Alaska', 231),
(3921, 'Arizona', 231),
(3922, 'Arkansas', 231),
(3923, 'Byram', 231),
(3924, 'California', 231),
(3925, 'Cokato', 231),
(3926, 'Colorado', 231),
(3927, 'Connecticut', 231),
(3928, 'Delaware', 231),
(3929, 'District of Columbia', 231),
(3930, 'Florida', 231),
(3931, 'Georgia', 231),
(3932, 'Hawaii', 231),
(3933, 'Idaho', 231),
(3934, 'Illinois', 231),
(3935, 'Indiana', 231),
(3936, 'Iowa', 231),
(3937, 'Kansas', 231),
(3938, 'Kentucky', 231),
(3939, 'Louisiana', 231),
(3940, 'Lowa', 231),
(3941, 'Maine', 231),
(3942, 'Maryland', 231),
(3943, 'Massachusetts', 231),
(3944, 'Medfield', 231),
(3945, 'Michigan', 231),
(3946, 'Minnesota', 231),
(3947, 'Mississippi', 231),
(3948, 'Missouri', 231),
(3949, 'Montana', 231),
(3950, 'Nebraska', 231),
(3951, 'Nevada', 231),
(3952, 'New Hampshire', 231),
(3953, 'New Jersey', 231),
(3954, 'New Jersy', 231),
(3955, 'New Mexico', 231),
(3956, 'New York', 231),
(3957, 'North Carolina', 231),
(3958, 'North Dakota', 231),
(3959, 'Ohio', 231),
(3960, 'Oklahoma', 231),
(3961, 'Ontario', 231),
(3962, 'Oregon', 231),
(3963, 'Pennsylvania', 231),
(3964, 'Ramey', 231),
(3965, 'Rhode Island', 231),
(3966, 'South Carolina', 231),
(3967, 'South Dakota', 231),
(3968, 'Sublimity', 231),
(3969, 'Tennessee', 231),
(3970, 'Texas', 231),
(3971, 'Trimble', 231),
(3972, 'Utah', 231),
(3973, 'Vermont', 231),
(3974, 'Virginia', 231),
(3975, 'Washington', 231),
(3976, 'West Virginia', 231),
(3977, 'Wisconsin', 231),
(3978, 'Wyoming', 231),
(3979, 'United States Minor Outlying I', 232),
(3980, 'Artigas', 233),
(3981, 'Canelones', 233),
(3982, 'Cerro Largo', 233),
(3983, 'Colonia', 233),
(3984, 'Durazno', 233),
(3985, 'FLorida', 233),
(3986, 'Flores', 233),
(3987, 'Lavalleja', 233),
(3988, 'Maldonado', 233),
(3989, 'Montevideo', 233),
(3990, 'Paysandu', 233),
(3991, 'Rio Negro', 233),
(3992, 'Rivera', 233),
(3993, 'Rocha', 233),
(3994, 'Salto', 233),
(3995, 'San Jose', 233),
(3996, 'Soriano', 233),
(3997, 'Tacuarembo', 233),
(3998, 'Treinta y Tres', 233),
(3999, 'Andijon', 234),
(4000, 'Buhoro', 234),
(4001, 'Buxoro Viloyati', 234),
(4002, 'Cizah', 234),
(4003, 'Fargona', 234),
(4004, 'Horazm', 234),
(4005, 'Kaskadar', 234),
(4006, 'Korakalpogiston', 234),
(4007, 'Namangan', 234),
(4008, 'Navoi', 234),
(4009, 'Samarkand', 234),
(4010, 'Sirdare', 234),
(4011, 'Surhondar', 234),
(4012, 'Toskent', 234),
(4013, 'Malampa', 235),
(4014, 'Penama', 235),
(4015, 'Sanma', 235),
(4016, 'Shefa', 235),
(4017, 'Tafea', 235),
(4018, 'Torba', 235),
(4019, 'Vatican City State (Holy See)', 236),
(4020, 'Amazonas', 237),
(4021, 'Anzoategui', 237),
(4022, 'Apure', 237),
(4023, 'Aragua', 237),
(4024, 'Barinas', 237),
(4025, 'Bolivar', 237),
(4026, 'Carabobo', 237),
(4027, 'Cojedes', 237),
(4028, 'Delta Amacuro', 237),
(4029, 'Distrito Federal', 237),
(4030, 'Falcon', 237),
(4031, 'Guarico', 237),
(4032, 'Lara', 237),
(4033, 'Merida', 237),
(4034, 'Miranda', 237),
(4035, 'Monagas', 237),
(4036, 'Nueva Esparta', 237),
(4037, 'Portuguesa', 237),
(4038, 'Sucre', 237),
(4039, 'Tachira', 237),
(4040, 'Trujillo', 237),
(4041, 'Vargas', 237),
(4042, 'Yaracuy', 237),
(4043, 'Zulia', 237),
(4044, 'Bac Giang', 238),
(4045, 'Binh Dinh', 238),
(4046, 'Binh Duong', 238),
(4047, 'Da Nang', 238),
(4048, 'Dong Bang Song Cuu Long', 238),
(4049, 'Dong Bang Song Hong', 238),
(4050, 'Dong Nai', 238),
(4051, 'Dong Nam Bo', 238),
(4052, 'Duyen Hai Mien Trung', 238),
(4053, 'Hanoi', 238),
(4054, 'Hung Yen', 238),
(4055, 'Khu Bon Cu', 238),
(4056, 'Long An', 238),
(4057, 'Mien Nui Va Trung Du', 238),
(4058, 'Thai Nguyen', 238),
(4059, 'Thanh Pho Ho Chi Minh', 238),
(4060, 'Thu Do Ha Noi', 238),
(4061, 'Tinh Can Tho', 238),
(4062, 'Tinh Da Nang', 238),
(4063, 'Tinh Gia Lai', 238),
(4064, 'Anegada', 239),
(4065, 'Jost van Dyke', 239),
(4066, 'Tortola', 239),
(4067, 'Saint Croix', 240),
(4068, 'Saint John', 240),
(4069, 'Saint Thomas', 240),
(4070, 'Alo', 241),
(4071, 'Singave', 241),
(4072, 'Wallis', 241),
(4073, 'Bu Jaydur', 242),
(4074, 'Wad-adh-Dhahab', 242),
(4075, 'al-\'Ayun', 242),
(4076, 'as-Samarah', 242),
(4077, '\'Adan', 243),
(4078, 'Abyan', 243),
(4079, 'Dhamar', 243),
(4080, 'Hadramaut', 243),
(4081, 'Hajjah', 243),
(4082, 'Hudaydah', 243),
(4083, 'Ibb', 243),
(4084, 'Lahij', 243),
(4085, 'Ma\'rib', 243),
(4086, 'Madinat San\'a', 243),
(4087, 'Sa\'dah', 243),
(4088, 'Sana', 243),
(4089, 'Shabwah', 243),
(4090, 'Ta\'izz', 243),
(4091, 'al-Bayda', 243),
(4092, 'al-Hudaydah', 243),
(4093, 'al-Jawf', 243),
(4094, 'al-Mahrah', 243),
(4095, 'al-Mahwit', 243),
(4096, 'Central Serbia', 244),
(4097, 'Kosovo and Metohija', 244),
(4098, 'Montenegro', 244),
(4099, 'Republic of Serbia', 244),
(4100, 'Serbia', 244),
(4101, 'Vojvodina', 244),
(4102, 'Central', 245),
(4103, 'Copperbelt', 245),
(4104, 'Eastern', 245),
(4105, 'Luapala', 245),
(4106, 'Lusaka', 245),
(4107, 'North-Western', 245),
(4108, 'Northern', 245),
(4109, 'Southern', 245),
(4110, 'Western', 245),
(4111, 'Bulawayo', 246),
(4112, 'Harare', 246),
(4113, 'Manicaland', 246),
(4114, 'Mashonaland Central', 246),
(4115, 'Mashonaland East', 246),
(4116, 'Mashonaland West', 246),
(4117, 'Masvingo', 246),
(4118, 'Matabeleland North', 246),
(4119, 'Matabeleland South', 246),
(4120, 'Midlands', 246),
(4121, 'Lienchiang County', 214);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_arrange_section`
--
ALTER TABLE `seo_arrange_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_banner`
--
ALTER TABLE `seo_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_business`
--
ALTER TABLE `seo_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_cart_history`
--
ALTER TABLE `seo_cart_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_city`
--
ALTER TABLE `seo_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_country`
--
ALTER TABLE `seo_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_customers`
--
ALTER TABLE `seo_customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `seo_customers_address`
--
ALTER TABLE `seo_customers_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_custom_insert`
--
ALTER TABLE `seo_custom_insert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_custom_section`
--
ALTER TABLE `seo_custom_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_employees`
--
ALTER TABLE `seo_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kk_employees_emp_department_foreign` (`emp_department`),
  ADD KEY `kk_employees_emp_designation_foreign` (`emp_designation`);

--
-- Indexes for table `seo_enquiry`
--
ALTER TABLE `seo_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_faqs`
--
ALTER TABLE `seo_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_faqs_section`
--
ALTER TABLE `seo_faqs_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_header_footer`
--
ALTER TABLE `seo_header_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_images_gallery`
--
ALTER TABLE `seo_images_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_images_section`
--
ALTER TABLE `seo_images_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_inventery`
--
ALTER TABLE `seo_inventery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_locality`
--
ALTER TABLE `seo_locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_mcl`
--
ALTER TABLE `seo_mcl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_menus`
--
ALTER TABLE `seo_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_meta_data`
--
ALTER TABLE `seo_meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_mlc_section`
--
ALTER TABLE `seo_mlc_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_order`
--
ALTER TABLE `seo_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_payments`
--
ALTER TABLE `seo_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pincode`
--
ALTER TABLE `seo_pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_plugin`
--
ALTER TABLE `seo_plugin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_posts`
--
ALTER TABLE `seo_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_post_section`
--
ALTER TABLE `seo_post_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_products`
--
ALTER TABLE `seo_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_products_ibfk_1` (`menu_id`);

--
-- Indexes for table `seo_products_section`
--
ALTER TABLE `seo_products_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_product_orders`
--
ALTER TABLE `seo_product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_query_section`
--
ALTER TABLE `seo_query_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_roles`
--
ALTER TABLE `seo_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `seo_service`
--
ALTER TABLE `seo_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `seo_services_section`
--
ALTER TABLE `seo_services_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_slider`
--
ALTER TABLE `seo_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_slider_section`
--
ALTER TABLE `seo_slider_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_state`
--
ALTER TABLE `seo_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_testimonial`
--
ALTER TABLE `seo_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_testimonials_section`
--
ALTER TABLE `seo_testimonials_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_users`
--
ALTER TABLE `seo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_user_access_permissions`
--
ALTER TABLE `seo_user_access_permissions`
  ADD PRIMARY KEY (`uap_id`);

--
-- Indexes for table `seo_validate_user`
--
ALTER TABLE `seo_validate_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_verification`
--
ALTER TABLE `seo_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_videos_gallery`
--
ALTER TABLE `seo_videos_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_video_section`
--
ALTER TABLE `seo_video_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seo_arrange_section`
--
ALTER TABLE `seo_arrange_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `seo_banner`
--
ALTER TABLE `seo_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `seo_business`
--
ALTER TABLE `seo_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `seo_cart_history`
--
ALTER TABLE `seo_cart_history`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_city`
--
ALTER TABLE `seo_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seo_country`
--
ALTER TABLE `seo_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_customers`
--
ALTER TABLE `seo_customers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_customers_address`
--
ALTER TABLE `seo_customers_address`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_custom_insert`
--
ALTER TABLE `seo_custom_insert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_custom_section`
--
ALTER TABLE `seo_custom_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `seo_employees`
--
ALTER TABLE `seo_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_enquiry`
--
ALTER TABLE `seo_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `seo_faqs`
--
ALTER TABLE `seo_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seo_faqs_section`
--
ALTER TABLE `seo_faqs_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo_header_footer`
--
ALTER TABLE `seo_header_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_images_gallery`
--
ALTER TABLE `seo_images_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seo_images_section`
--
ALTER TABLE `seo_images_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `seo_inventery`
--
ALTER TABLE `seo_inventery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo_locality`
--
ALTER TABLE `seo_locality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo_mcl`
--
ALTER TABLE `seo_mcl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_menus`
--
ALTER TABLE `seo_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo_meta_data`
--
ALTER TABLE `seo_meta_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seo_mlc_section`
--
ALTER TABLE `seo_mlc_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo_order`
--
ALTER TABLE `seo_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_payments`
--
ALTER TABLE `seo_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seo_pincode`
--
ALTER TABLE `seo_pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seo_plugin`
--
ALTER TABLE `seo_plugin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_posts`
--
ALTER TABLE `seo_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo_post_section`
--
ALTER TABLE `seo_post_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seo_products`
--
ALTER TABLE `seo_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `seo_products_section`
--
ALTER TABLE `seo_products_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `seo_product_orders`
--
ALTER TABLE `seo_product_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo_query_section`
--
ALTER TABLE `seo_query_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seo_roles`
--
ALTER TABLE `seo_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_service`
--
ALTER TABLE `seo_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `seo_services_section`
--
ALTER TABLE `seo_services_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `seo_slider`
--
ALTER TABLE `seo_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seo_slider_section`
--
ALTER TABLE `seo_slider_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `seo_state`
--
ALTER TABLE `seo_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_testimonial`
--
ALTER TABLE `seo_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seo_testimonials_section`
--
ALTER TABLE `seo_testimonials_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo_users`
--
ALTER TABLE `seo_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_user_access_permissions`
--
ALTER TABLE `seo_user_access_permissions`
  MODIFY `uap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo_validate_user`
--
ALTER TABLE `seo_validate_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_verification`
--
ALTER TABLE `seo_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seo_videos_gallery`
--
ALTER TABLE `seo_videos_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_video_section`
--
ALTER TABLE `seo_video_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seo_products`
--
ALTER TABLE `seo_products`
  ADD CONSTRAINT `seo_products_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `seo_menus` (`id`);

--
-- Constraints for table `seo_service`
--
ALTER TABLE `seo_service`
  ADD CONSTRAINT `seo_service_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `seo_menus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
