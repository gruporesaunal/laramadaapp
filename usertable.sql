create database appramada;
use appramada;
show tables;


DROP TABLE user;
CREATE TABLE user(
    id int NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    creation_date DATE DEFAULT NULL,
    PRIMARY KEY (id)
);


INSERT INTO user (email , password, name, role ) VALUES ("s@s", 123, "Santi", "admin");
INSERT INTO user (email , password, name, role ) VALUES ("u1", 123, "Pepe", "admin");
INSERT INTO user (email , password, name, role ) VALUES ("u2", 123, "Lau", "admin");
SHOW tables;
DESCRIBE user;
 
SELECT * FROM USER;