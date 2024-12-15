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
          <a href="{{route('suket_pasien_pdf', $suket_pasien_template->id)}}" class="btn btn-success">Save as PDF</a>
        </div>
        <div class="btn-group mb-4">
          <a href="{{route('suket_kematian.index')}}" class="btn btn-primary">Back</a>
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
              <h3 align="center"><b><u>SURAT KETERANGAN KEMATIAN</u></b></h3>
              <center><p>No. Surat : {{$suket_pasien_template->no_surat}}</p></center>
              
              <p>Yang bertandatangan dibawah ini menerangkan bahwa :</p>
              <table  width="100%" >
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>{{$suket_pasien_template->nama}}</td>
                  <td>Umur</td>
                  <td>:{{$suket_pasien_template->umur}}</td>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <td>Alamat Tempat Tinggal</td>
                  <td>:</td>
                  <td colspan="8">{{$suket_pasien_template->alamat_tinggal}}</td>
                </tr>
                <tr>
                  <td>Alamat KTP</td>
                  <td>:</td>
                  <td>{{$suket_pasien_template->alamat_ktp}}</td>
                  <td>No</td>
                  <td>. {{$suket_pasien_template->no_alamat}}</td>
                  <td></td>
                  <td>RT/RW</td>
                  <td>: {{$suket_pasien_template->rt}} / {{$suket_pasien_template->rw}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Kelurahan</td>
                  <td>: {{$suket_pasien_template->kelurahan}}</td>
                  <td></td>
                  <td>Kecamatan</td>
                  <td>: {{$suket_pasien_template->kecamatan}}</td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Kota/Kab</td>
                  <td>: {{$suket_pasien_template->kota_kab}}</td>
                  <td></td>
                  <td>Kode Pos</td>
                  <td>: {{$suket_pasien_template->kode_pos}}</td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Telepon / HP</td>
                  <td>: {{$suket_pasien_template->telepon_hp}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td>Pekerjaan *)</td>
                  <td>:</td>
                  <td colspan="68">{{$suket_pasien_template->pekerjaan}}</td>
                </tr>
                <tr>
                  <td>Nama Ayah / Suami </td>
                  <td>:</td>
                  <td colspan="8">{{$suket_pasien_template->nama_ayah_suami}}</td>
                </tr>
                <tr>
                  <td>Nama Ibu / Istri </td>
                  <td>:</td>
                  <td colspan="8">{{$suket_pasien_template->nama_ibu_istri}}</td>
                </tr>
                <tr>
                  <td colspan="10">Mulai dirawat di Rumah Sakit Umum Pindad Bandung </td>
                </tr>
                <tr>
                  <td>Pada Hari / Tanggal</td>
                  <td>:</td>
                  <td>{{$suket_pasien_template->hari_rawat}}</td>
                  <td>/ {{$suket_pasien_template->tanggal_rawat}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td>Ruang / Kelas</td>
                  <td>:</td>
                  <td>{{$suket_pasien_template->ruang}}</td>
                  <td>/ {{$suket_pasien_template->kelas}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td colspan="10">Telah meninggal dunia di Rumah sakit Umum Pindad Bandung Pada :
                </tr>
                <tr>
                  <td>Hari / Tanggal</td>
                  <td>:</td>
                  <td>{{$suket_pasien_template->hari_kematian}}</td>
                  <td>/ {{$suket_pasien_template->tgl_kematian}}</td>
                  <td colspan="6"></td>
                </tr>
                <tr>
                  <td>Pkl</td>
                  <td>:</td>
                  <td>{{$suket_pasien_template->pukul}}</td>
                  <td colspan="6">WIB</td>
                </tr>
                <tr>
                  <td>Status Infeksi **)</td>
                  <td>:</td>
                  <td colspan="8">
                    <input type="checkbox" id="vehicle1" name="status_infeksi[]" value="U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19"
                    {{ str_contains($suket_pasien_template->status_infeksi, 'U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19')  ? 'checked' : ''  }}>
                    <label for="vehicle1"> U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19
                    </td>
                </tr>
                <tr>
                    <td></td>
                  <td>:</td>
                  <td colspan="8">
                    <input type="checkbox" id="vehicle1" name="status_infeksi[]" value="U07.2 Jenazah tidak terinfeksi Covid-19 )"
                    {{ str_contains($suket_pasien_template->status_infeksi, 'U07.2 Jenazah tidak terinfeksi Covid-19 ') ? 'checked' : '' }}  />
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
                      $date = $suket_pasien_template->created_at;
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
