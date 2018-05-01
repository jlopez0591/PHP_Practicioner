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

function connectToDb()
{
    // Siempre realizar las conecciones utilizando try/catch
    try {
        // dsn = db-type:host=ip;dbname=dbname, username, passwd
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
    } catch (PDOException $e) {
        // $e es un objeto
        die($e->getMessage());
    }
}


function fetchAllTasks($pdo)
{
    // Preparar SQL
    $statement = $pdo->prepare('select * from todos');

// Ejecutar SQL
    $statement->execute();

// ...Revisar que es fetchAll
// FETCH_OBJ lo agarra en un objeto.
//$tasks = $statement->fetchAll(PDO::FETCH_OBJ); // fetchAll agarra todos los mensajes en memoria


    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

