
DROP DATABASE IF EXISTS dueling_decisions;

CREATE DATABASE dueling_decisions;

USE dueling_decisions;

CREATE TABLE user (
user_id INT auto_increment PRIMARY KEY,
user_name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password char(55) NOT NULL,
first_name varchar(255) NOT NULL,
last_name varchar(255) NOT NULL, 
datetime_added datetime NOT NULL 

);


INSERT INTO user (user_name, email, password, first_name, last_name, datetime_added) VALUES ('garretttaco', 'garretttacoronte@gmail.com', 'myrealpassword123', 'garrett', 'tacoronte', NOW());
INSERT INTO user (user_name, email, password, first_name, last_name, datetime_added) VALUES ('imaboss', 'bossman@gmail.com', 'lezdual123', 'boss', 'man', NOW());

CREATE TABLE category (
category_id INT auto_increment PRIMARY KEY,
category_name varchar(255) NOT NULL
);

INSERT INTO category (category_name) VALUES ('Restaurants');
INSERT INTO category (category_name) VALUES ('Vacation Spots');
INSERT INTO category (category_name) VALUES ('Entertainment');
INSERT INTO category (category_name) VALUES ('Computers');

CREATE TABLE choice (
choice_id INT auto_increment PRIMARY KEY,
category_id INT NOT NULL,
user_id INT NOT NULL,
details varchar(255) NOT NULL,
title varchar(255) NOT NULL
);

INSERT INTO choice (category_id, user_id, title, details) VALUES ('1', '1', 'Mc\'Donalds', 'Best burgers on the planet');
INSERT INTO choice (category_id, user_id, title, details) VALUES ('1', '1', 'Burger King', 'Best burgers on the planet');


CREATE TABLE user_choice_feature (
choice_feature_id INT auto_increment PRIMARY KEY,
choice_id INT NOT NULL,
is_positive INT NOT NULL,
rating INT NOT NULL,
description varchar(255) NOT NULL
);

INSERT INTO user_choice_feature (is_positive, rating, description) VALUES (1, '5', 'Best fries!');
INSERT INTO user_choice_feature (is_positive, rating, description) VALUES (0, '1', 'Worst service');

CREATE TABLE contest (
contest_id INT auto_increment PRIMARY KEY,
user_id INT NOT NULL,
category_id INT NOT NULL,
datetime datetime NOT NULL,
current_round INT NOT NULL,
is_open INT NOT NULL
);


INSERT INTO contest (user_id, category_id, datetime, current_round, is_open) VALUES (1, 2, NOW(), 6, 0);
INSERT INTO contest (user_id, category_id, datetime, current_round, is_open) VALUES (2, 2, NOW(), 3, 1);


CREATE TABLE contest_choice (
contest_id INT NOT NULL,
choice_id INT NOT NULL,
round INT NOT NULL,
is_selected INT NOT NULL,
PRIMARY KEY (contest_id, choice_id)
);

INSERT INTO contest_choice (contest_id, choice_id, round, is_selected) VALUES (1, 2, 1, 1);
INSERT INTO contest_choice (contest_id, choice_id, round, is_selected) VALUES (1, 3, 2, 0);

