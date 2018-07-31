@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.reviews.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.review')</th>
                            <td field-key='review'>{{ $review->review }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.comment')</th>
                            <td field-key='comment'>{!! $review->comment !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.user')</th>
                            <td field-key='user'>{{ $review->user->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.reviews.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
