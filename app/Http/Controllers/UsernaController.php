<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userna;

class UsernaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userna= Userna::all();
        return view("hal_admin.user.data_user", [
            "userna" => $userna
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hal_admin.user.tambah_user'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "nama_user" => ["required", "min:3"],
            "username" => ["required" , "min:3"],  
            "password" => ["required" , "min:3"],  
        ]);   

        $user = New Userna();  
        $user->nama_user = $payload["nama_user"]; 
        $user->username = $payload["username"];
        $user->password = $payload["password"];
        $user->save();

        return  redirect()->route("halaman_admin.user.index");
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
        $user = Userna::all()->find($id);
        return view("hal_admin.user.ubah_user", [ 
            'user' => $user
        ]);    

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            "nama_user" => ["required", "min:3"],
            "username" => ["required" , "min:3"],  
            "password" => ["required" , "min:3"],  
        ]);  

        $user =Userna::find($id);  
        $user->nama_user = $payload["nama_user"]; 
        $user->username = $payload["username"];
        $user->password = $payload["password"];
        $user->save();
        
        return redirect()->route("halaman_admin.user.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Userna::find($id);
        Userna::destroy($id); 
        return redirect()->route("halaman_admin.user.index");
    }

 

    public function daftar(Request $request)
    {
        $payload = $request->validate([
            "nama_user" => ["required", "min:3"],
            "username" => ["required" , "min:3"],  
            "password" => ["required" , "min:3"],  
        ]);   

        $user = New Userna();  
        $user->nama_user = $payload["nama_user"]; 
        $user->username = $payload["username"];
        $user->password = $payload["password"];
        $user->save();

        return  redirect()->route("login");
    }

}
