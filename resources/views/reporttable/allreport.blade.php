
@extends('layouts.master')
@section('allreport')
<style>
.btnlogout{
   float:right;
}
</style>
    <link href="style2.css" rel="stylesheet">

    <div class="submit" >
                         <a href="{{route('logout')}}">
                        <button type="button" class="btn btn-outline-warning btnlogout">Logout</button>
                        </a>

                <div class="row p-4" height="300px;">
                    <div class="col-md-12 submit-left">
                        <img src="{{asset('/image/icons8-business-report-96.png')}}" alt="logo" />
                        <!-- <button type="button" class="btn btn-outline-info">Primary</button> -->
                        
                    </div>
                    
                    <div class="col-md-12 submit-right m-1">
                        <h3 class="text-center">All Report Lists
                        <span><img src="{{asset('/image/list.png')}}" alt="logo" width="50"/></span>
                        
                        </h3>

                        <hr class="style16 shadow-sm">

                      
                        @if(Session::has('notification'))
                            <div class="row notification" style="text-align:center;">
                            
                            <div class="alert alert-danger col-md-12 alert-dismissible" role="alert">
                            {{Session::get('notification')}}
                            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                           
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                            </div>
                            </div>

                            <!-- <div class="alert alert-warning alert-dismissible" role="alert">
                            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                            <strong>Warning!</strong> Still on beta stage.
                            </div> -->
                        @endif
                        <table id="example" class="table table-striped table-bordered p-5" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Team Name</th>
                                                <th>Team Member Name</th>
                                                <th>Activities</th>
                                                <th>Report Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($allreports as $report)
                                            <tr>

                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$report->team_name}}</td>
                                                <td>{{$report->team_members_name}}</td>
                                                <td>{!! $report->description !!}</td>
                                                <td>{{$report->report_date}}</td>
                                                <td>{{$report->report_start_time}}</td>
                                                <td>{{$report->report_end_time}}</td>
                                                <td>
                                                    <a href="{{ route('nocreport.show',$report->id)}}">
                                                        <button type="submit" class="btn btn-primary float-right shadow" style="margin-bottom:3px;">
                                                        <span><img src="{{asset('/image/detail3.png')}}" alt="logo" width="20" style="margin-bottom:3px;"/>&nbsp;Detail&nbsp;</span>
                                                        </button>
                                                    </a>
                                                    <br>

                                                    <form method="POST" action="{{ route('nocreport.destroy',$report->id)}}" >
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                      
                                                        <button type="submit" class="btn btn-danger float-right shadow">
                                                        <span><img src="{{asset('/image/delete2.png')}}" alt="logo" width="20" style="margin-bottom:3px;"/>&nbsp;Delete</span>
                                                        </button>
                                                        <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                                    </form>
                                                </td>
                                            
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>No</th>
                                                <th>Team Name</th>
                                                <th>Team Member Name</th>
                                                <th>Activities</th>
                                                <th>Report Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Action</th>
                                            </tr>

                                        </tfoot>
                                    </table>            
                        
                    </div>
                </div>

            </div>

    

        <div class="flex-center position-ref full-height">
                <!-- @foreach ($allreports as $report)
                <h4> {{$report->id}}    </h4><br>
            <h4> {{$report->team_name}}    </h4><br>
            <h4> {{$report->description}}    </h4><br>
            <h4> {{$report->report_date}}    </h4><br>
            <h4> {{$report->team_members_name}}    </h4><br>
            <h4> {{$report->report_start_time}}    </h4><br>
            <h4> {{$report->report_end_time}}    </h4><br>
        
                <a href="{{ route('nocreport.show',$report->id)}}" class="" >
                    <button type="button" class="btn btn-primary float-right">Detail</button>
                </a>

                @endforeach -->

           

           
        </div>


    <script type="text/javascript">
  setTimeout(Close, 4500);

  function Close(){ 
  $('.notification').remove();
}
$(document).ready(function() {
    $('#example').DataTable();
} );

$('.timepicker').datetimepicker({

    format: 'HH:mm:ss'

});




</script>  

</html>
