<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        // C'est ici que vous remplacez le rôle de l'ancien Kernel !
        // Ajoutez vos alias comme ceci :
        $middleware->alias([
            'test' => \App\Http\Middleware\testMiddleware::class,
            'User' => \App\Http\Middleware\UserMiddleware::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();