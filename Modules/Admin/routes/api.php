<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\SignInController;


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('panel/admin/signingIn', [SignInController::class, 'signingIn']);

});
