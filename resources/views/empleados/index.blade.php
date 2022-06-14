@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-info" style="color:#f3f3f3" href="{{route('empleados.create')}}">
               
                <span class="menu-title">Agregar empleado</span>
              </a>
<div class="table-responsive" style="margin-top:35px">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nombre</th>
                           <th>Apellidos</th>
                           <th>Compañia</th>
                           <th>Correo electrónico</th>
                           <th>Teléfono</th>
                           <th>Opciones</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php $key=1
                        @endphp
                        @if($empleados->isNotEmpty())
                        @foreach ($empleados as $com)
                        <tr>
                           <td>{{$key++}}</td>
                           <td>{{@$com->nombre}}</td>
                           <td>{{@$com->apellidos}}</td>
                           <td>{{@$com->compañia}}</td>
                           <td>{{@$com->correo}}</td>
                           <td>{{@$com->telefono}}</td>
                           <td>
                           <a class="btn btn-warning" role="button" href="{{route('empleados.edit',[$com->id])}}" data-toggle="tooltip" title="Edit">
                            
                            <span class="menu-title">Editar</span>
                            </a>
                            <form method="post" action="{{route('empleados.destroy',[$com->id])}}" style="margin-top:10px" >
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                             <button type="submit" class="btn btn-danger"> 
                              <span class="menu-title">Eliminar</span></button>
                            </form>
                         </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                           <td colspan="6" style="text-align:center">No hay empleados registrados</td>
                        </tr>
                        @endif
                     </tbody>
                  </table>
                 
               </div>
</div>

@endsection