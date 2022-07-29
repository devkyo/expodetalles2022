<table>
  <tr>
      <td width="24">Razon social</td>
      <td width="24">Ruc</td>
      <td width="24">Nombres</td>
      <td width="24">Apellidos</td>
      <td width="24">Cargo</td>
      <td width="24">Direccion</td>
      <td width="24">Distrito</td>
      <td width="34">Pais</td>
      <td width="24">Celular</td>
      <td width="24">Email</td>
      <td width="24">Website</td>
      <td width="24">Tipo de empresa</td>
      <td width="24">Busca productos</td>
      <td width="24">Asistencia en feria 2022</td>
  </tr>
  @foreach($visitantes as $visitante)
      <tr>
          <td>{{$visitante->razonsocial }}</td>
          <td>{{$visitante->ruc }}</td>
          <td>{{$visitante->nombres }}</td>
          <td>{{$visitante->apellidos }}</td>
          <td>{{$visitante->cargo}}</td>
          <td>{{$visitante->direccion}}</td>
          <td>{{$visitante->distrito}}</td>
          <td>{{$visitante->pais}}</td>
          <td>{{$visitante->celular}}</td>
          <td>{{$visitante->email}}</td>
          <td>{{$visitante->website}}</td>
          <td>{{$visitante->representa}}</td>
          <td>{{$visitante->busca}}</td>
          <td>
            @foreach ($visitante->expo2022 as $expo )
                
          
            @if($loop->first)
                @if($expo->asistencia === 0)
                    No
                @else 
                   Si
                @endif
            @endif
          
            @endforeach
          </td>
      </tr>

  @endforeach
</table>