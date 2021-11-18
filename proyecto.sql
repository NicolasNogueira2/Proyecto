Create database proyecto;
use proyecto;

CREATE TABLE usuario (
    CI INT(15),
    email VARCHAR(50),
    contra VARCHAR(50),
    estadoCliente BOOLEAN,
    PRIMARY KEY (CI)
);
Create table Cliente(
	idU int (15),
	Departamento varchar(50),
	Ciudad varchar(50),
	Calle Varchar(50),
	numero int(10),
	rut int(20),
	telefono int(20),
	primary key (idU),
	foreign key (idU) references Usuario (CI)
	);

CREATE TABLE producto (
    codigo INT(15) AUTO_INCREMENT,
    Nombre VARCHAR(60),
    Descripcion VARCHAR(1000),
    estado VARCHAR(15),
    Stock INT(100),
    tipo_iva VARCHAR(1),
    Precio INT(10),
    imagen LONGBLOB,
    destacado VARCHAR(15),
    PRIMARY KEY (codigo)
);
CREATE TABLE carrito (
    idCarrito INT(10),
    cantidad INT(5),
    estadoCarrito BOOLEAN,
    fecha DATE,
    idProducto INT(15),
    idUsuario INT(15),
    subTotal INT(15),
    PRIMARY KEY (idCarrito , idProducto),
    FOREIGN KEY (idProducto)
        REFERENCES producto (codigo),
    FOREIGN KEY (idUsuario)
        REFERENCES usuario (CI)
);

create table proveedor(
idProv int(15),
telProv int(15),
nombreProv varchar(20),
primary key (idProv)
);
insert into proveedor (idProv, telProv, nombreProv) values ('001', '23645473', 'NewTechnology'), ('002', '23649691', 'TodoSoft'), ('003', '23646385', 'ProNet');

create table tipoFactura(
idTipoFactura int(1),
Descripcion varchar(100)
);
CREATE TABLE factura (
    idFactura INT(15) auto_increment,
    idCarrito INT(15),
    CI int(15),
    PRIMARY KEY (idFactura),
    FOREIGN KEY (idCarrito)
        REFERENCES carrito (idCarrito),
	FOREIGN KEY (CI)
        REFERENCES usuario (CI)
);
Insert into usuario (CI, email, contra) Values ('56873873', 'admin@gmail.com', 'lp2021');
Insert into producto (codigo) Values ('0');
INSERT INTO carrito (idCarrito, idProducto, cantidad,fecha ,subTotal, idUsuario, estadoCarrito) VALUES ('0','1', '1', '2021-11-17', '1' ,'56873873' , '0');
