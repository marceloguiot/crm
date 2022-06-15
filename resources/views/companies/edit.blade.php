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
                  <h4 class="card-title">Editar compañia</h4>
                  
                  <form class="forms-sample" method="post" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label for="name"> Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre de la compañia"
                       value="{{$company->nombre}}" required />
                    @if ($errors->has('nombre'))
                    <div class="error">{{ $errors->first('nombre') }}</div>
                    @endif
                    </div>
                    <div class="form-group" style="margin-top:15px">
                      <label for="emil">Correo electrónico</label>
                      <input type="email" name="correo" class="form-control" id="email" placeholder="Correo electrónicol"
                       value="{{$company->correo}}" required />
                    @if ($errors->has('correo'))
                    <div class="error">{{ $errors->first('correo') }}</div>
                    @endif
                    </div>
                    <div class="form-group" style="margin-top:15px">
                      <label for="emil">Página web</label>
                      <input type="text" name="pagina" class="form-control" id="website" placeholder="Página web"
                       value="{{$company->pagina}}" required />
                    @if ($errors->has('pagina'))
                    <div class="error">{{ $errors->first('pagina') }}</div>
                    @endif
                    </div>
                    
                  <div class="form-group" style="margin-top:15px">
                      <label>Logo </label>
                      <input type="file" name="logo" class="file-upload-default" accept="image/*"  onchange="readURL(this);" >
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Subir imagen" >
                        
                      </div>
                      @if ($errors->has('logo'))
                        <div class="error">{{ $errors->first('logo') }}</div>
                    @endif
                    <img id="blah" style="display:none" src="" alt="service Image" style="margin-top:10px;border:3px solid #3bc3c4" />
                    </div>
                    <div align="right">
                    <button type="submit" class="btn btn-info" style="margin-top: 25px; color: white">Actualizar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
   </div>
</div>

@endsection