
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- timepicker -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet"> -->

        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  

        <script type="text/javascript" src=" https://code.jquery.com/jquery-3.5.1.js"></script>

        <script type="text/javascript" src=" https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
.submit{
    background:url('image/cover5.jpg');
    background-size:cover;
    padding: 4%;
}
.submit-left{
    text-align: center;
    color: #fff;
}
.submit-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 0%;
    margin-bottom: 8%;
    cursor: pointer;
    shadow:
}
.submit-right{
    background:white;
    border-radius:20px;
    
}
.submit-left img{
    margin-bottom: 3%;
    width: 5%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
/* .submit-left p{
    font-weight: lighter;
    padding-bottom:6px;
} */

.submit-left h3{
    font-weight: lighter;
    padding-bottom:10px;
}
.submit .submit-form{
    padding: 0%;
    padding-top:5%;
    padding-right:3%;
    margin-top: 10%;
}
.btnsubmit{
    float: right;
    margin-top: 15%;
    border: none;
    border-radius: 1.5rem;
    padding: 1.5%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 20%;
    cursor: pointer;
}
.submit .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.submit .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.submit .nav-tabs .nav-link:hover{
    border: none;
}
.submit .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.submit-heading{
    text-align: center;
    margin-top: 3%;
    margin-bottom: -15%;
    color: #495057;
}
label{
    margin-top:2%;
    margin-bottom:4%;
    text-align:center;
}
div.dataTables_wrapper div.dataTables_info {
    padding-top: 1.85em;
    padding-bottom: 1.85em;
    white-space: nowrap;
}
div.dataTables_wrapper div.dataTables_paginate {
    padding-top: 1.85em;
    padding-bottom: 1.85em;
    white-space: nowrap;
    text-align: right;
}

.notification {
         
         animation:fadeOut 1s linear forwards;
         z-index: -1;
         
              }
        </style>
    </head>

    <body>
  <!--appeear create successfully & mhane  twar ml-->




    <div class="submit">
                <div class="row p-4">
                    <div class="col-md-12 submit-left">
                        <img src="{{asset('/image/ritz_logo2.png')}}" alt="logo" />
                       
                    </div>
                    <div class="col-md-12 submit-right m-5">
                        <h3 class="text-center">DETAIL PAGE</h3>
                        <hr class="style16 shadow-sm">

                        @if(Session::has('notification'))
                            <div class="row notification">
                            <div class="col-md-8">
                            </div>
                            <div class="alert alert-success alert-dismissible col-md-4" role="alert">
                                    {{Session::get('notification')}}
                                    <button type="button"  id="close" class="close" data-dismiss="alert" aria-label="Close"></button>

                                    
                                    </button>
                            </div>  
                            </div>
                        @endif
                        <table id="example" class="table table-striped table-bordered p-5" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Team Name</th>
                                                <th>Team Member Name</th>
                                                <th>Description</th>
                                                <th>Report Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($allreports as $report)
                                            <tr>

                                                <td>{{$report->id}}</td>
                                                <td>{{$report->team_name}}</td>
                                                <td>{{$report->team_members_name}}</td>
                                                <td>{!! $report->description !!}</td>
                                                <td>{{$report->report_date}}</td>
                                                <td>{{$report->report_start_time}}</td>
                                                <td>{{$report->report_end_time}}</td>
                                                <td>
                                                    <a href="{{ route('nocreport.show',$report->id)}}">
                                                        <button type="button" class="btn btn-primary float-right">Detail</button>
                                                    </a>
                                                    <form method="POST" action="{{ route('nocreport.destroy',$report->id)}}" >
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>ID</th>
                                                <th>Team Name</th>
                                                <th>Team Member Name</th>
                                                <th>Description</th>
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

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div>
          
         
    </body>

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
