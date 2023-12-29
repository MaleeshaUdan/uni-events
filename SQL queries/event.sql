CREATE DATABASE event;

CREATE TABLE photo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    event_type VARCHAR(50),
    event_category VARCHAR(50),
    event_date DATE,
    upload_date DATETIME NOT NULL
);

