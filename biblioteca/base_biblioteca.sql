drop database if exists biblioteca;
create database if not exists biblioteca;
use biblioteca;
drop table if exists libro;
create table if not exists libro(
	codigo int(8) AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(50) not null,
    autor varchar(50) not null,
    editorial varchar(25) not null,
    genero enum ('drama','ciencia_ficcion','intriga','otros'),
    paginas int(4),
    fecha date,
    precio decimal(4,2)
);