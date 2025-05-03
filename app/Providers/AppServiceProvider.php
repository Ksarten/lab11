<?php

namespace App\Providers;

use App\Models\seat;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination::bootstrap-4');

        Gate::define('destroy-seat', function (User $user, Seat $seat) {
            return $user->is_admin OR $seat->hall_id == 2;
        });
    }
}
