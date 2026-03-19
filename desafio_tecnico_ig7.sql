CREATE DATABASE desafio_tecnico_ig7
CHARSET utf8mb4
COLLATE utf8mb4_general_ci;

use desafio_tecnico_ig7;

CREATE TABLE students(
                         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                         name VARCHAR(150) NOT NULL,
                         mail VARCHAR(150) NOT NULL UNIQUE,
                         registration VARCHAR(20) NOT NULL UNIQUE,
                         status ENUM('ativo', 'inativo') NOT NULL DEFAULT 'ativo',
                         date_of_birth DATETIME
);

SELECT * FROM students;