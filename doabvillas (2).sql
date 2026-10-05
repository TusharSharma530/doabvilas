-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2026 at 02:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doabvillas`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dump_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `dump_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `applyfor` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogarticles`
--

CREATE TABLE `blogarticles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `blogid` int(11) NOT NULL,
  `blogtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metakeywords` varchar(255) NOT NULL,
  `metadesc` text NOT NULL,
  `card_heading` varchar(255) DEFAULT '',
  `card_data` longtext DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `short_desc` longtext NOT NULL,
  `long_desc` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL,
  `c_url` varchar(255) NOT NULL,
  `c_desc` text NOT NULL,
  `sdesc` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `card_heading` text DEFAULT NULL,
  `card_data` longtext DEFAULT NULL,
  `section_heading` text DEFAULT NULL,
  `iframe` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`, `c_type`, `c_url`, `c_desc`, `sdesc`, `featured_img`, `meta_title`, `meta_keywords`, `meta_desc`, `card_heading`, `card_data`, `section_heading`, `iframe`, `status`, `order`) VALUES
(68, 'HOME', '1', 'home', '', '', 'branch/assets/category/img1790847726.png', '', '', '', NULL, NULL, NULL, '', 1, 1),
(69, 'ABOUT US', '1', 'about-us', '', '', 'branch/assets/category/img1791191148.png', '', '', '', NULL, NULL, NULL, '', 1, 2),
(71, 'HIGHWAY RESTAURANT', '87', 'highway-restaurant', '<p><strong>HIGHWAY RESTAURANT </strong>at Doab Vilas is a premium dining destination offering an exquisite culinary experience. Enjoy a wide range of delicacies prepared by our expert chefs using the freshest ingredients. Whether you are looking for a family meal, a romantic dinner, or a casual outing with friends, our Highway Restaurant promises an unforgettable dining experience with a warm and inviting ambiance.</p>', '', 'branch/assets/category/img1790854520.webp', '', '', '', NULL, NULL, NULL, '', 1, 1),
(72, 'HALLS', '1', 'halls', '', '', 'branch/assets/category/img1791191202.png', '', '', '', NULL, NULL, NULL, '', 1, 5),
(73, 'EVENTS', '1', 'events', '', '', 'branch/assets/category/img1790858870.png', '', '', '', NULL, NULL, NULL, '', 1, 6),
(74, 'GALLERY', '1', 'gallery', '', '', 'branch/assets/category/img1791191173.png', '', '', '', NULL, NULL, NULL, '', 1, 7),
(75, 'CONTACT US', '1', 'contact-us', '', '', 'branch/assets/category/img1791175983.png', '', '', '', NULL, NULL, NULL, '', 1, 9),
(76, 'FACILITIES AT DOAB VILAS', '69', 'facilities-at-doab-vilas', '<p>&nbsp;</p>\n<p>&nbsp;</p>', '<p>Doab Vilas, offers a perfect blend of luxury, comfort, and modern facilities designed to make every stay and celebration truly memorable. From elegant and comfortable rooms to spacious banquet halls and beautifully landscaped green lawns, every facility is thoughtfully designed to provide a premium experience. Guests can enjoy refreshing swimming pools, delicious dining options, ample parking, and warm hospitality in a serene and welcoming environment.</p>', 'branch/assets/category/img1790772674.png', '', '', '', NULL, NULL, NULL, 'https://www.youtube.com/embed/umNVgILZh-0?si=i8Jfx8lidpOGIVs1', 1, 1),
(78, 'HIGHWAY RESTAURANT', '71', 'highway-restaurant', 'Doab Vilas is a premium dining destination offering an exquisite culinary experience. Enjoy a wide range of delicacies prepared by our expert chefs using the freshest ingredients. Whether you are looking for a family meal, a romantic dinner, or a casual outing with friends, our Highway Restaurant promises an unforgettable dining experience with a warm and inviting ambiance.', '', 'branch/assets/category/img1790841617.webp', '', '', '', NULL, NULL, NULL, '', 1, 1),
(79, 'OUR STAFF', '68', 'our-staff', 'At Doab Vilas, our dedicated team works tirelessly to ensure every guest experiences unparalleled hospitality. From warm welcomes to flawless service, our staff is committed to making your stay truly memorable.', '', 'branch/assets/category/img1790842521.webp', '', '', '', NULL, NULL, NULL, '', 1, 1),
(80, 'DOAB VILAS AT NIGHT', '68', 'doab-vilas-at-night', '<p>Witness the enchanting beauty of Doab Vilas as it transforms under the night sky. The magical lighting and serene ambiance make it a truly unforgettable experience.</p>', '', 'branch/assets/category/img1791195715.png', '', '', '', NULL, NULL, NULL, '', 1, 2),
(81, 'A LEGACY OF HOSPITALITY', '69', 'a-legacy-of-hospitality', '<p>Nestled in the heart of Meerut, <strong>Doab Vilas</strong> stands as a beacon of luxury and refined taste. Our heritage of warm hospitality spans decades, creating unforgettable experiences for every guest who walks through our doors.</p>\r\n<p>From our meticulously designed rooms to our world-class dining and event spaces, every detail has been thoughtfully curated to offer you an experience beyond compare. We believe in blending traditional Indian warmth with modern sophistication.</p>', '', 'branch/assets/category/img1791195798.png', '', '', '', NULL, NULL, NULL, '', 1, 2),
(82, 'Hospitality', '2', 'hospitality', 'We treat every guest as family, ensuring a warm and welcoming experience.', '', 'branch/assets/category/img1790851478.svg', '', '', '', NULL, NULL, NULL, '', 1, 1),
(83, 'Excellence', '2', 'excellence', 'We strive for perfection in every detail of our service.', '', 'branch/assets/category/img1790851728.svg', '', '', '', NULL, NULL, NULL, '', 1, 2),
(84, 'Sustainability', '2', 'sustainability', 'We are committed to eco-friendly practices and responsible tourism.', '', 'branch/assets/category/img1790851793.svg', '', '', '', NULL, NULL, NULL, '', 1, 3),
(86, 'ROOMS & SUITES', '1', 'rooms-suites', '', '', 'branch/assets/category/img1790854007.png', '', '', '', NULL, NULL, NULL, '', 1, 3),
(87, 'DINING', '1', 'dining', '', '', 'branch/assets/category/img1790854299.png', '', '', '', NULL, NULL, NULL, '', 1, 4),
(90, 'About Us', '69', 'about-us', '<p>Doab Vilas is an exclusive luxury resort at Meerut, offering a vast range of facilities at one place. Experience the warmth of nature at Doab Vilas. You will be surrounded by the beauty and grace of this resort, which is intelligently designed to revive you. At Doab Vilas, we offer you world-class hospitality services that make your stay truly memorable.</p>\n<p>From luxurious rooms to grand banquet halls, lush green lawns to stunning pools — we have everything you need for a perfect celebration or a relaxing getaway.</p>', '<p>Doab Vilas is an exclusive luxury resort at Meerut, offering a vast range of facilities at one place. Experience the warmth of nature at Doab Vilas. You will be surrounded by the beauty and grace of this resort, which is intelligently designed to revive you. At Doab Vilas, we offer you world-class hospitality services that make your stay truly memorable.From luxurious rooms to grand banquet halls, lush green lawns to stunning pools — we have everything you need for a perfect celebration or a relaxing getaway</p>', 'branch/assets/category/img1791191659.png', '', '', '', NULL, NULL, NULL, '', 1, 6),
(92, 'Highway restaurant', '1', 'highway-restaurant', '', '', '', '', '', '', NULL, NULL, NULL, '', 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `childcategory`
--

CREATE TABLE `childcategory` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `childcat` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cdesc` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `order` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `session` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `enquiry_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creativity`
--

