<?php

namespace App\Controllers;

use App\Models\Model_LR;

class Controller extends BaseController
{
    public function con()
    {
        if (db_connect()) {
            echo 'yes';
        } else {
            echo 'no';
        }
    }
    public function index()
    {
        return view('Login/regist');
    }
    public function login(){
        return view('Login/login');
    }

    public function registration()
    {
        return view('Login/regist');
    }
    public function forget()
    {
        return view('Login/forgot');
    }
}
