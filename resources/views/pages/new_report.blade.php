@extends('layouts.app')

@section('content')
<div class="form-container">
Report Electricity crime here?
<form method="POST" action="/dash">
    {{ csrf_field() }}
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Address: <input type="text" name="address"><br>
    Complaint Category: 
    <select>
        <option value="complaint">Complaint</option>
        <option value="electricity theft">Electricity Theft</option>
        <option value="corruption">Corruption</option>
        <option value="faulty network">Faulty Network</option>
    </select><br>
    Location: <input type="text" name="location"><br>
    Meter Number: <input type="text" name="meter"><br>
    PHED Account Number: <input type="text" name"accno"><br>
    Complaint: <input type="text" name="complaint"><br>
    <input type="submit" value="Create">
</form> 
</div>

@endsection

