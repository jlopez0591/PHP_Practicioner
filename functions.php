<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 04/30/18
 * Time: 01:31 AM
 */
function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}


function check_age($age)
{
    return $age >= 21 ? 'Allowed' : 'Not Allowed';
}