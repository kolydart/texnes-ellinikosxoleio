@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.lunch.title')</h3>
    
    {!! Form::model($lunch, ['method' => 'PUT', 'route' => ['admin.lunches.update', $lunch->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.lunch.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('menu', trans('quickadmin.lunch.fields.menu').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('menu', old('menu'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('menu'))
                        <p class="help-block">
                            {{ $errors->first('menu') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('confirm', trans('quickadmin.lunch.fields.confirm').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('confirm', 0) !!}
                    {!! Form::checkbox('confirm', 1, old('confirm', old('confirm')), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('confirm'))
                        <p class="help-block">
                            {{ $errors->first('confirm') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

