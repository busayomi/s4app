@extends('layouts.dashblade')
@section('title') Reports @endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main real-content show-content">
        <h3><b>Report #{{$report->id}}</b></h3>
        <hr>
        <h4>Name: <b>{{$report->first_name}} {{$report->last_name}}</b></h4>
        <h4>Category: <b>{{$report->category}}</b></h4>
        <h4>Status:: <b>{{$report->status}}</b></h4>
        <h4>Location: <b>{{$report->location}}</b></h4>
        <h4>Address: <b>{{$report->address}}</b></h4>
        <h4>Complaint: <b>{{$report->complaint}}</b></h4>
        <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1">
            <a href="/reports/{{$report->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action' => ['ReportsController@destroy', $report->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
        </div>
        <br><br>
        <div class="form-group">
            <!-- {{Form::label('comment', 'Comment')}} -->
            {{Form::textarea('complaint', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
            <br>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
</div>
@endsection
