<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        echo view('header');
        echo view('home');
        return view('footer');
    }

    public function menu()
    {
        echo view('header');
        echo view('menu');
        return view('footer');
    }

    public function contact()
    {
        echo view('header');
        echo view('contact');
        return view('footer');
    }

    public function about()
    {
        echo view('header');
        echo view('about');
        return view('footer');
    }

    public function team()
    {
        echo view('header');
        echo view('team');
        return view('footer');
    }

    public function booking()
    {
        echo view('header');
        echo view('booking');
        return view('footer');
    }
}
