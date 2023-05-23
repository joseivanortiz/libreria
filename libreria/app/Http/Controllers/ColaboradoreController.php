<?php

namespace App\Http\Controllers;

use App\Models\Colaboradore;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
/**
 * Class ColaboradoreController
 * @package App\Http\Controllers
 */
class ColaboradoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $colaboradores = Colaboradore::paginate();

        return view('colaboradore.index', compact('colaboradores'))
            ->with('i', (request()->input('page', 1) - 1) * $colaboradores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colaboradore = new Colaboradore();
        return view('colaboradore.create', compact('colaboradore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


           //  $datosColaborador =  request()->all();
           $datosColaborador =  request()->except('_token');


           if($request->hasFile('foto')){

              
               $datosColaborador['foto']=$request->file('foto')->store('uploads','public');
           }

           Colaboradore::insert( $datosColaborador);

           return redirect()->route('colaboradores.index')
           ->with('success', 'Colaborador Creado Correctamente.'); 

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colaboradore = Colaboradore::find($id);

        return view('colaboradore.show', compact('colaboradore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $colaboradore = Colaboradore::find($id);

        return view('colaboradore.edit', compact('colaboradore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Colaboradore $colaboradore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosColaborador =  request()->except(['_token','_method']);


        if($request->hasFile('foto')){
            $colaborador=Colaboradore::findOrFail($id);
            Storage::delete('public/'.$colaborador->foto);
            
            $datosColaborador['foto']=$request->file('foto')->store('uploads','public');

        }

        Colaboradore::where('id','=',$id)->update($datosColaborador);

        $colaborador=Colaboradore::findOrFail($id);

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador Editado ');


       /* request()->validate(Colaboradore::$rules);

        $colaboradore->update($request->all());

        return redirect()->route('colaboradores.index')
            ->with('success', 'Colaborador Editado ');*/


    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $colaboradore = Colaboradore::find($id)->delete();

        return redirect()->route('colaboradores.index')
            ->with('success', 'Colaborador Eliminado Correctamente');
    }
}
