@extends('layouts.dashblade')
@section('title') New User @endsection

@section('content')
<div class="form-content">
<h3>Create New User</h3>
    {!! Form::open(['action' => 'UsersController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('username', 'Username')}}
            {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div> 
        <div class="form-group">
            {{Form::label('department', 'Department')}}
            {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Department'])}}
        </div> 
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div> 
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection

   