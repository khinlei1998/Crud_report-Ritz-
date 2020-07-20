@extends('layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="style.css" rel="stylesheet">


<div class="submit">
                <div class="row">
                    <div class="col-md-3 submit-left">
                        <img src="{{asset('/image/icons8-business-report-96.png')}}" alt="logo" />
                        <h3>Welcome</h3>
                        <p>Here is a Report Generator</p>
                            <a href="{{route('logout')}}">
                                <input  type="submit" name="" value="Logout" class="shadow-sm">
                            </a>
                          
                      
                    </div>

            
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
</div>
</div>
<script>
 $(document).ready(function() {
    CKEDITOR.replace('summary-ckeditor');
    $('.js-example-basic-multiple').select2({
       placeholder: "Select Team Member *",
       allowClear: true
   });
});



   $('.timepicker').datetimepicker({
       icons: {
           time: 'glyphicon glyphicon-time',
           date: 'glyphicon glyphicon-calendar',
           up: 'glyphicon glyphicon-chevron-up',
           down: 'glyphicon glyphicon-chevron-down',
           previous: 'glyphicon glyphicon-chevron-left',
           next: 'glyphicon glyphicon-chevron-right',
           today: 'glyphicon glyphicon-screenshot',
           clear: 'glyphicon glyphicon-trash'
       },
       format: 'HH:mm:ss'
   }); 


           $('#team_id').on('change', function () {
             
               $('#t_member_id').empty();
               // $("#t_member_id").append(new Option("","",false,false));
               var t_member = $('#team_id').find(':selected').val();
               console.log("N blade: [user/create] component :[User dropdown] from:user.create Selected Team =>"+t_member);
               getAssibleUser(t_member);
           });

           function getAssibleUser(t_member){
               $.ajax({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   method: "POST",
                   url: "/getUser",
                   data:{
                       "_token": "{{ csrf_token() }}",
                       "t_member": t_member
                   }
               }).done(function (data) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                   var newOption = new Option(data[i].name, data[i].name, false, false);
                   $('#t_member_id').append(newOption);
                   console.log(newOption);
                }
                  
               }).fail(function (jqXHR, textStatus) {
                   console.log("F blade: [employee/create] component :[department dropdown] from:employee.create Fail =>" + textStatus)
               });
           }

           window.onload = function () {
               $.ajax({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },
                   method: "POST",
                   url: "/getUser",
                   data:{
                       "_token": "{{ csrf_token() }}",
                       "t_member": 1
                   }
               }).done(function (data) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                   var newOption = new Option(data[i].name, data[i].name, false, false);
                   $('#t_member_id').append(newOption);
                   console.log(newOption);
                }
                  
               }).fail(function (jqXHR, textStatus) {
                   console.log("F blade: [employee/create] component :[department dropdown] from:employee.create Fail =>" + textStatus)
               });
              
           }   
</script>

 @endsection    

   
    