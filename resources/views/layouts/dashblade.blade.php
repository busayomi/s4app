<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 's4report') }} || @yield('title')</title>

        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
         <style> 
            html, body {
                background-color: #E6E5E5;
                color: black !important; 
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin:0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: Black; !important
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: camelcase;
            }
            table {
                border:1px solid grey;
            }
            .m-b-md {
                margin-bottom: 30px;
            }   
            .sidebar {
                background-color:#CCCBCB;
                height : 100%;
                margin : 50px 10px 0px 0px;
                padding : 10px 0px 50px 0px;
            }
            .sidebarnav {
                padding : 0;
                margin : 0;
                height :inherit;
               
            }
            .main-dash {
                margin: 0;
                display: flex; 
                padding: 0px 10px 10px 0px;
            }
            .page-header{
                margin: 5px;
            }
            .real-content{
                margin: 60px 0px 0px 0px;
            }
            .form-content{
                margin: 20px 40px 10px 40px;
            }
            .show-content{
                border: 2px solid white;
                font-family: serif;
                padding: 10px;
            }
        
            .status-icons {
                display: flex;
                flex-flow: row wrap;
                justify-content: space-around;
            }
            .status-icons > button {
                margin-top: 10px;
                padding: 0;
                width: 105px;    
            }
            .navbar {
                padding: 0px 30px;
            }
            td > button {
                height: 30px;
            }
            td {
                color: black !important;
            }
            .side-links{
                color: Red;
            }
           
        </style> 
    </head>
    <body>
        @include('inc.navbar')
        
        <div class="main-content main-dash">
            @include('inc.sidenavbar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main container-fluid real-content">
            <h3 class="page-header">Dashboard</h3>
                @include('inc.messages')
                @yield('content')
            </div>    
        </div>
    </body>
</html>
