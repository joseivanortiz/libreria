<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PubliController extends Controller
{
    
    public function index()
    {
        $publicacions = Publicacion::paginate();

        return view('nosotros', compact('publicacions'));
    }

}
