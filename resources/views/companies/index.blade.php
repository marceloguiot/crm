@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-info" style="color:#f3f3f3" href="{{route('companies.create')}}">
               
                <span class="menu-title">Agregar compañia</span>
              </a>
<div class="table-responsive" style="margin-top:35px">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Nombre</th>
                           <th>Correo electrónico</th>
                           <th>Logo</th>
                           <th>Página web</th>
                           <th>Opciones</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php $key=1
                        @endphp
                        @if($companies->isNotEmpty())
                        @foreach ($companies as $com)
                        <tr>
                           <td>{{$key++}}</td>
                           <td>{{@$com->nombre}}</td>
                           <td>{{@$com->correo}}</td>
                           <td>{{@$com->logo}}</td>
                           <td >
                              {{@$com->pagina}}
                           </td>
                           <td>
                           <a class="btn btn-warning" role="button" href="{{route('companies.edit',[$com->id])}}" data-toggle="tooltip" title="Edit">
                            
                            <span class="menu-title">Editar</span>
                            </a>
                            <form method="post" action="{{route('companies.destroy',[$com->id])}}" style="margin-top:10px" >
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
                           <td colspan="6" style="text-align:center">No hay compañias registradas</td>
                        </tr>
                        @endif
                     </tbody>
                  </table>
                  {!! $companies->links() !!}
               </div>
</div>

@endsection