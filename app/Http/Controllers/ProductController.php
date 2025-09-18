<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     function index(){
        return "Listado Productos";
    }
    function create(){
         return 'Formulario de creacion de productos';
    }
    function show($id,$category=null){
         if ($category ==null){
        return 'Formulario de creacion de productos '.$id;

    }else{
        return 'Formulario de creacion de productos '.$id." de la categoria ".$category;
    }
    }
}
