<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:49 AM
 */

$app = [];

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);