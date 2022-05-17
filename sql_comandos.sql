/* para logearse desde consola mysql -u root -p */
/* create database prueba; */
/* drop database prueba; */
/* show databases; */
/* create database usuarios; */
/* use usuarios;  para usar una BD*/ 
/* create table datosusuarios(nombre varchar(30), clave varchar(10)); */
/* describe datosusuarios; */
 /* drop table lideres;  */
/* create database pruebas; */
/* use pruebas;  */
/* create table datospersonales (nif varchar(10), nombre varchar(15), apellido varchar(20), edad int(2) ); */
/* alter table datospersonales drop edad; */
/* alter table datospersonales add column edad int(2); */
/* insert into datospersonales (nif, nombre, apellido, edad) values ("51982457B", "Elena", "Martín", 27); */
/* select nif, nombre, apellido, edad from datospersonales; */
/* select * from datospersonales; */

/* ----------------- PARA IMPORTAR DATOS CON SQL */
/* create table productos3 (codigoarticulo varchar(4), seccion varchar(11), nombrearticulo varchar(20));*/

/* insert into productos3(codigoarticulo, seccion, nombrearticulo) */
/* values ("AR01", "Deportes", "Raqueta"), */
/* ("AR02", "Ferreteria", "Chincheta");  */

/* se crea el archivo con .sql y UTF8 - se importa desde el pgadmin y esto crea la tabla en la BD */

/* ------------------------------------------------------------------ */

/* ------------------USANDO COMODINES-------% Y _-------- */
/* SELECT DIRECCION FROM lideres WHERE direccion LIKE "cra%"  */