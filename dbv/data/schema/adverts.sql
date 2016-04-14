CREATE TABLE `adverts` (
  `advert_ID` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `ad_description` text NOT NULL,
  `ad_photo` varchar(255) NOT NULL,
  `company_website` varchar(255) NOT NULL,
  `is_paid` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`advert_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1