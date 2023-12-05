<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datos['libros']=Libros::paginate(5);
        return view('libros.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosLibros=request()->except('_token');
        Libros::insert($datosLibros);
        return redirect('libros')->with('mensaje','Libro Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $libros=Libros::findOrFail($id);
        return view('libros.edit',compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosLibros=request()->except('_token','_method');
        Libros::where('id','=',$id)->update($datosLibros);

        $libros=Libros::findOrFail($id);
        return view('libros.edit',compact('libros'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Libros::destroy($id);
        return redirect('libros')->with('mensaje','Libro Borrado');
    }
}
