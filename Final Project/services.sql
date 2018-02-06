DROP TABLE IF EXISTS services;
CREATE TABLE services (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(32) DEFAULT NULL,
email VARCHAR(32) DEFAULT NULL,
discipline VARCHAR(32) DEFAULT NULL,
skill VARCHAR(1000) DEFAULT NULL
);


INSERT INTO services (name, email, discipline, skill) VALUES
("Tony Karalekas", "ajkaralekas@gmail.com", "Art", "Painting"),
("Jim James", "email123@gmail.com", "Business", "Valuations"),
("Joe Jonas", "email123@gmail.com", "Computer Science", "SQL"),
("Nick Jonas", "email123@gmail.com", "Computer Science", "Java, JQuery"),
("Justin Beiber", "email123@gmail.com", "Computer Science", "HTML"),
("Miley Cyrus", "email123@gmail.com", "Computer Science", "Python"),
("Tom Brady", "email123@gmail.com", "Economics", "Macro, Micro"),
("Rhianna", "email123@gmail.com", "Environment", "Sustainability"),
("Zayn", "email123@gmail.com", "Finance", "Stock Pitches"),
("Kanye West", "email123@gmail.com", "Government", "Debate"),
("Homer Simpson", "email123@gmail.com", "Leadership", "Orgnization"),
("Pickle Rick", "email123@gmail.com", "Microsoft Suite", "Excel"),
("Diplo", "email123@gmail.com", "Science", "Biology"),
("John Mayer", "email123@gmail.com", "Speaking", "Confidence"),
("Peter Griffin", "email123@gmail.com", "Other", "Laundry");
