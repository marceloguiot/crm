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
                  <h4 class="card-title">{{$title}}</h4>
                  
                  <form class="forms-sample" method="post" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="name"> Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre de la compañia"
                       value="{{old('nombre')}}" required />
                    @if ($errors->has('nombre'))
                    <div class="error">{{ $errors->first('nombre') }}</div>
                    @endif
                    </div>
                    
                    <div class="form-group" style="margin-top:15px">
                      <label for="emil">Correo electrónico</label>
                      <input type="email" name="correo" class="form-control" id="email" placeholder="Correo electrónico"
                       value="{{old('correo')}}" required />
                    @if ($errors->has('correo'))
                    <div class="error">{{ $errors->first('correo') }}</div>
                    @endif
                    </div>
                    <div class="form-group"  style="margin-top:15px">
                      <label for="emil">Página web</label>
                      <input type="text" name="pagina" class="form-control" id="website" placeholder="Página web"
                       value="{{old('pagina')}}" required />
                    @if ($errors->has('pagina'))
                    <div class="error">{{ $errors->first('pagina') }}</div>
                    @endif
                    </div>
                    
                  <div class="form-group"  style="margin-top:15px">
                      <label>Logo </label>
                      <input type="file" name="logo" class="file-upload-default" accept="image/*">
                      @if ($errors->has('logo'))
                        <div class="error">{{ $errors->first('logo') }}</div>
                    @endif
                   
                    </div>
                    <div align="right" style="margin-top:25px">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
   </div>
</div>
@endsection