<?php

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
    return view('login');
});

// ================== PEMANDU ROUTING ================== //

// Routing show pengumuman
Route::get('/pemandu', 'PemanduController@index');
 // Tambah pengumuman

 // Ubah pengumuman
Route::get('/pemandu/pengumuman/{id}', function(){
    return view('pemandu.editpengumuman');
});

 // Hapus pengumuman

// Routing menu peserta -> show aja
Route::get('/pemandu/peserta', 'PemanduController@menupeserta');

// Routing checklist peserta
 // Show
Route::get('/pemandu/peserta/checklist', function() {
    return view('pemandu.checklistpendaftar');
});
 // Update -> verifikasi

 // Update -> batal/undo verifikasi

// Routing unduh berkas pendaftar
 // Show list pendaftar
Route::get('/pemandu/peserta/berkas', function() {
    return view('pemandu.unduhberkaspendaftar');
});

// Routing menu bagi kelas
Route::get('/pemandu/peserta/bagikelas', function() {
    return view('pemandu.menubagikelas');
});

// Routing bagi kelas -> atur kelas (menambah, mengurangi kelas)
 // Show
Route::get('/pemandu/peserta/bagikelas/aturkelas', function() {
    return view('pemandu.aturkelas');
});

 // Tambah

 // Update
Route::get('/pemandu/peserta/bagikelas/aturkelas/{id}', function() {
    return view('pemandu.ubahaturkelas');
});

 // Delete

// Routing bagi peserta ke kelas yang sudah terdaftar
 // Show
Route::get('/pemandu/peserta/bagikelas/bagibagi', function() {
    return view('pemandu.bagikelas');
});

 // Update

// Routing menu buat PA+Kuesioner
Route::get('/pemandu/buat', 'PemanduController@menubuat');

 // Show kuesioner
Route::get('/pemandu/buat/daftarkuesioner', function() {
    return view('pemandu.daftarkuesioner');
});

 // Show kuesioner terpilih

 // Update kuesioner
Route::get('/pemandu/buat/riliskuesioner', function() {
    return view('pemandu.riliskuesioner');
});

 // Show semua PA
Route::get('/pemandu/buat/daftarpa', function() {
    return view('pemandu.daftarpa');
});

 // Show PA materi-n
Route::get('/pemandu/buat/pa', function() {
    return view('pemandu.buatpa');
});

 // Insert pernyataan PA

 // Update pernyataan PA
Route::get('/pemandu/buat/pa/{id}', function() {
    return view('pemandu.ubahpa');
});

// Routing menu oc
Route::get('/pemandu/oc', 'PemanduController@menuoc');

 // Show checklist peserta
Route::get('/pemandu/oc/checklist', function() {
    return view('pemandu.checklistregistrasi');
});

 // Show registrasi materi
Route::get('/pemandu/oc/registrasi', function() {
    return view('pemandu.cekregistrasi');
});

// ================== OC ROUTING ================== //
// Routing halaman OC
Route::get('/oc', 'OCController@index');

// Routing checklist
 // Show daftar peserta
Route::get('/oc/checklist', 'OCController@checklist');

 // Show form checklist menurut nrp
Route::get('/oc/checklist/{nrp}', 'OCController@showformchecklist');

 //Update checklist


// Routing registrasi
 // Show daftar peserta
Route::get('/oc/registrasi', 'OCController@registrasi');

 // Show form registrasi menurut nrp
Route::get('/oc/registrasi/{nrp}', 'OCController@showformregistrasi');

 // Update presensi


// ================== PESERTA ================== //
// Routing halaman depan peserta
 // Show pengumuman
Route::get('/peserta', 'PesertaController@index');

// Routing menu daftar peserta
 // Show form / informasi sudah terdaftar
Route::get('/peserta/daftar', 'PesertaController@menudaftar');

 // Update data peserta -> terdaftar

// Routing menu berkas
 // Show form upload
Route::get('/peserta/berkas', 'PesertaController@menuberkas');

 // Upload file berkas

// Routing menu pa/kuesioner
 // Show menu pa kuesioner
Route::get('/peserta/pakuesioner', 'PesertaController@menupakuesioner');

 // Show menu pilih PA
Route::get('peserta/isipa', 'PesertaController@showpa');

 // Show form PA sesuai materi
Route::get('peserta/isipa/{materi}', 'PesertaController@showformpa');

 // Input PA sesuai materi

 // Show form isi kuesioner
Route::get('peserta/kuesioner', 'PesertaController@showformkuesioner');

 // Input kuesioner