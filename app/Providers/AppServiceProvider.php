<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        Paginator::useBootstrap();
        $data = DB::table('content')->whereIn('type', ['contacts', 'dealer_name'])->orderBy('type')->get();
        if (isset($data[0]) && $data[1]) {
            View::share([
                'contacts_html_data'    => data_get($data[0], 'html_data'),
                'dealer_name_html_data' => data_get($data[1], 'html_data')
            ]);
        }
    }
}
