<?php

// Almacenamiento del selectAll - Metodo del QueryBuilder
$users = APP::get('database')->selectAll('users');


require 'views/index.view.php';