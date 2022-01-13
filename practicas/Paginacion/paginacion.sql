drop database if exists prueba;
create database prueba;
use prueba;
create table articulos(
id int auto_increment,
articulo varchar(50) not null,
primary key (id)
);
insert into articulos(articulo) values ('cama');
insert into articulos(articulo) values ('ropero');
insert into articulos(articulo) values ('silla');
insert into articulos(articulo) values ('mesa');
insert into articulos(articulo) values ('computadora');

insert into articulos(articulo) values ('lente');
insert into articulos(articulo) values ('linterna');
insert into articulos(articulo) values ('libreta');
insert into articulos(articulo) values ('cosina');
insert into articulos(articulo) values ('bosina');

insert into articulos(articulo) values ('teclado');
insert into articulos(articulo) values ('monitor');
insert into articulos(articulo) values ('lapiz');
insert into articulos(articulo) values ('pluma');
insert into articulos(articulo) values ('foco');

insert into articulos(articulo) values ('jueguete');
insert into articulos(articulo) values ('coche');
insert into articulos(articulo) values ('rueda');
insert into articulos(articulo) values ('vaso');
insert into articulos(articulo) values ('botella');

insert into articulos(articulo) values ('leche');
insert into articulos(articulo) values ('carne');
insert into articulos(articulo) values ('agua');
insert into articulos(articulo) values ('pipi');
insert into articulos(articulo) values ('reloj');