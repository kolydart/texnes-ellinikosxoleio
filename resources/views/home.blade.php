@extends('layouts.app')

@section('content')
    <div class="row">
         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added fullpapers</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.fullpaper.fields.description')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($fullpapers as $fullpaper)
                            <tr>
                               
                                <td>{{ $fullpaper->description }} </td> 
                                <td>

                                    @can('fullpaper_view')
                                    <a href="{{ route('admin.fullpapers.show',[$fullpaper->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('fullpaper_edit')
                                    <a href="{{ route('admin.fullpapers.edit',[$fullpaper->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('fullpaper_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.fullpapers.destroy', $fullpaper->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>


    </div>
@endsection

