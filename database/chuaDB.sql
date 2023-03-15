DROP DATABASE IF EXISTS chuaDB;
CREATE DATABASE chuaDB;
USE chuaDB;

CREATE TABLE Photo
(
    photoID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    alt     VARCHAR(255),
    photo   VARCHAR(500),
    month   TINYINT,
    year    INT
) ENGINE = InnoDB;

CREATE TABLE NewsType
(
    newsTypeID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    typeName   VARCHAR(255),
    icon       VARCHAR(255)
) ENGINE = InnoDB;

CREATE TABLE News
(
    newsID      INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title       VARCHAR(255),
    author      VARCHAR(255),
    description VARCHAR(500),
    paragraph   TEXT,
    timeUpdated TIMESTAMP,
    saveDraft   BOOLEAN,
    banner      VARCHAR(500),
    newsTypeID  INT                NOT NULL,
    FOREIGN KEY (newsTypeID) REFERENCES NewsType (newsTypeID)
) ENGINE = InnoDB;

CREATE TABLE Event
(
    eventID     INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    eventName   VARCHAR(255),
    description VARCHAR(255),
    startTime   VARCHAR(30),
    endTime     VARCHAR(30),
    date        INT(2),
    day         VARCHAR(10),
    month       VARCHAR(10),
    year        INT(4)
) ENGINE = InnoDB;

CREATE TABLE Mail
(
    mailID      INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    firstName   VARCHAR(255),
    lastName    VARCHAR(255),
    email       VARCHAR(255),
    mailSubject VARCHAR(255),
    message     TEXT,
    timestamp   TIMESTAMP
) ENGINE = InnoDB;

CREATE TABLE Admin
(
    adminID  INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    email    VARCHAR(50)        NOT NULL,
    password VARCHAR(150)       NOT NUll
) ENGINE = InnoDB;

CREATE VIEW NewsOrderbyType AS
SELECT n.newsID,
       n.title,
       n.author,
       n.description,
       n.paragraph,
       n.timeUpdated,
       n.saveDraft,
       n.newsTypeID,
       nt.typeName,
       nt.icon
FROM news n,
     newsType nt
WHERE n.newsTypeID = nt.newsTypeID
ORDER BY n.newsID ASC;


INSERT INTO `newstype` (`newsTypeID`, `typeName`, `icon`)
VALUES (NULL, 'CHUA', 'fa-solid fa-vihara'),
       (NULL, 'WORLD', 'fa-solid fa-globe'),
       (NULL, 'CHARITY', 'fa-solid fa-hand-holding-heart');

INSERT INTO `photo` (`photoID`, `alt`, `photo`, `month`, `year`)
VALUES (NULL, 'test', 'image1.jpg', '08', '2022'),
       (NULL, 'test2', 'image2.jpg', '04', '2022'),
       (NULL, 'test3', 'image3.jpg', '11', '2022'),
       (NULL, 'test4', 'image4.jpg', '04', '2022'),
       (NULL, 'test5', 'image5.jpg', '04', '2022'),
       (NULL, 'test6', 'image6.jpg', '04', '2022'),
       (NULL, 'test7', 'image7.jpg', '04', '2022'),
       (NULL, 'test8', 'image8.jpg', '04', '2022'),
       (NULL, 'test9', 'image9.jpg', '04', '2022');

