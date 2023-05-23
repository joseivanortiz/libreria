<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

/**
 * Class PublicacionController
 * @package App\Http\Controllers
 */
class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicacions = Publicacion::paginate();

        return view('publicacion.index', compact('publicacions'))
            ->with('i', (request()->input('page', 1) - 1) * $publicacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publicacion = new Publicacion();
        return view('publicacion.create', compact('publicacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* request()->validate(Publicacion::$rules);

        $publicacion = Publicacion::create($request->all());

        return redirect()->route('publicacions.index')
            ->with('success', 'Publicacion created successfully.');*/


                  //  $datosPublicacion =  request()->all();
           $datosPublicacion =  request()->except('_token');


           if($request->hasFile('foto')){

              
               $datosPublicacion['foto']=$request->file('foto')->store('uploads','public');
           }

           Publicacion::insert($datosPublicacion);

           return redirect()->route('publicacions.index')
           ->with('success', 'Publicacion created successfully.');









    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = Publicacion::find($id);

        return view('publicacion.show', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::find($id);

        return view('publicacion.edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Publicacion $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        /* request()->validate(Publicacion::$rules);

        $publicacion->update($request->all());

        return redirect()->route('publicacions.index')
            ->with('success', 'Publicacion updated successfully'); */


            $datosPublicacion =  request()->except(['_token','_method']);


            if($request->hasFile('foto')){
                $publicacion=Publicacion::findOrFail($id);
                //Storage::delete('public/'.$publicacion->foto);
                
                $datosPublicacion['foto']=$request->file('foto')->store('uploads','public');
    
            }
    
            Publicacion::where('id','=',$id)->update($datosPublicacion);
    
            $publicacion=Publicacion::findOrFail($id);
    
            return redirect()->route('publicacions.index')->with('success', 'Colaborador Editado ');;
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::find($id)->delete();

        return redirect()->route('publicacions.index')
            ->with('success', 'Publicacion deleted successfully');
    }
}
