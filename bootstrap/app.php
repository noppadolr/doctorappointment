<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DoctorMiddleware;
use App\Http\Middleware\PatienMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        function(Router $router){
            $router->middleware('web')
                ->group(base_path('routes/web.php'));
            $router->middleware('web')
                ->group(base_path('routes/admin.php'));
                $router->middleware('web')
                ->group(base_path('routes/doctor.php'));
                $router->middleware('web')
                ->group(base_path('routes/patein.php'));
                // $router->middleware('web')
                // ->group(base_path('routes/unit.php'));
                // $router->middleware('web')
                // ->group(base_path('routes/category.php'));
                // $router->middleware('web')
                // ->group(base_path('routes/product.php'));                
        },
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminMiddleware::class,
            'doctor' => DoctorMiddleware::class,
            'patien' => PatienMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
