@extends('frontend.app')

@section('content')
    <h3 class="page-title"><i class="far fa-clock"></i> @lang('quickadmin.sessions.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="badge badge-dark">@lang('quickadmin.qa_view')</span>
        </div>        

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('gw.id')</th>
                            <td field-key='id'>S{{ $session->id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sessions.fields.title')</th>
                            <td field-key='title'>{{ $session->title }}</td>
                        </tr>
                            <th>@lang('quickadmin.sessions.fields.room')</th>
                            <td field-key='room'>
                                @if (isset($session->room))
                                    <a href="{{route('frontend.rooms.show',$session->room->id)}}">{{ $session->room->title or '' }}</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sessions.fields.start')</th>
                            <td field-key='start'>{{ $session->start }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sessions.fields.duration')</th>
                            <td field-key='duration'>{{ (new gateweb\common\DateTime($session->duration))->get_timeAsDuration('minutes') }}'</td>
                        </tr>
                        <tr>                        
                            <th>@lang('quickadmin.sessions.fields.chair')</th>
                            <td field-key='chair'>{{ $session->chair }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#papers" aria-controls="papers" role="tab" data-toggle="tab"><span class="badge badge-dark">Εισηγήσεις/Εργαστήρια</span></a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="papers">
        @include('frontend.papers.table')
    </div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('frontend.sessions.index') }}" class="btn btn-outline-info">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

