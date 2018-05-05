<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/04/18
 * Time: 04:05 PM
 */

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users', $users));
    }

    public function store()
    {
        App::get('database')->insertInto('users', [
            "name" => $_POST['name'],
        ]);

        return redirect('users');
    }
}