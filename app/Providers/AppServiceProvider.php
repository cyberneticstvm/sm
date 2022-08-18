<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $main_menu = DB::table('menus')->where('publish', 1)->where('parent', 0)->where('menu_type_id', 1)->orderBy('order_by')->get();
        View::share(compact('main_menu'));
    }
}
