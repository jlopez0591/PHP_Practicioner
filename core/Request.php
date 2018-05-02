<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 01:15 PM
 */

class Request
{
    // Obtiene la informacion del URI del servidor.
    public static function uri()
    {
        // Elimina los simbolos / del principio y fin del string.
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}