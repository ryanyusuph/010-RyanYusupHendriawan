@extends('layout') 

@section('konten')
<div class="container pt-4 pb-4">
    <div class="row"> 
        <div class="col-12 col-md-6 offset-md-3 "> 
            <div class="card border-secondary">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12"> 
                                <h3 align="center" > Silahkan Daftar </h3>
                            </div> 
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="{{ asset('image/daftar.png') }}" alt="gambar_login" width="220px" >
                            </div>  

                                <form action="/daftarkan" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="full_name" class="mt-3 mb-2">
                                            Nama Lengkap
                                        </label>
                                        <input type="text" class="form-control" name="nama_user" id="nama_user" autofocus> 
                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="mt-3 mb-2">
                                            Username
                                        </label>
                                        <input type="text" class="form-control" name="username" id="username" > 
                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="mt-3 mb-2">
                                            Password
                                        </label>
                                        <input type="password" class="form-control" name="password" id="password"> 
                                        <small> *tips: Gunakan kombinasi huruf, angka dan karakter </small>
                                    </div> 
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-info"> Daftar </button>
                                        <button type="reset" class="btn btn-danger"> Cancel </button>
                                    </div> 
                                </form>
                          
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div> 
@endsection