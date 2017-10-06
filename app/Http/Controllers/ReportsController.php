<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reports = Report::all();
        // $reports = Report::orderBy('created_at', 'desc')->get();
        $reports = Report::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.reports.index')->with('reports', $reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form Validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'category' => 'required',
            'phone_number' => 'required',
            'disco' => 'required',
            'complaint' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ]);

        //Create report
        $report = new report;
        $report->first_name = $request->input('first_name');
        $report->last_name = $request->input('last_name');
        $report->image = $request->input('image');
        $report->email = $request->input('email');
        $report->category = $request->input('category');
        $report->phone_number = $request->input('phone_number');
        $report->disco = $request->input('disco');
        $report->location = $request->input('location');
        $report->address = $request->input('address');
        $report->complaint = $request->input('complaint');

        $report->save();

        //redirect and success message
        return redirect('/')->with('success', 'Thank you for making this report.<br> Our representatives will be in touch in the next few days.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('admin.reports.show')->with('report', $report);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();
        //redirect and success message
        return redirect('/reports')->with('success', 'Report Deleted!');
    }
}
