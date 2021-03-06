<?php

namespace App\Http\Controllers;

use App\noc_reports;
use Illuminate\Http\Request;
use PDF;
use App\teams_members;
use Illuminate\Support\Facades\Validator;
use DB;

class NocReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $allreports=DB::table('noc_reports')
     ->join('teams', 'teams.id', '=', 'noc_reports.team_name')
     ->select('noc_reports.*','teams.team_name')
     ->get();
        return view('reporttable.allreport',compact(['allreports']));
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
        $team_name=DB::table('teams')->where('id',$reportsdetail->team_name)->first();                                                                                   
        $path =file_get_contents(base_path().'/public/image/icons8-business-report-96.png');
      
        $encode_image=base64_encode($path);
        // dd($encode_image);

        // return view('reporttable.reportdetail',compact('reportsdetail'));
    //    $allreports=noc_reports::all();
       $pdf = PDF::loadView('reporttable.pdf_report', ['reportsdetail' => $reportsdetail,'team_name'=>$team_name,'button'=>false,'encode_image'=>$encode_image]);
       return $pdf->download('daily_report.pdf');
    
  
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

    public function daily_rp()
    {
        $reports = noc_reports::all();
        return view("report",compact('reports'));
    }

   
      
    public function show($id)
    {
        // dd($id);
        // $reportsdetail=DB::table('nocreports') ->where('id', $id);
      $path =file_get_contents(base_path().'/public/image/icons8-business-report-96.png');
        $encode_image=base64_encode($path);
        // return($encode_image);
         $reportsdetail=noc_reports::where('id',$id)->first();
        //  dd($reportsdetail);
    //     $reportD=DB::table('noc_reports')
    //  ->join('teams', 'teams.id', '=', 'noc_reports.team_name')
    //  ->select('noc_reports.*','teams.team_name')
    //  ->where('teams.id',$reportsdetail->team_name)
    //  ->where('noc_reports.id',$reportsdetail->id)
    //  ->first();
    $reports = DB::table('noc_reports')->select('noc_reports.*')
    ->where('noc_reports.id',$reportsdetail->id);
  

    $reportDd = DB::table('teams')
  
        ->joinSub(  $reports, 'reports', function ($join) {
            $join->on('teams.id', '=', 'reports.team_name');   
        })
      
        ->first();


    //    dd($reportDd);
      $team_name=DB::table('teams')->where('id',$reportDd->team_name)->first();
    // dd($team_name);
        $button=true;
       return view('reporttable.reportdetail',compact('reportDd','button','team_name'),['encode_image'=>$encode_image]);
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
    public function destroy($id)
    {
      
        $noc_report = noc_reports::findOrFail($id);
        
        $noc_report->delete();
        return back()->with("notification", 'Deleted Successfully');
      
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
