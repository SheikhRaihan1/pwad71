

-- ============================
--  SQL COMMANDS DEMONSTRATION
-- ============================

-- DML (Data Manipulation Language)
-- DDL (Data Definition Language)
-- DCL (Data Control Language)
-- TCL (Transaction Control Language)
-- DQL (Data Query Language)




-- ***************
-- 1. DDL Commands
-- ***************
-- Create Database
CREATE DATABASE demo_db;

-- Use the Database
USE demo_db;

-- Create Table
CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10,2)
);

-- Alter Table
ALTER TABLE employees ADD email VARCHAR(100);

-- Drop Column
ALTER TABLE employees DROP COLUMN email;

-- Rename Column
ALTER TABLE students CHANGE result grade VARCHAR(50);
ALTER TABLE students RENAME COLUMN result TO grade; --mysql 8+

-- Rename Table
ALTER TABLE employees RENAME TO staff;

-- Drop Table
DROP TABLE IF EXISTS staff;

-- Drop Database
-- DROP DATABASE demo_db;

-- ***************
-- 2. DML Commands
-- ***************
-- Insert Data
INSERT INTO employees (name, department, salary)
VALUES ('John Doe', 'IT', 55000.00),
       ('Jane Smith', 'HR', 45000.00);

-- Update Data
UPDATE employees SET salary = 60000.00 WHERE name = 'John Doe';

-- Delete Data
DELETE FROM employees WHERE name = 'Jane Smith';

-- ***************
-- 3. DQL Command
-- ***************
-- Select Data
SELECT * FROM employees;
SELECT name, salary FROM employees WHERE department = 'IT';

-- ***************
-- 4. TCL Commands
-- ***************
-- Start Transaction
START TRANSACTION;

UPDATE employees SET salary = 70000.00 WHERE name = 'John Doe';

-- Commit changes
COMMIT;

-- Rollback example (revert changes)
-- ROLLBACK;

-- ***************
-- 5. DCL Commands
-- ***************
-- Create User
CREATE USER 'new_user'@'localhost' IDENTIFIED BY 'password123';

-- Grant Privileges
GRANT SELECT, INSERT ON demo_db.* TO 'new_user'@'localhost';
GRANT ALL PRIVILEGES ON demo_db.* TO 'new_user'@'localhost';

-- Revoke Privileges
REVOKE INSERT ON demo_db.* FROM 'new_user'@'localhost';

-- Show Grants
SHOW GRANTS FOR 'new_user'@'localhost';



SELECT * FROM students;
SELECT DISTINCT class FROM students;
SELECT name, age FROM students WHERE age > 18;
SELECT class, COUNT(*) FROM students GROUP BY class HAVING COUNT(*) > 2;
SELECT * FROM students ORDER BY age DESC LIMIT 5 OFFSET 2;



SELECT * FROM students WHERE age BETWEEN 18 AND 25;
SELECT * FROM students WHERE name LIKE 'R%';
SELECT * FROM students WHERE age IN (18, 20, 22);
SELECT * FROM students WHERE email IS NULL;
SELECT * FROM students WHERE NOT age = 18;
SELECT * FROM students WHERE age > 18 AND class = '10';



-- ===== Aggregate =====
SELECT COUNT(*) FROM students;
SELECT AVG(age) FROM students;
SELECT MAX(age), MIN(age) FROM students;
SELECT SUM(age) FROM students;



-- VIEW
CREATE VIEW teen_students AS 
SELECT * FROM students WHERE age BETWEEN 13 AND 19;
DROP VIEW teen_students;



-- export database backup;
mysqldump -u root -p batch71>E:\myfile\mybackup2.sql
-- import database; 
mysql -u root -p batch71<E:\mybackup2.sql


create database batch71;
drop database batch71;
SHOW databases;
use batch71; 
show tables;
describe table_name;

alter table employies rename to workers;
alter table workers add column designation varchar(50);
alter table workers drop column designation;
alter table workers change name  firstName varchar(100);

create table students(
    id int primary key auto_increment, 
    name varchar(255),
    email varchar(100),
    created_at datetime,
    updated_at datetime 
);

create table employies(
    id int primary key auto_increment,
    name varchar(100)
);

CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    designation VARCHAR(50),
    department VARCHAR(50),
    basic_salary DECIMAL(10,2),
    sales_amount DECIMAL(10,2),
    commission_rate DECIMAL(5,2), 
    promotion_date DATE,
    joining_date DATE
);


INSERT INTO employees
(name, designation, department, basic_salary, sales_amount, commission_rate, promotion_date, joining_date)
VALUES
('Rahim', 'Sales Executive', 'Sales', 25000, 100000, 5, '2024-06-01', '2022-01-10'),
('Karim', 'Sales Executive', 'Sales', 27000, 120000, 4, '2025-01-15', '2021-03-20'),
('Hasan', 'Senior Executive', 'Sales', 35000, 150000, 6, '2023-12-10', '2020-07-12'),
('Jamal', 'Manager', 'Sales', 50000, 250000, 3, '2022-08-20', '2018-05-05'),
('Rina', 'Sales Executive', 'Sales', 26000, 90000, 5, '2025-03-01', '2023-02-14'),
('Nusrat', 'Assistant Manager', 'Marketing', 40000, 180000, 4, '2024-09-01', '2021-11-11'),
('Sakib', 'Manager', 'Marketing', 55000, 300000, 2, '2023-01-01', '2019-06-18'),
('Tanvir', 'Senior Executive', 'Sales', 33000, 130000, 5, '2024-05-12', '2020-09-25'),
('Mim', 'Sales Executive', 'Sales', 24000, 80000, 6, '2025-04-01', '2024-01-01'),
('Arafat', 'Director', 'Sales', 80000, 500000, 1, '2021-06-01', '2015-03-15');

