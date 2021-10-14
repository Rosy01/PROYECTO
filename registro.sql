Create database registro;
use registro;

create table personalPNP (
	idPersonal int primary key not null,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    edad int not null,
    cargo varchar(50) not null,
    DNI int not null,
    codigoPersona int
);


create table persona (
	codigoPersona int primary key not null,
    nombre varchar(50) not null,
    apellido  varchar(50) not null,
    edad  int not null,
    DNI int not null,
    fecha date not null,
    idAcceso int, 
    id int
);

create table acceso (
	idAcceso int primary key not null,
    tipoAcceso varchar (50) not null
);

create table departamento (
	id int primary key not null,
    nombre varchar(50) not null

);

alter table personalPNP
add constraint fk_1
foreign key (codigoPersona)
references persona (codigoPersona);

alter table persona
add constraint fk_2
foreign key (idAcceso)
references acceso (idAcceso);

alter table persona
add constraint fk_3
foreign key (id)
references departamento(id);