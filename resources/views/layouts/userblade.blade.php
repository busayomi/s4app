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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: camelcase;
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
            }
            .main-dash {
                margin : 0;
                display: flex; 
                padding: 0px 10px 10px 0px;
            }
            .real-content{
                margin: 10px 0px 0px 0px;
            }
            .status-icons {
                display: flex;
                flex-flow: row wrap;
                justify-content: space-around;
            }
            .status-icons > button {
                margin-top: 10px;
                padding: 0;
                width: 200px;    
            }
            td > button {
                height: 30px;
            }
            td {
                color: black !important;
            }
            .real-content{

            }
        </style> 
    </head>
    <body>
        @include('inc.navbar')
        <div class="main-content main-dash">
            @include('inc.sidenavbar')
            @yield('content')
        </div>
    </body>
</html>
