<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 01:15 PM
 */

namespace App\Core;

class Request
{
    // Obtiene la informacion del URI del servidor.
    public static function uri()
    {
        // Obtiene el URL y elimina los datos del q GET.
        return trim(parse_url($_SERVER['REQUEST_URI'],
            PHP_URL_PATH),
            '/'
        );
    }

    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
}