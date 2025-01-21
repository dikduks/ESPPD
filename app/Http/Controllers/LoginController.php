<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller

{
    public function login()
    {
        return view('login.login');
    }

    public function level()
    {
        return view('login.login');
    }
}

?>