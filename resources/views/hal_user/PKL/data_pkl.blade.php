@extends('hal_user.layout_user')

@section('konten') 
 
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data PKL </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/Data PKL</li>
                </ol>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                         
                            <div class="card-header bg-info text-white text-center">
                                 <h5> Data PKL </h5> 
                            </div> 
                            <div class="card-body">
                                <p> Berikut Data PKL Anda :  </p>
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
                                                {{-- <td> Aksi </td> --}}
                                            </tr>    
                                        </thead>    

                                        <tbody>
                                            <tr>
                                                <td>  1 </td>
                                                <td> SMKN 2 Bandung </td>
                                                <td> JL. Ciliwung </td>
                                                <td> 2024-03-01 </td>
                                                <td> 2024-04-30</td>
                                                <td> 
                                                    Andryo <br>
                                                    Kamil <br> 
                                                    yudi
                                                </td>
                                                <td> Tidak Disetujui </td>
                                                <td> Tidak </td>
                                                {{-- <td> ubah hapus </td> --}}
                                            </tr> 
                                            <tr>
                                                <td> 2 </td>
                                                <td> SMKN 2 Bandung</td>
                                                <td> JL. Ciliwung </td>
                                                <td> 2024-05-01 </td>
                                                <td> 2024-06-30 </td>
                                                <td> 
                                                    Andryo <br>
                                                    Kamil <br> 
                                                    yudi
                                                </td>
                                                <td> Disetujui  </td>
                                                <td> Berjalan </td>
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
