<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
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
        Blade::directive('currency', function ( $expression ) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
          });

          Blade::directive('datetime', function ($expression) {
              return "<?php echo ($expression)->format('d-m-Y'); ?>";
          });

        Paginator::useBootstrap();
    }
}
