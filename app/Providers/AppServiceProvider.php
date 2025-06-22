<?php

namespace App\Providers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
         View::composer('*', function ($view) {
            $githubUser = 'DevJhoow';
            $avatar = null;

            $response = Http::get("https://api.github.com/users/{$githubUser}");

            if ($response->successful()) {
                $avatar = $response->json()['avatar_url'] ?? null;
            }

            $view->with('githubAvatar', $avatar);
        });
    }
}
