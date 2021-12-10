-- Example user database
CREATE TABLE `users` (
    users_id INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    users_name VARCHAR(30) NOT NULL,
    users_email VARCHAR(30) NOT NULL,
    users_pwd VARCHAR(320) NOT NULL
);