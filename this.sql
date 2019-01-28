CREATE DATABASE ICSITTER;
CREATE TABLE ICSITTER_user (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    lastname varchar(50) NOT NULL,
    username varchar(20) NOT NULL,
    email varchar(20) NOT NULL,
    password varchar(20) NOT NULL

);

CREATE TABLE ICSITTER_message (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userid int NOT NULL,
    msg varchar(250) NOT NULL,
    msg_date DATE NOT NULL,
    FOREIGN KEY (userid) REFERENCES ICSITTER_user(id)
);