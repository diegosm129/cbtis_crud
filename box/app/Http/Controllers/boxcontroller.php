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
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
