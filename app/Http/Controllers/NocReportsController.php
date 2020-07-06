<?php

namespace App\Http\Controllers;

use App\noc_reports;
use Illuminate\Http\Request;
use PDF;
use App\teams_members;
use Illuminate\Support\Facades\Validator;

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
      

        $validator = Validator::make($request->all(), [
            'report_end_time' => 'required',
            'report_start_time' => 'required',
            'report_date' => 'required',
            'team_members_name'=> 'required',
            'description'=>'required',
        ]);

        if ($validator->fails()) {
          
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
    

        // dd($request);
        $t_member=new noc_reports();
        $t_member->team_name=$request->team_name;
    $t_member->team_members_name=implode(",",request('team_members_name'));
        $t_member->description=$request->description;
        $t_member->report_date=$request->report_date;
        $t_member->report_start_time=$request->report_start_time;
        $t_member->report_end_time=$request->report_end_time;
        $t_member->save();
     
    //   noc_reports::create($request->all());
     $allreports=noc_reports::all();
 
       return view('reporttable.allreport',compact(['allreports']));
    }

    public function fun_pdf($id)
   
    {
        // dd($id);
        $reportsdetail=noc_reports::where('id',$id)->first();
        // return view('reporttable.reportdetail',compact('reportsdetail'));
    //    $allreports=noc_reports::all();
       $pdf = PDF::loadView('reporttable.reportdetail', ['reportsdetail' => $reportsdetail,'button'=>false]);
       return $pdf->download('itsolutionstuff.pdf');
    
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\noc_reports  $noc_reports
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        // $reportsdetail=DB::table('nocreports') ->where('id', $id);
        $reportsdetail=noc_reports::where('id',$id)->first();
        $button=true;
       return view('reporttable.reportdetail',compact('reportsdetail','button'));
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

    public function getuser(Request $request)
    {
        if ($request) {
           
            $user = teams_members::where('team_id',$request->t_member)->get();
            return response()->json($user);
        } else {

        }
    }
}
