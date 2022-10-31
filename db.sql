CREATE TABLE usuario (
    correo VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    contrasena VARCHAR(16)
);

CREATE TABLE categoria (
    nombre VARCHAR(20) PRIMARY KEY,
    color VARCHAR(10)
);


-- Tablas miembro

CREATE TABLE noticia (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100),
    fecha DATE,
    descripcion TEXT,
    correo VARCHAR(20),
    nombrec VARCHAR(20),
    FOREIGN KEY (correo) REFERENCES usuario (correo) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (nombrec) REFERENCES categoria (nombre) ON DELETE CASCADE ON UPDATE CASCADE, 
    PRIMARY KEY (id)
);
