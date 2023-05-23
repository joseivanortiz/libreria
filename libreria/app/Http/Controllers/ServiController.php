<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiController extends Controller
{
   
    

    public function index()
    {


        $servicios = Servicio::paginate();

        return view('servi', compact('servicios'));
    }






   
}
