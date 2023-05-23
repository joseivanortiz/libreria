<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

/**
 * Class EventoController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::paginate();

        return view('evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento = new Evento();
        return view('evento.create', compact('evento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  request()->validate(Evento::$rules);

        $evento = Evento::create($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento created successfully.'); */

            $datosEvento =  request()->except('_token');


            if($request->hasFile('foto')){
 
               
                $datosEvento['foto']=$request->file('foto')->store('uploads','public');
            }
 
            Evento::insert( $datosEvento);
 
            return redirect()->route('eventos.index')
            ->with('success', 'Evento Creado Correctamente.'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        return view('evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datosEvento =  request()->except(['_token','_method']);


        if($request->hasFile('foto')){
            $evento=Evento::findOrFail($id);
            //Storage::delete('public/'.$colaborador->foto);
            
            $datosEvento['foto']=$request->file('foto')->store('uploads','public');

        }

        Evento::where('id','=',$id)->update($datosEvento);

        $evento=Evento::findOrFail($id);

        return redirect()->route('eventos.index')->with('success', 'Evento Editado ');


      /*   request()->validate(Evento::$rules);

        $evento->update($request->all());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento updated successfully'); */
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento deleted successfully');
    }
}
