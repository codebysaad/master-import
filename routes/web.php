<?php

use Illuminate\Support\Facades\Route;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Imports\PegawaiImport;
use App\Http\Livewire\Pegawais;
use App\Http\Livewire\MasterImport;

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
    return view('welcome',[
        'users' => App\Models\User::all()
    ]);
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('pegawai', Pegawais::class)->name('pegawai');
    Route::get('master-import', MasterImport::class)->name('master-import');
    // Route::get('pegawai', function () {
    //     $pegawais = Pegawais::paginate(15);
    //     $pegawais->withPath('custom/url');
    // })->name('pegawai');

    Route::post('import', function () {
        $fileName = time().'_'.request()->file->getClientOriginalName();
        request()->file('file')->storeAs('reports', $fileName, 'public');
    
        Excel::import(new PegawaiImport, request()->file('file'));
        return redirect()->back()->with('success','Data Imported Successfully');
    });

    Route::get('export-csv', function () {
        return Excel::download(new UsersExport, 'users.csv');
    });
});