@extends('layouts.app')

@section('content')
    <div class="full-height">


        <div class="banner">
            <h1 class="banner-logo flex-center">S4REPORT</h1>
            <h4 class="flex-center">@include('inc.messages')</h4>
        </div>
      
    <div class="container marketing">
        <center><h2>Here Are Some Of The Reasons Why You Don't Have Power</h2></center><br><br>
    <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4 why-icon center"><center>
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Failed Installations</h2>
                <p>If failed installations are not promptly reported, it increases number of days it takes for your services to get restored thus ensuring that you suffer longer outages.</p>
                <p><a class="btn btn-default" href="/reports/create" role="button">Report a failed installation &raquo;</a></p></center>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 why-icon center"><center>
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Your Neighbours</h2>
                <p>Your neighbours who bypass, tap or connect illegally do not pay for what they consume, this increases the losses within the system and reduces the ability of the DISCO to cover operational costs.</p>
                <p><a class="btn btn-default" href="/reports/create" role="button">Report a neighbour &raquo;</a></p></center>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 why-icon center"><center>
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Corrupt DISCO Staff</h2>
                <p>Corrupt DISCO Staff do not make your bills go away, they take your money and that ensures that debts pile up on the suppliers who end up not being able to pay for their resources.</p>
                <p><a class="btn btn-default" href="/reports/create" role="button">Report a corrupt staff &raquo;</a></p></center>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    <div>

<div class="footer">
    <footer>
        <small>&copy 2017 S4Report.com</small>
        <p class="pull-right"><a href="#">Back to top</a></p>
    </footer>
</div>
</div>



@endsection