<?php

// Almacenamiento del selectAll - Metodo del QueryBuilder
$users = $app['database']->selectAll('users');


require 'views/index.view.php';