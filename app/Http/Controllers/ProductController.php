<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     function index(){
        return view("products.index");
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
