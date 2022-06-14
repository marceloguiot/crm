@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class='col-md-6'>
                            <div class="card">
                                <div class="card-body">
                                    <strong>Total de compañias:</strong>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class="card">
                                <div class="card-body">
                                    <strong>Total de empleados:</strong>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
