-- use db_wsabates
CREATE TABLE ft_table (
	id INT NOT NULL AUTO_INCREMENT,
	login VARCHAR(11) DEFAULT 'toto' NOT NULL,
	groupe ENUM('staff', 'student', 'other') NOT NULL,
	date_de_creation DATE NOT NULL,
	PRIMARY KEY (id)
);
