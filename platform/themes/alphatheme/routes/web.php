<?php

use Alphasky\Base\Http\Middleware\RequiresJsonRequestMiddleware;
use Alphasky\Theme\Facades\Theme;
use Illuminate\Support\Facades\Route;
use Theme\Alphatheme\Http\Controllers\AlphathemeController;

Theme::registerRoutes(function (): void {
    Route::group(['controller' => AlphathemeController::class], function (): void {
        Route::middleware(RequiresJsonRequestMiddleware::class)
            ->group(function (): void {
                Route::get('ajax/search', 'getSearch')->name('public.ajax.search');
            });

        // Add your custom route here
        // Ex: Route::get('hello', 'getHello');
    });
});

Theme::routes();
