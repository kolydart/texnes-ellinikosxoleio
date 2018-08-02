@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.fullpaper.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.fullpaper.fields.paper')</th>
                            <td field-key='paper'>{{ $fullpaper->paper->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.fullpaper.fields.finaltext')</th>
                            <td field-key='finaltext's> @foreach($fullpaper->getMedia('finaltext') as $media)
                                <p class="form-group">
                                    <a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                </p>
                            @endforeach</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.fullpaper.fields.description')</th>
                            <td field-key='description'>{{ $fullpaper->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.fullpapers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
