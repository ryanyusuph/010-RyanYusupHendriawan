<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; 

class SiswaController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa= Siswa::all();
        return view("hal_Admin.siswa.data_siswa_admin", [
            "siswa" => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hal_Admin.siswa.tambah_data_siswa_admin') ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "nomor_induk" => ["required", "min:3"], 
            "nama_siswa" => ["required", "min:3"], 
            "nolep" => ["required", "min:7"],  
            "jk" => ["required"],  
            "id_user" => ["required"],  
            "id_pembimbing" => ["required" ],  
        ]);   
 
        $siswa = New Siswa();  
        $siswa->nama_siswa = $payload["nama_siswa"]; 
        $siswa->nomor_induk= $payload["nomor_induk"];
        $siswa->no_telp= $payload["nolep"]; 
        $siswa->jk= $payload["jk"];  
        $siswa->id_user= $payload["id_user"];  
        $siswa->id_pembimbing= $payload["id_pembimbing"];  

        $siswa->save();  

        return  redirect()->route("halaman_admin.siswa.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         
        $siswa = Siswa::all()->find($id);
        return view("hal_Admin.siswa.ubah_data_siswa", [
            'siswa' => $siswa
        ]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            "nomor_induk" => ["required", "min:3"], 
            "nama_siswa" => ["required", "min:3"], 
            "nolep" => ["required", "min:7"],  
            "jk" => ["required"],  
            "id_user" => ["required"],  
            "id_pembimbing" => ["required" ],  
        ]);   
 
        // $siswa = New Siswa();  
        $siswa = Siswa::find($id);
        $siswa->nama_siswa = $payload["nama_siswa"]; 
        $siswa->nomor_induk= $payload["nomor_induk"];
        $siswa->no_telp= $payload["nolep"]; 
        $siswa->jk= $payload["jk"];  
        $siswa->id_user= $payload["id_user"];  
        $siswa->id_pembimbing= $payload["id_pembimbing"];  

        $siswa->save();  

        return  redirect()->route("halaman_admin.siswa.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id);
        Siswa::destroy($id); 
        return  redirect()->route("halaman_admin.siswa.index");
    }
}
