<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\box;


class boxcontroller extends Controller
{
    
    public function index()
    {
        $guantes= box::all();
        return view('box.index' , compact('guantes'));
    }

    
    public function create()
    {
        return view('box.create');
    }

    
    public function store(Request $request)
    {
        $request ->validate([
            'descripcion' => 'required',
            'peso' => 'required',
            'marca' => 'required',
            'color' => 'required',
            'precio' => 'required'
        ]);

        $guante = new box();
        $guante->descripcion = $request->descripcion;
        $guante->color = $request->color;
        $guante->peso = $request->peso;
        $guante->marca = $request->marca;
        $guante->precio = $request->precio;
        $guante->save();

        return redirect()->route('box.index') ->with('correcto', 'el guante fue guardado con exito');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(box $guante)
    {
        
    }

    
    public function update(Request $request, box $guante)
    {
        $request ->validate([
            'descripcion' => 'required',
            'peso' => 'required',
            'precio' => 'required'
        ]);

        $guante->descripcion = $request->descripcion;
        $guante->color = $request->color;
        $guante->peso = $request->peso;
        $guante->marca = $request->marca;
        $guante->precio = $request->precio;
        $guante->save();

        return redirect()->route('box.index') ->with('correcto', 'el guante fue actualizado con exito');
    }

    
    public function destroy(box $guante)
    {
        $guante->delete();
        
        return redirect()->route('box.index') ->with('correcto', 'el guante borrado con exito');
    }
}
