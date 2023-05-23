<?php

namespace App\Http\Controllers;

use App\Models\Colaboradore;
use Illuminate\Http\Request;




class ColaboradorController extends Controller
{
    public function index()
    {


        $colaboradores = Colaboradore::paginate();

        return view('welcome', compact('colaboradores'));
    }


}
