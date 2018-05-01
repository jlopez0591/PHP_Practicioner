<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:49 AM
 */

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

//// Llamada a la funcion statica 'make' para realizar la conexion con PDO
//$pdo = Connection::make();
//// Nueva instancia de la clase QueryBuilder realiza las consultas almacenadas
//$query = new QueryBuilder($pdo);


//Retorna una clase que tiene los metodos de consulta pre-armados en la clase QueryBuilder utiliando la conexion
// establecida en la funcion estatica "make" de Connection
return new QueryBuilder(
    Connection::make($config['database'])
);