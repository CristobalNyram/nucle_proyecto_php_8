CREATE DATABASE  db_nucleo;
USE db_nucleo;

CREATE TABLE usuarios (
    id_usuario 	    int(10) unsigned NOT NULL AUTO_INCREMENT,
    usuario         varchar(255) NOT NULL,    
    contrasenia     text NOT NULL,
    tipo_usuario    enum('m','a','p') NOT NULL,   
    estatus         varchar(2) NOT NULL,
    primer_acceso   int(10) unsigned,
    PRIMARY KEY (id_usuario)
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=utf8;
INSERT INTO usuarios VALUES(200, 'adm@hotmail.com', 'bFMxRjo6ZrY8ui4j7vaqhPLUhJIfEQ==',  'm', '1', 0);  
INSERT INTO usuarios VALUES(201, 'alu@hotmail.com', 'bFMxRjo6ZrY8ui4j7vaqhPLUhJIfEQ==',  'a', '1', 0);  


CREATE TABLE usuarios_historico_acceso (
    id_historial    int(10) unsigned NOT NULL AUTO_INCREMENT,
    fecha_acceso    varchar(255) NOT NULL,    
    hora_acceso     varchar(255) NOT NULL,    
    fecha_acceso_termino    varchar(255) NOT NULL,    
    hora_acceso_termino     varchar(255) NOT NULL,    
    id_usuario      int(10) unsigned NOT NULL,
    PRIMARY KEY (id_historial)
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=utf8;
ALTER TABLE usuarios_historico_acceso ADD FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario);



##----------------------------------------------------------------------------------------------------------------------
################  INICIO DE CURSO     ##########################################################################
##--------------------------------------------------------------------------------------------------------------------

CREATE TABLE menu_actividades (
    id_menu     int(10) unsigned NOT NULL AUTO_INCREMENT,
    nombre       varchar(255) NOT NULL,
    padre        int(10) unsigned NOT NULL,
    formato      varchar(255) NOT NULL,
    tipo         varchar(255) NOT NULL,
    imagen         text,
    contenido_url  text,
    id_consecutivo int(10) unsigned NOT NULL,
    estatus      varchar(5) NOT NULL,
    PRIMARY KEY (id_menu)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO menu_actividades VALUES (1, 'OPCION 1',  0,  'PDF', 'opc',  '','',   1,'1');
INSERT INTO menu_actividades VALUES (2, 'OPCION 2',  1,  'PDF', 'opc',  '','',   2,'1');
INSERT INTO menu_actividades VALUES (3, 'OPCION 3',  1,  'PDF', 'opc',  '','',   3,'1');
INSERT INTO menu_actividades VALUES (4, 'OPCION 4',  2,  'PDF', 'opc',  '','',   4,'1');
INSERT INTO menu_actividades VALUES (5, 'OPCION 5',  2,  'PDF', 'opc',  '','',   5,'1');



 