@extends('layouts.dashblade')
@section('title') Users @endsection

@section('content')

   

    <div class="row placeholders">
        <div class="col-xs-12 col-sm-12 placeholder status-icons">
            <a href="{{ route('register') }}"><button type="button" class="btn btn-success"><h4>+ New User</h4></button></a>   
            <!-- <a href="/users/create"><button type="button" class="btn btn-success"><h4>+ New User</h4></button></a>    -->
        </div>
    </div>
    <h2 class="sub-header">Users</h2>
    @if(count($users) >= 1)
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Department</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Category</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($users as $user)
                <tr>
                  <td><a href="/users/{{$user->id}}">{{$user->id}}</a></td>
                  <td><a href="/users/{{$user->id}}">{{$user->department}}</a></td>
                  <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                  <td><a href="/users/{{$user->id}}">{{$user->email}}</a></td>
                  <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                </tr>
              @endforeach
            </table>
          {{$users->links()}}
</div>
@else
    <h1>You have no users yet.</h1>
    <h4>Please create new user <a href="/users/create">here</a></h4>
@endif

@endsection