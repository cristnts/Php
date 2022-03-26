Create database baseclientes;
use baseclientes;

CREATE TABLE comuna(
			cod_com int(10) primary key,
		    	nom_com Varchar(20) NOT NULL
);
insert into comuna values(1,'Machali');
insert into comuna values(2,'Rancagua');
insert into comuna values(3,'San Fernando');
Select * from comuna;

CREATE TABLE cliente(
			rut_cli Varchar(12) primary key,
		    	nom_cli Varchar(20),
		    	dir_cli Varchar(50),
		    	cod_com Int(10) not null,
		    	sex_cli Varchar(1),
		    	fna_cli Date,
		    	mov_cli Varchar(10),
			ema_cli Varchar(50)
);
insert into cliente values('11.111.111-1','Juan Perez','Av San Juan',1,'M','1990-12-12','896745','jperez@inacap.cl');

Select * from cliente;

CREATE TABLE proveedor(
			rut_pro Varchar(12) primary key,
		    	raz_pro Varchar(20),
		    	dir_pro Varchar(50),
		    	cod_com int not null,
		    	fon_pro Varchar(10),
		    	fax_pro Varchar(10),
		    	ema_pro Varchar(50),
			con_pro Varchar(30)
);
insert into proveedor values('11.111.111-1','Almacen XYZ','Av Nelson P',2,'214365','214365','info@almacen.cl','Mario Perez');
Select * from proveedor;
