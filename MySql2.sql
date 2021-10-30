CREATE DATABASE PROYECTO;
USE PROYECTO;

create table producto(
codigo int (15) auto_increment,
Nombre varchar (25),
Descripcion varchar (1000),
Stock int (100),
imagen varchar(200),
iva1 int (30),
iva2 int (30),
iva3 int (30),
primary key (codigo));


create table Listado_Precio(
id int (15),
nombre varchar (20),
primary key (id));


Create table Usuario(
CI int (15),
Email varchar (30) UNIQUE,
contra varchar (40),
telefono int(20),
primary key (CI));

Create table Cliente(
CI int (15),
Departameto varchar(50),
Ciudad varchar(50),
Calle Varchar(50),
numero int (10),
numTar varchar (50),
contraTar int (10),
fechaTar varchar(10),
foreign key (CI) references Usuario (CI)
);

Create table Vendedor(
CI int (15),
idVendedor int (15),
primary key (idVendedor),
foreign key (CI) references Usuario (CI)
);

create table listaProducto(
Codigo int(15),
nroFactura int(50),
cantidad int (5),
subTotal int(10),
primary key (nroFactura),
Foreign key (Codigo) references Producto (Codigo)
);

Create table Factura(
CodigoFac int (15),
idVendedor int (15),
nroFactura int(50),
Hora int (10),
Fecha int (10),
primary key (CodigoFac),
Foreign key (idVendedor) references Vendedor (idVendedor),
Foreign key (nroFactura) references listaProducto (nroFactura)
);

create table Proveedor(
idProv int(15),
NomProv varchar (50),
TelProv int(15),
c
);
create table genera(
NroFactura int(50),
CI int (15),
foreign key (CI) references Usuario (CI),
Foreign key (NroFactura) references listaProducto (NroFactura)
);
create table provee(
idProv int(15),
Codigo int(15),
Foreign key (Codigo) references Producto (Codigo),
Foreign key (idProv) references proveedor (idProv)
);
create table SeCompone(
Codigo int(15),
NroFactura int(50),
Foreign key (NroFactura) references listaProducto (NroFactura),
Foreign key (Codigo) references Producto (Codigo)
);
create table tiene(
NroFactura int(50),
CodigoFac int (15),
Foreign key (NroFactura) references listaProducto (NroFactura),
Foreign key (CodigoFac) references Factura (CodigoFac)
);
create table vende(
idVendedor int (15),
CodigoFac int (15),
Foreign key (CodigoFac) references Factura (CodigoFac),
Foreign key (idVendedor) references Vendedor (idVendedor)
);
create table precio (
fecha int (10),
precio int(15),
Foreign key (id) references Listado_Producto(id),
Foreign key (Codigo) references Producto(Codigo),
primary key (fecha));



