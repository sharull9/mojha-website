<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function showPages($filePath)
    {
        if ($filePath == 'header') {
            echo view('header');
        } else if ($filePath == 'footer') {
            echo view('footer');
        } else {
            echo view('header');
            echo view($filePath);
            echo view('footer');
        }




    }
}