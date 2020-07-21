
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

    <body>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            
            <tr>
                <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 850px;">
                        <tr>
                            <td bgcolor="#ffffff" align="center" valign="top" style="padding: 5px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                                <!-- <img src="https://cdn.jobnet.com.mm/images/can/200/200/201704250530386004.png" width="110" height="120" style="display: block; border: 0px;" /> -->
                             <img src="data:image;base64, {{$encode_image}}" alt="Red dot" width="80" style="margin:0px;" />
                                <h6 style="font-size: 15px; font-weight: 500;line-height:1px;margin:3px;">Report Form</h6> 

                            
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="email-format">
                <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 850px;">
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 5px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                
                                    <div class="row" style="max-width:800px;">
                                        <div class="col-md-12" style="max-width:800px;">
                                        <p style="margin-bottom:1px;">{!! $reportsdetail->description !!}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="max-width:800px;line-height:2px;">
                                        <div class="col-md-12" style="max-width:800px;">
                                        <p style="line-height:1px;margin-bottom:1px;">Team Member</p>
                                        <p>{{ $reportsdetail->team_members_name }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="max-width:800px;line-height:2px;">
                                        <div class="col-md-12" style="max-width:800px;">
                                        <p style="line-height:1px;margin-bottom:1px;">With Best Regards,</p>
                                        <p>{{ $team_name->team_name }}</p>
                                        </div>
                                    </div>
                                   
                               
                            </td>
                        </tr>
                        
                        
                    </table>
                </td>
            </tr>
            
        </table>
</body>
 
</html>