CREATE TABLE `creativity` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `redirect_url` text DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `metatitle` varchar(255) NOT NULL,
  `metakeywords` varchar(255) NOT NULL,
  `metadesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curriculumimg`
--

CREATE TABLE `curriculumimg` (
  `id` int(11) NOT NULL,
  `cum_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `file`, `title`, `ordering`, `status`, `description`) VALUES
(1, 'branch/assets/events_img/17908348320.webp', 'Corporate Events', 1, 1, 'Professional spaces for your business meetings, conferences and corporate gatherings.'),
(2, 'branch/assets/events_img/17908356540.png', 'Festival Events', 2, 1, 'Celebrate your special festivals with us in a grand way with our premium event spaces and services.'),
(3, 'branch/assets/events_img/17911973400.jfif', 'Wedding Venues / Lawn', 3, 1, 'We at Doab Vilas consider each and every event of yours as one of the most important events for us.'),
(4, 'branch/assets/events_img/17908358430.webp', 'Birthday Celebration', 4, 1, 'Make your birthday unforgettable with our stunning venues, delicious catering, and personalized event planning services.'),
(5, 'branch/assets/events_img/17908570590.jfif', 'Weddings & Celebrations', 5, 1, ''),
(7, 'branch/assets/events_img/17908571890.webp', 'Conferences & Meetings', 7, 1, ''),
(8, 'branch/assets/events_img/17908572820.webp', 'Engagement Ceremonies', 6, 1, ''),
(9, 'branch/assets/events_img/17911974050.jfif', 'Anniversary Celebrations', 8, 1, ''),
(10, 'branch/assets/events_img/17908574610.webp', 'Social Gatherings', 9, 1, ''),
(11, 'branch/assets/events_img/17908575020.webp', 'Gola Dinners', 10, 1, ''),
(12, 'branch/assets/events_img/17908575630.webp', 'Cocktail Evenings', 11, 1, ''),
(13, 'branch/assets/events_img/17908576170.webp', 'Private Parties', 12, 1, ''),
(14, 'branch/assets/events_img/17908576670.webp', 'Business Meetings', 17, 1, ''),
(15, 'branch/assets/events_img/17911995230.jfif', 'Product Launches', 14, 1, ''),
(16, 'branch/assets/events_img/17908577730.png', 'Seminor & Workshops', 13, 1, ''),
(17, 'branch/assets/events_img/17908578410.webp', 'Award Ceremonies', 15, 1, ''),
(18, 'branch/assets/events_img/17908578950.jfif', 'Festival Celebrations', 16, 1, ''),
(19, 'branch/assets/events_img/17911976200.jfif', 'Cultural Events', 18, 1, ''),
(20, 'branch/assets/events_img/17911975820.jfif', 'Family Functions', 19, 1, ''),
(21, 'branch/assets/events_img/17911975220.jfif', 'Pre-Wedding Events', 20, 1, ''),
(22, 'branch/assets/events_img/17908581030.jfif', 'Banquets & Receptions', 21, 1, ''),
(23, 'branch/assets/events_img/17908581460.webp', 'Luxury Events', 22, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `events_img`
--

CREATE TABLE `events_img` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `eventid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `desc` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_imgs`
--

CREATE TABLE `gallery_imgs` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT 0,
  `category` varchar(50) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_imgs`
--

INSERT INTO `gallery_imgs` (`id`, `gal_id`, `file`, `title`, `ordering`, `category`, `status`) VALUES
(237, 0, 'branch/assets/gallery_img/17907643560.png', 'Luxury Room', 1, 'rooms', 1),
(238, 0, 'branch/assets/gallery_img/17907598510.png', 'Premium Suite', 2, 'rooms', 1),
(239, 0, 'branch/assets/gallery_img/17907599200.jpeg', 'Rooms Lobby', 3, 'lobby', 1),
(240, 0, 'branch/assets/gallery_img/17907599620.png', 'Doab Vilas', 4, 'venues', 1),
(241, 0, 'branch/assets/gallery_img/17907599940.png', '', 5, '', 1),
(242, 0, 'branch/assets/gallery_img/17907601350.jpeg', 'Sapphire Hall', 6, 'venues', 1),
(243, 0, 'branch/assets/gallery_img/17907622950.jfif', 'Aquarius Pool', 7, 'pool', 1),
(244, 0, 'branch/assets/gallery_img/17907601960.webp', 'Highway Restaurant', 8, 'pool', 1),
(245, 0, 'branch/assets/gallery_img/17907622550.jfif', 'Pool View 1', 9, 'pool', 1),
(246, 0, 'branch/assets/gallery_img/17907622290.jfif', 'Pool View 2', 10, 'pool', 1),
(247, 0, 'branch/assets/gallery_img/17907622060.jfif', 'Pool View 3', 11, 'pool', 1),
(248, 0, 'branch/assets/gallery_img/17907621820.jfif', 'Pool View 4', 12, 'pool', 1),
(249, 0, 'branch/assets/gallery_img/17907621410.jfif', 'Pool View 5', 13, 'pool', 1),
(250, 0, 'branch/assets/gallery_img/17907621160.jfif', 'Pool View 6', 14, 'pool', 1),
(251, 0, 'branch/assets/gallery_img/17907606050.jfif', 'Entry Lobby 1', 15, 'lobby', 1),
(252, 0, 'branch/assets/gallery_img/17907606420.jfif', 'Entry Lobby 2', 16, 'lobby', 1),
(253, 0, 'branch/assets/gallery_img/17907606710.jfif', 'Entry Lobby 3', 17, 'lobby', 1),
(254, 0, 'branch/assets/gallery_img/17907606960.jfif', 'Entry Lobby 4', 18, 'lobby', 1),
(255, 0, 'branch/assets/gallery_img/17907607210.jfif', 'Entry Lobby 5', 19, 'lobby', 1),
(256, 0, 'branch/assets/gallery_img/17907607490.jfif', 'Entry Lobby 6', 20, 'lobby', 1),
(257, 0, 'branch/assets/gallery_img/17907607730.jfif', 'Staff 1', 21, 'staff', 1),
(258, 0, 'branch/assets/gallery_img/17907608020.jfif', 'Staff 2', 22, 'staff', 1),
(259, 0, 'branch/assets/gallery_img/17907608270.jfif', 'Staff 3', 23, 'staff', 1),
(260, 0, 'branch/assets/gallery_img/17907608530.jfif', 'Staff 4', 24, 'staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` text DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `file`, `title`, `subtitle`, `ordering`, `status`, `description`) VALUES
(1, 'branch/assets/halls_img/17908393350.png', 'Diamond Hall', '50 - 100 GUESTS', 1, 1, 'at Doab Vilas is a grand ballroom designed for magnificent celebrations. With stunning interiors, state-of-the-art lighting, and spacious seating, it is the perfect venue for weddings, receptions, and grand events. Our dedicated team ensures every detail is taken care of to make your special day truly unforgettable'),
(2, 'branch/assets/halls_img/17908396680.jfif', 'AQUARIUS POOL', '100 - 250 GUESTS', 2, 1, 'at Doab Vilas is a stunning poolside venue perfect for cocktail events, pool parties, and intimate celebrations. Surrounded by lush greenery and elegant ambiance, it offers a refreshing escape for your special occasions. Enjoy world-class hospitality by the poolside with your loved ones'),
(3, 'branch/assets/halls_img/17908402550.jpeg', 'Sapphire Hall', '100-350 guests', 3, 1, 'at Doab Vilas is an intimate venue designed for exclusive gatherings. With elegant decor, modern amenities, and a cozy atmosphere, it is perfect for corporate meetings, private parties, and special celebrations. Our team ensures a seamless experience tailored to your needs'),
(4, 'branch/assets/halls_img/17908403790.webp', 'Crystall Ball Room', '300-600 GUESTS', 4, 1, 'at Doab Vilas is a magnificent venue designed for grand celebrations. With dazzling crystal chandeliers, elegant interiors, and a spacious layout, it is the perfect setting for lavish weddings, receptions, and corporate galas. Experience unmatched luxury and world-class hospitality in this stunning ballroom.'),
(5, 'branch/assets/halls_img/17908404560.jpeg', 'Jashan Lawn', '500-1500+ GUESTS', 0, 1, 'at Doab Vilas is elegantly designed to welcome you with warmth and luxury. As you step in, you are greeted by stunning interiors, plush seating, and a sophisticated ambiance that sets the tone for your stay. Our lobby offers a perfect blend of comfort and style, making it an ideal space to relax and unwind.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `long_desc` longtext NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `month` int(11) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media1`
--

CREATE TABLE `media1` (
  `id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `month` int(11) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `years` varchar(255) NOT NULL,
  `faculties` varchar(255) NOT NULL,
  `students` varchar(255) NOT NULL,
  `alumni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quickaccess`
--

CREATE TABLE `quickaccess` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `graduation` varchar(255) NOT NULL,
  `passingyear` varchar(255) NOT NULL,
  `entranceexam` varchar(255) NOT NULL,
  `aadharno` varchar(255) NOT NULL,
  `examentrance` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `courseapply` int(11) NOT NULL,
  `certificatecourse` varchar(255) NOT NULL,
  `per10` varchar(255) NOT NULL,
  `per12` int(11) NOT NULL,
  `perug` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `file`, `title`, `ordering`, `status`, `description`) VALUES
(1, 'branch/assets/rooms_img/17908325300.png', 'Luxury Delux Rooms', 1, 1, 'Experience luxury and comfort in our elegantly designed Premium Rooms with modern amenities, plush interiors, and stunning views for a truly royal stay.'),
(2, 'branch/assets/rooms_img/17908330830.png', 'Luxury Delux Rooms', 2, 1, 'Indulge in the finest executive experience with spacious interiors, premium furnishings, and world-class amenities for the discerning traveler.');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `web_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `alternate_email_id` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `alternate_no` varchar(255) NOT NULL,
  `whatsapp_no` varchar(255) NOT NULL,
  `reception_time` varchar(255) NOT NULL DEFAULT '',
  `address` text NOT NULL,
  `youtubelink` varchar(255) NOT NULL,
  `map_iframe` longtext NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `smart_classroom_desc` text DEFAULT NULL,
  `smart_classroom_text` varchar(255) DEFAULT '1st Smart Classroom',
  `brochure_file` varchar(500) DEFAULT '',
  `footerdesc` text NOT NULL,
  `googletag` text NOT NULL,
  `headercenterline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `web_name`, `email_id`, `alternate_email_id`, `contact_no`, `alternate_no`, `whatsapp_no`, `reception_time`, `address`, `youtubelink`, `map_iframe`, `facebook`, `youtube`, `instagram`, `twitter`, `linkedin`, `logo`, `meta_title`, `meta_keywords`, `meta_desc`, `smart_classroom_desc`, `smart_classroom_text`, `brochure_file`, `footerdesc`, `googletag`, `headercenterline`) VALUES
(1, 'Doab Vilas', 'tusharsharma6868@gmail.com', '', '+91 9761866666', '+91 7078733333', '+91 7078733333', 'Restaurant: 7 AM - 11 PM', 'Meerut Bypass Rd, Sector - 3, Ansal\'s Sushant City, Meerut, Uttar Pradesh 250103, India              ', '             ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.533248585759!2d77.63823279679582!3d28.939086368359053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c67359ea11ee5%3A0x3ca7ca84a975523e!2sDoab%20Vilas!5e0!3m2!1sen!2sin!4v1790755575162!5m2!1sen!2sin\r\n', 'https://www.facebook.com/doabvilas.meerut/', 'https://www.youtube.com/@doabvilasclub4923', 'https://www.instagram.com/doabvilasclub/             ', 'https://x.com/doabvilas', 'https://www.linkedin.com/company/doab-vilas', 'branch/assets/logo/logoImg1790752790.avif', '', '', '', '', '', 'branch/images/brochure_1788931594.pdf', '', '', 'Luxury Resort & Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `sc_name` varchar(255) NOT NULL,
  `sc_url` varchar(255) NOT NULL,
  `sc_desc` longtext NOT NULL,
  `sdesc` text NOT NULL,
  `features` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `featured_img1` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `status` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `courseid` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `url` text NOT NULL,
  `desc` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `category`, `title`, `subtitle`, `url`, `desc`, `file`, `order`, `status`) VALUES
(7, '', 'Khayali', 'Comedian', 'khayali', '<p>\"Doab Vilas is truly a paradise in Meerut! The Diamond Hall where we hosted our reception was stunning. The food, the service, and the attention to detail was remarkable. Will definitely come back again!\"</p>', 'branch/assets/testimonials/img1790846300.webp', '1', 1),
(8, '', 'Rajeev Shukla', 'Businessman', 'rajeev-shukla', '<p>\"We celebrated our anniversary at Jashan Lawn and it was magical! The decor, the arrangements, and the staff coordination were flawless. Doab Vilas made our special day truly unforgettable.\"</p>', 'branch/assets/testimonials/img1790846634.webp', '2', 1),
(9, '', 'Mahima Chaudhary', 'Actress', 'mahima-chaudhary', '<p>\"The rooms at Doab Vilas are luxurious and comfortable. We loved the Aquarius Pool area and the dining at Frigo\'s Gourmet was exceptional. A perfect weekend getaway from Delhi!\"</p>', 'branch/assets/testimonials/img1790847426.webp', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `toppers`
--

CREATE TABLE `toppers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_add` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` int(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `board10` varchar(255) NOT NULL,
  `marks10` varchar(255) NOT NULL,
  `percentage10` varchar(255) NOT NULL,
  `board12` varchar(255) NOT NULL,
  `marks12` varchar(255) NOT NULL,
  `percentage12` varchar(255) NOT NULL,
  `board_g` varchar(255) NOT NULL,
  `marks_g` varchar(255) NOT NULL,
  `percentage_g` varchar(255) NOT NULL,
  `board_pg` varchar(255) NOT NULL,
  `marks_pg` varchar(255) NOT NULL,
  `percentage_pg` varchar(255) NOT NULL,
  `graduation` varchar(255) NOT NULL,
  `certification` varchar(255) NOT NULL,
  `skills_training` varchar(255) NOT NULL,
  `total_exp` varchar(255) NOT NULL,
  `relevant_exp` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `class10` varchar(255) NOT NULL,
  `class12` varchar(255) NOT NULL,
  `class_graduation` varchar(255) NOT NULL,
  `class_postgraduation` varchar(255) NOT NULL,
  `accept_declaration` int(11) NOT NULL,
  `accept_understanding` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_banner`
--

CREATE TABLE `web_banner` (
  `id` int(11) NOT NULL,
  `wb_img` varchar(255) NOT NULL,
  `wb_heading` varchar(255) NOT NULL,
  `wb_subheading` text NOT NULL,
  `featuredimg` varchar(255) NOT NULL,
  `wb_order` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_banner`
--

INSERT INTO `web_banner` (`id`, `wb_img`, `wb_heading`, `wb_subheading`, `featuredimg`, `wb_order`, `category_id`, `status`) VALUES
(12, 'branch/assets/banner/img1790767923.mov', '', '', '', 1, 68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `youtubeurl` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogarticles`
--
ALTER TABLE `blogarticles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategory`
--
ALTER TABLE `childcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creativity`
--
ALTER TABLE `creativity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculumimg`
--
ALTER TABLE `curriculumimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_img`
--
ALTER TABLE `events_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_imgs`
--
ALTER TABLE `gallery_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media1`
--
ALTER TABLE `media1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickaccess`
--
ALTER TABLE `quickaccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppers`
--
ALTER TABLE `toppers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_banner`
--
ALTER TABLE `web_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogarticles`
--
ALTER TABLE `blogarticles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `childcategory`
--
ALTER TABLE `childcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `creativity`
--
ALTER TABLE `creativity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `curriculumimg`
--
ALTER TABLE `curriculumimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events_img`
--
ALTER TABLE `events_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_imgs`
--
ALTER TABLE `gallery_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;

--
-- AUTO_INCREMENT for table `media1`
--
ALTER TABLE `media1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quickaccess`
--
ALTER TABLE `quickaccess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `toppers`
--
ALTER TABLE `toppers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_banner`
--
ALTER TABLE `web_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
