CREATE DATABASE Trucorp;

USE Trucorp;

CREATE TABLE users(id CHAR (5) PRIMARY KEY, nama VARCHAR(20), kantor VARCHAR(20) 
CHECK (kantor like 'Pusat' or kantor like 'Cabang'));

INSERT INTO users VALUES ('001','Bryan','Pusat');
INSERT INTO users VALUES ('002','Satyamulya','Cabang');
