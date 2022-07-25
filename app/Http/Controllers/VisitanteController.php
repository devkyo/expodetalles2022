<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use App\Models\expo2022;
use App\Http\Requests\StoreVisitanteRequest;
use App\Http\Requests\UpdateVisitanteRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

use App\ConsolMaile\visitanteEmail;
use App\Mail\VisitanteMail;

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
        
       $request->validate([
            'email' =>  'required|unique:visitantes',
       ],
        [
            'email.unique'  =>  'El email ingresado ya se encuentra registrado'
        ]);
        $visitante =  new Visitante ([
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
            'qr'    => Str::random(40)
        ]);
        
        $visitante->save();

        $expo2022 = expo2022::create([
            'visitante_id'  =>  $visitante->id,
            'asistencia'    =>  0,
        ]);
       


       
        
        // return redirect()->route('success',['visitante'=>$visitante->id, 'qr'=> $visitante->qr]);
        return redirect()->route('success',['visitante'=>   $visitante->id]);
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
        
        // return 'success ok';
        $data = Visitante::where('id',$visitante->id)->get();

       
  
        Mail::to('softawk@gmail.com')->send(new VisitanteMail($visitante));

        // return dd($visitante);
        return view('visitantes.success',['data'=>$data]);  
    }


    public function asistencia($token){

      $visitante = Visitante::where('qr',$token)->first();
      if($visitante){
          
          $expo2022 = $visitante->expo2022()->first();
        

          if($expo2022->asistencia === 1){
              return view('visitantes.inferia',[$visitante]);
          }else {

              $expo2022->asistencia = 1;
              $expo2022->save();
              return view('visitantes.asistencia',['visitante'=> $visitante,'expo'=>$expo2022]);
          }

      }else {
          return 'Expositor no existe';
      }
    }


  // public function visitanteEmail(){

    
  //   return view('emails.visitante');
  // }

}
