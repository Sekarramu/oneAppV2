<<<<<<< HEAD
SHOW CREATE TABLE  tablename	;

CREATE TABLE IF NOT EXISTS `designation` (
 `role` varchar(20) NOT NULL,
 `rolename` varchar(200) NOT NULL,
 PRIMARY KEY (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	
CREATE TABLE IF NOT EXISTS `location` (
 `location` varchar(20) NOT NULL,
 `locationname` varchar(200) NOT NULL,
 PRIMARY KEY (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `surveydata` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPId` int(11) NOT NULL,
 `IPAddress` varchar(50) NOT NULL,
 `designation` varchar(100) NOT NULL,
 `location` varchar(100) NOT NULL,
 `question` varchar(500) NOT NULL,
 `answer` varchar(500) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	
CREATE TABLE IF NOT EXISTS `surveyquestion` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `question` varchar(500) NOT NULL,
 `subquestion` varchar(500) DEFAULT NULL,
 `option1` varchar(500) DEFAULT NULL,
 `option2` varchar(500) DEFAULT NULL,
 `option3` varchar(500) DEFAULT NULL,
 `option4` varchar(500) DEFAULT NULL,
 `inputtype` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1

	
CREATE TABLE IF NOT EXISTS `tempdata` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPId` int(11) NOT NULL,
 `IPAddress` varchar(50) NOT NULL,
 `question` varchar(500) NOT NULL,
 `answer` varchar(500) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `Foreign Key` (`IPId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `tempdatabckup` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPId` int(11) NOT NULL,
 `IPAddress` varchar(50) NOT NULL,
 `question` varchar(500) NOT NULL,
 `answer` varchar(500) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tempsysinfo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPAddress` varchar(30) NOT NULL,
 `designation` varchar(20) DEFAULT NULL,
 `location` varchar(20) DEFAULT NULL,
 `status` varchar(20) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `IPAddress` (`IPAddress`),
 KEY `designation` (`designation`),
 KEY `location` (`location`),
 CONSTRAINT `tempsysinfo_ibfk_1` FOREIGN KEY (`designation`) REFERENCES `designation` (`role`),
 CONSTRAINT `tempsysinfo_ibfk_2` FOREIGN KEY (`location`) REFERENCES `location` (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(50) NOT NULL,
 `username` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `userInfo` (
 `email` varchar(10) NOT NULL,
 `status` varchar(1) NOT NULL,
 PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `applied` varchar(500) DEFAULT NULL,
  `booked` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `email` varchar(500) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `thoughts` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `thoughtId` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
 PRIMARY KEY (`id`)
=======
SHOW CREATE TABLE  tablename	;

CREATE TABLE IF NOT EXISTS `designation` (
 `role` varchar(20) NOT NULL,
 `rolename` varchar(200) NOT NULL,
 PRIMARY KEY (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	
CREATE TABLE IF NOT EXISTS `location` (
 `location` varchar(20) NOT NULL,
 `locationname` varchar(200) NOT NULL,
 PRIMARY KEY (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `surveydata` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPId` int(11) NOT NULL,
 `IPAddress` varchar(50) NOT NULL,
 `designation` varchar(100) NOT NULL,
 `location` varchar(100) NOT NULL,
 `question` varchar(500) NOT NULL,
 `answer` varchar(500) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	
CREATE TABLE IF NOT EXISTS `surveyquestion` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `question` varchar(500) NOT NULL,
 `subquestion` varchar(500) DEFAULT NULL,
 `option1` varchar(500) DEFAULT NULL,
 `option2` varchar(500) DEFAULT NULL,
 `option3` varchar(500) DEFAULT NULL,
 `option4` varchar(500) DEFAULT NULL,
 `inputtype` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1

	
CREATE TABLE IF NOT EXISTS `tempdata` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPId` int(11) NOT NULL,
 `IPAddress` varchar(50) NOT NULL,
 `question` varchar(500) NOT NULL,
 `answer` varchar(500) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `Foreign Key` (`IPId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `tempdatabckup` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPId` int(11) NOT NULL,
 `IPAddress` varchar(50) NOT NULL,
 `question` varchar(500) NOT NULL,
 `answer` varchar(500) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tempsysinfo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `IPAddress` varchar(30) NOT NULL,
 `designation` varchar(20) DEFAULT NULL,
 `location` varchar(20) DEFAULT NULL,
 `status` varchar(20) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `IPAddress` (`IPAddress`),
 KEY `designation` (`designation`),
 KEY `location` (`location`),
 CONSTRAINT `tempsysinfo_ibfk_1` FOREIGN KEY (`designation`) REFERENCES `designation` (`role`),
 CONSTRAINT `tempsysinfo_ibfk_2` FOREIGN KEY (`location`) REFERENCES `location` (`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(50) NOT NULL,
 `username` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `userInfo` (
 `email` varchar(10) NOT NULL,
 `status` varchar(1) NOT NULL,
 PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `applied` varchar(500) DEFAULT NULL,
  `booked` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `email` varchar(500) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `thoughts` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `thoughtId` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
 PRIMARY KEY (`id`)
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
) ENGINE=InnoDB DEFAULT CHARSET=latin1;