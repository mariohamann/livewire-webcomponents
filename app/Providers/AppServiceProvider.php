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
        // Sets an attribute if the value is defined and removes the attribute if undefined.
        Blade::directive('wcSetAttribute', function ($arguments) {
            list($attribute, $condition) = explode(',', $arguments);
            $attribute = trim(str_replace(['"', "'"], '', $attribute));
            $condition = trim($condition);
            return "<?php echo {$condition} ? '{$attribute}' : '!{$attribute}' ?>";
        });

        // Creates a model binding for sl-checkbox
        Blade::directive('slCheckboxModel', function ($arguments) {
            list($expression, $value) = explode(',', str_replace([' ', '"', "'"], '', $arguments));
            return "<?php echo {$value} ? 'checked' : '' ?> x-on:sl-change=\"\$wire.set('{$expression}', \$el.checked);\"";
        });

        // Creates a model binding for sl-radio-group
        Blade::directive('slRadioGroupModel', function ($arguments) {
            list($expression, $value) = explode(',', str_replace([' ', '"', "'"], '', $arguments));
            return "value=\"<?php echo {$value}; ?>\" x-on:sl-change=\"\$wire.set('{$expression}', \$el.value);\"";
        });

        // Creates a model binding for sl-select
        Blade::directive('slSelectModel', function ($arguments) {
            list($expression, $value) = explode(',', str_replace([' ', '"', "'"], '', $arguments));
            return "value=\"<?php echo is_array({$value}) ? implode(' ', {$value}) : {$value}; ?>\" x-on:sl-change=\"\$wire.set('{$expression}', \$el.value);\"";
        });
    }
}
