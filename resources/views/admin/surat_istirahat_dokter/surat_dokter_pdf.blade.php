<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Surat Kematian</title>

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
<body class="bg-grey">

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
            <div class="halaman">
              {{-- content isi   --}}
              <h3 align="center"><b><u>SURAT ISTIRAHAT DOKTER</u></b></h3>
              <center><p>No. Surat : {{$pdf->no_surat}}</p></center>
              <br><br>
              <p>Diberitahuakan bahwa</p>
              <table width="100%" border="0" cellspacing="2" cellpadding="5">
                <tr>
                  <td>Nama</td>
                  <td colspan="2">: {{$pdf->nama}}</td>
                </tr>
                <tr>
                  <td>Umur</td>
                  <td colspan="2">: {{$pdf->umur}}</td>
                </tr>
                <tr>
                  <td>Pangkat/Gol.</td>
                  <td colspan="2">: {{$pdf->golongan}}</td>
                </tr>
                <tr>
                  <td>NIP/NRP/NPP</td>
                  <td colspan="2">: ...............</td>
                </tr>
                <tr>
                  <td>J a b a t a n</td>
                  <td colspan="2">: {{$pdf->jabatan}}</td>
                </tr>
                <tr>
                  <td>Bagian/Unit</td>
                  <td colspan="2">: {{$pdf->unit}}</td>
                </tr>
                <tr>
                  <td colspan="4"><br><br></td>
                </tr>
                <tr>
                <td colspan="4">Berhubung kesehatannya terganggu, memerlukan istirahat kerja ringan : </td>
                </tr>
                <tr>
                  <td>Selama </td>
                  <td colspan="2">: {{$pdf->lama_istirahat_mulai}}</td>
                </tr>
                <tr>
                  <td>Mulai</td>
                  <td colspan="2">: {{$pdf->lama_istirahat_akhir}}</td>
                </tr>
                <tr>
                  <td colspan="4"> Demikian agar menjadi maklum</td>
                </tr>
                <tr>
                  <td colspan="4"> <p style="padding-top: 50px"></p></td>
                </tr>
                <tr>
                  <td style="padding-left: 200px;">
                                </td>
                  <td>
                    <center style="padding-right: 0px; padding-left:0px;">  
                      <?php 
                      $date = $pdf->created_at;
                      ?>


                      Bandung, {{date('d M Y', strtotime($date))}}
                      <br>
<p align="center">A.n. PIMP. RUMAH SAKIT UMUM PINDAD
  Dokter periksa,</p>
  <br>
  <br>
  <br>
  <br>
  <br>
                  </center>
                  </td>
                </tr>
                </table>
            </div>
          </div>
            

        </div>
      </div>
    </div>
  </body>
</html>
