<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function seguranca()
    {
        return view('pages.security');
    }

    public function postman()
    {
        return view('pages.postman');
    }

    public function phpunit()
    {
        return view('pages.phpunit');
    }

    public function scrumkanban()
    {
        return view('pages.scrum-kanban');
    }

    public function cicddevops()
    {
        return view('pages.cicd-devops');
    }
    public function ia()
    {
        return view('pages.ia');
    }
}
