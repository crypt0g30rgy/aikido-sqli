CREATE DATABASE IF NOT EXISTS lab;

USE lab;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 password VARCHAR(50),
 role VARCHAR(50)
);

INSERT INTO users (username,password,role) VALUES
('admin','supersecret','admin'),
('user','password','user'),
('guest','guest','guest');

CREATE TABLE secrets (
 id INT AUTO_INCREMENT PRIMARY KEY,
 flag VARCHAR(100)
);

INSERT INTO secrets(flag) VALUES
('flag{basic_login_bypass}'),
('flag{union_sqli_success}'),
('flag{blind_sqli_master}');

CREATE TABLE fruit (

 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50),
 color VARCHAR(50),
 price INT

);

INSERT INTO fruit (name,color,price) VALUES

('apple','red',2),
('banana','yellow',1),
('orange','orange',3);