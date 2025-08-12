<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;

Route::post('/login', [LoginAction::class, 'asController']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', LogoutAction::class);
});