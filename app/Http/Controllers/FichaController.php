<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['ficha']=Ficha::paginate(5);
        return view('ficha.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ficha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosFicha = request()->except('_token'); 
        Ficha::insert($datosFicha); 
        return response()->json($datosFicha); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ficha=Ficha::findOrFail($id); 
        return view('ficha.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosFicha = request()->except('_token','_method');
        Ficha::where('id', '=', $id)->update($datosFicha);

        $ficha=Ficha::findOrFail($id); 
        return view('ficha.edit', compact('ficha'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ficha::destroy($id);
        return redirect('ficha');
    }
}
