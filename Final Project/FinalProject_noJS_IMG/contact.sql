DROP TABLE IF EXISTS contact;
CREATE TABLE contact (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(32) DEFAULT NULL,
email VARCHAR(32) DEFAULT NULL,
message VARCHAR(1000) DEFAULT NULL,
year INT NOT NULL,
major VARCHAR(32) DEFAULT NULL,
school_notColby VARCHAR(32) DEFAULT NULL
);


INSERT INTO contact (name, email, message, year, major, school_notColby) VALUES
("Tony Karalekas", "ajkaralekas@gmail.com", "Hello MariaDB, this is simply a test", "2018", "Economics", " ");


