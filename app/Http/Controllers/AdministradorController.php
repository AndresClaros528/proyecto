<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

class AdministradorController extends Controller
{
    public function __construct (){

        $this->middleware('EsAdmin');

    }

    public function index(){

        return "Si has llegado aqui, tienes rol de administrador";
    }
}
