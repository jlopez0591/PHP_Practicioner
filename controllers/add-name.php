<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 04:44 PM
 */

App::get('database')->insertInto('users',[
    "name" => $_POST['name'],
]);

header('Location: /');