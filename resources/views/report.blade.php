@extends('layouts.master')
@section('content')

            
                    <div class="card col-md-9 submit-right shadow-lg">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="submit-heading ml-3">Report Form
                                <span><img src="{{asset('/image/form.png')}}" alt="logo" width="50"/></span>
                                </h3>
                                
                                
                                <form action="{{ route('nocreport.store') }}" method="POST">
                                @csrf
                                
                                <div class="submit-form">
                                <hr class="style16 shadow-sm">
                                
                                    <div class="row pt-4">
                                       
                                            <div class="col-md-6">
                                                <div class="form-group shadow-sm">


                                                    @php
                                                    $teams=DB::table('teams')->get();
                                                    @endphp
                                                    <select class="form-control" name="team_name" id="team_id"  >
                                                        <option selected disabled>Select Team Name <label style="color:red;">*</label></option>
                                                        @foreach($teams as $team)
                                                            <option value="{{$team->id}}">{{$team-> team_name}}</option>
                                                        @endforeach
                                                    </select>
                      
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group shadow-sm">

                                                    <select class="js-example-basic-multiple form-control" name="team_members_name[]" id="t_member_id"  multiple="multiple">
                                                
                                                    </select>
                                                    
                                                 
                                                </div>
                                                @error('team_members_name')
                                                    <div class="text-danger" style="margin-top:8px;line-height:0px;">{{ $message }}</div>
                                                    @enderror
                                              
                                            </div>
                                        
                                    </div>

                                    <div class="row pt-3">
                                       
                                            <div class="col-md-12">
                                            <textarea class="form-control shadow-sm" name="description" id="summary-ckeditor" rows="7" placeholder="Summer Note *"></textarea>
                                            @error('description')
                                                    <div class="text-danger" style="">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                          
                                    </div>

                                    <div class="row pt-3">
                                           
                                       
                                            <div class="col-md-4" >
                                                <div class="form-group shadow-sm" >
                                                    
                                                    <input type="date" class="form-control"  name="report_date">
                                                    
                                                </div>
                                                    @error('report_date')
                                                    <p class="text-danger" style="margin-top:0px;line-height:0px;">{{ $message }}</p>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4" >
                                                <div class="form-group shadow-sm" style="position:relative">
                                                    <label for="report_start_time" class="sr-only">Start Date</label>
                                                    <input class="timepicker form-control" placeholder="Start Time *" type="text" name="report_start_time">
                                                    
                                                </div>
                                                    @error('report_start_time')
                                                    <div class="text-danger" style="margin-top:0px;line-height:0px;">{{ $message }}</div>
                                                    @enderror
                                               
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group shadow-sm" style="position:relative">
                                                    <label for="report_start_time" class="sr-only">Start Date</label>
                                                    <input class="timepicker form-control"  placeholder="End Time *" type="text" name="report_end_time">
                                                    
                                                </div>
                                                    @error('report_end_time')
                                                    <div class="text-danger" style="margin-top:0px;line-height:0px;">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        
                                    </div>

                                    <input type="submit" class="btnsubmit mt-3 float-right shadow" id="btnsubmit"  value="submit">
                                  

                                </div>
                                </form>

                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
 @endsection       


   
    