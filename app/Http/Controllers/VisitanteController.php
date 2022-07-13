<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use App\Http\Requests\StoreVisitanteRequest;
use App\Http\Requests\UpdateVisitanteRequest;
use Illuminate\Support\Str;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitantes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitantes.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVisitanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVisitanteRequest $request)
    {
       
        $visitante =  Visitante::create([
            'razonsocial' =>  $request->razonsocial,
            'nombres' =>   $request->nombres,
            'apellidos' =>  $request->apellidos,
            'cargo'    =>   $request->cargo,
            'direccion'  =>   $request->direccion,
            'distrito'  =>   $request->distrito,
            'pais'  =>   $request->pais,
            'celular'  =>   $request->celular,
            'email'  =>      $request->email,
            'website'  =>    $request->website,
            'representa'  =>  $request->representa,
            'busca'  =>     $request->busca, 
            'qr'    => 'http://127.0.0.1:8000/asistencia/'.Str::random(40)
        ]);
        
        
        return redirect()->route('success',['visitante'=>$visitante->id]);
        // return view('visitantes.success',$visitante);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function show(Visitante $visitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitante $visitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisitanteRequest  $request
     * @param  \App\Models\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisitanteRequest $request, Visitante $visitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitante  $visitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitante $visitante)
    {
        //
    }

    public function success(Visitante $visitante)
    {
        
        $data = Visitante::where('id',$visitante->id)->get();
        return view('visitantes.success',['data'=>$data]);
    }


    public function asistencia(Visitante $visitante){
        if($success){
            $asistente = Visitante::where('token',$visitante->token)->get();
            return view('visitantes.asistencia',['asistente'=> $asistente]);
        }else {
            return 'no existe';
        }
        
        return dd($success);
    }

    


}
