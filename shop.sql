-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 06:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `factor` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codecity` int(10) DEFAULT NULL,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `mobile`, `phone`, `address`, `zipcode`, `state_id`, `user_id`, `status`, `factor`, `created_at`, `updated_at`, `codecity`, `province`, `city`) VALUES
(1, 'fgfgfg', '12', '454545454', NULL, '4545', NULL, 9, 1, 0, '2018-03-03 12:00:06', '2018-03-05 06:33:20', 21, 'تهران', 'اسلامشهر'),
(11, 'dfdfd', '45454', '5454', 'fgfg', '45454', NULL, 6, 1, 0, '2018-03-04 09:40:40', '2018-03-10 09:23:12', 54545, 'اردبیل', 'آبی‌بیگلو');

-- --------------------------------------------------------

--
-- Table structure for table `attributegroups`
--

CREATE TABLE `attributegroups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributegroups`
--

INSERT INTO `attributegroups` (`id`, `name`, `category_id`) VALUES
(7, 'xsdsds', 69),
(11, 'fgfg', 108),
(12, 'fgfgfgfgfg', 108),
(13, 'fgfgfgfgfg', 108),
(14, 'fgfgfgfgfg', 108),
(15, 'یهداشت مو', 90),
(16, 'کیف و کوله پشتی', 121);

-- --------------------------------------------------------

--
-- Table structure for table `attributeitems`
--

CREATE TABLE `attributeitems` (
  `id` int(10) UNSIGNED NOT NULL,
  `name1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribut_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributeitems`
--

INSERT INTO `attributeitems` (`id`, `name1`, `attribut_id`) VALUES
(15, 'نخ', 12),
(16, 'بلند', 13),
(17, 'کوتاه', 14),
(18, 'ایران', 15),
(19, 'متوسط', 13),
(20, 'آلمان', 22),
(21, 'پلی استر', 12),
(22, 'زیپ', 23);

-- --------------------------------------------------------

--
-- Table structure for table `attributeitem_product`
--

CREATE TABLE `attributeitem_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attributeitem_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributeitem_product`
--

INSERT INTO `attributeitem_product` (`id`, `product_id`, `attributeitem_id`) VALUES
(2, 30, 16),
(4, 33, 16),
(5, 36, 15),
(6, 37, 15),
(7, 38, 15),
(8, 39, 15),
(9, 40, 15),
(10, 41, 16),
(11, 42, 17),
(12, 43, 15),
(13, 43, 16),
(14, 44, 15),
(15, 39, 15),
(16, 39, 20),
(17, 39, 17);

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributegroup_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name2`, `attributegroup_id`) VALUES
(12, 'جنس', 2),
(13, 'قد', 2),
(14, 'فاق', 2),
(15, 'کشور سازنده', 2),
(22, 'کشور تولید کننده', 15),
(23, 'بند و دستگیره', 16);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE `attribute_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_product`
--

INSERT INTO `attribute_product` (`id`, `product_id`, `attribute_id`) VALUES
(1, 30, 13),
(3, 33, 13),
(4, 36, 12),
(5, 37, 12),
(6, 38, 12),
(7, 39, 12),
(8, 40, 12),
(9, 40, 12),
(10, 41, 12),
(11, 42, 12),
(12, 43, 12),
(13, 43, 13),
(14, 44, 12),
(15, 39, 12),
(16, 39, 15);

-- --------------------------------------------------------

--
-- Table structure for table `banner-image`
--

CREATE TABLE `banner-image` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_id` int(10) UNSIGNED DEFAULT NULL,
  `slide_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `category_id`, `created_at`) VALUES
(11, '15179826704ab70bd9.jpg', 69, NULL),
(12, '151798267196fa68ea_set1.jpg', 69, NULL),
(13, '151798267161b38b53.jpg', 69, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `country`, `image`, `category_id`) VALUES
(10, 'مردانه جک اند جونز', 'دانمارک', '1516805082MAHSOOL-07_F5CF3684DB0A4469AAFB0A4378DD615B.png', 0),
(11, 'للال', 'بلبلبل', '1517475637MAHSOOL-07_F5CF3684DB0A4469AAFB0A4378DD615B.png', 88),
(12, 'آدیداس اوریجینالز - Adidas Originals', 'آلمان', '1517730431ADIDAS-PERFORMANCE-0BB023.png', 88),
(13, 'بچگانه آدیداس ', 'آلمان', '1517730597ADIDAS-ORIGINALS-BD2209.png', 88),
(14, 'مردانه مون بوت', 'ایتابیا', '1517730694MOON-BOOT-7FFB95.png', 69),
(17, 'بلوز', 'یب', '1517752537BLUEZOO.png', 69),
(18, 'طزی', 'یبیبی', '1517774439BOURJOIS-BBB64E.png', 69),
(19, 'NIVEA', '-', '1518071895NIVEA.png', 90),
(20, 'REEBOK', '-', '1518071895NIVEA.png', 69),
(22, 'BLUEZOO', '-', '1518072643BLUEZOO.png', 88),
(23, 'LOREAL', 'فرانسه', '1518105720loreal-a76f9b.png', 90),
(24, 'MAYBELLINE', 'ایتالیا', '1518106002MARIMEKKO-785F07.png', 90),
(25, 'MOON BOOT', 'ایتالیا', '1518106312moon-boot-7ffb95.png', 69),
(26, 'مانگو', 'ایتالیا', '1518106555mango.png', 88);

