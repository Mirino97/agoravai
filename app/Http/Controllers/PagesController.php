<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastros;

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
    	/*Abaixo, estamos passando junto ao view "laravel" um objeto chamado cadastros com todos as informações presentes no model cadastros*/
    	return view('laravel',['cadastros' => cadastros::all()]);
    }

    public function edit() 
    {

        return view('edit',['cadastros' => cadastros::all()]);

    }

}
