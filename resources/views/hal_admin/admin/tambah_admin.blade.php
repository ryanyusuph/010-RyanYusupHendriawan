@extends('hal_admin.layout_admin')

@section('konten')  
  
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Admin </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Tambah Admin  </li>
                </ol>
                <div class="row mb-5"> 
                    <div class="col-12 col-md-8 offset-md-2">
                        <div class="card ">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Tambah Data Admin   </h5> 
                            </div>  
                            <div class="card-body"> 
                                <p> Silahkan Masukan Data Admin </p>

                                @if ($errors->any)
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }} </p>
                                    @endforeach
                                @endif

                                <form action="{{ route('halaman_admin.admin.store') }}" method="POST"> 
                                    @csrf
                                    <div class="row">
    
                                            <div class="col-12">
                                                {{-- <div class="form-group">
                                                    <label for="id_pembimbing" class="mt-2 mb-2">
                                                        ID Admin
                                                    </label>
                                                    <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="ID Admin..." required> 
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="nama_admin" class="mt-2 mb-2">
                                                        Nama Admin 
                                                    </label>
                                                    <input type="text" class="form-control" name="nama_admin" id="nama_admin" placeholder="Nama Admin..." required autofocus>  
                                                </div> 
                                            </div>

                                    </div> 

                                        <div class="row"> 
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="username" class="mt-2 mb-2">
                                                        Username
                                                    </label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username..." required> 
                                                </div>
                                            </div> 
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="jabatan" class="mt-2 mb-2">
                                                        Password 
                                                    </label>
                                                    <input type="text" class="form-control" name="password" id="password" placeholder="Password..." required> 
                                                </div>
                                            </div>
                                        </div> 

                                    
                                    <div class="form-group mt-3"> 
                                            <button class="btn btn-info" type="submit"> Tambahkan </button> 
                                            <button class="btn btn-danger" type="reset"> Hapus </button> 
                                    </div>

                            </form>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row mt-3 mb-5"></div>
                
            </div>
            <div class="row my-5"></div>
        </main> 


@endsection        