<?php

namespace App\Providers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();

        \Debugbar::enable();

        $topUsers = Cache::remember('topUsers', 60 * 2, function(){
            return User::withCount('ideas')
            ->orderBy('ideas_count', 'DESC')
            ->limit(5)->get();
        });

        //App::setLocale('es');
        // Role
        Gate::define('admin', function (User $user): bool {
            return (bool) $user->is_admin;
        });

        View::share('topUsers', $topUsers);

        /*
         * Commenting these Gates out since we are now handling these authorization rules in policies.
         * 
        // Permission
        Gate::define('idea.delete', function (User $user, Idea $idea): bool {
            return ((bool) $user->is_admin || $user->id === $idea->user_id);
        });

        Gate::define('idea.edit', function (User $user, Idea $idea): bool {
            return ((bool) $user->is_admin || $user->id === $idea->user_id);
        });
        */
    }
}
