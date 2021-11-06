	CREATE DATABASE PROYECTO;
	USE PROYECTO;

	create table producto(
	codigo int (15) auto_increment,
	Nombre varchar (60),
	Descripcion varchar (1000),
	estado varchar (15),
	Stock int (100),
	tipo_iva varchar(1),
	Precio int(10),
	imagen longblob,
	destacado varchar (15),
	primary key (codigo));

	Create table Usuario(
	CI int (8),
	email varchar (30) UNIQUE,
	contra varchar (40),
	tipo_user varchar(1),
	primary key (CI));

	Create table Cliente(
	CI int (15),
	id_Cliente int(15),
	Departamento varchar(50),
	Ciudad varchar(50),
	Calle Varchar(50),
	numero int(10),
	rut int(20),
	telefono int(20),
	primary key (id_Cliente),
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
	nroFactura int(50) auto_increment,
	cantidad int (5),
	subTotal int(10),
	CI int(15),
	primary key (nroFactura),
	Foreign key (Codigo) references Producto (Codigo),
	Foreign key (CI) references usuario (CI)
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
	primary key (idProv)
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

Insert into Usuario (CI, email, contra, tipo_user) Values ('56873873', 'admin@gmail.com', 'lp2021', '1')

