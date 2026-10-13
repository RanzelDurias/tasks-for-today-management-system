CREATE DATABASE IF NOT EXISTS tasks_for_today;
USE tasks_for_today;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Check class announcements', 'completed', CURDATE(), NOW()),
('Finish CodeIgniter activity', 'pending', CURDATE(), NOW()),
('Review MVC lesson', 'pending', CURDATE(), NOW()),
('Submit laboratory report', 'pending', CURDATE(), NOW()),
('Create project folder', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Install CodeIgniter', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Prepare presentation', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Study for the next quiz', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('student', 'Ranzel Ked Durias', 'student@example.com', NOW());
