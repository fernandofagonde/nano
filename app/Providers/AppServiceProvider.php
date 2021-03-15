<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

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
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            return valida_cpf($value);
        });

        Validator::extend('cnpj', function ($attribute, $value, $parameters, $validator) {
            return valida_cnpj($value);
        });

        Validator::extend('cpf_cnpj', function ($attribute, $value, $parameters, $validator) {
            return strlen(so_numero($value)) > 11 ? valida_cnpj($value) : valida_cpf($value);
        });
    }
}
