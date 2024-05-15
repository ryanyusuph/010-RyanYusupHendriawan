@extends('hal_admin.layout_admin')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Siswa  </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/Data Siswa  </li>
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
                                    <table class="table " id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <td> nomor induk </td>
                                                <td> Nama Lengkap </td>
                                                <td> JK</td>
                                                <td> Jurusan </td>
                                                <td> No Telepon </td>   
                                                <td> Aksi </td>  
                                            </tr>    
                                        </thead>    

                                        <tbody>
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
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> 
                </div>

                
            </div>
        </main> 


@endsection       
