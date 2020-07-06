<?php

namespace App\Http\Controllers;

use App\noc_reports;
use Illuminate\Http\Request;
use PDF;

class NocReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      noc_reports::create($request->all());
    //   return redirect()->route('all_reports');
    
    $allreports=noc_reports::all();
 
      return view('reporttable.allreport',compact(['allreports']));
    }

    public function fun_pdf($id)
   
    {
        // dd($id);
        $reportsdetail=noc_reports::where('id',$id)->first();
        // return view('reporttable.reportdetail',compact('reportsdetail'));
    //    $allreports=noc_reports::all();
       $pdf = PDF::loadView('reporttable.reportdetail', ['reportsdetail' => $reportsdetail]);
       return $pdf->download('itsolutionstuff.pdf');
    
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\noc_reports  $noc_reports
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $reports = noc_reports::all();
        return view("views.detail",compact('reports'));
    }

   
      
    public function show($id)
    {
        // dd($id);
        // $reportsdetail=DB::table('nocreports') ->where('id', $id);
        $reportsdetail=noc_reports::where('id',$id)->first();
       return view('reporttable.reportdetail',compact('reportsdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\noc_reports  $noc_reports
     * @return \Illuminate\Http\Response
     */
    public function edit(noc_reports $noc_reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\noc_reports  $noc_reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noc_reports $noc_reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\noc_reports  $noc_reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(noc_reports $noc_reports)
    {
        //
    }
}
