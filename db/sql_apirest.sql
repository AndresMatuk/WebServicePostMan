create database apirest;
use apirest;
create table usuarios(
	id_usuario int auto_increment primary key not null,
    nombre varchar(20) not null,
    apellido varchar(20) not null,
    tipoId varchar(5) not null,
    telefono varchar(25)
);
create table Consignaciones(
	id_Consignaciones int auto_increment primary key not null,
    Fk_Id_Usuario int not null,
    fecha_horan datetime not null,
    Valor_consignación varchar(80) not null
);

alter table Consignaciones add foreign key(Fk_Id_Usuario) references usuarios(id_usuario);

INSERT INTO usuarios (nombre, apellido, tipoId, telefono) VALUES
('Juan', 'Pérez', 'PEP', '123-456-7890'),
('María', 'Gómez', 'CC', '987-654-3210'),
('Luis', 'Rodríguez', 'CC', '555-123-4567'),
('Ana', 'Martínez', 'TI', '777-888-9999'),
('Carlos', 'López', 'CE', '111-222-3333'),
('Elena', 'Sánchez', 'CE', '444-555-6666'),
('Andrés', 'Torres', 'PEP', '888-999-0000'),
('Isabel', 'García', 'CC', '222-333-4444'),
('Javier', 'Fernández', 'TI', '999-888-7777'),
('Sofía', 'Hernández', 'DNI', '333-444-5555');

INSERT INTO Consignaciones (Fk_Id_Usuario, fecha_horan, Valor_consignación) VALUES
(1, '2023-11-07 09:00:00', '100.00'),
(2, '2023-11-07 10:15:00', '150.50'),
(3, '2023-11-07 11:30:00', '75.25'),
(4, '2023-11-07 12:45:00', '200.75'),
(5, '2023-11-07 13:15:00', '50.00'),
(6, '2023-11-07 14:30:00', '120.00'),
(7, '2023-11-07 15:45:00', '90.30'),
(8, '2023-11-07 16:00:00', '180.45'),
(9, '2023-11-07 17:15:00', '65.75'),
(10, '2023-11-07 18:30:00', '220.00');

select * from Consignaciones;
select Consignaciones.* from Consignaciones inner join usuarios where  Consignaciones.Fk_Id_Usuario = usuarios.id_usuario;

Use apirest; 
explain usuarios;
explain consignaciones;
select * from usuarios;
select * from consignaciones;
INSERT INTO Consignaciones (Fk_Id_Usuario, fecha_horan, Valor_consignación) VALUES
(5, '2023-11-05 09:00:00', '100.00'),
(4, '2023-11-08 10:15:00', '150.50'),
(7, '2023-11-05 11:30:00', '75.25'),
(9, '2023-11-07 12:45:00', '200.75'),
(9, '2023-11-06 13:15:00', '50.00'),
(2, '2023-11-03 14:30:00', '120.00'),
(1, '2023-11-02 15:45:00', '90.30'),
(3, '2023-11-01 16:00:00', '180.45'),
(2, '2023-11-03 17:15:00', '65.75'),
(10, '2023-11-07 18:30:00', '220.00'); 

INSERT INTO usuarios (nombre, apellido, tipoId, telefono) VALUES
("joseph","lopez",'CC', '3112625555');
select usuarios.nombre, usuarios.apellido, consignaciones.*  from consignaciones inner join usuarios where usuarios.id_usuario = consignaciones.fk_id_usuario;

