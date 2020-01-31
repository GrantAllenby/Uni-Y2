# *** Create the table structure for the table p_category ***

DROP TABLE IF EXISTS `p_category`;
CREATE TABLE IF NOT EXISTS `p_category` (
  `categoryID` varchar(6) NOT NULL default '',
  `categoryName` varchar(30) default NULL,
  PRIMARY KEY  (`categoryID`)
);

# ***Insert record data for the table p_category ***

INSERT INTO p_category (categoryID, categoryName) VALUES
('c1', 'CD'),
('c2', 'DVD'),
('c3', 'Software');

# *** Create the table structure for the table products ***

DROP TABLE IF EXISTS `p_products`;
CREATE TABLE IF NOT EXISTS `p_products`
(
	`productCode` integer auto_increment,
	`productName`	varchar(50),
	`description` varchar(255),
	`categoryID` varchar(15),
	`price`	double(7, 2),
	PRIMARY KEY  (`productCode`)
);

# ***Insert record data for the table products ***

INSERT INTO p_products (productCode, productName, description, categoryID, price) VALUES
(1, 'I Love the 90s', 'All of your 90s favourites from the Ministry of Sound', 'c1', 8.99),
(2, 'Star Wars Rogue One', 'From Lucasfilm comes an epic adventure- Rogue One: A Star Wars Story. In a period of great conflict, a group of unlikely heroes band together on a desperate mission to steal the plans to the Death Star, the Empire\'s ultimate weapon of destruction.', 'c2', 10.00),
(3, 'Minecraft - Xbox One Edition', 'Take part in an epic adventure with a retro style. Create a house & / or a vast castle; your imagination is your key.', 'c3', 22.99);
