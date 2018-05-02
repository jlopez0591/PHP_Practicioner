<?php

// Almacenamiento del selectAll - Metodo del QueryBuilder
$tasks = $app['database']->selectAll('todos');


require 'views/index.view.php';