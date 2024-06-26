@extends('layout') 

@section('konten')
 
    
    <div id="hero">
        <h1  class="jumbotron"> Selamat Datang  </h1>
        <h4> Di Sistem Informasi Praktik Kerja Lapangan </h4>
 
    </div>


    <div class="container px-4 py-5" id="icon-grid">
        <h3 class="pb-2 border-bottom">Tentang Sistem Kami </h3>
     
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4 py-5">
            <div class="col d-flex align-items-start">
                <h1 class="mx-3"> 1) </h1>   
                <div>
                    <h4 class="fw-bold mb-0"> Daftar Sebagai User </h4>
                    <p aign="center"> User dapat daftar melalui laman pendaftaran berikut <a href="/daftar"> ini </a>.</p>
                </div>
            </div>    
            <div class="col d-flex align-items-start">
                <h1 class="mx-3"> 2) </h1>  
                <div>
                    <h4 class="fw-bold mb-0"> Pengajuan PKL  </h4>
                    <p>User sebagai perwakilan siswa, dapat melakukan pengajuan PKL.</p>
                </div>
            </div> 
            <div class="col d-flex align-items-start">
                <h1 class="mx-3"> 3) </h1>  
                <div>
                    <h4 class="fw-bold mb-0"> Pengajuan Siswa PKL  </h4>
                    <p>User sebagai perwakilan siswa, dapat mendaftarkan siswa yang akan PKL.</p>
                </div>
            </div> 
            <div class="col d-flex align-items-start">
                <h1 class="mx-3"> 4) </h1>  
                <div>
                    <h4 class="fw-bold mb-0"> Persetujuan PKL </h4>
                    <p>Admin PT. XYZ dapat melakukan persetujuan atau penolakan terhadap PKL yang diajukan.</p>
                </div>
            </div> 
            <div class="col d-flex align-items-start">
                <h1 class="mx-3"> 5) </h1>  
                <div>
                    <h4 class="fw-bold mb-0"> Penunjukan Pembimbing </h4>
                    <p>Apabila pengajuan PKL telah disetujui, admin dapat menunjuk pembimbing untuk membimbing siswa PKL.</p>
                </div>
            </div> 
            <div class="col d-flex align-items-start">
                <h1 class="mx-3"> 6) </h1>  <div>
                    <h4 class="fw-bold mb-0"> Cetak Sertifikat  </h4>
                    <p> Setelah masa PKL telah usai, admin dapat mencetak sertifikat berdasarkan data yang ada.</p>
                </div>
            </div> 
        </div>

        

      </div>
@endsection