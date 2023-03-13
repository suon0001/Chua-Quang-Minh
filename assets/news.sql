-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 06. 03 2023 kl. 12:05:21
-- Serverversion: 5.7.36
-- PHP-version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chuadb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `paragraph` text,
  `timeUpdated` timestamp NULL DEFAULT NULL,
  `newsTypeID` int(11) NOT NULL,
  `photoID` int(11) NOT NULL,
  PRIMARY KEY (`newsID`),
  KEY `newsTypeID` (`newsTypeID`),
  KEY `photoID` (`photoID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `news`
--

INSERT INTO `news` (`newsID`, `title`, `author`, `description`, `paragraph`, `timeUpdated`, `newsTypeID`, `photoID`) VALUES
(1, 'Last Minute, The', 'McLenahan', 'Insertion of three vascular stents', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', '2022-11-27 03:59:14', 3, 6),
(2, 'Brightness (Yeelen)', 'Eldrett', 'Microscopic examination of specimen from spleen and of bone marrow, culture and sensitivity', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', '2023-03-03 04:20:28', 2, 7),
(3, 'Never Talk to Strangers', 'Sunman', 'Tendon graft', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '2022-07-24 09:53:42', 3, 8),
(4, 'What Alice Found', 'Anderton', 'Local excision of esophageal diverticulum', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2022-11-09 02:40:41', 1, 6),
(5, 'Misconception', 'Branchet', 'Closure of proctostomy', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.', '2022-05-01 00:36:24', 3, 6),
(6, 'BBOY for LIFE', 'Gorler', 'Soave submucosal resection of rectum', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', '2022-10-08 01:06:37', 2, 3),
(7, 'Conformist, The (Conformista, Il)', 'Oakeby', 'Laparoscopic resection of transverse colon', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '2023-01-31 09:06:55', 2, 2),
(8, 'Waiting for Happiness (Heremakono)', 'Milton-White', 'Other radioisotope function studies', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', '2022-10-06 02:51:22', 1, 3),
(9, 'They Call Me Trinity', 'Lamps', 'Closed chest cardiac massage', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', '2022-08-08 21:59:12', 3, 3),
(10, 'Moolaadé', 'Widdecombe', 'Drug rehabilitation', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', '2022-12-09 09:25:41', 2, 6),
(11, 'One Hour with You', 'Hellier', 'Other and open repair of diaphragmatic hernia, abdominal approach', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', '2022-12-30 11:07:04', 1, 4),
(12, 'Last Days on Mars, The', 'Mackin', 'Removal of implanted devices from bone, carpals and metacarpals', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', '2022-10-08 10:01:09', 2, 2),
(13, 'Michael Jordan to the Max', 'Chesman', 'Other repair and reconstruction of skin and subcutaneous tissue', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '2023-01-18 08:37:49', 1, 9),
(14, 'Ator, the Fighting Eagle (Ator l\'invincibile)', 'Langlais', 'Removal of carotid sinus stimulation device, total system', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '2022-12-03 02:16:51', 3, 3),
(15, 'Mermaids', 'Laycock', 'Excision or destruction of lesion of vagina', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', '2022-04-07 04:44:32', 1, 2),
(16, 'District, The (Nyócker!)', 'Holt', 'Other total reconstruction of breast', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', '2022-12-17 12:32:19', 2, 6),
(17, 'National Lampoon\'s Senior Trip', 'Arlet', 'Exploratory laparotomy', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.', '2022-11-15 11:18:54', 1, 4),
(18, 'Monty Python\'s Life of Brian', 'Gloy', 'Biopsy of scrotum or tunica vaginalis', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '2022-05-04 17:55:11', 1, 7),
(19, 'Naked Edge, The', 'Hinze', 'Closed [transurethral] biopsy of bladder', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2023-01-22 01:35:56', 2, 1),
(20, 'Mosaic', 'Balme', 'Insertion of biological graft', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '2022-05-11 09:47:38', 2, 6);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`newsTypeID`) REFERENCES `newstype` (`newsTypeID`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`photoID`) REFERENCES `photo` (`photoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
