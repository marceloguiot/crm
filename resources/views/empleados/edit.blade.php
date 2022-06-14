@extends('layouts.app')
@section('content')
<div class="content-wrapper">
   <div class="row">
   <div class="col-md-8 offset-md-2 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                @if (\Session::has('error'))
                  <div class="alert alert-danger">
                     {!! \Session::get('error') !!}
                  </div>
                @endif
                  <h4 class="card-title">Editar empleado</h4>
                  
                  <form class="forms-sample" method="post" action=" {{ route('empleados.update', $empleado->id) }}" id="edit_employee">
                  @csrf
                  <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="nombre" value="{{$empleado->nombre}}" placeholder="Nombre" required />
                    @if ($errors->has('nombre'))
                    <div class="error">{{ $errors->first('nombre') }}</div>
                    @endif
                    </div>
                    <div class="form-group"  style="margin-top:15px">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos"
                      value="{{$empleado->apellidos}}" required />
                    @if ($errors->has('apellidos'))
                    <div class="error">{{ $errors->first('apellidos') }}</div>
                    @endif
                    </div>
                    <div class="form-group"  style="margin-top:15px">
                      <label for="correo">Correo electrónico</label>
                      <input type="email" name="correo" class="form-control" id="correo" placeholder="Correo electrónico"
                      value="{{$empleado->correo}}" required />
                    @if ($errors->has('correo'))
                    <div class="error">{{ $errors->first('correo') }}</div>
                    @endif
                    </div>
                    <div class="form-group"  style="margin-top:15px">
                      <label for="telefono">Teléfono</label>
                      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono"
                      value="{{$empleado->telefono}}" required />
                    @if ($errors->has('telefono'))
                    <div class="error">{{ $errors->first('telefono') }}</div>
                    @endif
                    </div>
                    
                    <div class="form-group"  style="margin-top:15px">
                      <label for="company">Compañia</label>
                      <select name="company_id" class="form-control" value="{{$empleado->company_id}}" required>
                        <option  value="">--Elegir compañia--</option>
                        <option  value="7">--Elegir compañia--</option>
                   
                      </select>
                     
                    @if ($errors->has('company_id'))
                    <div class="error">{{ $errors->first('company_id') }}</div>
                    @endif
                    </div>

                    <div align="right" style="margin-top:25px">
                    <button type="submit" style="color:white" class="btn btn-info">Actualizar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
   </div>
</div>
@endsection