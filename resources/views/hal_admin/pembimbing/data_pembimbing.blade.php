@extends('hal_admin.layout_admin')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Pembimbing </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Data Pembimbing  </li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">  
                         
                            <div class="card-header bg-success text-white text-center">
                                 <h5> Data Pembimbing  </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Berikut Data Pembimbing :  </p>
                                <div class="table-responsive"> 
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr> 
                                                <td> Id Pembimbing </td>
                                                <td> Nama Pembimbing </td> 
                                                <td> No Telepon </td>   
                                                <td> Jabatan  </td>   
                                                <td colspan="2"> Aksi </td>
                                            </tr>    
                                        </thead>    

                                        <tbody>
                                            @foreach ($pembimbing as $item)
                                               
                                            <tr>
                                                <td> {{ $item["id"] }} </td>
                                                <td> {{ $item["nama_pembimbing"] }}</td> 
                                                <td> {{ $item["no_telp_pembimbing"] }} </td>  
                                                <td> {{ $item["jabatan"] }}</td>  
                                                <td> 
                                                    <a href="{{ route('halaman_admin.pembimbing.edit', $item["id"] ) }}" >
                                                        <button class="btn btn-warning  ">
                                                            Ubah 
                                                        </button>  
                                                    </a>
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
                                             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

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
        </main> 


@endsection       
