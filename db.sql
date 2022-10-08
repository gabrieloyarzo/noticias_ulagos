-- Tablas primarias

CREATE TABLE usuario (
    correo VARCHAR(20),
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    contrasena VARCHAR(16)
);

CREATE TABLE categoria (
    nombre PRIMARY KEY,
    color VARCHAR(7)
);


-- Tablas miembro

CREATE TABLE noticia (
    titulo PRIMARY KEY,
    fecha DATE,
    descripcion TEXT,
    imagen VARCHAR(20),
    correo VARCHAR(20),
    nombrec VARCHAR(20),
    FOREIGN KEY (correo) REFERENCES usuario (correo) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (nombrec) REFERENCES categoria (nombre) ON DELETE CASCADE ON UPDATE CASCADE 
);


-- Inserts

INSERT INTO usuario VALUES 
    ('gabrielalexis.oyarzo@alumnos.ulagos.cl','Gabriel','Oyarzo','gabriel123'),
    ('daborfabianalexis.martinez@alumnos.ulagos.cl','Dabor','Martinez','dabor123'),
    ('nicolasjeremiahignacio.munoz@alumnos.ulagos.cl','Nicolas','Munoz','nicolasm123'),
    ('nicolasignacio.villanueva@alumnos.ulagos.cl','Nicolas','Villanueva','nicolasv123');

INSERT INTO categoria VALUES
    ('Deportes','#af0000'),
    ('Genero','#ca0def'),
    ('Informatica','#0def95');

INSERT INTO noticia 
    ('Invitación a Charla Big Data','10-07-2022','Junto con saludar, envío este correo para invitarte, al igual que a los académicos y estudiantes de la. Carrera de ICInf, a la charla que nuestro departamento realizará sobre Big Data, este viernes 7 de octubre a las 10:00 horas en la Aula Magna.
En esta oportunidad, nuestro invitado especial, Claudio Aracena, Investigador Asociado de GoLab de la Universidad Adolfo Ibáñez, analizará algunos proyectos y aplicaciones asociadas al desarrollo de políticas públicas.
Cordiales saludos.','imagen.jpg','gabrielalexis.oyarzo@alumnos.ulagos.cl','Informatica');
 

-- Triggers

CREATE OR REPLACE FUNCTION validar_correo()
RETURNS TRIGGER AS $$
BEGIN
  IF (NEW.correo NOT LIKE '%@%.%') THEN
		RAISE EXCEPTION 'Formato de correo electrónico inválido';
	ELSE
		RETURN NEW;
	END IF;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER trigger_validar_correo
  BEFORE INSERT OR UPDATE ON usuario
  FOR EACH ROW EXECUTE PROCEDURE validar_correo();