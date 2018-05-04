<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 04:44 PM
 */

var_dump($_POST);
$app['database']->insertInto('todos', $_POST['name']);
