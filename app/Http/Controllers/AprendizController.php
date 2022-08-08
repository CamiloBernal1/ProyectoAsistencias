<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['aprendiz']=Aprendiz::paginate(10);
        return view('aprendiz.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aprendiz.create');
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
        $datosAprend = $request->except('_token'); 
        Aprendiz::insert($datosAprend); 
        return response()->json($datosAprend);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function show(Aprendiz $aprendiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aprendiz = Aprendiz::findOrFail($id); 
        return view('aprendiz.edit', compact('aprendiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAprend = $request->except('_token','_method');
        Aprendiz::where('id', '=', $id)->update($datosAprend);

        $aprendiz = Aprendiz::findOrFail($id); 
        return view('aprendiz.edit', compact('aprendiz'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Aprendiz::destroy($id); 
        return redirect('aprendiz');
        
    }
}
