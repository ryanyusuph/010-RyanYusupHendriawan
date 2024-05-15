<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");
 
Route::get('/daftar', function(){
    return view('daftar') ; 
})->name('daftar'); 

Route::get('/login', function(){
    return view('login') ; 
})->name('login');  

 
Route::name('halaman_user')->group(function(){
    
    Route::get('/halUser', function () {
        return view('hal_user.dashboard.dashboard');
    })->name('/halUser'); 

    Route::get('/halUserPKL', function () {
        return view('hal_user.PKL.data_pkl');
    })->name('/halUserPKL'); 
 
    Route::get('halUserPengajuan', function(){
        return view('hal_user.PKL.pengajuan_pkl'); 
    })->name('halUserPengajuan');

    Route::get('halUserSiswa', function(){
        return view('hal_user.siswa.data_siswa');
    }); 


});
 
Route::name('halaman_admin')->group(function(){ 

    Route::get('/halAdmin', function () {
        return view('hal_Admin.dashboard.dashboard_admin');
    })->name('/halAdmin'); 

    Route::get('/halAdminSiswa', function(){
        return view('hal_Admin.siswa.data_siswa_admin');
    }) ; 

    Route::get('/halAdminPembimbing', function(){
        return view('hal_Admin.pembimbing.data_pembimbing');
    }) ;  

});