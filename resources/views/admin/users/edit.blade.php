@extends('layouts.dashblade')
@section('title') Users @endsection

@section('content')
<div class="form-content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                <div class="panel-body">
                  {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
                      <div class="form-group">
                          {{Form::label('username', 'Username')}}
                          {{Form::text('username', $user->name, ['class' => 'form-control', 'placeholder' => 'Username'])}}
                      </div>
                      <div class="form-group">
                          {{Form::label('email', 'Email')}}
                          {{Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                      </div>
                      
                      <div class="form-group">
                          {{Form::label('department', 'Department')}}
                          {{Form::select('department', ['rpd' => 'Revenue Protection Department', 'cs' => 'Customer Service', 'dispatch' => 'Dispatch'], null, ['placeholder' => $user->department, 'class' => 'form-control'])}}
                      </div>
                      <div class="form-group">
                          {{Form::label('role', 'Role')}}
                          {{Form::select('role', ['support' => 'Support Staff', 'admin' => 'Disco Admin', 'supreme' => 'Supreme Admin'], null, ['placeholder' => $user->role, 'class' => 'form-control'])}}
                      </div>
                      <div class="form-group">
                          {{Form::label('password', 'Password')}}
                          {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                      </div>
                      {{Form::hidden('_method', 'PUT')}}
                      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New User</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <select name="department" class="form-control" required autofocus>
                                  <option value="rpd">Revenue Protection Department</option>
                                  <option value="cs">Customer Service</option>
                                  <option value="dispatch">Dispatch</option>
                                </select>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <select name="role" class="form-control" required autofocus>
                                  <option value="support">Support</option>
                                  <option value="admin">Admin</option>
                                  <option value="supreme">Supreme</option>
                                </select>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
