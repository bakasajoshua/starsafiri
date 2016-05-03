CREATE TABLE `post_likes` (
  `like_ID` int(11) NOT NULL AUTO_INCREMENT,
  `post_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  PRIMARY KEY (`like_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1