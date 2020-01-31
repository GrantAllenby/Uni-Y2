# ***************************************************************
# *** Create the table structure for the table 'srs_course' *****
# ***************************************************************

DROP TABLE IF EXISTS `srs_course`;
CREATE TABLE IF NOT EXISTS `srs_course` (
  `coursecode` varchar(14) NOT NULL DEFAULT '',
  `coursetitle` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`coursecode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

# ******************************************************
# ***Insert records for the table `srs_course`**********
# ******************************************************

INSERT INTO `srs_course` (`coursecode`, `coursetitle`) VALUES
('ACM1GNN01', 'APPLIED COMPUTING FEB NEWCASTLE'),
('ACT6BNN31', 'APPLIED COMPUTING TECHNOLOGIES SEP NEWCASTLE'),
('CAE1BNN23', 'COMPUTER AIDED ENGINEERING SEP NEWCASTLE'),
('CFO1BNN23', 'COMPUTER FORENSICS SEP NEWCASTLE'),
('CNT1BNN23', 'COMPUTER & NETWORK TECHNOLOGY SEP NEWCASTLE'),
('CNT5BNN01', 'Computer and Network Technology SEP NEWCASTLE'),
('CNT6BNN01', 'COMPUTER NETWORK TECHNOLOGY SEP NEWCASTLE'),
('CNT6FNN01', 'COMPUTER NETWORK TECHNOLOGY JAN NEWCASTLE'),
('COM6BNN31', 'COMPUTING SEP NEWCASTLE'),
('DFO6BNN31', 'Digital Forensics SEP NEWCASTLE'),
('ETH1BNN23', 'Ethical Hacking for Computer Security SEP NEWCASTLE'),
('MUC1BMK01', 'MULTIMEDIA COMPUTING SEP KDU PJ'),
('MUC1FMK01', 'MULTIMEDIA COMPUTING JAN KDU PJ');

# ****************************************************************
# *** Create the table structure for the table 'srs_student' *****
# ****************************************************************

DROP TABLE IF EXISTS `srs_student`;
CREATE TABLE IF NOT EXISTS `srs_student` (
  `studentid` varchar(8) NOT NULL DEFAULT '',
  `forename` varchar(60) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `coursecode` varchar(14) NOT NULL DEFAULT '',
  `stage` smallint(6) NOT NULL DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

# ******************************************************
# ***Insert records for the table `srs_student`*********
# ******************************************************

INSERT INTO `srs_student` (`studentid`, `forename`, `surname`, `coursecode`, `stage`, `email`) VALUES
('a6028310', 'Noel', 'Syedzada', 'ACT6BNN31', 2, 'noel.syedzada@srs.ac.uk'),
('a6020974', 'Mark', 'Parkin', 'ACT6BNN31', 3, 'mark.parkin@srs.ac.uk'),
('a5003354', 'Steven', 'Saxby', 'CAE1BNN23', 4, 'steven.saxby@srs.ac.uk'),
('a5016403', 'Jordan Lewis', 'Dryden', 'CAE1BNN23', 4, 'jordan.dryden@srs.ac.uk'),
('a6031369', 'Victoria', 'Que', 'CFO1BNN23', 1, 'victoria.que@srs.ac.uk'),
('a7005796', 'Jordan', 'Stancer', 'CFO1BNN23', 1, 'jordan.stancer@srs.ac.uk'),
('a7012267', 'Ben Robert', 'Sewell', 'CFO1BNN23', 1, 'ben.sewell@srs.ac.uk'),
('a8000484', 'Iain', 'Roberts', 'CFO1BNN23', 1, 'iain.roberts@srs.ac.uk'),
('a8001746', 'Hayley', 'Barton', 'CFO1BNN23', 1, 'hayley.barton@srs.ac.uk'),
('a8001920', 'Craig', 'Winslow', 'CFO1BNN23', 1, 'craig.winslow@srs.ac.uk'),
('a8002640', 'Katharine', 'Morrow', 'CFO1BNN23', 1, 'katharine.morrow@srs.ac.uk'),
('a8002910', 'Jonathan', 'Brannigan', 'CFO1BNN23', 1, 'jonathan.brannigan@srs.ac.uk'),
('a8003603', 'Emma', 'Killenaull', 'CFO1BNN23', 1, 'emma.killenaull@srs.ac.uk'),
('a8003672', 'Edel', 'Rogers', 'CFO1BNN23', 1, 'edel.rogers@srs.ac.uk'),
('a8004620', 'Ross', 'Bell', 'CFO1BNN23', 1, 'ross.bell@srs.ac.uk'),
('a8004896', 'Carl', 'Ward', 'CFO1BNN23', 1, 'carl.ward@srs.ac.uk'),
('a8005178', 'Shona', 'Hill', 'CFO1BNN23', 1, 'shona.hill@srs.ac.uk'),
('a8005549', 'Laura', 'Buchanan', 'CFO1BNN23', 1, 'laura.buchanan@srs.ac.uk'),
('a8006433', 'Daniel', 'Garnett', 'CFO1BNN23', 1, 'daniel.garnett@srs.ac.uk'),
('a8007451', 'James', 'Ramshaw', 'CFO1BNN23', 1, 'james.ramshaw@srs.ac.uk'),
('a8007985', 'David', 'Archibald', 'CFO1BNN23', 1, 'david.archibald@srs.ac.uk'),
('a8008074', 'Jane', 'Gill', 'CFO1BNN23', 1, 'jane.gill@srs.ac.uk'),
('a8008312', 'Kyle William', 'Harrison', 'CFO1BNN23', 1, 'kyle.harrison@srs.ac.uk'),
('a8008314', 'Megan Amy', 'Ainsley', 'CFO1BNN23', 1, 'megan.ainsley@srs.ac.uk'),
('a8009652', 'Andrew Philip', 'Gibson', 'CFO1BNN23', 1, 'andrew.gibson@srs.ac.uk'),
('a8010125', 'Myran', 'Sherwood', 'CFO1BNN23', 1, 'myran.sherwood@srs.ac.uk'),
('a8010627', 'Michaela', 'Wilson', 'CFO1BNN23', 1, 'michaela.wilson@srs.ac.uk'),
('a8010838', 'Jamie Maurice', 'Drinkald', 'CFO1BNN23', 1, 'jamie.drinkald@srs.ac.uk'),
('a8010975', 'Cheryl Louise', 'Brook', 'CFO1BNN23', 1, 'cheryl.brook@srs.ac.uk'),
('a8011877', 'Matthew', 'Hardie', 'CFO1BNN23', 1, 'matthew.hardie@srs.ac.uk'),
('a8012238', 'Alex', 'Dickinson', 'CFO1BNN23', 1, 'alex.dickinson@srs.ac.uk'),
('a8012804', 'David', 'Mathews', 'CFO1BNN23', 1, 'david.mathews@srs.ac.uk'),
('a8013212', 'David Michael', 'Robinson', 'CFO1BNN23', 1, 'david.robinson@srs.ac.uk'),
('a8013213', 'Christopher Michael', 'Eyre', 'CFO1BNN23', 1, 'christopher.eyre@srs.ac.uk'),
('a8013953', 'Andrew Ian', 'Wang', 'CFO1BNN23', 1, 'andrew.wang@srs.ac.uk'),
('a8013968', 'Kayleigh', 'Foster', 'CFO1BNN23', 1, 'kayleigh.foster@srs.ac.uk'),
('a8014593', 'Ashleigh', 'Morrison', 'CFO1BNN23', 1, 'ashleigh.morrison@srs.ac.uk'),
('a8018306', 'James', 'Ord', 'CFO1BNN23', 1, 'james.ord@srs.ac.uk'),
('a8020449', 'Lucy Ethel', 'Sturm', 'CFO1BNN23', 1, 'lucy.sturm@srs.ac.uk'),
('a8020596', 'Karl Robert', 'Karuppanan', 'CFO1BNN23', 1, 'karl.karuppanan@srs.ac.uk'),
('a8023038', 'Andrew', 'Wollaston', 'CFO1BNN23', 1, 'andrew.wollaston@srs.ac.uk'),
('a8026240', 'Robbie', 'Briggs', 'CFO1BNN23', 1, 'robbie.briggs@srs.ac.uk'),
('a8027628', 'Henry William', 'Butler', 'CFO1BNN23', 1, 'henry.butler@srs.ac.uk'),
('a6010438', 'Junior', 'Bradbury', 'CFO1BNN23', 2, 'junior.bradbury@srs.ac.uk'),
('a7001592', 'Christopher', 'Rea', 'CFO1BNN23', 2, 'christopher.rea@srs.ac.uk'),
('a7002607', 'Mark', 'Alali', 'CFO1BNN23', 2, 'mark.alali@srs.ac.uk'),
('a7003428', 'Phillip David', 'Gilpin', 'CFO1BNN23', 2, 'phillip.gilpin@srs.ac.uk'),
('a7003997', 'Harry', 'Sturrock', 'CFO1BNN23', 2, 'harry.sturrock@srs.ac.uk'),
('a7004122', 'David Paul', 'Higgins', 'CFO1BNN23', 2, 'david.higgins@srs.ac.uk'),
('a7004688', 'Paul', 'Eakin', 'CFO1BNN23', 2, 'paul.eakin@srs.ac.uk'),
('a7006461', 'Niall', 'Rounthwaite', 'CFO1BNN23', 2, 'niall.rounthwaite@srs.ac.uk'),
('a7006478', 'David', 'Grewal', 'CFO1BNN23', 2, 'david.grewal@srs.ac.uk'),
('a7006483', 'Calum Duncan', 'Almond', 'CFO1BNN23', 2, 'calum.almond@srs.ac.uk'),
('a7006661', 'Jason Stuart', 'Wright', 'CFO1BNN23', 2, 'jason.wright@srs.ac.uk'),
('a7007444', 'Philip', 'Timms', 'CFO1BNN23', 2, 'philip.timms@srs.ac.uk'),
('a7007780', 'Megan', 'Blakely', 'CFO1BNN23', 2, 'megan.blakely@srs.ac.uk'),
('a7008010', 'Oliver', 'Papadimitriou', 'CFO1BNN23', 2, 'oliver.papadimitriou@srs.ac.uk'),
('a7009289', 'David', 'Borthwick', 'CFO1BNN23', 2, 'david.borthwick@srs.ac.uk'),
('a7009363', 'Phillip', 'McRoy', 'CFO1BNN23', 2, 'phillip.mcroy@srs.ac.uk'),
('a7009448', 'Dominic John', 'Kennedy', 'CFO1BNN23', 2, 'dominic.kennedy@srs.ac.uk'),
('a7009478', 'Benjamin Paul', 'Hall', 'CFO1BNN23', 2, 'benjamin.hall@srs.ac.uk'),
('a7009988', 'Victoria Leanne', 'Brown', 'CFO1BNN23', 2, 'victoria.brown@srs.ac.uk'),
('a7010757', 'John Timothy', 'Stott', 'CFO1BNN23', 2, 'john.stott@srs.ac.uk'),
('a7010998', 'Peter James', 'Ward', 'CFO1BNN23', 2, 'peter.ward@srs.ac.uk'),
('a7011396', 'Navid', 'Mahon', 'CFO1BNN23', 2, 'navid.mahon@srs.ac.uk'),
('a7011450', 'Gary James', 'Dodds', 'CFO1BNN23', 2, 'gary.dodds@srs.ac.uk'),
('a7012406', 'Gary Philip', 'Gribben', 'CFO1BNN23', 2, 'gary.gribben@srs.ac.uk'),
('a7012452', 'Gavin', 'Wood', 'CFO1BNN23', 2, 'gavin.wood@srs.ac.uk'),
('a7013768', 'Steven James', 'Storey', 'CFO1BNN23', 2, 'steven.storey@srs.ac.uk'),
('a7014107', 'Jonathan Alan', 'Stafford', 'CFO1BNN23', 2, 'jonathan.stafford@srs.ac.uk'),
('a7017266', 'Daniel', 'Robson', 'CFO1BNN23', 2, 'daniel.robson@srs.ac.uk'),
('a7018553', 'James', 'Warraich', 'CFO1BNN23', 2, 'james.warraich@srs.ac.uk'),
('a7021096', 'Chintan Kamlesh', 'Jedrzejczak', 'CFO1BNN23', 2, 'chintan.jedrzejczak@srs.ac.uk'),
('a7021606', 'Jason Thomas', 'Herdman', 'CFO1BNN23', 2, 'jason.herdman@srs.ac.uk'),
('a7028285', 'Lunja', 'Koh', 'CFO1BNN23', 2, 'lunja.koh@srs.ac.uk'),
('a8013842', 'Liam John', 'Coffey', 'CFO1BNN23', 2, 'liam.coffey@srs.ac.uk'),
('a5008171', 'James Edward', 'Taylor', 'CFO1BNN23', 3, 'james.taylor@srs.ac.uk'),
('a6001488', 'Ross', 'Reeves', 'CFO1BNN23', 3, 'ross.reeves@srs.ac.uk'),
('a6001904', 'Kimberley', 'Harrison', 'CFO1BNN23', 3, 'kimberley.harrison@srs.ac.uk'),
('a6003348', 'Richard Danial', 'Howett', 'CFO1BNN23', 3, 'richard.howett@srs.ac.uk'),
('a6004456', 'Peter', 'Woolcock', 'CFO1BNN23', 3, 'peter.woolcock@srs.ac.uk'),
('a6006567', 'Paul', 'Charlesworth', 'CFO1BNN23', 3, 'paul.charlesworth@srs.ac.uk'),
('a6007016', 'Jason Peter', 'Lindsay', 'CFO1BNN23', 3, 'jason.lindsay@srs.ac.uk'),
('a6008838', 'Peter', 'Hirst', 'CFO1BNN23', 3, 'peter.hirst@srs.ac.uk'),
('a6010331', 'Claire Elizabeth', 'Dzirutwe', 'CFO1BNN23', 3, 'claire.dzirutwe@srs.ac.uk'),
('a6011671', 'Andrew James', 'Moore', 'CFO1BNN23', 3, 'andrew.moore@srs.ac.uk'),
('a6012772', 'Zahsan', 'Dhillon', 'CFO1BNN23', 3, 'zahsan.dhillon@srs.ac.uk'),
('a6014426', 'Sophie', 'Black', 'CFO1BNN23', 3, 'sophie.black@srs.ac.uk'),
('a6015223', 'James Henry', 'Chakulya', 'CFO1BNN23', 3, 'james.chakulya@srs.ac.uk'),
('a6018586', 'Nicholas', 'Wong', 'CFO1BNN23', 3, 'nicholas.wong@srs.ac.uk'),
('a6020230', 'Ntokozo', 'Udoh', 'CFO1BNN23', 3, 'ntokozo.udoh@srs.ac.uk'),
('a6022284', 'Solomon Ntungamili', 'Malik', 'CFO1BNN23', 3, 'solomon.malik@srs.ac.uk'),
('a6024882', 'Kevin', 'Peel', 'CFO1BNN23', 3, 'kevin.peel@srs.ac.uk'),
('a5003096', 'Christopher David', 'Cook', 'CFO1BNN23', 4, 'christopher.cook@srs.ac.uk'),
('a5003215', 'Stuart John', 'Bales', 'CFO1BNN23', 4, 'stuart.bales@srs.ac.uk'),
('a5003891', 'Jonathan', 'Cowan', 'CFO1BNN23', 4, 'jonathan.cowan@srs.ac.uk'),
('a5004498', 'Mathew', 'Bailes', 'CFO1BNN23', 4, 'mathew.bailes@srs.ac.uk'),
('a5006305', 'Adam', 'Reece', 'CFO1BNN23', 4, 'adam.reece@srs.ac.uk'),
('a5008941', 'Jenny', 'Cooke', 'CFO1BNN23', 4, 'jenny.cooke@srs.ac.uk'),
('a5010687', 'Rachael', 'Newton', 'CFO1BNN23', 4, 'rachael.newton@srs.ac.uk'),
('a5011363', 'Michael', 'Brown', 'CFO1BNN23', 4, 'michael.brown@srs.ac.uk'),
('a5012692', 'Graeme', 'Shepherd', 'CFO1BNN23', 4, 'graeme.shepherd@srs.ac.uk'),
('a5013055', 'Scott', 'Siddiquee', 'CFO1BNN23', 4, 'scott.siddiquee@srs.ac.uk'),
('a5014446', 'Linden Richard', 'Hayes', 'CFO1BNN23', 4, 'linden.hayes@srs.ac.uk'),
('a5014629', 'Benjamin Jon', 'York', 'CFO1BNN23', 4, 'benjamin.york@srs.ac.uk'),
('a5019189', 'Simon', 'Lachenal', 'CFO1BNN23', 4, 'simon.lachenal@srs.ac.uk'),
('a6000272', 'Christopher John', 'Todhunter', 'CFO1BNN23', 4, 'christopher.todhunter@srs.ac.uk'),
('a6002160', 'Helen', 'Gulbahar', 'CFO1BNN23', 4, 'helen.gulbahar@srs.ac.uk'),
('a6007604', 'Robin', 'Wilson', 'CFO1BNN23', 4, 'robin.wilson@srs.ac.uk'),
('a6008593', 'Rajni', 'McPartlan', 'CFO1BNN23', 4, 'rajni.mcpartlan@srs.ac.uk'),
('a6015101', 'Michael John', 'Flynn', 'CFO1BNN23', 4, 'michael.flynn@srs.ac.uk'),
('a6021451', 'Nino', 'Cooper', 'CFO1BNN23', 4, 'nino.cooper@srs.ac.uk'),
('a6023877', 'Tawunrat', 'Matthew', 'CFO1BNN23', 4, 'tawunrat.matthew@srs.ac.uk'),
('a7018272', 'Rahimah', 'Xi', 'CFO1BNN23', 4, 'rahimah.xi@srs.ac.uk'),
('a5012169', 'Stuart', 'Crowther', 'CNT1BNN23', 1, 'stuart.crowther@srs.ac.uk'),
('a7005736', 'Efe', 'Duffy', 'CNT1BNN23', 1, 'efe.duffy@srs.ac.uk'),
('a7011352', 'Matthew Allan', 'Scott', 'CNT1BNN23', 1, 'matthew.scott@srs.ac.uk'),
('a7013691', 'Ajay', 'Crowther', 'CNT1BNN23', 1, 'ajay.crowther@srs.ac.uk'),
('a7026033', 'Colin', 'Manik', 'CNT1BNN23', 1, 'colin.manik@srs.ac.uk'),
('a7030162', 'Michael Alexander', 'Poshiya', 'CNT1BNN23', 1, 'michael.poshiya@srs.ac.uk'),
('a7031905', 'Hidri', 'Cunningham', 'CNT1BNN23', 1, 'hidri.cunningham@srs.ac.uk'),
('a8000838', 'Michael Joseph', 'Ferguson', 'CNT1BNN23', 1, 'michael.ferguson@srs.ac.uk'),
('a8002459', 'Callum', 'Royston', 'CNT1BNN23', 1, 'callum.royston@srs.ac.uk'),
('a8003326', 'Adam James', 'Atkinson', 'CNT1BNN23', 1, 'adam.atkinson@srs.ac.uk'),
('a8005633', 'Ioannis', 'Black', 'CNT1BNN23', 1, 'ioannis.black@srs.ac.uk'),
('a8006904', 'Antony', 'Carlin', 'CNT1BNN23', 1, 'antony.carlin@srs.ac.uk'),
('a8007322', 'Patryk', 'Wilson', 'CNT1BNN23', 1, 'patryk.wilson@srs.ac.uk'),
('a8007461', 'Gareth Luke', 'Fahey', 'CNT1BNN23', 1, 'gareth.fahey@srs.ac.uk'),
('a8008563', 'Christopher', 'Hutchinson', 'CNT1BNN23', 1, 'christopher.hutchinson@srs.ac.uk'),
('a8008572', 'David', 'Mason', 'CNT1BNN23', 1, 'david.mason@srs.ac.uk'),
('a8010331', 'Michael John', 'Meek', 'CNT1BNN23', 1, 'michael.meek@srs.ac.uk'),
('a8010475', 'Innocent', 'Johnston', 'CNT1BNN23', 1, 'innocent.johnston@srs.ac.uk'),
('a8012223', 'Marcin Adam', 'Blench', 'CNT1BNN23', 1, 'marcin.blench@srs.ac.uk'),
('a8012438', 'Michael', 'Walsh', 'CNT1BNN23', 1, 'michael.walsh@srs.ac.uk'),
('a8013394', 'Gavin Lee', 'Jobling', 'CNT1BNN23', 1, 'gavin.jobling@srs.ac.uk'),
('a8013901', 'Daniel', 'Burroughs', 'CNT1BNN23', 1, 'daniel.burroughs@srs.ac.uk'),
('a8013971', 'Marc', 'Lockey', 'CNT1BNN23', 1, 'marc.lockey@srs.ac.uk'),
('a8015474', 'Matthew', 'Bharatan', 'CNT1BNN23', 1, 'matthew.bharatan@srs.ac.uk'),
('a2911109', 'Pireh', 'Ridley', 'CNT1BNN23', 2, 'pireh.ridley@srs.ac.uk'),
('a4296988', 'Anthony James', 'Bughio', 'CNT1BNN23', 2, 'anthony.bughio@srs.ac.uk'),
('a5012530', 'Nitin', 'Reay', 'CNT1BNN23', 2, 'nitin.reay@srs.ac.uk'),
('a6011837', 'William Robert', 'Hall', 'CNT1BNN23', 2, 'william.hall@srs.ac.uk'),
('a7001110', 'Mark', 'Rayner', 'CNT1BNN23', 2, 'mark.rayner@srs.ac.uk'),
('a7009585', 'Jonathan', 'Trusty', 'CNT1BNN23', 2, 'jonathan.trusty@srs.ac.uk'),
('a7011074', 'Carl', 'Armstrong', 'CNT1BNN23', 2, 'carl.armstrong@srs.ac.uk'),
('a7012021', 'Jonathon Eaton', 'Twist', 'CNT1BNN23', 2, 'jonathon.twist@srs.ac.uk'),
('a7012223', 'Jonathan', 'Phillips', 'CNT1BNN23', 2, 'jonathan.phillips@srs.ac.uk'),
('a7013057', 'James', 'Harvey', 'CNT1BNN23', 2, 'james.harvey@srs.ac.uk'),
('a7018718', 'Bawo Stephen', 'Bell', 'CNT1BNN23', 2, 'bawo.bell@srs.ac.uk'),
('a7019089', 'Raphael Verront', 'Walker', 'CNT1BNN23', 2, 'raphael.walker@srs.ac.uk'),
('a7020694', 'Liam', 'Gill', 'CNT1BNN23', 2, 'liam.gill@srs.ac.uk'),
('a7023846', 'Suleman', 'Thompson', 'CNT1BNN23', 2, 'suleman.thompson@srs.ac.uk'),
('a8021334', 'Meng Poh', 'Leong', 'CNT1BNN23', 2, 'meng.leong@srs.ac.uk'),
('a6000928', 'Michael James', 'Williamson', 'CNT1BNN23', 3, 'michael.williamson@srs.ac.uk'),
('a6008291', 'Daniel', 'Storey', 'CNT1BNN23', 3, 'daniel.storey@srs.ac.uk'),
('a6009991', 'Andrew David', 'Siampanias', 'CNT1BNN23', 3, 'andrew.siampanias@srs.ac.uk'),
('a6014069', 'Jonathan Alan', 'Beaton', 'CNT1BNN23', 3, 'jonathan.beaton@srs.ac.uk'),
('a6018098', 'Philip', 'Lauder', 'CNT1BNN23', 3, 'philip.lauder@srs.ac.uk'),
('a6025944', 'Nicolas James', 'Sykes', 'CNT1BNN23', 3, 'nicolas.sykes@srs.ac.uk'),
('a0940059', 'Bo', 'Watson', 'CNT1BNN23', 4, 'bo.watson@srs.ac.uk'),
('a3253098', 'Martyn Andrew', 'Branch', 'CNT1BNN23', 4, 'martyn.branch@srs.ac.uk'),
('a4271060', 'Adam', 'Simonelli', 'CNT1BNN23', 4, 'adam.simonelli@srs.ac.uk'),
('a4319682', 'James', 'Chan', 'CNT1BNN23', 4, 'james.chan@srs.ac.uk'),
('a5004241', 'Geraint', 'Fosdike', 'CNT1BNN23', 4, 'geraint.fosdike@srs.ac.uk'),
('a5005936', 'Imran', 'Hinds', 'CNT1BNN23', 4, 'imran.hinds@srs.ac.uk'),
('a5005986', 'Liam', 'Barber', 'CNT1BNN23', 4, 'liam.barber@srs.ac.uk'),
('a5008837', 'Michael Thomas', 'Smillie', 'CNT1BNN23', 4, 'michael.smillie@srs.ac.uk'),
('a5009447', 'Richard Matthew', 'Buchanan', 'CNT1BNN23', 4, 'richard.buchanan@srs.ac.uk'),
('a5010936', 'Darren', 'Stephenson', 'CNT1BNN23', 4, 'darren.stephenson@srs.ac.uk'),
('a5010940', 'Martin', 'Cummings', 'CNT1BNN23', 4, 'martin.cummings@srs.ac.uk'),
('a5015872', 'Narciso', 'Lule', 'CNT1BNN23', 4, 'narciso.lule@srs.ac.uk'),
('a5016284', 'Christopher', 'Bell', 'CNT1BNN23', 4, 'christopher.bell@srs.ac.uk'),
('a5016469', 'Jordan', 'Glazier', 'CNT1BNN23', 4, 'jordan.glazier@srs.ac.uk'),
('a5017483', 'Kyle', 'Hulme', 'CNT1BNN23', 4, 'kyle.hulme@srs.ac.uk'),
('a5018106', 'Salim Stewart', 'Smith', 'CNT1BNN23', 4, 'salim.smith@srs.ac.uk'),
('a5022966', 'Mark Samuel', 'McDermott', 'CNT1BNN23', 4, 'mark.mcdermott@srs.ac.uk'),
('a5023345', 'James Paul', 'Antoniou', 'CNT1BNN23', 4, 'james.antoniou@srs.ac.uk'),
('a5027141', 'Paul', 'Laskey', 'CNT1BNN23', 4, 'paul.laskey@srs.ac.uk'),
('a6000282', 'Dominic James', 'Van Bergen', 'CNT1BNN23', 4, 'dominic.van bergen@srs.ac.uk'),
('a6006176', 'Christopher', 'Wiles', 'CNT1BNN23', 4, 'christopher.wiles@srs.ac.uk'),
('a6009247', 'Heung Ngai', 'Albert', 'CNT1BNN23', 4, 'heung.albert@srs.ac.uk'),
('a6009935', 'Christopher David', 'Hoile', 'CNT1BNN23', 4, 'christopher.hoile@srs.ac.uk'),
('a6011847', 'Adam', 'George', 'CNT1BNN23', 4, 'adam.george@srs.ac.uk'),
('a6017728', 'Alexandros', 'Ameen', 'CNT1BNN23', 4, 'alexandros.ameen@srs.ac.uk'),
('a6021176', 'Athanasios', 'Sparkes', 'CNT1BNN23', 4, 'athanasios.sparkes@srs.ac.uk'),
('a6024338', 'Jack', 'Wu', 'CNT1BNN23', 4, 'jack.wu@srs.ac.uk'),
('a7028922', 'Shu Yiing', 'Ten', 'CNT1BNN23', 4, 'shu.ten@srs.ac.uk'),
('a8021768', 'David Stephen', 'Golchev', 'CNT1BNN23', 4, 'david.golchev@srs.ac.uk'),
('a7004431', 'Philip Andrew', 'Mardani', 'CNT5BNN01', 1, 'philip.mardani@srs.ac.uk'),
('a8003546', 'Lee Stephen', 'Devlin', 'CNT5BNN01', 1, 'lee.devlin@srs.ac.uk'),
('a8006399', 'Pavan', 'Whelan', 'CNT5BNN01', 1, 'pavan.whelan@srs.ac.uk'),
('a8010694', 'Raj Krishna', 'Pickup', 'CNT5BNN01', 1, 'raj.pickup@srs.ac.uk'),
('a8014255', 'Richard', 'Perrin', 'CNT5BNN01', 1, 'richard.perrin@srs.ac.uk'),
('a8015344', 'Mark', 'Carney', 'CNT5BNN01', 1, 'mark.carney@srs.ac.uk'),
('a8026989', 'Ioannis', 'Ndlovu', 'CNT5BNN01', 1, 'ioannis.ndlovu@srs.ac.uk'),
('a1318272', 'Stefanos', 'Maughan', 'CNT6BNN01', 1, 'stefanos.maughan@srs.ac.uk'),
('a2919274', 'Muhammad', 'Aleke', 'CNT6BNN01', 1, 'muhammad.aleke@srs.ac.uk'),
('a4422908', 'Dong', 'Fish', 'CNT6BNN01', 1, 'dong.fish@srs.ac.uk'),
('a5014397', 'Christopher Geoffrey', 'Miltiadou', 'CNT6BNN01', 1, 'christopher.miltiadou@srs.ac.uk'),
('a5015019', 'Craig', 'Ryan', 'CNT6BNN01', 1, 'craig.ryan@srs.ac.uk'),
('a7018486', 'Muhammad Javed', 'Ramsey', 'CNT6BNN01', 1, 'muhammad.ramsey@srs.ac.uk'),
('a7021263', 'Bo', 'Fam', 'CNT6BNN01', 1, 'bo.fam@srs.ac.uk'),
('a7021501', 'Mohammad', 'Seidenberg', 'CNT6BNN01', 1, 'mohammad.seidenberg@srs.ac.uk'),
('a7022897', 'Sampath Kumar', 'Vinokur', 'CNT6BNN01', 1, 'sampath.vinokur@srs.ac.uk'),
('a7028048', 'Abhishek', 'Gaibee', 'CNT6BNN01', 1, 'abhishek.gaibee@srs.ac.uk'),
('a7028230', 'Naresh Kumar', 'Dunning', 'CNT6BNN01', 1, 'naresh.dunning@srs.ac.uk'),
('a7030694', 'Afsar', 'Younger', 'CNT6BNN01', 1, 'afsar.younger@srs.ac.uk'),
('a7031692', 'Koteshwar Reddy', 'Tanniru', 'CNT6BNN01', 1, 'koteshwar.tanniru@srs.ac.uk'),
('a7033068', 'Venkata Kalyan', 'Desu', 'CNT6BNN01', 1, 'venkata.desu@srs.ac.uk'),
('a8015659', 'Yan', 'Jiao', 'CNT6BNN01', 1, 'yan.jiao@srs.ac.uk'),
('a8017109', 'Ahmed Salman', 'Joshi', 'CNT6BNN01', 1, 'ahmed.joshi@srs.ac.uk'),
('a8020131', 'Alalibo Emmanuel', 'Darragh', 'CNT6BNN01', 1, 'alalibo.darragh@srs.ac.uk'),
('a8022886', 'Rahul', 'Ragidi', 'CNT6BNN01', 1, 'rahul.ragidi@srs.ac.uk'),
('a8022944', 'Prashanth Kumar', 'O''Neill', 'CNT6BNN01', 1, 'prashanth.o''neill@srs.ac.uk'),
('a8023665', 'Kiran Kumar', 'Lesmond', 'CNT6BNN01', 1, 'kiran.lesmond@srs.ac.uk'),
('a8023820', 'Ioannis', 'Hanlon', 'CNT6BNN01', 1, 'ioannis.hanlon@srs.ac.uk'),
('a8023992', 'George', 'Dixon', 'CNT6BNN01', 1, 'george.dixon@srs.ac.uk'),
('a8024097', 'Non', 'Chan', 'CNT6BNN01', 1, 'non.chan@srs.ac.uk'),
('a8024618', 'Manikanteswara Rao', 'Ekjirapong', 'CNT6BNN01', 1, 'manikanteswara.ekjirapong@srs.ac.uk'),
('a8024841', 'Sainath', 'Uppugandla', 'CNT6BNN01', 1, 'sainath.uppugandla@srs.ac.uk'),
('a8025034', 'Rupesh', 'Jenkins', 'CNT6BNN01', 1, 'rupesh.jenkins@srs.ac.uk'),
('a8025509', 'Sri Soumitra', 'Goode', 'CNT6BNN01', 1, 'sri.goode@srs.ac.uk'),
('a8025515', 'Dinesh', 'Walsh', 'CNT6BNN01', 1, 'dinesh.walsh@srs.ac.uk'),
('a8025571', 'Vinodh', 'Ibrahim', 'CNT6BNN01', 1, 'vinodh.ibrahim@srs.ac.uk'),
('a8026090', 'Praveen Kumar', 'Handa', 'CNT6BNN01', 1, 'praveen.handa@srs.ac.uk'),
('a8026346', 'Kiran Kumar', 'Mohd Nor', 'CNT6BNN01', 1, 'kiran.mohd nor@srs.ac.uk'),
('a8026367', 'Mallikarjun', 'Wong', 'CNT6BNN01', 1, 'mallikarjun.wong@srs.ac.uk'),
('a8026613', 'Abhilash Reddy', 'Gutta', 'CNT6BNN01', 1, 'abhilash.gutta@srs.ac.uk'),
('a7027842', 'Prashanth Rao', 'Riddell', 'CNT6BNN01', 2, 'prashanth.riddell@srs.ac.uk'),
('a4921756', 'Cheng Cheng', 'Fenwick', 'CNT6FNN01', 1, 'cheng.fenwick@srs.ac.uk'),
('a5018164', 'Abdul Raheem', 'Briggs', 'CNT6FNN01', 1, 'abdul.briggs@srs.ac.uk'),
('a6026238', 'Yasir', 'Chesworth', 'CNT6FNN01', 1, 'yasir.chesworth@srs.ac.uk'),
('a6030194', 'Karthikeyan', 'Cosgrove', 'CNT6FNN01', 1, 'karthikeyan.cosgrove@srs.ac.uk'),
('a6032585', 'Bangar Reddy', 'Talla', 'CNT6FNN01', 1, 'bangar.talla@srs.ac.uk'),
('a6032637', 'Harichandra Prasad', 'Aluri', 'CNT6FNN01', 1, 'harichandra.aluri@srs.ac.uk'),
('a7018875', 'Mohanraj', 'Adams', 'CNT6FNN01', 1, 'mohanraj.adams@srs.ac.uk'),
('a7024786', 'Naga Prabhu', 'Watson', 'CNT6FNN01', 1, 'naga.watson@srs.ac.uk'),
('a7027767', 'Naveen Kumar', 'Pasha', 'CNT6FNN01', 1, 'naveen.pasha@srs.ac.uk'),
('a7029540', 'Amit', 'Lorenzi', 'CNT6FNN01', 1, 'amit.lorenzi@srs.ac.uk'),
('a7029675', 'Taral', 'Punton', 'CNT6FNN01', 1, 'taral.punton@srs.ac.uk'),
('a7029704', 'Khawar', 'Aroomchootee', 'CNT6FNN01', 1, 'khawar.aroomchootee@srs.ac.uk'),
('a7030118', 'Ravikishore', 'Song', 'CNT6FNN01', 1, 'ravikishore.song@srs.ac.uk'),
('a7030730', 'Olajide Olasimbo', 'Li', 'CNT6FNN01', 1, 'olajide.li@srs.ac.uk'),
('a7030795', 'Kaleswar', 'Kasa', 'CNT6FNN01', 1, 'kaleswar.kasa@srs.ac.uk'),
('a7030798', 'Venkatesh', 'Vanam', 'CNT6FNN01', 1, 'venkatesh.vanam@srs.ac.uk'),
('a7030810', 'Khaja Numan', 'Somayajula', 'CNT6FNN01', 1, 'khaja.somayajula@srs.ac.uk'),
('a7030813', 'Ubed Ullah', 'Azam', 'CNT6FNN01', 1, 'ubed.azam@srs.ac.uk'),
('a7030826', 'Susmita', 'Shareef', 'CNT6FNN01', 1, 'susmita.shareef@srs.ac.uk'),
('a7030840', 'Deepika', 'Vankudre', 'CNT6FNN01', 1, 'deepika.vankudre@srs.ac.uk'),
('a7030925', 'Sampath', 'Kosaraju', 'CNT6FNN01', 1, 'sampath.kosaraju@srs.ac.uk'),
('a7031303', 'Gopi', 'Tetala', 'CNT6FNN01', 1, 'gopi.tetala@srs.ac.uk'),
('a7032149', 'Venkatesh', 'Waterhouse', 'CNT6FNN01', 1, 'venkatesh.waterhouse@srs.ac.uk'),
('a7032155', 'Nirmal Kumar', 'Williams', 'CNT6FNN01', 1, 'nirmal.williams@srs.ac.uk'),
('a7033067', 'Venkata Gireesh', 'Potter', 'CNT6FNN01', 1, 'venkata.potter@srs.ac.uk'),
('a8017104', 'Jian', 'Lau', 'CNT6FNN01', 1, 'jian.lau@srs.ac.uk'),
('a8024889', 'Panagiotis Ioannis', 'Prytherch', 'CNT6FNN01', 1, 'panagiotis.prytherch@srs.ac.uk'),
('a8025090', 'Sharvendiran', 'Twist', 'CNT6FNN01', 1, 'sharvendiran.twist@srs.ac.uk'),
('a8029724', 'Ganesh Kumar', 'Nowak', 'CNT6FNN01', 1, 'ganesh.nowak@srs.ac.uk'),
('a8030660', 'Hashem', 'Chan', 'CNT6FNN01', 1, 'hashem.chan@srs.ac.uk'),
('a8031012', 'Muhammad', 'Intha', 'CNT6FNN01', 1, 'muhammad.intha@srs.ac.uk'),
('a8031318', 'Vakeesan', 'Jones', 'CNT6FNN01', 1, 'vakeesan.jones@srs.ac.uk'),
('a8031542', 'Mordecai', 'James', 'CNT6FNN01', 1, 'mordecai.james@srs.ac.uk'),
('a8031919', 'Shaji', 'Wan Ismail', 'CNT6FNN01', 1, 'shaji.wan ismail@srs.ac.uk'),
('a8032113', 'Siva Anil', 'Tubbs', 'CNT6FNN01', 1, 'siva.tubbs@srs.ac.uk'),
('a8032115', 'Promise', 'Atluri', 'CNT6FNN01', 1, 'promise.atluri@srs.ac.uk'),
('a8032167', 'Pradeep', 'Tandra', 'CNT6FNN01', 1, 'pradeep.tandra@srs.ac.uk'),
('a8032513', 'Krishna Murthy', 'Gillfillan', 'CNT6FNN01', 1, 'krishna.gillfillan@srs.ac.uk'),
('a8032641', 'Hareeth Goura', 'Bollampally', 'CNT6FNN01', 1, 'hareeth.bollampally@srs.ac.uk'),
('a8032656', 'Krishna Chaitanya', 'Muttevi', 'CNT6FNN01', 1, 'krishna.muttevi@srs.ac.uk'),
('a8032784', 'Zhenlei', 'Sutton-Bardsley', 'CNT6FNN01', 1, 'zhenlei.sutton-bardsley@srs.ac.uk'),
('a8032865', 'Tuhin', 'Sethi', 'CNT6FNN01', 1, 'tuhin.sethi@srs.ac.uk'),
('a8032867', 'Aravind Kumar', 'Dutta', 'CNT6FNN01', 1, 'aravind.dutta@srs.ac.uk'),
('a8032878', 'Kapil', 'Jacketti Pratap', 'CNT6FNN01', 1, 'kapil.jacketti pratap@srs.ac.uk'),
('a8032903', 'Anusha', 'Velugula', 'CNT6FNN01', 1, 'anusha.velugula@srs.ac.uk'),
('a8034127', 'Kirk', 'Mahmud', 'CNT6FNN01', 1, 'kirk.mahmud@srs.ac.uk'),
('a1217297', 'Sebastian Peter', 'Larsen', 'COM6BNN31', 3, 'sebastian.larsen@srs.ac.uk'),
('93408109', 'Nigel Philip', 'Creaby-Attwood', 'COM6BNN31', 3, 'nigel.creaby-attwood@srs.ac.uk'),
('a6022750', 'Paul', 'James', 'DFO6BNN31', 1, 'paul.james@srs.ac.uk'),
('a7027638', 'Keith', 'Alpine', 'DFO6BNN31', 1, 'keith.alpine@srs.ac.uk'),
('a6019805', 'Simon Dean', 'Ronan', 'ETH1BNN23', 1, 'simon.ronan@srs.ac.uk'),
('a7015103', 'Jonathan', 'Fenwick', 'ETH1BNN23', 1, 'jonathan.fenwick@srs.ac.uk'),
('a7031057', 'Elliott', 'Conley-Bradford', 'ETH1BNN23', 1, 'elliott.conley-bradford@srs.ac.uk'),
('a7031189', 'Luke', 'Grieve', 'ETH1BNN23', 1, 'luke.grieve@srs.ac.uk'),
('a8001692', 'Lee Thurston', 'Bottomley', 'ETH1BNN23', 1, 'lee.bottomley@srs.ac.uk'),
('a8002160', 'Bradley', 'Hillan', 'ETH1BNN23', 1, 'bradley.hillan@srs.ac.uk'),
('a8002346', 'Alastair Paul', 'Jones', 'ETH1BNN23', 1, 'alastair.jones@srs.ac.uk'),
('a8002785', 'Craig', 'Wood', 'ETH1BNN23', 1, 'craig.wood@srs.ac.uk'),
('a8006048', 'Simon', 'Walker', 'ETH1BNN23', 1, 'simon.walker@srs.ac.uk'),
('a8006077', 'Glyn Francis', 'Taylor', 'ETH1BNN23', 1, 'glyn.taylor@srs.ac.uk'),
('a8006541', 'Daniel James', 'Walker', 'ETH1BNN23', 1, 'daniel.walker@srs.ac.uk'),
('a8007702', 'Jonathan', 'Harrigan', 'ETH1BNN23', 1, 'jonathan.harrigan@srs.ac.uk'),
('a8011858', 'David', 'More', 'ETH1BNN23', 1, 'david.more@srs.ac.uk'),
('a8013268', 'Joshua William', 'Lilley', 'ETH1BNN23', 1, 'joshua.lilley@srs.ac.uk'),
('a8014732', 'Dan', 'Cable', 'ETH1BNN23', 1, 'dan.cable@srs.ac.uk'),
('a8025774', 'Natalee', 'Hall', 'ETH1BNN23', 1, 'natalee.hall@srs.ac.uk'),
('a8026254', 'Matthew Nicholas', 'McFarlane', 'ETH1BNN23', 1, 'matthew.mcfarlane@srs.ac.uk'),
('a8026309', 'Rafal', 'Stebbings', 'ETH1BNN23', 1, 'rafal.stebbings@srs.ac.uk'),
('a8026925', 'Ryan Luke', 'Islam', 'ETH1BNN23', 1, 'ryan.islam@srs.ac.uk'),
('a6034912', 'Timothy Andrew', 'Yuan', 'MUC1BMK01', 3, 'timothy.yuan@srs.ac.uk'),
('a7028093', 'Martina', 'Walshe', 'MUC1BMK01', 3, 'martina.walshe@srs.ac.uk'),
('a7028125', 'Daniel Keng', 'Ch''ng', 'MUC1BMK01', 3, 'daniel.ch''ng@srs.ac.uk'),
('a6034095', 'Amos Thuto', 'Riduwan', 'MUC1FMK01', 2, 'amos.riduwan@srs.ac.uk'),
('a6034100', 'Killian Rose', 'Keharara', 'MUC1FMK01', 2, 'killian.keharara@srs.ac.uk'),
('a7033927', 'Abdelrazig', 'Burrow', 'MUC1FMK01', 2, 'abdelrazig.burrow@srs.ac.uk'),
('a6034094', 'Noorzilatul Akmar', 'Mpinyane', 'MUC1FMK01', 3, 'noorzilatul.mpinyane@srs.ac.uk'),
('a6034097', 'Kagiso', 'Badisang', 'MUC1FMK01', 3, 'kagiso.badisang@srs.ac.uk'),
('a6034098', 'Yao Loong', 'Gaolebe', 'MUC1FMK01', 3, 'yao.gaolebe@srs.ac.uk'),
('a6034099', 'Moses Zane', 'Oh', 'MUC1FMK01', 3, 'moses.oh@srs.ac.uk');