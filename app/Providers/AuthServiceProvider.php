<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\EloquentUserProvider;
use App\CustomAuth\EloquentInfosetudiantProvider;
use App\CustomAuth\EloquentInfoencadrantProvider;
use App\Models\Infosetudiant;
use App\Models\Infoencadrant;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // Enregistrer les politiques si nécessaire
        $this->registerPolicies();

        
        Auth::provider('eloquent_infosetudiants', function ($app, array $config) {
            return new EloquentInfosetudiantProvider($app['hash'], Infosetudiant::class);
        });
       Auth::provider('eloquent_infoencadrants', function ($app, array $config) {
            return new EloquentInfoencadrantProvider($app['hash'], Infoencadrant::class);
        });

       
     Auth::provider('eloquent_users', function ($app, array $config) {
            return new EloquentUserProvider($app['hash'], User::class);
        });
    }
}
