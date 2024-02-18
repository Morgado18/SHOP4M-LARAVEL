<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers;

    
    Route::prefix("user")->group(function(){
        Route::get("dash", ["as" => "user.dash", "uses" => "App\Http\Controllers\UserController@dash"]);
    });

    /* Route::prefix('imgs')->group(function(){
        Route::get("imgs", ["as" => "user.dash", "uses" => "App\Http\Controllers\UserController@dash"]);
    });

    imgs rotas
    dinâmicas
  */