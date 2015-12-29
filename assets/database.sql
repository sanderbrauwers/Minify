-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van minifydb wordt geschreven
CREATE DATABASE IF NOT EXISTS `minifydb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `minifydb`;


-- Structuur van  tabel minifydb.blog wordt geschreven
CREATE TABLE IF NOT EXISTS `blog` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modify_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`blogid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.blog: ~2 rows (ongeveer)
DELETE FROM `blog`;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`blogid`, `userid`, `title`, `content`, `add_date`, `modify_date`, `is_active`) VALUES
	(1, 2, 'Suspendisse venenatis, diam vel commodo dapibus, l', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at vestibulum orci. Suspendisse potenti. Cras blandit libero sit amet sapien sollicitudin tempus sit amet eget sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at ligula non leo tempor lacinia. Quisque imperdiet ut tortor nec consectetur. Nulla sed posuere augue. Etiam venenatis eros nisi, quis porta sem pretium non. Nullam hendrerit urna in molestie porttitor. Praesent dapibus ipsum sed congue varius. Phasellus sagittis tortor nulla, ut aliquet eros pellentesque mollis.</p>\r\n<p>Sed congue tortor at tellus lobortis consequat. Nulla dictum, massa at laoreet molestie, odio enim luctus massa, fermentum dapibus ipsum urna semper felis. Sed est velit, venenatis a lacus eu, viverra aliquet augue. Maecenas tempor rhoncus orci et porttitor. Vivamus pellentesque enim nunc, feugiat imperdiet leo scelerisque ut. Suspendisse faucibus velit in mi lacinia blandit ac sed ipsum. Mauris blandit turpis eu purus ultrices, vel rutrum velit tempus. In sollicitudin id tortor id ornare. Etiam adipiscing erat in turpis ultrices malesuada. Duis feugiat neque at ligula hendrerit ultricies.</p>\r\n<p>Fusce interdum, lacus euismod lacinia dapibus, quam lacus fringilla massa, cursus luctus tellus eros non sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent vel ligula eros. Phasellus lacinia, ipsum et commodo rhoncus, lacus nulla interdum diam, vel fringilla libero sapien sed lorem. Donec augue lacus, eleifend quis ullamcorper eu, molestie eu nunc. Curabitur ornare tincidunt interdum. Suspendisse suscipit enim pulvinar dignissim luctus.</p>', '2014-02-11 12:52:24', '2014-03-05 13:03:27', 'true'),
	(3, 2, 'Minify ideas', '<p>Minify personal agenda</p>\r\n<ul>\r\n<li>Twitter, Youtube</li>\r\n<li>Agenda voor klanten te organiseren</li>\r\n<li>alert message</li>\r\n<li>System log</li>\r\n</ul>\r\n<p>Minify control room (cloud based)</p>\r\n<ul>\r\n<li>Modules activeren, deactiveren</li>\r\n<li>News</li>\r\n<li>Licensie</li>\r\n<li>Api (system log)</li>\r\n</ul>', '2014-02-25 10:35:08', '2014-03-05 19:19:00', 'true');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;


-- Structuur van  tabel minifydb.contact wordt geschreven
CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `nr` varchar(10) DEFAULT NULL,
  `postcode` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.contact: ~3 rows (ongeveer)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`contactid`, `fname`, `lname`, `street`, `nr`, `postcode`, `city`, `telephone`, `email`, `comment`) VALUES
	(12, 'Sander pricetest', '', '', '', 0, '', '', '', ''),
	(13, 'Sander pricetesyt 3', '', '', '', 0, '', '', '', ''),
	(14, 'Sander test last price', '', '', '', 0, '', '', '', '');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;


