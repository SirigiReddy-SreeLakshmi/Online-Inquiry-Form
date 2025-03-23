CREATE DATABASE database1;

USE database1;

CREATE TABLE online_inquiry (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    gender ENUM('Male', 'Female', 'Other'),
    dob DATE,
    city VARCHAR(100),
    state VARCHAR(100),
    mobile VARCHAR(15),
    email VARCHAR(150) UNIQUE,
    course_name VARCHAR(150),
    stream VARCHAR(150)
);
