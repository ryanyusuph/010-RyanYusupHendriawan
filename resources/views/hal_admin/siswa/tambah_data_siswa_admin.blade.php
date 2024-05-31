@extends('hal_admin.layout_admin')

@section('konten')  
  
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Siswa </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Tambah Siswa  </li>
                </ol>
                <div class="row mb-5"> 
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="card ">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Tambah Data Siswa   </h5> 
                            </div>  

                            <div class="card-body">
                                
                                <p> Silahkan Masukan Data Siswa </p>
                                @if ($errors->any)
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }} </p>
                                    @endforeach
                                @endif
                                <form action="{{ route('halaman_admin.siswa.store')  }}" method="POST">
                                    @csrf
                                <div class="form-group">
                                    <label for="id_pembimbing" class="mt-2 mb-2">
                                        Nomor Induk 
                                    </label>
                                    <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="Nomor Induk..." required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama_siswa" class="mt-2 mb-2">
                                        Nama Siswa 
                                    </label>
                                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa..." required> 
                                </div>
                                <div class="form-group">
                                    <label for="jk" class="mt-2 mb-2">
                                        Jenis Kelamin
                                    </label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        No Telepon 
                                    </label>
                                    <input type="text" class="form-control" name="nolep" id="nolep" placeholder="Nomor Telepon Siswa..." required> 
                                </div>
                                
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        Id User
                                    </label>
                                    <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User..." required> 
                                </div>
                                
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        Id Pembimbing 
                                    </label>
                                    <input type="text" class="form-control" name="id_pembimbing" id="id_pembimbing" placeholder="Id Pembimbing ..." required> 
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