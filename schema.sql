
DROP DATABASE IF EXISTS dueling_decisions;

CREATE DATABASE dueling_decisions;

USE dueling_decisions;

CREATE TABLE user (
user_id INT auto_increment PRIMARY KEY,
username varchar(255),
email varchar(255),
password char(255),
remember_token varchar(255),
first_name varchar(255),
last_name varchar(255), 
created_at datetime,
updated_at datetime 

);



INSERT INTO user (username, email, password, first_name, last_name, created_at, updated_at)
VALUES ('garretttaco', 'garretttacoronte@gmail.com', '', 'garrett', 'tacoronte', NOW(), NOW());
INSERT INTO user (username, email, password, first_name, last_name, created_at, updated_at)
VALUES ('imaboss', 'bossman@gmail.com', '', 'boss', 'man', NOW(), NOW());

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
INSERT INTO choice (category_id, user_id, title, details) VALUES ('2', '1', 'Hawaii', 'Best burgers on the planet');
INSERT INTO choice (category_id, user_id, title, details) VALUES ('2', '1', 'Cozumel', 'Best burgers on the planet');
INSERT INTO choice (category_id, user_id, title, details) VALUES ('3', '1', 'Lazer Tag', 'Best burgers on the planet');
INSERT INTO choice (category_id, user_id, title, details) VALUES ('3', '1', 'Bowling', 'Best burgers on the planet');
INSERT INTO choice (category_id, user_id, title, details) VALUES ('4', '1', 'MacBook', 'Best burgers on the planet');


CREATE TABLE user_choice_feature (
choice_feature_id INT auto_increment PRIMARY KEY,
choice_id INT NOT NULL,
is_positive INT NOT NULL,
rating INT NOT NULL,
description varchar(255) NOT NULL
);

INSERT INTO user_choice_feature (choice_id, is_positive, rating, description)VALUES (1, 1, '5', 'Best fries!');
INSERT INTO user_choice_feature (choice_id, is_positive, rating, description) VALUES (2, 0, '1', 'Worst service');

CREATE TABLE contest (
contest_id INT auto_increment PRIMARY KEY,
user_id INT NOT NULL,
category_id INT NOT NULL,
datetime datetime NOT NULL,
current_round INT NOT NULL,
is_open INT NOT NULL,
winner_choice_id INT
);


INSERT INTO contest (user_id, category_id, datetime, current_round, is_open, winner_choice_id) VALUES (1, 2, NOW(), 6, 0, 1);
INSERT INTO contest (user_id, category_id, datetime, current_round, is_open, winner_choice_id) VALUES (2, 2, NOW(), 3, 0, 1);


CREATE TABLE contest_choice (
contest_id INT NOT NULL,
round INT NOT NULL,
selected_choice_id INT NOT NULL,
eliminated_choice_id INT NOT NULL,
PRIMARY KEY (contest_id, round)
);

INSERT INTO contest_choice (contest_id, round, selected_choice_id, eliminated_choice_id) VALUES (1, 1, 1, 2);
INSERT INTO contest_choice (contest_id, round, selected_choice_id, eliminated_choice_id) VALUES (1, 2, 2, 3);

