<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- timepicker -->
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
        
     


        <!-- select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        .submit{
    background:url('image/cover5.jpg');
    background-size:cover;
    padding: 6%;
}
.submit-left{
    text-align: center;
    color: #fff;
    margin-top: 3%;
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
    margin-top: 40%;
    margin-bottom: 5%;
    width: 35%;
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
.submit-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.submit .submit-form{
    padding: 3%;
    padding-top:5%;
    padding-right:3%;
    margin-top: 10%;
}
.btnsubmit{
    float: right;
    margin-top: 15%;
    margin-bottom:3%;
    border: none;
    border-radius: 1.5rem;
    padding: 1.5%;
    background: #021d32;
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
hr.style16 { 
  border-top: 0.5px dashed #8c8b8b; 
} 
hr.style16:after { 
  display: inline-block; 
  position: relative; 
  top: -12px; 
  left: 40px; 
  padding: 0 3px; 
  background: #f0f0f0; 
  color: #8c8b8b; 
  font-size: 18px; 
}
.bootstrap-datetimepicker-widget .dropdown-menu{
    z-index:99999999;
}
@font-face {
  font-family: 'Glyphicons Halflings';

  src: url('{{ public_path('font/glyphicons-halflings-regular.eot') }}');
  src: url('./font/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('./font/glyphicons-halflings-regular.woff2') format('woff2'), url('../font/glyphicons-halflings-regular.woff') format('woff'), url('./font/glyphicons-halflings-regular.ttf') format('truetype'), url('./font/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
        </style>
    </head>
    <body>

            <div class="submit">
                <div class="row">
                    <div class="col-md-3 submit-left">
                        <img src="{{asset('/image/ritz_logo2.png')}}" alt="logo" />
                        <h3>Welcome</h3>
                        <p>Here is a Daily Report Generator</p>
                        <!-- <a href="{{ route('nocreport.index') }}" type="submit" name="" value="View All Report" class="shadow-sm"></a><br/> -->
                        <a href="{{ route('nocreport.index') }}">
                            <input  type="submit" name="" value="View All Report" class="shadow-sm">
                        </a><br>
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
        


    </body>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script type="text/javascript">
 

 
// $('.timepicker').datetimepicker({

//     format: 'HH:mm:ss'
    $(document).ready(function() {
         $('.js-example-basic-multiple').select2({
            placeholder: "Select Team Member *",
            allowClear: true
        });
    });

         CKEDITOR.replace('summary-ckeditor');

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


              

               

            

            
</script> 

</html>