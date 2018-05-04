<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/01/18
 * Time: 01:37 AM
 */

class QueryBuilder
{
    // La conexion PDO a la base de datos, sea cual sea el tipo
    protected $pdo;

    // Constructor de la clase
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Consultas generadas.

    // Select * from 'table'; Mas que nada...
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertInto($table, $value)
    {
        $data = [
            'description' => $value
        ];
        $statement = $this->pdo->prepare("INSERT INTO {$table} (description, completed) values ('{$value}', false )");
        $statement->execute();
    }
}