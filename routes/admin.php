<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::get('admin',function(){
    return "hola administrador";
});