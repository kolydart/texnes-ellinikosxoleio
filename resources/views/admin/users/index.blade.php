@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    @can('user_create')
    <p>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('id')</th>
                        <th>@lang('quickadmin.users.fields.name')</th>
                        <th>@lang('quickadmin.users.fields.email')</th>
                        <th>@lang('quickadmin.users.fields.checkin')</th>
                        <th>@lang('quickadmin.users.fields.attribute')</th>
                        <th>@lang('quickadmin.users.fields.role')</th>
                        <th>@lang('Εργαστήρια')</th>
                        <th>@lang('created_at')</th>
                        {{-- <th>weak</th> --}}
                        <th>@lang('quickadmin.users.fields.approved')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.users.index') !!}';
            window.dtDefaultOptions.columns = [@can('user_delete')
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'checkin', name: 'checkin'},
                {data: 'attribute', name: 'attribute'},
                {data: 'role.title', name: 'role.title'},
                {data: 'attend_count', name: 'attend_count',  "searchable": false, "targets": 0 },
                {data: 'created_at', name: 'created_at'},
                // {data: 'weak_password', name: 'weak_password'},
                {data: 'approved', name: 'approved'},
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection