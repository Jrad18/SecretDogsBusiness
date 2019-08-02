CREATE TABLE user(
id INT NOT NULL auto_increment,
email VARCHAR(255) NOT NULL,
first VARCHAR(255) NOT NULL,
last VARCHAR(255) NOT NULL,
password_hash VARCHAR(1024) NULL,
PRIMARY KEY (id)
);

CREATE TABLE session(
id INT NOT NULL auto_increment,
location TEXT NOT NULL,
address TEXT NOT NULL,
dow VARCHAR(127) NOT NULL,
time varchar(127) NOT NULL,
commencement_date datetime NOT NULL,
contact text NOT NULL,
contact_number INT NULL,
run_time INT NOT NULL,
cost TEXT NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO user (email, first, last, password_hash) values (alan, Alan, Shepherd, $2y$13$noz0hdNHQcdcuoerRi9Eu.fyabgaMQ3ccRoUE8IifODvxskcYaP6S);
