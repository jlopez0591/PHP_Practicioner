<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:49 AM
 */

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));