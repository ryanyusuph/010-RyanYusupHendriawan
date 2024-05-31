<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\UsernaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PklController;


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
 
    Route::get('/halUserPengajuan', function(){
        return view('hal_user.PKL.pengajuan_pkl'); 
    })->name('halUserPengajuan');

    Route::get('/halUserSiswa', function(){
        return view('hal_user.siswa.data_siswa');
    }); 

});
 
Route::name('halaman_admin.')->group(function(){ 

    Route::get('/halAdmin', function () { 
        return view('hal_Admin.dashboard.dashboard_admin');
    })->name('/halAdmin'); 


    Route::controller(PklController::class)->name('PKL.')->group(function(){  
        Route::get('/halAdminPKL', "index")->name("index");
        Route::get('/halAdminTambahPKL', "create")->name("create"); 
        Route::get('/{id}/halAdminUbahPKL', "edit")->name("edit"); 
        Route::post('/pkl/',"store")->name("store");

        Route::put('/pkl/{id}',"update")->name("update"); 
        Route::post('/pkl/{id}',"destroy")->name("destroy"); 
    }) ;  


    Route::controller(PersetujuanController::class)->name('Persetujuan.')->group(function(){  
        Route::get('/halPersetujuan', "index")->name("index");
        Route::get('/halTambahPersetujuan', "create")->name("create"); 
        Route::get('/{id}/halUbahPersetujuan', "edit")->name("edit"); 
        Route::post('/persetujuan/',"store")->name("store");

        Route::put('/persetujuan/{id}',"update")->name("update"); 
        Route::post('/persetujuan/{id}',"destroy")->name("destroy"); 

        // Route::get('/PersetujuanPKL', function(){
        //     return view('hal_Admin.PKL.persetujuan_PKL');
        // }) ;  
    }) ;


    Route::controller(SiswaController::class)->name('siswa.')->group(function(){ 
        Route::get('/halAdminSiswa', "index")->name("index");
        Route::get('/halAdminTambahSiswa', "create")->name("create"); 
        Route::get('/{id}/halUbahSiswa', "edit")->name("edit"); 
        Route::post('/siswa/',"store")->name("store");

        Route::put('/siswa/{id}',"update")->name("update"); 
        Route::post('/siswa/{id}',"destroy")->name("destroy"); 
    }); 
        
    Route::controller(PembimbingController::class)->name('pembimbing.')->group(function(){
        Route::get('/halAdminPembimbing', "index")->name("index");
        Route::get('/halTambahPembimbing', "create")->name("create"); 
        Route::get('/{id}/halUbahPembimbing', "edit")->name("edit"); 
        Route::post('/pembimbing/',"store")->name("store");

        Route::put('/pembimbing/{id}',"update")->name("update"); 
        Route::post('/pembimbing/{id}',"destroy")->name("destroy"); 
    });
  
    Route::controller(AdminController::class)->name("admin.")->group(function(){
        Route::get('/halKelolaAdmin', "index")->name("index");
        Route::get('/halTambahAdmin', "create")->name("create"); 
        Route::get('/{id}/halUbahAdmin', "edit")->name("edit"); 
        Route::post('/admin/',"store")->name("store");

        Route::put('/admin/{id}',"update")->name("update");
        Route::post('/admin/{id}',"destroy")->name("destroy"); 
    });
        

    Route::controller(UsernaController::class)->name('user.')->group(function(){
        Route::get('/halKelolaUser', "index")->name("index");
        Route::get('/halTambahUser', "create")->name("create"); 
        Route::get('/{id}/halUbahUser', "edit")->name("edit");  
        Route::post('/userna/',"store")->name("store"); 

        Route::put('/userna/{id}',"update")->name("update");
        Route::post('/userna/{id}',"destroy")->name("destroy"); 

        
 
    }) ; 

    Route::controller(UsernaController::class)->group(function(){
        Route::post('/daftarkan', "daftar")->name("daftarkan");
    }); 
 
}); // grouping halaman_admin 




