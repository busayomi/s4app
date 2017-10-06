@extends('layouts.dashblade')
@section('title') Reports @endsection

@section('content')

    

    <div class="row placeholders">
        <div class="col-xs-12 col-sm-12 placeholder status-icons">
            <button type="button" class="btn btn-danger"><h4>Open</h4></button>
            <button type="button" class="btn btn-warning"><h4>Processing</h4></button>
            <button type="button" class="btn btn-success"><h4>Completed</h4></button>
        </div>
    </div>
    <h2 class="sub-header">Reports</h2>
    @if(count($reports) >= 1)
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Report ID</th>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($reports as $report)
                <tr>
                  <td><a href="/reports/{{$report->id}}">{{$report->id}}</a></td>
                  <td><a href="/reports/{{$report->id}}">{{$report->category}}</a></td>
                  <td><a href="/reports/{{$report->id}}">{{$report->first_name}} {{$report->last_name}}</a></td>
                  <td><a href="/reports/{{$report->id}}"><button type="button" class="btn btn-danger">Open</button></a></td>
                  <td><a href="/reports/{{$report->id}}">{{$report->created_at}}</a></td>
                </tr>
            @endforeach
            </table>  
        {{$reports->links()}}
                       
</div>

@else
    <h1>You have no reports here yet.</h1>
@endif


@endsection