@extends('layouts.app', ['class' => 'login-page', 'page' => 'Unidad de Servicios Generales', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')

@section('texto')

@endsection

@section('img-logo')


@endsection

@section('salir')


@endsection
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">
                    <h1 class="card-title"></h1>
                </div>
                <div class="card-body">
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="text" name="usuario"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Usuario">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                 <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="Contraseña" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">Iniciar</button>
                    <div class="pull-left">
                        <h6>
                           <!-- <a href="{{ route('register') }}" class="link footer-link">Create Account</a>-->
                        </h6>
                    </div>
                    {{-- <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">I forgot the passwod</a>
                        </h6>
                    </div> --}}
                </div>
            </div>
        </form>
    </div>
@endsection
