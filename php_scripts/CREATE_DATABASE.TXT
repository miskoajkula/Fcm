CREATE DATABASE fcm;

USE fcm; 

CREATE TABLE users (
 id int(20) NOT NULL AUTO_INCREMENT,
 Token varchar(200) NOT NULL,
 PRIMARY KEY (id),
 UNIQUE KEY (Token)
);
