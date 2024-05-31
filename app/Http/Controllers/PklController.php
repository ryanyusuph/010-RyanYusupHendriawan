<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PKL;

class PklController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pkl= PKL::all();
        return view("hal_Admin.PKL.data_pkl_admin", [
            "pkl" => $pkl
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hal_Admin.PKL.tambah_pkl_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "asal" => ["required", "min:3"], 
            "alamat" => ["required", "min:5"], 
            "tgl_mulai" => ["required"], 
            "tgl_berakhir" => ["required"], 
            "id_user" => ["required"], 
        ]);   

        $pkl = New PKL();  
        $pkl->asal_sekolah = $payload["asal"];  
        $pkl->alamat_sekolah = $payload["alamat"];  
        $pkl->tgl_mulai = $payload["tgl_mulai"];  
        $pkl->tgl_akhir = $payload["tgl_berakhir"];  
        $pkl->id_user = $payload["id_user"];  
        
        $pkl->save();
 
        return  redirect()->route("halaman_admin.PKL.index");
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
        $pkl = PKL::all()->find($id);
        return view("hal_Admin.PKL.ubah_pkl_admin", [
            'pkl' => $pkl
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            "asal" => ["required", "min:3"], 
            "alamat" => ["required", "min:5"], 
            "tgl_mulai" => ["required"], 
            "tgl_berakhir" => ["required"], 
            "id_user" => ["required"], 
        ]);   

        $pkl = PKL::find($id); 
        $pkl->asal_sekolah = $payload["asal"];  
        $pkl->alamat_sekolah = $payload["alamat"];  
        $pkl->tgl_mulai = $payload["tgl_mulai"];  
        $pkl->tgl_akhir = $payload["tgl_berakhir"];  
        $pkl->id_user = $payload["id_user"];  
        
        $pkl->save();
 
        return  redirect()->route("halaman_admin.PKL.index");
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PKL::find($id);
        PKL::destroy($id); 
        return redirect()->route("halaman_admin.PKL.index");
    } 

}
