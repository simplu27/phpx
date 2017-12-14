DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(25) NOT NULL,
  `caption` varchar(120) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `filename`, `caption`) VALUES
(1, 'basin.jpg', 'Water basin at Ryoanji temple, Kyoto'),
(2, 'fountains.jpg', 'Fountains in central Tokyo'),
(3, 'kinkakuji.jpg', 'The Golden Pavilion in Kyoto'),
(4, 'maiko.jpg', 'Maiko&#8212;trainee geishas in Kyoto'),
(5, 'maiko_phone.jpg', 'Every maiko should have one&#8212;a mobile, of course'),
(6, 'menu.jpg', 'Menu outside restaurant in Pontocho, Kyoto'),
(7, 'monk.jpg', 'Monk begging for alms in Kyoto'),
(8, 'ryoanji.jpg', 'Autumn leaves at Ryoanji temple, Kyoto');