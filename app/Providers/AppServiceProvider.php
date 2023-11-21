<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    public function boot()
    {
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            $cpf = preg_replace('/[^0-9]/', '', $value);
        
            if (strlen($cpf) != 11 || preg_match('/^(\d)\1+$/', $cpf)) {
                return false;
            }
        
            // CPF validation algorithm goes here
        
            return true;
        });
    
        Validator::replacer('cpf', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':cpf', $attribute, $message);
        });
    }
}
