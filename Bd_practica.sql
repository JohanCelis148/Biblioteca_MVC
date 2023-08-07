create database practica;

use practica;


create table personas(
	id int primary key auto_increment,
    nombres varchar(80) not null,
    apellidos varchar(80),
    tipo varchar(10),
    documento varchar(12) not null unique,
    telefono varchar(10),
    ciudad varchar(80),
    direccion varchar(50),
    correo varchar(100) not null unique,
    genero enum("Masculino", "Femenino"),
    gen_favorito varchar(60),
    estado enum("Activo", "Inactivo")
);

create table usuarios(
	id int primary key auto_increment,
	persona_id int not null unique,
	CONSTRAINT fk_personas FOREIGN KEY (persona_id) REFERENCES personas (id),
    usuario varchar(20) not null unique,
    rol enum("Administrador", "Empleado", "Cliente"),
    contrasenia varchar(30) not null,
	estado enum("Activo", "Inactivo")
);


create table ubicacion(
	id int primary key auto_increment,
    codigo varchar(10) not null unique,
    descripcion varchar(80),
    genero varchar(50),
    estado enum("Activo", "Inactivo")
);

create table categoria(
	id int primary key auto_increment,
    codigo varchar(10) not null unique,
    descripcion varchar(80),
    estado enum("Activo", "Inactivo")
);


create table libros(
	id int primary key auto_increment,
    codigo varchar(10) not null unique,
    nombre varchar(80),
    descripcion varchar(100),
    autor varchar(100),
    ubicacion_id int,
    categoria_id int,
    CONSTRAINT fk_ubicacion FOREIGN KEY (ubicacion_id) REFERENCES ubicacion (id),
    CONSTRAINT fk_categoria FOREIGN KEY (categoria_id) REFERENCES categoria (id),
    stock int,
    precio_compra float,
    precio_venta float,
    estado enum("Activo", "Inactivo")
);


create table factura (
    id int primary key auto_increment,
    fecha date,
    metodo_pago varchar(50),
    usuario_id int,
    CONSTRAINT fk_usuarios FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
    total DECIMAL(10, 2),
    estado enum("Activo", "Inactivo")
);

create table detalle_factura (
    id int primary key auto_increment,
    factura_id int,
    CONSTRAINT fk_factura FOREIGN KEY (factura_id) REFERENCES factura (id),
    libro_id int,
    CONSTRAINT fk_libros FOREIGN KEY (libro_id) REFERENCES libros (id),
    cantidad int,
    precio_unitario decimal(8, 2),
    subtotal decimal(10, 2)
);