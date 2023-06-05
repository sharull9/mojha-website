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
        if ($filePath == 'header' ||  $filePath == 'footer') {
            echo view('404');
        } else if ($filePath == 'api-docs' || $filePath == 'playgroundApi' || $filePath == 'chat' || $filePath == 'calendar' || $filePath == 'edit') {
            echo view($filePath);
        } else {
            echo view('header');
            echo view($filePath);
            echo view('footer');
        }
    }
}
