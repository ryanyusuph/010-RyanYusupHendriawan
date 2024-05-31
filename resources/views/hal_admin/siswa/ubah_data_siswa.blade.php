@extends('hal_admin.layout_admin')

@section('konten')  
 
        <main>
            <div class="container-fluid px-4 pb-5">
                <h2 class="mt-4"> Data Siswa </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Ubah Siswa  </li>
                </ol>
                <div class="row mb-5"> 
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="card ">
                         
                            <div class="card-header bg-warning text-white text-center">
                                 <h5> Ubah Data Siswa   </h5> 
                            </div>
                            <div class="card-body">
                                    
                                <p> Silahkan Masukan Data Siswa yang baru</p> 

                                @if ($errors->any)
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }} </p>
                                    @endforeach
                                @endif

                                <form action="{{ route('halaman_admin.siswa.update', $siswa->id) }}" method="POST">  
                                    @csrf
                                    @method("PUT")  
                                <div class="form-group">
                                    <label for="id_pembimbing" class="mt-2 mb-2">
                                        Nomor Induk 
                                    </label>
                                    <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="Nomor Induk..." value="{{ $siswa['nomor_induk'] }}" > 
                                </div>
                                <div class="form-group">
                                    <label for="nama_siswa" class="mt-2 mb-2">
                                        Nama Siswa 
                                    </label>
                                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa..." value="{{ $siswa['nama_siswa'] }}"> 
                                </div>
                                <div class="form-group">
                                    <label for="jk" class="mt-2 mb-2">
                                        Jenis Kelamin
                                    </label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="Laki-Laki" 
                                        @if ( $siswa['jk']=='Laki-Laki'  )
                                             selected 
                                        @endif
                                        >Laki-Laki</option>
                                        <option value="Perempuan"
                                        @if ( $siswa['jk']=='Perempuan'  )
                                            selected 
                                        @endif
                                        >Perempuan</option>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        No Telepon 
                                    </label>
                                    <input type="text" class="form-control" name="nolep" id="nolep" placeholder="Nomor Telepon Siswa..." value="{{ $siswa['nomor_induk'] }}"> 
                                </div> 
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        id user
                                    </label>
                                    <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id user..." value="{{ $siswa['id_user'] }}"> 
                                </div> 
                                <div class="form-group">
                                    <label for="nolep" class="mt-2 mb-2">
                                        id pembimbing
                                    </label>
                                    <input type="text" class="form-control" name="id_pembimbing" id="id_pembimbing" placeholder="Id pembimbing..." value="{{ $siswa['id_pembimbing'] }}"> 
                                </div>  

                                <div class="form-group mt-3">
                                    <a href="/halAdminSiswa">
                                        <button class="btn btn-warning" > Ubah </button>
                                    </a>
                                    <a href="#">
                                        <button class="btn btn-danger" > Hapus </button>
                                    </a>
                                </div>
                            </form> 
                            
                            </div>
                        </div>
                    </div> 
                </div>

                
            </div>
        </main> 


@endsection        