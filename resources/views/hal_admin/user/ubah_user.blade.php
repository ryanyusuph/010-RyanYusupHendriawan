@extends('hal_admin.layout_admin')

@section('konten')  
  
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4"> Data User </h2>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin/Ubah User  </li>
                </ol>
                <div class="row mb-5"> 
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="card ">
                         
                            <div class="card-header bg-warning text-white text-center">
                                 <h5> Ubah Data User   </h5> 
                            </div> 

                            <div class="card-body">
                                
                                <p> Silahkan Masukan Data User yang baru</p> 

                                @if ($errors->any)
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }} </p>
                                    @endforeach
                                @endif 

                                <form action="{{ route('halaman_admin.user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="id_pembimbing" class="mt-2 mb-2">
                                                    ID User
                                                </label>
                                                <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" placeholder="ID user..." disabled value="{{ $user['id'] }}"> 
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_user" class="mt-2 mb-2">
                                                    Nama User 
                                                </label>
                                                <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User..." value="{{ $user['nama_user'] }} "> 
                                            </div> 
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="username" class="mt-2 mb-2">
                                                    Username
                                                </label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Username..." value="{{ $user['username'] }} "> 
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan" class="mt-2 mb-2">
                                                    Password
                                                </label>
                                                <input type="text" class="form-control" name="password" id="password" placeholder="Password..." value="{{ $user['password'] }}"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3"> 
                                            <button class="btn btn-warning" type="submit"> Ubah </button> 
                                        <a href="#">
                                            <button class="btn btn-danger" type="reset"> Hapus </button>
                                        </a>
                                    </div>

                                </form>    
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row mt-3 mb-5"></div> 
                
            </div>
            <div class="row my-5"></div>
        </main> 


@endsection        