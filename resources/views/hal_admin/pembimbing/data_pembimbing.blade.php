@extends('hal_admin.layout_admin')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data Pembimbing </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/Data Pembimbing  </li>
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
                                                <td> JK </td> 
                                                <td> No Telepon </td>   
                                                <td> Jabatan  </td>   
                                                <td> Aksi </td>
                                            </tr>    
                                        </thead>    

                                        <tbody>
                                            <tr>
                                                <td>  1 </td>
                                                <td> Sugeng</td> 
                                                <td> Laki- Laki </td>  
                                                <td> 022808612945</td> 
                                                <td> Marketing </td>
                                                <td> 
                                                    <a href="" >
                                                        <button class="btn btn-warning  ">
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
