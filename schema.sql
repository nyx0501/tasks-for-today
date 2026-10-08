CREATE DATABASE IF NOT EXISTS tasks_for_today;
USE tasks_for_today;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review pull requests from the team', 'done', CURDATE() - INTERVAL 3 DAY, NOW()),
('Update project documentation', 'done', CURDATE() - INTERVAL 3 DAY, NOW()),
('Fix login page validation bug', 'done', CURDATE() - INTERVAL 1 DAY, NOW()),
('Back up the production database', 'pending', CURDATE() - INTERVAL 1 DAY, NOW()),
('Daily stand-up meeting at 9:00 AM', 'done', CURDATE(), NOW()),
('Design the dashboard wireframe', 'in_progress', CURDATE(), NOW()),
('Prepare sprint report for the manager', 'pending', CURDATE(), NOW()),
('Reply to client emails', 'pending', CURDATE(), NOW()),
('Deploy version 1.1 to staging', 'pending', CURDATE() + INTERVAL 1 DAY, NOW()),
('Conduct user acceptance testing', 'pending', CURDATE() + INTERVAL 2 DAY, NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('jdelacruz', 'Juan Dela Cruz', 'juan.delacruz@example.com', NOW());
