@extends('hal_admin.layout_admin')

@section('konten')  
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Pembimbing </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Tambah Pembimbing  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="card">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Tambah Data Pembimbing  </h5> 
                            </div> 

                            <div class="card-body">
                                
                                <p> Silahkan Masukan Data Pembimbing </p>
                                @if ($errors->any)
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }} </p>
                                    @endforeach
                                @endif

                                <form action="{{ route('halaman_admin.pembimbing.store') }}" method="POST">
                                    @csrf
                                {{-- <div class="form-group">
                                    <label for="id_pembimbing" class="mt-2 mb-2">
                                        id_pembimbing
                                    </label>
                                    <input type="text" class="form-control" name="id_pembimbing" id="id_pembimbing" placeholder="ID Pembimbing" autofocus> 
                                </div> --}}
                                
                                <div class="form-group">
                                    <label for="nama_pembimbing" class="mt-2 mb-2">
                                        Nama Lengkap Pembimbing
                                    </label>
                                    <input type="text" class="form-control" name="nama_pembimbing" id="nama_pembimbing" placeholder="Nama Pembimbing..." required>  
                                </div> 
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        No Telepon 
                                    </label>
                                    <input type="text" class="form-control" name="nolep" id="nolep" placeholder="No Telepon..." required> 
                                </div> 
                                <div class="form-group">
                                    <label for="jabatan" class="mt-2 mb-2"> 
                                        Jabatan
                                    </label>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan..." required> 
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

                
            </div>
            <div class="row my-5"></div>
        </main> 


@endsection        