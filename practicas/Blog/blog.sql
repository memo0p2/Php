drop database if exists blog;
create database blog;
use blog;
create table articulos(
id int auto_increment,
titulo varchar(50) not null,
extracto varchar(100) not null,
fecha timestamp not null,
texto text not null,
thumb varchar(50) not null,
primary key (id)
);

insert into articulos (titulo,extracto,fecha,texto,thumb) values ('Primer articulo','Extracto mamalon1',now(),'texto mamalon1','1.png');
insert into articulos (titulo,extracto,fecha,texto,thumb) values ('Segundo articulo','Extracto mamalon2',now(),'texto mamalon2','2.png');
insert into articulos (titulo,extracto,fecha,texto,thumb) values ('Tercer articulo','Extracto mamalon3',now(),'texto mamalon3','3.png');
insert into articulos (titulo,extracto,fecha,texto,thumb) values ('Cuarto articulo','Extracto mamalon4',now(),'texto mamalon4','4.png');
select * from articulos;