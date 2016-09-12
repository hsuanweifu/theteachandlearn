@extends('master')

@section('title', '-Forgot Password')

@section('navbar')
    @include('navbar')
@endsection

@section('content')
    <div class = "row">
        <div class="col-md-8 offset-md-2">
            <h4>{{ trans('register.title') }}</h4>
        </div>
    </div>
    <div class = "row">
        <div class="col-md-8 offset-md-2">
            {!! Form::open(array('url' => 'register', 'class' => 'form-horizontal')) !!}
            <div class="form-group">
                {!! Form::label('email', trans('general.email')) !!}
                {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('first_name', trans('general.first name')) !!}
                {!! Form::text('first_name', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('last_name', trans('general.last name')) !!}
                {!! Form::text('last_name', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', trans('general.password')) !!}
                {!! Form::password('password', ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password_confirmation', trans('general.confirm password')) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit(trans('general.register'), ['class' => 'btn btn-primary pull-xs-right']) !!}
                {!! HTML::link('/home', trans('general.cancel'), array('class' => 'btn btn-secondary pull-xs-right')) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection