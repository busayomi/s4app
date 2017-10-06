@extends('layouts.app')
@section('title') New Report @endsection

@section('content')
<div class="form-container col-md-6 col-md-offset-3 col-xs-10 col-xs-1">

<h4 class="heading-text"><b>Submit your report here.</b></h4>
<hr>
{!! Form::open(['action' => 'ReportsController@store', 'method' => 'POST', 'files' => 'true', 'class'=>'form-group']) !!}
        <div class="form-group">
            {{Form::label('first_name', 'First Name')}}
            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Chinedu'])}}
        </div>
        <div class="form-group">
            {{Form::label('last_name', 'Last Name')}}
            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Mohammed'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@email.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone_number', 'Phone Number')}}
            {{Form::text('phone_number', '', ['class' => 'form-control', 'placeholder' => '080X-XXX-XXXX'])}}
        </div>
        <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Rivers'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'No 1, Street, Bus-stop, LGA'])}}
        </div>
        <div class="form-group">
            {{Form::label('category', 'Complaint Category')}}
            {{Form::select('category', ['complaint' => 'Complaint', 'corruption' => 'Corrupt Pratices', 'theft' => 'Electricity Theft', 'faulty_network' => 'Faulty Network'], null, ['placeholder'=>'Select a category'])}}
        </div>
        <div class="form-group">
            {{Form::label('disco', 'Distribution Company')}}
            {{Form::select('disco', ['phed' => 'PHED', 'aedc' => 'AEDC', 'ie' => 'IE', 'ekedp' => 'EKEDP', 'bedc' => 'BEDC', 'ibedc' =>'IBEDC', 'kedco' =>'KEDCO', 'kaduna'=>'Kaduna Electric', 'jedc'=>'JEDC', 'eedc'=>'EEDC', 'yedc' => 'YEDC'], null, ['placeholder'=>'Select your DisCo'])}}
        </div>
        <div class="form-group">
            {{Form::label('meter_number', 'Meter Number')}}
            {{Form::text('meter_number', '', ['class' => 'form-control', 'placeholder' => '01589638'])}}
        </div>
        <div class="form-group">
            {{Form::label('acc_number', 'Account Number')}}
            {{Form::text('acc_number', '', ['class' => 'form-control', 'placeholder' => '881589638'])}}
        </div>
        <div class="form-group">
            {{Form::label('image', 'Add Image')}}
            {{Form::file('image')}}
        </div>
        <div class="form-group">
            {{Form::label('complaint', 'Complaint')}}
            {{Form::textarea('complaint', '', ['class' => 'form-control', 'placeholder' => 'Tell us your complaint here.'])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

</div>

@endsection
