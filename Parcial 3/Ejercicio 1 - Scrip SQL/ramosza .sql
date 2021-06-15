create database if not exists ramoza;
use ramoza;

create table users
(   id_usuario smallint not null auto_increment,
    nombre varchar(40),
    primer_apellido varchar(30),
    segundo_apellido varchar(30),
    correo varchar(100),
    usuario varchar(15),
    clave varchar(100),
    rol int(11),
    primary key(id_usuario)
);

select * from users;

insert into users (nombre, primer_apellido, segundo_apellido, correo, usuario, clave, rol)
values ('Hugo', 'Ramos', 'Zarate', 'Hugo@gmail.com', 'hugo', '$2y$10$T7x88FtOdxRuAygdQnyFbOkSyTxG.GeqFYbjcJw4aHtiG5BcfMZDS', '1');
