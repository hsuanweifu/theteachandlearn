@extends('master')

@section('title', '-Forgot Password')

@section('navbar')
    @include('navbar')
@endsection

@section('content')
    <div class = "row">
        <div class="col-md-8 offset-md-2">
            <p class="alert alert-success">
                {{ trans('activate.email sent.1') }}<br/>{{ trans('activate.email sent.2') }}
            </p>
        </div>
    </div>
    <div class = "row">
        <div class="col-md-8 offset-md-2">
            <h4>{{ trans('activate.title') }}</h4>
        </div>
    </div>
    <div class = "row">
        <div class="col-md-8 offset-md-2">
            {!! Form::open(array('url' => 'sign_up', 'class' => 'form-horizontal')) !!}
            <div class="form-group">
                {!! Form::label('email', trans('general.email')) !!}
                {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('activation_code', trans('activate.activation code')) !!}
                {!! Form::text('activation_code', null, ['class' => 'form-control' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit(trans('general.activate'), ['class' => 'btn btn-primary pull-xs-right']) !!}
                {!! HTML::link('/home', trans('general.cancel'), array('class' => 'btn btn-secondary pull-xs-right')) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection