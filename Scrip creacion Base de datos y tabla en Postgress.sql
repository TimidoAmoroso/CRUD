create database practicadw

create table persona (
	IdPersona serial primary key,
	CedulaPersona int ,
	ApellidosPersona varchar (30),
	NombresPersona varchar (30),
	FechaNacimientoPersona date,
	CorreoPersona varchar (50)
	);
 
select * from persona;
 
 
insert into persona (cedulapersona, apellidospersona, nombrespersona, fechanacimientopersona, correopersona) 
values ('1311392318','Molina Pisco','Gabriel Enrique','08/11/83','angelgabriel_137@hotmail.com');


SELECT inet_server_addr() AS server_address, inet_server_port() AS server_port;

select * from persona