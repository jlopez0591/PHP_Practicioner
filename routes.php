<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 01:46 AM
 */



$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');

$router->post('names', 'controllers/add-name.php');