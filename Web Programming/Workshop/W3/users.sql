--
-- Creating table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`userID` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `passwordHash` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Inserting data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `surname`, `username`, `passwordHash`) VALUES
(1, 'Garry', 'Elvin', 'izge1234', '$2y$10$jskbOkCE2LBU5kRRa3CH8uJ2ghk/82mggliuPvxyqH1FDigP6Nvnu'),
(2, 'Pippa', 'McLeod', 'mlpm1788', '$2y$10$5NObDBL0wSU5Fz903mskduSEJ4gUJn3plyO6A4emJsY/DlomH2uBC'),
(3, 'Rob', 'Davis', 'isrd1328', '$2y$10$UHT3nM77k0/Xu5E/cdxyx.0NZOHCEAxSFDsXhvufnseAexd6jZ68i');

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userID`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
