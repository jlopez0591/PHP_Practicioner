<?php

// Llamada al bootstrap de conexion a BD
$query = require 'bootstrap.php';

// Almacenamiento del selectAll - Metodo del QueryBuilder
$tasks = $query->selectAll('todos', 'Task');

die(var_dump($tasks));

require 'index.view.php';