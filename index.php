<?php

// Llamada al bootstrap de conexion a BD
$query = require 'bootstrap.php';

// Almacenamiento del selectAll - Metodo del QueryBuilder
$tasks = $query->selectAll('todos');

require 'index.view.php';