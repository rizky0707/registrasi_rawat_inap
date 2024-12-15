<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Surat Kematian</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <style>
        .page-break {
            page-break-after: always;
        }
        .bg-grey {
            background: #F3F3F3;
        }
        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }
        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 20px 0;
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
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1" style="margin-top:20px; text-align: right">
        <div class="btn-group mb-4">  
          <a href="{{route('surat_istirahat_dokter.index')}}" class="btn btn-primary">Back</a>
          </div>
        <div class="btn-group mb-4">  
          <a href="{{route('surat_dokter_pdf', $surat_dokter_template->id)}}" class="btn btn-success">Save as PDF</a>
        </div>
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">

          <div class="invoice">
            <div class="row">
              <div class="col-sm-6">
                <img src="{{asset('asset/admin/img/Rumah Sakit Umum (RSU) Pindad.png')}}" width="250px" alt="logo">
              </div>

              <div class="col-sm-6">
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
              <center><p>No. Surat : {{$surat_dokter_template->no_surat}}</p></center>
              <br><br>
              <p>Diberitahuakan bahwa</p>
              <table width="100%" border="0" cellspacing="2" cellpadding="5">
                <tr>
                  <td>Nama</td>
                  <td colspan="2">: {{$surat_dokter_template->nama}}</td>
                </tr>
                <tr>
                  <td>Umur</td>
                  <td colspan="2">: {{$surat_dokter_template->umur}}</td>
                </tr>
                <tr>
                  <td>Pangkat/Gol.</td>
                  <td colspan="2">: {{$surat_dokter_template->golongan}}</td>
                </tr>
                <tr>
                  <td>NIP/NRP/NPP</td>
                  <td colspan="2">: ...............</td>
                </tr>
                <tr>
                  <td>J a b a t a n</td>
                  <td colspan="2">: {{$surat_dokter_template->jabatan}}</td>
                </tr>
                <tr>
                  <td>Bagian/Unit</td>
                  <td colspan="2">: {{$surat_dokter_template->unit}}</td>
                </tr>
                <tr>
                  <td colspan="4"><br><br></td>
                </tr>
                <tr>
                <td colspan="4">Berhubung kesehatannya terganggu, memerlukan istirahat kerja ringan : </td>
                </tr>
                <tr>
                  <td>Selama </td>
                  <td colspan="2">: {{$surat_dokter_template->lama_istirahat_mulai}}</td>
                </tr>
                <tr>
                  <td>Mulai</td>
                  <td colspan="2">: {{$surat_dokter_template->lama_istirahat_akhir}}</td>
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
                    <center style="padding-right: 0px; padding-left: 300px;"> 
                      <?php 
                      $date = $surat_dokter_template->created_at;
                      ?>


                      Bandung, {{date('d M Y', strtotime($date))}} 
                      <br>
<p align="center">A.n. PIMP. RUMAH SAKIT UMUM PINDAD <br>
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
    <script>
      function copyToClipboard(element) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();
}

      
      </script>
  </body>
</html>
