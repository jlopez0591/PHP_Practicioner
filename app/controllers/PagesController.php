<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/04/18
 * Time: 12:36 PM
 */

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        // Recibir peticion
        // Accciones
        // Regresar
        return view('index');
    }

    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }


}