<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:09 AM
 */

class Connection
{

    // Realiza la conexion a la base de datos en base a la info de config utilizada.
    // En case de fallo detiene la ejecuccion del codigo.
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
