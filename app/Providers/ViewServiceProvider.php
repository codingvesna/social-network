<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('partials.aside.who_to_follow', function ($view) {
            $users = User::where('id', '!=', auth()->id())->get()->sortByDesc('created_at' )->take(3);
            $view->with('users', $users);
        });
    }
}
