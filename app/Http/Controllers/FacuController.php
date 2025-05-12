<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacuController extends Controller
{
    public function index()
    {
        return view('pages.faculdade.facu');
    }
}
