@extends('hal_admin.layout_admin')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data PKL </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Data PKL</li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Data PKL </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Berikut Seluruh Data PKL :  </p>

                                
                                <div class="table-responsive">
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <td>id_pkl </td>
                                                <td> Asal Sekolah </td>
                                                <td> Alamat Sekolah </td>
                                                <td> Tanggal Mulai </td>
                                                <td> Tanggai Selesai </td>
                                                <td> Siswa </td>
                                                <td> Status Persetujuan </td>
                                                <td> Status Aktif </td> 
                                                <td> Aksi </td>
                                            </tr>    
                                        </thead>    
                                        
                                        <tbody>
                                            
                                            @foreach ($pkl as $item) 
                                            <tr>
                                                <td> {{ $item["id"] }}  </td> 
                                                <td> {{ $item["asal_sekolah"]}}  </td>
                                                <td> {{ $item["alamat_sekolah"]}}  </td>
                                                <td> {{ $item["tgl_mulai"]}}  </td>
                                                <td> {{ $item["tgl_akhir"]}}  </td> 
                                                <td> {{ $item["id_user"]}}  </td>   
                                                <td>  </td>   
                                                <td>    </td>   
                                                <td> 
                                                    <a href="{{ route('halaman_admin.PKL.edit', $item->id) }}">
                                                        <button class="btn btn-sm btn-warning">
                                                            Ubah 
                                                        </button>   
                                                    </a>
                                                    <td>
                                                        <form action="{{ route('halaman_admin.PKL.destroy', $item->id) }}" method="POST"> 
                                                            @csrf
                                                        <button class="btn btn-sm btn-danger">
                                                            Hapus
                                                        </button> 
                                                    </form>
                                                    </td>
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
                    <a href="{{ route('halaman_admin.PKL.create') }}">
                        <button class="btn btn-info">
                            Tambah Data PKL
                        </button>
                    </a>
                </div>
                
            </div>
            <div class="row my-5"></div>
        </main> 


@endsection       