-- --------------------------------------------------------

--
-- Table structure for table `brand_product`
--

CREATE TABLE `brand_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_product`
--

INSERT INTO `brand_product` (`id`, `product_id`, `brand_id`) VALUES
(36, 30, 10),
(40, 33, 26),
(42, 32, 20),
(45, 33, 13),
(46, 36, 25),
(47, 37, 25),
(48, 38, 25),
(49, 39, 25),
(50, 40, 20),
(51, 41, 22),
(52, 42, 10),
(53, 43, 10),
(54, 44, 10);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES
(69, 'مردانه', 0),
(88, 'بچه گانه', 0),
(89, 'ورزشی', 0),
(90, 'زیبایی و سلامت', 0),
(91, 'لوازم خانه', 0),
(92, 'پریمیوم', 0),
(93, 'برند ها', 0),
(94, 'فروش ویژه', 0),
(106, 'لباس مردانه', 69),
(107, 'کیف مردانه', 69),
(108, 'اکسسوری مردانه', 69),
(109, 'کفش مردانه', 69),
(110, 'کاپشن و پالتو بارانی', 106),
(111, 'ژاکت و پلیور', 106),
(112, 'سویشرت و هودی', 106),
(113, 'پیراهن', 106),
(114, 'کت و شلوار', 106),
(115, 'کت تک و جلیقه', 106),
(116, 'شلوار', 106),
(117, 'تی شرت', 106),
(118, 'لباس ورزشی', 106),
(119, 'کیف دستی و دوشی و پاسپورتی', 107),
(120, 'کوله پشتی', 107),
(121, 'کیف و کوله ورزشی', 107),
(122, 'کیف لب تاب', 107),
(123, 'کمر بند', 108),
(124, 'کلاه و کپ', 108),
(125, 'دستمال گردن و دستمال جیب', 108),
(126, 'زیور آلات', 108),
(127, 'پوت و نیم پوت', 109),
(128, 'رسمی', 109),
(129, 'روزانه', 109),
(130, 'ورزشی', 109),
(131, 'زنانه', 0),
(132, 'نوزاد', 88),
(133, 'پسرانه', 88),
(134, 'دخترانه', 88),
(135, 'لباس نوزاد', 132),
(136, 'کفش و پاپوش نوزاد', 132),
(137, 'لباس پسرانه', 133),
(138, 'کفش پسرانه', 133),
(139, 'لباس دخترانه', 134),
(140, 'مردانه', 89),
(141, 'زنانه', 89),
(142, 'لباس ورزشی', 140),
(143, 'کفش  ورزشی', 141),
(144, 'زنانه', 90),
(145, 'مردانه', 90),
(146, 'بچگانه', 90),
(147, 'عطر', 144),
(148, 'لوازم جانبی آرایش', 144),
(149, 'آرایش صورت', 144),
(150, 'آرایش چشم و ابرو', 144),
(151, 'آرایش لب', 144),
(152, 'آرایش چشم و ابرو', 144),
(153, 'پک آرایشی', 141),
(154, 'بهداشت و مراقبت از مو', 145),
(155, 'ادو کلن', 145),
(156, 'ست هدیه', 145),
(157, 'بهداشت و مراقبت پوست', 145),
(158, 'عطر و ادو کلن', 146),
(160, 'زیبایی و سلامت', 69),
(161, 'ادو کلن', 160);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name1`, `text`, `date`, `parent_id`, `product_id`, `user_id`, `status`, `size`) VALUES
(2, 'dfdfdfdfdfdfdfd', 'fdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', '1396/12/8', 0, 39, 6, 1, NULL),
(3, 'rtrtr', 'trtrtrtrtrtr', '1396/12/8', 0, 39, 9, 1, '8'),
(4, 'sfddf', 'dfdfdf', '1396/12/8', 3, 39, 6, 1, '8'),
(5, 'xcxcxcxc', 'xcxcxcxcxc', '1396/12/8', 2, 39, 9, 0, NULL),
(8, NULL, 'ممنون از سایت خوبتون', '1396/12/8', 3, 44, 6, 0, NULL),
(11, NULL, 'dfdfdfdfdfdfdfdfdfdfdfdfdfdf', '1396/12/8', 3, 39, 6, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `code`, `nationalcode`, `phone`, `number`, `state`, `user_id`, `created_at`, `updated_at`, `city`) VALUES
(2, 'cbfgfgfg', '45454545', '454545', '45454545', '454545454545', 'سمنان', 6, '2018-03-07 12:09:30', '2018-03-07 12:55:33', 'اميريه');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `begindate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `value`, `name`, `code`, `begindate`, `enddate`, `product_id`) VALUES
(17, 38, 'عید نوروز', 'noroze', '1396/12/06', '1396/12/29', 39),
(18, 50, 'عید نوروز', 'noroze', '1396/12/06', '1396/12/29', 36);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `product_id`) VALUES
(1, '1516444150Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(2, '1516446070Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(11, '1516447253Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(12, '1516455764Screen Shot 2017-12-29 at 01.42.21.png', NULL),
(13, '1516455872Screen Shot 2017-12-29 at 01.42.21.png', NULL),
(14, '1516455954Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(15, '1516457972Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(16, '1516458116Screen Shot 2017-12-29 at 01.42.21.png', NULL),
(17, '1516458157Screen Shot 2017-12-29 at 01.41.50.png', NULL),
(18, '1516458170Screen Shot 2017-12-29 at 01.42.21.png', NULL),
(19, '1516806678Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(20, '1516806687Screen Shot 2017-12-29 at 01.41.50.png', NULL),
(21, '1517242793MAHSOOL-07_F5CF3684DB0A4469AAFB0A4378DD615B.png', NULL),
(22, '1517245198Screen Shot 2017-12-29 at 01.42.21.png', NULL),
(23, '1517295043Screen Shot 2017-12-29 at 01.42.21.png', NULL),
(24, '1517295114Screen Shot 2017-12-29 at 01.41.50.png', NULL),
(25, '1517467023Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(26, '1517467033Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(27, '1517470069Screen Shot 2017-12-29 at 01.42.25.png', NULL),
(28, '151781043445c32d.jpg', NULL),
(29, '151781043596fa68ea_set1.jpg', NULL),
(30, '1517810435c79ff5.jpg', NULL),
(31, '151781053545c32d.jpg', NULL),
(32, '151781053596fa68ea_set1.jpg', NULL),
(33, '1517810536c79ff5.jpg', NULL),
(34, '1518071654f9fd8a_002.jpg', NULL),
(35, '1518071655f9fd8a_003.jpg', NULL),
(36, '1518071655f9fd8a_004.jpg', NULL),
(37, '151807207363e4327e-1dae-4888-91d9-ccde01d55c42.js', NULL),
(38, '15180720734250a7_002.jpg', NULL),
(39, '15180720744250a7.jpg', NULL),
(40, '15180725580b5f10.jpg', NULL),
(41, '1518072558593e24.jpg', NULL),
(42, '1518072558567241.jpg', NULL),
(43, '1518072559567241_002.jpg', NULL),
(44, '15180727713aa99b.jpg', NULL),
(45, '15180727713aa99b_002.jpg', NULL),
(46, '15180727723aa99b_003.jpg', NULL),
(47, '15180727726e20e5.jpg', NULL),
(48, '15181050023aa99b.jpg', NULL),
(49, '15181050023aa99b_002.jpg', NULL),
(50, '1518105003a28362.jpg', NULL),
(51, '1518105004bb8106_002.jpg', NULL),
(52, '1518105004bb8106.jpg', NULL),
(53, '1518105664d47b1c_002.jpg', NULL),
(54, '1518105664e2a0a4.jpg', NULL),
(55, '1518105665e2a0a4_002.jpg', NULL),
(56, '1518105917c64256_002.jpg', NULL),
(57, '1518105918c64256_003.jpg', NULL),
(58, '1518105919c64256_004.jpg', NULL),
(59, '15181062312fdecf.jpg', NULL),
(60, '15181062313eea84.jpg', NULL),
(61, '15181062316762c0_003.jpg', NULL),
(62, '15181062328363e3.jpg', NULL),
(63, '15181064895241f3_003.jpg', NULL),
(64, '15181064905241f3_004.jpg', NULL),
(65, '15181067807ca4fc_003.jpg', NULL),
(66, '15181072009292ce3f_set1.jpg', NULL),
(67, '1518107200593e24.jpg', NULL),
(68, '1518107201567241_002.jpg', NULL),
(69, '1518590313100cedb8_set1.jpg', NULL),
(70, '15186188648032a3.jpg', NULL),
(71, '15186188641139f4_002.jpg', NULL),
(72, '15186191405f4de0.jpg', NULL),
(73, '151861914028d3fd.jpg', NULL),
(74, '151861914065f2e9_002.jpg', NULL),
(75, '15186194072b3602_002.JPG', NULL),
(76, '1518619408b65471.JPG', NULL),
(77, '1518619418f8646f_002.jpg', NULL),
(78, '1518619419f8646f.jpg', NULL),
(79, '151861958600f3ef.jpg', NULL),
(80, '1518619586afd2c8.jpg', NULL),
(81, '151861977800a18e.jpg', NULL),
(82, '1518619778e0050d.jpg', NULL),
(83, '1518619779e857ab.jpg', NULL),
(84, '1518619974c92066_003.jpg', NULL),
(85, '1518619975d63258_002.jpg', NULL),
(86, '15186201222bb271.jpg', NULL),
(87, '15186201222bb271_002.jpg', NULL),
(88, '151862012323fcf7.jpg', NULL),
(89, '151862012365add3.jpg', NULL),
(90, '15186202401411e9.jpg', NULL),
(91, '1518620241dfbce2.jpg', NULL),
(92, '1518620242fbefba_002.jpg', NULL),
(93, '15186204786bbc86.jpg', NULL),
(94, '1518620478784de1.jpg', NULL),
(95, '1518620478aedc95.jpg', NULL),
(96, '15187660262fdecf.jpg', NULL),
(97, '15187660273eea84.jpg', NULL),
(98, '15187660278363e3.jpg', NULL),
(99, '151876619400f3ef.jpg', NULL),
(100, '1519496212Reebok   کیف دوشی روزمره بزرگسال Classic Foundation ریباک مشکی و طوسی.htm', NULL),
(101, '15194963217c5749.jpg', NULL),
(102, '151949632182dfa8.jpg', NULL),
(103, '15194964207c5749.jpg', NULL),
(104, '151949642082dfa8.jpg', NULL),
(105, '15195373187c5749.jpg', NULL),
(106, '1519537319123.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_product`
--

CREATE TABLE `image_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_product`
--

INSERT INTO `image_product` (`id`, `product_id`, `image_id`) VALUES
(47, 30, 62),
(50, 33, 65),
(55, 36, 70),
(56, 36, 71),
(57, 37, 72),
(58, 37, 73),
(59, 37, 74),
(61, 38, 76),
(62, 38, 77),
(63, 38, 78),
(65, 39, 80),
(66, 40, 81),
(67, 40, 82),
(68, 40, 83),
(69, 41, 84),
(70, 41, 85),
(71, 42, 86),
(72, 42, 87),
(73, 42, 88),
(74, 42, 89),
(75, 43, 90),
(76, 43, 91),
(77, 43, 92),
(78, 44, 93),
(80, 44, 95),
(81, 30, 96),
(82, 30, 97),
(83, 30, 98),
(84, 39, 99);

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `product_id`, `size`, `user_id`) VALUES
(1, 40, '8', 6),
(2, 40, '8', 9);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_01_11_105446_create_states_table', 1),
(2, '2018_01_11_105533_create_address_table', 1),
(3, '2018_01_11_105608_create_company_table', 1),
(4, '2018_01_11_110734_create_products_attributes_table', 2),
(5, '2018_01_11_110815_create_category_table', 2),
(6, '2018_01_11_110906_create_attributgroups_table', 2),
(7, '2018_01_11_170857_create_attributeitems_table', 2),
(8, '2018_01_11_170952_create_productitems_table', 2),
(9, '2018_01_11_171124_create_productimages_table', 3),
(10, '2018_01_11_171223_create_products_has_images_table', 3),
(11, '2018_01_11_171322_create_discounts_table', 3),
(12, '2018_01_11_171408_create_brands_table', 3),
(13, '2018_01_11_171450_create_productbrands_table', 3),
(14, '2018_01_11_171539_create_comments_table', 3),
(15, '2018_01_11_171621_create_orders_table', 3),
(16, '2018_01_11_171707_create_orderusers_table', 3),
(17, '2018_01_14_084336_create_order_product_table', 4),
(18, '2018_01_20_162458_create_product_size_table', 5),
(19, '2018_02_04_140854_create_slide_table', 6),
(20, '2018_02_05_073010_create_banners_table', 7),
(21, '2018_02_05_123716_create_banner-image_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_orders` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_id` int(10) UNSIGNED DEFAULT NULL,
  `id_get` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `id_orders`, `trans_id`, `id_get`, `user_id`, `address_id`, `created_at`, `updated_at`) VALUES
(84, 3, '15202368245a9cf9185e6f912a3', 8278, 14178, 6, 11, '2018-03-05 04:30:24', '2018-03-05 10:31:40'),
(85, 4, '15202433705a9d12aac45c312a3', 8279, 14179, 6, 11, '2018-03-05 06:19:30', '2018-03-05 10:46:37'),
(86, 3, '15202442285a9d1604389ec12a3', 8280, 14180, 9, 1, '2018-03-05 06:33:48', '2018-03-05 13:20:27'),
(87, 1, '15202694485a9d7888b06d712a3', 8284, 14184, 9, 1, '2018-03-05 13:34:08', '2018-03-05 13:34:14'),
(88, 1, '15202696865a9d79762ca8c12a3', 8285, 14185, 6, 11, '2018-03-05 13:38:06', '2018-03-05 13:38:12'),
(89, 1, '15205749475aa221e32174c12a3', 8358, 14258, 6, 11, '2018-03-09 02:25:47', '2018-03-09 02:25:56'),
(90, 1, '15207481105aa4c64e5468912a3', 8393, 14293, 6, 11, '2018-03-11 02:31:50', '2018-03-11 02:31:58'),
(91, 1, '15207484685aa4c7b46980012a3', 8394, 14294, 6, 11, '2018-03-11 02:37:48', '2018-03-11 02:37:51'),
(92, 0, '15207488275aa4c91baebf912a3', NULL, NULL, 6, 11, '2018-03-11 02:43:47', '2018-03-11 02:43:47'),
(93, 1, '15207506525aa4d03c0221c12a3', 8396, 14296, 6, 11, '2018-03-11 03:14:12', '2018-03-11 03:14:25'),
(94, 1, '15207520295aa4d59d38d0012a3', 8397, 14297, 6, 11, '2018-03-11 03:37:09', '2018-03-11 03:38:17'),
(95, 1, '15207526735aa4d82160dde12a3', 8398, 14298, 6, 11, '2018-03-11 03:47:53', '2018-03-11 03:48:08'),
(96, 0, '15221291355ab9d8ef97db412a3', NULL, NULL, 9, 1, '2018-03-27 01:08:55', '2018-03-27 01:08:55'),
(97, 0, '15221320455ab9e44d6d7ee12a3', NULL, NULL, 9, 1, '2018-03-27 01:57:25', '2018-03-27 01:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `price` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `order_id`, `count`, `price`) VALUES
(12, 40, 84, 2, 438000),
(13, 43, 84, 2, 696000),
(14, 42, 84, 2, 1434000),
(15, 42, 85, 2, 738000),
(16, 43, 85, 9, 1899000),
(17, 39, 85, 8, 3171000),
(18, 42, 86, 3, 1107000),
(19, 41, 86, 3, 1164000),
(20, 40, 86, 11, 3573000),
(21, 42, 87, 2, 738000),
(22, 41, 87, 2, 776000),
(23, 40, 87, 2, 1214000),
(24, 43, 87, 2, 1472000),
(25, 39, 87, 2, 1790000),
(26, 39, 88, 2, 318000),
(27, 40, 88, 2, 756000),
(28, 44, 88, 3, 1113000),
(29, 42, 89, 3, 1107000),
(30, 41, 89, 2, 1145000),
(31, 40, 90, 2, 438000),
(32, 30, 90, 3, 2325000),
(33, 40, 91, 2, 438000),
(34, 41, 92, 3, 57000),
(35, 40, 93, 2, 438000),
(36, 41, 94, 3, 57000),
(37, 41, 95, 4, 76000),
(38, 42, 95, 2, 814000),
(39, 40, 96, 1, 219000),
(40, 39, 97, 2, 318000),
(41, 41, 97, 2, 356000);

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `name`) VALUES
(17, 'ورزشی'),
(18, 'مردانه'),
(19, 'زنانه'),
(20, 'برندها'),
(21, 'بچگانه');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `category_id`, `created_at`, `updated_at`, `image`, `count`) VALUES
(30, 'نیم بوت تخت Vinile Met - مون بوت - نقره ای', 'نیم بوت تخت Vinile Met از محصولات برند مون بوت\n    دارای طراحی منحصر به فرد برای تمامی افراد بزرگسال و کودکان\n    نام برند روی ساق بوت نوشته شده است\n    تمام سطح بوت براق است\n    مناسب برای پاییز و زمستان\n    جنس رویه ترکیبی از پلی اورتان و مواد مصنوعی است\n    جنس قسمت داخلی الیاف پلی استر است\n    جنس زیره ترموپلاستیک است', '629000', 116, '2018-02-08 12:39:55', '2018-02-08 12:40:34', '15181062343eea84.jpg', 0),
(32, 'پاک کننده چسب مژه مصنوعی - آرت دکو - بی رنگ', 'اک کننده چسب مژه مصنوعی Artdeco\nدر صورتی که می خواهید مژه مصنوعی را زودتر از موعد (قبل از بین رفتن چسب) پاک کنید، از این محصول استفاده نمایید\nیک عدد دستمال کاغذی را روی پلک پایین خود گذاشته و چشمان خود را ببندید\nیک برس نازک را با این پاک کننده آغشته کرده و به چسب مژه ها بزنید تا نرم و جدا شوند\nاز برخورد آن با چشم خودداری شود', '28000', 150, '2018-02-08 12:48:37', '2018-02-08 12:48:37', '15181067857ca4fc_002.jpg', 0),
(33, 'پاک کننده چسب مژه مصنوعی - آرت دکو - بی رنگ', 'اک کننده چسب مژه مصنوعی Artdeco\nدر صورتی که می خواهید مژه مصنوعی را زودتر از موعد (قبل از بین رفتن چسب) پاک کنید، از این محصول استفاده نمایید\nیک عدد دستمال کاغذی را روی پلک پایین خود گذاشته و چشمان خود را ببندید\nیک برس نازک را با این پاک کننده آغشته کرده و به چسب مژه ها بزنید تا نرم و جدا شوند\nاز برخورد آن با چشم خودداری شود', '28000', 150, '2018-02-08 12:48:39', '2018-02-08 12:49:45', '15181067857ca4fc_002.jpg', 0),
(36, 'پیراهن نخی آستین بلند مردانه - سلیو - سبز تیره', 'این پیراهن مردانه از محصولات برند Celio است\nپارچه استفاده شده طرح دار و چهار خانه است\nپیراهن به وسیله یک ردیف دکمه بسته می شود\nآستین ها بلند هستند و سر هر آستین با دو دکمه بسته می شود\nدارای یک جیب روی سینه\nفرم پیراهن معمولی است\nمناسب برای استفاده روزمره\nتهیه شده از 100% الیاف نخی\nدر دمای حداکثر 40 درجه سانتی گراد شستشو شود\nاز مایع سفید کننده استفاده نشود\nاتوکشی با دمای متوسط مجاز است', '139000', 113, '2018-02-14 11:04:12', '2018-02-14 11:04:36', '15186188768032a3.jpg', 0),
(37, 'پیراهن جین مردانه - سلیو - آبی', 'این پیراهن حین مردانه آستین بلند و یقه برگردان است\nتوسط یک ردیف دکمه بسته می شود\nدو جیب دکمه دار در قسمت سینه دارد\nسرآستین ها با دکمه بسته می شوند\nدارای فرم جذب بوده و پایین پیراهن فرم هلالی دارد\nقد لباس تا روی باسن است\nدارای پارچه با طرح چهارخانه\nمناسب برای استایل روزمره و مهمانی\nتهیه شده از 100% الیاف نخی\nقابل شستشو در دمای 40 درجه سانتی گراد\nاتوکشی با حرارت متوسط', '199000', 113, '2018-02-14 11:07:57', '2018-02-14 11:09:03', '151861914328d3fd.jpg', 0),
(38, 'پیراهن آستین بلند مردانه - کالکشن - سفید', 'پیراهن مردانه محصول برند The Collection یکی از زیر برندهای دبنهامز است\nاین پیراهن دارای یقه برگردان و آستین های بلند است\nبر روی سینه چپ یک جیب وجود دارد\nجلوی لباس و سر آستین های آن با دکمه بسته می شود\nفرم این پیراهن کلاسیک بوده و مناسب برای موقعیت های رسمی و اداری است\nتهیه شده از 65% پلی استر و 35% الاستین\nقابل شستشو با ماشین لباسشویی تا دمای 40 درجه سانتی گراد\nاز تماس با مواد سفید کننده و خشکشویی لباس پرهیز شود', '159000', 113, '2018-02-14 11:11:23', '2018-02-14 11:13:42', '15186194222b3602_002.JPG', 0),
(39, 'پیراهن آستین بلند مردانه - کالکشن - سفید', 'پیراهن مردانه محصول برند The Collection یکی از زیر برندهای دبنهامز است\nاین پیراهن دارای یقه برگردان و آستین های بلند است\nبر روی سینه چپ یک جیب وجود دارد\nجلوی لباس و سر آستین های آن با دکمه بسته می شود\nفرم این پیراهن کلاسیک بوده و مناسب برای موقعیت های رسمی و اداری است\nتهیه شده از 65% پلی استر و 35% الاستین\nقابل شستشو با ماشین لباسشویی تا دمای 40 درجه سانتی گراد\nاز تماس با مواد سفید کننده و خشکشویی لباس پرهیز شود', '159000', 113, '2018-02-14 11:15:04', '2018-02-14 11:16:29', '151861958900f3ef.jpg', 0),
(40, 'کاپشن کوتاه مردانه - ال سی وایکیکی - مشکی', 'این کاپشن مردانه آستین بلند و یقه ایستاده است\n    به وسیله زیپ بسته میم شود\n    دارای دکمه فشاری در قسمت یقه\n    دارای یک جیب زیپ دار بر روی سینه\n    مناسب برای استفاده روزمره\n    تهیه شده از 100% پلی اورتان\n    از خشک کن استفاده نشود\n    از تماس با مواد سفید کننده اجتناب شود', '219000', 110, '2018-02-14 11:19:13', '2018-02-14 11:19:41', '151861978000a18e_002.jpg', 0),
(41, 'کاپشن کوتاه مردانه - کوتون - زیتونی', 'این کاپشن مردانه آستین بلند و یقه ایستاده است\n    با زیپ بسته می شود\n    دارای دو جیب در طرفین و یک جیب بر روی یکی از آستین ها\n    دارای پارچه براق\n    سرآستین ها، دور یقه و پایین لباس حالت کشبافت دارد\n    مناسب برای استفاده روزمره\n    تهیه شده از 100% نایلون\n    شستشو با ماشین لباسشویی با ماکزیمم دمای 30 درجه سانتی گراد با چرخش آرام برای خشک شدن\n    از خشک کن استفاده نشود\n    از تماس با مواد سفید کننده اجتناب شود\n    خشک شویی نشود', '19000', 110, '2018-02-14 11:22:37', '2018-02-14 11:23:00', '1518619980c92066.jpg', 0),
(42, 'کاپشن نخی میدی مردانه - جک اند جونز - زغالی', 'قد این کاپشن مردانه میدی و تا زیر باسن است\n    نحوه بسته شدن کاپشن با زیپ و دکمه های فشاری است\n    مچ آستین ها با دکمه بسته می شود\n    فرم کاپشن تقریبا آزاد است\n    قد پشت کاپشن بلندتر از جلوی آن است و فرمی هلالی دارد\n    دارای کلاه با قابلیت تنظیم سایز\n    دارای دو جیب در طرفین\n    لبه پایین کاپشن دارای بند است\n    مناسب برای استفاده روزمره در فصول سرد سال\n    تهیه شده از 100% الیاف نخی\n    آستر و لایه داخلی پلی استر است\n    قابل شستشو با ماشین لباسشویی در دمای حداکثر 30 درجه سانتی گراد', '369000', 110, '2018-02-14 11:24:11', '2018-02-14 11:25:24', '15186201242bb271_004.jpg', 0),
(43, 'شلوار جین راسته مردانه - ال سی وایکیکی - مشکی', 'شلوار جین مردانه دارای فرم راسته\n    با زیپ و دکمه بسته می شود\n    سه جیب در جلو و دو جیب پشت شلوار قرار دارد\n    دارای پل مخصوص کمربند\n    مناسب استفاده روزمره\n    تهیه شده از 98% الیاف نخی و 2% الاستین\n    قابل شستشو با دمای 30 درجه سانتی گراد\n    از تماس با مواد سفید کننده اجتناب شود', '129000', 116, '2018-02-14 11:26:56', '2018-02-14 11:27:27', '1518620247fbefba_002.jpg', 0),
(44, 'شلوار جین راسته مردانه - ال سی وایکیکی - آبی', 'ین شلوار جین مردانه راسته و قد آن بلند است\n    دارای فاق متوسط\n    نحوه بسته شدن با یک دکمه و زیپ است\n    دارای پل روی کمر\n    سه جیب در جلو و دو جیب در پشت وجود دارد\n    دارای سنگ شوی روی شلوار\n    مناسب برای استفاده روزمره\n    تهیه شده از 98% الیاف نخی و 2% الاستین\n    قابل شستشو با ماشین لباسشویی در دمای حداکثر 30 درجه سانتی گراد\n    قابل اتو کشی با دمای متوسط\n    از خشک کن و مواد سفید کننده استفاده نشود\n    خشکشویی مجاز نیست\n\nبس', '119000', 116, '2018-02-14 11:30:59', '2018-02-24 14:48:44', '15194963247c5749.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `size_id`, `product_id`) VALUES
(6, 17, 32),
(10, 21, 30),
(13, 18, 30),
(15, 17, 33),
(16, 19, 30),
(17, 8, 36),
(18, 20, 36),
(19, 21, 36),
(20, 8, 37),
(21, 8, 38),
(22, 8, 39),
(23, 8, 40),
(24, 20, 40),
(25, 21, 40),
(26, 8, 41),
(27, 8, 42),
(28, 8, 43),
(29, 20, 43),
(30, 21, 43),
(31, 8, 44);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributgroup_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `attributgroup_id`) VALUES
(8, 'xxl', 7),
(17, 'تک سایز', 16),
(18, '29', 15),
(19, '45', 15),
(20, 'xl', 15),
(21, 'M', 15);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `text`, `name`, `brand_id`, `category_id`, `created_at`, `updated_at`, `image`) VALUES
(9, 'fdfdf', 'dfdfd', 10, 69, NULL, NULL, '15179870251.jpg'),
(10, 'fdfdf', 'dfdfd', 10, 69, NULL, NULL, '15179870252.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roule` tinyint(4) DEFAULT '0',
  `image` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NationalCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `banknumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `roule`, `image`, `NationalCode`, `phone`, `Dateofbirth`, `gender`, `state`, `banknumber`, `email`, `password`, `mobile`, `status`, `remember_token`, `created_at`, `updated_at`, `google_id`, `city`, `type`) VALUES
(6, 'میلاد', 'مروتی', 1, '1517223476MAHSOOL-07_F5CF3684DB0A4469AAFB0A4378DD615B.png', '12121212', '54545', '1370/2/1', 1, 'مازندران', '22222222222', 'miladmorovati593@gmail.com', '$2y$10$85XORWqFxCx5txtyKdCXTOWODKF.Bn5dJ8I074hQsUzG0FXLhbPaC', 1221212, 1, 'T5OReSRf5miRx1GnJmvN4d80fbTwduHHZFiHTsCmSasjusPrG71YyFk1eAfH', '2018-01-29 07:28:10', '2018-03-10 15:15:22', NULL, 'قائم شهر', NULL),
(7, 'بلبلبل', 'fddfd', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M@gmail.com', '$2y$10$avV82Zwn/6k/kbISNZ9eo.1mqpHFGxv4xmrgFGryMC.u2qSR7.xGG', NULL, 1, NULL, '2018-01-29 07:29:20', '2018-01-29 07:54:51', NULL, NULL, NULL),
(8, 'dfgdfgffg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fgfg@gmail.com', '$2y$10$EHKjkS4j4rLKWcbC6uNYrOh4HL0emTAVSifMigXF6ygbBruhplbCK', NULL, 0, 'WcZPEaiFMvmTgYGeVveJI0F6C8MVZbQqp1TGVROpMpDBkeMxm3LxLQMA8S6r', '2018-02-03 12:57:42', '2018-03-10 14:24:21', NULL, NULL, NULL),
(9, 'milad morovati', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'miladmorovati593@gmail.com', '$2y$10$Dsajw0CizJNSThMVpX.xK.TvSaymjpR2QmPzs4xNUDaqh44QiALHa', NULL, 0, 'Gr8vT1wRVy9OOQeD1aPGTysxm4BM1zQNOnOsLGcOcDfBthZUhNOtoNROoTHK', '2018-02-26 11:05:07', '2018-03-10 14:23:30', '106610821732800388632', NULL, NULL),
(15, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'miladmorovati594@gmail.com', '$2y$10$6Tkp07Vv/Geh0GS2VKuujeoSBIK495c/UrirLBN/G/yBmAPbuxB/G', NULL, 0, NULL, '2018-03-09 07:35:06', '2018-03-09 07:35:06', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_state_id_foreign` (`state_id`),
  ADD KEY `address_user_id_foreign` (`user_id`);

--
-- Indexes for table `attributegroups`
--
ALTER TABLE `attributegroups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributegroups_category_id_foreign` (`category_id`);

--
-- Indexes for table `attributeitems`
--
ALTER TABLE `attributeitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributeitems_attribut_id_foreign` (`attribut_id`);

--
-- Indexes for table `attributeitem_product`
--
ALTER TABLE `attributeitem_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productitems_product_id_foreign` (`product_id`),
  ADD KEY `productitems_attributeitem_id_foreign` (`attributeitem_id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_attributes_product_id_foreign` (`product_id`),
  ADD KEY `products_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `banner-image`
--
ALTER TABLE `banner-image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_image_banner_id_foreign` (`banner_id`),
  ADD KEY `banner_image_silde_id_foreign` (`slide_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_category_id_foreign` (`category_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productbrands_product_id_foreign` (`product_id`),
  ADD KEY `productbrands_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_ceategory` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_state_id_foreign` (`state`),
  ADD KEY `company_user_id_foreign` (`user_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_has_images_product_id_foreign` (`product_id`),
  ADD KEY `products_has_images_productimage_id_foreign` (`image_id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderusers_user_id_foreign` (`user_id`),
  ADD KEY `orderusers_order_id_foreign` (`order_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_foreign` (`product_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributegroups_size` (`attributgroup_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_brand_id_foreign` (`brand_id`),
  ADD KEY `slide_category_id_foreign` (`category_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `attributegroups`
--
ALTER TABLE `attributegroups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attributeitems`
--
ALTER TABLE `attributeitems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `attributeitem_product`
--
ALTER TABLE `attributeitem_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `attribute_product`
--
ALTER TABLE `attribute_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `banner-image`
--
ALTER TABLE `banner-image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `brand_product`
--
ALTER TABLE `brand_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `address_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attributegroups`
--
ALTER TABLE `attributegroups`
  ADD CONSTRAINT `attributegroups_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attributeitems`
--
ALTER TABLE `attributeitems`
  ADD CONSTRAINT `attributeitems_attribut_id_foreign` FOREIGN KEY (`attribut_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attributeitem_product`
--
ALTER TABLE `attributeitem_product`
  ADD CONSTRAINT `productitems_attributeitem_id_foreign` FOREIGN KEY (`attributeitem_id`) REFERENCES `attributeitems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productitems_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD CONSTRAINT `products_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `banner-image`
--
ALTER TABLE `banner-image`
  ADD CONSTRAINT `banner_image_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `banner_image_silde_id_foreign` FOREIGN KEY (`slide_id`) REFERENCES `slides` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD CONSTRAINT `productbrands_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productbrands_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `products_has_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_has_images_productimage_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `address_id` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_user`
--
ALTER TABLE `order_user`
  ADD CONSTRAINT `orderusers_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderusers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `attributegroups_size` FOREIGN KEY (`attributgroup_id`) REFERENCES `attributegroups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slide_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `slide_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
