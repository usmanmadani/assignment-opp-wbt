-- Create the database
CREATE DATABASE lincoln_university;

-- Use the database
USE lincoln_university;

-- Create the table
CREATE TABLE complaints (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  course VARCHAR(255) NOT NULL,
  gender VARCHAR(255) NOT NULL,
  complainant VARCHAR(255) NOT NULL,
  date DATE NOT NULL,
  details TEXT NOT NULL,
  PRIMARY KEY (id)
);
