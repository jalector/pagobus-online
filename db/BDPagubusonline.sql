-- Creacion de base de datos 
create database PagobusOnline;
use PagobusOnline;

-- Llave primaria primary key ("Campo")
-- Llave foranea constraint "nombre cons" foreing key ("Campo") references "tabla"("campo")

-- Creacion de Tablas
create table TipoUsuario(
id_tipoUsuario int not null auto_increment primary key,
descripcion varchar(100) not null
);

create table Empleado(
id_empleado int not null auto_increment primary key,
nombre varchar(50) not null,
apellido varchar(50) not null,
edad int not null,
colonia varchar(50) not null,
domicilio varchar(100) not null,
correo varchar(50) not null,
contrasena varchar(50) not null,
f_contratacion date not null,
id_tipoUsuario int not null,
constraint id_TipoUsuario foreign key (id_TipoUsuario) references TipoUsuario(id_TipoUsuario)
);

create table Historial(
id_Historial int not null auto_increment primary key,
accion varchar(100) not null,
observaciones varchar(100) not null,
id_empleado int not null,
id_usuario int not null,
constraint id_Empleado foreign key (id_Empleado) references Empleado(id_Empleado)
);


create table Estado(
id_status int not null auto_increment primary key,
tipo_estado varchar(50) not null,
f_cambio date,
id_historial int not null,
constraint id_Historial foreign key (id_Historial) references Historial(id_Historial)
);

create table Usuario(
id_usuario int not null auto_increment primary key,
contrasena varchar(50) not null,
nombre varchar(50) not null,
apellido varchar(50) not null,
f_nacimiento date not null,
fotografia varchar(255),
colonia varchar(50) not null,
domicilio varchar(100) not null,
correo varchar(50) not null,
f_limite date,
id_tipoUsuario int not null,
id_Status int not null,
constraint id_tipoUsuarioU foreign key (id_tipoUsuario) references TipoUsuario(id_tipoUsuario),
constraint id_status foreign key (id_status) references Estado(id_status)
);

create table Documento(
id_Documento int not null auto_increment primary key,
documento varchar(255) not null,
f_actualizacion date,
estado varchar(50) not null,
id_usuario int not null,
constraint id_usuario foreign key (id_usuario) references Usuario(id_usuario)
);

