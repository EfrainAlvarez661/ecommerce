<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('products', function () {
    return 'Listado de Productos';
});
Route::get('products/create', function () {
    return 'Formulario de creacion de productos';
});
Route::get('products/{id}/{category}', function ($id,$category=null) {
    if ($category ==null){
        return 'Formulario de creacion de productos '.$id;

    }else{
        return 'Formulario de creacion de productos '.$id." de la categoria ".$category;
    }
    
});