{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Name: {{ $name }}</p>
    <p>Payment Link : {{ $payment_link }}</p>

    <a href="{{ $payment_link }}" > Make Payment</a>
</body>
</html>--}}

<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="" />
    <title>Make Payment Link</title>
  </head>
  <body class="">

    <table width="600" cellspacing="1" cellpadding="5" align="center" border="0">
    <tbody>
        
        
      <tr style="background: #fff;">
          <td>
              <table>
                  <tbody>
                      <tr>
                          <td style="word-break: break-word;" bgcolor="#FFFFFF" valign="top">
                             
                              <font face="Arial, Helvetica, sans-serif" color="#000000">
                                  <span style="font-size: 14px;">
                                      <div style="margin: 0px; padding: 3px 0px; font-size: 18px;">
                                          <strong>{{ $name }}</strong><br>
                                          <h1 style="font-size: 20px">Click here to make payment</h1>
                                      </div>
                                      {{--<div style="margin: 0px; padding: 3px 0px;"><strong>Name : </strong>&nbsp;{{ $name }}</div>
                                      <div style="margin: 0px; padding: 3px 0px;"><strong>E-Mail:</strong>&nbsp;{{ $email }}</div>
                                      <div style="word-break: break-word;"></div> --}}
                                  </span>
                                  <br />
                                  <br />
                                <div style="text-align: center;">
                                 <a
                                      title=""
                                      href="{{ $payment_link }}"
                                      style="margin-right: 5px; background: #056839; font-size: 17px; font-weight: bold; color: #fff; padding: 7px 10px; font-family: Arial, Helvetica, sans-serif; text-decoration: none;"
                                      target="_blank"
                                  >
                                      Make Payment
                                  </a>
                                  
                                  </div>

                                  <div>
                                       <br>
                                    <br>
                                    Kind Regards,<br>
                                    Team {{ env('APP_NAME') }}
                                  </div>
                                  
                              </font>
                          </td>
                      </tr>
                      
                  </tbody>
              </table>
          </td>
      </tr>
    
  </tbody>
</table>
  </body>
</html>
