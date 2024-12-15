<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterRawatInapController;
use App\Http\Controllers\SuketKematianController;
use App\Http\Controllers\SuketKematianIgdController;
use App\Http\Controllers\SuratDokterController;
use App\Http\Controllers\SuratIstirahatIgdController;
use App\Http\Controllers\KategoriDokterController;
use App\Http\Controllers\KategoriRuangRawatController;
use App\Http\Controllers\KategoriKelasRuanganController;
use App\Http\Controllers\KategoriKelasController;
use App\Http\Controllers\KategoriPenjaminController;
use App\Http\Controllers\KategoriPoliController;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('/register_pasien', 'admin.register.index');

Route::Resource('/admin/register_pasien', RegisterRawatInapController::class);
Route::Resource('/admin/suket_kematian', SuketKematianController::class);
Route::Resource('/admin/suket_kematian_igd', SuketKematianIgdController::class);
Route::Resource('/admin/surat_istirahat_dokter', SuratDokterController::class);
Route::Resource('/admin/surat_istirahat_igd', SuratIstirahatIgdController::class);
Route::Resource('/admin/kategori_dokter', KategoriDokterController::class);
Route::Resource('/admin/kategori_rawat', KategoriRuangRawatController::class);
Route::Resource('/admin/kategori_kelas', KategoriKelasController::class);
Route::Resource('/admin/kategori_kelasruangan', KategoriKelasRuanganController::class);
Route::Resource('/admin/kategori_penjamin', KategoriPenjaminController::class);
Route::Resource('/admin/kategori_poli', KategoriPoliController::class);

Route::get('/print', [App\Http\Controllers\RegisterRawatInapController::class, 'print'])->name('print');
Route::get('/laporan_register_rinap', [App\Http\Controllers\RegisterRawatInapController::class, 'laporan_register_rinap'])->name('laporan_register_rinap');

Route::get('/print_istirahat_ri', [App\Http\Controllers\SuratDokterController::class, 'print_istirahat_ri'])->name('print_istirahat_ri');
Route::get('/laporan_istirahat_ri', [App\Http\Controllers\SuratDokterController::class, 'laporan_istirahat_ri'])->name('laporan_istirahat_ri');

Route::get('/print_istirahat_igd', [App\Http\Controllers\SuratIstirahatIgdController::class, 'print_istirahat_igd'])->name('print_istirahat_igd');
Route::get('/laporan_istirahat_igd', [App\Http\Controllers\SuratIstirahatIgdController::class, 'laporan_istirahat_igd'])->name('laporan_istirahat_igd');

Route::get('/print_suket_ri', [App\Http\Controllers\SuketKematianController::class, 'print_suket_ri'])->name('print_suket_ri');
Route::get('/laporan_suket_ri', [App\Http\Controllers\SuketKematianController::class, 'laporan_suket_ri'])->name('laporan_suket_ri');

Route::get('/print_suket_igd', [App\Http\Controllers\SuketKematianIgdController::class, 'print_suket_igd'])->name('print_suket_igd');
Route::get('/laporan_suket_igd', [App\Http\Controllers\SuketKematianIgdController::class, 'laporan_suket_igd'])->name('laporan_suket_igd');


Route::get('/suket_pasien_template/{id}', [App\Http\Controllers\SuketKematianController::class, 'suket_pasien_template'])->name('suket_pasien_template');
Route::get('/suket_pasien_pdf/{id}', [App\Http\Controllers\SuketKematianController::class, 'suket_pasien_pdf'])->name('suket_pasien_pdf');

Route::get('/suket_pasien_igd/{id}', [App\Http\Controllers\SuketKematianIgdController::class, 'suket_pasien_igd'])->name('suket_pasien_igd');
Route::get('/suket_igd_pdf/{id}', [App\Http\Controllers\SuketKematianIgdController::class, 'suket_igd_pdf'])->name('suket_igd_pdf');

// surat istirahat dokter rinap
Route::get('/surat_dokter_template/{id}', [App\Http\Controllers\SuratDokterController::class, 'surat_dokter_template'])->name('surat_dokter_template');
Route::get('/surat_dokter_pdf/{id}', [App\Http\Controllers\SuratDokterController::class, 'surat_dokter_pdf'])->name('surat_dokter_pdf');


// surat istirahat dokter igd
Route::get('/surat_dokter_igd/{id}', [App\Http\Controllers\SuratIstirahatIgdController::class, 'surat_dokter_igd'])->name('surat_dokter_igd');
Route::get('/surat_igd_pdf/{id}', [App\Http\Controllers\SuratIstirahatIgdController::class, 'surat_igd_pdf'])->name('surat_igd_pdf');

Route::get('/GetKelasRuangan/{id}', [App\Http\Controllers\RegisterRawatInapController::class, 'GetKelasRuangan']);


