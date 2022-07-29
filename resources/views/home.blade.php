@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-grid gap-2 justify-content-md-start mb-2">
                <a type="button" href="{{route('downloadVisitante')}}" class="btn btn-success d-flex ">Descargar Excel</a>
            </div>
            <div class="card">
                
                <div class="card-header">{{ __('Visitantes registrados') }}</div>

                <div class="container">
                    

                  
                    
                    <table class="table display " id="visitantes">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Razón social</th>
                            <th scope="col">Nombres y apellidos</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Representa</th>
                            <th scope="col">Busca</th>
                            <th scope="col">Asistencia</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitantes as $visitante)
                            <tr>
                                <td>{{$visitante->id}}</td>
                                <td>{{$visitante->razonsocial}}</td>
                                <td>{{$visitante->nombres}} {{$visitante->apellidos}}</td>
                                <td>{{$visitante->cargo}}</td>
                                <td>{{$visitante->representa}}</td>
                                <td>{{$visitante->busca }}</td>
                                <td>
                                    @foreach ($visitante->expo2022 as $expo )
                                        
                                  
                                    @if($loop->first)
                                        @if($expo->asistencia === 0)
                                            <img style="max-width:20px" src="https://cdn3.iconfinder.com/data/icons/miscellaneous-80/60/uncheck-512.png" alt="">
                                        @else 
                                            <img style="max-width:20px" src="https://cdn2.iconfinder.com/data/icons/greenline/512/check-512.png" alt="">
                                        @endif
                                    @endif
                                    
                                    
                                    

                                    @endforeach
                                </td>


                            </tr>
                            @endforeach

                          
                         
                        </tbody>
                    </table>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
