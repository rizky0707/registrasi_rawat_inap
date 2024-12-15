<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Print Laporan SUKET KEMATIAN RINAP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <style>
        .text-right {
            text-align: right;
        }

        .halaman{
          border: 1px solid;
          padding-top: 0px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>
</head>
<body class="bg-grey" onload="window.print();">

  <div class="container container-smaller">
    <div style="margin-bottom: 0px">&nbsp;</div>

    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">

            <div class="row">
                <div class="col-xs-6">
                    <img src="https://res.cloudinary.com/dy9csboff/image/upload/v1666930055/Rumah_Sakit_Umum_RSU_Pindad_qlymm2.png" width="250px" alt="logo">

                </div>
    
                <div class="col-xs-6">
                    <address>
                        JL Jend. Gatot Subroto No.517 (Papangungan) Bandung - 40285
                        Telp : 022-7322877.7321954 Fax : 022 - 73272468 </br>
                        email : info@rspindad.com </br>
                        website : www.rspindad.com
                      </address>                
                    </div>
            </div>
            <div class="row">
              {{-- content isi   --}}
              <h5 align="center"><b><u>LAPORAN DATA SUKET KEMATIAN RINAP</u></b></h5>
              <center><p>Tanggal : {{date('d M Y', strtotime($start_date))}} - {{date('d M Y', strtotime($end_date))}}</p></center>
              <br><br>
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Medrek</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Tgl Kematian</th>
                        <th>JK</th>
                        <th>R. Rawat</th>
                        <th>DPJP</th>
                        <th>Pukul</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no= 1; ?>
                    @foreach ($suket as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->no_medrek}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->umur}}</td>
                        <td>{{$item->tgl_kematian}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->ruang}}</td>
                        <td>{{$item->dpjp}}</td>
                        <td>{{$item->pukul}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
