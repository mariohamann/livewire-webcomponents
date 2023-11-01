<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('slCheckboxModel', function ($arguments) {
            list($expression, $value) = explode(',', str_replace([' ', '"', "'"], '', $arguments));
            return "<?php echo {$value} ? 'checked' : '' ?> x-on:sl-change=\"\$wire.set('{$expression}', \$el.checked);\"";
        });

        Blade::directive('slRadioGroupModel', function ($arguments) {
            list($expression, $value) = explode(',', str_replace([' ', '"', "'"], '', $arguments));
            return "value=\"<?php echo {$value}; ?>\" x-on:sl-change=\"\$wire.set('{$expression}', \$el.value);\"";
        });

        Blade::directive('slSelectModel', function ($arguments) {
            list($expression, $value) = explode(',', str_replace([' ', '"', "'"], '', $arguments));
            return "value=\"<?php echo is_array({$value}) ? implode(' ', {$value}) : {$value}; ?>\" x-on:sl-change=\"\$wire.set('{$expression}', \$el.value);\"";
        });
    }
}
