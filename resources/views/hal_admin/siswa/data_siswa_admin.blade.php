@extends('hal_admin.layout_admin')

@section('konten') 
<<<<<<< HEAD
  
=======
 
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Siswa  </h2>
                <ol class="breadcrumb mb-4">
<<<<<<< HEAD
                    <li class="breadcrumb-item active">Dashboard Admin/Data Siswa  </li>
                </ol>
                <div class="row">               
                    <div class="col-12">         
                        <div class="card">       
=======
                    <li class="breadcrumb-item active">Dashboard/Data Siswa  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                         
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
                            <div class="card-header bg-success text-white text-center">
                                 <h5> Data Siswa   </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Berikut Data Siswa  :  </p>

                                <div class="table-responsive">
<<<<<<< HEAD
                                    <table class="table " id="datatables1">
                                        <thead>
                                            <tr>
                                                <td> Id </td>
                                                <td> Nomor Induk </td>
                                                <td> Nama Lengkap </td>
                                                <td> JK</td> 
                                                <td> No Telepon </td>   
                                                <td>id_user</td>
                                                <td>id_pembimbing</td>
                                                <td colspan="2"> Aksi </td>  
=======
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <td> nomor induk </td>
                                                <td> Nama Lengkap </td>
                                                <td> JK</td>
                                                <td> Jurusan </td>
                                                <td> No Telepon </td>   
                                                <td> Aksi </td>  
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
                                            </tr>    
                                        </thead>    

                                        <tbody>
<<<<<<< HEAD
                                            @foreach ($siswa as $item) 
                                                <tr>
                                                    <td>  {{ $item['id'] }} </td>
                                                    <td>  {{ $item['nomor_induk'] }}</td> 
                                                    <td>  {{ $item['nama_siswa'] }} </td> 
                                                    <td>  {{ $item['jk'] }} </td>   
                                                    <td> {{ $item['no_telp'] }}  </td> 
                                                    <td>  {{ $item['id_user'] }} </td>  
                                                    <td>  {{ $item['id_pembimbing'] }} </td>  
                                                    <td>
                                                        <a href="{{ route('halaman_admin.siswa.edit', $item->id) }}">
                                                            <button class="btn btn-warning">
                                                                Ubah 
                                                            </button> 
                                                        </a>
                                                    </td>
                                                    <td> 
                                                        <form action="{{ route('halaman_admin.siswa.destroy', $item->id) }}" method="POST">
                                                            @csrf 
                                                            <button class="btn btn-danger">
                                                                Hapus
                                                            </button>  
                                                        </form>
                                                    </td>
                                                </tr>  
                                            @endforeach
=======
                                            <tr>
                                                <td>  1 </td>
                                                <td> Andryo</td> 
                                                <td> Laki- Laki </td> 
                                                <td> Teknik </td>
                                                <td> 08808612921</td>  
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
                                                <td>  2 </td>
                                                <td> Kamil</td> 
                                                <td> Laki- Laki </td> 
                                                <td> Teknik </td>
                                                <td> 08808612922</td>  
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
                                                <td> Yudi</td> 
                                                <td> Laki- Laki </td> 
                                                <td> Teknik </td>
                                                <td> 08808612923</td>  
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
                <div class="mt-3">
                    <a href="{{ route('halaman_admin.siswa.create') }}">
                        <button class="btn btn-info">
                            Tambah Data Siswa
                        </button>
                    </a>
                </div>
 
            </div>

            <div class="row my-5"></div>
        </main> 

        
=======

                
            </div>
        </main> 

>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385

@endsection       
