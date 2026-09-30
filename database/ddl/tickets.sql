CREATE DATABASE IF NOT EXISTS tickets_db;

USE tickets_db;

CREATE TABLE ticket (
    id_ticket INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descripcion TEXT NOT NULL,
    estado VARCHAR(30) NOT NULL
);