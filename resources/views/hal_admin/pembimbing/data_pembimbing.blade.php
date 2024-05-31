@extends('hal_admin.layout_admin')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Pembimbing </h2>
                <ol class="breadcrumb mb-4">
<<<<<<< HEAD
                    <li class="breadcrumb-item active">Dashboard Admin/Data Pembimbing  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">  
=======
                    <li class="breadcrumb-item active">Dashboard/Data Pembimbing  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
                         
                            <div class="card-header bg-success text-white text-center">
                                 <h5> Data Pembimbing  </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Berikut Data Pembimbing :  </p>
<<<<<<< HEAD
                                <div class="table-responsive"> 
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr> 
                                                <td> Id Pembimbing </td>
                                                <td> Nama Pembimbing </td> 
                                                <td> No Telepon </td>   
                                                <td> Jabatan  </td>   
                                                <td colspan="2"> Aksi </td>
=======
                                <div class="table-responsive">
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <td> Id Pembimbing </td>
                                                <td> Nama Pembimbing </td>
                                                <td> JK </td> 
                                                <td> No Telepon </td>   
                                                <td> Jabatan  </td>   
                                                <td> Aksi </td>
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
                                            </tr>    
                                        </thead>    

                                        <tbody>
<<<<<<< HEAD
                                            @foreach ($pembimbing as $item)
                                               
                                            <tr>
                                                <td> {{ $item["id"] }} </td>
                                                <td> {{ $item["nama_pembimbing"] }}</td> 
                                                <td> {{ $item["no_telp_pembimbing"] }} </td>  
                                                <td> {{ $item["jabatan"] }}</td>  
                                                <td> 
                                                    <a href="{{ route('halaman_admin.pembimbing.edit', $item["id"] ) }}" >
=======
                                            <tr>
                                                <td>  1 </td>
                                                <td> Sugeng</td> 
                                                <td> Laki- Laki </td>  
                                                <td> 022808612945</td> 
                                                <td> Marketing </td>
                                                <td> 
                                                    <a href="" >
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
                                                        <button class="btn btn-warning  ">
                                                            Ubah 
                                                        </button>  
                                                    </a>
<<<<<<< HEAD
                                                </td>
                                                <td> 
                                                    <form action="{{ route('halaman_admin.pembimbing.destroy', $item["id"] ) }}" method="POST">    
                                                        @csrf
                                                        <button class="btn btn-danger">
                                                            Hapus
                                                        </button> 
                                                    </form> 
                                                </td>
                                            </tr> 

                                            @endforeach
                                             
=======
                                                    <a href="" >
                                                        <button class="btn btn-danger">
                                                            Hapus
                                                        </button> 
                                                    </a>
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>  2 </td>
                                                <td> Dora </td> 
                                                <td> Perempuan </td>  
                                                <td> 085218612934</td> 
                                                <td>  Keuangan </td>
                                                <td> 
                                                    <a href="">
                                                        <button class="btn btn-warning">
                                                            Ubah 
                                                        </button> 
                                                    </a>
                                                    <a href="" >
                                                        <button class="btn btn-danger">
                                                            Hapus
                                                        </button> 
                                                    </a>
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>  3 </td>
                                                <td> Purwanto </td> 
                                                <td> Laki- Laki </td>  
                                                <td> 0857886129238</td> 
                                                <td> Teknisi  </td>
                                                <td> 
                                                    <a href="">
                                                        <button class="btn btn-warning">
                                                            Ubah 
                                                        </button> 
                                                    </a>
                                                    <a href="" >
                                                        <button class="btn btn-danger">
                                                            Hapus
                                                        </button> 
                                                    </a>
                                                </td>
                                            </tr>  
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

<<<<<<< HEAD
                <div class="row mt-4">
                    <div class="col-12">
                        {{-- <a href="/halTambahPembimbing">  --}}
                            <a href="{{ route('halaman_admin.pembimbing.create') }}">
                            <button class="btn btn-info">
                                Tambah Pembimbing
                            </button>
                        </a>
                    </div>
                </div>

                
            </div>
            <div class="row my-5"></div>
=======
                
            </div>
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
        </main> 


@endsection       
