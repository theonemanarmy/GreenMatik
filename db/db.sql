#verificar si existe la base de datos para crearla#
CREATE DATABASE IF NOT EXISTS greenmatikOriginal;
USE greenmatikOriginal;

#CREAR TABLAS#
CREATE TABLE USUARIOS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(120) NOT NULL,
    email VARCHAR(120) NOT NULL,
    apodo VARCHAR(100) NOT NULL,
    fechaAlta DATE,
    rol VARCHAR(100),
    imagen VARCHAR(100) NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

ALTER TABLE USUARIOS ADD password VARCHAR(120) NOT NULL;

INSERT INTO USUARIOS 
VALUES(
    null, 
    'greenMatik', 
    'greenMatik', 
    'greenmatik@greenmatik.com', 
    'greenMatik', 
    CURDATE(),
    'admin',
    null,
    'admin'
);

CREATE TABLE CATEGORIAS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO CATEGORIAS 
VALUES(
    null,
    'Túneles de lavado'
);

INSERT INTO CATEGORIAS 
VALUES(
    null,
    'Puentes de lavado'
);

INSERT INTO CATEGORIAS 
VALUES(
    null,
    'Touch Free'
);

INSERT INTO CATEGORIAS 
VALUES(
    null,
    'Accesorios'
);

INSERT INTO CATEGORIAS 
VALUES(
    null,
    'Productos de limpieza'
);

CREATE TABLE SERIES(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    ventajas TEXT NOT NULL,
    tituloOpciones VARCHAR(100) NOT NULL,
    opciones TEXT NOT NULL,
    incluye1 VARCHAR(100) NOT NULL,
    incluye2 VARCHAR(100) NOT NULL,
    incluye3 VARCHAR(100) NULL,
    incluye4 VARCHAR(100) NULL,
    incluye5 VARCHAR(100) NULL,
    incluye6 VARCHAR(100) NULL,
    incluye7 VARCHAR(100) NULL,
    incluye8 VARCHAR(100) NULL,
    CONSTRAINT pk_series PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO SERIES 
VALUES(
    null,
    'MATIK´S SERIES',
    'La serie MATIK´S ofrece 4 modelos estándar y diversas opciones
    con las que se puede personalizar el proceso de lavado, según las necesidades
    y gustos de cada cliente',
    'Óptimo conste de Inversión + Alta productividad + 
    Bajo coste de mantenimiento = NEGOCIO RENTABLE',
    'Opciones',
    'Lavado de chasis, Cepillos para rines, Arco de alta Presión, 
    Dosificadores de espuma Tri-Color, Modulo de secado fijo o móvil adicional, 
    Cubiertas de ceramiento laterales y superiores, Paneles frontales y traseros
    de acero inoxidable, Extensión de cerramiento con persianas enrrollables',
    'PLC con hasta 8 programas de lavado',
    'rodillos',
    'alineadores',
    'dosificadores de espuma activa',
    'dosificadores de cera',
    'módulo de secado de 4 turbinas',
    null,
    null
);

INSERT INTO SERIES 
VALUES(
    null,
    'XPRESS SERIES'
);

INSERT INTO SERIES 
VALUES(
    null,
    'TSUNAMI 360 - 4D'
);

CREATE TABLE CARACTERISTICAS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    numeroCepillos VARCHAR(30) NOT NULL,
    areaDeMontaje VARCHAR(30) NOT NULL,
    unidadesPorHora VARCHAR(30) NOT NULL,
    potencialTotal VARCHAR(30) NOT NULL,
    longitudCarril VARCHAR(30) NOT NULL,
    dimensionesEquipo VARCHAR(120) NOT NULL,
    medidaVehiculo VARCHAR(120) NOT NULL,
    consumoVehiculo VARCHAR(255) NOT NULL,
    fabricacion VARCHAR(100) NOT NULL,
    personalizacion VARCHAR(10) NOT NULL,
    garantia VARCHAR(50) NOT NULL,
    CONSTRAINT pk_caracteristicas PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO CARACTERISTICAS 
VALUES(
    null,
    '5',
    '70m2',
    '40-60',
    '27kw',
    '7.68',
    'Largo 9.3m, Ancho 3.6m, Alto 3m',
    'Largo 6m, Ancho 2.35m, Alto 2.3m',
    'Electricidad 0.39Kwh, Agua 130-197L, Espuma 7ml, Cera 12ml',
    'Numero de cepillos',
    'Sí',
    '12 Meses'
);

CREATE TABLE PRODUCTOS(
    id INT(10) AUTO_INCREMENT NOT NULL,
    categoria_id INT(10) NOT NULL,
    serie_id INT(10) NOT NULL,
    caracteristicas_id INT(10) NOT NULL,
    nombre VARCHAR(120) NOT NULL,
    imagen LONGBLOB NOT NULL,
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY (categoria_id) REFERENCES CATEGORIAS(id),
    CONSTRAINT fk_producto_serie FOREIGN KEY (serie_id) REFERENCES SERIES(id),
    CONSTRAINT fk_producto_caracteristicas FOREIGN KEY (caracteristicas_id) REFERENCES CARACTERISTICAS(id)
)ENGINE=InnoDb;

ALTER TABLE PRODUCTOS MODIFY imagen