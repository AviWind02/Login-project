CREATE DATABASE dbname;

USE dbname;

CREATE TABLE accounts (
  user VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  phone_number VARCHAR(20) NOT NULL,
  PRIMARY KEY (user)
);
