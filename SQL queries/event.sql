CREATE DATABASE event;

/*photo table*/
CREATE TABLE photo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    event_type VARCHAR(50),
    event_category VARCHAR(50),
    event_date DATE,
    upload_date DATETIME NOT NULL
);

/*events table*/
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255),
    event_day VARCHAR(50),
    event_date DATE,
    event_time TIME,
    event_venue VARCHAR(255)
);

/*Dummy data for events table*/
INSERT INTO events (event_name, event_day, event_date, event_time, event_venue) VALUES
('Tech Conference', 'Wednesday', '2023-12-15', '10:00:00', 'Conference Center'),
('Music Festival', 'Saturday', '2023-12-18', '18:00:00', 'Outdoor Arena');
