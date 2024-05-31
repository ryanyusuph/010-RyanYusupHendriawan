@extends('hal_admin.layout_admin')

@section('konten') 
  
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Admin  </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Data Admin  </li>
                </ol>
                <div class="row">               
                    <div class="col-12">        
                        <div class="card">       
                            <div class="card-header bg-success text-white text-center">
                                 <h5> Data Admin   </h5> 
                            </div>  
                            <div class="card-body">
                                <p> Berikut Data Admin  :  </p>

                                <div class="table-responsive">
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <td> ID Admin </td>
                                                <td> Nama Admin </td>
                                                <td> Username</td>
                                                <td> Pasword </td> 
                                                <td colspan="2"> Aksi </td>  
                                            </tr>    
                                        </thead>    

                                        <tbody>

                                            @foreach ($admin as $item)
                                                 
                                                <tr>
                                                    <td>  {{ $item["id"] }} </td> 
                                                    <td>  {{ $item["nama_admin"] }} </td> 
                                                    <td>  {{ $item["username"] }} </td> 
                                                    <td>  {{ $item["password"] }} </td> 
                                                    <td>
                                                        <a href="/{{ $item["id"] }}/halUbahAdmin ">
                                                            <button class="btn btn-warning">
                                                                Ubah  
                                                            </button> 
                                                        </a>
                                                    </td>
                                                    <td>   
                                                            <form action="{{ route('halaman_admin.admin.destroy', $item->id) }}" method="POST">
                                                                @csrf 
                                                                <button class="btn btn-danger" type="submit">
                                                                    Hapus
                                                                </button> 
                                                            </form>
                                                        </a>
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
                    <a href="{{ route('halaman_admin.admin.create') }}">
                        <button class="btn btn-info">
                            Tambah Data Admin  
                        </button>
                    </a>
                </div>
 
            </div> 
            <div class="row my-5"></div>
        </main> 
 
@endsection       
