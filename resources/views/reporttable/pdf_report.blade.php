<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
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
                                            <p>{!! $reportsdetail->description !!}</p>
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
                                    <img src="{{asset('image/button.png')}}" width="170" height="40" style="display: block; border: 0px;" />
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

</html>