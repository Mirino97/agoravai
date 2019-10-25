<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;

class PagesController extends Controller
{
    public function master() 
    {
    	return view('master');
    }

    public function html() 
    {
    	return view('html');
    }

    public function css1() 
    {
    	return view('css1');
    }

    public function laravel() 
    {
    	/*Abaixo, estamos passando junto ao view "laravel" um objeto chamado usuarios com todos as informações presentes no model usuarios*/
    	return view('laravel',['usuarios' => usuarios::all()]);
    }
}
