<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:09 AM
 */

class Connection
{
    public static function make()
    {
        // Siempre realizar las conexiones a la base de datos detras de un bloque try/catch
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
