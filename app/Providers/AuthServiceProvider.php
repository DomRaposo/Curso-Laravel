<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Produto;



use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Model\Produto' => 'App\Policies\ProdutoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
     Gate::define('ver-produto', function(User $user,Produto $produto){
        return $user->id === $produto->id_user;
     });


        }
    }

