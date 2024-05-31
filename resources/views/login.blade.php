@extends('layout') 

@section('konten')
<div class="container pt-4 pb-4">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 "> 
            <div class="card border-secondary">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12"> 
                                <h3 align="center" > Silahkan Login </h3>
                            </div> 
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 text-center">
                                <img src="{{ asset('image/login.png') }}" alt="gambar_login" width="220px" >
                            </div>
                            <div class="col-12 col-md-6">
                                {{-- <form acstion=""> --}}
                                    <div class="form-group">
                                        <label for="username" class="mt-3 mb-2">
                                            Username
                                        </label>
                                        <input type="text" class="form-control" name="username" id="username" autofocus> 
                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="mt-3 mb-2">
                                            Password
                                        </label>
                                        <input type="text" class="form-control" name="password" id="password"> 
                                    </div> 
                                    <div class="form-group mt-3">
                                        <a href="/halUser">
                                            {{-- !! hanya sementara, hanya sebagai pembeda href antara admin dan user  --}} 
                                            <button  class="btn btn-success"> Login (user) </button>
                                        </a>
                                        <a href="/halAdmin"> 
                                            {{-- !! hanya sementara, hanya sebagai pembeda href antara admin dan user  --}} 
                                            <button  class="btn btn-success"> Login (admin)</button> 
                                        </a> 

                                        <button type="reset" class="btn btn-danger"> Cancel </button> 
                                    </div> 
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
<<<<<<< HEAD
</div>
<div class="container pt-4 pb-4"></div>
=======
<div class="container pt-4 pb-4">
>>>>>>> 0c78da77cffe60ba95f498549dcb46b2f94e8385
@endsection