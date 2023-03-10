@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.users.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.users.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('checkin', trans('quickadmin.users.fields.checkin').'', ['class' => 'control-label']) !!}
                    <p class="help-block">in Reception</p>
                    @if($errors->has('checkin'))
                        <p class="help-block">
                            {{ $errors->first('checkin') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('checkin', 'Checked-in', false, []) !!}
                            Checked-in
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('checkin', '??bsent', false, []) !!}
                            ??bsent
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('quickadmin.users.fields.phone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('attribute', trans('quickadmin.users.fields.attribute').'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('attribute'))
                        <p class="help-block">
                            {{ $errors->first('attribute') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 91.01', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 91.01
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 79.01', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 79.01
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 08', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 08
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 70', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 70
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 60', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 60
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 02', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 02
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 11', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 11
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 05 / 06 / 07 / 34 / 40', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 05 / 06 / 07 / 34 / 40
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 03/ 04', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 03/ 04
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 01', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 01
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 86', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 86
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? ???? 36', false, ['required' => '']) !!}
                            ?????????????????????????? ???? 36
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '????????????????????????/?? ???????????????? /????????', false, ['required' => '']) !!}
                            ????????????????????????/?? ???????????????? /????????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????????? /?? ???????????????? / ????????', false, ['required' => '']) !!}
                            ?????????????????????????? /?? ???????????????? / ????????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '????????????????????', false, ['required' => '']) !!}
                            ????????????????????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????????????????? ??????????????????', false, ['required' => '']) !!}
                            ?????????????????????? ??????????????????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????? ???????? / ??????', false, ['required' => '']) !!}
                            ?????????? ???????? / ??????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '?????????? ??????', false, ['required' => '']) !!}
                            ?????????? ??????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '???????????????? ?????????????????? / ????????', false, ['required' => '']) !!}
                            ???????????????? ?????????????????? / ????????
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('attribute', '????????', false, ['required' => '']) !!}
                            ????????
                        </label>
                    </div>
                    
                </div>
            </div>
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', trans('quickadmin.users.fields.password').'*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="{{-- row --}} col-md-6">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role_id', trans('quickadmin.users.fields.role').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('role_id'))
                        <p class="help-block">
                            {{ $errors->first('role_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('approved', trans('quickadmin.users.fields.approved').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('approved', 0) !!}
                    {!! Form::checkbox('approved', 1, old('approved', false), []) !!}
                    <p class="help-block"></p>
                    @if($errors->has('approved'))
                        <p class="help-block">
                            {{ $errors->first('approved') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

