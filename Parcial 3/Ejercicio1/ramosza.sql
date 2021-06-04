create database ramosza;

use ramosza;

create table BARBERO
(
    ID_BARBERO INT NOT NULL,
    NOMBRE VARCHAR(45),
    APELLIDO_PATERNO VARCHAR (45),
    APELLIDO_MATERNO VARCHAR(45),
    APRENDIS_DE INT,
    NOMBRE_USUARIO VARCHAR (20),
    PASSWORD VARCHAR(150),
    primary key(ID_BARBERO)
);

insert into BARBERO values (1, 'Hugo', 'Ramos', 'Zarate', NULL, 'zarate', '$2y$10$T7x88FtOdxRuAygdQnyFbOkSyTxG.GeqFYbjcJw4aHtiG5BcfMZDS')
