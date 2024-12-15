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
              <h3 align="center"><b><u>SURAT KETERANGAN KEMATIAN</u></b></h3>
              <center><p>No. Surat : {{$pdf->no_surat}}</p></center>
              <br><br>
              <p>Yang bertandatangan dibawah ini menerangkan bahwa :</p>
              <table  width="100%" >
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>{{$pdf->nama}}</td>
                  <td>Umur</td>
                  <td>:{{$pdf->umur}}</td>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <td>Alamat Tempat Tinggal</td>
                  <td>:</td>
                  <td colspan="8">{{$pdf->alamat_tinggal}}</td>
                </tr>
                <tr>
                  <td>Alamat KTP</td>
                  <td>:</td>
                  <td>{{$pdf->alamat_ktp}}</td>
                  <td>No</td>
                  <td>. {{$pdf->no_alamat}}</td>
                  <td></td>
                  <td>RT/RW</td>
                  <td>: {{$pdf->rt}} / {{$pdf->rw}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td><br><br></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Kelurahan</td>
                  <td>: {{$pdf->kelurahan}}</td>
                  <td></td>
                  <td>Kecamatan</td>
                  <td>: {{$pdf->kecamatan}}</td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Kota/Kab</td>
                  <td>: {{$pdf->kota_kab}}</td>
                  <td></td>
                  <td>Kode Pos</td>
                  <td>: {{$pdf->kode_pos}}</td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Telepon / HP</td>
                  <td>: {{$pdf->telepon_hp}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td>Pekerjaan *)</td>
                  <td>:</td>
                  <td colspan="68">{{$pdf->pekerjaan}}</td>
                </tr>
                <tr>
                  <td>Nama Ayah / Suami </td>
                  <td>:</td>
                  <td colspan="8">{{$pdf->nama_ayah_suami}}</td>
                </tr>
                <tr>
                  <td>Nama Ibu / Istri </td>
                  <td>:</td>
                  <td colspan="8">{{$pdf->nama_ibu_istri}}</td>
                </tr>
                <tr>
                  <td colspan="10">Mulai dirawat di Rumah Sakit Umum Pindad Bandung </td>
                </tr>
                <tr>
                  <td>Pada Hari / Tanggal</td>
                  <td>:</td>
                  <td>{{$pdf->hari_rawat}}</td>
                  <td>/ {{$pdf->tanggal_rawat}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td>Ruang / Kelas</td>
                  <td>:</td>
                  <td>{{$pdf->ruang}}</td>
                  <td>/ {{$pdf->ruang}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td colspan="10">Telah meninggal dunia di Rumah sakit Umum Pindad Bandung Pada :
                </tr>
                <tr>
                  <td>Hari / Tanggal</td>
                  <td>:</td>
                  <td>{{$pdf->hari_kematian}}</td>
                  <td>/ {{$pdf->tgl_kematian}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td>Pkl</td>
                  <td>:</td>
                  <td>{{$pdf->pukul}}</td>
                  <td colspan="6">WIB</td>
                </tr>
                <tr>
                  <td>Status Infeksi **)</td>
                  <td>:</td>
                  <td colspan="8">
                    <input type="checkbox" id="vehicle1" name="status_infeksi[]" value="U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19"
                    {{ str_contains($pdf->status_infeksi, 'U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19')  ? 'checked' : ''  }}   onclick="return false;"/>
                    <label for="vehicle1"> U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19
                    </td>
                </tr>
                <tr>
                    <td></td>
                  <td>:</td>
                  <td colspan="8">
                    <input type="checkbox" id="vehicle1" name="status_infeksi[]" value="U07.2 Jenazah tidak terinfeksi Covid-19 )"
                    {{ str_contains($pdf->status_infeksi, 'U07.2 Jenazah tidak terinfeksi Covid-19 ') ? 'checked' : '' }}  onclick="return false;"/>
                    <label for="vehicle1"> U07.2 Jenazah tidak terinfeksi Covid-19 )
                    </td>
                </tr>
                <tr>
                  <td colspan="10">
                    <br>
                    <p>Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
                  </td>
                </tr>
                <tr>
                  
                  <td colspan="5">
                    
                  </td>
                  
                  <td colspan="5">
                    <?php 
                      $date = $pdf->created_at;
                      ?>
                    <center>  Bandung, {{date('d M Y', strtotime($date))}} <br>
<p class="pt-5" align="center">Yang Menerangkan</p><br>



<br>
<br>
<br>

(............................................)</br>
Nama terang dan tanda tangan</center>
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
