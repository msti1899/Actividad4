    CREATE DATABASE solicitudes;
    
    CREATE TABLE registros (
        id INT NOT NULl Primary key,
        nombre VARCHAR(50) NOT NULL,
        apellido VARCHAR(50) NOT NULL,
        nombre_user VARCHAR(50) NOT NULL,
        email VARCHAR(100),
        numero_telefono CHAR(9);
    )
    