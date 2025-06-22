<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function index()
    {
        $nomeUsuario = 'DevJhoow';
        $response = Http::get("https://api.github.com/users/{$nomeUsuario}/repos");

        $repositorios = [];

        if($response->successful()) {
            $repositorios = collect($response->json())
            ->filter(fn ($repo) => !$repo['fork'])
            ->sortByDesc('stargazers_count')
            ->values();
        }

        return view('pages.project.project', compact('repositorios'));
    }
}
