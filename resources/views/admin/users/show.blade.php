@extends('layouts.dashblade')
@section('title') Users @endsection

@section('content')   
    <div class="container col-md-10 col-xs-11 show-content">
        <h3><b>User #{{$user->id}}</b></h3>
        <hr>
        <h4>Name: <b>{{$user->name}}</b></h4>
        <h4>Category: <b>{{$user->category}}</b></h4>
        <h4>Department: <b>{{$user->department}}</b></h4>
        <h4>Email Address: <b>{{$user->email}}</b></h4>
        <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
        
    </div>
@endsection