-- Structuur van  tabel minifydb.image wordt geschreven
CREATE TABLE IF NOT EXISTS `image` (
  `imageid` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(50) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `width` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `size` int(10) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`imageid`),
  UNIQUE KEY `imageid` (`imageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.image: ~5 rows (ongeveer)
DELETE FROM `image`;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` (`imageid`, `title`, `description`, `add_date`, `type`, `ext`, `width`, `height`, `size`, `link`) VALUES
	('d6gPBcUPNn', '', '', '2014-03-05 17:13:59', 'image/jpeg', 'jpg', 1680, 1050, 1058247, 'uploads/images/d6gPBcUPNn.jpg'),
	('EoAoM8269H', '', '', '2014-03-05 17:12:43', 'image/jpeg', 'jpg', 2560, 1440, 467934, 'uploads/images/EoAoM8269H.jpg'),
	('jGYV2UKUQ7', '', '', '2014-03-05 17:12:27', 'image/jpeg', 'jpg', 2000, 1346, 677979, 'uploads/images/jGYV2UKUQ7.jpg'),
	('NQuDzKIJrs', '', '', '2014-06-17 18:46:49', 'image/png', 'png', 624, 540, 801595, 'uploads/images/NQuDzKIJrs.png'),
	('qSszSEvY82', '', '', '2014-03-05 19:03:35', 'image/png', 'png', 1450, 812, 351968, 'uploads/images/qSszSEvY82.png');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;


-- Structuur van  tabel minifydb.message wordt geschreven
CREATE TABLE IF NOT EXISTS `message` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `topic_content` text NOT NULL,
  `content` text NOT NULL,
  `message_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_read` enum('true','false') DEFAULT 'false',
  PRIMARY KEY (`messageid`),
  KEY `senderid` (`senderid`),
  KEY `receiverid` (`receiverid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.message: ~9 rows (ongeveer)
DELETE FROM `message`;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`messageid`, `senderid`, `receiverid`, `subject`, `topic_content`, `content`, `message_time`, `is_read`) VALUES
	(1, 5, 2, 'Subject 1', '', 'Nomessage for you', '2014-02-11 12:46:44', 'true'),
	(2, 2, 5, 'Subject 1', '<div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/5">Test</a> - Feb 11 2014, 12:46</div>Nomessage for you</div>', 'This is my reply to your message', '2014-02-11 12:50:11', 'true'),
	(3, 5, 2, 'Subject 1', '<div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/2">Sander</a> - Feb 11 2014, 12:50</div>This is my reply to your message</div><div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/5">Test</a> - Feb 11 2014, 12:46</div>Nomessage for you</div>', 'That pretty cool I guess', '2014-02-11 12:50:27', 'true'),
	(4, 8, 2, 'Subject title', '', 'YOLO', '2014-03-03 15:18:31', 'true'),
	(5, 2, 8, 'Subject title', '<div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/8">Tes</a> - Mar 3 2014, 15:18</div>YOLO</div>', 'Thats pretty sweat!', '2014-03-03 15:18:57', 'true'),
	(6, 5, 2, 'Maybe we should do this', '', 'Maybe try one with the logo inside the curve and then spikes pertruding. Feel free to play around with a few ideas like that and we will check them out!', '2014-03-05 19:10:56', 'true'),
	(7, 2, 5, 'Maybe we should do this', '<div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/5">Simon</a> - Mar 5 2014, 19:10</div>Maybe try one with the logo inside the curve and then spikes pertruding. Feel free to play around with a few ideas like that and we will check them out!</div>', 'Yes, that a really good idea man!', '2014-03-05 19:11:18', 'true'),
	(8, 5, 2, 'Maybe we should do this', '<div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/2">Sander</a> - Mar 5 2014, 19:11</div>Yes, that a really good idea man!</div><div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/5">Simon</a> - Mar 5 2014, 19:10</div>Maybe try one with the logo inside the curve and then spikes pertruding. Feel free to play around with a few ideas like that and we will check them out!</div>', 'Wait, don\'t you mean female?', '2014-03-05 19:11:35', 'true'),
	(9, 2, 5, 'Maybe we should do this', '<div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/5">Simon</a> - Mar 5 2014, 19:11</div>Wait, don\'t you mean female?</div><div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/2">Sander</a> - Mar 5 2014, 19:11</div>Yes, that a really good idea man!</div><div class="messageSingleTopic" >\r\n						<div class="messageSingleHeader"><a href="http://localhost/webapp/minify/user/search/5">Simon</a> - Mar 5 2014, 19:10</div>Maybe try one with the logo inside the curve and then spikes pertruding. Feel free to play around with a few ideas like that and we will check them out!</div>', 'yes, i\'m sorry my lady!', '2014-03-05 19:11:51', 'true');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;


-- Structuur van  tabel minifydb.mini_log wordt geschreven
CREATE TABLE IF NOT EXISTS `mini_log` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `action` enum('created','deleted','logged in','modified') DEFAULT NULL,
  `type` enum('page','blog','user','image') DEFAULT NULL,
  `ipadress` varchar(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(50) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`logid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.mini_log: ~18 rows (ongeveer)
DELETE FROM `mini_log`;
/*!40000 ALTER TABLE `mini_log` DISABLE KEYS */;
INSERT INTO `mini_log` (`logid`, `userid`, `action`, `type`, `ipadress`, `date`, `link`, `data`) VALUES
	(5, 2, 'logged in', 'user', '192.168.0.5', '2014-03-06 13:24:52', NULL, NULL),
	(6, 5, 'logged in', 'user', '192.168.0.5', '2014-03-06 13:25:20', NULL, NULL),
	(7, 5, 'logged in', 'user', '::1', '2014-03-06 13:37:24', NULL, NULL),
	(8, 2, 'logged in', 'user', '::1', '2014-03-06 13:44:20', NULL, NULL),
	(9, 2, 'logged in', 'user', '::1', '2014-03-11 11:26:52', NULL, NULL),
	(10, 9, 'logged in', 'user', '::1', '2014-03-11 12:38:35', NULL, NULL),
	(11, 2, 'logged in', 'user', '::1', '2014-03-11 12:38:51', NULL, NULL),
	(12, 2, 'logged in', 'user', '::1', '2014-03-11 14:54:29', NULL, NULL),
	(13, 4, 'logged in', 'user', '::1', '2014-03-12 14:13:22', NULL, NULL),
	(14, 9, 'logged in', 'user', '::1', '2014-03-12 15:02:40', NULL, NULL),
	(15, 11, 'logged in', 'user', '::1', '2014-03-12 15:11:21', NULL, NULL),
	(16, 11, 'logged in', 'user', '::1', '2014-03-12 18:12:59', NULL, NULL),
	(17, 11, 'logged in', 'user', '::1', '2014-03-25 17:36:45', NULL, NULL),
	(18, 11, 'logged in', 'user', '::1', '2014-04-05 14:46:22', NULL, NULL),
	(19, 11, 'logged in', 'user', '::1', '2014-06-13 22:34:55', NULL, NULL),
	(20, 11, 'logged in', 'user', '::1', '2014-06-17 18:46:22', NULL, NULL),
	(21, 11, 'logged in', 'user', '::1', '2015-12-28 20:07:39', NULL, NULL),
	(22, 11, 'logged in', 'user', '::1', '2015-12-28 20:46:54', NULL, NULL),
	(23, 11, 'logged in', 'user', '::1', '2015-12-29 10:08:17', NULL, NULL),
	(24, 11, 'logged in', 'user', '::1', '2015-12-29 10:09:05', NULL, NULL),
	(25, 11, 'logged in', 'user', '::1', '2015-12-29 12:59:15', NULL, NULL),
	(26, 11, 'logged in', 'user', '::1', '2015-12-29 16:17:36', NULL, NULL),
	(27, 11, 'logged in', 'user', '::1', '2015-12-29 16:37:09', NULL, NULL);
/*!40000 ALTER TABLE `mini_log` ENABLE KEYS */;


-- Structuur van  tabel minifydb.mini_modules wordt geschreven
CREATE TABLE IF NOT EXISTS `mini_modules` (
  `moduleid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `is_active` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`moduleid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.mini_modules: ~6 rows (ongeveer)
DELETE FROM `mini_modules`;
/*!40000 ALTER TABLE `mini_modules` DISABLE KEYS */;
INSERT INTO `mini_modules` (`moduleid`, `name`, `is_active`) VALUES
	(1, 'blog', 'false'),
	(2, 'product', 'false'),
	(3, 'page', 'false'),
	(4, 'purchase', 'false'),
	(5, 'teamspeak', 'true'),
	(6, 'image', 'false'),
	(7, 'user', 'false');
/*!40000 ALTER TABLE `mini_modules` ENABLE KEYS */;


-- Structuur van  tabel minifydb.order_detail wordt geschreven
CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderdetail_id` int(10) NOT NULL AUTO_INCREMENT,
  `purchaseid` int(10) NOT NULL DEFAULT '0',
  `productid` int(10) NOT NULL DEFAULT '0',
  `current_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int(10) NOT NULL DEFAULT '0',
  `offer_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`orderdetail_id`),
  KEY `productid` (`productid`),
  KEY `purchaseid` (`purchaseid`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.order_detail: ~10 rows (ongeveer)
DELETE FROM `order_detail`;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
INSERT INTO `order_detail` (`orderdetail_id`, `purchaseid`, `productid`, `current_price`, `quantity`, `offer_price`) VALUES
	(44, 12, 26, 14.82, 2, 0.00),
	(45, 12, 17, 15.00, 2, 15.00),
	(46, 12, 33, 5.17, 1, 5.17),
	(47, 13, 26, 14.82, 2, 0.00),
	(48, 13, 17, 32.12, 2, 15.00),
	(49, 13, 33, 13.10, 2, 5.17),
	(50, 13, 19, 73.19, 2, 0.00),
	(51, 14, 26, 14.82, 2, 0.00),
	(52, 14, 17, 32.12, 2, 15.50),
	(53, 14, 28, 6.23, 1, 4.12);
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;


-- Structuur van  tabel minifydb.page wordt geschreven
CREATE TABLE IF NOT EXISTS `page` (
  `pageid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `title_alias` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `modify_date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `add_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pageid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.page: ~3 rows (ongeveer)
DELETE FROM `page`;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` (`pageid`, `title`, `title_alias`, `content`, `modify_date`, `add_date`) VALUES
	(1, 'Addressing \'Netcode\' in Battlefield 4', 'netcode', '<p><em>We at DICE are committed to improving the overall Battlefield 4 multiplayer experience for our players. Some issues, commonly referenced in conjunction to &ldquo;netcode&rdquo; are preventing Battlefield 4 from performing optimally for everyone, and with this post we would like to explain what we are doing to address these problems.</em></p>\r\n<p>Fixing the commonly nicknamed &ldquo;netcode issues&rdquo; &ndash; problems ranging between faulty networking latency compensation and glitches in the gameplay simulation itself &ndash; is one of the top priorities for DICE. We&rsquo;d like to take a moment to discuss how we are addressing these issues, as this is a very hot topic for many of our fans.</p>\r\n<p>We are working on fixing glitches in your immediate interactions with the game world: the way you move and shoot, the feedback when you&rsquo;re hit, and the way other players&rsquo; actions are shown on your screen.</p>\r\n<p>The game receives updates from the game server and displays these to the player using a system called latency compensation &ndash; this system makes sure players move around naturally on your screen when network updates arrive. We have found and fixed several issues with latency compensation, and thereby decreased the impressions of &ldquo;one hit kills&rdquo; in the game.</p>\r\n<p>We have also fixed several issues that could lead to rubber banding, and we are working on fixing several more. Below you&rsquo;ll find a detailed list of the issues we are focusing on, or have already adjusted in-game. We hope this gives you more insight into the &ldquo;netcode&rdquo; issues and we will continue to keep you updated on top issues.</p>', '2014-03-05 19:06:51', '2014-03-05 13:51:03'),
	(2, 'Humble Bundle Post Mortem - 750K Monacos sold!', '', '<p>Monaco was a Beat the Average game, which means that not all HIB bundle sales resulted in a Monaco sale. &nbsp;Of the 493,000 bundles sold, 370,034&nbsp;of them included Monaco. &nbsp;Of those,&nbsp;270,677 have activated their Steam keys. &nbsp;Interestingly, this means three quarters of the Humble customers beat the average. &nbsp;(Remember that the average starts low and climbs as people beat the average)</p>\r\n<p><em>This means that Monaco has now sold over 750,000 copies!</em></p>\r\n<p>Distribution of revenue typically ends up being the default distribution of&nbsp;65% developers, 20% charity, 15% humble tip.</p>\r\n<p>With 6 developers, plus the mid-week additions of Fez, Starseed Pilgrim, and BeatBuddy, that&rsquo;s around 8% per developer.</p>\r\n<p>Monaco grossed approximately $215,000 over the course of the Humble Bundle. &nbsp;Of course we&rsquo;ll know more when we get the actual sales report. &nbsp;In any case, that&rsquo;s a nice hefty sum!</p>', '2014-03-05 13:54:43', '2014-03-05 13:54:43'),
	(3, 'About', '', '<p>Founded in 1982 by four friends from the Amiga demo scene, DICE (then Digital Illusions) created the cult hit Pinball Dreams for the Amiga. Ten years later, the pivotal Battlefield 1942 would change the future of online gaming and DICE forever. Today, Battlefield 3 has sold more than 17 million copies and received 130 game industry awards. And we are just getting warmed up.</p>', '2014-03-05 19:18:46', '2014-03-05 19:14:04');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;


-- Structuur van  tabel minifydb.product wordt geschreven
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(10) NOT NULL AUTO_INCREMENT,
  `ref_number` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `imageid` int(10) NOT NULL,
  `unit_box` int(10) NOT NULL DEFAULT '0',
  `is_active` enum('true','false') NOT NULL DEFAULT 'false',
  `purchase_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `purchase_price_btw` decimal(10,2) NOT NULL DEFAULT '0.00',
  `retail_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `stock_quantity` int(10) NOT NULL DEFAULT '0',
  `special_offer` decimal(10,2) NOT NULL,
  `suggested_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`productid`),
  KEY `image` (`imageid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.product: ~17 rows (ongeveer)
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`productid`, `ref_number`, `name`, `description`, `imageid`, `unit_box`, `is_active`, `purchase_price`, `purchase_price_btw`, `retail_price`, `stock_quantity`, `special_offer`, `suggested_price`) VALUES
	(17, '137', 'Chupa Chups Best Of Wheel', 'Chupa Chups', 37, 200, 'false', 15.01, 15.11, 32.12, 0, 0.00, 14.00),
	(18, '274', 'Haribo Dragibus Pocket', '', 38, 18, 'false', 5.01, 5.24, 10.60, 0, 0.00, 0.00),
	(19, '744', 'Disney Choco Oeufs', 'Disney Choco Oeufs', 39, 96, 'false', 39.87, 40.11, 73.19, 0, 0.00, 0.00),
	(20, '055', 'Frisk XXL Strawberry', '', 40, 12, 'false', 12.06, 13.06, 17.33, 0, 0.00, 0.00),
	(21, '123', 'Mentos Rouleaux Mint', '', 41, 40, 'false', 10.12, 10.17, 19.16, 0, 0.00, 0.00),
	(22, '121', 'Mentos Rouleaux Pomme', '', 43, 40, 'false', 12.08, 12.08, 19.34, 0, 0.00, 0.00),
	(23, '142', 'Mentos pocket white mint ', '', 44, 10, 'false', 5.09, 5.16, 13.17, 0, 0.00, 0.00),
	(24, '252', 'Haribo Tubo Mini Cola', '', 45, 375, 'false', 2.09, 2.09, 6.23, 0, 0.00, 0.00),
	(25, '265', 'Haribo Tubo Grenouilles', '', 46, 150, 'false', 2.02, 2.27, 6.49, 0, 0.00, 0.00),
	(26, '176', 'Mentos Gum Bottle Fruit Crush Mangue', '', 47, 6, 'false', 8.02, 8.43, 14.82, 0, 0.00, 0.00),
	(27, '271', 'Haribo Tubo Dragons', 'Haribo Tubo Dragons', 48, 75, 'false', 2.08, 2.10, 6.29, 0, 0.00, 0.00),
	(28, '279', 'Haribo Tubo Cersises Sucr', 'Haribo Tubo Cersises Sucr', 49, 150, 'false', 2.16, 2.12, 6.23, 0, 0.00, 0.00),
	(29, '273', 'Haribo Tubo Schtroumpf', '', 50, 150, 'false', 3.06, 3.09, 6.60, 0, 0.00, 0.00),
	(30, '263', 'Haribo Tubo Lacets Rouges', 'Haribo Tubo Lacets Rouges', 51, 150, 'false', 2.07, 2.09, 6.37, 0, 0.00, 8.14),
	(31, '278', 'Haribo Tubo Cola Sucr', '', 52, 150, 'false', 2.04, 2.09, 6.27, 0, 0.00, 0.00),
	(32, '175', 'Mentos Gum Bottle Fruit Crush Fraise', '', 53, 6, 'false', 5.06, 5.08, 14.22, 0, 0.00, 0.00),
	(33, '145', 'Mentos pocket Fruits Rouge', 'Mentos pocket Fruits Rouge', 54, 10, 'false', 5.04, 5.20, 13.10, 0, 0.00, 0.00);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Structuur van  tabel minifydb.purchase wordt geschreven
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchaseid` int(10) NOT NULL AUTO_INCREMENT,
  `title` int(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `imageid` int(11) NOT NULL,
  `unit_box` int(11) NOT NULL,
  `purchase_price` decimal(10,2) NOT NULL,
  `purchase_price_btw` decimal(10,2) NOT NULL,
  `retail_price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  PRIMARY KEY (`purchaseid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.purchase: ~3 rows (ongeveer)
DELETE FROM `purchase`;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
INSERT INTO `purchase` (`purchaseid`, `title`, `description`, `imageid`, `unit_box`, `purchase_price`, `purchase_price_btw`, `retail_price`, `stock_quantity`) VALUES
	(12, 1373719696, '', 0, 0, 0.00, 0.00, 0.00, 0),
	(13, 1373720266, '', 0, 0, 0.00, 0.00, 0.00, 0),
	(14, 1373722292, '', 0, 0, 0.00, 0.00, 0.00, 0);
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;


-- Structuur van  tabel minifydb.server wordt geschreven
CREATE TABLE IF NOT EXISTS `server` (
  `serverid` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0: Offline, 1: Online, 2: Restart, 3: Start, 4: Stop',
  PRIMARY KEY (`serverid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.server: ~0 rows (ongeveer)
DELETE FROM `server`;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
INSERT INTO `server` (`serverid`, `status`) VALUES
	(1, 0);
/*!40000 ALTER TABLE `server` ENABLE KEYS */;


-- Structuur van  tabel minifydb.user wordt geschreven
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `role` enum('normal','admin','owner') DEFAULT 'normal',
  `gender` enum('Male','Female') NOT NULL,
  `lastvisit_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `add_date` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel minifydb.user: ~3 rows (ongeveer)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`userid`, `username`, `name`, `email`, `birth`, `password`, `role`, `gender`, `lastvisit_date`, `add_date`) VALUES
	(2, 'sander', 'Sander', 'sander@sdesigns.be', '1992-07-22', '643b06434070200fc102f3fd35ed83a2c4ef590afd9fccfca2faca332a85d5a5', 'owner', 'Male', '2014-03-11 14:55:06', '2014-03-11 14:55:06'),
	(4, 'luc', NULL, NULL, NULL, '1aa18aad2e62f24c513a67f265ddf33d85387b2ca5455c71a928975495326103', 'owner', '', '2014-02-11 12:19:03', '2014-02-11 12:19:31'),
	(11, 'test', NULL, '', '0000-00-00', 'dbc63eeded5452f7ed8d11d645de459d7027d8b19742521f4460119ba7b53e24', '', 'Male', '2014-03-12 15:11:15', '2014-03-12 15:11:15');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
