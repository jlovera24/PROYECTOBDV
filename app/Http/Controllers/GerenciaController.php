<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenciaController extends Controller
{
    //
    public function index()
    {
        //$gerencia = Gerencia::all();
        return view('admin.Gerencias.index');
    }

}
