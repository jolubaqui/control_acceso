CREATE DATABASE control_asistencia;
USE control_asistencia;

CREATE TABLE registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id VARCHAR(50),
    tipo ENUM('entrada', 'salida'),
    hora DATETIME
);
