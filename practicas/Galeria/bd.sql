drop database if exists galeria;
create database galeria;
use galeria;
create table fotos(
id int auto_increment,
titulo varchar(50) not null,
imagen varchar(50) not null,
texto text,
primary key (id)
);
select * from fotos;