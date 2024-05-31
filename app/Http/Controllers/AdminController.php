<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin= Admin::all();
        return view("hal_admin.admin.data_admin", [
            "admin" => $admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hal_admin.admin.tambah_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "nama_admin" => ["required", "min:3"],
            "username" => ["required" , "min:3"],  
            "password" => ["required" , "min:3"],  
        ]);   

        $admin = New Admin();  
        $admin->nama_admin = $payload["nama_admin"]; 
        $admin->username = $payload["username"];
        $admin->password = $payload["password"];
        $admin->save();

        return  redirect()->route("halaman_admin.admin.index");
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
        $Admin = Admin::all()->find($id);
        return view("hal_admin.admin.ubah_admin", [
            'admin' => $Admin
        ]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            "nama_admin" => ["required", "min:3"],
            "username" => ["required" , "min:3"],  
            "password" => ["required" , "min:3"],  
        ]);   
         
        $admin = Admin::find($id);  
        $admin->nama_admin = $payload["nama_admin"]; 
        $admin->username = $payload["username"];
        $admin->password = $payload["password"];
        $admin->save(); 

        return redirect()->route("halaman_admin.admin.index");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::find($id);
        Admin::destroy($id); 
        return redirect()->route("halaman_admin.admin.index");
    }
}
