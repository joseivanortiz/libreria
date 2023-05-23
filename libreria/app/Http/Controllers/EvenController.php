<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EvenController extends Controller
{
    public function index()
    {
        $eventos = Evento::paginate();

        return view('even', compact('eventos'));
    }



}
