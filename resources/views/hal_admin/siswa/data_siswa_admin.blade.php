@extends('hal_admin.layout_admin')

@section('konten') 
  
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Siswa  </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Data Siswa  </li>
                </ol>
                <div class="row">               
                    <div class="col-12">         
                        <div class="card">       
                            <div class="card-header bg-success text-white text-center">
                                 <h5> Data Siswa   </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Berikut Data Siswa  :  </p>

                                <div class="table-responsive">
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
                                            </tr>    
                                        </thead>    

                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> 
                </div>
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

        

@endsection       
