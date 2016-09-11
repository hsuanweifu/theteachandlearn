@extends('master')

@section('title', '-Home')

@section('navbar')
    @include('navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <img class="img-fluid m-x-auto d-block" src="images/logo.png" alt="homepage-logo">
            <h5  class="text-center">Aims to provide the best platform for students and instructors all over the world</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
            {!! Form::open(array('url' => 'login', 'class' => 'form-horizontal')) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! HTML::link('/forgot_password', 'Forgot your password?') !!}
                {!! Form::submit('Login', ['class' => 'btn btn-primary pull-xs-right']) !!}
                {!! HTML::link('/sign_up', 'Sign Up', array('class' => 'btn btn-default pull-xs-right')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection