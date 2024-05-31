@extends('hal_admin.layout_admin')

@section('konten')
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">  Data PKL </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Tambah Data  PKL  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="card">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Tambah Data PKL </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Silahkan Isi Data PKL berikut :   </p>

                                @if ($errors->any)
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }} </p>
                                    @endforeach
                                @endif

                                <form action="{{ route('halaman_admin.PKL.store') }}" method="POST"> 
                                    @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="asal" class="mt-3 mb-2">
                                                Asal Sekolah 
                                            </label>
                                            <input type="text" class="form-control" name="asal" id="asal" autofocus required>  
                                        </div> 
                                        <div class="form-group">
                                            <label for="alamat" class="mt-3 mb-2"> 
                                                Alamat Sekolah 
                                            </label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" required>  
                                        </div>
                                    </div>
    
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="tgl_mulai" class="mt-3 mb-2">
                                                Tanggal Mulai 
                                            </label>
                                            <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" required>  
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_berakhir" class="mt-3 mb-2">
                                                Tanggal berakhir 
                                            </label>
                                            <input type="date" class="form-control" name="tgl_berakhir" id="tgl_berakhir" required>  
                                        </div> 
                                        <div class="form-group">
                                            <label for="tgl_berakhir" class="mt-3 mb-2">
                                                id user
                                            </label>
                                            <input type="text" class="form-control" name="id_user" id="id_user" required>  
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
 
            </div> 
            <div class="row my-5"></div>
        </main> 


@endsection       
