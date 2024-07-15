-- Creacion de la base de datos
CREATE DATABASE Registro;
USE Registro;
-- Creación de la tabla 'usuarios'
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido_paterno VARCHAR(50) NOT NULL,
    apellido_materno VARCHAR(50) NOT NULL,
    edad INT,
    ciudad_nacimiento VARCHAR(50),
    telefono VARCHAR(10) NOT NULL,
    rfc VARCHAR(13) NOT NULL
);

-- Creación de la tabla 'nacionalidades'
CREATE TABLE nacionalidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

-- Agregar una clave foránea en 'usuarios' para 'nacionalidades'
ALTER TABLE usuarios
ADD COLUMN nacionalidad_id INT,
ADD CONSTRAINT fk_nacionalidad
    FOREIGN KEY (nacionalidad_id)
    REFERENCES nacionalidades(id);

-- Inserción de registros de ejemplo en la tabla 'nacionalidades'
INSERT INTO nacionalidades (nombre) VALUES
    ('Mexicano'),
    ('Estadounidese'),
    ('Canadiense'),
    ('Española'),
    ('Argentina'),
    ('Colombiana');

