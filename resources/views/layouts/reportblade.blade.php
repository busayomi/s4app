
@foreach($reports as $report)
 <h4>@yield('report_id')</h4>
 <h4>@yield('report_category')</h4>  
<h4>{{$report->category}}</h4>
@endforeach