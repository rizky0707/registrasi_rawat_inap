<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .text-right {
            text-align: right;
        }
    </style>

</head>
<body class="login-page" style="background: white">

        <div class="row">
            <div class="col-xs-7">
                <h4>From:</h4>
                <strong>Company Inc.</strong><br>
                123 Company Ave. <br>
                Toronto, Ontario - L2R 5A4<br>
                P: (416) 123-4567 <br>
                E: copmany@company.com <br>

                <br>
            </div>

            <div class="col-xs-4">
                <img src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1537151698/website/logo.png" alt="logo">
            </div>
        </div>

        <div style="margin-bottom: 0px">&nbsp;</div>

        <div class="row">
            <div class="col-xs-6">
                @foreach ($pdf as $item)

                <h4>To:</h4>
                <address>
                    <strong>{{$item->nama}}</strong><br>
                    <span>andre@andre.com</span> <br>
                    <span>{{rand(10,100)}}</span>
                </address>
                @endforeach

            </div>

            <div class="col-xs-5">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th>Invoice Num:</th>
                            <td class="text-right">56</td>
                        </tr>
                        <tr>
                            <th> Invoice Date: </th>
                            <td class="text-right">Oct 1, 2018</td>
                        </tr>
                    </tbody>
                </table>

                <div style="margin-bottom: 0px">&nbsp;</div>

                <table style="width: 100%; margin-bottom: 20px">
                    <tbody>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                            <td style="padding: 5px" class="text-right"><strong> $600 </strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <table class="table">
            <thead style="background: #F5F5F5;">
                <tr>
                    <th>Item List</th>
                    <th></th>
                    <th class="text-right">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div><strong>Service</strong></div>
                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat similique nisi. Nisi ratione, molestias exercitationem illo reiciendis cumque?</p></td>
                        <td></td>
                        <td class="text-right">$600</td>
                </tr>
                <tr>
                    <td><div><strong>Service</strong></div>
                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat similique nisi. Nisi ratione, molestias exercitationem illo reiciendis cumque?</p></td>
                        <td></td>
                        <td class="text-right">$600</td>
                </tr>
            </tbody>
        </table>

            <div class="row">
                <div class="col-xs-6"></div>
                <div class="col-xs-5">
                    <table style="width: 100%">
                        <tbody>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                                <td style="padding: 5px" class="text-right"><strong> $600 </strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <div class="row">
                <div class="col-xs-8 invbody-terms">
                    Thank you for your business. <br>
                    <br>
                    <h4>Payment Terms</h4>
                    <p>Terima Kasih Bapak/Ibu atas donasi anda untuk program Zakat, Jumlah Donasi</p>
                </div>
            </div>
        </div>

    </body>
    </html>
