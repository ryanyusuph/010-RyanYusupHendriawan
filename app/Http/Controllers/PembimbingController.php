<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembimbing; 

class PembimbingController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    // protected $table = 'pembimbing';

    public function index()
    {
        $pembimbing= Pembimbing::all();
        return view("hal_Admin.pembimbing.data_pembimbing", [
            "pembimbing" => $pembimbing
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        return view('hal_Admin.pembimbing.tambah_data_pembimbing');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "nama_pembimbing" => ["required", "min:3"],
            "nolep" => ["required", "min:7"], 
            "jabatan" => ["required", "min:3"], 
        ]);   

        $pembimbing = New Pembimbing();  
        $pembimbing->nama_pembimbing = $payload["nama_pembimbing"]; 
        $pembimbing->no_telp_pembimbing = $payload["nolep"];
        $pembimbing->jabatan = $payload["jabatan"];
        $pembimbing->save();

        return  redirect()->route("halaman_admin.pembimbing.index");
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
        $pembimbing = Pembimbing::all()->find($id);
        return view("hal_Admin.pembimbing.ubah_data_pembimbing", [
            'pembimbing' => $pembimbing
        ]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $payload = $request->validate([
            "nama_pembimbing" => ["required", "min:3"],
            "nolep" => ["required", "min:7"], 
            "jabatan" => ["required", "min:3"], 
        ]);  

        $pembimbing =Pembimbing::find($id);  
        $pembimbing->nama_pembimbing = $payload["nama_pembimbing"]; 
        $pembimbing->no_telp_pembimbing = $payload["nolep"];
        $pembimbing->jabatan = $payload["jabatan"];
        $pembimbing->save();

        return  redirect()->route("halaman_admin.pembimbing.index");

    }

    /**
     * Remove the specified resource from storage. 
     */
    public function destroy(string $id)
    {
        Pembimbing::find($id);
        Pembimbing::destroy($id); 
        return redirect()->route("halaman_admin.pembimbing.index");
    }
}
