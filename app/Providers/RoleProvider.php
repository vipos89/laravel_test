<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class RoleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['*'], function ($view){
            $servCategories = Category::all();
            $view->with(['servCategories' => $servCategories]);
        });

        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->hasRole($role)) : ?>"; //return this if statement inside php tag
        });
        Blade::directive('endrole', function ($role) {
            return '<?php endif; ?>'; //return this endif statement inside php tag
        });

    }
}
