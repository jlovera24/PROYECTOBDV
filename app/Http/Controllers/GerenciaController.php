<?php

namespace App\Http\Controllers;

use App\Models\Gerencia;
use Illuminate\Http\Request;

class GerenciaController extends Controller
{
    //
    public function index()
    {
        $gerencia = Gerencia::all();
        return view('admin.Gerencias.index', compact('gerencia'));
    }

    public function create()
    {
        //$gerencia = Gerencia::all();
        return view('admin.Gerencias.Create');
    }

}
