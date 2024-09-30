CREATE TABLE files (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11),
    filename VARCHAR(255) NOT NULL,
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);