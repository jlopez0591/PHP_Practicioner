<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:49 AM
 */

// Informacion del app como configuraicones y conexion de base de datos.
$app = [];

// Obtiene la informacion de configuracion del archivo config.php
$app['config'] = require 'config.php';


// Agrega el contenido de los archivos siguientes al proyecto.

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';


// La informacion de la conexion a la base de datos viene de una instancia de QueryBuilder utilizando una conexion
// en base a los datos de conexion almacenados en $app.
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);