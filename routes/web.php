<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SejarahDesaController;
use App\Http\Controllers\DemografisDesaController;
use App\Http\Controllers\GeografisDesaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\RealisasiController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\PartisipasiController;
use App\Http\Controllers\KemitraanController;
use App\Http\Controllers\RancanganController;
use App\Http\Controllers\PembangunanController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\RencanaPembangunanController;

Route::get('/', [HomeController::class, 'index'])->name('website.home');
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::resource('sliders', SliderController::class)->middleware('auth');

Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('sejarahs', SejarahController::class)->middleware('auth');


Route::get('/slider', [SliderController::class, 'show'])->name('slider.show');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//login form
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// //register
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::middleware('guest')->group(function(){
    Route::post('/login', [LoginController::class, 'login']);
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
});


//profil desa
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami');
Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
Route::get('/views', [SejarahDesaController::class, 'index'])->name('sejarahdesa');
Route::get('/demografis', [DemografisDesaController::class, 'index'])->name('demografis');
Route::get('/geografis', [GeografisDesaController::class, 'index'])->name('geografis');
// Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
// Route::post('/sliders/create', [SliderController::class, 'store'])->name('sliders.store');

//informasi pemerintahan
Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur');
Route::get('/perangkat', [PerangkatController::class, 'index'])->name('perangkat');
Route::get('/lembaga', [LembagaController::class, 'index'])->name('lembaga');
Route::get('/realisasi', [RealisasiController::class, 'index'])->name('realisasi');
Route::get('/anggaran', [AnggaranController::class, 'index'])->name('anggaran');
Route::get('/partisipasi', [PartisipasiController::class, 'index'])->name('partisipasi');
Route::get('/kemitraan', [KemitraanController::class, 'index'])->name('kemitraan');

//informasi publik
Route::get('/rancangan', [RancanganController::class, 'index'])->name('rancangan');
Route::get('/pembangunan', [PembangunanController::class, 'index'])->name('pembangunan');
Route::get('/potensi', [PotensiController::class, 'index'])->name('potensi');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

//berita dan acara
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
// Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

//kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::get('/Rencana', [RencanaPembangunanController::class, 'index'])->name('Rencana.index');
Route::get('/Rencana/user', [RencanaPembangunanController::class, 'user'])->name('Rencana.user');
Route::get('/rencana/view/{id}', [RencanaPembangunanController::class, 'viewPDF'])->name('Rencana.viewPDF');
Route::patch('/rencana/{id}/status/{status}', [RencanaPembangunanController::class, 'updateStatus'])->name('Rencana.updateStatus');

Route::middleware(['auth'])->group(function () {
    Route::get('/RencanaPembangunan', [RencanaPembangunanController::class, 'index'])->name('RencanaPembangunan.index');
    Route::get('/RencanaPembangunan/create', [RencanaPembangunanController::class, 'create'])->name('RencanaPembangunan.create');
    Route::get('/Rencana/create', [RencanaPembangunanController::class, 'create'])->name('Rencana.create');
    Route::post('/Rencana', [RencanaPembangunanController::class, 'store'])->name('Rencana.store');
    // Route lainnya yang membutuhkan autentikasi
});

Route::middleware(['auth', 'role.redirect'])->group(function () {
    // Route khusus untuk pengguna yang sudah login
});

//inputan agenda
Route::middleware('auth')->group(function(){
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

        // Menampilkan form untuk membuat agenda baru
        Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create');

        // Menyimpan data agenda baru
        Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');

        // Menampilkan detail agenda berdasarkan ID
        Route::get('/agenda/{id}', [AgendaController::class, 'showAdmin'])->name('agenda.showAdmin');

        // Menampilkan form untuk mengedit agenda
        Route::get('/agenda/{id}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');

        // Mengupdate data agenda
        Route::put('/agenda/{id}', [AgendaController::class, 'update'])->name('agenda.update');

        // Menghapus agenda
        Route::delete('/agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

});
// Menampilkan halaman katalog agenda
Route::get('/agenda/catalog', [AgendaController::class, 'catalog'])->name('agenda.catalog');

// // Menampilkan halaman katalog agenda
Route::get('/katalog', [DashboardController::class, 'catalog'])->name('katalog');
// Rute untuk menampilkan agenda berdasarkan ID
Route::get('/katalog/{id}', [AgendaController::class, 'show'])->name('ShowKatalog');

//inputan berita
Route::middleware('auth')->group(function(){
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

        // Menampilkan form untuk membuat berita baru
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');

        // Menyimpan data berita baru
        Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

        // Menampilkan detail berita berdasarkan ID
        Route::get('/berita/{id}', [BeritaController::class, 'showAdmin'])->name('berita.showAdmin');

        // Menampilkan form untuk mengedit berita
        Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');

        // Mengupdate data berita
        Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');

        // Menghapus berita
        Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

});
// Menampilkan halaman katalog berita
Route::get('/berita/catalog', [BeritaController::class, 'catalog'])->name('berita.catalog');

// // Menampilkan halaman katalog berita
Route::get('/katalog', [DashboardController::class, 'catalog'])->name('katalog');
// Rute untuk menampilkan berita berdasarkan ID
Route::get('/katalog/{id}', [BeritaController::class, 'show'])->name('ShowKatalog');




