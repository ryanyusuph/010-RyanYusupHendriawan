@extends('hal_user.layout_user')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Pengajuan PKL </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/Pengajuan PKL  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Pengajuan PKL </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Silahkan Isi Data berikut :   </p>


                                <div class="form-group">
                                    <label for="asal" class="mt-3 mb-2">
                                        Asal Sekolah 
                                    </label>
                                    <input type="text" class="form-control" name="asal" id="asal" autofocus>  
                                </div> 
                                <div class="form-group">
                                    <label for="alamat" class="mt-3 mb-2">
                                        Alamat Sekolah
                                    </label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" >  
                                </div>
                                <div class="form-group">
                                    <label for="tgl_mulai" class="mt-3 mb-2">
                                        Tanggal Mulai 
                                    </label>
                                    <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" >  
                                </div>
                                <div class="form-group">
                                    <label for="tgl_selesai" class="mt-3 mb-2">
                                        Tanggal Selesai 
                                    </label>
                                    <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" >  
                                </div>

                            </div>
                        </div>
                    </div> 
                </div>
 
            </div>
        </main> 


@endsection       
