
DROP DATABASE IF EXISTS DuelingDecisions;

CREATE DATABASE DuelingDecisions;

USE DuelingDecisions;

CREATE TABLE user (
user_id INT auto_increment PRIMARY KEY,
user_name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password char(55) NOT NULL,
first_name varchar(255) NOT NULL,
last_name varchar(255) NOT NULL, 
datetime_added datetime NOT NULL 

);

INSERT INTO user (user_name, email, password, first_name, last_name) VALUES ('garretttaco', 'garretttacoronte@gmail.com', 'myrealpassword123', 'garrett', 'tacoronte');
INSERT INTO user (user_name, email, password, first_name, last_name) VALUES ('imaboss', 'bossman@gmail.com', 'lezdual123', 'boss', 'man');


CREATE TABLE choice (
choice_id INT auto_increment PRIMARY KEY,
category_id INT NOT NULL,
user_id INT NOT NULL,
details varchar(255) NOT NULL,
title varchar(255) NOT NULL

);

INSERT INTO choice (title, details) VALUES ('Mc\'Donalds', 'Best burgers on the planet');
INSERT INTO choice (title, details) VALUES ('Burger King', 'Best burgers on the planet');

CREATE TABLE category (
category_id INT auto_increment PRIMARY KEY,
category_name varchar(255) NOT NULL

);




