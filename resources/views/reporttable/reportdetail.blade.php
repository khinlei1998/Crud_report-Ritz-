
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- timepicker -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
        .email-format td p{
            font-size:15px;
        }
        .email-format td label{
            font-size:15px;
        }
    </style>
    </head>

    <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    <!-- HIDDEN PREHEADER TEXT -->
        <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> We're thrilled to have you here! Get ready to dive into your new account. </div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <!-- LOGO -->
            <tr>
                <td bgcolor="#19233e" align="center">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#19233e" align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 850px;">
                        <tr>
                            <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                                <img src="https://cdn.jobnet.com.mm/images/can/200/200/201704250530386004.png" width="110" height="120" style="display: block; border: 0px;" />
                                <h6 style="font-size: 18px; font-weight: 500;">Cyber Security & Management Service</h6> 
                            
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="email-format">
                <td bgcolor="#e4e4e4" align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 850px;">
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <!-- <p style="margin: 0;float:left;">From : &nbsp;</p><label>Kyaw Phyo Linn</label><br>
                                <p style="margin: 0;float:left;">Sent&nbsp;&nbsp; : &nbsp;</p><label>Monday, Ocgtober 14,2019 7:54 PM</label><br>
                                <p style="margin: 0;float:left;margin:left">To&ensp;&nbsp;&ensp;&nbsp; : &nbsp;</p><label>Monday, Ocgtober 14,2019 7:54 PM</label><br>
                                <p style="margin: 0;float:left;">To&ensp;&nbsp; : &nbsp;</p><label>Monday, Ocgtober 14,2019 7:54 PM</label> -->

                                
                                    <!-- <div class="row">
                                        <div class="col-sm-1">
                                        <p>From&nbsp;:</p>
                                        </div>
                                        <div class="col-sm-11">
                                        <label>{{ $reportsdetail->team_name }}</label>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-1">
                                        <p>Sent&nbsp;:</p>
                                        </div>
                                        <div class="col-md-11">
                                        <label>Monday, Ocgtober 14,2019 7:54 PM</label>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-1">
                                        <p>To&nbsp;:</p>
                                        </div>
                                        <div class="col-md-11">
                                        <label>War So Kyaw</label>
                                        </div>
                                    </div> -->
                                    <div class="row" style="max-width:800px;">
                                        <div class="col-md-12" style="max-width:800px;">
                                        <p>{{ $reportsdetail->description }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="max-width:800px;margin-top:15px;">
                                        <div class="col-md-12" style="max-width:800px;">
                                        <p>Team Member</p>
                                        <p>{{ $reportsdetail->team_members_name }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="max-width:800px;margin-top:15px;">
                                        <div class="col-md-12" style="max-width:800px;">
                                        <p style="line-height:2px;">With Best Regards,</p>
                                        <p>{{ $reportsdetail->team_name }}</p>
                                        </div>
                                    </div>
                                   
                               
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" align="center" height="80px;">
                            <a href="{{ url('/pdf/'. $reportsdetail->id ) }}" data-toggle="tooltip" data-placement="top" title="Click Here to Download as PDF">
                                <img src="https://lh3.googleusercontent.com/proxy/BdjPVT9u3Jx7X0HTd86Mz6C0ceIu84ltYwKnI-wJUc3DTu6eDgYfVl0SHyVhd3DhF3E8sp0O0DxEcSYK4zeE64HyiuOOd4wH6LcRBgOH7azteGqwQj6uvSRn2Sp_JWl9IEHHhPT7ZrOzDxE" width="170" height="40" style="display: block; border: 0px;" />
                             </a>
                            <!-- <button type="button" class="btn btn-labeled btn-danger">
                                                            <span class="btn-label"><i class="glyphicon glyphicon-download"></i></span>
                                                            Export as PDF</button> -->
                                <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center" style="border-radius: 3px;">
                                                        
                                                       <a href="{{ url('/pdf/'. $reportsdetail->id ) }}" data-toggle="tooltip" data-placement="top" title="Click Here to Download as PDF">
                                                        <img src="https://lh3.googleusercontent.com/proxy/BdjPVT9u3Jx7X0HTd86Mz6C0ceIu84ltYwKnI-wJUc3DTu6eDgYfVl0SHyVhd3DhF3E8sp0O0DxEcSYK4zeE64HyiuOOd4wH6LcRBgOH7azteGqwQj6uvSRn2Sp_JWl9IEHHhPT7ZrOzDxE" width="220" height="60" style="display: block; border: 0px;" />

                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table> -->
                            </td>
                        </tr> <!-- COPY -->
                        <!-- <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">If that doesn't work, copy and paste the following link in your browser:</p>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;"><a href="#" target="_blank" style="color: #FFA73B;">https://bit.li.utlddssdstueincx</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">If you have any questions, just reply to this email—we're always happy to help out.</p>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">Cheers,<br>BBB Team</p>
                            </td>
                        </tr> -->
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#e4e4e4" align="center" style="padding: 30px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td bgcolor="#19233e" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <h2 style="font-size: 20px; font-weight: 400; color: white; margin: 0;">Want to go back ?</h2>
                                <p style="margin: 0;"><a href="#" target="_blank" style="color: #FFA73B;">Click Here</a></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- <tr>
                <td bgcolor="#e4e4e4" align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;"> <br>
                                <p style="margin: 0;">If these emails get annoying, please feel free to <a href="#" target="_blank" style="color: #111111; font-weight: 700;">unsubscribe</a>.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr> -->
        </table>
</body>


    <!-- <body>
        <div class="flex-center position-ref full-height">
   
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
               <p> {{ $reportsdetail->team_name }}</p>
               <p> {!!  Str::limit($reportsdetail->description,50)  !!}</p>
              
              
               <p> {{ $reportsdetail->id }}</p>
               <a href="{{ url('/pdf/'. $reportsdetail->id ) }}">Download PDF</a>

              
                </div>
            </div>
        </div>

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
          
         
    </body> -->

    <script type="text/javascript">

$('.timepicker').datetimepicker({

    format: 'HH:mm:ss'

}); 

</script>  

</html>
