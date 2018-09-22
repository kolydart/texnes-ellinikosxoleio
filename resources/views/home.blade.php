@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('gw.dashboard')
            </div>
            <div class="panel-body">
                Σύστημα Διαχείρισης Προτάσεων για το Συνέδριο <a href="/" class="btn btn-link">Oι Τέχνες στο ελληνικό σχολείο: παρόν και μἐλλον</a> <a href="/" class="btn btn-primary"><i class="fa fa-eye"></i></a><br><br>                
                @if (
                    Hash::check(
                        gateweb\common\Presenter::before(Auth::user()->email,'@'), Auth::user()->password
                        )
                    )
                <p class="mt-2"> <strong class="bg-warning"> Παρακαλώ αλλάξτε το αρχικό password </strong> <br> (είναι κοινότοπο) </br> </p>
                <p>
                    <a class="btn btn-warning" href="/change_password"> Αλλαγή password </a>
                </p>
                @endif
            </div>
        </div>
    </div>

    {{-- Δηλώσεις συμμετοχής σε εργαστήρια (chart) --}}
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Δηλώσεις συμμετοχής σε εργαστήρια
            </div>
            <div class="panel-body">
                   @include('admin.partials.reports.html')
            </div>
        </div>
    </div>

    {{-- Πληρότητα εργαστηρίων --}}
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Πληρότητα εργαστηρίων
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Όλα</th>
                            <th>>1 Ακροατές</th>
                            <th>0 Ακροατές</th>
                            <th>Μέση πληρότητα</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{App\Paper::accepted()->whereRaw('`type` LIKE "Εργαστήριο%"')->count()}}</td>
                            <td>{{App\Paper::accepted()->whereHas('attend')->count()}}</td>
                            <td>{{App\Paper::accepted()->whereRaw('`type` LIKE "Εργαστήριο%"')->whereDoesnthave('attend')->count()}}</td>
                            <td>{{round(DB::table('attend')->count()/App\Paper::accepted()->whereRaw('`type` LIKE "Εργαστήριο%"')->where('capacity','<=',51)->pluck('capacity')->sum()*100,2)}}%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Recently created attends --}}
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Πρόσφατες (10) δηλώσεις σε εργαστήρια
            </div>
            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped ajaxTable">
                    {{-- <thead>
                        <tr>
                            <td>
                                @lang('quickadmin.papers.fields.title')
                            </td>
                            <td>
                                @lang('quickadmin.fullpaper.fields.description')
                            </td>
                        </tr>
                    </thead> --}}
                    @foreach(App\Activitylog::where('description', 'attend_create')->latest()->take(10)->get() as $log)
                    <tr>
                        <td>
                            {{App\User::findOrFail($log->causer_id)->name}}
                        </td>
                        <td>
                            [{{App\Paper::findOrFail($log->subject_id)->id}}] {{App\Paper::findOrFail($log->subject_id)->title}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    {{-- Recently added fullpapers --}}
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Recently added fullpapers
            </div>
            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped ajaxTable">
                    {{-- <thead>
                        <tr>
                            <td>
                                @lang('quickadmin.papers.fields.title')
                            </td>
                            <td>
                                @lang('quickadmin.fullpaper.fields.description')
                            </td>
                        </tr>
                    </thead> --}}
                    @foreach($fullpapers as $fullpaper)
                    <tr>
                        <td>
                            <a href="{{ route('admin.papers.show',$fullpaper->paper->id) }}">{{ $fullpaper->paper->title }}</a>
                        </td>
                        <td>
                            {{ $fullpaper->description }}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</div>
@endsection

@section('javascript')
    @include('admin.partials.reports.javascript')
@stop
