@extends('master')

@section('title', '-Home')

@section('navbar')
    @include('navbar')
@endsection

@section('notification')
    @include('notification')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            {!! Form::open(array('url' => 'login', 'class' => 'form-horizontal')) !!}
            <div class="form-group">
                {!! Form::label('email', trans('general.email')) !!}
                {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', trans('general.password')) !!}
                {!! Form::password('password', ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! HTML::link('/forgot_password', trans('home.forgot password')) !!}
                {!! Form::submit(trans('general.login'), ['class' => 'btn btn-primary pull-xs-right']) !!}
                {!! HTML::link('/register', trans('general.register'), array('class' => 'btn btn-secondary pull-xs-right')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection