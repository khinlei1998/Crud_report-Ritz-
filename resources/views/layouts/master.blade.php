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
        <link href="style.css" rel="stylesheet">

        <!-- <style>
        
        </style> -->
    </head>
    <body>

    <div class="submit">
                <div class="row">
                    <div class="col-md-3 submit-left">
                        <img src="{{asset('/image/ritz_logo2.png')}}" alt="logo" />
                        <h3>Welcome</h3>
                        <p>Here is a Report Generator</p>
                        <!-- <a href="{{ route('nocreport.index') }}" type="submit" name="" value="View All Report" class="shadow-sm"></a><br/> -->
                        <a href="{{ route('nocreport.index') }}">
                            <input  type="submit" name="" value="View All Report" class="shadow-sm">
                        </a><br>
                    </div>
     @yield('content')
                </div>
    </div>
     
    </body>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   

    <script type="text/javascript" src="style.js"></script> 

  

            


</html>
